<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{   
    // protected $fillable를 통해 디비 필드 요소에 접근을 허용한다.
    protected $fillable = ['title', 'content'];
    use HasFactory;
}
