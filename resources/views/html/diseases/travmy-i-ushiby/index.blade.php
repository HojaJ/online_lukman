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
                                        class="breadcrumbs__current">Döwük ýenjikler</span>
                            </div>


                            <h1 class="page-header page-header--name"> Döwük ýenjikler </h1>
                            <p class="page-header-description">Injaralanmalar we gögermeler, alamatlar, bejergi we
                                diagnoz.</p></div>
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
                                                                                   style="font-size: 30px">Keseller:</p>
                            </div>
                            <ul class="no-cols-list diseases-list">
                                <li><a class="animated-hover" href="perelom-bolshogo-paltsa-stopy.html">Aýagyň başan
                                        barmagynyň döwülmegi</a></li>
                                <li><a class="animated-hover"
                                       href="perelom-distalnykh-kontsov-luchevoy-i-loktevoy-kosti.html">Bilek bilen
                                        tirsegiň distal uçlarynyň sünkiniň döwülmegi</a></li>
                                <li><a class="animated-hover" href="perelom-goleni.html">Injigiň döwülmegi</a></li>
                                <li><a class="animated-hover" href="perelom-lodyzhki.html">Topugyň döwülmegi</a></li>
                                <li><a class="animated-hover" href="perelom-nadkolennika.html">Dyzçanagyň döwülmegi</a>
                                </li>
                                <li><a class="animated-hover" href="perelom-oblasti-plechevogo-sustava.html">Egniň
                                        döwülmegi</a></li>
                                <li><a class="animated-hover" href="perelom-paltsa-stopy.html">Aýagyň barmaklarynyň
                                        döwülmegi</a></li>
                                <li><a class="animated-hover" href="perelom-sheiki-bedra.html">Buduň döwülmegi</a></li>
                                <li><a class="animated-hover" href="perelomy.html">Döwükler</a></li>
                                <li><a class="animated-hover" href="rastyazheniye-svyazok-bolshogo-paltsa.html">Aýagyň
                                        başan barmagynyň bogunlarynyň süýnmegi</a></li>
                                <li><a class="animated-hover" href="rastyazheniye-svyazok-kisti.html">Goşaryň
                                        bogunlarynyň süýnmegi</a></li>
                                <li><a class="animated-hover" href="rastyazheniye-svyazok-kolena.html">Dyzyň
                                        bogunlarynyň süýnmegi</a></li>
                                <li><a class="animated-hover" href="rastyazheniye-svyazok-lodyzhki.html">Topugyň
                                        bogunlarynyň süýnmegi</a></li>
                                <li><a class="animated-hover" href="rastyazheniye-svyazok-loktya.html">Tirsegiň
                                        bogunlarynyň süýnmegi</a></li>
                                <li><a class="animated-hover" href="rastyazheniye-svyazok-plechevogo-sustava.html">Egniň
                                        bogunlarynyň süýnmegi</a></li>
                                <li><a class="animated-hover" href="rastyazheniye-svyazok-zapyastya.html">Bilegiň
                                        bogunlarynyň süýnmegi</a></li>
                                <li><a class="animated-hover" href="travmy-svyazok.html">Bogunlaryň şikeslenmegi</a>
                                </li>
                                <li><a class="animated-hover" href="ushib-kisti.html">Goşaryň şikeslenmegi</a></li>
                                <li><a class="animated-hover" href="ushib-kolena.html">Dyzyň şikeslenmegi</a></li>
                                <li><a class="animated-hover" href="ushib-lodyzhki.html">Topugyň şikeslenmegi</a></li>
                                <li><a class="animated-hover" href="ushib-loktya.html">Tirkegiň şikeslenmegi</a></li>
                                <li><a class="animated-hover" href="ushib-myagkih-tkanei.html">Ýumşak dokumalaryň
                                        şikeslenmegi</a></li>
                                <li><a class="animated-hover" href="ushib-paltsa-stopy.html">Aýagyň barmaklarynyň
                                        şikeslenmegi</a></li>
                                <li><a class="animated-hover" href="ushib-plecha.html">Eginiň şikeslenmegi</a></li>
                                <li><a class="animated-hover" href="ushib-predplech'ya.html">Muskulyň şikeslenmegi</a>
                                </li>
                                <li><a class="animated-hover" href="ushib-stopy">Dabanyň şikeslenmegi</a></li>
                                <li><a class="animated-hover" href="ushib-v-raĭone-tazobedrennogo-sustava">Çanaklyk-but
                                        bognunyň şikeslenmegi</a></li>
                                <li><a class="animated-hover" href="ushib-zapyastya">Bilegiň şikeslenmegi</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection