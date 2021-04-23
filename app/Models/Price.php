<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Price extends Model
{
    protected $guarded = [];

    final public function products(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    final public function currency(): BelongsTo
    {
        return $this->belongsTo(Currency::class);
    }
}
