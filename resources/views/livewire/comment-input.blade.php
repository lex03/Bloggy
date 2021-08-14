<div>
@yield('layout.app')
    @if($parentid == NULL)
    <div class="sm:col-span-6 mx-5">
        <label for="text" class="block text-sm font-medium text-gray-700">
            Add Comment
        </label>
        <div class="mt-1">
            <input id="text" wire:model="comment.text" name="text" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5">
        </div>
    </div>
    <div class="flex justify-center py-9">
        <div wire:click="savePostDraft" class=" inline-flex justify-center mx-4 px-4 py-1 text-sm font-medium leading-5 text-white transition duration-150 ease-in-out bg-green-500 border border-transparent rounded-md hover:bg-green-600 focus:outline-none focus:border-green-700 focus:shadow-outline-green active:bg-green-700 cursor-pointer">Comment</div>
    </div>
    @else
        @if($blogadmin == $currentuser)
        <div class="sm:col-span-6 mx-5">
            <label for="text" class="block text-sm font-medium text-gray-700">
                Add Reply
            </label>
            <div class="mt-1">
                <input id="text" wire:model="comment.text" name="text" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5">
            </div>
        </div>
        <div class="flex justify-center py-9">
            <div wire:click="saveReply" class=" inline-flex justify-center mx-4 px-4 py-1 text-sm font-medium leading-5 text-white transition duration-150 ease-in-out bg-green-500 border border-transparent rounded-md hover:bg-green-600 focus:outline-none focus:border-green-700 focus:shadow-outline-green active:bg-green-700 cursor-pointer">Reply</div>
        </div>
        @endif
    @endif
</div>
