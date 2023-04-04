<x-layout>
  <x-card class="p-10 max-w-lg mx-auto mt-18">
    <header class="text-center">
      <h2 class="text-2xl font-bold uppercase mb-1">
        Posto Pune
      </h2>
      <p class="mb-4">Posto nje pune per te gjetur puntoret e duhur</p>
    </header>

    <form method="POST" action="/listings" enctype="multipart/form-data">
      @csrf
      <div class="mb-6">
        <label for="company" class="inline-block text-lg mb-2">Emri Kompanise</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="company" value="{{ old('company') }}"/>
        @error('company')
        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="title" class="inline-block text-lg mb-2">Cfare pune eshte?</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="title" placeholder="Shembull: Shitese butiku" value="{{ old('title') }}" />
        @error('title')
        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="location" class="inline-block text-lg mb-2">Ku ndodhet puna?</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="location" placeholder="Shembull: Remote, tirane, durres, etj" value="{{ old('location') }}" />
        @error('location')
        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="email" class="inline-block text-lg mb-2">Email</label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="email" value="{{ old('email') }}"/>
        @error('email')
        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="website" class="inline-block text-lg mb-2">
          Website ( nese keni )
        </label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="website" value="{{ old('website') }}"/>
        @error('website')
        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="tags" class="inline-block text-lg mb-2">
          Tags (te ndaraja me presje)
        </label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" name="tags" placeholder="shembull: shites, ekonomiste, motorrist, etc" value="{{ old('tags') }}"/>
        @error('tags')
        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="logo" class="inline-block text-lg mb-2">
          Foto ( Nese keni )
        </label>
        <input type="file" class="border border-gray-200 rounded p-2 w-full" name="logo" />
        @error('logo')
        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
      </div>

      <div class="mb-6">
        <label for="description" class="inline-block text-lg mb-2">
          Pershkrimi Punes
        </label>
        <textarea class="border border-gray-200 rounded p-2 w-full" name="description" rows="6" placeholder="Include tasks, requirements, salary, etc">{{old('description')}}</textarea>
        @error('decription')
        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
        @enderror
      </div>

      <div class="mb-6">
        <button class="bg-green-400 text-white rounded py-2 px-4 hover:bg-black">
          Postoje
        </button>

        <a href="/" class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"> Anullo </a>
      </div>
    </form>
  </x-card>
</x-layout>