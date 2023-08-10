<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;



class User extends Authenticatable 
{
    use HasApiTokens, HasFactory, Notifiable, SoftDeletes; 

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'phone',
        'email',
        'password',
        'dob',
        'gender_id',
        'have_business',
        'industry_id',
        'years_in_business',
        'have_access_bank_account',
        'account',
        'account_status',
        'account_type',
        'address',
        'state_id',
        'lga_id',
        'role_id',
        'last_activity',
        'email_verification_code',
        'deleted_at'
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
    ];


    public function role(): BelongsTo
    {
        return $this->belongsTo(Roles::class,'role_id');
    }

    public function industry(): BelongsTo
    {
        return $this->belongsTo(Industries::class,'industry_id');
    }
    public function gender(): BelongsTo
    {
        return $this->belongsTo(Genders::class,'gender_id');
    }

    public function state(): BelongsTo
    {
        return $this->belongsTo(State::class,'state_id');
    }

    public function lga(): BelongsTo
    {
        return $this->belongsTo(Lga::class,'lga_id');
    }

    public function sessions() : HasMany
    {
        return $this->hasMany(Session::class);
    }

   
}
