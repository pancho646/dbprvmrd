<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DatosRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'firstname'=>'required',
            'lastname1'=>'required',
            'cedula'=>'required',
            'historia'=>'required',
            'nacionalidad' =>'required',
            'fecha_nac'=>'required',
            

        ];
    }
}
