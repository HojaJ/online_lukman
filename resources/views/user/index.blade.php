@extends('layouts.guest')
@push('script')
    <link rel="stylesheet" href="{{ asset('owl/assets/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('owl/assets/owl.theme.default.min.css') }}">
    <style>
        .site-header {
            z-index: 99;
        }

        .bg-image {
            background-image: url('bg_image.jpg');
            height: 100vh;
            width: 100%;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .bg-image h1 {
            font-weight: 500;
        }

        .bg-image .wrapper {
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            max-width: 650px;
            height: 100%;
        }

        .bg-image .wrapper a {
            display: inline-block;
            margin: 0 auto;
        }

        .owl-carousel {
            margin-top: 50px;
        }

        .owl_block {
            display: flex;
            text-align: center;
            background: #fff;
            color: #949698;
            border: 1px solid rgba(33, 58, 133, .07);
            box-shadow: 2px 2px 15px #5280be1a;
            border-radius: 8px;
            cursor: pointer;
            padding: 20px 10px;
            height: 220px;
            flex-direction: column;
            align-items: center;
            justify-content: space-between;
        }

        .owl_block h4 {
            color: #000;
            font-weight: 600;
            margin-top: 30px;
        }

        .owl_block p {
            font-size: 14px;
        }

        .owl_block:hover {
            border: 1px solid #2ecb74;
        }

        .owl_block img {
            width: auto !important;
            height: 70px;
            margin: auto;
        }

        body {
            background-color: #f4f7fa;
        }

        .bg-gray {
            flex-direction: column;
            align-items: flex-start;
            padding-top: 50px;
            padding-bottom: 100px;
        }
        .owl-nav {
            position: absolute;
            top: 40%;
            transform: translateY(-50%);
            width: 100%;
            left: -20px;
            z-index: -1;
        }

        .owl-nav span {
            color: #2ecb74;
            font-size: 60px;
        }

        .owl-nav .owl-next {
            position: absolute;
            right: -40px;
        }
        .bg-white {
            background-color: #fff;
            padding: 30px 0;
        }
        .bg-white h3 {
            text-align: center;
            width: 100%;
            font-weight: 600;
            color: #2ecb74;
        }

    </style>
@endpush
@section('content')
    <div class="bg-image ">
        <div class="wrapper section-wrapper">
            <h1>{{ __('Better Health Starts With You') }}</h1>
            <h4>{{ __('A platform that connects you with quality healthcare services and resources anytime, anywhere.') }}</h4>
            <a href="{{ route('diagnosis') }}" class="button button--primary">Özüňizi barlaň!</a>
        </div>
    </div>
    <div class="wrapper section-wrapper bg-gray">
        <h2>{{ __('Choose a doctor') }}</h2>
        <p>{{ __('Reception with attending physician at the clinic. More than 100 qualified and verified specialists. Choose:') }}</p>
        <div class="owl-carousel">
            @foreach($categories as $category)
                <a href="{{ $category->{'link_'.app()->getLocale()} }}" class="owl_block">
                    <img src="{{ asset($category->image) }}">
                    <h4> {{ $category->{'name_'.app()->getLocale()} }}</h4>
                    <p> {{count($category->workers)}} {{ __('doctors') }}</p>
                </a>
            @endforeach
            <div>

            </div>
        </div>
    </div>


    @endsection
@push('script')
    <script src="{{ asset('owl/owl.carousel.min.js') }}"></script>
    <script>
        $(document).ready(function () {
            $(".owl-carousel").owlCarousel({

                dots: true,
                nav: true,
                margin: 20,
                responsive: {
                    0: {
                        items: 2
                    },
                    600: {
                        items: 3
                    },
                    800: {
                        items: 4
                    }
                    ,
                    1200: {
                        items: 6
                    }
                }
            });
        });
    </script>
@endpush