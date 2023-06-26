<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class fundedAfricaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'fullname'      => 'required',
            'email'         => 'required',
            'phone'         => 'required',
            'whatsappId'    => 'required',
            'jTitle'        => 'required',
            'gender'        => 'required',
            'location'      => 'required',
            'ageRange'      => 'required',
            'bio'           => 'required',
            'startupName'   => 'required',
            'businessStage' => 'required',
            'industry_id'   => 'required',
            'foundYear'     => 'required',
            'annualRevenue' => 'required',
            'raisedAmount'  => 'required',
            'raiseDesire'   => 'required',
            'founderExperience' => 'required',
            'helpWith'      => 'required',
            'joiningGoal'   => 'required',
            'jobsToCreate'  => 'required',
            'haveAccount'   => 'required',
            'accountNumber' => 'required',
            'debitConfirmation' => 'required'
        ];
    }
}
