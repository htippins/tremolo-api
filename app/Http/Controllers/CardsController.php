<?php
namespace App\Http\Controllers;
use App\Models\Card;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CardsController extends Controller
{
    public function index(){
        return Card::all();
    }

    public function show(){

    }

    public function create(){

    }

    public function store(Request $request){

        $request->validate([
            'content' => 'required',
        ]);

        $card = new Card;
        $card->content = $request->input('content');
        $card->list_id = $request->input('list_id');
        $card->save();

        return $card;
    }

    public function edit(){

    }

    public function update(){

    }

    public function destroy(){

    }
}