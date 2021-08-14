<?php

namespace App\Http\Livewire;
use Auth;
use Livewire\Component;
use App\Models\Post;
use App\Models\Comment;

class BlogFeeds extends Component
{
    public $blogs;
    public $comments;
    public $currentuser;
    public $flag;
    
    public function mount($flag){
        $this->flag = $flag;
    }
    public function render()
    {
        $this->currentuser = Auth::user()->id;
        $this->comments = Comment::all();
        $this->blogs = Post::all();
        return view('livewire.blog-feeds');
    }
}
