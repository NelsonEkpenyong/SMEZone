<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddEventRequest extends FormRequest
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
            //
            'event_name'               => 'required',
            'speakers'                 => 'required',
            'expected_participants'    => 'required',
            'event_type_id'            => 'required',
            'event_link'               => 'nullable',
            'start_date'               => 'required',
            'end_date'                 => 'required',
            'start_time'               => 'required',
            'end_time'                 => 'required',
            'description'              => 'required',
            'event_image'              => 'required',
            'thumbnail'                => 'nullable',
            'invitation_email_banner'  => 'nullable',
            // 'invite_user'              => 'required|min:1'
            'invite_user'              => 'nullable',
        ];
    }
}
