<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;

    protected $guarded = array('id');   //idを書き換え不可にする記述を追記
    protected $fillable = ['content'];

    public static $rules = array(
        'content' => 'required|max:20'
    );
}
