<h2 class="text-2xl mb-lg">Editar</h2>

@include('livewire.form')

<button wire:click="update" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
    Actualizar
</button>

<button wire:click="default" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full">
    Cancelar
</button>