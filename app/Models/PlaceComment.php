<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\User;
use App\Models\Place;
use App\Models\PlaceReply;

class PlaceComment extends Model
{
    use HasFactory;
    protected $fillable = [
        'comment',
        'user_id',
        'place_id',
    ];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function place(): BelongsTo
    {
        return $this->belongsTo(Place::class,'place_id','id');
    }
    public function replies(): HasMany
    {
        return $this->hasMany(PlaceReply::class,'comment_id','id');
    }
}
