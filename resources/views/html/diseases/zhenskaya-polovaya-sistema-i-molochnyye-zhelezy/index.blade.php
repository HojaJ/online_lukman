﻿@extends('layouts.guest')
@section('content')
    <div class="page-content page-content--overflow-no">
        <div class="wrapper">
            <div class="layout">
                <div class="layout__left">
                    <div class="left-content left-content--pink-box">
                        <div class="header-breadcrumbs-group">
                            <div class="breadcrumbs">
                                <a href="{{ route('diseases') }}" class="breadcrumbs__previous">Kesel</a> — <span
                                        class="breadcrumbs__current">Zenan jyns ulgamy</span>
                            </div>


                            <h1 class="page-header page-header--name"> Zenan jyns ulgamy </h1>
                            <p class="page-header-description">Aýallaryň daşky jyns agzalarynyň, çanaklyk organlarynyň
                                (ýatgy, ýumurtgalyk) işlemezligi, süýdemdiriji mäzleriň keselleri bilen baglanyşykly
                                keseller.</p></div>
                    </div>
                    <div class="worker_block_wrapper">
                        @foreach(\App\Models\Category::where('name_en','Female reproductive system and mammary glands')->first()->workers as $worker)
                            <a href="{{ route('worker_show',$worker->id ) }}" class="worker_block">
                                <img src="{{ asset($worker->image) }}">
                                <div class="worker_block_content">
                                    <h4>{{ $worker->first_name . ' ' . $worker->last_name }}</h4>
                                    <span>{{ $worker->working_hours_start . '-' . $worker->working_hours_end }}</span>
                                </div>
                            </a>
                        @endforeach
                    </div>
                    <div class="left-bg"></div>
                </div>
                <div class="layout__right">
                    <div class="category box">
                        <div class="no-box-content">
                            <div class="search search--border search--diseases"><p class="animated-hover-inside"
                                                                                   style="font-size: 30px">Keseller:</p>
                            </div>
                            <ul class="no-cols-list diseases-list">
                                <li><a class="animated-hover" href="algodismenoreya.html">Dismenoreýa</a></li>
                                <li><a class="animated-hover" href="cervicit.html">Serwisit</a></li>
                                <li><a class="animated-hover" href="endometrioz.html">Endometrioz</a></li>
                                <li><a class="animated-hover" href="giperandrogeniya-u-zhenshchin.html">Aýallarda
                                        giperandrogenizm</a></li>
                                <li><a class="animated-hover" href="mastit.html">Mastit</a></li>
                                <li><a class="animated-hover" href="novoobrazovanie-molochnoj-zhelezy.html">Süýt mäziniň
                                        täze döremegi</a></li>
                                <li><a class="animated-hover" href="sindrom-polikistoznyh-yaichnikov">Polikistik
                                        ýumurtga sindromy</a></li>
                                <li><a class="animated-hover" href="vaginit">Waginit</a></li>
                                <li><a class="animated-hover" href="vospalitelnye-zabolevaniya-organov-malogo-taza">Çanaklyk
                                        çiş keseli</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection