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
                                        class="breadcrumbs__current">Göwrelilik</span>
                            </div>


                            <h1 class="page-header page-header--name"> Göwrelilik </h1>
                            <p class="page-header-description">Göwrelilik döwründe ýüze çykýan ýagdaýlar.</p></div>
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
                                <p class="animated-hover-inside" style="font-size: 30px">Keseller:</p>
                            </div>
                            <ul class="no-cols-list diseases-list">
                                <li>
                                    <a class="animated-hover" href="chrezmernaya-rvota-beremennykh">Göwreli
                                        aýallaryň aşa köp ýürek-bulanmagy</a>
                                </li>
                                <li><a class="animated-hover" href="ektopicheskaya-beremennost'">Ektopiki
                                        göwrelilik</a></li>
                                <li><a class="animated-hover" href="istmiko-tservikalnaya-nedostatochnost">Istmiki-ýatgynyň
                                        ýetmezçiligi</a></li>
                                <li><a class="animated-hover" href="kholestaz-beremennykh">Göwreliligiň
                                        holestazy</a></li>
                                <li><a class="animated-hover" href="khorioamnionit">Horioamnionit</a></li>
                                <li><a class="animated-hover" href="lozhnyye-skhvatki">Ýalan gysylmalar</a></li>
                                <li><a class="animated-hover" href="melazma-beremennykh">Göwreli aýallaryň
                                        melazmasy</a></li>
                                <li><a class="animated-hover" href="papulezniy-dermatit-beremennykh">Göwreliligiň
                                        papulýar dermatiti</a></li>
                                <li><a class="animated-hover" href="pemfigoid-beremennykh">Pemfigoid göwreli</a>
                                </li>
                                <li><a class="animated-hover" href="predlezhaniye-platsenty">Plasentalyň dowam
                                        etmegi</a></li>
                                <li><a class="animated-hover" href="prezhdevremennaya-otsloyka-platsenty">Plasental
                                        wagtyndan öň bozulmagy</a></li>
                                <li><a class="animated-hover" href="rvota-beremennykh">Göwreli aýallaryň
                                        gusmagy</a></li>
                                <li><a class="animated-hover" href="simfizit-beremennykh">Göwreli aýallaryň
                                        simfiziti</a></li>
                                <li><a class="animated-hover" href="ugrozhayushchiye-prezhdevremennyye-rody">Wagtyndan
                                        öň dogulmagyň howuplary</a></li>
                                <li><a class="animated-hover" href="vozmozhnaya-beremennost'">Mümkin göwrelilik</a>
                                </li>
                                <li><a class="animated-hover" href="zudyashchiy-follikulit">Göwreliligiň gijilewük
                                        follikuliti</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection