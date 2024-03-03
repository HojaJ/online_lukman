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
                                        class="breadcrumbs__current">Пищеварительная система</span>
                            </div>


                            <h1 class="page-header page-header--name"> Пищеварительная система </h1>
                            <p class="page-header-description">Заболевания органов желудочно-кишечного тракта.</p></div>
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
                                                                                   style="font-size: 30px">Болезни:</p>
                            </div>
                            <ul class="no-cols-list diseases-list">
                                <li><a class="animated-hover" href="appendicit.html">Аппендицит</a></li>
                                <li><a class="animated-hover" href="celiakiya.html">Целиакия</a></li>
                                <li><a class="animated-hover" href="funkcionalnaya-dispepsiya.html">Функциональная
                                        диспепсия</a></li>
                                <li><a class="animated-hover" href="gastroezofagealnaya-reflyuksnaya-bolezn.html">Гастроэзофагеальная
                                        рефлюксная болезнь (ГЭРБ)</a></li>
                                <li><a class="animated-hover" href="gemorroj.html">Геморрой</a></li>
                                <li><a class="animated-hover" href="hronicheskij-pankreatit.html">Хронический
                                        панкреатит</a></li>
                                <li><a class="animated-hover" href="kishechnaya-neprohodimost.html">Кишечная
                                        непроходимость</a></li>
                                <li><a class="animated-hover" href="laktaznaya-nedostatochnost.html">Лактазная
                                        недостаточность</a></li>
                                <li><a class="animated-hover" href="novoobrazovanie-tolstoj-kishki.html">Новообразование
                                        толстой кишки</a></li>
                                <li><a class="animated-hover" href="ostryj-pankreatit.html">Острый панкреатит</a></li>
                                <li><a class="animated-hover" href="sindrom-razdrazhennogo-kishechnika">Синдром
                                        раздраженного кишечника</a></li>
                                <li><a class="animated-hover" href="vospalitelnoye-zabolevaniye-kishechnika">Неспецифические
                                        воспалительные заболевания кишечника</a></li>
                                <li><a class="animated-hover" href="yazva-zheludka-ili-dvenadtsatiperstnoy-kishki">Язва
                                        желудка или двенадцатиперстной кишки</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection