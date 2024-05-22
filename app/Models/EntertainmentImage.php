<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Entertainment;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


class EntertainmentImage extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'entertainment_id',
    ];
    public function entertainment(): BelongsTo
    {
        return $this->belongsTo(Entertainment::class,'entertainment_id','id');
    }
}
