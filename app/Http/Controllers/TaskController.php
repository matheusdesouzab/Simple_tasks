<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskStoreRequest;
use App\Http\Requests\TaskUpdateRequest;
use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::where('user_id', Auth()->user()->id)->get();
        return view('dashboard.tasks.index', [
            'tasks' => $tasks
        ]);
    }

    public function create()
    {
        return view('dashboard.tasks.create');
    }

    public function store(TaskStoreRequest $request)
    {
        Task::create([
            'name' => $request->name,
            'user_id' => Auth()->user()->id
        ]);

        return redirect(route('tasks.index'))->with('message', 'Sua tarefa foi criada com sucesso');
    }

    public function edit($id)
    {
        $task = Task::find($id);
        return view('dashboard.tasks.edit', [
            'task' => $task
        ]);
    }

    public function update(TaskUpdateRequest $request, $id)
    {
        $task = Task::find($id);

        $task->update([
            'name' => $request->name
        ]);

        return redirect(route('tasks.index'))->with('message', 'Sua tarefa foi atualizada com sucesso');
    }

    public function destroy($id)
    {
        $task = Task::find($id);
        $task->delete();

        return redirect(route('tasks.index'))->with('message', 'Sua tarefa foi deletada com sucesso');
    }
}
