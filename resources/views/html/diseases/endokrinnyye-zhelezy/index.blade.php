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
                                        class="breadcrumbs__current">Endokrin bezleri</span>
                            </div>


                            <h1 class="page-header page-header--name">Endokrin bezleri</h1>
                            <p class="page-header-description">Endokrin bezleriniň işlemezligi bilen baglanyşykly
                                keseller (tiroid bezi, paratiroid bezleri, aşgazan asty mäzleri, adrenal bezler).</p>
                        </div>
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
                                                                                   style="font-size: 30px">Keseller:</p>
                            </div>
                            <ul class="no-cols-list diseases-list">
                                <li><a class="animated-hover" href="autoimmunnyi-tireoidit.html">Awtoimmun tiroidit</a>
                                </li>
                                <li><a class="animated-hover" href="diffuznyi-toksicheskii-zob.html">Diffuz zäherli
                                        zoby</a></li>
                                <li><a class="animated-hover" href="giperkorticizm.html">Giperkortizolizm</a></li>
                                <li><a class="animated-hover" href="giperparatireoz.html">Giperparatioz</a></li>
                                <li><a class="animated-hover" href="gipertireoz.html">Gipertiroidizm</a></li>
                                <li><a class="animated-hover" href="gipokorticizm.html">Gipokortizm</a></li>
                                <li><a class="animated-hover" href="gipoparatireoz.html">Gipoparatiroidizm</a></li>
                                <li><a class="animated-hover" href="gipotireoz">Gipotireoz</a></li>
                                <li><a class="animated-hover" href="sakharnyy-diabet-1-tipa">1-nji görnüşli süýji
                                        keseli</a></li>
                                <li><a class="animated-hover" href="sakharnyy-diabet-2-tipa">2-nji görnüşli süýji
                                        keseli</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection