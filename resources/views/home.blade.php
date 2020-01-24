@extends('master')

@section('content')

<!-- **************************************************preloader******************************************* -->
    <div class="preloader">
      <div style="font-size:200%;">Brenda Castillo</div>
      <div class="preloader-dot-container">
        <div id="pl-dot1" class="loader-dot" style="background-color:#eab2bc;"></div>
        <div id="pl-dot2" class="loader-dot" style="background-color:#80c5ac;"></div>
        <div id="pl-dot3" class="loader-dot" style="background-color:#b890c5;"></div>
        <div id="pl-dot4" class="loader-dot" style="background-color:#74abc5;"></div>
        <div id="pl-dot5" class="loader-dot" style="background-color:#c7843f;"></div>
        <div id="pl-dot6" class="loader-dot" style="background-color:#9fb361;"></div>
      </div>
    </div>


<!-- **************************************************languages******************************************* -->

  <div class="language langs hide">
    <div class="langs-container hide">
      <a href="es"><button class="lang-button language-button">Español</button></a>
      <a href="en"><button class="lang-button language-button">English</button></a>
    </div>
  </div>

  <div id="main" class="hide"></div>


@endsection
