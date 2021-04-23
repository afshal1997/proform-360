<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Option extends Model
{
    protected $guarded = [];

    final public function prices(): HasMany
    {
        return $this->hasMany(OptionPrice::class, 'option_id', 'id');
    }

    final public function currencies(): BelongsToMany
    {
        return $this->belongsToMany(Currency::class, 'option_prices', 'option_id', 'currency_id')->withPivot('id', 'price');
    }
}
