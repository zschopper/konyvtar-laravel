<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    public $primaryKey = 'book_id';
    protected $fillable =  [
        'author', 'title', 'pieces'
    ];
}
