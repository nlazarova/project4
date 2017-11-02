<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class CityRouteRequest extends FormRequest
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
        return [
            'city_id_from' => 'required',
            'city_id_to' => 'required',
            'route_id' => 'required',
                        
        ];
    }
}
