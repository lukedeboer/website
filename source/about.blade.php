{{-- commented out extends or else it will introduce navbar and footer to index --}}
@extends('_layouts.main')





@section('body')



{{-- <div class="z-50 absolute mobile:top-10 sm:top-0 mobile:flex mobile:justify-center sm:absolute sm:m-10 sm:w-auto sm:h-auto mobile:w-full mobile:h-full">
  <div>
      <a href = "/"><svg width="50" height="50" viewBox="0 0 300 300" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M290 10H10V290H290V10ZM0 0V300H300V0H0Z" fill="black"/>
        <path d="M67.8701 237H133.52L136.64 222.05H88.4101L104.53 146.65H87.1101L67.8701 237Z" fill="black"/>
        <path d="M24.8701 274H90.5201L93.6401 259.05H45.4101L61.5301 183.65H44.1101L24.8701 274Z" fill="black"/>
        <path d="M116.87 200H182.52L185.64 185.05H137.41L153.53 109.65H136.11L116.87 200Z" fill="black"/>
        </svg>
        </a>
    </div>
  </div> --}}


{{-- <section>
<div class="z-50 absolute mobile:top-10 sm:top-0 mobile:flex mobile:justify-center sm:absolute sm:m-10 sm:w-auto sm:h-auto mobile:w-full mobile:h-full">
<div>
    <a href = "/"><svg width="50" height="50" viewBox="0 0 300 300" fill="none" xmlns="http://www.w3.org/2000/svg">
      <path fill-rule="evenodd" clip-rule="evenodd" d="M290 10H10V290H290V10ZM0 0V300H300V0H0Z" fill="white"/>
      <path d="M67.8701 237H133.52L136.64 222.05H88.4101L104.53 146.65H87.1101L67.8701 237Z" fill="white"/>
      <path d="M24.8701 274H90.5201L93.6401 259.05H45.4101L61.5301 183.65H44.1101L24.8701 274Z" fill="White"/>
      <path d="M116.87 200H182.52L185.64 185.05H137.41L153.53 109.65H136.11L116.87 200Z" fill="White"/>
      </svg>
      </a>
  </div>
</div> --}}
{{-- this is our hero intro area for eaach page.  --}}
{{-- <x-container.wide class="bg-black w-screen h-screen relative z-0"> <x-container class="text-center"> <div class="mobile:mt-60 xs:mt-80 sm:mt-80"><span class="text-white mobile:text-5xl sm:text-6xl xl:text-8xl font-serif"> I design digital experiences so that you don’t have to</span><span class="text-red-500 text-4xl sm:text-5xl xl:text-8xl">.</span></div></x-container></x-container.wide> --}}
{{-- <x-container.wide class="bg-black w-screen h-screen relative z-0 pt-60">
  <x-container class="text-center text-4xl bg-black relative z-10 bg-opacity-40 mt-10"> --}}

{{-- 
  <div><span class="text-yellow-300">About</span> <span class="text-white">About</span> <span class="text-white">About</span> <span class="text-red-700">About</span></div>
  <div><span class="text-white">About</span> <span class="text-white">About</span> <span class="text-white">About</span> <span class="text-white">About</span></div>
    <div><span class="text-white">About</span> <span class="text-white">About</span> <span class="text-white">About</span> <span class="text-white">About</span></div>
    <div><span class="text-white">About</span> <span class="text-white">About</span> <span class="text-white">About</span> <span class="text-white">About</span></div>
    <div><span class="text-white">About</span> <span class="text-white">About</span> <span class="text-white">About</span> <span class="text-white">About</span></div>

  
   --}}
  {{-- </x-container>
  
  <div class="hidden sm:block sm:relative z-0 text-white text-8xl top-60"> <p>hello, I'm Luke.</p></div>

  <div class="hidden md:hidden lg:block lg:relative z-0 bottom-156 md:pt-20 lg:pt-10 text-white text-sm float-right w-1/3 right-10 font-mono">
     <p>I design digital experiences and build mobile apps. I believe in mixing engineering with creativity. I also love working with brands to materialise big ideas.
       Boring is a waste of pixels.</p></div>

</x-container.wide> --}}

