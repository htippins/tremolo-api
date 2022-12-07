<?php
namespace App\Http\Controllers;
use App\Models\Card;
use App\Http\Controllers\Controller;

class CardsController extends Controller
{
    public function index(){
        return Card::all();
    }

    public function show(){

    }

    public function create(){

    }

    public function store(){

    }

    public function edit(){

    }

    public function update(){

    }

    public function destroy(){

    }
}