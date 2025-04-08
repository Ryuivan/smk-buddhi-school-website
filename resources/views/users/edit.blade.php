@extends('layouts.main')

@section('content')

<div class="min-h-screen bg-[#f7f7f7] flex items-center justify-center w-full">
    <div class="bg-white p-8 rounded-md shadow-lg w-full max-w-md">
        <div class="text-2xl font-semibold mb-6">{{ __('Edit Profile') }}</div>

        <form method="POST" action="{{ route('users.update', $user->id) }}" class="space-y-4">
            @method('PUT')
            @csrf

            <div>
                <label for="name" class="block text-sm font-medium text-gray-600">{{ __('Name') }}</label>
                <input id="name" type="text"
                    class="form-input mt-1 block w-full border border-gray-300 @error('name') border-red-500 @enderror"
                    name="name" value="{{ old('name', $user->name) }}" required autocomplete="name" autofocus>

                @error('name')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="email" class="block text-sm font-medium text-gray-600">{{ __('Email Address') }}</label>
                <input id="email" type="email"
                    class="form-input mt-1 block w-full border border-gray-300 @error('email') border-red-500 @enderror"
                    name="email" value="{{ old('email', $user->email) }}" required autocomplete="email">

                @error('email')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <button type="submit" class="bg-[#213d5d] text-white px-4 py-2 rounded-md w-full">
                    {{ __('Update') }}
                </button>
            </div>
        </form>
    </div>
</div>

@endsection