{{-- <div class="relative z-50 bottom-200 left-10 float-left w-10 h-10 pt-10"><p class="text-white text-5xl underline transform rotate-90">About</p></div>
<div class="relative z-50 bottom-60  float-left w-10 h-10"><p class="text-white text-5xl underline transform rotate-90">Clients</p></div>

<div class="relative z-50 bottom-156  float-right right-10 w-10 h-10 pt-10"><p class="text-white text-5xl underline transform -rotate-90">Projects</p></div>
<div class="relative z-50 bottom-32  float-right w-10 h-10"><p class="text-white text-5xl underline transform -rotate-90">Contact</p></div> --}}
{{-- </section> --}}
 
<section>
<x-container.wide class="mt-10">
   <div> <div class="grid grid-cols-3 gap-2">
    <div class="text-left mobile:text-xs sm:text-base">Luke de Boer</div>
   <div class="text-center mobile:text-xs sm:text-base">Web Developer</div>
   <div class="text-right mobile:text-xs sm:text-base">Gold Coast</div>

   </div>
   </div>
    <svg class="w-full h-2">
        <line x1="0" y1="0" x2="3000" y2="0" style="stroke:rgb(0,0,0);stroke-width:8" />
      </svg>
      
</x-container.wide>
  {{-- here is our sub heading --}}
<div class="mx-12 mt-2">ABOUT ME</div>
<x-container.large>

{{-- here is our heading --}}

<div class="block sm:hidden text-center">home(x)</div>
<div class="lg:ml-40 my-10 sm:my-40 inline-flex z-20">

  <div class="hidden sm:relative sm:block text-10xl bottom-12 right-10">*</div><p class="text-2xl md:text-2xl sm:pl-10 xl:w-3/4 md:w-full relative z-30">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque error velit consequuntur illo hic deserunt.
   Natus assumenda provident sed, vero veritatis vel mollitia maiores eos, ea, eveniet saepe necessitatibus harum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat quisquam laborum exercitationem repudiandae, 
   blanditiis accusantium nostrum ad dicta expedita ex quae velit necessitatibus aliquam explicabo repellat vitae vel quo illum.</p></div>

   <div class="hidden sm:block relative sm:float-right w-28 h-10 bottom-80 z-50 transform xs:rotate-90 underline  sm:ml-0"> <a href="http://localhost:3000/"> Home (x) </a></div>

  
</x-container.large>

</section>




<section>

  <x-container.wide class="mt-10">
    <div> <div class="grid grid-cols-3 gap-2">
     <div class="text-left mobile:text-xs sm:text-base">Luke de Boer</div>
    <div class="text-center mobile:text-xs sm:text-base">Web Developer</div>
    <div class="text-right mobile:text-xs sm:text-base">Gold Coast</div>
 
    </div>
    </div>
     <svg class="w-full h-2">
         <line x1="0" y1="0" x2="3000" y2="0" style="stroke:rgb(0,0,0);stroke-width:8" />
       </svg>
       
 </x-container.wide>
  
  <div class="mx-12 mt-2">INTERESTS</div>

 





