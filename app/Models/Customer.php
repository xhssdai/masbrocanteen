<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Customer extends Model
{
    use HasFactory;

    protected $table = 'customers';

    protected $fillable = [
        'name',
        'gender',
        'no_telp',
    ];


    public function food()
    {
        return $this->belongsToMany(Food::class, 'transaction', 'id_customer', 'id_food');
    }
}
