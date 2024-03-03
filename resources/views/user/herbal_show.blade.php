@extends('layouts.guest')
@section('title')
    {{ __('Online Lukman') }}
@endsection
@section('content')
    <div class="page-content page-content--overflow-no">
        <div class="wrapper">
            <div class="layout">
                <div class="layout__left">
                    <div class="left-content left-content--pink-box">
                        <div class="header-breadcrumbs-group">
                            <div class="breadcrumbs">
                                <a href="{{ route('herbal-index') }}"
                                   class="breadcrumbs__previous">{{ __("Medicinal plants") }}</a> — <span
                                        class="breadcrumbs__current">{{ $herbal->title }}</span>
                            </div>
                            <h1 class="page-header page-header--name"> {{ $herbal->title }} </h1>
                        </div>
                        <div class="left-bg"></div>
                    </div>
                </div>
                <div class="layout__right">
                    <div class="category box">
                        <div class="no-box-content">
                            <div class="search search--border search--diseases">
                                <p class="animated-hover-inside" style="font-size: 30px">{{ __("Diseases") }}:</p> <br>
                            </div>
                            {!! $herbal->description !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection