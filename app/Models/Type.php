<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Preference;


class Type extends Model
{
    use HasFactory;
    protected $fillable = [
        'type',
    ];
    public function preferences(): HasMany
    {
        return $this->hasMany(Preference::class,'comment_id','id');
    }
}
