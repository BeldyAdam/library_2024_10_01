<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
<<<<<<< HEAD
    protected  $primaryKey = 'book_id';
=======
    protected $primaryKey = "book_id";

>>>>>>> 237bebc891608ab2c6dac9d2943e396f0ca73568
    protected $fillable = [
        'author',
        'title'
    ];
}
