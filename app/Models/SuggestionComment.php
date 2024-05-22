<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\User;
use App\Models\Suggestion;
use App\Models\SuggestionReply;

class SuggestionComment extends Model
{
    use HasFactory;
    protected $fillable = [
        'comment',
        'user_id',
        'suggestion_id',
    ];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function suggestion(): BelongsTo
    {
        return $this->belongsTo(Suggestion::class,'suggestion_id','id');
    }
    public function replies(): HasMany
    {
        return $this->hasMany(SuggestionReply::class,'comment_id','id');
    }
}
