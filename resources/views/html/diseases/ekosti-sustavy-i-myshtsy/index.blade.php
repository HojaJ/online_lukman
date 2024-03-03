@extends('layouts.guest')
@section('content')
 <div class="page-content page-content--overflow-no"> <div class="wrapper"> 
    <div class="layout">
 <div class="layout__left"> <div class="left-content left-content--pink-box"> 
    <div class="header-breadcrumbs-group"> 
    <div class="breadcrumbs">
  <a href="{{ route('diseases') }}" class="breadcrumbs__previous">Disease</a> — <span class="breadcrumbs__current">Bones, joints and muscles</span>
</div> 





 <h1 class="page-header page-header--name"> Bones, joints and muscles </h1>  <p class="page-header-description">Diseases of the musculoskeletal system and connective tissue.</p> </div> </div> <div class="left-bg"></div> </div> <div class="layout__right"> <div class="category box"> <div class="no-box-content"> <div class="search search--border search--diseases">     <p class="animated-hover-inside" style="font-size: 30px">Diseases:</p> </div> <ul class="no-cols-list diseases-list"> <li> <a class="animated-hover" href="mialgiya-posle-fizicheskikh-nagruzok.html">Myalgia after exercise</a> </li> <li> <a class="animated-hover" href="osteoartroz.html">Osteoarthritis</a> </li> <li> <a class="animated-hover" href="osteoporoz.html">Osteoporosis</a> </li> <li> <a class="animated-hover" href="podagra">Gout</a> </li> <li> <a class="animated-hover" href="revmatoidnyj-artrit">Rheumatoid arthritis</a> </li> <li> <a class="animated-hover" href="sistemnaya-krasnaya-volchanka">Systemic lupus erythematosus</a> </li> </ul> </div> </div> </div> </div> </div> </div>
        



     @endsection