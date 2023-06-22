<?php

declare(strict_types=1);

namespace App\Http\Livewire;

use App\Actions\AddressStoreAction;
use App\Http\Livewire\Traits\AddressPropertiesMessagesTrait;
use App\Http\Livewire\Traits\AddressPropertiesRulesValidationTrait;
use App\Services\ViaCep\ViaCepService;
use Illuminate\Support\Facades\Http;
use App\Models\Address;
use Livewire\Component;
use WireUi\Traits\Actions;
class SearchZipcode extends Component
{
    use Actions;
    use AddressPropertiesRulesValidationTrait;
    use AddressPropertiesMessagesTrait;

    public array $data = [];
    public array $addresses = [];

    public function updated(string $key, string $value):void
    {
        if($key === 'data.zipcode') {
            $this->data = ViaCepService::handle($value);
        }
    }

    public function save(): void
    {

        $this->validate();

        AddressStoreAction::save($this->data);

        $this->render();

        $this->showNotification('Atualizacao/Criacao', 'Endereco salvo/atualizado com sucesso!');

        $this->resetExcept('addresses');


    }

    public function edit(string $id): void
    {
        $address = Address::find($id);
        $this->data['zipcode'] = $address->zipcode;
        $this->data['street'] = $address->street;
        $this->data['neighborhood'] = $address->neighborhood;
        $this->data['city'] = $address->city;
        $this->data['state'] = $address->state;
    }

    public function remove(string $id): void
    {
        $address = Address::find($id);
        $address?->delete();
        $this->showNotification('Exclusao de endereco.', 'Endereco excluido com sucesso.');
    }

    private function showNotification(string $title, string $message): void
    {
        $this->render();

        $this->notification()->success($title, $message);
    }

    public function mount():void
    {
        $this->data = [
            'zipcode' => '',
            'street' => '',
            'neighborhood' => '',
            'city' => '',
            'state' => '',
        ];
    }

    public function render()
    {
        $this->addresses = Address::all()->toArray();

        return view('livewire.search-zipcode');
    }
}
