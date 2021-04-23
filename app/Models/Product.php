<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Product extends Model
{
    protected $guarded = [];

    final public function categories(): BelongsToMany
    {
        return $this->belongsToMany('App\Models\Category');
    }

    final public function tags(): BelongsToMany
    {
        return $this->belongsToMany('App\Models\Tag');
    }

    final public function products(): HasMany
    {
        return $this->hasMany('App\Models\Product');
    }

    final public function options(): HasMany
    {
        return $this->hasMany(Option::class);
    }

    final public function prices(): HasMany
    {
        return $this->hasMany(Price::class);
    }

    final public function price(): HasOne
    {
        return $this->hasOne(Price::class);
    }

    final public function wishlistUsers(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'wishlists', 'product_id', 'user_id')
            ->withPivot('id', 'option', 'status', 'created_by', 'updated_by')->withTimestamps();
    }

    final public function coupons(): BelongsToMany
    {
        return $this->belongsToMany(
            Coupon::class, 'coupon_products', 'product_id', 'coupon_id'
        )->withPivot('created_by', 'updated_by')->withTimestamps();
    }

    final public function orders(): BelongsToMany
    {
        return $this->belongsToMany(Order::class, 'orderitems', 'product_id', 'order_id')
            ->withPivot(
                'option_id', 'product_name', 'product_qty', 'product_weight', 'product_image', 'product_options',
                'product_price', 'product_total_price', 'status'
            )->withTimestamps();
    }

    // Extending Relationships
    final public function optionsWithCurrentCurrency(): HasMany
    {
        return $this->options()->whereHas('prices.respectedCurrency', static function (Builder $currency) {
            $currency->where('id', '=', session('id', 1))->where('currencies.status', '=', 1);
        })->where('options.option_subtract_stock', '=', 1)->where('options.status', '=', 1);
    }

    // Query Scopes
    final public function scopeMightAlsoLikes(Builder $query): Builder
    {
        return $query->inRandomOrder()->take(6);
    }
}
