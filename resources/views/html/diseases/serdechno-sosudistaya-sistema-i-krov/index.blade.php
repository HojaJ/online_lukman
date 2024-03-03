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
                                        class="breadcrumbs__current">Ýürek-damar ulgamy we gan</span>
                            </div>


                            <h1 class="page-header page-header--name"> Ýürek-damar ulgamy we gan </h1>
                            <p class="page-header-description">Ýürek we gan damarlarynyň keselleri, şeýle hem gan
                                keselleri.</p></div>
                    </div>
                    <div class="worker_block_wrapper">
                        @foreach(\App\Models\Category::where('name_en','Cardiovascular system and blood')->first()->workers as $worker)
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
                                <li><a class="animated-hover" href="anemiya.html">Ganazlyk</a></li>
                                <li><a class="animated-hover" href="arterialnaya-gipertenziya.html">Arterial
                                        gipertoniýa</a></li>
                                <li><a class="animated-hover" href="ishemicheskaya-bolezn-serdca.html">Işemiýa
                                        keseli</a></li>
                                <li><a class="animated-hover" href="khronicheskaya-serdechnaya-nedostatochnost'.html">Dowamly
                                        ýürek ýetmezçiligi</a></li>
                                <li><a class="animated-hover" href="miokardit.html">Miýokardit</a></li>
                                <li><a class="animated-hover" href="narushenie-ritma-serdca.html">Ýüregiň ritminiň
                                        bozulmagy</a></li>
                                <li><a class="animated-hover" href="nejrocirkulyatornaya-distoniya.html">Newrokirkulýasiýa
                                        distoniýasy</a></li>
                                <li><a class="animated-hover"
                                       href="obliteriruyushchie-zabolevaniya-perifericheskih-arterij.html">Trombangit
                                        periferiýa arteriýalar</a></li>
                                <li><a class="animated-hover"
                                       href="ostraya-pochechnaya-nedostatochnost'-(povrezhdeniye).html">Ýiti böwrek
                                        ýetmezçilik keseli</a></li>
                                <li><a class="animated-hover"
                                       href="ostroe-narushenie-mozgovogo-krovoobrashcheniya.html">Ýiti beýni gan
                                        aýlanyşyň bozulmagy</a></li>
                                <li><a class="animated-hover"
                                       href="revmaticheskaya-lihoradka-s-porazheniem-serdca.html">Guryagry gyzzyrmasynyň
                                        ýürege zeher ýetirmegi</a></li>
                                <li><a class="animated-hover" href="sindrom-rejno.html">Reýnaud sindromy</a></li>
                                <li><a class="animated-hover" href="stenokardiya">Stenokardiýa</a></li>
                                <li><a class="animated-hover" href="tromboehmboliya-legochnoj-arterii">Tromboemboliýa
                                        öyken arteriýa keseli</a></li>
                                <li><a class="animated-hover" href="varikoznoye-rasshireniye-ven-nizhnikh-konechnostey">Wenalaryň
                                        Warikoz keseli</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection