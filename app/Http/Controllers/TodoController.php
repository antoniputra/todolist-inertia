<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use App\Models\TodoItem;
use Illuminate\Http\Request;
use Inertia\Inertia;

class TodoController extends Controller
{
    public function index()
    {
        $todos = auth()->user()
            ->todos()
            ->with('todoItems')
            ->latest()
            ->paginate(15);
        return Inertia::render('Dashboard', [
            'todos' => $todos,
        ]);
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        auth()->user()->todos()->create($request->only('name'));

        return redirect()->back();
    }

    public function update(Request $request, Todo $todo)
    {
        $request->validate([
            'name' => 'required',
        ]);
        
        $todo->fill($request->only('name'));
        $todo->save();

        return redirect()->back();
    }
    
    public function delete(Todo $todo)
    {
        $todo->delete();

        return redirect()->back();
    }

    /**
     * Items
     */

    public function saveItem(Request $request, Todo $todo)
    {
        $request->validate([
            'id' => 'sometimes',
            'name' => 'required',
        ]);

        $todo->todoItems()->updateOrCreate([
            'id' => $request->id,
        ], [
            'name' => $request->name,
        ]);

        return redirect()->back();
    }

    public function toggleItemDone(Request $request, TodoItem $todoItem)
    {
        $request->validate([
            'is_done' => 'sometimes',
        ]);
        
        $todoItem->is_done = ! $todoItem->is_done;
        $todoItem->save();

        return redirect()->back();
    }

    public function deleteItem(TodoItem $todoItem)
    {
        $todoItem->delete();

        return redirect()->back();
    }
}
