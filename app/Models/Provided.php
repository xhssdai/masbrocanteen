<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provided extends Model
{
    use HasFactory;

    protected $table = 'provide';
    protected $fillable = [
        'id_food',
        'id_tenant'
    ];
}
