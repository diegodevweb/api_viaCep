<?php

declare(strict_types=1);

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Http;
use App\Models\Address;
use Livewire\Component;
use WireUi\Traits\Actions;
class SearchZipcode extends Component
{
    use Actions;
    protected array $rules = [
        'zipcode' => ['required'],
        'street' => ['required'],
        'neighborhood' => ['required'],
        'city' => ['required'],
        'state' => ['required', 'max:2'],
    ];

    protected array $messages = [
        'zipcode.required' => 'O campo CEP é obrigatorio.',
        'street.required' => 'O campo ENDEREÇO é obrigatorio.',
        'neighborhood.required' => 'O campo BAIRRO é obrigatorio.',
        'city.required' => 'O campo CIDADE é obrigatorio.',
        'state.required' => 'O campo ESTADO é obrigatorio.',
        'state.max' => 'O campo ESTADO deve ter exatamente 2 caracteres.',
    ];

    public string $zipcode = '';

    public string $street = '';

    public string $neighborhood = '';

    public string $city = '';

    public string $state = '';

    public array $addresses = [];

    public function updatedZipcode(string $value)
    {
        $response = Http::get("http://viacep.com.br/ws/{$value}/json/")->json();

        $this->zipcode = $response['cep'];
        $this->street = $response['logradouro'];
        $this->neighborhood = $response['bairro'];
        $this->city = $response['localidade'];
        $this->state = $response['uf'];
    }

    public function save(): void
    {
        $this->validate();

        Address::updateOrCreate(
            [
                'zipcode' => $this->zipcode,
            ],
            [
                'street' => $this->street,
                'neighborhood' => $this->neighborhood,
                'city' => $this->city,
                'state' => $this->state,
            ],
        );

        $this->render();
        
        $this->notification()->success('Mensagem', 'Criacao/alteracao realizada com sucesso!');

        $this->resetExcept('addresses');

    }

    public function edit(string $id): void
    {
        $address = Address::find($id);
        $this->zipcode = $address->zipcode;
        $this->street = $address->street;
        $this->neighborhood = $address->neighborhood;
        $this->city = $address->city;
        $this->state = $address->state;
    }

    public function remove(string $id): void
    {   
        $address = Address::find($id);
        $address?->delete();
        $this->render();

        $this->notification()->success('Exclusao de endereco.', 'Endereco excluido com sucesso.');
    }

    public function render()
    {
        $this->addresses = Address::all()->toArray();

        return view('livewire.search-zipcode');
    }
}
