<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'body',
        'image_book_path',
        'price'
    ];

    // protected $attributes = [
    //     'image_book_path' => '',
    //     'title' => '',
    //     'body' => ''
    // ];
}
