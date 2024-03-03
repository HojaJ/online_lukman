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
                                        class="breadcrumbs__current">Сердечно-сосудистая система и кровь</span>
                            </div>


                            <h1 class="page-header page-header--name"> Сердечно-сосудистая система и кровь </h1>
                            <p class="page-header-description">Заболевания сердца и кровеносных сосудов, а также болезни
                                крови.</p></div>
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
                                                                                   style="font-size: 30px">Болезни:</p>
                            </div>
                            <ul class="no-cols-list diseases-list">
                                <li><a class="animated-hover" href="anemiya.html">Анемия</a></li>
                                <li><a class="animated-hover" href="arterialnaya-gipertenziya.html">Артериальная
                                        гипертензия</a></li>
                                <li><a class="animated-hover" href="ishemicheskaya-bolezn-serdca.html">Ишемическая
                                        болезнь сердца</a></li>
                                <li><a class="animated-hover" href="khronicheskaya-serdechnaya-nedostatochnost'.html">Хроническая
                                        сердечная недостаточность</a></li>
                                <li><a class="animated-hover" href="miokardit.html">Миокардит</a></li>
                                <li><a class="animated-hover" href="narushenie-ritma-serdca.html">Нарушение ритма
                                        сердца</a></li>
                                <li><a class="animated-hover" href="nejrocirkulyatornaya-distoniya.html">Нейроциркуляторная
                                        дистония</a></li>
                                <li><a class="animated-hover"
                                       href="obliteriruyushchie-zabolevaniya-perifericheskih-arterij.html">Облитерирующие
                                        заболевания периферических артерий</a></li>
                                <li><a class="animated-hover"
                                       href="ostraya-pochechnaya-nedostatochnost'-(povrezhdeniye).html">Острая почечная
                                        недостаточность</a></li>
                                <li><a class="animated-hover"
                                       href="ostroe-narushenie-mozgovogo-krovoobrashcheniya.html">Острое нарушение
                                        мозгового кровообращения</a></li>
                                <li><a class="animated-hover"
                                       href="revmaticheskaya-lihoradka-s-porazheniem-serdca.html">Ревматическая
                                        лихорадка с поражением сердца</a></li>
                                <li><a class="animated-hover" href="sindrom-rejno.html">Синдром Рейно</a></li>
                                <li><a class="animated-hover" href="stenokardiya">Стенокардия</a></li>
                                <li><a class="animated-hover" href="tromboehmboliya-legochnoj-arterii">Тромбоэмболия
                                        легочной артерии</a></li>
                                <li><a class="animated-hover" href="varikoznoye-rasshireniye-ven-nizhnikh-konechnostey">Варикозное
                                        расширение вен нижних конечностей</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection