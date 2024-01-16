<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Newsroom extends Model
{
    public $fillable = [
        'title',
        'sub_title',
        'Image'
    ];                                                                                                                                                                               
    use HasFactory;
}
