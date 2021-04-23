<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    protected $table = 'categories';

    final public function products(): BelongsToMany
    {
        return $this->belongsToMany('App\Models\Product');
    }

    final public function childrenCategory(): HasMany
    {
        return $this->hasMany(__CLASS__);
    }

    final public function parentCategory(): BelongsTo
    {
        return $this->belongsTo(__CLASS__);
    }

    final public function childrenCategories(): HasMany
    {
        return $this->hasMany(__CLASS__)->with('childrenCategories');
    }

    final public function coupouns(): BelongsToMany
    {
        return $this->belongsToMany(
            Coupon::class, 'coupon_categories', 'category_id', 'coupon_id'
        )->withPivot('created_by', 'updated_by')->withTimestamps();
    }
}
