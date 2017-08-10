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
        <link rel="stylesheet" href="/vendor/simple-line-icons/css/simple-line-icons.css">
        <link rel="stylesheet" href="/vendor/device-mockups/device-mockups.min.css">
        <link rel="stylesheet" href="/vendor/font-awesome/css/font-awesome.min.css">
        @yield('after-styles')

        <script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token(),
            ]); ?>
        </script>
    </head>
    <body id="page-top" class='not-index'>
        <div id="app">
            @include('frontend.includes.nav')
            @include('frontend.includes.header')

            <div class="container">
                @include('includes.partials.messages')
                @yield('content')
            </div>
        </div>

        @yield('before-scripts')
       {{--  <script src='{{ mix('js/frontend.js') }}'></script> --}}
        @yield('after-scripts')

        @include('frontend.includes.footer')
        @include('includes.partials.ga')
    </body>
</html>