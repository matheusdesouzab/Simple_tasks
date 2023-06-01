@extends('layouts.app')

@section('title', 'Criar nova tarefa')

@section('content')
    <form method="POST" action="{{ route('tasks.store') }}" id="commomForm">
        @csrf
        <div class="content-header">
            <h2>Criar nova tarefa</h2>
        </div>
        <label for="name">Nome</label>
        <input type="text" name="name" placeholder="Digite o nome da tarefa" value="{{ @old('name') }}" />
        @error('name')
            <small class="alert-danger">{{ $message }}</small>
        @enderror
        <button class="btn" type="submit">Criar nova tarefa</button>
    </form>
@endsection
