<?php

namespace App\Http\Controllers;
use App\Models\TodoList;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateTodoListRequest;

class TodoListsController extends Controller
{

    /**
     * Show all lists
     */

    public function index()
    {     
        return TodoList::with('cards')->get();
    }

    /**
     * Show a single list
     */

    public function show(TodoList $todolist) 
    {
        return $todolist;
    }

    /**
     * Show the form to create a board
     */

    public function create()
    {

    }

    /**
     * Store / create a list
     */

    public function store(CreateTodoListRequest $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $count = TodoList::count();

        $todolist = new TodoList;
        $todolist->name = $request->input('name');
        $todolist->list_order = $count + 1;
        $todolist->board_id = 1;
        $todolist->save();

        return $todolist;
    }

    /**
     * Show the edit form 
     */

    public function edit()
    {
        
    }

    /**
     * Update a list
     */

    public function update(CreateTodoListRequest $request, TodoList $todolist)
    {
        
    }

    /**
     * Delete a list
     */

    public function destroy(TodoList $todolist)
    {
        $todolist->delete();

        return response()->json([
            'list deleted' => true,
        ]);
    }
}