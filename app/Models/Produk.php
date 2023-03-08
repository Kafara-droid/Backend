<?php

namespace App\Models;

use App\Models\Mentor;
use App\Models\Produk;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produk extends Model
{
    protected $fillable = [
        'name', 'price', 'description', 'photo'
    ];
}
