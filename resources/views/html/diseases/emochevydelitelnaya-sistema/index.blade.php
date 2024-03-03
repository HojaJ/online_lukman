@extends('layouts.guest')
@section('content')    <div class="page-content page-content--overflow-no"> <div class="wrapper">
    <div class="layout">
 <div class="layout__left"> <div class="left-content left-content--pink-box"> 
    <div class="header-breadcrumbs-group"> 
    <div class="breadcrumbs">
  <a href="{{ route('disease's) }}" class="breadcrumbs__previous">Disease</a> — <span class="breadcrumbs__current">Urinary system</span>
</div> 




 <h1 class="page-header page-header--name"> Urinary system </h1>  <p class="page-header-description">Diseases associated with impaired kidney function, bladder and urinary tract.</p> </div> </div> <div class="left-bg"></div> </div> <div class="layout__right"> <div class="category box"> <div class="no-box-content"> <div class="search search--border search--diseases">  <p class="animated-hover-inside" style="font-size: 30px">Diseases:</p>
 </div> <ul class="no-cols-list diseases-list"> <li> <a class="animated-hover" href="(.*)">Cystitis</a> </li> </ul> </div> </div> </div> </div> </div> </div>


        



     @endsection