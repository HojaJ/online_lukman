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
                                        class="breadcrumbs__current">Erkek jyns ulgamy</span>
                            </div>


                            <h1 class="page-header page-header--name"> Erkek jyns ulgamy </h1>
                            <p class="page-header-description">Erkek jyns agzalarynyň keselleri, erkeklerde gormonal
                                bozulmalar.</p></div>
                    </div>
                    <div class="worker_block_wrapper">
                        @foreach(\App\Models\Category::where('name_en','Male reproductive system')->first()->workers as $worker)
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
                                <li><a class="animated-hover" href="balanit.html">Balanit</a></li>
                                <li><a class="animated-hover" href="balanopostit.html">Balanopostit</a></li>
                                <li><a class="animated-hover" href="bolezn-Peironi.html">Peýroni keseli</a></li>
                                <li><a class="animated-hover" href="epididimit.html">Epididimit</a></li>
                                <li><a class="animated-hover" href="erektilnaya-disfunktsiya.html">Erektil
                                        disfunksiýa</a></li>
                                <li><a class="animated-hover" href="fimoz.html">Fimoz</a></li>
                                <li><a class="animated-hover" href="gidrocele.html">Gidrosel</a></li>
                                <li><a class="animated-hover" href="gipogonadizm.html">Gipogonadizm</a></li>
                                <li><a class="animated-hover" href="korotkaya-uzdechka-polovogo-chlena.html">Jyns
                                        agzasynyň gysga uýanjygy</a></li>
                                <li><a class="animated-hover" href="novoobrazovanie-predstatelnoj-zhelezy.html">Prostatektomiýanyň
                                        täze döremegi</a></li>
                                <li><a class="animated-hover" href="novoobrazovaniye-yaichek.html">Ýumurtgalygyň täze
                                        döremegi</a></li>
                                <li><a class="animated-hover" href="orkhit.html">Orhit</a></li>
                                <li><a class="animated-hover" href="parafimoz.html">Parafimoz</a></li>
                                <li><a class="animated-hover" href="perekrut.html">Ýumurtgalygyň burulma</a></li>
                                <li><a class="animated-hover" href="perelom-polovogo-chlena.html">Jyns organyň
                                        döwülmegi</a></li>
                                <li><a class="animated-hover" href="priapizm.html">Priapizm</a></li>
                                <li><a class="animated-hover" href="prostatit.html">Prostatit</a></li>
                                <li><a class="animated-hover" href="spermatotsele.html">Spermatosele</a></li>
                                <li><a class="animated-hover" href="striktura-uretry.html">Uretral berkitme</a></li>
                                <li><a class="animated-hover" href="uretrit.html">Uretrit</a></li>
                                <li><a class="animated-hover" href="ushib-moshonki.html">Ýumurtga haltajyga şikes
                                        ýetmegi</a></li>
                                <li><a class="animated-hover" href="ushib-polovogo-chlena">Jyns organyna şikes
                                        ýetmegi</a></li>
                                <li><a class="animated-hover" href="ushib-v-oblasti-promezhnosti">Ýamyz aralygyna şikes
                                        ýetmegi</a></li>
                                <li><a class="animated-hover" href="varikocele">Warikosele</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection