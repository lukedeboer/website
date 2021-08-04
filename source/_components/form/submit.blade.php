{{-- <button type="submit" {{ $attributes->merge(['class' => 'pl-5 pr-6 border-2 border-black dark:border-white flex space-x-1 items-center group hover:bg-black hover:text-white transition-colors']) }}>
    <span class="uppercase tracking-wide font-semibold">Send</span>
    <x-icon.arrow-right class="h-7 w-7 transform transition-transform group-hover:translate-x-1"/>
</button> --}}


<button type="submit" {{ $attributes->merge(['class' => 'inline-block uppercase font-semibold text-xl tracking-wider group animated-border']) }}>
    <div class="flex space-x-1 hover:space-x-3 items-center px-4 py-3">
      <span>Send</span>
      <x-icon.arrow-right class="h-6 w-6 stroke-4 transition-all ease-out group-hover:delay-250 hover:duration-[250]"></x-icon.arrow-right>
    </div>
  </button>
