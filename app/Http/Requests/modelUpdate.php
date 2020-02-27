<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class modelUpdate extends FormRequest
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
     * @return array
     */
    public function rules(Request $request) //data dari form lewat sini lebih dulu
    {
        return [
            'nama' => 'required',
            'nrp' => 'digits:9|required|numeric|unique:students,nrp,'.$request->id.',id',
            'email' => 'required|email|unique:students,email,'.$request->id.',id',
            'jurusan' => 'required'
        ];
    }
}
