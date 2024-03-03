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
                                        class="breadcrumbs__current">Nervous system</span>
                            </div>


                            <h1 class="page-header page-header--name"> Nervous system </h1>
                            <p class="page-header-description">Diseases associated with impaired nervous system
                                function.</p></div>
                    </div>
                    <div class="worker_block_wrapper">
                        @foreach(\App\Models\Category::where('name_en','Nervous system')->first()->workers as $worker)
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
                                <li><a class="animated-hover" href="bolezn-alcgejmera.html">Alzheimer's disease</a></li>
                                <li><a class="animated-hover" href="golovnaya-bol-napryazheniya.html">Tension
                                        headache</a></li>
                                <li><a class="animated-hover" href="klasternaya-golovnaya-bol.html">Cluster headache</a>
                                </li>
                                <li><a class="animated-hover" href="migren.html">Migraine</a></li>
                                <li><a class="animated-hover" href="parkinsonizm.html">Parkinsonism</a></li>
                                <li><a class="animated-hover" href="pokhmelnyi-sindrom.html">Hangover syndrome</a></li>
                                <li><a class="animated-hover" href="polinejropatii.html">Polyneuropathies</a></li>
                                <li><a class="animated-hover" href="posttravmaticheskaya-golovnaya-bol.html">Post-traumatic
                                        headache</a></li>
                                <li><a class="animated-hover" href="radikulopatii.html">Radiculopathy</a></li>
                                <li><a class="animated-hover" href="rasseyannyj-skleroz.html">Multiple sclerosis</a>
                                </li>
                                <li><a class="animated-hover" href="sindrom-khronicheskoĭ-ustalosti">Chronic fatigue
                                        syndrome</a></li>
                                <li><a class="animated-hover" href="sindrom-otmeny-kofeina">Caffeine Withdrawal
                                        Syndrome</a></li>
                                <li><a class="animated-hover" href="ukachivaniye">Motion sickness</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection