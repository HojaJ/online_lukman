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
                                        class="breadcrumbs__current">Injuries and bruises</span>
                            </div>


                            <h1 class="page-header page-header--name"> Injuries and bruises </h1>
                            <p class="page-header-description">Injuries and bruises, symptoms, treatment and
                                diagnosis.</p></div>
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
                                                                                   style="font-size: 30px">Diseases:</p>
                            </div>
                            <ul class="no-cols-list diseases-list">
                                <li><a class="animated-hover" href="perelom-bolshogo-paltsa-stopy.html">Big toe
                                        fracture</a></li>
                                <li><a class="animated-hover"
                                       href="perelom-distalnykh-kontsov-luchevoy-i-loktevoy-kosti.html">Fracture of the
                                        distal ends of the radius and ulna</a></li>
                                <li><a class="animated-hover" href="perelom-goleni.html">Shin fracture</a></li>
                                <li><a class="animated-hover" href="perelom-lodyzhki.html">Ankle fracture</a></li>
                                <li><a class="animated-hover" href="perelom-nadkolennika.html">Patella fracture</a></li>
                                <li><a class="animated-hover" href="perelom-oblasti-plechevogo-sustava.html">Shoulder
                                        fracture</a></li>
                                <li><a class="animated-hover" href="perelom-paltsa-stopy.html">Toe fracture</a></li>
                                <li><a class="animated-hover" href="perelom-sheiki-bedra.html">Hip fracture</a></li>
                                <li><a class="animated-hover" href="perelomy.html">Fractures</a></li>
                                <li><a class="animated-hover" href="rastyazheniye-svyazok-bolshogo-paltsa.html">Big toe
                                        sprain</a></li>
                                <li><a class="animated-hover" href="rastyazheniye-svyazok-kisti.html">Sprained hand
                                        ligaments</a></li>
                                <li><a class="animated-hover" href="rastyazheniye-svyazok-kolena.html">Sprained knee
                                        ligaments</a></li>
                                <li><a class="animated-hover" href="rastyazheniye-svyazok-lodyzhki.html">Sprained ankle
                                        ligaments</a></li>
                                <li><a class="animated-hover" href="rastyazheniye-svyazok-loktya.html">Elbow sprain</a>
                                </li>
                                <li><a class="animated-hover" href="rastyazheniye-svyazok-plechevogo-sustava.html">Sprains
                                        of the ligaments of the shoulder joint</a></li>
                                <li><a class="animated-hover" href="rastyazheniye-svyazok-zapyastya.html">Sprained wrist
                                        ligaments</a></li>
                                <li><a class="animated-hover" href="travmy-svyazok.html">Ligament injuries</a></li>
                                <li><a class="animated-hover" href="ushib-kisti.html">Bruised hand</a></li>
                                <li><a class="animated-hover" href="ushib-kolena.html">Bruised knee</a></li>
                                <li><a class="animated-hover" href="ushib-lodyzhki.html">Ankle injury</a></li>
                                <li><a class="animated-hover" href="ushib-loktya.html">Bruised elbow</a></li>
                                <li><a class="animated-hover" href="ushib-myagkih-tkanei.html">Soft tissue contusion</a>
                                </li>
                                <li><a class="animated-hover" href="ushib-paltsa-stopy.html">Bruised toe</a></li>
                                <li><a class="animated-hover" href="ushib-plecha.html">Bruised shoulder</a></li>
                                <li><a class="animated-hover" href="ushib-predplech'ya.html">Forearm contusion</a></li>
                                <li><a class="animated-hover" href="ushib-stopy">Bruised foot</a></li>
                                <li><a class="animated-hover" href="ushib-v-raĭone-tazobedrennogo-sustava">Contusion in
                                        the area of the hip joint</a></li>
                                <li><a class="animated-hover" href="ushib-zapyastya">Bruised wrist</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection