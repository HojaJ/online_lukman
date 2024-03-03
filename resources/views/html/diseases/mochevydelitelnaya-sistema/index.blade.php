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
                                        class="breadcrumbs__current">Peşew ulgamy</span>
                            </div>


                            <h1 class="page-header page-header--name"> Peşew ulgamy</h1>
                            <p class="page-header-description">Böwrekleriň, öt haltanyň we peşew ýollarynyň işiniň
                                bozulmagy bilen baglanyşykly keseller.</p></div>
                    </div>
                    <div class="worker_block_wrapper">
                        @foreach(\App\Models\Category::where('name_en','Urinary system')->first()->workers as $worker)
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
                                <li><a class="animated-hover" href="giperaktivnyy-mochevoy-puzyr.html">Artykmaç öt
                                        haltasy</a></li>
                                <li><a class="animated-hover" href="glomerulonefrit.html">Glomerulonefrit</a></li>
                                <li><a class="animated-hover" href="khronicheskaya-bolezn'-pochek.html">Dowamly böwrek
                                        keseli</a></li>
                                <li><a class="animated-hover" href="luchevoy-tsistit.html">Bilek sintiti</a></li>
                                <li><a class="animated-hover" href="novoobrazovaniye-mochevogo-puzyrya.html">Peşew
                                        haltasynda täze emele gelen daş</a></li>
                                <li><a class="animated-hover" href="novoobrazovaniye-pochki.html">Täze böwrekler
                                        döremegi</a></li>
                                <li><a class="animated-hover" href="ostraya-pochechnaya-nedostatochnost.html">Ýiti
                                        böwrek ýetmezçiligi</a></li>
                                <li><a class="animated-hover" href="pielonefrit">Piýelonefrit</a></li>
                                <li><a class="animated-hover" href="pochechnaya-kolika">Böwrek sanjysy</a></li>
                                <li><a class="animated-hover" href="tsistit">Sistit</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection