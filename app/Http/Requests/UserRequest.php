<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'first_name'=> 'required',
            'last_name' => 'required',
            'email'     => 'required',
            'phone'     => 'required',
            'gender_id' => 'required',
            'dob'       => 'required',
            'have_business' => 'required',
            'have_access_bank_account' => 'required',
            'address'   => 'required',
            'state_id'  => 'required',
            'lga_id'    => 'required',
        ];
    }
}
