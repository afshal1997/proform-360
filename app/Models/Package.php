<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Package extends Model
{
    protected $table = 'packages';
    protected $fillable = ['package_name', 'package_subname', 'monthly_charges', 'setup_fees', 'package_details'];

    final public function orderedPackages(): HasMany
    {
        return $this->hasMany(Order::class, 'package_id', 'id');
    }

    final public function packageCustomers(): BelongsToMany
    {
        return $this->belongsToMany(
            User::class, 'orders', 'package_id', 'customer_id'
        )->withPivot(
            'customer_first_name', 'customer_last_name', 'customer_phone', 'customer_email',
            'customer_message', 'customer_browser', 'customer_ip', 'customer_country', 'customer_city'
        )->withTimestamps();
    }
}
