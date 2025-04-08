@extends('layouts.main')

@section('content')
<div>
    <div class="bg-[#9a031e]">
        <div class="container mx-auto px-5 md:px-10 xl:px-20">
            <div class="py-20">
                <h1 class="text-3xl font-semibold text-white lg:text-5xl">Lokasi SMK Buddhi</h1>
                <p class="mt-5 text-white text-lg lg:text-lg">Jl. Imam Bonjol No.41, RT.002/RW.003, Karawaci, Kec. Tangerang, Banten, 15115.
                </p>
            </div>
        </div>
        <div class="bg-[#f7f7f7] p-20 aspect-w-12">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15866.033672801037!2d106.61301804765343!3d-6.1964502006587505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fed4c1c38c69%3A0x5502050fd8b3f6fe!2sSekolah%20Menengah%20Kejuruan%20Buddhi!5e0!3m2!1sen!2sid!4v1702279524585!5m2!1sen!2sid"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
                class="mx-auto w-10/12 h-96 rounded-md"
            ></iframe>
        </div>
    </div>
</div>
@endsection