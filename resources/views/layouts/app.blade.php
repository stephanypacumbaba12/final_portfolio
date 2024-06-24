<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        <style>
            .unread_notification{
                margin-top: -20px;
                margin-left: -3px;
                background-color: red;
                color: #ffffff;
                height: 18px;
                widows: 18px;
                text-align: center;
                border-radius: 50%;
                font-size:12px;
            }
        </style>
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles

        <style>
            .bg-gray-100{
               background-image: url('https://desktime.com/blog/wp-content/uploads/2021/06/freelance-boost.png');
               background-position: center;
               background-repeat: no-repeat;
               background-size: cover;
            }
        </style>
    </head>
    <body class="font-sans antialiased">
        <x-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
        <script>
      
          // Enable pusher logging - don't include this in production
          Pusher.logToConsole = true;
      
          var pusher = new Pusher('cd99d7b02ac9616efdeb', {
            cluster: 'ap1'
          });
      
          var channel = pusher.subscribe('my-channel');
          channel.bind('my-event', function(data) {
           $.ajax({
            url: "{{route('unreadcount')}}",
            method: "GET",
            success: function(data){
               $('.unread_notification').html(data.count);
            },
           });
          });
        </script>
        @livewireScripts
    </body>
</html>
