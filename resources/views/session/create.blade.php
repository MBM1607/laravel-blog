<x-layout>
  <section class='px-6 py-8'>
    <main class='mx-auto mt-10 max-w-lg rounded-xl border bg-gray-100 p-6'>
      <h1 class='text-center text-xl font-bold'>Log In!</h1>
      <form
        action='/login'
        method='post'
        class='mt-10'
      >
        @csrf

        <div class='mb-6'>
          <label
            class='mb-2 block text-xs font-bold uppercase text-gray-700'
            for='email'
          >
            Email
          </label>

          <input
            class='w-full border border-gray-400 p-2'
            type='email'
            name='email'
            id='email'
            max='255'
            required
            value="{{ old('email') }}"
          />

          @error('email')
            <p class='mt-1 text-xs text-red-500'>
              {{ $message }}
            </p>
          @enderror
        </div>

        <div class='mb-6'>
          <label
            class='mb-2 block text-xs font-bold uppercase text-gray-700'
            for='password'
          >
            Password
          </label>

          <input
            class='w-full border border-gray-400 p-2'
            type='password'
            name='password'
            id='password'
            required
            max='255'
            min='7'
          />

          @error('password')
            <p class='mt-1 text-xs text-red-500'>
              {{ $message }}
            </p>
          @enderror
        </div>

        <div class='mb-6'>
          <button
            type='submit'
            class='w-full rounded bg-blue-400 py-2 px-4 text-white hover:bg-blue-500'
          >
            Submit
          </button>
        </div>
      </form>
    </main>
  </section>
</x-layout>
