<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEventRequest extends FormRequest
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
            'venue_name'               => 'required',
            'expected_participants'    => 'required',
            'venue_address'            => 'required',
            'event_type_id'            => 'required',
            'event_link'               => 'required',
            'start_date'               => 'required',
            'end_date'                 => 'required',
            'start_time'               => 'required',
            'end_time'                 => 'required',
            'description'              => 'required',
            'event_image'              => 'nullable',
            'thumbnail'                => 'nullable',
            'invitation_email_banner'  => 'nullable',
            'invite_user'              => 'required|min:1'
        ];
    }
}
