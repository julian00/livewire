<h2 class="text-2xl mb-lg">Nuevo Post</h2>

<!--llamo al formulario(nombre de la carpeta y le digo que trabaje con la vista de formularios)-->
@include('livewire.form')

<!--le indico al boton que con el click llame al metodo store-->
<button wire:click="store" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
    Guardar
</button>