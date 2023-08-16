<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Scopes\ComparisonScope;

class Home extends Model
{
    use HasFactory;
    protected static function booted(): void
    {
        static::addGlobalScope(new ComparisonScope);
    }
}
