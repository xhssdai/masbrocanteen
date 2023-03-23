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
        'tenant_id'
    ];

    public function customer(){
        return $this->belongsToMany(Customer::class, 'transaction', 'id_food', 'id_customer');
    }
    public function tenant(){
        return $this->belongsTo(Tenant::class);
    }
}
