@extends('layouts.app')

@section('content')
<!-- About Section Banner -->
<div class="about-banner text-center text-white" 
    style="
        background-image: url('{{ asset('img/makanan.jpg') }}'); 
        background-size: cover; 
        background-position: center; 
        background-attachment: fixed; 
        padding: 150px 0; 
        min-height: 400px;
    ">
    <h1 class="display-4">Tentang Kami</h1>
    <p class="lead">Eksplorasi, Masak, Nikmati Setiap Rasa!</p>
</div>

<!-- About Content Section -->
<div class="about-content text-center" style="padding: 60px 20px; background-color: #f8f9fa;">
    <div class="container">
        <h2>Selamat datang di Resep Makanan</h2>
        <p style="color: #555; max-width: 800px; margin: 20px auto;">
            Kami berdedikasi untuk menghadirkan resep-resep lezat dan mudah diikuti dari seluruh dunia. Tujuan kami adalah menjadikan memasak sebagai kegiatan yang menyenangkan, mudah diakses, dan menginspirasi untuk semua orang, baik Anda yang baru belajar memasak maupun yang sudah berpengalaman.
        </p>

        <h3>Misi Kami</h3>
        <p style="color: #555; max-width: 800px; margin: 20px auto;">
            Misi kami sederhana: menginspirasi para koki rumahan dari berbagai tingkatan untuk menciptakan hidangan luar biasa dengan mudah. Kami menyediakan resep-resep langkah demi langkah, tips, dan panduan yang membuat memasak menjadi pengalaman yang menyenangkan.
        </p>

        <h3>Bergabunglah dengan Komunitas Kami</h3>
        <p style="color: #555; max-width: 800px; margin: 20px auto;">
            Mulai dari makan malam praktis di hari kerja hingga hidangan istimewa di akhir pekan, kami memiliki resep untuk setiap kesempatan. Bergabunglah dengan komunitas pecinta makanan kami, bagikan kreasi Anda, dan terhubung dengan orang-orang yang juga antusias dalam dunia memasak.
        </p>

        <h3>Eksplorasi, Masak, Nikmati!</h3>
        <p style="color: #555; max-width: 800px; margin: 20px auto;">
            Masuki dunia penuh cita rasa bersama Resep Makanan. Mari jadikan setiap hidangan sebagai perayaan!
        </p>

        <!-- Food Images Section -->
        <div class="food-gallery" style="display: flex; flex-wrap: wrap; justify-content: center; gap: 20px; margin-top: 40px;">
            <img src="{{ asset('img/nasi goreng.jpg') }}" alt="Hidangan Lezat" style="width: 300px; height: 300px; object-fit: cover; border-radius: 10px;">
            <img src="{{ asset('img/mkn2.jpg') }}" alt="Hidangan Lezat" style="width: 300px; height: 300px; object-fit: cover; border-radius: 10px;">
            <img src="{{ asset('img/dinsum.jpg') }}" alt="Hidangan Lezat" style="width: 300px; height: 300px; object-fit: cover; border-radius: 10px;">
        </div>
    </div>
</div>
@endsection
