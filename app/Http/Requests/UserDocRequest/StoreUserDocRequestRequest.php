<?php

namespace App\Http\Requests\UserDocRequest;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserDocRequestRequest extends FormRequest
{

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() : array
    {
        return [
            'ip' => 'required|max:255',
            'link' => 'required|max:255',
            'message' => 'required',

        ];
    }
}
