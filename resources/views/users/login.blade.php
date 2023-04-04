<x-layout>
  <x-card class="p-10 rounded  max-w-lg mx-auto mt-24">
    <header class="text-center">
      <h2 class="text-2xl font-bold uppercase mb-1">
        Hyr
      </h2>
      <p class="mb-4">Hyr per te postuar pune</p>
    </header>

    <form method="POST" action="/users/authenticate">
      @csrf

      <div class="mb-6">
        <label for="email" class="inline-block text-lg mb-2">Email</label>
        <input type="email" class="border border-gray-200 rounded p-2 w-full" name="email" value="{{ old('email') }}" />
        @error('email')
        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="password" class="inline-block text-lg mb-2">
          Fjalekalimi
        </label>
        <input type="password" class="border border-gray-200 rounded p-2 w-full" name="password" />
        @error('password')
        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
      </div>


      <div class="mb-6">
        <button type="submit" class="bg-laravel text-white rounded py-2 px-4 hover:bg-black">
          Hyr
        </button>
      </div>

      <div class="mt-8">
        <p>
          Deshiron te regjistrohesh?
          <a href="/register" class="text-laravel">Regjistrohu</a>
        </p>
      </div>
    </form>
  </x-card>
</x-layout>