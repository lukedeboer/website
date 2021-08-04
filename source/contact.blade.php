{{-- commented out extends or else it will introduce navbar and footer to index --}}
@extends('_layouts.main')

@section('body')

      
    
    
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
    <div class="mx-12 mt-2">CONTACT</div>
    <x-container.large>
    
    {{-- here is our heading --}}
    <div class="hidden md:block float-right"><p class="w-3/4 float-right">I really love working with brands and creatives. Let's do this! <br> 📤 Slide into my dms 📤 </p></div>
    <form class="mt-10 relative z-0 ">
        <div class="mb-0"><label class="mobile:text-4xl md:text-8xl lg:text-10xl">I AM</label>
       </div>
        <div class="mb-0"><input type="text" placeholder="NAME" class="mobile:text-4xl md:text-8xl lg:text-10xl text-gray-600 outline-none"/>
      
        </div>
        <div class="mb-0"><p class="mobile:text-4xl md:text-8xl lg:text-10xl">MY EMAIL IS</p>
        
        </div>
        <div class="mb-0"><input type="text" placeholder="EMAIL" class="mobile:text-4xl md:text-8xl lg:text-10xl text-gray-600 outline-none"/>
      
        </div>

        <div class="md:mb-12"><p class="mobile:text-4xl lg:text-10xl md:text-8xl">I SEND U</p>
        
        </div>

        <div class="md:mb-12"><span type="text" contenteditable data-placeholder="WORDS" class="mobile:text-4xl md:text-8xl lg:text-10xl text-gray-400 outline-none inline-block h-full w-5/6" id="editMe"> </span>
      
        </div>
        <div>
        <input type="submit" class="mobile:text-4xl md:text-8xl lg:text-10xl bg-transparent"  value="NOW">   
       </div>
        </form>
    
        <div class="relative float-right w-28 h-10 mobile:bottom-40 mobile:left-10 sm:left-0 md:bottom-144  z-50 transform rotate-90 underline "> <a href="http://localhost:3000/"> Home (x) </a></div>

    </x-container.large>

    
    </section>


<script>


const ele = document.getElementById('editMe');
    
// Get the placeholder attribute
const placeholder = ele.getAttribute('data-placeholder');

console.log(placeholder)
var result = ele.innerHTML;
console.log(result)
ele.innerHTML = placeholder;


ele.addEventListener('focus', function(e) {
    const value = e.target.innerHTML;
    value === placeholder && (e.target.innerHTML = '');
});

ele.addEventListener('blurÇ', function(e) {
    const value = e.target.innerHTML;
    value === '' && (e.target.innerHTML = placeholder);
});




</script>


@include('_partials/footer')
@endsection
