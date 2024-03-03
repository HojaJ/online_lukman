﻿@extends('layouts.guest')
@section('content')
    <div class="page-content page-content--overflow-no">
        <div class="wrapper">
            <div class="layout">
                <div class="layout__left">
                    <div class="left-content left-content--pink-box">
                        <div class="header-breadcrumbs-group">
                            <div class="breadcrumbs">
                                <a href="{{ route('diseases') }}" class="breadcrumbs__previous">Заболевания</a> — <span
                                        class="breadcrumbs__current">Глаза</span>
                            </div>


                            <h1 class="page-header page-header--name"> Глаза </h1>
                            <p class="page-header-description">Заболевания, связанные с поражением органов зрения.</p>
                        </div>
                    </div>
                    <div class="worker_block_wrapper">
                        @foreach(\App\Models\Category::where('name_en','Eye')->first()->workers as $worker)
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
                                <li><a class="animated-hover" href="allergicheskiy-konyunktivit.html">Аллергический
                                        конъюнктивит</a></li>
                                <li><a class="animated-hover" href="gipermetropiya.html">Гиперметропия</a></li>
                                <li><a class="animated-hover" href="infekcionnyj-konyunktivit.html">Инфекционный
                                        конъюнктивит</a></li>
                                <li><a class="animated-hover" href="inorodnoe-telo-glaza.html">Инородное тело глаза</a>
                                </li>
                                <li><a class="animated-hover" href="katarkta.html">Катаракта</a></li>
                                <li><a class="animated-hover" href="keratit">Кератит</a></li>
                                <li><a class="animated-hover" href="miopiya">Миопия</a></li>
                                <li><a class="animated-hover" href="presbiopiya">Пресбиопия</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection