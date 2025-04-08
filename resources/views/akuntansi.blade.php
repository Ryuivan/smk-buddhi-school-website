@extends('layouts.main')

@section('content')
<div>
    <div class="bg-[#9a031e]">
        <div class="container mx-auto px-5 md:px-10 xl:px-20">
            <div class="py-20">
                <h1 class="text-3xl font-semibold text-white lg:text-5xl">Akuntansi</h1>
                <p class="mt-5 text-white text-lg lg:text-lg">Program Keahlian Akuntansi SMK Buddhi</p>
            </div>
        </div>
        <div class="bg-[#f7f7f7]">
            <div class="container mx-auto py-24 px-5 md:px-10 xl:px-20">
                <div class="mx-auto flex flex-wrap-reverse xl:flex-wrap flex-row">
                    <div class="mt-8 mx-auto sm:min-w-2/4 md:w-3/4 lg:w-5/6 xl:w-3/6 px-8">
                        <h1 class="text-center text-2xl md:text-3xl lg:text-3xl xl:text-3xl font-medium">Tujuan Program Keahlian Akuntansi</h1>
                        <p class="font-normal text-base mt-5 text-justify">Mencetak tenaga ahli madya profesional dalam bidang Akuntansi yang berbasis teknologi komputer yang berorientasi pada kebutuhan dunia usaha dan industri dengan spesifikasi kompetensi sebagai berikut:</p>
                        <ol class="list-decimal font-normal text-base mt-5 text-justify">
                            <li class="ml-3">Mampu mencatat dan mengerjakan transaksi keuangan sesuai dengan siklus akuntansi.</li>
                            <li class="ml-3">Mampu mengerjakan akuntansi keuangan berbagai bentuk badan usaha, baik secara manual maupun komputerisasi/MYOB.</li>
                            <li class="ml-3">Mampu mengerjakan dan menyusun laporan harga pokok produksi dalam perusahaan industri/manufaktur.</li>
                            <li class="ml-3">Menguasai perpajakan.</li>
                            <li class="ml-3">Mampu berkomunikasi dalam Bahasa Inggris.</li>
                        </ol>
                    </div>  
                    <div class="mx-auto mt-8 md:mt-0 md:w-3/4 xl:w-3/6 px-8">
                        <img src="{{ asset("assets/programkeahlian/Akuntansi.jpg") }}" alt="akuntansi" class="mx-auto xl:mt-4">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection