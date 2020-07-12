<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Post;

class PostComponent extends Component
{
    use WithPagination;
    
    public function render()
    {
        return view('livewire.post-component',[
            'posts' => Post::orderby('id','desc')->paginate(8)
        ]);
    }
}
