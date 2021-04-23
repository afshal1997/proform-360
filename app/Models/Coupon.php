<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Coupon extends Model
{
    public const STATUS_SELECT = ['percentage','fixedPrice'];

    final public function categories(): BelongsToMany
    {
        return $this->belongsToMany(
            Category::class, 'coupon_categories', 'coupon_id', 'category_id'
        )->withPivot('created_by', 'updated_by')->withTimestamps();
    }

    final public function products(): BelongsToMany
    {
        return $this->belongsToMany(
            Product::class, 'coupon_products', 'coupon_id', 'product_id'
        )->withPivot('created_by', 'updated_by')->withTimestamps();
    }

    final public function scopeActive(Builder $coupouns): Builder
    {
        return $coupouns->where('status', '=', 1);
    }

    final public function scopeUnExpired(Builder $coupouns): Builder
    {
        return $coupouns->where('date_end', '>', Carbon::now()->toDateString());
    }

    final public function scopeUnExpiredProducts(Builder $coupouns): Builder
    {
        /** @noinspection PhpUndefinedMethodInspection */
        return $coupouns->unExpired()->has('products')->with('products:products.id');
    }

    final public function scopeUnExpiredCategories(Builder $coupouns): Builder
    {
        /** @noinspection PhpUndefinedMethodInspection */
        return $coupouns->unExpired()->has('categories')->with('categories:categories.id');
    }

    final public function isExpired(): bool
    {
        return $this->date_end < Carbon::now()->toDateString();
    }

    final public function isOnProduct(): bool
    {
        return $this->products()->count() > 0;
    }

    final public function isOnCategory(): bool
    {
        return $this->categories()->count() > 0;
    }

    final public function isActive(): bool
    {
        return $this->status === 1;
    }
}
