<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Package extends Model
{
    use HasFactory;
   public function courses():HasMany
    {
        return $this->hasMany(Course::class);
    }
    public function purchases():MorphMany
    {
        return $this->morphMany(Purchase::class,'purchasable');
    }
}
