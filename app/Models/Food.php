<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;

    protected $table = 'food';

    protected $fillable = [
        'name',
        'price',
        'category',
        'gambar',
        
    ];

    public function customer(){
        return $this->belongsToMany(Customer::class, 'transaction', 'id_food', 'id_customer');
    }
    public function tenant(){
        return $this->belongsToMany(Tenant::class, 'provide', 'id_food', 'id_tenant');
    }
}
