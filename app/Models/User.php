<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Catering;
use App\Models\Company;
use App\Models\Notification;
use App\Models\Entertainment;
use App\Models\Equipment;
use App\Models\Place;
use App\Models\Suggestion;
use App\Models\Preference;
use App\Models\Message;
use App\Models\CateringComment;
use App\Models\CateringReply;
use App\Models\EntertainmentComment;
use App\Models\EntertainmentReply;
use App\Models\EquipmentComment;
use App\Models\EquipmentReply;
use App\Models\PlaceComment;
use App\Models\PlaceReply;
use App\Models\SuggestionComment;
use App\Models\SuggestionReply;
use App\Models\CompanyComment;
use App\Models\CompanyReply;
use App\Models\Verification;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'image',
        'desc',
        'num',
        'insta',
        'fb',
        'gender',
        'age',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function caterings(): HasMany
    {
        return $this->hasMany(Catering::class,'user_id','id');
    }
    public function companies(): HasMany
    {
        return $this->hasMany(Company::class,'user_id','id');
    }
    public function entertainments(): HasMany
    {
        return $this->hasMany(Entertainment::class,'user_id','id');
    }
    public function equipments(): HasMany
    {
        return $this->hasMany(Equipment::class,'user_id','id');
    }
    public function places(): HasMany
    {
        return $this->hasMany(Place::class,'user_id','id');
    }
    public function suggestions(): HasMany
    {
        return $this->hasMany(Suggestion::class,'user_id','id');
    }
    public function preferences(): HasMany
    {
        return $this->hasMany(Preference::class,'user_id','id');
    }
    public function catering_comments(): HasMany
    {
        return $this->hasMany(CateringComment::class,'user_id','id');
    }
    public function catering_replies(): HasMany
    {
        return $this->hasMany(CateringReply::class,'user_id','id');
    }
    public function company_comments(): HasMany
    {
        return $this->hasMany(CompanyComment::class,'user_id','id');
    }
    public function company_replies(): HasMany
    {
        return $this->hasMany(CompanyReply::class,'user_id','id');
    }
    public function entertainmnent_comments(): HasMany
    {
        return $this->hasMany(EntertainmnentComment::class,'user_id','id');
    }
    public function entertainmnent_replies(): HasMany
    {
        return $this->hasMany(EntertainmnentReply::class,'user_id','id');
    }
    public function equipment_comments(): HasMany
    {
        return $this->hasMany(EquipmentComment::class,'user_id','id');
    }
    public function equipment_replies(): HasMany
    {
        return $this->hasMany(EquipmentReply::class,'user_id','id');
    }
    public function place_comments(): HasMany
    {
        return $this->hasMany(PlaceComment::class,'user_id','id');
    }
    public function place_replies(): HasMany
    {
        return $this->hasMany(PlaceReply::class,'user_id','id');
    }
    public function suggestion_comments(): HasMany
    {
        return $this->hasMany(SuggestionComment::class,'user_id','id');
    }
    public function suggestion_replies(): HasMany
    {
        return $this->hasMany(SuggestionReply::class,'user_id','id');
    }
    public function verifications(): HasMany
    {
        return $this->hasMany(Verification::class,'user_id','id');
    }
    public function messages(): HasMany
    {
        return $this->hasMany(Message::class,'user_id','id');
    }
    public function notifications(): HasMany
    {
        return $this->hasMany(Notification::class,'user_id','id');
    }
}
