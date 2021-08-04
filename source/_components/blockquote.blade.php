<blockquote {{ $attributes->filter(fn ($value, $key) => $key == 'style' || $key == 'class') }}>
  <div class="max-w-4xl mx-auto text-center text-lg md:text-4xl leading-relaxed md:leading-relaxed font-semibold">
    <p>{{ $slot }}</p>
  </div>
  <footer class="mt-12 text-center">
      <div class="uppercase tracking-wider text-sm md:text-base font-bold mb-2">{{ $author }}</div>
      <div class="font-medium ">{{ $company }}</div>
  </footer>
</blockquote>
