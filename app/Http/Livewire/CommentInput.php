<?php

namespace App\Http\Livewire;
use Auth;

use Livewire\Component;
use App\Models\Comment;
use Illuminate\Support\Str;
class CommentInput extends Component
{
    public $comment;
    public $postid; 
    public $parentid;
    public $currentuser;
    public $blogadmin; 
    protected $rules = [
        'comment.text' => 'required|min:6',
    ];

    public function mount($arr){
        $this->comment = new Comment;
        $this->postid = $arr[0]; 
        $this->parentid = $arr[1];
        $this->currentuser = Auth::user()->id;
        $this->blogadmin = $arr[2];
        
    }

    public function savePostDraft(){
        $this->comment->name = Auth::user()->name;
        $this->comment->post_id = $this->postid;
        $this->comment->save();
        return redirect('blog/'.$this->postid);
        }

    public function saveReply(){
        $this->comment->name = Auth::user()->name;
        $this->comment->post_id = $this->postid;
        $this->comment->parent_id = $this->parentid;
        $this->comment->save();      
        return redirect('blog/'.$this->postid);
    }

    public function render()
    {
        return view('livewire.comment-input');
    }
}
