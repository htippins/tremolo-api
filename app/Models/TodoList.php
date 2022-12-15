<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TodoList extends Model
{
    use SoftDeletes;

    protected $table = 'lists';

    public function cards(){
        return $this->hasMany(Card::class, "list_id");
    }
}
