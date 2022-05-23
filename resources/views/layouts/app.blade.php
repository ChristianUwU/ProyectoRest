<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>@yield('title') - Julio Suarez</title>

        <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.5.1/tailwind.min.css">
    </head>
    <body class="bg-gray-100 text-gray-800">

        <nav class="flex py-3 bg-gray-800 text-white">
            <div class="w-1/2 px-12 mr-auto">
                <p class="text-2xl font-bold">Test</p>
            </div>

            <ul class="w-1/2 px-12 mr-auto flex justify-end pt-1">

            @if(auth()->check())

                <li class="mx-8">
                    <p class="text-xl">Welcome <b>{{ auth()->user()->name }}</b></p>
                </li>
                <li>
                    <a href="{{route('login.destroy')}}" class="font-bold py-3 px-4 rounded-md bg-red-500 hover:bg-red-600">LogOut</a>
                </li>

            @else

                <li>
                    <a href="{{route('login.index')}}" class="hover:bg-gray-900 py-3 px-4 rounded-md">Login </a>
                </li>
                <li>
                    <a href="{{route('register.index')}}" class=" border-2 border-white hover:bg-gray-900 py-2 px-3 rounded-md">Register</a>
                </li>

            @endif
            </ul>

        </nav>

        @yield('content')


    </body>
</html>
