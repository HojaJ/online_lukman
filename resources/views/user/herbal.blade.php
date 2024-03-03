@extends('layouts.guest')
@section('title')
    {{ __('Online Lukman') }}
@endsection
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
                        <h1 class="page-header page-header--name"> {{ __("Medicinal plants") }} </h1>
                        <p class="page-header-description">{{ __("General advice on disease prevention through medicinal plants.") }}</p>
                    </div>
                </div>
                <div class="layout__right">
                    <div class="home box">
                        <div class="box-content">
                            <div class="search search--diseases">
                                <p class="animated-hover-inside" style="font-size: 20px">{{ __("Symptoms that can prevent plants") }}:</p>
                            </div>
                            <ul class="cols-list diseases-list">
                                @foreach($datas as $data)
                                    <li><a class="animated-hover-inside" href="{{ route('herbal_show', $data->id) }}"><h2> {{$data->title}}</h2></a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="box-bg"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection