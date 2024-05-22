<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\User;
use App\Models\Equipment;
use App\Models\EquipmentReply;

class EquipmentComment extends Model
{
    use HasFactory;
    protected $fillable = [
        'comment',
        'user_id',
        'equipment_id',
    ];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function equipment(): BelongsTo
    {
        return $this->belongsTo(Equipment::class,'equipment_id','id');
    }
    public function replies(): HasMany
    {
        return $this->hasMany(EquipmentReply::class,'comment_id','id');
    }
}
