<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use HasFactory;
    use SoftDeletes;
    public function package():BelongsTo
    {
        return $this->belongsTo(Package::class);
    }
    public function purchases():MorphMany
    {
        return $this->morphMany(Purchase::class,'purchasable');
    }
}
