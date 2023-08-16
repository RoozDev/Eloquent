<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public function scopeComparison($query){
        return $query->where('store','>','100')->orWhere('store','<','300');
    }
}
