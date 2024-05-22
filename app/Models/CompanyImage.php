<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Company;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


class CompanyImage extends Model
{
    use HasFactory;
    protected $fillable = [
        'image',
        'company_id',
    ];
    public function company(): BelongsTo
    {
        return $this->belongsTo( company::class,'company_id','id');
    }
}
