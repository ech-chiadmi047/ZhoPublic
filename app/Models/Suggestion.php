<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\SuggestionImage;
use App\Models\SuggestionComment;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Maize\Markable\Markable;
use Maize\Markable\Models\Favorite;
use App\Models\Notification;

class Suggestion extends Model
{ 
    use HasFactory,Markable;
    protected $fillable = [
        'title',
        'desc',
        'user_id',
        'num',
        'fb',
        'insta',
        'location',
        'price',
        'date',
        'typeDetails',
        'type',
    ];
    protected static $marks = [
        Favorite::class,
    ];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function images(): HasMany
    {
        return $this->hasMany(SuggestionImage::class,'suggestion_id','id');
    }
    public function comments(): HasMany
    {
        return $this->hasMany(SuggestionComment::class,'suggestion_id','id');
    }
    public function notifications(): HasMany
    {
        return $this->hasMany(Notification::class,'suggestion_id','id');
    }
}
