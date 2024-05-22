<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\User;
use App\Models\Entertainment;
use App\Models\EntertainmentReply;

class EntertainmentComment extends Model
{
    use HasFactory;
    protected $fillable = [
        'comment',
        'user_id',
        'entertainment_id',
    ];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function entertainment(): BelongsTo
    {
        return $this->belongsTo(Entertainment::class,'entertainment_id','id');
    }
    public function replies(): HasMany
    {
        return $this->hasMany(EntertainmentReply::class,'comment_id','id');
    }
}
