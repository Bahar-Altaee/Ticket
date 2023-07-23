<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SasuserpostRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'expiration' => 'required',
            
            // Add validation rules for other form inputs
        ];
    }
}