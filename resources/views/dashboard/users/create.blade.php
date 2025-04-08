@extends('dashboard.index')

@section('content')
<div class="min-h-screen bg-[#f7f7f7] ml-[3.5rem]  sm:flex sm:items-center sm:justify-center w-full">
    <div class="bg-white p-8 rounded-md shadow-lg w-full h-full sm:h-auto sm:max-w-md">
        <div class="text-2xl font-semibold mb-6">{{ __('Create Account') }}</div>
        <form method="POST" action="/dashboard/users" class="space-y-4"> 
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
                <label for="email" class="block text-sm font-medium text-gray-600">{{ __('Email Address') }}</label>
                <input id="email" type="email"
                    class="form-input mt-1 block w-full border border-gray-300 @error('email') border-red-500 @enderror"
                    name="email" value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="role" class="block text-sm font-medium text-gray-600">{{ __('Role') }}</label>
                <select name="is_admin" id="role" class="form-input mt-1 border border-gray-300 block w-full py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                    <option value="" disabled selected>Choose</option>
                    <option value="0" {{ old('is_admin') == '0' ? 'selected' : '' }}>User</option>
                    <option value="1" {{ old('is_admin') == '1' ? 'selected' : '' }}>Admin</option>
                </select>
                
                @error('is_admin')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-gray-600">{{ __('Password') }}</label>
                <input id="password" type="password"
                    class="form-input mt-1 block w-full border border-gray-300 @error('password') border-red-500 @enderror"
                    name="password" required autocomplete="new-password">

                @error('password')
                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="password-confirm" class="block text-sm font-medium text-gray-600">{{ __('Confirm Password')
                    }}</label>
                <input id="password-confirm" type="password" class="form-input mt-1 block w-full border border-gray-300"
                    name="password_confirmation" required autocomplete="new-password">
            </div>

            <div>
            <button type="submit" class="bg-[#213d5d] text-sm text-white px-4 py-2 rounded-md w-full">
                    {{ __('Create') }}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection