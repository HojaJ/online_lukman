@extends('layouts.guest')
@section('content')
 <div class="page-content page-content--overflow-no"> <div class="wrapper"> 
    <div class="layout">
 <div class="layout__left"> <div class="left-content left-content--pink-box"> 
    <div class="header-breadcrumbs-group"> 
    <div class="breadcrumbs">
  <a href="{{ route('diseases') }}" class="breadcrumbs__previous">Disease</a> — <span class="breadcrumbs__current">Respiratory system</span>
</div> 




<h1 class="page-header page-header--name"> Respiratory system </h1>  <p class="page-header-description">Diseases affecting the respiratory tract, including nasal passages, bronchi and lungs.</p> </div> </div> <div class="left-bg"></div> </div> <div class="layout__right"> <div class="category box"> <div class="no-box-content"> <div class="search search--border search--diseases"> <p class="animated-hover-inside" style="font-size: 30px">Diseases:</p>  </div> <ul class="no-cols-list diseases-list"> <li> <a class="animated-hover" href="allergicheskij-rinit.html">Allergic rhinitis</a> </li> <li> <a class="animated-hover" href="bronhialnaya-astma.html">Bronchial asthma</a> </li> <li> <a class="animated-hover" href="hronicheskaya-obstruktivnaya-bolezn-legkih.html">Chronic obstructive pulmonary disease</a> </li> <li> <a class="animated-hover" href="hronicheskij-bronhit.html">Chronical bronchitis</a> </li> <li> <a class="animated-hover" href="novoobrazovanie-nizhnih-dyhatelnyh-putei.html">Neoplasm of the lower respiratory tract</a> </li> <li> <a class="animated-hover" href="ostrye-respiratornye-zabolevaniya.html">Acute respiratory diseases</a> </li> <li> <a class="animated-hover" href="ostryj-bronhit">Acute bronchitis</a> </li> <li> <a class="animated-hover" href="pnevmoniya">Pneumonia</a> </li> <li> <a class="animated-hover" href="tuberkulez">Tuberculosis</a> </li> </ul> </div> </div> </div> </div> </div> </div>

        



     @endsection