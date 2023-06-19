<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddCourseRequest extends FormRequest
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
            'type_id'            =>  'required',            
            'name'               =>  'required',               
            'embed_link'         =>  'required',     
            'certificate_id'     =>  'required',  
            'course_category_id' =>  'required',
            'payment_type_id'    =>  'required',
            'synopsis'           =>  'required',      
            'description'        =>  'required',    
            'image'              =>  'required',    
            'pdf'                =>  'nullable',    
            'is_featured'        =>  'nullable',    
        ];
    }
}
