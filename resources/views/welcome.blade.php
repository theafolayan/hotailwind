<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-100 h-screen antialiased leading-none font-sans">
<div class="flex flex-col">
    @if(Route::has('login'))
        <div class="absolute top-0 right-0 mt-4 mr-4 space-x-4 sm:mt-6 sm:mr-6 sm:space-x-6">
            @auth
                <a href="{{ url('/home') }}" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase">{{ __('Home') }}</a>
            @else
                <a href="{{ route('login') }}" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase">{{ __('Login') }}</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="no-underline hover:underline text-sm font-normal text-teal-800 uppercase">{{ __('Register') }}</a>
                @endif
            @endauth
        </div>
    @endif

</div>
<div class="container my-12 mx-auto px-4 md:px-12">
    <div class="flex flex-wrap -mx-1 lg:-mx-4">



                <!-- Column -->
        <div class="my-1 px-1 w-full md:w-1/2 lg:my-4 lg:px-4 lg:w-1/3">

            <!-- Article -->
            <article class="overflow-hidden rounded-lg shadow-lg">

                <a href="#">
                    <img alt="Placeholder" class="block h-auto w-full" src="https://cdn.pixabay.com/photo/2014/10/16/08/39/bedroom-490779__480.jpg">
                </a>

                <header class="flex items-center justify-between leading-tight p-5 md:p-4">
                    <h1 class="text-lg">
                        <a class="no-underline hover:underline text-black" href="#">
                           Example Luxury room with Italian Rug
                        </a>

                    </h1>
                    <p class="text-green-600 text-sm">
                        $600/Night
                    </p>
                </header>

            </article>
            <!-- END Article -->

        </div>
        <!-- END Column -->

    </div>
</div>
</body>
</html>
