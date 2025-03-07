<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreHotelRequest extends FormRequest
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
            //
            'name' => ['required', 'string', 'max:255'],
            'link_ggmaps' => ['required', 'string', 'max:255'],
            'address' => ['required', 'string', 'max:255'],
            'thumbnail' => ['required', 'image', 'mimes:png,jpg,jpeg'],
            'city_id' => ['required', 'integer'],
            'country_id' => ['required', 'integer'],
            'start_level' => ['required', 'integer'],
            'photos.*' => ['required', 'image', 'mimes:png,jpg,jpeg']
        ];
    }
}
