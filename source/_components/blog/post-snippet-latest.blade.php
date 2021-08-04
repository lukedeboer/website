@props(['isWide' => false, 'post'])
<a href="{{ $post->getURL() }}" class="relative h-56 xs:h-80 flex align-bottom group">
  <div class="absolute inset-0 z-[-1] transition-all group-hover:-m-2 group-hover:shadow-2xl">
    <div class="relative w-full h-full">
      <div class="gradient-fade w-full h-full"></div>
      <div class="absolute inset-0 z-[-1]">
        <img class="h-full w-full object-cover" src="/assets/media/{{ $post->cover_image }}" alt="">
      </div>
    </div>
  </div>
  <div class="text-white p-4 md:p-6 flex flex-col justify-end">
    <p class="text-xl font-semibold">{{ $post->title }}</p>
    {{-- <a href="blog/author/{{ Illuminate\Support\Str::slug($post->author) }}" class="hover:underline">
      <p class="text-sm font-medium mb-0.5">
          {{ $post->author }}
        </p>
    </a> --}}
    <div class="flex space-x-1 text-sm text-gray-300">
      <time datetime="{{ $post->date }}">
          {{ $post->getDate()->format('F j, Y')}}
      </time>
      <span aria-hidden="true">
          &middot;
      </span>
      <span>
          {{ $post->length }} min read
      </span>
    </div> 
  </div>
</a>

        {{-- <p class="text-sm font-medium text-gray-700 dark:text-gray-200">
        @foreach ($post->categories as $category)
          <a href="blog/category/{{ $category }}" class="hover:underline">{{ ucwords($category) }}</a>@if ($loop != $loop->last)<span>, </span>@endif
        @endforeach
      </p>  --}}

              {{-- <p class="mt-3 text-base text-gray-500">
        {!! $post->getExcerpt($isWide ? 400 : 200) !!}
      </p> --}}
