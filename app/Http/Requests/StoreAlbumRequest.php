<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAlbumRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return[
            'title'=>'required|string|min:3|max:255',
            'date_release'=>'required|date',
            'img_url'=>'required|url',
            'number_of_tracks'=>'required|integer|min:1',
            'main_track'=>'required|string|min:2|max:255',
            'description'=>'required|string|min:2|max:1000',
        ];
    }
    public function messages(){
        return[
            'title.required'=>'Il titolo è obbligatorio',
            'title.string'=>'Il titolo deve essere un testo!',
            'title.min' => 'Il titolo deve essere lungo minimo 3 caratteri!',
            'title.max' => 'Troppo lungo!Il testo deve essere più breve!',
            'date_release.required'=>'La data di rilascio è obbligatoria',
            'date_release.data'=>'La data deve essere nel formato YYYY-MM-DD',
            'img_url.required'=>'Una cover album è obbligatoria',
            'img_url.url'=>'Devi inserire un indirizzo Url!',
            'number_of_tracks.required'=>'Il numero di tracce è obbligatorio',
            'number_of_tracks.integer'=>'Il numero di tracce deve essere un numero intero!',
            'number_of_tracks.min'=>'Il numero di tracce è insufficiente!',
            'main_track.required'=>'Il brano principale è obbligatorio',
            'main_track.string'=>'Il nome deve essere un testo!',
            'main_track.min'=>'Il nome del brano principale è troppo corto!',
            'main_track.max'=>'Il nome del brano principale è troppo lungo!',

            'description.required'=>'La descrizione è obbligatoria',
            'description.string'=>'La descrizione deve essere un testo!',
            'description.min'=>'La descrizione è troppo breve!',
            'description.max'=>'La descrizione è troppa lunga!',

        ];
    }
}
