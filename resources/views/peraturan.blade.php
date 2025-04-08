@extends('layouts.main')

@section('content')
<div class="bg-[#9a031e]">
    <div class="container mx-auto px-5 md:px-10 xl:px-20">
        <div class="py-20">
            <h1 class="text-3xl font-semibold text-white lg:text-5xl">Peraturan</h1>
            <p class="mt-5 text-white text-lg lg:text-lg">Peraturan sehari-hari di Sekolah Menengah Kejuruan Perguruan Buddhi.
            </p>
        </div>
    </div>
    <div class="bg-[#f7f7f7]">
        <div class="container py-24 animate__animated animate__fadeIn">
            <div class="umum mx-auto p-8 bg-white shadow-lg rounded-md w-3/5">
                <h3 class="text-xl font-bold text-left">UMUM</h3>
                <p class="mt-4 text-lg">Setiap siswa wajib:</p>
                <ol class="ms-6 list-decimal text-justify text-base">
                    <li class="my-1">Menjunjung tinggi norma-norma agama Buddha.</li>
                    <li class="my-1">Bersikap sopan santun kepada Bapak/Ibu guru, orang tua, dan sesama insan.</li>
                    <li class="my-1">Mengikuti upacara bendera pada hari Senin serta hari besar lainnya (sesuai ketentuan).</li>
                    <li class="my-1">Mengenakan seragam Sekolah sesuai ketentuan, lengkap dengan atributnya. Tidak dibenarkan mengenakan seragam 
                        olahraga pada jam pelajaran lain.</li>
                    <li class="my-1">Menjaga ketertiban, ketenangan, dan kebersihan kelas masing-masing serta lingkungan sekolah.</li>
                    <li class="my-1">Menjaga nama baik Sekolah di manapun berada.</li>
                    <li class="my-1">Memiliki perlengkapan belajar seperti buku, alat tulis menulis, dan lain-lain.</li>
                    <li class="my-1">Membayar uang SPP melalui Bank BCA paling lambat tanggal 10 pada setiap bulannya.</li>
                    <li class="my-1">Mengikuti kebaktian di Vihara Sekolah dan hari lainnya boleh dilakukan di Vihara tempat tinggal siswa (sesuai ketentuan).</li>
                </ol>
            </div>
            <div class="khusus mt-10 mx-auto p-8 bg-white shadow-lg rounded-md w-3/5">
                <h3 class="text-xl font-bold text-left">KHUSUS</h3>
                <p class="mt-4 text-lg">Setiap siswa wajib:</p>
                <p class="mt-4 text-base font-semibold">Kehadiran</p>
                <ol class="ms-6 list-decimal text-justify text-base">
                    <li class="my-1">Hadir di Sekolah selambat-lambatnya 15 menit sebelum jam pelajaran pertama dimulai.</li>
                    <li class="my-1">Melapor kepada guru piket bila terlambat hadir.</li>
                    <li class="my-1">Memberi surat keterangan yang sah sesegera mungkin bila tidak bisa hadir di sekolah, dan memberikan surat keterangan 
                        dokter bila sakit lebih dari 3 (tiga) hari.</li>
                    <li class="my-1">Mengajukan permohonan izin kepada wali kelas bila karena sesuatu hal siswa tidak dapat mengikuti pelajaran. Surat
                        permohonan harus ditanda tangani oleh orang tua/wali.</li>
                    <li class="my-1">Meminta izin kepada guru kelas/wali kelas/guru piket bila akan keluar kelas/sekolah saat jam pelajaran berlangsung.</li>
                    <li class="my-1">Berada di sekolah sejak jam pelajaran pertama sampai dengan jam pelajaran terakhir.</li>
                </ol>
                <p class="mt-4 text-base font-semibold">Suasana KBM</p>
                <ol class="ms-6 list-decimal text-justify text-base">
                    <li class="my-1">Segera masuk kelas bila mendengar tanda bel masuk. Tidak bergerombol di muka kelas. 
                        (Bila terlambat, mengambil surat izin masuk di TU).</li>
                    <li class="my-1">Melaksanakan piket kebersihan kelas sesuai dengan Jadwal. </li>
                    <li class="my-1">Duduk dengan tenang.</li>
                    <li class="my-1">Bila guru belum hadir, ketua/wakil kelas melapor pada guru piket di kantor.</li>
                    <li class="my-1">Mengikuti pelajaran dengan tertib dan tidak belajar atau mengerjakan pekerjaan lain.</li>
                    <li class="my-1">Ulangan dikerjakan dengan jujur.</li>
                    <li class="my-1">Tidak diperbolehkan mengadakan peringatan ulang tahun di dalam kelas.</li>
                </ol>

                <p class="mt-4 text-base font-semibold">Penggunaan Seragam</p>
                <div class="mt-3 mx-auto px-5 py-5 lg:py-14 bg-[#f7f7f7] rounded-md flex flex-wrap justify-center gap-x-6 gap-y-3 lg:w-4/5">
                    <div>
                         <img src="{{ asset ("assets/seragam/senin.png") }}" alt="Seragam Senin" class="lg:w-64 lg:h-80 rounded-md">
                        <p class="text-md text-center mt-1 leading-5">Seragam Senin</p>
                    </div>
                    <div>
                        <img src="{{ asset ("assets/seragam/selasa.png") }}" alt="Seragam Selasa" class="lg:w-64 lg:h-80 rounded-md">
                        <p class="text-md text-center mt-1 leading-5">Seragam Selasa</p>
                    </div>
                    <div>
                        <img src="{{ asset ("assets/seragam/rabu.png") }}" alt="Seragam Rabu" class="lg:w-64 lg:h-80 rounded-md">
                        <p class="text-md text-center mt-1 leading-5">Seragam Rabu</p>
                    </div>
                    <div>
                        <img src="{{ asset ("assets/seragam/kamis.png") }}" alt="Seragam Kamis" class="lg:w-64 lg:h-80 rounded-md">
                        <p class="text-md text-center mt-1 leading-5">Seragam Kamis</p>
                    </div>
                    <div>
                        <img src="{{ asset ("assets/seragam/jumat.png") }}" alt="Seragam Jumat" class="lg:w-64 lg:h-80 rounded-md">
                        <p class="text-md text-center mt-1 leading-5">Seragam Jumat</p>
                    </div>
                </div>

                <p class="mt-4 text-base font-semibold">Ketentuan Seragam</p>
                <ol class="ms-6 list-decimal text-justify text-base">
                    <li class="my-1">Kemeja/Blouse OSIS harus selalu dimasukkan ke dalam celana/rok.</li>
                    <li class="my-1">Kemeja/Blouse harus memakai lambang OSIS di saku sebelah kiri.</li>
                    <li class="my-1">Seluruh siswa harus berseragam lengkap sesuai dengan ketentuan.</li>
                    <li class="my-1">Celana panjang (putra) sampai ke mata kaki.</li>
                    <li class="my-1">Rok (putri) panjangnya harus menutupi lutut dalam sikap berdiri.</li>
                    <li class="my-1">Semua siswa wajib memakal ikat pinggang warna hitam.
                    <li class="my-1">Semua siswa tidak diperbolehkan memakai kaos oblong apapun.</li>
                    <li class="my-1">Semua siswa wajib mengenakan sepatu sekolah berwarna hitam dan kaos kaki putih.
                </ol>

                <p class="mt-4 text-base font-semibold">Rambut</p>
                <ol class="ms-6 list-decimal text-justify text-base">
                    <li class="my-1">Rambut tidak boleh disemir/diwarnai. Khusus laki-laki rambut dipotong pendek bagian depan 2 cm di atas alis, bagian atas rambut 3 cm 
                        dan bagjan belakang tidak menutupi kera baju.</li>
                    <li class="my-1">Rambut siswa perempuan harus diatur rapih.</li>
                </ol>

                <p class="mt-4 text-base font-semibold">DILARANG</p>
                <ol class="ms-6 list-decimal text-justify text-base">
                    <li class="my-1">Merokok selama menjadi siswa-siswi SMK Buddhi.</li>
                    <li class="my-1">Mencoret-coret bangku, pintu, kursi ataupun perlengkapan lain yang ada di lingkungan sekolah.</li>
                    <li class="my-1">Menerima tamu tanpa persetujuan Guru/Wali Kelas, Guru Piket, Kepala Sekolah.</li>
                    <li class="my-1">Membawa, menyimpan, mengedarkan minuman yang beralkohol atau yang memabukkan serta obat-obat terlarang lainnya (ganja, heroin dll).</li>
                    <li class="my-1">Membawa senjata api, senjata tajam atau benda apapun yang tidak ada hubungannya dengan pelajaran di sekolah.</li>
                    <li class="my-1">Membawa, menyimpan dan mengedarkan buku, film atau media lainnya yang bertentangan dengan susila dan nilai-nilai budaya 
                        serta moral bangsa Indonesia.</li>
                    <li class="my-1">Berkelahi atau tawuran baik secara perorangan maupun secara masal/kelompok di sekolah atau di luar sekolah.</li>
                    <li class="my-1">Melakukan tindakan-tindakan yang merugikan secara masal/kelompok di Sekolah atau di luar sekolah atau milik
                        melakukan pengrusakan terhadap benda-benda perorangan demikian juga terhadap milik Sekolah.</li>
                    <li class="my-1">Memakai perhiasan dan aksesoris apapun (kalung, gelang, anting-anting dll) secara berlebihan.</li>
                    <li class="my-1"> Berkuku panjang atau memakai kutek.</li>
                    <li class="my-1"> Membawa bahan peledak atau petasan.</li>
                    <li class="my-1"> Alpa lebih dari 3 hari.</li>
                    <li class="my-1"> Keluar dari ruang kelas saat pergantian jam.</li>
                    <li class="my-1"> Melakukan kegiatan olah raga di luar jam pelajaran olah raga yang telah ditentukan dan tanpa sepengetahuan guru olahraga.</li>
                </ol>

                <p class="mt-4 text-base font-semibold">SANKSI SISWA YANG MELANGGAR</p>
                <ol class="ms-6 list-decimal text-justify text-base">
                    <li class="my-1">Akan diberikan peringatan secara lisan berupa arahan dan nasihat.</li>
                    <li class="my-1">Diberikan surat pemberitahuan kepada orang tua/wali murid.</li>
                    <li class="my-1">Diberhentikan sementara (skorsing) antara 3 sampai 6 hari.</li>
                    <li class="my-1">Akan diberhentikan dan dikembalikan kepada orang tua/wali.</li>
                </ol>
            </div>
        </div>
    </div>
</div>

@endsection