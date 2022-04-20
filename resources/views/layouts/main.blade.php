<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demo.foxthemes.net/instellohtml/chat.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 Mar 2022 03:35:57 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Favicon -->
    <link href="assets/images/favicon.png" rel="icon" type="image/png">
    
    <!-- Basic Page Needs
    ================================================== -->
    <title>SOMED | {{ $title }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Instello - Sharing Photos platform HTML Template">

    <!-- icons
    ================================================== -->
    <link rel="stylesheet" href="assets/css/icons.css">

    <!-- CSS 
    ================================================== -->
    <link rel="stylesheet" href="{{ asset('assets/css/uikit.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/tailwind.css') }}">

    @yield('style')
</head>

<body>


    <div id="wrapper">

        @include('partials.sidebar')
        <div class="main_content">

   @include('partials.header')


            @yield('container')

            <script>
        
                (function (window, document, undefined) {
                    'use strict';
                    if (!('localStorage' in window)) return;
                    var nightMode = localStorage.getItem('gmtNightMode');
                    if (nightMode) {
                        document.documentElement.className += ' dark';
                    }
                })(window, document);
            
            
                (function (window, document, undefined) {
            
                    'use strict';
            
                    // Feature test
                    if (!('localStorage' in window)) return;
            
                    // Get our newly insert toggle
                    var nightMode = document.querySelector('#night-mode');
                    if (!nightMode) return;
            
                    // When clicked, toggle night mode on or off
                    nightMode.addEventListener('click', function (event) {
                        event.preventDefault();
                        document.documentElement.classList.toggle('dark');
                        if (document.documentElement.classList.contains('dark')) {
                            localStorage.setItem('gmtNightMode', true);
                            return;
                        }
                        localStorage.removeItem('gmtNightMode');
                    }, false);
            
                })(window, document);
            </script>
         <!-- Scripts
            ================================================== -->
            <script src="{{ asset('assets/js/tippy.all.min.js') }}"></script>  
            <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
            <script src="{{ asset('assets/js/uikit.js') }}"></script>
            <script src="{{ asset('assets/js/simplebar.js') }}"></script>
            <script src="{{ asset('assets/js/custom.js') }}"></script>
        
        
            <script src="{{ asset('assets/unpkg.com/ionicons%405.2.3/dist/ionicons.js') }}"></script>
        </body>
        
        
        <!-- Mirrored from demo.foxthemes.net/instellohtml/chat.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 25 Mar 2022 03:35:58 GMT -->
        </html>