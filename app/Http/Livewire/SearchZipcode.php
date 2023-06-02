<?php

declare(strict_types=1);

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;


class SearchZipcode extends Component
{

    public string $zipcode = "";

    public string $street = "";

    public string $neighborhood = "";

    public string $city = "";

    public string $state = "";

    public function updatedZipcode(string $value)
    {
        $response = Http::get("http://viacep.com.br/ws/{$value}/json/")->json();
        // dd($response);

        $this->street = $response['logradouro'];
        $this->neighborhood = $response['bairro'];
        $this->city = $response['localidade'];
        $this->state = $response['uf'];
    }

    public function render()
    {
        return view('livewire.search-zipcode');
    }
}
