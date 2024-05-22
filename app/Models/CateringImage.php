<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Catering;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CateringImage extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'catering_id',
    ];
    public function catering(): BelongsTo
    {
        return $this->belongsTo(Catering::class,'catering_id','id');
    }
}
