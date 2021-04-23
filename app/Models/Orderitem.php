<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Orderitem extends Model
{
    final public function orders(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }
}
