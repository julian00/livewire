<div class="form-group">
    <label class="text-xl font-bold mb-2" for="titulo">
        Titulo
    </label>
    <input id="titulo" type="text" placeholder="Titulo" class="form-control appearance-none block bg-gray-200 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" wire:model="title">
    @error('title')
        <span>{{ $message }}</span>
    @enderror
</div>

<div class="form-group">
    <label class="text-xl font-bold mb-2">
        Contenido
    </label>
    <!--conecto el textarea a la propiedad body-->
    <textarea class="form-control appearance-none block bg-gray-200 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" wire:model="body"></textarea><!--tengo que definir la variable public body en controllers-->
    @error('body')
        <span>{{ $message }}</span>
    @enderror
</div>