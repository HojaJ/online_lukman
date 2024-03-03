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
                                        class="breadcrumbs__current">Dem alyş ulgamy</span>
                            </div>
                            <h1 class="page-header page-header--name"> Dem alyş ulgamy </h1>
                            <p class="page-header-description">Burun geçişleri, bronhlar we öýken ýaly dem alyş
                                ýollaryna täsir edýän keseller.</p></div>
                    </div>
                    <div class="worker_block_wrapper">
                        @foreach(\App\Models\Category::where('name_en','Respiratory system')->first()->workers as $worker)
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
                                <li><a class="animated-hover" href="allergicheskij-rinit.html">Allergiki rinit</a></li>
                                <li><a class="animated-hover" href="bronhialnaya-astma.html">Bronhial demgysma</a></li>
                                <li><a class="animated-hover" href="hronicheskaya-obstruktivnaya-bolezn-legkih.html">Dowamly
                                        obstruktiw öýken keseli</a></li>
                                <li><a class="animated-hover" href="hronicheskij-bronhit.html">Hroniki bronhit</a></li>
                                <li><a class="animated-hover" href="novoobrazovanie-nizhnih-dyhatelnyh-putei.html">Aşaky
                                        dem alyş ýollarynyň neoplazmasy</a></li>
                                <li><a class="animated-hover" href="ostrye-respiratornye-zabolevaniya.html">Ýiti dem
                                        alyş keseli</a></li>
                                <li><a class="animated-hover" href="ostryj-bronhit">Ýiti bronhit</a></li>
                                <li><a class="animated-hover" href="pnevmoniya">Pnewmoniýa</a></li>
                                <li><a class="animated-hover" href="tuberkulez">Inçekesel</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection