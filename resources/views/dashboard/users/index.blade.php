@extends('dashboard.index')
@section('content')

<div class="container ml-[3.5rem] sm:mx-auto px-5 md:px-10 xl:px-20 overflow-x-hidden">
<h1 class="text-left text-2xl mb-8 sm:text-center font-semibold uppercase mt-16">Accounts</h1>
    @if (session()->has('success'))
    <div class="flex items-center p-4 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50"
        role="alert">
        <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
            fill="currentColor" viewBox="0 0 20 20">
            <path
                d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
        </svg>
        <span class="sr-only">Info</span>
        <div>
            <span class="font-medium">{{ session('success') }}</span>
        </div>
    </div>
    @endif
    <div class="flex text-left sm:text-center flex-wrap flex-col  sm:flex-row sm:justify-between">        
        <a href="/dashboard/users/create"
            class="transition duration-300 bg-[#315887] hover:bg-[#1C314C] w-40 text-white text-center text-sm px-4 py-2 rounded-md mb-4">
            Add Account <i class="fa-solid fa-plus"></i>
        </a>
        <form action="/dashboard/users">
            <input type="text" name="search"
                class="text-sm sm:text-base border border-gray-200 rounded-md p-2 focus:outline-none h-9 w-40 md:w-60" placeholder="Search"
                value="{{ request('search') }}">
            <button type="submit"
                class="inline transition duration-300 bg-[#315887] hover:bg-[#1C314C] text-white px-4 py-2 rounded-md mb-4">
                <i class="fa-solid fa-search"></i>
            </button>
        </form>
    </div>
    @if ($users->isEmpty())
    <div class="flex justify-center items-center h-32">
        <span class="text-gray-400 font-medium">Account not found</span>
    </div>
    @else
    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500">
            <thead class="text-base text-gray-700 uppercase bg-gray-300">
                <tr>
                    <th scope="col" class="px-6 py-3">Name</th>
                    <th scope="col" class="px-6 py-3">Email</th>
                    <th scope="col" class="px-6 py-3">Role</th>
                    <th scope="col" class="px-6 py-3">Created at</th>
                    <th scope="col" class="px-6 py-3">Action</th>
                </tr>
            </thead>
            <tbody class="bg-white border-b">
                @foreach ($users as $user)
                <tr class="text-sm">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">{{
                        $user->name }}</th>
                    <td class="px-6 py-4" class="px-6 py-4">{{ $user->email }}</td>
                    <td class="px-6 py-4">{{ $user->is_admin ? 'Admin' : 'User' }}</td>
                    <td class="px-6 py-4">{{ $user->created_at }}</td>
                    <td class="px-6 py-4">
                        <form action="/dashboard/users/{{ $user->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                onclick="return confirm('Are you sure you want to delete this account?')"
                                class="transition duration-300 bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-md">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endif
</div>
@endsection