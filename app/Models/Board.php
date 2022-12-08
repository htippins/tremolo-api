<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Board extends Model
{
    public function lists(){
        return $this->hasMany(TodoList::class, "board_id");
    }
}