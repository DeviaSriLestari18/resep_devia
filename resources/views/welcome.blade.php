@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<div class="hero-section jumbotron text-center text-white" 
    style="
        background-image: url('{{ asset('img/makanan.jpg') }}'); 
        background-size: cover; 
        background-position: center; 
        background-attachment: fixed; 
        padding: 150px 0; 
        min-height: 450px; /* Adjust height as needed */
    ">
    <h1>Selamat datang di Situs Resep Makanan Kami</h1>
    <p>Temukan resep lezat berdasarkan bahan yang Anda miliki!</p>
    
    <!-- Search Form -->
    <form action="{{ route('search') }}" method="GET" class="search-box">
        <div class="input-group" style="max-width: 500px; margin: 20px auto;">
            <input type="text" name="query" class="form-control" placeholder="Telusuri resep" required>
            <button class="btn btn-orange" type="submit" style="background-color: orange; color: white;">Search</button>
        </div>
    </form>
</div>
@endsection
