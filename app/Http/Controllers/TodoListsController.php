<?php

namespace App\Http\Controllers;

use App\Models\TodoList;

class TodoListsController 
{

    /**
     * Show all lists
     */

    public function index()
    {        
        return TodoList::all();
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

    public function update()
    {
        
    }

    /**
     * Delete a list
     */

    public function delete(TodoList $todolist)
    {

    }
}