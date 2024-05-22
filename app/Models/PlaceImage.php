<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Place;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


class PlaceImage extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'place_id',
    ];
    public function place(): BelongsTo
    {
        return $this->belongsTo(Place::class,'place_id','id');
    }
}
