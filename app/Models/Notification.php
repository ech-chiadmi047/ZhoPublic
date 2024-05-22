<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Catering;
use App\Models\Company;
use App\Models\Entertainment;
use App\Models\Equipment;
use App\Models\Place;
use App\Models\Suggestion;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Notification extends Model
{
    use HasFactory;
    protected $fillable = [
        'notification',
        'status',
        'user_id',
        'suggestion_id',
        'place_id',
        'catering_id',
        'entertainment_id',
        'equipment_id',
        'company_id',
    ];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function company(): BelongsTo
    {
        return $this->belongsTo(Company::class,'company_id','id');
    }
    public function equipment(): BelongsTo
    {
        return $this->belongsTo(Equipment::class,'equipment_id','id');
    }
    public function catering(): BelongsTo
    {
        return $this->belongsTo(Catering::class,'catering_id','id');
    }
    public function place(): BelongsTo
    {
        return $this->belongsTo(Place::class,'place_id','id');
    }
    public function suggestion(): BelongsTo
    {
        return $this->belongsTo(Suggestion::class,'suggestion_id','id');
    }
    public function entertainment(): BelongsTo
    {
        return $this->belongsTo(Entertainment::class,'entertainment_id','id');
    }
}
