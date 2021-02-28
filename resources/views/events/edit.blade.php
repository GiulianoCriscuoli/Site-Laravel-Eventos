@extends('layouts.app')

@section('title', 'Editando o evento', $event->title)

@section('content')

<div class="container container-form">

    <h2 class="title-form">Cadastre o seu evento aqui</h2>

    <form action="{{ route('events.edit', $event->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="image">Imagem do evento:</label>
            <input type="file" id="image" name="image" value="{{ $event->image }}" class="form-control-file">
        </div>

        <div class="form-group">
            <label for="title">Título do evento:</label>
            <input type="text" id="title" name="title" value="{{ $event->title }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="date">Data do evento:</label>
            <input type="date" id="date" name="date" value="{{ $event->date->format('Y-m-d') }}" class="form-control">
        </div>

        <div class="form-group">
            <label for="resume">Resumo: <span>(Descreva um breve resumo do evento)</span></label>
            <textarea id="resume" name="resume" class="form-control">{{ $event->resume }}</textarea>
        </div>
        
        <div class="form-group">
            <label for="uf">Estado:</label>
            <select id="uf" name="uf" value="{{ $event->uf }}" class="form-control uf-form">
                <option value="AC">Acre</option>
                <option value="AL">Alagoas</option>
                <option value="AP">Amapá</option>
                <option value="AM">Amazonas</option>
                <option value="BA">Bahia</option>
                <option value="CE">Ceará</option>
                <option value="DF">Distrito Federal</option>
                <option value="ES">Espírito Santo</option>
                <option value="GO">Goiás</option>
                <option value="MA">Maranhão</option>
                <option value="MT">Mato Grosso</option>
                <option value="MS">Mato Grosso do Sul</option>
                <option value="MG">Minas Gerais</option>
                <option value="PA">Pará</option>
                <option value="PB">Paraíba</option>
                <option value="PR">Paraná</option>
                <option value="PE">Pernambuco</option>
                <option value="PI">Piauí</option>
                <option value="RJ">Rio de Janeiro</option>
                <option value="RN">Rio Grande do Norte</option>
                <option value="RS">Rio Grande do Sul</option>
                <option value="RO">Rondônia</option>
                <option value="RR">Roraima</option>
                <option value="SC">Santa Catarina</option>
                <option value="SP">São Paulo</option>
                <option value="SE">Sergipe</option>
                <option value="TO">Tocantins</option>
                <option value="EST">Estrangeiro</option>
            </select>
        </div>
        <div class="form-group">
            <label for="city">Cidade:</label>
            <input type="text" id="city" name="city" value="{{ $event->city }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="private">Evento privado?</label>
            <select name="private" id="private" value="{{ $event->private }}" class="form-control">
                <option value="0">Não</option>
                <option value="1 {{$event->private ? "selected='selected'" : ''}}">Sim</option>
            </select>
        </div>
        <div class="form-group">
            <label for="title">Descreva o evento:</label>
            <textarea name="description" id="description" class="form-control">{{ $event->description }}</textarea>
        </div>

        <div class="form-group has-event">
            <label for="items"> O que terá no evento?</label>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="cadeiras"> Cadeiras
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="comida"> Comida
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="bebida"> Bebida
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="premios"> Prêmios
            </div>
        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-primary red-button" value="Adicione seu evento">
        </div>
    </form>

</div>

@endsection