<?php

declare(strict_types=1);

namespace App\Services\ViaCep;

use Illuminate\Support\Facades\Http;

class ViaCepService
{
    public static function handle(string $zipcode): array
    {
        $response = collect(Http::get("http://viacep.com.br/ws/{$zipcode}/json/")->json());

        if (isset($response['cep'])) {
            return [
                'zipcode' => $response['cep'],
                'street' => $response['logradouro'] ?? '',
                'neighborhood' => $response['bairro'] ?? '',
                'city' => $response['localidade'] ?? '',
                'state' => $response['uf'] ?? '',
            ];
        } else {
            return ['error' => 'CEP não encontrado'];
        }
    }
}