</section>
{{-- 
 <section>

  <x-container.wide class="mt-10">
    <div> <div class="grid grid-cols-3 gap-2">
     <div class="text-left mobile:text-xs sm:text-base">Luke de Boer</div>
    <div class="text-center mobile:text-xs sm:text-base">Web Developer</div>
    <div class="text-right mobile:text-xs sm:text-base">Gold Coast</div>
 
    </div>
    </div>
     <svg class="w-full h-2">
         <line x1="0" y1="0" x2="3000" y2="0" style="stroke:rgb(0,0,0);stroke-width:8" />
       </svg>
       
 </x-container.wide>
  
  <div class="mx-12 mt-2">ABOUT</div>


    <div class="grid grid-cols-1 grid-rows-1 md:grid-cols-5">
    <div class="md:col-span-4">
    <div><p class="mobile:text-6xl sm:text-8xl">SO WHAT NOW?</p></div>

    <div class="mt-4"><p class="text-2xl">Look, I could drone on about what languages I can write in,
       what frameworks I’m experienced in and how many unit tests I’ve written.
       But that really doesn’t make me any different to the thousands of young technologists you
      have a pick of.</p></div>

      <div class="mt-4"><p class="text-4xl">OKAY, SO WHY AM I HERE?</p></div>

      <div class="md:w-3/4 mt-4"><p class="text-2xl">Good question. I want this website to convince you that my creativity
         in leveraging technologies is my strength.
         I also want it to act as an extension of my own personality and interests.
         This is my domain of complete creative control. </p></div>
        <div class="block xl:hidden mb-4">
        <div class="mt-10"><p class="mobile:text-4xl sm:text-8xl">Get in Touch</p></div>
        <div class="mobile:text-md sm:text-2xl h-10 grid lg:grid-cols-2 grid-cols-1 grid-rows-2 gap-16 xl:mb-0 sm:mb-8">
          <div>
          <li>Luke@mk1studio.com.au</li>
          <li>0457700080</li>
        </div>
        
</div>
      </div>
      <div class="block xl:hidden">
         <div class="md:w-4/4 mt-1">
          <svg class="w-full h-2">
            <line x1="0" y1="0" x2="3000" y2="0" style="stroke:rgb(0,0,0);stroke-width:34" />
          </svg>
        </div>
        <div class="md:w-4/4 mt-1">
          <svg class="w-full h-2">
            <line x1="0" y1="0" x2="3000" y2="0" style="stroke:rgb(0,0,0);stroke-width:34" />
          </svg>
        
        </div>
        <div class="md:w-4/4 mt-1">
          <svg class="w-full h-2">
            <line x1="0" y1="0" x2="3000" y2="0" style="stroke:rgb(0,0,0);stroke-width:34" />
          </svg>
        
        </div>
        <div class="md:w-4/4 mt-1">
          <svg class="w-full h-2">
            <line x1="0" y1="0" x2="3000" y2="0" style="stroke:rgb(0,0,0);stroke-width:34" />
          </svg>
        
        </div>
        <div class="md:w-4/4 mt-1">
          <svg class="w-full h-2">
            <line x1="0" y1="0" x2="3000" y2="0" style="stroke:rgb(0,0,0);stroke-width:34" />
          </svg>
        
        </div>
        <div class="mobile:hidden sm:block md:w-4/4 mt-1">
          <svg class="w-full h-2">
            <line x1="0" y1="0" x2="3000" y2="0" style="stroke:rgb(0,0,0);stroke-width:34" />
          </svg>
        
        </div>
        <div class="mobile:hidden sm:block md:w-4/4 mt-1">
          <svg class="w-full h-2">
            <line x1="0" y1="0" x2="3000" y2="0" style="stroke:rgb(0,0,0);stroke-width:34" />
          </svg>
        
        </div>
        <div class="mobile:hidden sm:block md:w-4/4 mt-1">
          <svg class="w-full h-2">
            <line x1="0" y1="0" x2="3000" y2="0" style="stroke:rgb(0,0,0);stroke-width:34" />
          </svg>
        
        </div>
        <div class="mobile:hidden sm:block md:w-4/4 mt-1">
          <svg class="w-full h-2">
            <line x1="0" y1="0" x2="3000" y2="0" style="stroke:rgb(0,0,0);stroke-width:34" />
          </svg>
        
        </div>
        </div>
        </div>
        </div>
        </div>


<div class="mt-10 hidden xl:col-span-1 xl:block max-w-sm">
  <div>
  <div><p class="text-2xl font-bold md:hidden family-mono">MY DETAILS</p></div>
  <div class="grid grid-cols-5 gap-0">
    <div class="text-left col-span-1 font-mono w-4">@</div>
    <div class="text-right col-span-4 font-mono">luke@mk1studio.com.au</div>
  </div>
  <svg class="w-full h-1">
    <line x1="0" y1="0" x2="3000" y2="0" style="stroke:rgb(0,0,0);stroke-width:4" />
  </svg>
  <div class="grid grid-cols-3 gap-2">
    <div class="text-left col-span-1 font-mono">PH</div>
    <div class="text-right col-span-2 font-mono">0457700080</div>
  </div>
  <svg class="w-full h-1">
    <line x1="0" y1="0" x2="3000" y2="0" style="stroke:rgb(0,0,0);stroke-width:4" />
  </svg>
  <div class="grid grid-cols-3 gap-2">
    <div class="text-left col-span-1 font-mono">Github</div>
    <div class="text-right col-span-2 font-mono">lukedeboer</div>
  </div>
  <svg class="w-full h-1">
    <line x1="0" y1="0" x2="3000" y2="0" style="stroke:rgb(0,0,0);stroke-width:4" />
  </svg>
  <div class="grid grid-cols-3 gap-2"> 
    <div class="text-left col-span-1 font-mono">Behance</div>
    <div class="text-right col-span-2 font-mono">Luke de Boer</div>
  </div>
  <svg class="w-full h-1">
    <line x1="0" y1="0" x2="3000" y2="0" style="stroke:rgb(0,0,0);stroke-width:4" />
  </svg>
  </div>
  <p class="font-serif font-bold text-5xl text-center pt-4">&uarr;</p>
  <div class="hidden lg:flex lg:justify-center lg:pt-0"><p class="text-xl text-center">IF YOU ARE INTERESTED IN MY CODE CHECK OUT MY GITHUB.</p></div>
</div>


  </x-container.large>

</section> --}} 


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js">
</script>


