@extends('layouts.guest')
@section('content')
 <div class="page-content page-content--overflow-no"> <div class="wrapper"> 
    <div class="layout">
 <div class="layout__left"> <div class="left-content left-content--pink-box"> 
    <div class="header-breadcrumbs-group"> 
    <div class="breadcrumbs">
  <a href="{{ route('diseases') }}" class="breadcrumbs__previous">Diseases</a> — <span class="breadcrumbs__current">Pregnancy</span>
</div> 



<h1 class="page-header page-header--name"> Pregnancy </h1> 
  <p class="page-header-description">Conditions that occur during pregnancy.</p> </div> </div> <div class="left-bg"></div>
  </div> 
  <div class="layout__right"> <div class="category box"> 
    <div class="no-box-content">
  <div class="search search--border search--diseases">
    <p class="animated-hover-inside" style="font-size: 30px">Diseases:</p> 
  </div> <ul class="no-cols-list diseases-list"> <li> 
    <a class="animated-hover" href="chrezmernaya-rvota-beremennykh">Excessive vomiting during pregnancy</a>
  </li> <li> <a class="animated-hover" href="ektopicheskaya-beremennost'">Ectopic pregnancy</a> </li>
  <li> <a class="animated-hover" href="istmiko-tservikalnaya-nedostatochnost">Isthmic-cervical insufficiency</a> </li>
  <li> <a class="animated-hover" href="kholestaz-beremennykh">Cholestasis of pregnancy</a> </li>
  <li> <a class="animated-hover" href="khorioamnionit">Chorioamnionitis</a> </li>
  <li> <a class="animated-hover" href="lozhnyye-skhvatki">False contractions</a> </li>
  <li> <a class="animated-hover" href="melazma-beremennykh">Melasma of pregnancy</a> </li>
  <li> <a class="animated-hover" href="papulezniy-dermatit-beremennykh">Papular dermatitis of pregnancy</a> </li> <li> <a class="animated-hover" href="pemfigoid-beremennykh">Pemphigoid pregnant</a> </li>
  <li> <a class="animated-hover" href="predlezhaniye-platsenty">Placenta previa</a> </li> <li> <a class="animated-hover" href="prezhdevremennaya-otsloyka-platsenty">Premature placental abruption</a> </li>
  <li> <a class="animated-hover" href="rvota-beremennykh">Vomiting pregnant</a> </li>
  <li> <a class="animated-hover" href="simfizit-beremennykh">Symphysitis of pregnant women</a> </li>
   <li> <a class="animated-hover" href="ugrozhayushchiye-prezhdevremennyye-rody">Threatened preterm birth</a> </li>
   <li> <a class="animated-hover" href="vozmozhnaya-beremennost'">Possible pregnancy</a> </li> <li> <a class="animated-hover" href="zudyashchiy-follikulit">Itchy folliculitis in pregnancy</a> </li>
   </ul>
</div>
   </div>
   </div> 
</div>
   </div> </div> 









     @endsection