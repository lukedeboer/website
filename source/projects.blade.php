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
    <div class="mx-12 mt-2">PROJECTS</div>
    <x-container.large>
    
    {{-- here is our heading --}}
    
    <div><p class=" text-6xl md:text-8xl">FEATURED <br> PROJECTS</p></div>
    <div class="mt-10">
        <div class="mb-6"><p class="text-4xl md:text-6xl underline">Dressy Diego - COVID Safety Platform</p>
        <p class="mt-2">REACT NATIVE + NODE.JS + FIREBASE</p></div>
        <div class="mb-6"><p class="text-4xl md:text-6xl underline">Luigi's Food Ordering - Online Ordering</p>
        <p class="mt-2">LARAVEL - FULL STACK PROJECT</p>
        </div>
        <div class="mb-6"><p class="text-4xl md:text-6xl underline">Fast Food Violations - Data Processing</p>
        <p class="mt-2">PYTHON - NUMPY</p>
        </div>
        <div class="mb-6"><p class="text-4xl md:text-6xl underline">Weather App - UI DESIGNS</p>
            <p class="mt-2">BEHANCE</p>
            </div>

    </div>
    
       <div class="relative float-right w-28 h-10 bottom-80  z-50 transform rotate-90 underline"> <a href="http://localhost:3000/"> Home (x) </a></div>
    </x-container.large>
    </section>
@include('_partials/footer')
@endsection
