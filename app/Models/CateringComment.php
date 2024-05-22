<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\User;
use App\Models\Catering;
use App\Models\CateringReply;

class CateringComment extends Model
{
    use HasFactory;
    protected $fillable = [
        'comment',
        'user_id',
        'catering_id',
    ];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function catering(): BelongsTo
    {
        return $this->belongsTo(Catering::class,'catering_id','id');
    }
    public function replies(): HasMany
    {
        return $this->hasMany(CateringReply::class,'comment_id','id');
    }
}
