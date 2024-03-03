@extends('layouts.guest')
@section('content')     <div class="page-content page-content--overflow-no"> <div class="wrapper">
    <div class="layout">
 <div class="layout__left"> <div class="left-content left-content--pink-box"> 
    <div class="header-breadcrumbs-group"> 
    <div class="breadcrumbs">
  <a href="{{ route('diseases') }}" class="breadcrumbs__previous">Disease</a> — <span class="breadcrumbs__current">Ear, throat, nose</span>
</div> 







 <h1 class="page-header page-header--name"> Ear, throat, nose </h1>  <p class="page-header-description">Diseases of ENT organs.</p> </div> </div> <div class="left-bg"></div> </div> <div class="layout__right"> <div class="category box"> <div class="no-box-content"> <div class="search search--border search--diseases">  <p class="animated-hover-inside" style="font-size: 30px">Diseases:</p> </div> <ul class="no-cols-list diseases-list"> <li> <a class="animated-hover" href="bolezn-menera.html">Meniere's disease</a> </li> <li> <a class="animated-hover" href="labirintit.html">Labyrinthitis</a> </li> <li> <a class="animated-hover" href="laringit.html">Laryngitis</a> </li> <li> <a class="animated-hover" href="mastoidit.html">Mastoiditis</a> </li> <li> <a class="animated-hover" href="naruzhnyj-otit.html">Otitis externa</a> </li> <li> <a class="animated-hover" href="otoskleroz.html">Otosclerosis</a> </li> <li> <a class="animated-hover" href="sernaya-probka.html">Sulfur plug</a> </li> <li> <a class="animated-hover" href="sindrom-obstruktivnogo-nochnogo-apnoeh.html">Obstructive sleep apnea syndrome</a> </li> <li> <a class="animated-hover" href="sinusit.html">Sinusitis</a> </li> <li> <a class="animated-hover" href="snizhenie-sluha-svyazannoe-s-vozdejstviem-shuma.html">Noise-related hearing loss</a> </li> <li> <a class="animated-hover" href="srednij-otit">Otitis media</a> </li> <li> <a class="animated-hover" href="tonzillit">Tonsillitis</a> </li> <li> <a class="animated-hover" href="vazomotornyj-rinit">Vasomotor rhinitis</a> </li> </ul> </div> </div> </div> </div> </div> </div>
        



     @endsection