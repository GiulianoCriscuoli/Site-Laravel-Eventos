@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="col-md-10 offset-md-1 dashboard-title-container">
        <h1 style="margin: 10px 0;">Meus Eventos</h1>
    </div>
    <div class="col-md-10 offset-md-1 dashboard-title-container">
        @if(count($events) > 0)

        <table class="table">
            <tr>
                <thead>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Participantes</th>
                    <th scope="col">Ações</th>
                </thead>
            </tr>
            <tbody>
                @foreach ($events as $event)
                    <tr>
                        <th class="row" style="padding-left: 25px;"> {{ $loop->index + 1}} </th>
                        <td><a href="/events/ {{ $event->id }}" style="margin-top: 10px;">{{ $event->title }}</a></td>
                        <td>0</td>
                        <td><a href="#" class="btn btn-primary"><ion-icon style="color: white;" name="create-outline"></ion-icon>Editar</a>
                            <form class="form-delete"action="/events/delete/{{$event->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"><ion-icon style="color: white;" name="trash-outline"></ion-icon>Deletar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @else 
            <p>Você não possui eventos ainda.<strong><a href="{{ route('events.create') }}"> Criar um Evento</a></strong></p>
        @endif
    </div>
@endsection
