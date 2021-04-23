<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Currency extends Model
{
    final public function prices(): HasMany
    {
        return $this->hasMany(Price::class);
    }

    final public function optionPrices(): HasMany
    {
        return $this->hasMany(OptionPrice::class, 'currency_id', 'id');
    }

    final public function productOptions(): BelongsToMany
    {
        return $this->belongsToMany(Option::class, 'option_prices', 'currency_id', 'option_id')->withPivot('id', 'price');
    }

    final public function orders(): HasMany
    {
        return $this->hasMany(Order::class, 'currency_id', 'id');
    }
}
