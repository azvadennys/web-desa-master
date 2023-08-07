@extends('layouts.layout')

@section('style')
    <style>
        .container {
            text-align: center;
        }

        .center {
            text-align: center;
            list-style-position: inside;
        }

        ol li {
            margin-top: 10px;
        }
    </style>
@endsection


@section('title')
    Desa Talang Kering | Visi & Misi
@endsection
@section('content')
    @include('partials.jumbotron')

    <div class="container">
        <h4>VISI :</h4>
        <p class="lead">PENINGKATAN TATA KELOLA PEMERINTAHAN DESA YANG BAIK GUNA
            MEWUJUDKAN KEHIDUPAN MASYARAKAT DESA YANG ADIL, AMAN, BERKUALITAS, SEJAHTERA, RELEGIUS DAN BERBUDAYA</p>
        <h4>MISI:</h4>
        <ol class="text-left ">
            <li>Peningkatan Sistem Kerja Aparatur Pemerintahan Desa Guna Meningkatkan Kualitas Pelayanan Kepada Masvarakat
            </li>
            <li>Menyelenggarakan Pemerintahan Yang Bersih. Terbebas Dari Korupsi Serta Bentuk
                Bentuk Penvelewengan Lainnya.</li>
            <li>Penvelenggaraan Urusan Pemerintahan Desa Secara Terbuka. Dan Bertanggung Jawab
                Sesuai Dengan Peraturan Perundang- Undangan</li>
            <li>Meningkatkan Perekonomian Masvarakat Melalui Kelompok Tani Dan Kelompok
                Kelompok Masvarakat Lainnva</li>
            <li>Penguatan Budes Dan Penguatan Permodalan Bumdes</li>
            <li>Meningkatkan Jalan-Jalan Sentral Pertanian</li>
            <li>Pembangunan Dan Renovasi Jaringan Irigasi</li>
            <li>Melakukan Penataan Administrasi Kependududkan</li>
            <li>Melakukan Rasionalisasi Anggaran Desa Guna Tercapainya Apa Yang Meniadi
                Keinginan Dari Masyarakat</li>
            <li>Memberi Pemahaman Hukum Kepada Masvarakat Baik Hukum Formal Maupun Hukum
                Adat</li>
            <li>Meningkatkan Partisipati Masvrakta Dalam
                Proses
                - Proses Perencanaan Dan
                Pembangunan Desa</li>
            <li>Melaksanakan Kegiatan - Kegiatan Keagamaan secara rutin Seperti Kelompok Belajar
                Baca Tulis Al-Qur'an Dan Majelis Ta lim.</li>
            <li>Melakukan Kegiatan Pelestarian Budaya dan Kesenian Adat Reiang</li>
            <li>Meningkatkan Mutu Kesejahteraan Masyarakat Untuk Mencapai Tara Kehidupan Yang
                Lebih Layak Sehingga Menjadi Desa Yang Maju Dan Mandiri</li>
        </ol>
    </div>
@endsection
