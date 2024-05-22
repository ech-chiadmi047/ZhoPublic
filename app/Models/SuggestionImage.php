<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Suggestion;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


class SuggestionImage extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'suggestion_id',
    ];
    public function suggestion(): BelongsTo
    {
        return $this->belongsTo(Suggestion::class,'suggestion_id','id');
    }
}
