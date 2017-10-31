<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArquivoRequest extends FormRequest {

    public function authorize() {
        return true;
    }

    public function rules() {
        return [
            'arquivo' => 'required',
        ];
    }

    public function messages(){
        return [
            'arquivo.required' => 'Selecione um arquivo',
        ];
    }
}
