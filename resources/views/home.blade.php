@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <div class="col-md-10 offset-md-1 mt-4 mb-4 dashboard-title-container">
        <h1>Meus Eventos</h1>
    </div>
    <div class="col-md-10 offset-md-1 dashboard-title-container">
        @if(count($events) > 0)
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Evento</th>
                        <th scope="col">Participantes</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                @foreach($events as $event)
                    <tbody>
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $event->title }}</td>
                            <td>{{ count($event->users)}}</td>
                            <td>
                                <a href="{{ route('events.edit', [$event->id]) }}" class="btn btn-sm btn-info">
                                    <ion-icon name="create-outline" style="color: #FFF;"></ion-icon>Editar
                                </a>
                                <form method="POST" action="{{ route('events.destroy', [$event->id]) }}" class="form-delete">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger">
                                        <ion-icon name="trash-outline" style="color: #FFF;"></ion-icon>Excluir
                                    </button>
                                </form> 
                            </td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
        @else
        <p>Você não possui nenhum evento criado. Caso queira criar, clique em:
            <a href="{{ route('events.create') }}" class="btn btn-sm btn-success">Adicionar Novo Evento</a>
        </p>
        @endif
    </div>
@endsection

