@extends('layouts.app')
@section('content')
{{-- <div>
    <section class="section main-banner" id="top" data-section="section1">
        <div class="video-overlay header-text">
            <div class="caption">
                <h6>Graduate School of Management</h6>
                <h2><em>Your</em> Classroom</h2>
                <div class="main-button">
                    <div class="scroll-to-section"><a href="#section2">Discover more</a></div>
                </div>
            </div>
        </div>
    </section>
</div> --}}
<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel" >
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="10000">
        <img src="{{ asset('img/eres0.6b045dcd.jpg') }}" class="d-block w-100" style="height: 450px">
        <div class="carousel-caption d-none d-md-block">
            <h1 style="color:white;">Bienvenue sur la Plateforme <span style="color: #f0a945">E-mémoire</span></h1>
            <p style="font-size:20px;" class="lead">Consultez facilement les mémoires et thèses en ligne</p>
        </div>
      </div>
      {{-- <div class="carousel-item">
        <img src="{{ asset('img/pexels-rodnae-productions-7713173.jpg') }}" class="d-block w-100" alt="..." style="height: 45vw">
        <div class="carousel-caption d-none d-md-block">
            <h1 style="color:white;">Plateforme Numérique <span style="color: #f0a945">E-mémoire</span></h1>
        </div>
      </div> --}}
    </div>
    {{-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button> --}}
  </div>
@endsection