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
                                        class="breadcrumbs__current">Göz</span>
                            </div>


                            <h1 class="page-header page-header--name"> Göz </h1>
                            <p class="page-header-description">Görüş organlaryna zeper ýetmek bilen baglanyşykly
                                keseller.</p></div>
                    </div>
                    <div class="worker_block_wrapper">
                        @foreach(\App\Models\Category::where('name_en','Eye')->first()->workers as $worker)
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
                                <li><a class="animated-hover" href="allergicheskiy-konyunktivit">Allergiki
                                        konýuktiwit</a></li>
                                <li><a class="animated-hover" href="gipermetropiya">Gipermetropiýa</a></li>
                                <li><a class="animated-hover" href="infekcionnyj-konyunktivit">Ýokanç
                                        konýunktiwit</a></li>
                                <li><a class="animated-hover" href="inorodnoe-telo-glaza">Gözüň keseki bedeni</a>
                                </li>
                                <li><a class="animated-hover" href="katarkta">Katarakt</a></li>
                                <li><a class="animated-hover" href="keratit">Keratit</a></li>
                                <li><a class="animated-hover" href="miopiya">Miýopiýa</a></li>
                                <li><a class="animated-hover" href="presbiopiya">Presbiopiýa</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection