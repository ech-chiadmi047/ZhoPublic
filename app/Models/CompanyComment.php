<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\User;
use App\Models\Company;
use App\Models\CompanyReply;

class CompanyComment extends Model
{
    use HasFactory;
    protected $fillable = [
        'comment',
        'user_id',
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
    public function replies(): HasMany
    {
        return $this->hasMany(CompanyReply::class,'comment_id','id');
    }
}
