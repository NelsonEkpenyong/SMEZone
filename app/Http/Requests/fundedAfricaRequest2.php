<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class fundedAfricaRequest2 extends FormRequest
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
            'startupName'   => 'required',
            'businessStage' => 'required',
            'industry_id'      => 'required',
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
            'debitConfirmation' => 'required',
            
        ];
    }
}
