<div>
    @yield('layout.app')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit blog') }}
        </h2>
    </x-slot>
    <div class="max-w-6xl mx-auto py-5 sm:px-6 lg:px-8">
        <div class="py-12 ">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    
                    <div class="container mx-auto px-4">
                        <h1 class="text-center text-4xl mt-6 tracking-tight leading-10 font-extrabold text-gray-900 sm:text-5xl sm:leading-none md:text-6xl">Edit Post</h1>
                        <p class="text-lg mt-2 text-center text-gray-600">Start editing your draft post below.</p>
                        <div class="space-y-8 mt-10">
                            @if($saveSuccessPublish)
                                <div class="rounded-md bg-green-100 rounded-lg p-4">
                                    <div class="flex">
                                        <div class="flex-shrink-0">
                                            <svg class="h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <div class="ml-3">
                                            <h3 class="text-sm font-medium text-green-800">Successfully Saved Post and Published</h3>
                                            <div class="mt-2 text-sm text-green-700">
                                                <p>Your new post has been saved and published to the internet.</p>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <a class="mx-8 border-2 border-green-500 hover:border-green-800 px-1" href="/myblogs">View My Blogs</a>
                                </div>
                            @endif
                            @if($saveSuccessDraft)
                                <div class="rounded-md bg-green-100 rounded-lg p-4">
                                    <div class="flex ">
                                        <div class="flex-shrink-0">
                                            <svg class="h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <div class="ml-3">
                                            <h3 class="text-sm font-medium text-green-800">Successfully Saved Post as a Draft</h3>
                                            <div class="mt-2 text-sm text-green-700">
                                                <p>Your new post has been saved as a draft in your draft section.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="mx-8 border-2 border-green-500 hover:border-green-800 px-1" href="/createdraft">View My Drafts</a>
                                </div>
                            @endif

                            <div class="sm:col-span-6">
                                <label for="title" class="block text-sm font-medium text-gray-700">
                                    Edit Post Title
                                </label>
                                <div class="mt-1">
                                    <input id="title" wire:model="post.title" name="title" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                </div>
                            </div>
                            <div class="sm:col-span-12 pt-5">
                                <label for="body" class="block text-sm font-medium text-gray-700">Edit Body</label>
                                <div class="mt-1">
                                    <textarea id="body" rows="3" wire:model="post.body" class="shadow-sm focus:ring-indigo-500 appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"></textarea>
                                </div>
                                <p class="mt-2 text-sm text-gray-500">Edit the body for your post.</p>
                            </div>
                            <div class="sm:col-span-6 pt-5">
                                <label for="category" class="block text-sm font-medium text-gray-700">
                                   Edit Post Category
                                </label>
                                <div class="mt-1">
                                    <input id="category" wire:model="post.category" name="category" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                </div>
                            </div>
                            <div class="sm:col-span-6 pt-5">
                                <label for="tag" class="block text-sm font-medium text-gray-700">
                                    Edit Post Tag
                                </label>
                                <div class="mt-1">
                                    <input id="tag" wire:model="post.tag" name="tag" class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                                </div>
                            </div>
                            <div class="flex justify-center py-9">
                                <div wire:click="savePostDraft" class=" inline-flex justify-center mx-4 px-4 py-2 text-sm font-medium leading-5 text-white transition duration-150 ease-in-out bg-red-500 border border-transparent rounded-md hover:bg-red-600 focus:outline-none focus:border-red-700 focus:shadow-outline-red active:bg-red-700 cursor-pointer">Save Post as Draft</div>
                                <div wire:click="savePostPublish" class=" inline-flex justify-center mx-4 px-4 py-2 text-sm font-medium leading-5 text-white transition duration-150 ease-in-out bg-indigo-500 border border-transparent rounded-md hover:bg-indigo-600 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 cursor-pointer">Publish Post</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
