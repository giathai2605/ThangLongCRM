<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Ramsey\Uuid\Generator\DefaultTimeGenerator;

class WorkRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        $ruler=[];
        $currentAction= $this->route()->getActionMethod();
        switch($this->method()){
            case 'POST':
                switch($currentAction){
                    case 'add':
                            $ruler=[];
                        break;
                    default:
                        break;    
                }
                break;

            default:
                break;    
        };
        return $ruler;
    }

    public function messages()
    {
        return [

        ];
    }
}
