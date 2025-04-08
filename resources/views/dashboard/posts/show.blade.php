@extends('dashboard.index')

@section('content')

<div class="container ml-[3.35rem] mx-auto px-5 md:px-10 xl:px-20 overflow-x-hidden">
    <h1 class="text-center sm:text-left text-3xl my-8 font-semibold capitalize mt-16">{{ $post->title }}</h1>
    <div class="flex space-x-1 justify-center sm:justify-start mb-8">
        <a href="/dashboard/posts"
            class="transition duration-300 bg-[#f27b00] hover:bg-green-700 text-white px-4 py-2 rounded-md">
            <i class="fa-solid fa-arrow-left text-sm"></i> Back
            <a href="/dashboard/posts/{{ $post->slug }}/edit"
                class="transition duration-300 bg-[#213d5d] hover:bg-yellow-600 text-white px-4 py-2 rounded-md">
                <i class="fa-solid fa-edit text-sm"></i> Edit
            </a>
        <form action="{{ route('posts.destroy', $post->slug) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" onclick="return confirm('Are you sure you want to delete this post?')"
                class="transition duration-300 bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-md">
                <i class="fa-solid fa-trash text-sm"></i> Delete
            </button>
        </form>
    </div>
    <div class="mb-3">
        <p class="text-sm text-gray-500">Category: {{ $post->category->name }}</p>
        <p class="text-sm text-gray-500">Created by: {{ $post->user->name }}</p>
        <p class="text-sm text-gray-500">Created at: {{ $post->created_at }}</p>
    </div>
    @if ($post->image)
    <div class="max-w-3xl">
        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }} Image" class="w-full object-cover h-auto rounded-md">
    </div>
    @endif
    <div class="my-8">
        <p class="text-justify">{!! $post->body !!}</p>
    </div>
</div>

@endsection