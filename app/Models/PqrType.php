<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable(['name', 'response_time_business_days'])]

class PqrType extends Model
{
    public function pqrs(): HasMany
    {
        return $this->hasMany(Pqr::class);
    }
}
