@extends('layouts.guest')
@section('content')
    <div class="page-content page-content--overflow-no">
        <div class="wrapper">
            <div class="layout">
                <div class="layout__left">
                    <div class="left-content left-content--pink-box">
                        <div class="header-breadcrumbs-group">
                            <div class="breadcrumbs">
                                <a href="{{ route('diseases') }}" class="breadcrumbs__previous">Disease</a> — <span
                                        class="breadcrumbs__current">Male reproductive system</span>
                            </div>


                            <h1 class="page-header page-header--name"> Male reproductive system </h1>
                            <p class="page-header-description">Diseases of the male genital organs, as well as hormonal
                                disorders in men.</p></div>
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
                                                                                   style="font-size: 30px">Diseases:</p>
                            </div>
                            <ul class="no-cols-list diseases-list">
                                <li><a class="animated-hover" href="balanit.html">Balanitis</a></li>
                                <li><a class="animated-hover" href="balanopostit.html">Balanoposthitis</a></li>
                                <li><a class="animated-hover" href="bolezn-Peironi.html">Peyronie's disease</a></li>
                                <li><a class="animated-hover" href="epididimit.html">Epididymitis</a></li>
                                <li><a class="animated-hover" href="erektilnaya-disfunktsiya.html">Erectile
                                        dysfunction</a></li>
                                <li><a class="animated-hover" href="fimoz.html">Phimosis</a></li>
                                <li><a class="animated-hover" href="gidrocele.html">Hydrocele</a></li>
                                <li><a class="animated-hover" href="gipogonadizm.html">Hypogonadism</a></li>
                                <li><a class="animated-hover" href="korotkaya-uzdechka-polovogo-chlena.html">Short
                                        frenulum of the penis</a></li>
                                <li><a class="animated-hover" href="novoobrazovanie-predstatelnoj-zhelezy.html">Neoplasm
                                        of the prostate</a></li>
                                <li><a class="animated-hover" href="novoobrazovaniye-yaichek.html">Testicular
                                        neoplasm</a></li>
                                <li><a class="animated-hover" href="orkhit.html">Orchitis</a></li>
                                <li><a class="animated-hover" href="parafimoz.html">Paraphimosis</a></li>
                                <li><a class="animated-hover" href="perekrut.html">Testicular torsion</a></li>
                                <li><a class="animated-hover" href="perelom-polovogo-chlena.html">Penile fracture</a>
                                </li>
                                <li><a class="animated-hover" href="priapizm.html">Priapism</a></li>
                                <li><a class="animated-hover" href="prostatit.html">Prostatitis</a></li>
                                <li><a class="animated-hover" href="spermatotsele.html">Spermatocele</a></li>
                                <li><a class="animated-hover" href="striktura-uretry.html">Urethral stricture</a></li>
                                <li><a class="animated-hover" href="uretrit.html">Urethritis</a></li>
                                <li><a class="animated-hover" href="ushib-moshonki.html">Scrotal contusion</a></li>
                                <li><a class="animated-hover" href="ushib-polovogo-chlena">Penile contusion</a></li>
                                <li><a class="animated-hover" href="ushib-v-oblasti-promezhnosti">Contusion in the
                                        perineum</a></li>
                                <li><a class="animated-hover" href="varikocele">Varicocele</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection