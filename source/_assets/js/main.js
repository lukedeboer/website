//import three.js and cannon js
//renderer
import * as THREE from 'three';
//Physics engine
import CANNON from 'cannon';


// declare our global variables
var scene, clock, camera, renderer, loader, world, mouse, raycaster;
//loading font file
var fontURL = "assets/build/js/helvetiker_bold.typeface.json";
const margin = 6;
const totalMass = 1;
//access our nav items
var $navItems = document.querySelectorAll(".mainNav a");
//calculating offset
const offset = $navItems.length * margin * 0.5;
//The force that the letters will get yeeted
const force = 50;
const aspect = window.innerWidth / window.innerHeight;
const distance = 15;
var $container = document.getElementById("stage");
//rendering three js scene
renderer = new THREE.WebGLRenderer({
    antialias: true,
    canvas: $container
});
    renderer.setClearColor(0x0000);
    renderer.setSize(window.innerWidth, window.innerHeight);
    renderer.setPixelRatio(window.devicePixelRatio);
    renderer.shadowMap.enabled = true;
    

//call our initialisers for cannon and three.js and animate function
initThree();
initCannon();
animate();
//creating our words array to store words
const wordsStorage = [];
//initialise three and cannon 
function initThree(){
    scene = new THREE.Scene();
    loader = new THREE.FontLoader();
    scene.fog = new THREE.Fog(0x202533, -1, 100);
    clock = new THREE.Clock();
   
    
    console.log("initThree function should only print once")

    
    //setting up our camera
    camera = new THREE.OrthographicCamera(-distance * aspect, distance * aspect, distance, -distance, -1, 100);

    camera.position.set(-10, 10, 10);
    camera.lookAt(new THREE.Vector3());

     mouse = new THREE.Vector2();
     raycaster = new THREE.Raycaster();
    //bind events 
    document.addEventListener("click", function(){ onClick();});
    window.addEventListener("mousemove", function(e){onMouseMove(e);});



    //loading our fonts
    loader.load(fontURL, function (f){
    wordLoader(f);

    })

    function wordLoader(f){
       
      // These options give us a more candy-ish render on the font
      const fontOption = {
        font: f,
        size: 3,
        height: 0.4,
        curveSegments: 24,
        bevelEnabled: true,
        bevelThickness: 0.19,
        bevelSize: 0.01,
        bevelOffset: 0,
        bevelSegments: 10
      };

      Array.from($navItems).reverse()
      .forEach(function ($item, i){
          //getting the text
        const { innerText } = $item;
       const words = new THREE.Group();
       words.letterOff = 0;
        //creating the ground for the words to sit on.
       words.ground = new CANNON.Body({
           mass: 0,
           shape: new CANNON.Box(new CANNON.Vec3(50,0.1,50)),
           position: new CANNON.Vec3(0, i * margin - offset, 0)
       });
       //adding the ground to the physics world
       world.addBody(words.ground);


        //parsing each letter to generate a mesh

        Array.from(innerText).forEach(function (letter, j){
            const material = new THREE.MeshPhongMaterial({color: 0xffffff});
            const geometry = new THREE.TextBufferGeometry(letter, fontOption);

            geometry.computeBoundingBox();
            geometry.computeBoundingSphere();

            const mesh = new THREE.Mesh(geometry, material);
            mesh.size = mesh.geometry.boundingBox.getSize(new THREE.Vector3());

            //use accuumaltor to get the offset of each letter
            words.letterOff += mesh.size.x;
            //create the shape of our letter
            const box = new CANNON.Box(new CANNON.Vec3().copy(mesh.size).scale(0.5));
            //attach the body directly to the mesh
            mesh.body = new CANNON.Body({
                //we divide the total mass by the length of the string to have a common weight for each word
                mass: totalMass / innerText.length,
                position: new CANNON.Vec3(words.letterOff, getOffsetY(i), 0)
            });
            // add shape to the body and offset it to match of the center of our mesh
            const { center } = mesh.geometry.boundingSphere;
            mesh.body.addShape(box, new CANNON.Vec3(center.x, center.y, center.z));
            //add body to our world
            world.addBody(mesh.body);
            words.add(mesh);

        });
        // Recenter each body based on the whole string.
        words.children.forEach(letter => {
            letter.body.position.x -= letter.size.x + words.letterOff * 0.5;
          });
        
        wordsStorage.push(words);
        scene.add(words);
      });


    }

    //setting up lighting
    const ambientLight = new THREE.AmbientLight(0xcccccc);
    scene.add(ambientLight);

    const foreLight = new THREE.DirectionalLight(0xffffff, 0.1);
    foreLight.position.set(5,5, 20);
    scene.add(foreLight);

    const backLight = new THREE.DirectionalLight(0xffffff, 0.5);
    backLight.position.set(-5, -5, -5);
    scene.add(backLight);


    

    
   

}
function initCannon(){
    world = new CANNON.World();
    world.gravity.set(0,-50,0);

}
//here is our animation function
 function animate() {
        requestAnimationFrame( animate );
        updatePhysics();
        render();
   
        }
    
    //here is our renderer
    function render(){
    renderer.render(scene,camera);
    }

     function updatePhysics() {
        //positioning letters
        cannonPosition();

       //step the physics world

       world.step(1/60);
    
    }

    //positioning letters

   function cannonPosition(){
    if (!wordsStorage) return;

    wordsStorage.forEach((word, j) =>{
    
        for (let i = 0; i < word.children.length; i++) {
            const letter = word.children[i];
    
            letter.position.copy(letter.body.position);
            letter.quaternion.copy(letter.body.quaternion);


    }});


    }

  function  getOffsetY(i) {
        return ($navItems.length - i - 1) * margin - offset;
      }
    //resize handler

    window.addEventListener("resize", () => {
        onResize();
      });
    //handle all the resizing logic 
    function onResize(){
        console.log("we are resizing")
        camera.aspect = window.innerWidth / window.innerHeight;
        camera.top = distance;
        camera.right = distance * camera.aspect;
        camera.bottom = -distance;
        camera.left = -distance * camera.aspect;
        camera.updateProjectionMatrix();
        renderer.setSize(window.innerWidth, window.innerHeight);

    }


   function onMouseMove(event) {
        // We set the normalized coordinate of the mouse
        mouse.x = (event.clientX / window.innerWidth) * 2 - 1;
        mouse.y = -(event.clientY / window.innerHeight) * 2 + 1;
    }


    function onClick(){
        //update the picking ray with the camera and mouse position
        raycaster.setFromCamera(mouse, camera);

        //calculate the objects intersecting the picking ray
        //it will return an array with intersecting objects

        const intersects = raycaster.intersectObjects(
            scene.children,
            true
        );

        console.log(intersects);

        if (intersects.length > 0){
            const obj = intersects[0];
            const {object, face} = obj;

            if (!object.isMesh) return;

            const impulse = new THREE.Vector3().copy(face.normal).negate().multiplyScalar(force);
            // location.reload();
            console.log(object.id);

           
            //what page to go to depending on what letter of which word was yeeted
            if (object.id > 18 && object.id < 27){
                console.log("going to Projects")
                setTimeout(function(){ window.location.href = "/projects";; }, 1000);
                
            }

            if (object.id > 27 && object.id < 35){
                console.log("contact");
                setTimeout(function(){ window.location.href = "/contact";; }, 1000);
            }

            if (object.id > 35 && object.id < 41){
                console.log("About")
                setTimeout(function(){ window.location.href = "/about";; }, 1000);
            }



         

            
            //we loop through each letter of each word and then appply force to make it fly
            wordsStorage.forEach(function(word, i){
                word.children.forEach(letter => {
                    const { body } = letter;

                    if (letter !== object) return;


                    //we apply the vector impulse on the base of our body
                    body.applyLocalImpulse(impulse, new CANNON.Vec3());

                    
                });
            });
        }
}

    
    