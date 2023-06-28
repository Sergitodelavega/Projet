@extends('layouts.app')
@section('content')

<div class="container w-75">
    <nav style="--bs-breadcrumb-divider: '|';" aria-label="breadcrumb" class="mt-4">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Page d'accueil</a></li>
          <li class="breadcrumb-item active" aria-current="page">{{ $memoire->title }}</li>
        </ol>
      </nav>
    <div class="row mt-2">
        <div class="col-3">
            <a href="#"><img class="w-75" src="{{ asset('/img/chatgpt.jpg') }}"></a>
        </div>
        <div class="col-9 mt-2">
            <h4 class="lead">{{ $memoire->title }}</h4>
        </div>
    </div>
</div>
@endsection