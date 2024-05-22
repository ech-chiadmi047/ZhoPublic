<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Preference extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'Sport',
        'Art',
        'Party',
        'Wedding',
        'Birthday',
        'Music',
        'Worshop or Class',
        'Conference',
        'Trip',
        'Guided tour',
    ];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class,'user_id','id');
    }
}
