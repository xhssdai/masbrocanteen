<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    use HasFactory;

    protected $table = 'tenant';

    protected $fillable = [
        'name',
        'gambar',
    ];

    public function foods()
    {
        return $this->belongsToMany(Food::class, 'provide', 'id_tenant', 'id_food')->withTimestamps();
    }
}
