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
                                        class="breadcrumbs__current">Печень и желчевыводящие пути</span>
                            </div>


                            <h1 class="page-header page-header--name"> Печень и желчевыводящие пути </h1>
                            <p class="page-header-description">Заболевания, связанные с нарушением функции печени и
                                желчного пузыря.</p></div>
                    </div>
                    <div class="worker_block_wrapper">
                        @foreach(\App\Models\Category::where('name_en','Liver and biliary tract')->first()->workers as $worker)
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
                                <li><a class="animated-hover" href="diskineziya-zhelchevyvodyashchikh-putei.html">Дискинезия
                                        желчевыводящих путей</a></li>
                                <li><a class="animated-hover" href="gepatit.html">Гепатит</a></li>
                                <li><a class="animated-hover" href="khronicheskiy-kholetsistit.html">Хронический
                                        холецистит</a></li>
                                <li><a class="animated-hover" href="ostryi-kholetsistit.html">Острый холецистит</a></li>
                                <li><a class="animated-hover" href="pervichnyj-skleroziruyushchij-holangit">Первичный
                                        склерозирующий холангит</a></li>
                                <li><a class="animated-hover" href="pervichnyy-biliarnyy-kholangit">Первичный билиарный
                                        холангит</a></li>
                                <li><a class="animated-hover" href="zhelchekamennaya-bolezn">Желчекаменная болезнь</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection