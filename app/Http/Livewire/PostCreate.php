<?php

namespace App\Http\Livewire;
use Auth;
use App\Models\Post;
use Illuminate\Support\Str;
use Livewire\Component;

class PostCreate extends Component
{
    public $saveSuccessPublish = false;
    public $saveSuccessDraft = false;
    public $post;
    

    protected $rules = [
        'post.title' => 'required|min:6',
        'post.body' => 'required|min:6',
        'post.category' => 'required|min:6',
        'post.tag' => 'required|min:6',
    ];

    public function mount(){
        $this->post = new Post;
    }

    public function savePostDraft(){
        $this->post->user_id = Auth::user()->id;
        $this->post->save();
        $this->saveSuccessDraft = true;
      
    }

    public function savePostPublish(){
        $this->post->user_id = Auth::user()->id;
        $this->post->status = true;
        $this->post->save();
        $this->saveSuccessPublish = true;
        
        
    }

    public function render()
    {
        return view('livewire.post-create');
    }
}