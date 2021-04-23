<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Roles extends Model
{
    public function getRole() {
        return self::select('id','name')->where([
            ['id','<>','1'],
            ['status',TRUE]
        ])->latest()->get();
    }

    final public function users(): HasMany
    {
        return $this->hasMany(User::class, 'role_id', 'id');
    }
}
