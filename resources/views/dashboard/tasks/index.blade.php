@extends('layouts.app')

@section('title', 'Listagem')

@section('content')
    @if (Session::get('message'))
        <p class="message-success">{{ Session::get('message') }}</p>
    @endif
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome da tarefa</th>
                    <th>Data de criação</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasks as $task)
                    <tr>
                        <td>{{ $task->id }}</td>
                        <td>{{ $task->name }}</td>
                        <td>{{ $task->created_at->format('d/m/Y') }}</td>
                        <td class="actions-group">
                            <a class="btn bg-primary" href="{{ route('tasks.edit', $task->id) }}">Atualizar</a>
                            <a class="btn bg-danger" onclick="document.getElementById('destroy').submit()"
                                href="#">Deletar</a>
                            <form id="destroy" method="POST" action="{{ route('tasks.destroy', $task->id) }}">
                                @csrf
                                @method('DELETE')
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
