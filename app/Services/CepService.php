<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class CepService
{
    public function consultar(string $cep)
    {
        $response = Http::get(
            "https://webmaniabr.com/api/1/cep/{$cep}/?app_key=H3dh6zauiS2fRxZbxmn258vCPAqP5GFE&app_secret=kYW359Z6iEzJmQwSrKm8O7I3Yrv5cTxGnCSlDY8hvOiKF4ec"
        );

        return $response->json();
    }

    public function validar(string $cep)
    {
        $response = Http::get(
            "https://webmaniabr.com/api/1/cep/{$cep}/?app_key=H3dh6zauiS2fRxZbxmn258vCPAqP5GFE&app_secret=kYW359Z6iEzJmQwSrKm8O7I3Yrv5cTxGnCSlDY8hvOiKF4ec"
        );

        $endereco = $response->json();

        return !isset($endereco["error"]);
    }
}