<script>
var camera, scene, renderer;
var image;
var div;

init();
animate();

//add textureloader

function init() {

   div = document.getElementById("target");
   console.log(div);
   console.log(div.clientWidth);
   console.log(div.clientHeight);
   

  renderer = new THREE.WebGLRenderer( {alpha: true});
	renderer.setSize(div.clientWidth, div.clientWidth); //handle pixel density stuff (currently being set in CSS
  // renderer.setPixelRatio( window.devicePixelRatio );
   renderer.setPixelRatio(2);
  
  
  // console.log(window.devicePixelRatio );
   
	div.appendChild( renderer.domElement );


	scene = new THREE.Scene();
  camera = new THREE.OrthographicCamera( -10, 10, 10,  -10, - 10, 10); 
  
	// camera.position.set( 0, 0, 0 );


	// controls = new THREE.OrbitControls( camera, document.getElementById("controller") );
	// controls.minDistance = 1;
    // controls.enablePan = false;
  // controls.enableZoom = false;
  // controls.minPolarAngle = 0;

    // image = document.createElement( 'img' );
   
  // document.body.appendChild( image );
  
//       image2 = document.createElement( 'img' );
   
//   document.body.appendChild( image2 );


    // var texture = new THREE.Texture( image );
  var texture = new THREE.TextureLoader().load( 'https://s33.postimg.cc/zaty10vot/out.png' );
    var texture2 = new THREE.TextureLoader().load( 'https://s33.postimg.cc/x69kzy9hp/middle.png' );
  // var texture = new THREE.SVGLoader().load( 'https://s3-us-west-2.amazonaws.com/s.cdpn.io/39255/face.svg' );
  // texture.anisotropy = renderer.capabilities.getMaxAnisotropy();
  // texture.anisotropy = renderer.maxAnisotropy;
  // texture.magFilter = THREE.NearestFilter;
// texture.minFilter = THREE.LinearMipMapLinearFilter;
  
    // var texture2 = new THREE.Texture( image2 );
  
//     image.addEventListener( 'load', function ( event ) { texture.needsUpdate = true; } );
  
//       image2.addEventListener( 'load', function ( event ) { texture2.needsUpdate = true; } );

	var material = new THREE.MeshBasicMaterial( {
		map: texture
	} );
  
  	var material2 = new THREE.MeshBasicMaterial( {
		map: texture2
	} );
  material.transparent = true;
  material2.transparent = true;
    // material2.opacity = 0.5;
     // material.opacity = 0.5;
  
//   material2.map.transparent = true;
//   material2.map.opacity = 0.5;

	var geometry = new THREE.SphereGeometry(9.98, 50, 50 );
  mesh = new THREE.Mesh( geometry, material);
var geometry2 = new THREE.SphereGeometry( 10, 50, 50 );
   mesh2 = new THREE.Mesh( geometry2, material2);
	// scene.add( mesh );
   mesh2.rotation.y= -Math.PI/2;
    mesh.rotation.y= -Math.PI/2;
  scene.add( mesh2 );
  	scene.add( mesh );
}

