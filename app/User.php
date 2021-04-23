<?php

namespace App;

use App\Models\Address;
use App\Models\Order;
use App\Models\Package;
use App\Models\Product;
use App\Models\Roles;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'first_name', 'last_name', 'email', 'password', 'role_id', 'phone', 'date_of_birth', 'facebook', 'instagram', 'twitter', 'about', 'image', 'created_by', 'updated_by'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $appends = ['full_name'];

    // Accessors
    final public function getFullNameAttribute(): string
    {
        return "{$this->first_name} {$this->last_name}";
    }

    // Relationships
    final public function wishlistProducts(): BelongsToMany
    {
        return $this->belongsToMany(Product::class, 'wishlists', 'user_id', 'product_id')
            ->withPivot('id', 'option', 'status', 'created_by', 'updated_by')->withTimestamps();
    }

    final public function orders(): HasMany
    {
        return $this->hasMany(Order::class, 'customer_id', 'id');
    }

    final public function orderedPackages(): BelongsToMany
    {
        return $this->belongsToMany(
            Package::class, 'orders', 'customer_id', 'package_id'
        )->withPivot(
            'customer_first_name', 'customer_last_name', 'customer_phone', 'customer_email',
            'customer_message', 'customer_browser', 'customer_ip', 'customer_country', 'customer_city'
        )->withTimestamps();
    }

    final public function addresses(): HasMany
    {
        return $this->hasMany(Address::class, 'user_id', 'id');
    }

    final public function activeAddress(): BelongsTo
    {
        return $this->belongsTo(Address::class, 'active_address_id', 'id');
    }

    final public function roles(): BelongsTo
    {
        return $this->belongsTo(Roles::class, 'role_id', 'id');
    }
}
