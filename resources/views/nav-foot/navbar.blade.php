<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <nav class="bg-[#f27b00] border-gray-200 shadow-lg sticky z-10 top-0">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-2">
            <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src={{ asset("assets/logo/logo.png") }} class="max-[400px]:w-12 max-[400px]:h-12 w-16 h-16"
                    alt="Logo Buddhi" />
                <span class="max-[400px]:text-lg self-center text-2xl font-semibold whitespace-nowrap text-white">SMK
                    Buddhi</span>
            </a>
            <button data-collapse-toggle="navbar-user" type="button"
                class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-white rounded-lg lg:hidden focus:outline-none"
                aria-controls="navbar-user" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="items-center justify-between hidden w-full lg:flex lg:w-auto lg:order-1" id="navbar-user">
                <ul
                    class="flex flex-col font-medium p-4 lg:p-0 rounded-lg lg:space-x-8 rtl:space-x-reverse lg:flex-row lg:mt-0 lg:border-0">
                    <li>
                        <a href="/"
                            class="transition duration-300 block py-2 px-3 rounded lg:hover:bg-transparent lg:hover:text-[#223d5d] lg:p-0 {{ ($title === 'Home') ? 'text-[#223d5d]': ' text-white'}}"
                            aria-current="page">Home</a>
                    </li>
                    <li class="relative">
                        <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownTentang"
                            class="transition duration-300 flex items-center justify-between w-full py-2 px-3 rounded hover:text-[#223d5d] lg:hover:bg-transparent lg:border-0 lg:p-0 lg:w-auto border-gray-700 {{ (($title === 'Visi dan Misi') || ($title === 'Fasilitas') || ($title === 'Peraturan')) ? 'text-[#223d5d]': ' text-white'}}">Tentang
                            <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <div id="dropdownTentang"
                            class="z-10 hidden font-normal bg-[#e9e8e5] divide-y divide-gray-100 rounded-lg shadow w-full lg:w-44">
                            <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownLargeButton">
                                <ul class="dropdown-menu">
                                    <a href="/visi-misi" class="block px-4 py-2 hover:bg-gray-100">Visi dan Misi</a>
                                </ul>
                                <ul class="dropdown-menu">
                                    <a href="/fasilitas" class="block px-4 py-2 hover:bg-gray-100">Fasilitas</a>
                                </ul>
                                <ul class="dropdown-menu">
                                    <a href="/peraturan" class="block px-4 py-2 hover:bg-gray-100">Peraturan</a>
                                </ul>
                            </ul>
                        </div>
                    </li>
                    <li class="relative">
                        <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownKesiswaan"
                            class="transition duration-300 flex items-center justify-between w-full py-2 px-3 text-white rounded hover:text-[#223d5d] lg:hover:bg-transparent lg:border-0 lg:hover:text-[#223d5d] lg:p-0 lg:w-auto border-gray-700">Kesiswaan
                            <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg></button>
                        <div id="dropdownKesiswaan"
                            class="z-10 hidden font-normal bg-[#e9e8e5] divide-y divide-gray-100 rounded-lg shadow w-full lg:w-44">
                            <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownLargeButton">
                                <li>
                                    <a href="/ekstrakurikuler"
                                        class="block px-4 py-2 hover:bg-gray-100">Ekstrakurikuler</a>
                                </li>
                                <li>
                                    <a href="/guru" class="block px-4 py-2 hover:bg-gray-100">Guru</a>
                                </li>
                                <li>
                                    <a href="/prestasi" class="block px-4 py-2 hover:bg-gray-100">Prestasi</a>
                                </li>
                                <li>
                                    <a href="/publikasi" class="block px-4 py-2 hover:bg-gray-100">Publikasi</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="relative">
                        <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownProgramKeahlian"
                            class="transition duration-300 flex items-center justify-between w-full py-2 px-3 text-white rounded hover:text-[#223d5d] lg:hover:bg-transparent lg:border-0 lg:hover:text-[#223d5d] lg:p-0 lg:w-auto border-gray-700">Program
                            Keahlian
                            <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <div id="dropdownProgramKeahlian"
                            class="z-10 hidden font-normal bg-[#e9e8e5] divide-y divide-gray-100 rounded-lg shadow w-full lg:w-44">
                            <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownLargeButton">
                                <li>
                                    <a href="/akuntansi" class="block px-4 py-2 hover:bg-gray-100">Akuntansi</a>
                                </li>
                                <li>
                                    <a href="/multimedia" class="block px-4 py-2 hover:bg-gray-100">Multimedia</a>
                                </li>
                            </ul>
                        </div>
                    <li>
                        <a href="/gallery"
                            class="transition duration-300 block py-2 px-3 rounded lg:hover:bg-transparent lg:hover:text-[#223d5d] lg:p-0 {{ ($title === 'Gallery') ? 'text-[#223d5d]': ' text-white'}}">Gallery</a>
                    </li>
                    @auth
                    <li class="relative">
                        <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownUser"
                            class="z-10 transition duration-300 flex items-center justify-between w-full py-2 px-3 text-white rounded hover:text-[#223d5d] lg:hover:bg-transparent lg:border-0 lg:hover:text-[#223d5d] lg:p-0 lg:w-auto border-gray-700">{{
                            auth()->user()->name }}
                            <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>
                        <div id="dropdownUser"
                            class="hidden font-normal bg-[#e9e8e5] divide-y divide-gray-100 rounded-lg shadow w-full lg:w-44">
                            <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownLargeButton">
                                <li>
                                    <a href="/users/{{ auth()->user()->id }}/edit"
                                        class="block px-4 py-2 hover:bg-gray-100">Edit Profile</a>
                                </li>
                            </ul>

                            @if (auth()->user()->is_admin === 1)
                            <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownLargeButton">
                                <li>
                                    <a href="/dashboard" class="block px-4 py-2 hover:bg-gray-100">Dashboard</a>
                                </li>
                            </ul>
                            @endif
                            <div class="py-2">
                                <form action="/logout" method="post" class="inline-block w-full">
                                    @csrf
                                    <button type="submit"
                                        class="text-left w-full px-4 py-2 text-sm hover:bg-gray-100">Logout <i
                                            class="fa-solid fa-arrow-right-from-bracket"></i></button>
                                </form>
                            </div>
                        </div>
                    <li>
                    @endauth
                </ul>
            </div>
        </div>
    </nav>
</body>

</html>