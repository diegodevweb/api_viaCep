<div>
    <form class="p-8 bg-gray-200 flex flex-col w-1/2 mx-auto gap-4">
        <h1>Buscador de CEP</h1>
        <div>
            <label for='zipcode'>CEP</label>
            <input class="border" id="zipcode" type="text" wire:model.lazy='zipcode'/>
        </div>
        <div>
            <label for='street'>Logradouro</label>
            <input class="border" id="street" type="text" wire:model='street'/>
        </div>
        <div>
            <label for='neighborhood'>Bairro</label>
            <input class="border" id="neighborhood" type="text" wire:model='neighborhood'/>
        </div>
        <div>
            <label for='city'>Cidade</label>
            <input class="border" id="city" type="text" wire:model='city'/>
        </div>
        <div>
            <label for='state'>Estado</label>
            <input class="border" id="state" type="text" wire:model='state'>
        </div>
        <div>
            <button class="px-4 py-2 bg-green-500 hover:bg-green-400 text-white rounded-md" wire:click='search'>Buscar</button>
        </div>
    </form>
</div>