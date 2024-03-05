<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Online Lukman</title>
    <link rel="icon" type="image/png" href="{{ asset('files/assets/icons/favicon-16x16.png') }}" sizes="16x16">
    <link rel="icon" type="image/png" href="{{ asset('files/assets/icons/favicon-32x32.png') }}" sizes="32x32">
    <link rel="icon" type="image/x-icon" href="{{ asset('files/assets/favicon.ico') }}">
    <meta name="theme-color" content="#ffffff">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('files/assets/icons/apple-touch-icon.png') }}">
    <link rel="mask-icon" href="{{ asset('files/safari-pinned-tab.svg') }}" color="#2DCA73">

    @stack('style')
    <link rel="stylesheet" href="{{ asset('files/styles.css') }}">
    <script>
        function myFunction() {
            var input, filter, ul, li, a, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            ul = document.getElementById("myUL");
            li = ul.getElementsByTagName("li");
            for (i = 0; i < li.length; i++) {
                a = li[i].getElementsByTagName("a")[0];
                txtValue = a.textContent || a.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    li[i].style.display = "";
                } else {
                    li[i].style.display = "none";
                }
            }
        }
        function myFun() {
            var input, filter, ul, li, a, i, txtValue;
            input = document.getElementById("myIn");
            filter = input.value.toUpperCase();
            ul = document.getElementById("myU");
            li = ul.getElementsByTagName("li");
            for (i = 0; i < li.length; i++) {
                a = li[i].getElementsByTagName("a")[0];
                txtValue = a.textContent || a.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    li[i].style.display = "";
                } else {
                    li[i].style.display = "none";
                }
            }
        }
    </script>
</head>
<body>

<header class="site-header">

    <div class="wrapper section-wrapper">
        <a id="logo" class="site-header__logo" href="{{ route('index') }}">
            <img style="height: 100px; width: 150px" src="{{ asset('files/assets/img/logo_online_lukman.png') }}" alt="Online Lukman" title="Online Lukman">
        </a>
        @include('layouts.language')


        <div class="site-header__right">
            <a href="{{ route('herbal-index') }}" class="animated-hover">{{ __("Medicinal plants") }}</a>
            <a href="{{ route('diseases') }}" class="animated-hover">{{ __("Diseases") }}</a>
            <a href="{{ route('search') }}" class="animated-hover">{{ __("Search") }}</a>
            <a href="{{ route('symptoms') }}" class="animated-hover">{{ __("Symptoms") }}</a>

            @if (Auth::guest())
                <a href="{{ route('login') }}" class="animated-hover">{{ __("Login") }}</a>
            @else
                <a href="{{ route('logout') }}" class="animated-hover">{{ __("Logout") }}</a>
            @endif

            <a href="{{ route('diagnosis') }}" class="button button--primary">{{ __('Check yourself') }}!</a>
        </div>
    </div>
</header>
@yield('content')


<footer class="site-footer">
    <div class="wrapper footer-wrapper">
        <div>
            <h3>Online Lukman</h3> 2024 &copy; {{ __("All rights reserved") }}
            <div class="tos"></div>
        </div>
    </div>
</footer>

<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('files/runtime.js') }}"></script>
<script src="{{ asset('files/polyfills.js') }}"></script>
<script src="{{ asset('files/scripts.js') }}"></script>
<script src="{{ asset('files/main.js') }}"></script>
@stack('script')
<script>
    $(document).ready(function ($) {
        if($('.toc-content').length){
            $(".toc-content .toc-entry a").click(function(e) {
                e.preventDefault();
                var aid = $(this).attr("href");
                $('html,body').animate({scrollTop: $(aid).offset().top},'slow');
            });
        }
    })
</script>
</body>
</html>