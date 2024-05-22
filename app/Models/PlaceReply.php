<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\User;
use App\Models\PlaceComment;

class PlaceReply extends Model
{
    use HasFactory;
    protected $fillable = [
        'reply',
        'user_id',
        'comment_id',
    ];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function comment(): BelongsTo
    {
        return $this->belongsTo(PlaceComment::class,'comment_id','id');
    }
}
