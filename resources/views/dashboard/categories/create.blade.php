@extends('dashboard.index')

@section('content')

<div class="min-h-screen bg-[#f7f7f7] ml-[3.5rem]  sm:flex sm:items-center sm:justify-center w-full">
    <div class="bg-white p-8 rounded-md shadow-lg w-full h-full sm:h-auto sm:max-w-md">
        <div class="text-2xl font-semibold mb-6">{{ __('Create Category') }}</div>

        <form method="POST" action="{{ route('categories.store') }}" class="space-y-4" enctype="multipart/form-data">
            @csrf

            <div>
                <label for="name" class="block text-sm font-medium text-gray-600">{{ __('Name') }}</label>
                <input id="name" type="text"
                    class="form-input mt-1 block w-full border border-gray-300 @error('name') border-red-500 @enderror"
                    name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="slug" class="block text-sm font-medium text-gray-600">{{ __('Slug') }}</label>
                <input id="slug" type="text"
                    class="form-input mt-1 block w-full border border-gray-300 @error('slug') border-red-500 @enderror"
                    name="slug" value="{{ old('slug') }}">

                @error('slug')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <button type="submit" class="bg-[#213d5d] text-sm text-white px-4 py-2 rounded-md w-full">
                    {{ __('Create') }}
                </button>
            </div>
        </form>
    </div>
</div>

<script>

    const title = document.querySelector('#name');
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

</script>

@endsection