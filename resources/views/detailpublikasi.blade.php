{{-- @extends('layouts.main')

@section('content')

<div class="container mx-auto px-5 md:px-10 xl:px-20">
    <h1>{{ $post->title }}</h1>
</div>

@endsection --}}
@extends('layouts.main')

@section('content')

<div class="container mx-auto p-5 md:px-10 xl:px-20">
    <article class="prose max-w-2xl mx-auto mt-10">
        <h1 class="text-3xl font-semibold">{{ $post->title }}</h1>
        <p class="text-gray-600 text-sm">
            <span><i class="fa-solid fa-user"></i> {{ $post->user->name }}</span>
            <span class="mx-2">|</span>
            <span>{{ $post->created_at->format('M d, Y') }}</span>
            <span class="mx-2">|</span>
            <span>{{ $post->category->name }}</span>
        </p>
        <div class="mt-4">
            @if ($post->image)
                <img class="w-full h-auto object-cover" src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}">
            @endif
        </div>
        <div class="my-6 text-justify">
            {!! $post->body !!}
        </div>
    </article>
</div>

@endsection