function animate() {
    console.log("hello")
	requestAnimationFrame( animate );
	render();
}

function render() {
	renderer.render( scene, camera );
  mesh2.rotation.y -=0.0009;
   mesh.rotation.y +=0.0009;
}

// image.crossOrigin = "anonymous";
// image2.crossOrigin = "";
// image.src = 'http://maxim.is/test/outer.svg';
// image2.src = 'https://s33.postimg.cc/rourh7anz/tester.png';
// image.src = 'https://s33.postimg.cc/kvuekp6xb/Artboard.png';

Math.radians = function(degrees) {
  return degrees * Math.PI / 180;
};

 var offset = $( "canvas" ).offset();

$( "old" ).on( "mousemove", function() {
  // pos = ((360*(event.pageX - window.innerWidth/2)/window.innerWidth)* Math.PI / 180) - Math.PI/2;
    pos = (((360*(event.pageX - window.innerWidth/2)/window.innerWidth)* Math.PI / 180)/2) - Math.PI/2;
  
   pos2 = ((360*(event.pageY - window.innerHeight/8)/window.innerHeight)* Math.PI / 180) - Math.PI/2;
  // pos = (event.pageX / 2 / window.innerWidth) - 0.5;
  // mesh.rotation.set(0, pos, 0); //add parallax here
 
  // mesh2.material.map.offset.set(-pos, 0);

  // mesh.material.map.offset.set(-pos/2, 0);

  mesh2.rotation.y=-pos - Math.PI;
    mesh.rotation.y=pos;
  // mesh2.rotation.x=-pos2;
   mesh2.rotation.x=pos2/10;
   mesh.rotation.x=pos2/10;
  
  
   // mesh.rotation.z=10;

});

//  $(document).on("mousemove touchmove touchstart", function( e ) {

//         e.preventDefault();

//         var touchstart = e.type === 'touchstart' || e.type === 'touchmove',
//             e = touchstart ? e.originalEvent : e,
//             pageX = touchstart ? e.targetTouches[0].pageX : e.pageX,
//             pageY = touchstart ? e.targetTouches[0].pageY : e.pageY;

     
//     pos = (((360*(event.pageX - window.innerWidth/2)/window.innerWidth)* Math.PI / 180)/2) - Math.PI/2;
  
//    pos2 = ((360*(event.pageY - window.innerHeight/8)/window.innerHeight)* Math.PI / 180) - Math.PI/2;
     
//    mesh2.rotation.y=-pos - Math.PI;
//     mesh.rotation.y=pos;

//    mesh2.rotation.x=pos2/10;
//    mesh.rotation.x=pos2/10;
//  });




window.addEventListener("resize", () => {
        onResize();
      });
    //handle all the resizing logic 
    function onResize(){
        console.log("we are resizing")
        renderer.setSize(div.clientWidth, div.clientWidth);

    }



</script>





@include('_partials/footer')
@endsection
