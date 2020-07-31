<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Post;

class PostComponent extends Component
{
    //evita errores en la paginacion cuando eliminamos datos
    use WithPagination;

    public $title,$body;
    public  $view='create';//asigno la variable view a la vista create

    public function render()
    {
        return view('livewire.post-component',[
            'posts' => Post::orderby('id','desc')->paginate(10)
        ]);
    }

    public function store()
    {
        $this->validate(['title'=>'required','body'=>'required']);
        Post::create([
            'title'=>$this->title,
            'body'=>$this->body
        ]);
    }

    public function destroy($id)
    {
        Post::destroy($id);
    }
}
