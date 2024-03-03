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
                                        class="breadcrumbs__current">Дыхательная система</span>
                            </div>


                            <h1 class="page-header page-header--name"> Дыхательная система </h1>
                            <p class="page-header-description">Болезни, поражающие дыхательные пути, включая носовые
                                ходы, бронхи и легкие.</p></div>
                    </div>
                    <div class="worker_block_wrapper">
                        @foreach(\App\Models\Category::where('name_en','Respiratory system')->first()->workers as $worker)
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
                                                                                   style="font-size: 30px">Болезни:</p>
                            </div>
                            <ul class="no-cols-list diseases-list">
                                <li><a class="animated-hover" href="allergicheskij-rinit.html">Аллергический ринит</a>
                                </li>
                                <li><a class="animated-hover" href="bronhialnaya-astma.html">Бронхиальная астма</a></li>
                                <li><a class="animated-hover" href="hronicheskaya-obstruktivnaya-bolezn-legkih.html">Хроническая
                                        обструктивная болезнь легких</a></li>
                                <li><a class="animated-hover" href="hronicheskij-bronhit.html">Хронический бронхит</a>
                                </li>
                                <li><a class="animated-hover" href="novoobrazovanie-nizhnih-dyhatelnyh-putei.html">Новообразование
                                        нижних дыхательных путей</a></li>
                                <li><a class="animated-hover" href="ostrye-respiratornye-zabolevaniya.html">Острые
                                        респираторные заболевания</a></li>
                                <li><a class="animated-hover" href="ostryj-bronhit">Острый бронхит</a></li>
                                <li><a class="animated-hover" href="pnevmoniya">Пневмония</a></li>
                                <li><a class="animated-hover" href="tuberkulez">Туберкулез</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection