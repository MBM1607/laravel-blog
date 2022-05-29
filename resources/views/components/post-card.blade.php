@props(['post'])

<article
  {{ $attributes->merge([
      'class' =>
          'rounded-xl border border-black border-opacity-0 transition-colors duration-300 hover:border-opacity-5 hover:bg-gray-100',
  ]) }}
>
  <div class="py-6 px-5">
    <div>
      <img
        src="/images/illustration-1.png"
        alt="Blog Post illustration"
        class="rounded-xl"
      >
      {{-- TODO --}}
    </div>

    <div class="mt-8 flex flex-col justify-between">
      <header>
        <div class="space-x-2">
          <x-category-button :category="$post->category" />
        </div>

        <div class="mt-4">
          <h1 class="text-3xl">
            <a href='/posts/{{ $post->slug }}'>
              {{ $post->title }}
            </a>
          </h1>

          <span class="mt-2 block text-xs text-gray-400">
            Published
            <time>
              {{ $post->created_at->diffForHumans() }}
            </time>
          </span>
        </div>
      </header>

      <div class="mt-4 text-sm">
        <p>
          {{ $post->excerpt }}
        </p>
      </div>

      <footer class="mt-8 flex items-center justify-between">
        <div class="flex items-center text-sm">
          <img
            src="/images/lary-avatar.svg"
            alt="Lary avatar"
          >
          <div class="ml-3">
            <h5 class="font-bold">
              <a href='authors/{{ $post->author->slug }}'>
                {{ $post->author->name }}
              </a>
            </h5>
          </div>
        </div>

        <div>
          <a
            href="/posts/{{ $post->slug }}"
            class="rounded-full bg-gray-200 py-2 px-8 text-xs font-semibold transition-colors duration-300 hover:bg-gray-300"
          >
            Read More
          </a>
        </div>
      </footer>
    </div>
  </div>
</article>