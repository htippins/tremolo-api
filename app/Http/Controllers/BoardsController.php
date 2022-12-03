<?php

namespace App\Http\Controllers;

use App\Models\Board;

class BoardsController 
{

    /**
     * Show all boards
     */

    public function index()
    {        
        return Board::all();
    }

    /**
     * Show a single board
     */

    public function show(Board $board) 
    {
        return $board;
    }

    /**
     * Show the form to create a board
     */

    public function create()
    {

    }

    /**
     * Store / create a board
     */

    public function store(CreateBoardRequest $request)
    {
        
    }

    /**
     * Show the edit form 
     */

    public function edit()
    {

    }

    /**
     * Update a board
     */

    public function update(CreateBoardRequest $request, Board $board)
    {
        
    }

    /**
     * Delete a board
     */

    public function delete(Board $board)
    {

    }
}