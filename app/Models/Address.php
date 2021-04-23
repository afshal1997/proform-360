<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Address extends Model
{
    protected $table = 'addresses';
    protected $fillable = ['user_id', 'address', 'appartment_suite', 'phone', 'postcode', 'country_id', 'state_id', 'city_id'];

    final public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
