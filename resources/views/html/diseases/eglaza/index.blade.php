@extends('layouts.guest')
@section('content')
 <div class="page-content page-content--overflow-no"> <div class="wrapper"> 
    <div class="layout">
 <div class="layout__left"> <div class="left-content left-content--pink-box"> 
    <div class="header-breadcrumbs-group"> 
    <div class="breadcrumbs">
  <a href="{{ route('diseases') }}" class="breadcrumbs__previous">Disease</a> — <span class="breadcrumbs__current">Eye</span>
</div> 




 <h1 class="page-header page-header--name"> Eye </h1>  <p class="page-header-description">Diseases associated with damage to the organs of vision.</p> </div> </div> <div class="left-bg"></div> </div> <div class="layout__right"> <div class="category box"> <div class="no-box-content"> <div class="search search--border search--diseases">  <p class="animated-hover-inside" style="font-size: 30px">Diseases:</p> </div> <ul class="no-cols-list diseases-list"> <li> <a class="animated-hover" href="allergicheskiy-konyunktivit.html">Allergic conjunctivitis</a> </li> <li> <a class="animated-hover" href="gipermetropiya.html">Hypermetropia</a> </li> <li> <a class="animated-hover" href="infekcionnyj-konyunktivit.html">Infectious conjunctivitis</a> </li> <li> <a class="animated-hover" href="inorodnoe-telo-glaza.html">Foreign body of the eye</a> </li> <li> <a class="animated-hover" href="katarkta.html">Cataract</a> </li> <li> <a class="animated-hover" href="keratit">Keratitis</a> </li> <li> <a class="animated-hover" href="miopiya">Myopia</a> </li> <li> <a class="animated-hover" href="presbiopiya">Presbyopia</a> </li> </ul> </div> </div> </div> </div> </div> </div>

        



     @endsection