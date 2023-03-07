<?php

namespace App\Http\Requests;

use App\Rules\CepRule;
use App\Services\CepService;
use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
{
    public $cepService;

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct(CepService $cepService)
    {
        $this->cepService = $cepService;
    }

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
            // "cep" => ["required", new CepRule]
            "cep" => ["required", new CepRule($this->cepService)]
        ];
    }
}
