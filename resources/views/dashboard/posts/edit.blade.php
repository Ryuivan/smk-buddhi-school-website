@extends('dashboard.index')

@section('content')

<div class="ml-[3.35rem] max-w-screen flex justify-center w-full">
    <div class=" p-8 h-auto rounded-md w-full">
        <div class="text-2xl font-semibold mb-6">{{ __('Edit Post') }}</div>

        <form method="POST" action="{{ route('posts.update', $post->slug) }}" class="space-y-4"
            enctype="multipart/form-data">
            @method('PUT')
            @csrf

            <div class="flex flex-col md:flex-row justify-start md:space-x-3 space-y-3 md:space-y-0">
                <div class="md:w-1/3">
                    <label for="title" class="block text-sm font-medium text-gray-600">{{ __('Title') }}</label>
                    <input id="title" type="text"
                        class="form-input mt-1 block w-full border border-gray-300 @error('title') border-red-500 @enderror"
                        name="title" value="{{ old('title', $post->title) }}" autocomplete="title">

                    @error('title')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="md:w-1/3">
                    <label for="slug" class="block text-sm font-medium text-gray-600">{{ __('Slug') }}</label>
                    <input id="slug" type="text"
                        class="form-input mt-1 block w-full border border-gray-300 @error('slug') border-red-500 @enderror"
                        name="slug" value="{{ old('slug', $post->slug) }}" readonly>

                    @error('slug')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="md:w-1/3">
                    <label for="category" class="block text-sm font-medium text-gray-600">{{ __('Category') }}</label>
                    <select name="category_id" id="category"
                        class="form-input mt-1 block border border-gray-300 block w-full px-4 pr-8 focus:outline-none focus:bg-white focus:border-gray-500">
                        <option value="" disabled>Choose</option>
                        @foreach ($categories as $category)
                        @if (old('category_id', $post->category_id) == $category->id)
                        <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                        @else
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endif
                        @endforeach
                    </select>

                    @error('category_id')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div>
                <label for="body">Body</label>
                <input id="x" type="hidden" name="body" class="text-4xl" value="{{ old('body', $post->body) }}">
                <trix-editor class="text-sm bg-white" input="x"></trix-editor>

                @error('body')
                <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div>
                <label for="image" class="block text-sm font-medium text-gray-600">{{ __('Image') }}</label>
                <input type="hidden" name="oldImage" value="{{ $post->image }}">
                @if ($post->image)
                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}"
                    class="img-preview my-3 h-60 mx-auto block">
                @else
                <img src="{{ asset('assets/profile/imagenull.png') }}" class="img-preview my-3 h-60 mx-auto block" alt="imagenull">
                @endif

                <img class="img-preview">
                <input
                    class="mt-1 block w-full mb-5 text-xs text-gray-900 border border-gray-300 cursor-pointer bg-gray-50 @error('image') border-red-500 @enderror"
                    id="image" type="file" value="{{ old('image', $post->image) }}" name="image"
                    onchange="previewImage()">

                @error('image')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <button type="submit" class="bg-[#213d5d] mb-5 text-white px-4 py-2 rounded-md w-full">
                    {{ __('Update') }}
                </button>
            </div>
        </form>
    </div>
</div>

<script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('input', function() {
        const slugValue = title.value
            .toLowerCase()
            .replace(/\s+/g, '-') // Replace spaces with -
            .replace(/[^\w-]+/g, ''); // Remove non-word characters except -

        slug.value = slugValue;
    });

    title.addEventListener('change', function(){
    fetch('/dashboard/posts/checkSlug?title=' + title.value) // Add '=' here
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    });

    document.addEventListener('trix-file-accept',function(e){
        e.preventDefault();
    })


    document.addEventListener('trix-change', function (e) {
        const editor = e.target.editor;
        const characterLimit = 1000;

        const text = editor.getDocument().toString().trim();
        const characterCount = text.length;

        if (characterCount > characterLimit) {
            const exceededCharacters = characterCount - characterLimit;
            const newText = text.slice(0, characterLimit);
            editor.loadHTML(newText);
        }

        document.getElementById('character-count').innerText = `${characterCount} / ${characterLimit}`;
    });
</script>

@endsection