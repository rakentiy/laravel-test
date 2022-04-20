<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Client extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function products()
    {
        return $this->hasMany(\App\Models\Product::class);
    }
}
