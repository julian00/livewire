<h2 class="text-5xl">Listado de post</h2>

<table class="table-auto">
    <thead>
        <tr>
            <th class="border px-4 py-2">ID</th>
            <th class="border px-4 py-2">Titulo</th>
            <th class="border px-4 py-2">Contenido</th>
            <th class="border px-4 py-2" colspan="2">&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        @foreach($posts as $post)
            <tr class="border px-4 py-2">
                <td class="border px-4 py-2">{{ $post->id }}</td>
                <td class="border px-4 py-2">{{ $post->title }}</td>
                <td class="border px-4 py-2">{{ $post->body }}</td>
                <td class="px-4 py-2">
                    <button wire:click="edit({{  $post->id }})" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                        Editar
                    </button>
                </td>
                <td>
                    <!--llamo al metodo destroy para eliminar y le paso el id-->
                    <button wire:click="destroy({{ $post->id}})" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full">
                        Eliminar
                    </button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<!--paginacion-->
{{ $posts->links()}} 