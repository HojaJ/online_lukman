@extends('layouts.guest')
@section('content')
    <div class="page-content page-content--overflow-no">
        <div class="wrapper">
            <div class="layout">
                <div class="layout__left">
                    <div class="left-content left-content--pink-box">
                        <div class="header-breadcrumbs-group">
                            <div class="breadcrumbs">
                                <a href="{{ route('diseases') }}" class="breadcrumbs__previous">Заболевания</a> — <span
                                        class="breadcrumbs__current">Беременность</span>
                            </div>


                            <h1 class="page-header page-header--name"> Беременность </h1>
                            <p class="page-header-description">Состояния, возникающие во время беременности.</p></div>
                    </div>
                    <div class="worker_block_wrapper">
                        @foreach(\App\Models\Category::where('name_en','Pregnancy')->first()->workers as $worker)
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
                            <div class="search search--border search--diseases">
                                <p class="animated-hover-inside" style="font-size: 30px">Болезни:</p>
                            </div>
                            <ul class="no-cols-list diseases-list">
                                <li>
                                    <a class="animated-hover" href="chrezmernaya-rvota-beremennykh">Чрезмерная рвота
                                        беременных</a>
                                </li>
                                <li><a class="animated-hover" href="ektopicheskaya-beremennost'">Эктопическая
                                        беременность</a></li>
                                <li><a class="animated-hover" href="istmiko-tservikalnaya-nedostatochnost">Истмико-цервикальная
                                        недостаточность</a></li>
                                <li><a class="animated-hover" href="kholestaz-beremennykh">Холестаз беременных</a></li>
                                <li><a class="animated-hover" href="khorioamnionit">Хориоамнионит</a></li>
                                <li><a class="animated-hover" href="lozhnyye-skhvatki">Ложные схватки</a></li>
                                <li><a class="animated-hover" href="melazma-beremennykh">Мелазма беременных</a></li>
                                <li><a class="animated-hover" href="papulezniy-dermatit-beremennykh">Папулезный дерматит
                                        беременных</a></li>
                                <li><a class="animated-hover" href="pemfigoid-beremennykh">Пемфигоид беременных</a></li>
                                <li><a class="animated-hover" href="predlezhaniye-platsenty">Предлежание плаценты</a>
                                </li>
                                <li><a class="animated-hover" href="prezhdevremennaya-otsloyka-platsenty">Преждевременная
                                        отслойка плаценты</a></li>
                                <li><a class="animated-hover" href="rvota-beremennykh">Рвота беременных</a></li>
                                <li><a class="animated-hover" href="simfizit-beremennykh">Симфизит беременных</a></li>
                                <li><a class="animated-hover" href="ugrozhayushchiye-prezhdevremennyye-rody">Угрожающие
                                        преждевременные роды</a></li>
                                <li><a class="animated-hover" href="vozmozhnaya-beremennost'">Возможная беременность</a>
                                </li>
                                <li><a class="animated-hover" href="zudyashchiy-follikulit">Зудящий фолликулит
                                        беременных</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection