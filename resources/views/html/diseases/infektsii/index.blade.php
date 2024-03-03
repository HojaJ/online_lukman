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
                                        class="breadcrumbs__current">Infeksiýa</span>
                            </div>


                            <h1 class="page-header page-header--name"> Infeksiýa </h1>
                            <p class="page-header-description">Ýokanç serişdeden döreýän keseller (bakteriýalar,
                                wiruslar, kömelekler).</p></div>
                    </div>
                    <div class="worker_block_wrapper">
                        @foreach(\App\Models\Category::where('name_en','Infection')->first()->workers as $worker)
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
                                <li><a class="animated-hover" href="coronavirus-infection">Koronawirus
                                        ýokançlygy(COVID-19)</a></li>
                                <li><a class="animated-hover" href="difteriya">Difteriýa</a></li>
                                <li><a class="animated-hover" href="gripp">Dümew</a></li>
                                <li><a class="animated-hover" href="kishechnaya-infektsiya">Içege infeksiýasy</a>
                                </li>
                                <li><a class="animated-hover" href="kor">Gyzamyk</a></li>
                                <li><a class="animated-hover" href="krasnuha">Gyzylja</a></li>
                                <li><a class="animated-hover" href="meningit">Meningit</a></li>
                                <li><a class="animated-hover" href="opoyasyvayushchij-gerpes">Gerpes zoster
                                        infeksiýasy</a></li>
                                <li><a class="animated-hover" href="skarlatina">Gyrmyzy gyzzyrma </a></li>
                                <li><a class="animated-hover" href="vetryanaya-ospa">Warisella infeksiýasy(ospa)</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection