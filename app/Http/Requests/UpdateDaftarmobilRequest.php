<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDaftarmobilRequest extends FormRequest {

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
		return [
            'no_kerangka' => 'required|unique:daftarmobil,no_kerangka,'.$this->daftarmobil, 
            'no_polisi' => 'required|unique:daftarmobil,no_polisi,'.$this->daftarmobil, 
            'merek' => 'required', 
            'tipe' => 'required', 
            'tahun' => 'required', 
            
		];
	}
}
