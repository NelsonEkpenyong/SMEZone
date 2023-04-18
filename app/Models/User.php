<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

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
        'address',
        'state_id',
        'lga_id',
        'role_id',
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


    public function role(){
        return $this->belongsTo(Roles::class,'role_id');
    }

    public function industry(){
        return $this->belongsTo(Industries::class,'industry_id');
    }
    public function gender(){
        return $this->belongsTo(Genders::class,'gender_id');
    }

    public function state(){
        return $this->belongsTo(State::class,'state_id');
    }


    public function lga(){
        return $this->belongsTo(Lga::class,'lga_id');
    }

   
}
