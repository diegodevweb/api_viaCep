 <div class="p-8 bg-gray-100 max-h-full">
     <x-notifications />

     <!-- Formulário -->
     <form class="max-w-md mx-auto p-6 bg-white rounded-lg shadow-md">
         <h1 class="text-xl font-semibold mb-4">Buscador de CEP</h1>

         <x-input label="CEP" placeholder="Digite o Cep" id="zipcode" type="text" wire:model.lazy="data.zipcode" />
         @error('data.zipcode')
             <span class="text-red-500">{{ $message }}</span>
         @enderror

         <x-input label="Logradouro" placeholder="Digite a Rua" id="street" type="text" wire:model.lazy="data.street" />
         @error('data.street')
             <span class="text-red-500">{{ $message }}</span>
         @enderror

         <x-input label="Bairro" placeholder="Digite o Bairro" id="neighborhood" type="text" wire:model.lazy="data.neighborhood" />
         @error('data.neighborhood')
             <span class="text-red-500">{{ $message }}</span>
         @enderror

         <x-input label="Cidade" placeholder="Digite a Cidade" id="city" wire:model.lazy="data.city" />
         @error('data.city')
             <span class="text-red-500">{{ $message }}</span>
         @enderror

         <x-input label="Estado" placeholder="Digite o Estado" id="state" wire:model.lazy="data.state" />
         @error('data.state')
             <span class="text-red-500">{{ $message }}</span>
         @enderror

         <div class="mt-4">
             <button class="px-4 py-2 bg-green-500 hover:bg-green-400 text-white rounded-md" wire:click="save">
                 Salvar Endereço
             </button>
         </div>
     </form>

     <hr class="my-8">

     <!-- Tabela -->
     <div class="max-w-[80%] mx-auto bg-white rounded-lg shadow-md">
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
                 @foreach ($addresses as $address)
                     <tr>
                         <td class="px-4 py-2 border-b">{{ $address['zipcode'] }}</td>
                         <td class="px-4 py-2 border-b">{{ $address['street'] }}</td>
                         <td class="px-4 py-2 border-b">{{ $address['neighborhood'] }}</td>
                         <td class="px-4 py-2 border-b">{{ $address['city'] }}</td>
                         <td class="px-4 py-2 border-b">{{ $address['state'] }}</td>
                         <td class="px-4 py-2 border-b">
                             <button class="text-blue-500 mr-2" wire:click="edit({{ $address['id'] }})" type="button">
                                 Editar
                             </button>
                             <button class="text-red-500" wire:click="remove({{ $address['id'] }})" type="button">
                                 Deletar
                             </button>
                         </td>
                     </tr>
                 @endforeach
             </tbody>
         </table>
     </div>
 </div>
