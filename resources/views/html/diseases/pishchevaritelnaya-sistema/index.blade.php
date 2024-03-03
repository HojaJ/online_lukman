@extends('layouts.guest')
@section('content')
    <div class="page-content page-content--overflow-no">
        <div class="wrapper">
            <div class="layout">
                <div class="layout__left">
                    <div class="left-content left-content--pink-box">
                        <div class="header-breadcrumbs-group">
                            <div class="breadcrumbs">
                                <a href="{{ route('diseases') }}" class="breadcrumbs__previous">Kesel</a> — <span
                                        class="breadcrumbs__current">Iýmit siňdiriş ulgamy</span>
                            </div>


                            <h1 class="page-header page-header--name"> Iýmit siňdiriş ulgamy </h1>
                            <p class="page-header-description">Aşgazan-içege ulgamynyň keselleri.</p></div>
                    </div>
                    <div class="worker_block_wrapper">
                        @foreach(\App\Models\Category::where('name_en','Digestive system')->first()->workers as $worker)
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
                                <li><a class="animated-hover" href="appendicit.html">Appendisit(körçege)</a></li>
                                <li><a class="animated-hover" href="celiakiya.html">Seliakiýa</a></li>
                                <li><a class="animated-hover" href="funkcionalnaya-dispepsiya.html">Funksional
                                        dispepsiýa</a></li>
                                <li><a class="animated-hover" href="gastroezofagealnaya-reflyuksnaya-bolezn.html">Gastroezofagial
                                        reflyks keseli</a></li>
                                <li><a class="animated-hover" href="gemorroj.html">Gemorroý</a></li>
                                <li><a class="animated-hover" href="hronicheskij-pankreatit.html">Dowamly pankreatit</a>
                                </li>
                                <li><a class="animated-hover" href="kishechnaya-neprohodimost.html">Içege
                                        obstruksiýasy</a></li>
                                <li><a class="animated-hover" href="laktaznaya-nedostatochnost.html">Laktaz
                                        ýetmezçiligi</a></li>
                                <li><a class="animated-hover" href="novoobrazovanie-tolstoj-kishki.html">Ýogyn içegänin
                                        täze döremegi</a></li>
                                <li><a class="animated-hover" href="ostryj-pankreatit.html">Ýiti pankreatit</a></li>
                                <li><a class="animated-hover" href="sindrom-razdrazhennogo-kishechnika">Içege gyjynma
                                        sindromy</a></li>
                                <li><a class="animated-hover" href="vospalitelnoye-zabolevaniye-kishechnika">Kesgitli
                                        çişme</a></li>
                                <li><a class="animated-hover" href="yazva-zheludka-ili-dvenadtsatiperstnoy-kishki">Aşgazan
                                        ýa-da on iki barmakly içege ýarasy</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection