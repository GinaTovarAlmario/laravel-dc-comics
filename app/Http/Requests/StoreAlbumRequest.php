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
        return [
            'title'=>'required|string|min:3|max:255',
            'date_release'=>'required|date',
            'img_url'=>'required|url',
            'number_of_tracks'=>'required|integer|min:1',
            'main_track'=>'required|string|min:2|max:255',
            'description'=>'required|string|min:2|max:1000',
        ];
    }
    public function message(){
        return[
            'title.required'=>'Il nome è obbligatorio',
            'date_release.required'=>'La data di rilascio è obbligatoria',
            'img_url.required'=>'Una cover album è obbligatoria',
            'number_of_tracks.required'=>'Il numero di tracce è obbligatorio',
            'main_track.required'=>'Il brano principale è obbligatorio',
            'description.required'=>'La descrizione è obbligatoria',
        ];
    }
}
