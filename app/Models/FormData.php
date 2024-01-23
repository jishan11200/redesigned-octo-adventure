<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormData extends Model
{
    protected $fillable = ['name', 'email', 'port_of_origin', 'port_of_destination', 'cargo_weight', 'commodity_details'];
    use HasFactory;
}
