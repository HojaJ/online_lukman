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
                                        class="breadcrumbs__current">Эндокринные железы</span>
                            </div>


                            <h1 class="page-header page-header--name"> Эндокринные железы</h1>
                            <p class="page-header-description">Заболевания, связанные с нарушением работы желез
                                внутренней секреции (щитовидная железа, паращитовидные железы, поджелудочная железа,
                                надпочечники).</p></div>
                    </div>
                    <div class="worker_block_wrapper">
                        @foreach(\App\Models\Category::where('name_en','Endocrine glands')->first()->workers as $worker)
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
                                <li><a class="animated-hover" href="autoimmunnyi-tireoidit.html">Аутоиммунный
                                        тиреоидит</a></li>
                                <li><a class="animated-hover" href="diffuznyi-toksicheskii-zob.html">Диффузный
                                        токсический зоб</a></li>
                                <li><a class="animated-hover" href="giperkorticizm.html">Гиперкортицизм</a></li>
                                <li><a class="animated-hover" href="giperparatireoz.html">Гиперпаратиреоз</a></li>
                                <li><a class="animated-hover" href="gipertireoz.html">Гипертиреоз</a></li>
                                <li><a class="animated-hover" href="gipokorticizm.html">Гипокортицизм</a></li>
                                <li><a class="animated-hover" href="gipoparatireoz.html">Гипопаратиреоз</a></li>
                                <li><a class="animated-hover" href="gipotireoz">Гипотиреоз</a></li>
                                <li><a class="animated-hover" href="sakharnyy-diabet-1-tipa">Сахарный диабет 1-го
                                        типа</a></li>
                                <li><a class="animated-hover" href="sakharnyy-diabet-2-tipa">Сахарный диабет 2-го
                                        типа</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection