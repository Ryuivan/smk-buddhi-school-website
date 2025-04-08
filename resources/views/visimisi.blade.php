@extends('layouts.main')

@section('content')
<div>
    <div class="bg-[#9a031e]">
        <div class="container mx-auto px-5 md:px-10 xl:px-20">
            <div class="py-20">
                <h1 class="text-3xl font-semibold text-white lg:text-5xl">Visi dan Misi</h1>
                <p class="mt-5 text-white text-lg lg:text-lg">Visi dan Misi Sekolah Menengah Kejuruan Perguruan Buddhi.
                </p>
            </div>
        </div>
        <div class="bg-[#f7f7f7] p-5">
            <div class="mx-auto md:px-0 pt-5 mt-5 md:mx-0 animate__animated animate__fadeIn">
                <img src="{{ asset('assets/visimisi/visimisi.png') }}" alt="Visi dan Misi" class="w-full md:w-4/5 mx-auto rounded-md">
            </div>
            <div class="mx-auto md:p-5 md:px-0 md:m-5 md:mx-0 flex flex-col md:flex-row justify-center">
                <div class="mt-8 bg-white shadow-lg rounded-lg lg:w-2/5 md:mx-5 p-8">
                    <h1 class="text-center text-3xl font-medium">Visi</h1>
                    <p class="font-normal text-base mt-5 text-justify">Sekolah Menengah Kejuruan (SMK) Buddhi mempunyai visi untuk membentuk manusia yang unggul dalam
                        intelektual, terampil dalam bekerja, handal dalam berwirausaha dan terpuji dalam moral.</p>
                </div>
                <div class="mt-8 bg-white shadow-lg rounded-lg lg:w-2/5 md:mx-5 p-8">
                    <h1 class="text-center text-3xl font-medium">Misi</h1>
                    <p class="font-normal text-base mt-5 text-justify">Sekolah Menengah Kejuruan (SMK) Buddhi mempunyai misi:</p>
                    <ol class="list-decimal font-normal text-base mt-5 text-justify">
                        <li class="ml-3">Menyelenggarakan pendidikan dan pelatihan yang berbasis produktif.</li>
                        <li class="ml-3">Meningkatkan kualitas organisasi dan menajemen sekolah dalam menumbuhkan semangat keunggulan
                            dan kompetitif.</li>
                        <li class="ml-3">Meningkatkan kualitas KBM dalam mencapai kompetensi siswa berstandar nasional/internasional.
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection