<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ComicRequest extends FormRequest
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
            'title' => 'required|max:200|string',
            'description' => 'required|string',
            'thumb'=>'required|url',
            'price'=>'required|numeric',
            'series'=>'required|string|max:50',
            'sale_date'=>'required|date',
            'type'=> Rule::in(['graphic novel', 'comic book']),'max:50',
            'artists'=>'required|string',
            'writers'=>'required|string',
        ];
    }

    public function messages()
    {
        $obbligatorio = ':attribute è obbligatorio.';

        return [
            'required' => $obbligatorio,
            'thumb.url'=>'deve essere inserito un url valido',
            'series.max'=> 'il campo non può superare i 50 caratteri',
        ];
    }
}
