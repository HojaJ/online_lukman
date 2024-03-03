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
                                        class="breadcrumbs__current">Digestive system</span>
                            </div>


                            <h1 class="page-header page-header--name"> Digestive system </h1>
                            <p class="page-header-description">Diseases of the gastrointestinal tract.</p></div>
                    </div>
                    <div class="worker_block_wrapper">
                        @foreach(\App\Models\Category::where('name_en','Digestive system')->first()->workers as $worker)
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
                                <li><a class="animated-hover" href="appendicit.html">Appendicitis</a></li>
                                <li><a class="animated-hover" href="celiakiya.html">Celiac disease</a></li>
                                <li><a class="animated-hover" href="funkcionalnaya-dispepsiya.html">Functional
                                        dyspepsia</a></li>
                                <li><a class="animated-hover" href="gastroezofagealnaya-reflyuksnaya-bolezn.html">Gastroesophageal
                                        reflux disease</a></li>
                                <li><a class="animated-hover" href="gemorroj.html">Haemorrhoids</a></li>
                                <li><a class="animated-hover" href="hronicheskij-pankreatit.html">Chronic
                                        pancreatitis</a></li>
                                <li><a class="animated-hover" href="kishechnaya-neprohodimost.html">Intestinal
                                        obstruction</a></li>
                                <li><a class="animated-hover" href="laktaznaya-nedostatochnost.html">Lactase
                                        deficiency</a></li>
                                <li><a class="animated-hover" href="novoobrazovanie-tolstoj-kishki.html">Colon
                                        neoplasm</a></li>
                                <li><a class="animated-hover" href="ostryj-pankreatit.html">Acute pancreatitis</a></li>
                                <li><a class="animated-hover" href="sindrom-razdrazhennogo-kishechnika">Irritable bowel
                                        syndrome</a></li>
                                <li><a class="animated-hover" href="vospalitelnoye-zabolevaniye-kishechnika">Non-specific
                                        inflammatory bowel disease</a></li>
                                <li><a class="animated-hover" href="yazva-zheludka-ili-dvenadtsatiperstnoy-kishki">Stomach
                                        or duodenal ulcer</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection