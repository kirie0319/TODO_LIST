<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TodoList extends Model
{
    use HasFactory;

    protected $table = 'todolists';

    protected $fillable = ['content'];

    public static $rules = array(
        'content' => [
            'required',
            'max:20'
        ]
    );

    public function getId()
    {
        $id = $this->id;
        return $id;
    }

    public function showList()
    {
        $list = $this->content;
        return $list;
    }
}
