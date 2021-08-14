<x-app-layout>
<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            
                @foreach ($blogs as $blog)
                        @if ($blog->id == $blogid)
                        <div class="relative mt-10 bg-white overflow-hidden shadow-xl sm:rounded-lg ">
                            <div>
                                <div class="container mx-auto  flex px-5 pb-7 items-center justify-center flex-col">
                                    <img width="500" class=" mb-1 rounded-3xl" alt="banner" src="https://ak.picdn.net/shutterstock/videos/1028366393/thumb/9.jpg">
                                    
                                    <h2 class="text-gray-500 text-sm font-medium mx-auto px-5 py-1">{{$blog->category}}</h2>
                                    <div class="text-center lg:w-2/3 w-full">
                                        <h1 class="title-font text-2xl mb-2 font-bold text-gray-900">{{$blog->title}}</h1>
                                        <p class="mb-3 text-xl">{{$blog->body}}</p>
                                            <div class="flex justify-center">
                                                <h2 class="rounded-full bg-gray-200 textgray-500 text-sm font-medium mx-auto px-5"># {{$blog->tag}} #</h2>
                                            </div>
                                            <h1 class="text-sm text-gray-500 my-2">Date: {{$blog->created_at}}</h1>
                                    </div>
                                </div>
                            </div> 
                        </div>
                       <h1 class="mx-5 text-xl my-5">Comments</h1>
                       <div class="border-2 border-green-500 mx-3 mb-5">
                                @foreach ($comments as $comment)
                                
                                        @if($comment->parent_id == NULL and $comment->post_id == $blogid)
                                        <div class="container mx-5 mt-5 border">
                                            <div class="mx-3 my-3">
                                            <h1 class="text-xl font-bold">{{$comment->name}}</h1>
                                            <h1 class="text-l">{{$comment->text}}</h1>
                                            <h1 class="text-sm text-gray-500 font-semibold">{{$comment->created_at}}</h1>
                                                    @foreach ($comments as $replycomment)
                                                            @if($replycomment->parent_id == $comment->comment_id)
                                                                <h1 class="text-xl font-bold ml-5">{{$replycomment->name}}</h1>
                                                                <h1 class="text-l ml-5">{{$replycomment->text}}</h1>
                                                                <h1 class="text-sm text-gray-500 ml-5 font-semibold">{{$replycomment->created_at}}</h1>
                                                            @endif
                                                    @endforeach
                                                                
                                            <?php  $arr = ["$blogid",$comment->comment_id,$blog->user_id]  ?> 
                                            <livewire:comment-input :arr="$arr"/>
                                            </div>
                                        </div>
                                        @endif
                                @endforeach
                                <?php  $arr = ["$blogid",NULL,$blog->user_id]  ?>
                                <livewire:comment-input :arr="$arr"/>
                        </div>
                        @endif
                @endforeach
                
            </div>
        </div>
    </div>
</x-app-layout>
