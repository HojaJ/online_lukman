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
                                        class="breadcrumbs__current">Травмы и ушибы</span>
                            </div>


                            <h1 class="page-header page-header--name"> Травмы и ушибы </h1>
                            <p class="page-header-description">Травмы и ушибы, симптомы, лечение и диагностика.</p>
                        </div>
                    </div>
                    <div class="worker_block_wrapper">
                        @foreach(\App\Models\Category::where('name_en','Injuries and bruises')->first()->workers as $worker)
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
                                <li><a class="animated-hover" href="perelom-bolshogo-paltsa-stopy.html">Перелом большого
                                        пальца стопы</a></li>
                                <li><a class="animated-hover"
                                       href="perelom-distalnykh-kontsov-luchevoy-i-loktevoy-kosti.html">Перелом
                                        дистальных концов лучевой и локтевой кости</a></li>
                                <li><a class="animated-hover" href="perelom-goleni.html">Перелом голени</a></li>
                                <li><a class="animated-hover" href="perelom-lodyzhki.html">Перелом лодыжки</a></li>
                                <li><a class="animated-hover" href="perelom-nadkolennika.html">Перелом надколенника</a>
                                </li>
                                <li><a class="animated-hover" href="perelom-oblasti-plechevogo-sustava.html">Перелом в
                                        области плечевого сустава</a></li>
                                <li><a class="animated-hover" href="perelom-paltsa-stopy.html">Перелом пальца стопы</a>
                                </li>
                                <li><a class="animated-hover" href="perelom-sheiki-bedra.html">Перелом шейки бедра</a>
                                </li>
                                <li><a class="animated-hover" href="perelomy.html">Переломы</a></li>
                                <li><a class="animated-hover" href="rastyazheniye-svyazok-bolshogo-paltsa.html">Растяжение
                                        связок большого пальца стопы</a></li>
                                <li><a class="animated-hover" href="rastyazheniye-svyazok-kisti.html">Растяжение связок
                                        кисти</a></li>
                                <li><a class="animated-hover" href="rastyazheniye-svyazok-kolena.html">Растяжение связок
                                        колена</a></li>
                                <li><a class="animated-hover" href="rastyazheniye-svyazok-lodyzhki.html">Растяжение
                                        связок лодыжки</a></li>
                                <li><a class="animated-hover" href="rastyazheniye-svyazok-loktya.html">Растяжение связок
                                        локтя</a></li>
                                <li><a class="animated-hover" href="rastyazheniye-svyazok-plechevogo-sustava.html">Растяжение
                                        связок плечевого сустава</a></li>
                                <li><a class="animated-hover" href="rastyazheniye-svyazok-zapyastya.html">Растяжение
                                        связок запястья</a></li>
                                <li><a class="animated-hover" href="travmy-svyazok.html">Травмы связок</a></li>
                                <li><a class="animated-hover" href="ushib-kisti.html">Ушиб кисти</a></li>
                                <li><a class="animated-hover" href="ushib-kolena.html">Ушиб колена</a></li>
                                <li><a class="animated-hover" href="ushib-lodyzhki.html">Ушиб лодыжки</a></li>
                                <li><a class="animated-hover" href="ushib-loktya.html">Ушиб локтя</a></li>
                                <li><a class="animated-hover" href="ushib-myagkih-tkanei.html">Ушиб мягких тканей</a>
                                </li>
                                <li><a class="animated-hover" href="ushib-paltsa-stopy.html">Ушиб пальца стопы</a></li>
                                <li><a class="animated-hover" href="ushib-plecha.html">Ушиб плеча</a></li>
                                <li><a class="animated-hover" href="ushib-predplech'ya.html">Ушиб предплечья</a></li>
                                <li><a class="animated-hover" href="ushib-stopy">Ушиб стопы</a></li>
                                <li><a class="animated-hover" href="ushib-v-raĭone-tazobedrennogo-sustava">Ушиб в районе
                                        тазобедренного сустава</a></li>
                                <li><a class="animated-hover" href="ushib-zapyastya">Ушиб запястья</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection