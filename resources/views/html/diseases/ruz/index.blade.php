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
                                        class="breadcrumbs__current">Женская половая система и молочные железы</span>
                            </div>


                            <h1 class="page-header page-header--name"> Женская половая система и молочные железы </h1>
                            <p class="page-header-description">Заболевания, связанные с нарушением функции женских
                                наружных половых органов, органов малого таза (матка, яичники), а также болезни молочных
                                желез.</p></div>
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
                                                                                   style="font-size: 30px">Болезни:</p>
                            </div>
                            <ul class="no-cols-list diseases-list">
                                <li><a class="animated-hover" href="algodismenoreya.html">Дисменорея</a></li>
                                <li><a class="animated-hover" href="cervicit.html">Цервицит</a></li>
                                <li><a class="animated-hover" href="endometrioz.html">Эндометриоз</a></li>
                                <li><a class="animated-hover" href="giperandrogeniya-u-zhenshchin.html">Гиперандрогения
                                        у женщин</a></li>
                                <li><a class="animated-hover" href="mastit.html">Мастит</a></li>
                                <li><a class="animated-hover" href="novoobrazovanie-molochnoj-zhelezy.html">Новообразование
                                        молочной железы</a></li>
                                <li><a class="animated-hover" href="sindrom-polikistoznyh-yaichnikov">Синдром
                                        поликистозных яичников</a></li>
                                <li><a class="animated-hover" href="vaginit">Вагинит</a></li>
                                <li><a class="animated-hover" href="vospalitelnye-zabolevaniya-organov-malogo-taza">Воспалительные
                                        заболевания органов малого таза</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection