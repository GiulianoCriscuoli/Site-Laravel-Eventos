@extends('layouts.app')

@section('title', 'Home')

@section('content')

<div class="container">
    <div class="col-md-12 search-container" id="search-container">
        <h1>Busque um evento</h1>
        <form action="">
            <input type="text"
             id="search"
             name="search"
             class="form-control"
             placeholder="Pesquise pelos seus eventos favoritos...">
        </form>
    </div>
</div>

<div id="events-container" class="container events-container">
    <h2>Próximos Eventos</h2>
    <p class="subtitle">Veja os eventos dos próximos dias</p>
    <div id="cards-container" class="row cards-container">
        @foreach($listEvents as $event)
        <div class="col-md-3 card">
            <div class="card-body">
                <div class="img-event">
                    <img class="img-fluid" src="{{ 'images/upload/'.$event->image }}" alt="{{ $event->title }}">
                </div>
                <div class="calendar-area">
                    <div> @include('icons.calendar')</div>
                    <div class="card-date">99/99/9999</div>
                </div>
                <div class="card-title">{{ $event->title }}</div>

                <div class="card-resume">
                    {{ $event->resume }}
                </div>

                <div class="card-localization--area">
                    <div class="card-city">{{ $event->city }} - </div>
                    <div class="card-uf">{{ $event->uf }}</div>
                </div>
               
                <div class="card-persons" style="padding: 10px 0;">x participantes</div>
                <a href="{{ 'events/'.$event->id }}" class="btn btn-primary red-button">Saiba mais</a>
            </div>
        </div>
            
        @endforeach
    </div>
</div>
@endsection