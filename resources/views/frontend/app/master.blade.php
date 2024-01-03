<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" xmlns="http://www.w3.org/1999/xhtml">

<head>
    {!! SEO::generate() !!}
    @include('frontend.app.css')
    @yield('customCSS')
</head>

<body class="c-dot hover-cursor">

    @include('frontend.app.header')

    @yield('content')

    @include('frontend.app.footer')

    @include('frontend.app.js')
    @yield('customJS')
    <script>
        $(document).ready(function() {
            'use strict'
            setTimeout(function(){ $("body").append(`
            <div id="panel" class="panel">
                <a href="https://twitter.com{{ config('settings.twitter')}}" target="_blank" class="panel-button">
                    <i class="ti-twitter"></i>
                    <div>Twitter</div>
                </a>
                <a href="https://facebook.com{{ config('settings.facebook')}}" target="_blank" class="panel-button">
                    <i class="ti-facebook"></i>
                    <div>Facebook</div>
                </a>
                <a href="https://instagram.com{{ config('settings.instagram')}}" target="_blank" class="panel-button">
                    <i class="ti-instagram"></i>
                    <div>İnstagram</div>
                </a>
                <a href="https://youtube.com{{ config('settings.youtube')}}" target="_blank" class="panel-button">
                    <i class="ti-youtube"></i>
                    <div>Youtube</div>
                </a>
            </div>
            <div class="panel-backdrop"></div>
            <div class="panel-switcher">
                <div class="loader-circle"></div>
                <div class="loader-line-mask">
                    <div class="loader-line"></div>
                </div>
            </div>
                                <style>.panel:not(.loaded),.panel-switcher:not(.loaded),.panel-backdrop:not(.loaded){ visibility: hidden; }</style>`)}, 650);
            setTimeout(function(){ $.getScript("/front/js/theme-panel/theme-panel.js"); $('head').append( $('<link rel="stylesheet" type="text/css" />').attr('href', '/front/js/theme-panel/theme-panel.css') );}, 700);
            setTimeout(function(){ $("#panel, .panel-switcher, .panel-backdrop").addClass("loaded"); }, 1000);
        });
    </script>

</body>
</html>
