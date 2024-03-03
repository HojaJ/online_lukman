@extends('layouts.guest')
@section('content')
 <div class="page-content page-content--overflow-no"> <div class="wrapper"> 
    <div class="layout">
 <div class="layout__left"> <div class="left-content left-content--pink-box"> 
    <div class="header-breadcrumbs-group"> 
    <div class="breadcrumbs">
  <a href="{{ route('diseases') }}" class="breadcrumbs__previous">Disease</a> — <span class="breadcrumbs__current">Skin</span>
</div> 





 <h1 class="page-header page-header--name"> Skin </h1> <p class="page-header-description">Diseases associated with damage to the skin and subcutaneous tissue.</p> </div> </div> <div class="left-bg"></div> </div> <div class="layout__right"> <div class="category box"> <div class="no-box-content"> <div class="search search--border search--diseases"> <p class="animated-hover-inside" style="font-size: 30px">Diseases:</p>
</div> <ul class="no-cols-list diseases-list"> <li> <a class="animated-hover" href="kontaktniy-dermatit.html">Contact dermatitis</a> </li> <li> <a class="animated-hover" href="piodermiya">Pyoderma</a> </li> <li> <a class="animated-hover" href="psoriaz">Psoriasis</a> </li> <li> <a class="animated-hover" href="seboreyniy-dermatit">Seborrheic dermatitis</a> </li> </ul> </div> </div> </div> </div> </div> </div>
        



     @endsection