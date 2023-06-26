<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GetFundedAfrica extends Model
{
    use HasFactory;

    protected $table = 'get_funded_africa';
    protected $fillable = [
        'fullname',
        'email',
        'phone',
        'whatsappId',
        'jTitle',
        'gender',
        'location',
        'ageRange',
        'bio',
        'startupName',
        'businessStage',
        'industry_id',
        'foundYear',
        'annualRevenue',
        'raisedAmount',
        'raiseDesire',
        'founderExperience',
        'helpWith',
        'joiningGoal',
        'specialExpertiseOrExperience',
        'jobsToCreate',
        'haveAccount',
        'accountNumber',
        'debitConfirmation'
    ];
}
