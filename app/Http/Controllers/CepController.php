<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\CepService;

class CepController extends Controller
{
    public function __invoke($cep, CepService $cepService)
    {
        // dd($cep);
        
        return $cepService->consultar($cep);
    }
}