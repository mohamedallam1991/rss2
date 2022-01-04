<?php

namespace App\Models;

use App\Models\System;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Structure extends Model
{
    use HasFactory;

    public function systems(): HasMany
    {
        return $this->hasMany(System::class);
    }
}
