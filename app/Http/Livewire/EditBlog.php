<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;
use Auth;

class EditBlog extends Component
{
    public $post;
    public $saveSuccessPublish = false;
    public $saveSuccessDraft = false;
   
    public function mount($id)
    {
        $this->post = Post::find($id);
    }
 
    protected $rules = [
        'post.title' => 'required|min:6',
        'post.body' => 'required|min:6',
        'post.category' => 'required|min:6',
        'post.tag' => 'required|min:6',
    ];

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
        return view('livewire.edit-blog');
    }

}
