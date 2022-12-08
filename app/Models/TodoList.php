<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TodoList extends Model
{
    protected $table = 'lists';

    public function cards(){
        return $this->hasMany(Card::class, "list_id");
    }
}
