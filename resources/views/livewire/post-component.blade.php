<div class="grid grid-cols-3 mx-2">
    <div class="gird-cols-3 m-8">
        @include("livewire.$view")
        <!--tengo que registrar la variable en el componente Http/livewire/PostComponent.php-->
    </div>
    <div class="col-span-2 w-full">
        <!--incluyo la tabla-->
        @include('livewire.table')
    </div>
</div>
