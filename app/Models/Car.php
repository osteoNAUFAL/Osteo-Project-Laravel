<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = ['driver', 'model', 'brand_id'];

    public function brand()
    {
        return $this->belongsTo(brand::class);
    }
}
