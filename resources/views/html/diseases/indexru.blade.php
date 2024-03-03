@extends('layouts.guest')
@section('content')
    <div class="page-content page-content--overflow-no page-content--overlap">
        <div class="wrapper">
            <div class="layout">
                <div class="layout__left">
                    <div class="left-content">
                        <div class="header-breadcrumbs-group">
                            <div class="breadcrumbs">
                            </div>
                        </div>
                        <h1 class="page-header page-header--name"> Заболевания </h1>
                        <p class="page-header-description">Статьи пишут эксперты с медицинским образованием, но при этом
                            они остаются понятными для людей, которые не знают сложных медицинских терминов.</p>
                    </div>
                </div>
                <div class="layout__right">
                    <div class="home box">
                        <div class="box-content">
                            <div class="search search--diseases">
                                <p class="animated-hover-inside" style="font-size: 20px">Разделы болезней:</p>
                            </div>
                            <ul class="cols-list diseases-list">
                                <li><a class="animated-hover-inside" href="rub\index"><h2> Беременность </h2></a>
                                </li>
                                <li><a class="animated-hover-inside" href="rug\index"><h2> Глаза </h2></a></li>
                                <li><a class="animated-hover-inside" href="rud\index"><h2> Дыхательная система </h2>
                                    </a></li>
                                <li><a class="animated-hover-inside" href="ruz\index"><h2> Женская половая система и
                                            молочные железы </h2></a></li>
                                <li><a class="animated-hover-inside" href="rui\index"><h2> Инфекции </h2></a></li>
                                <li><a class="animated-hover-inside" href="rukozha\index"><h2> Кожа </h2></a></li>
                                <li><a class="animated-hover-inside" href="rukosti\index"><h2> Кости, суставы и
                                            мышцы </h2></a></li>
                                <li><a class="animated-hover-inside" href="rumo\index"><h2> Мочевыделительная
                                            система </h2></a></li>
                                <li><a class="animated-hover-inside" href="rumu\index"><h2> Мужская половая
                                            система </h2></a></li>
                                <li><a class="animated-hover-inside" href="run\index"><h2> Нервная система </h2></a>
                                </li>
                                <li><a class="animated-hover-inside" href="rupe\index"><h2> Печень и желчевыводящие
                                            пути </h2></a></li>
                                <li><a class="animated-hover-inside" href="rupi\index"><h2> Пищеварительная
                                            система </h2></a></li>
                                <li><a class="animated-hover-inside" href="rur\index"><h2> Ротовая полость </h2></a>
                                </li>
                                <li><a class="animated-hover-inside" href="rus\index"><h2> Сердечно-сосудистая
                                            система и кровь </h2></a></li>
                                <li><a class="animated-hover-inside" href="rut\index"><h2> Травмы и ушибы </h2></a>
                                </li>
                                <li><a class="animated-hover-inside" href="ruu\index"><h2> Ухо, горло, нос </h2></a>
                                </li>
                                <li><a class="animated-hover-inside" href="rue\index"><h2> Эндокринные железы </h2>
                                    </a></li>
                            </ul>
                        </div>
                        <div class="box-bg"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection