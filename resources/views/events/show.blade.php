@extends('layouts.app')

@section('title', $event->title)

@section('content')

<div class="container-fluid">
    <div class="row">
        @if(session('error'))
            <p class="error">{{ session('error') }}</p>
        @endif
    </div>
</div>

<div class="container">
    <div class="row row-event mt-5">
        <div class="col-md-6">
            {{-- <img  class="img-fluid" src="images/upload/'.{{ $event->image }}" alt="{{ $event->title }}"> --}}
        </div>
        <div class="col-md-6 container-info">
            <h2 class="title-event">{{ $event->title }}</h2>
            <p class="event-city"><ion-icon name="location-outline"></ion-icon>{{ $event->city }}</p>
            <p class="event-participants"><ion-icon name="people-outline"></ion-icon>{{ count($event->users) }} participantes</p>
            <p class="owner"><ion-icon name="star-outline"></ion-icon>{{ $owner['name'] }} </p>
            <div class="calendar-area">
                <div> @include('icons.calendar')</div>
                <div class="card-date">{{ date('d/m/Y'), strtotime($event->date) }}</div>
            </div>
            <form action="/events/join/{{ $event->id }}" method="POST">
                @csrf
                <a href="/events/join/{{ $event->id }}" class="btn btn-primary red-button"id="submit-event"
                     onclick="event.preventDefault(); this.closest('form').submit();">Confirmar a participação</a>
            </form>

        </div>

        <h3 class="title-event">Teremos no evento:</h3>

        <ul class="items-events">
            @foreach ($event->items as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>

        <div class="col-md-12 mt-3 mb-5">
            <h2 class="title-event">Descrição do Evento: </h2>
            <p>{{ $event->description }}</p>
        </div>
    </div>
</div>
@endsection 