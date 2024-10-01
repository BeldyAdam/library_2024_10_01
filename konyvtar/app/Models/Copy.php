<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Copy extends Model
{
    use HasFactory;
    protected  $primaryKey = 'copy_id';
<<<<<<< HEAD
=======

>>>>>>> 237bebc891608ab2c6dac9d2943e396f0ca73568
    protected $fillable = [
        'book_id',
        'hardcovered',
        'publication',
        'status'
    ];
}
