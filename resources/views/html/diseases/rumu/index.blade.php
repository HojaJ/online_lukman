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
                                        class="breadcrumbs__current">Мужская половая система</span>
                            </div>


                            <h1 class="page-header page-header--name"> Мужская половая система </h1>
                            <p class="page-header-description">Болезни мужских половых органов, а также гормональные
                                нарушения у мужчин.</p></div>
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
                                                                                   style="font-size: 30px">Болезни:</p>
                            </div>
                            <ul class="no-cols-list diseases-list">
                                <li><a class="animated-hover" href="balanit.html">Баланит</a></li>
                                <li><a class="animated-hover" href="balanopostit.html">Баланопостит</a></li>
                                <li><a class="animated-hover" href="bolezn-Peironi.html">Болезнь Пейрони</a></li>
                                <li><a class="animated-hover" href="epididimit.html">Эпидидимит</a></li>
                                <li><a class="animated-hover" href="erektilnaya-disfunktsiya.html">Эректильная
                                        дисфункция</a></li>
                                <li><a class="animated-hover" href="fimoz.html">Фимоз</a></li>
                                <li><a class="animated-hover" href="gidrocele.html">Гидроцеле</a></li>
                                <li><a class="animated-hover" href="gipogonadizm.html">Гипогонадизм</a></li>
                                <li><a class="animated-hover" href="korotkaya-uzdechka-polovogo-chlena.html">Короткая
                                        уздечка полового члена</a></li>
                                <li><a class="animated-hover" href="novoobrazovanie-predstatelnoj-zhelezy.html">Новообразование
                                        предстательной железы </a></li>
                                <li><a class="animated-hover" href="novoobrazovaniye-yaichek.html">Новообразование
                                        яичка</a></li>
                                <li><a class="animated-hover" href="orkhit.html">Орхит</a></li>
                                <li><a class="animated-hover" href="parafimoz.html">Парафимоз</a></li>
                                <li><a class="animated-hover" href="perekrut.html">Перекрут яичка</a></li>
                                <li><a class="animated-hover" href="perelom-polovogo-chlena.html">Перелом полового
                                        члена</a></li>
                                <li><a class="animated-hover" href="priapizm.html">Приапизм</a></li>
                                <li><a class="animated-hover" href="prostatit.html">Простатит</a></li>
                                <li><a class="animated-hover" href="spermatotsele.html">Сперматоцеле</a></li>
                                <li><a class="animated-hover" href="striktura-uretry.html">Стриктура уретры</a></li>
                                <li><a class="animated-hover" href="uretrit.html">Уретрит</a></li>
                                <li><a class="animated-hover" href="ushib-moshonki.html">Ушиб мошонки</a></li>
                                <li><a class="animated-hover" href="ushib-polovogo-chlena">Ушиб полового члена</a></li>
                                <li><a class="animated-hover" href="ushib-v-oblasti-promezhnosti">Ушиб в области
                                        промежности</a></li>
                                <li><a class="animated-hover" href="varikocele">Варикоцеле</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection