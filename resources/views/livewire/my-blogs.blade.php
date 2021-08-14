<div>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Published Blogs') }}
        </h2>
    </x-slot>
    <livewire:blog-feeds :flag="3"/>
</div>
