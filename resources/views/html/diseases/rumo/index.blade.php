`@extends('layouts.guest')
@section('content')
    <div class="page-content page-content--overflow-no">
        <div class="wrapper">
            <div class="layout">
                <div class="layout__left">
                    <div class="left-content left-content--pink-box">
                        <div class="header-breadcrumbs-group">
                            <div class="breadcrumbs">
                                <a href="{{ route('diseases') }}" class="breadcrumbs__previous">Заболевания</a> — <span
                                        class="breadcrumbs__current">Мочевыделительная система</span>
                            </div>


                            <h1 class="page-header page-header--name"> Мочевыделительная система</h1>
                            <p class="page-header-description">Заболевания, связанные с нарушением функции почек,
                                мочевого пузыря и мочевыводящих путей.</p></div>
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
                                                                                   style="font-size: 30px">Болезни:</p>
                            </div>
                            <ul class="no-cols-list diseases-list">
                                <li><a class="animated-hover" href="giperaktivnyy-mochevoy-puzyr.html">Гиперактивный
                                        мочевой пузырь</a></li>
                                <li><a class="animated-hover" href="glomerulonefrit.html">Гломерулонефрит</a></li>
                                <li><a class="animated-hover" href="khronicheskaya-bolezn'-pochek.html">Хроническая
                                        болезнь почек</a></li>
                                <li><a class="animated-hover" href="luchevoy-tsistit.html">Лучевой цистит</a></li>
                                <li><a class="animated-hover" href="novoobrazovaniye-mochevogo-puzyrya.html">Новообразование
                                        мочевого пузыря</a></li>
                                <li><a class="animated-hover" href="novoobrazovaniye-pochki.html">Новообразование
                                        почки</a></li>
                                <li><a class="animated-hover" href="ostraya-pochechnaya-nedostatochnost.html">Острая
                                        почечная недостаточность</a></li>
                                <li><a class="animated-hover" href="pielonefrit">Пиелонефрит</a></li>
                                <li><a class="animated-hover" href="pochechnaya-kolika">Почечная колика</a></li>
                                <li><a class="animated-hover" href="tsistit">Цистит</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection`