<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('title', app_name())</title>

        <meta name="description" content="@yield('meta_description', 'EduSentral Entrance Application')">
        <meta name="author" content="@yield('meta_author', 'Shirshak Bajgain')">
        @yield('meta')

        @yield('before-styles')
        @langRTL
            <link rel="stylesheet" href="{{ getRtlCss(mix('/css/frontend.css')) }}">
        @else
            <link rel="stylesheet" href="{{ mix('/css/frontend.css') }}">
        @endif
        @yield('after-styles')

        <script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>
        </script>
    </head>
    <body id="app-layout">
        <div id="app">
            @include('includes.partials.logged-in-as')
            @include('frontend.includes.nav')

            <div class="container">
                @include('includes.partials.messages')
                @yield('content')
            </div>
        </div>

        @yield('before-scripts')
        <script src='{{ mix('js/frontend.js') }}'></script>
        @yield('after-scripts')

        @include('includes.partials.ga')
    </body>
</html>