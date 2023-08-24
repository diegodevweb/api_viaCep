<div class="p-8 bg-gray-300 h-screen">
    <x-notifications />
        @csrf
        <form class="max-w-[65%] mx-auto p-6 bg-white rounded-lg shadow-md m-6">
            <h1 class="text-xl font-semibold mb-4">Buscador de CEP</h1>
            <div class="flex flex-col max-w-full">
                <x-input wire:model.lazy="data.zipcode" label="CEP" placeholder="Informe o seu CEP (Só números)" />
            </div>
            <div class="flex flex-col max-w-full">
                <x-input wire:model="data.street" label="Rua" placeholder="Informe a Rua" />
            </div>
            <div class="flex flex-col max-w-full">
                <x-input wire:model="data.neighborhood" label="Bairro" placeholder="Informe o Bairro" />
            </div>
            <div class="flex flex-col max-w-full">
                <x-input wire:model="data.city" label="Cidade" placeholder="Informe a Cidade" />
            </div>
            <div class="flex flex-col max-w-full">
                <x-input wire:model="data.state" label="Estado" placeholder="Informe o Estado" />
            </div>
            <div class="mt-4">
                <x-button green label="Salvar Endereço" wire:click="save" spinner="save" />

            </div>
        </form>

        <hr class="my-8">

        <!-- Tabela -->
        <div class="max-w-[65%] mx-auto bg-white rounded-lg shadow-md md:table-auto sm:table-fixed">
            <table class="min-w-full table-auto">
                <thead>
                    <tr>
                        <th class="text-left px-4 py-2 border-b">CEP</th>
                        <th class="text-left px-4 py-2 border-b">Rua</th>
                        <th class="text-left px-4 py-2 border-b">Bairro</th>
                        <th class="text-left px-4 py-2 border-b">Cidade</th>
                        <th class="text-left px-4 py-2 border-b">Estado</th>
                        <th class="text-left px-4 py-2 border-b">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($this->address as $address)
                        <tr>
                            <td class="px-4 py-2 border-b">{{ $address->zipcode }}</td>
                            <td class="px-4 py-2 border-b">{{ $address->street }}</td>
                            <td class="px-4 py-2 border-b">{{ $address->neighborhood }}</td>
                            <td class="px-4 py-2 border-b">{{ $address->city }}</td>
                            <td class="px-4 py-2 border-b">{{ $address->state }}</td>
                            <td class="px-4 py-2 border-b">
                                <button class="text-blue-500 mr-2" wire:click="edit({{ $address->id }})" type="button">
                                    Editar
                                </button>
                                <button class="text-red-500" wire:click="remove({{ $address->id }})" type="button">
                                    Deletar
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="flex justify-end">
                {!! $this->address->links() !!}
            </div>
        </div>
 </div>


