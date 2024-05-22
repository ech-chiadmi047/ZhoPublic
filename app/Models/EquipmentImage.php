<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Equipment;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


class EquipmentImage extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'equipment_id',
    ];
    public function equipment(): BelongsTo
    {
        return $this->belongsTo(Equipment::class,'equipment_id','id');
    }
}
