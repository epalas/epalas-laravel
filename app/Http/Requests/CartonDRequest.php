<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CartonDRequest extends FormRequest
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
    public function rules()
    {
        $blanc = $this->has('blanc');
        $rouge = $this->has('rouge');
        $rose = $this->has('rose');
        $mousseux = $this->has('mousseux');


        if ($blanc == true || $rouge == true || $rose == true || $mousseux == true){
            return [
                'prixMax' => 'required'
            ];
        }else{
            return [
                'prixMax' => 'required',
                'noType' => 'required'
            ];
        }
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'prixMax.required' => 'Veuillez indiquer une limite de prix',
            'noType.required' => 'Veuillez indiquer au moins un type de vin'
        ];
    }
}
