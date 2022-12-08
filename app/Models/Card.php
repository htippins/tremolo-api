<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    public function post()
    {
        return $this->belongsTo(TodoList::class);
    }
}
