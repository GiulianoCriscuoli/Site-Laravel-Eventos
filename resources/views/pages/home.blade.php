@extends('layouts.app')

@section('title', 'Home')

@section('content')

<div class="container">
    <div class="col-md-12 search-container" id="search-container">
        <h1>Busque um evento</h1>
        <form action="">
            <input type="text" id="search" name="search" class="form-control" placeholder="Pesquise por eventos...">
        </form>
    </div>
</div>

<div id="events-container" class="container events-container">
    <h2>Próximos Eventos</h2>
    <p class="subtitle">Veja os eventos dos próximos dias</p>
    <div id="cards-container" class="row">
        @foreach($listEvents as $event)
        <div class="col-md-3 card">
            <div class="card-body">
                <div class="card-date">99/99/9999</div>
                <div class="card-title">{{$event->title}}</div>
                <div class="card-persons" style="padding: 10px 0;">x participantes</div>
                <a href="#" class="btn btn-primary red-button">Saiba mais</a>
            </div>
        </div>
            
        @endforeach
    </div>
</div>
@endsection