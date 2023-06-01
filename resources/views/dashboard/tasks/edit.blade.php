@extends('layouts.app')

@section('title', 'Editar tarefa')

@section('content')
    <form method="POST" action="{{ route('tasks.update', $task->id) }}" id="commomForm">
        @csrf
        @method('PUT')
        <div class="content-header">
            <h2>Atualizar - {{ $task->name }}</h2>
        </div>
        <label for="name">Nome</label>
        <input type="text" name="name" placeholder="Digite o nome da tarefa" value="{{ @old('name', $task->name) }}" />
        @error('name')
            <small class="alert-danger">{{ $message }}</small>
        @enderror
        <button class="btn" type="submit">Atualizar tarefa</button>
    </form>
@endsection
