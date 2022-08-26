<!doctype html>
<html lang="en">

<head>
    <title>@yield('title') - Products Laravel App</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    {{-- Tailwind CSS --}}
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- Logo --}}
    <link rel="icon" href="{{ url('/listacompras.ico') }}">
</head>

<body class="bg-slate-100 text-gray-800">

    <nav class="h-16 flex justify-end py-4 px-16">
        <a id="navbarDropdown" class="text-white text-left rounded px-4 pt-1 h-10 bg-green-500 font-semibold mx-2 hover:bg-green-900" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ 'User: ' . Auth::user()->name }}
        </a>

        <a href="{{ route('products.index') }}" class="text-white rounded px-4 pt-1 h-10 bg-blue-500 font-semibold mx-2 hover:bg-blue-700">Products</a>

        <a href=" {{ route('products.create') }}" class="text-white rounded px-4 pt-1 h-10 bg-blue-500 font-semibold mx-2 hover:bg-blue-700">Create</a>

        
            <a class="text-white rounded px-4 pt-1 h-10 bg-red-500 font-semibold mx-2 hover:bg-red-900" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        

    </nav>

    <main class="p-16 flex justify-center text-xl">
        @yield('content')
    </main>    




</body>

</html>