@extends('layouts.app')
@section('content')
 <!-- Header-->
<header class="bg-primary bg-gradient text-white header">
    <div class="container px-4 text-center">
        <h1 class="fw-bolder">Welcome to Scrolling Nav</h1>
        <p class="lead">A functional Bootstrap 5 boilerplate for one page scrolling websites</p>
    </div>

    <div class="container">
        <!-- Tabs or Pills can be used in a card with the help of .nav-{tabs|pills} and .card-header-{tabs|pills} classes -->
    <div class="card">
        <div class="card-header ">
          <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <a class="nav-link active" id="home-tab" data-bs-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Recherche générale</a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Recherche avancée</a>
            </li>
          </ul>
        </div>
        <div class="card-body">
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="input-group-button-right">
                    <button type="button" class="btn btn-outline-secondary" id="input-group-button-right">Button</button>
                  </div>
            </div>
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure, asperiores provident ea eaque quis omnis adipisci in exercitationem necessitatibus dolorem.</div>
            <div class="tab-pane fade" id="disabled" role="tabpanel" aria-labelledby="disabled-tab">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Suscipit rem accusamus officia quia eos ducimus consequuntur! Impedit aliquid vero suscipit.</div>
          </div>
        </div>
      </div>
    </div>
    
</header>


<div class="container mt-5">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-9">
            <div class="content">
                @foreach ($memoires as $memoire)
                        <div class="card mb-4 mh-100">
                            <div class="row g-0">
                              <div class="col-3 col-sm-3">
                                <img src="{{ asset('/img/game.png') }}" class="img-fluid w-100 h-100" alt="card-horizontal-image">
                              </div>
                              <div class="col-7 col-sm-9">
                                <div class="card-body">
                                  <a class="text-decoration-none" href="{{ route('memoire.show', ['id'=>$memoire["id"]]) }}"><h5 class="card-title">{{ $memoire->title }}</h5></a>
                                  <p class="card-text">{{ $memoire->type }}</p>
                                  <p class="card-text"><small class="text-muted">{{ $memoire->domain }}</small></p>
                                </div>
                              </div>
                            </div>
                          </div>
                        {{-- <td>{{ $memoire->id }}</td>
                        <td>{{ $memoire->type }}</td>
                        <td>{{ $memoire->title }}</td>
                        <td>{{ $memoire->domain }}</td> --}}
                @endforeach
    </div>
        </div>
    </div>
</div>
@endsection