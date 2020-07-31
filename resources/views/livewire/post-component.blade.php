<div class="grid-rows-2 mb-4">
    <div class="gird-cols-3">
        @include("livewire.$view")
        <!--tengo que registrar la variable en el componente Http/livewire/PostComponent.php-->
    </div>
    <div class="grid-cols-3 mx-2 w-full">
        <!--incluyo la tabla-->
        @include('livewire.table')
    </div>
</div>
