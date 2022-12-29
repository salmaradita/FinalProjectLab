<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;
    protected $table='home';
    protected $fillable = [
        'image',
        'name',
        'price',
    ];

    public function clothes(): HasMany
    {
        return $this->hasMany(clothes::class, 'home_id', 'id');
    }
}
