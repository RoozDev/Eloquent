<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Prunable;
use Illuminate\Database\Eloquent\Builder;

class Product extends Model
{
    use HasFactory,Prunable;
    public function scopeComparison($query){
        return $query->where('store','>','100')->orWhere('store','<','300');
    }

    public function prunable(): Builder
    {
        return static::where('created_at', '<=', now()->subMonths(5));
    }

    protected function pruning(): void
    {
        // ...
        echo 'Pruning' . $this->updated_at . PHP_EOL;
    }
}
