<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OptionPrice extends Model
{
    protected $table = 'option_prices';
    protected $fillable = ['option_id', 'currency_id', 'price'];
    public const CREATED_AT = null;
    public const UPDATED_AT = null;

    final public function respectedOption(): BelongsTo
    {
        return $this->belongsTo(Option::class, 'option_id', 'id');
    }

    final public function respectedCurrency(): BelongsTo
    {
        return $this->belongsTo(Currency::class, 'currency_id', 'id');
    }
}
