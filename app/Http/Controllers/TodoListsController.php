<?php

namespace App\Http\Controllers;
use App\Models\TodoList;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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
        $todolist = new TodoList;
        $todolist->name = $request->input('name');
        $todolist->save();

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
    }
}