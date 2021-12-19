<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>@yield('title') | Laravel Secretroom</title>

  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

  <!-- Styles -->
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">

  <!-- Scripts -->
{{--  <script src="{{ asset('js/app.js') }}" defer></script>--}}
{{--  <script src="//unpkg.com/alpinejs" defer></script>--}}

</head>
<body class="font-sans antialiased">
<div class="min-h-screen bg-white">
@include('layouts::navigation')

<!-- Page Heading -->
  <header x-data="{ open: false }" class="bg-white shadow">
    <div class="max-w-7xl mx-auto py-3 md:py-6 px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between items-center">
        <div>
          <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            @yield('title')
          </h2>
        </div>

{{--        Hamburger--}}
        <div class="-mr-2 flex items-center lg:hidden">
          <button @click="open = ! open"
                  class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
              <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
              <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
            </svg>
          </button>
        </div>
      </div>
    </div>

  <!-- Responsive Navigation Menu -->
{{--  <div :class="{'block': open, 'hidden': ! open}" class="lg:hidden">--}}
{{--    <div class="pt-2 pb-3 space-y-1">--}}
{{--      @foreach($tables as $table)--}}
{{--        <x-responsive-nav-link :href="'/secretroom/' . $table"--}}
{{--                               :active="request()->route()->table == $table">--}}
{{--          {{ $table }}--}}
{{--        </x-responsive-nav-link>--}}
{{--      @endforeach--}}
{{--    </div>--}}
{{--  </div>--}}
  </header>
@yield('content')

</div>
</body>
</html>
