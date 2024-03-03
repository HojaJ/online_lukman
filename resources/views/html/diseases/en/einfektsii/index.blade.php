@extends('layouts.guest')
@section('content')
 <div class="page-content page-content--overflow-no"> <div class="wrapper"> 
    <div class="layout">
 <div class="layout__left"> <div class="left-content left-content--pink-box"> 
    <div class="header-breadcrumbs-group"> 
    <div class="breadcrumbs">
  <a href="{{ route('diseases') }}" class="breadcrumbs__previous">Disease</a> — <span class="breadcrumbs__current">Infection</span>
</div> 





<h1 class="page-header page-header--name"> Infection </h1> <p class="page-header-description">Diseases caused by an infectious agent (bacteria, viruses, fungi).</p> </div> </div> <div class="left-bg"></div> </div> <div class="layout__right"> <div class="category box"> <div class="no-box-content"> <div class="search search--border search--diseases"><p class="animated-hover-inside" style="font-size: 30px">Diseases:</p>  </div> <ul class="no-cols-list diseases-list"> <li> <a class="animated-hover" href="coronavirus-infection.html">Coronavirus infection(COVID-19)</a> </li> <li> <a class="animated-hover" href="difteriya.html">Diphtheria</a> </li> <li> <a class="animated-hover" href="gripp.html">Flu</a> </li> <li> <a class="animated-hover" href="kishechnaya-infektsiya.html">Intestinal infection</a> </li> <li> <a class="animated-hover" href="kor.html">Measles</a> </li> <li> <a class="animated-hover" href="krasnuha.html">Rubella</a> </li> <li> <a class="animated-hover" href="meningit.html">Meningitis</a> </li> <li> <a class="animated-hover" href="opoyasyvayushchij-gerpes">Herpes zoster</a> </li> <li> <a class="animated-hover" href="skarlatina">Scarlet fever</a> </li> <li> <a class="animated-hover" href="vetryanaya-ospa">Chickenpox</a> </li> </ul> </div> </div> </div> </div> </div> </div>
        



     @endsection