<?php

declare(strict_types=1);

namespace App\Http\Livewire;

use App\Actions\AddressGetPropertiesAction;
use App\Actions\AddressStoreAction;
use App\Http\Livewire\Traits\AddressPropertiesValidationMessagesTrait;
use App\Http\Livewire\Traits\AddressPropertiesRulesValidationTrait;
use App\Models\Address;
use App\Services\ViaCep\ViaCepService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;
use Livewire\WithPagination;
use WireUi\Traits\Actions;

class SearchZipcode extends Component
{
    use Actions;
    use AddressPropertiesRulesValidationTrait;
    use AddressPropertiesValidationMessagesTrait;
    use WithPagination;

    public array $data = [];

    public string $search = '';

    protected $queryString = ['search'];

    public function updated(string $key, string $value): void
    {
        try {
            if ($key === 'data.zipcode') {
                $this->data = ViaCepService::handle($value);
            }

        } catch (\Exception $e) {
            $this->notification()->error(
                $title = 'Erro!',
                $description = 'Cep não encontrado, digite um Cep válido'
            );
        }
    }

    public function save(): void
    {
        $this->validate();

        $isNewAddress = AddressStoreAction::save($this->data);

        if($isNewAddress) {
            $this->showNotification('Criação', 'O endereço foi criado com sucesso!');
        } else {
            $this->showNotification('Atualização', 'O endereço foi atualizado com sucesso!');
        }

        $this->resetExcept('addresses');
    }

    public function edit(string|bool $id): void
    {
        $this->data = AddressGetPropertiesAction::handle($id);
    }

    public function remove(string $id): void
    {
        $confirm = $this->notification()->confirm([
            'title' => 'Confirma exclusao?',
            'description' => 'Deletar endereco?',
            'acceptLabel' => 'Confirmar',
            'method' => 'delete',
            'params' => $id,
        ]);

    }

    public function delete($id): void
    {

        Address::find($id)?->delete();

        $this->showNotification('Exclusão de Endereço', 'Endereço excluído com sucesso!');


    }

    private function showNotification(string $title, string $message): void
    {
        $this->notification()->success($title, $message);
    }

    public function getAddressProperty()
    {
        if ($this->search) {
            return Address::where('street', 'like', "%{$this->search}%")->paginate(3);
        }

        return Address::paginate(3);
    }

    public function mount(): void
    {
        $this->data = AddressGetPropertiesAction::getEmptyProperties();
    }

    public function render(): Factory|View|Application
    {
        return view('livewire.search-zipcode');
    }
}
