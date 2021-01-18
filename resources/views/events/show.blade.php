@extends('layouts.app')

@section('title', $event->title)

@section('content')

<div class="container">
    <div class="row row-event mt-5">
        <div class="col-md-6">
            {{-- <img  class="img-fluid" src="images/upload/'.{{ $event->image }}" alt="{{ $event->title }}"> --}}
        </div>
        <div class="col-md-6 container-info">
            <h2 class="title-event">{{ $event->title }}</h2>
            <p class="event-city"><ion-icon name="location-outline"></ion-icon>{{ $event->city }}</p>
            <p class="event-participants"><ion-icon name="people-outline"></ion-icon>99 participantes</p>
            <p class="owner"><ion-icon name="star-outline"></ion-icon>Criador/Promotor do evento</p>
            <a href="#" class="btn btn-primary red-button" id="submit-event">Conformar a participação</a>

        </div>
        <div class="col-md-12 mt-3 mb-5">
            <h2 class="title-event">Descrição do Evento: </h2>
            <p>{{ $event->description }}</p>
        </div>
    </div>

</div>

@endsection 