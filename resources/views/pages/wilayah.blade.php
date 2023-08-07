@extends('layouts.layout')

@section('title')
    Talang Kering | {{ $title }}
@endsection

@section('content')
    <div class="maps">
        <iframe width="100%" height="450" frameborder="0" style="border:0"
            src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDf7fC8S7iheou_BbpDccLrJh0bRl0dyzw
        &q=Talang Kering"
            allowfullscreen>
        </iframe>
    </div>

    <div class="container">
        <h2 style="margin-top: 40px; margin-bottom: 20px; text-align: center;">Wilayah</h2>
        <p class="lead text-justify">Desa Talang Kering adalah salah satu desa di kecamatan Air Napal, kabupaten Bengkulu
            Utara, provinsi Bengkulu, Indonesia. Desa Talang Kering merupakan bagian yang penting dari keberagaman geografis
            Indonesia, tepatnya terletak di kecamatan Air Napal, kabupaten Bengkulu Utara, provinsi Bengkulu. Terletak di
            Pulau Sumatera, provinsi Bengkulu sendiri memiliki sejarah dan budaya yang kaya. Kabupaten Bengkulu Utara, di
            mana Desa Talang Kering berada, menjadi lanskap yang menghubungkan masyarakat lokal dengan kekayaan alam dan
            lingkungan sekitar. Desa ini memainkan peran penting dalam keseimbangan ekosistem dan keragaman kehidupan di
            daerah tersebut. Dengan demikian, Desa Talang Kering di kecamatan Air Napal tidak hanya mewakili suatu lokasi
            fisik, tetapi juga menceritakan cerita tentang interaksi manusia dengan lingkungan dan warisan budaya di
            provinsi Bengkulu.</p>

    </div>
@endsection

@section('script')
@endsection
