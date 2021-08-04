{{-- commented out extends or else it will introduce navbar and footer to index --}}
@extends('_layouts.main')


@section('body')
<div class="z-50 absolute m-10">
  <svg width="50" height="50" viewBox="0 0 300 300" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path fill-rule="evenodd" clip-rule="evenodd" d="M290 10H10V290H290V10ZM0 0V300H300V0H0Z" fill="white"/>
    <path d="M67.8701 237H133.52L136.64 222.05H88.4101L104.53 146.65H87.1101L67.8701 237Z" fill="White"/>
    <path d="M24.8701 274H90.5201L93.6401 259.05H45.4101L61.5301 183.65H44.1101L24.8701 274Z" fill="White"/>
    <path d="M116.87 200H182.52L185.64 185.05H137.41L153.53 109.65H136.11L116.87 200Z" fill="White"/>
    </svg>
    

</div>
<x-container.wide class="relative z-40">
 <svg class="absolute z-50 left-96">
  <rect x="400" y="100" width="1200" height="1200"
  style="fill:none;stroke:rgb(255, 255, 255);stroke-width:10" />
</svg>
</x-container.wide>
<canvas class="relative z-0" id="stage"></canvas>
<nav hidden class="mainNav">
  <ul class="mainNav__list">
    <li class="mainNav__el">
      <a href="#" class="mainNav__link">About</a>
    </li>
    <li class="mainNav__el">
      <a href="#" class="mainNav__link">Contact</a>
    </li>
    <li class="mainNav__el">
      <a href="#" class="mainNav__link">Projects</a>
    </li>
   
  </ul>
</nav>


{{-- <script src="assets/build/js/main.js"></script> --}}
</body>

@endsection
