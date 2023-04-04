<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="images/favicon.ico" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="//unpkg.com/alpinejs" defer></script>

  <script src="https://cdn.tailwindcss.com"></script>
  <script>
  tailwind.config = {
    theme: {
      extend: {
        colors: {
          laravel: "#ef3b2d",
        },
      },
    },
  };
  </script>
  <title>Punesim</title>
</head>

<body class="mb-48">
  <nav class="flex justify-between items-center mb-4">
    <a href="/"><img class="w-24" src="{{asset('images/logo.png')}}" alt="" class="logo" /></a>
    <ul class="flex space-x-6 mr-6 text-lg">
      @auth
      <li>
        <h1 class="font-bold">Miresevjen <span class="uppercase bg-red-500 p-2 rounded">{{ auth()->user()->name }}</span></h1>
      </li>
      <li>
        <a href="/listings/manage" class="hover:text-laravel"><i class="fa-solid fa-gear"></i> Menaxho Punet</a>
      </li>
      <li>
        <form class="inline" method="POST" action="/logout">
          @csrf
          <button type="submit">
            <i class="fa-solid fa-door-closed"></i> Dil
          </button>
        </form>
      </li>
      @else
      <li>
        <a href="/register" class="hover:text-laravel"><i class="fa-solid fa-user-plus"></i> Regjistrohu</a>
      </li>
      <li>
        <a href="/login" class="hover:text-laravel"><i class="fa-solid fa-arrow-right-to-bracket"></i>
          Hyr</a>
      </li>
      @endauth
    </ul>
  </nav>
  <main>
    {{ $slot }}
  </main>

  <footer
    class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-zinc-800 text-white h-24 mt-24 opacity-90 md:justify-center">
    <p class="ml-2">Copyright &copy; 2023, All Rights reserved - by <a href="https://drhcode.com">DRHCode</a></p>

    <a href="/listings/create" class="absolute top-1/3 right-10 bg-black text-white py-2 px-5">Posto Pune</a>
  </footer>
  <x-flash-message />
</body>

</html>