@extends('layouts.app')

@section('content')
    <!-- Main Content -->
    <div class="container my-5">
        <!-- Recipe Card -->
        <div class="card shadow-lg">
            <div class="row no-gutters">
                <!-- Recipe Image -->
                <div class="col-md-4">
                    <img src="{{ asset('images/resep/' . $randomResep->gambar) }}" alt="Gambar {{ $randomResep->nama_resep }}" class="card-img" style="object-fit: cover; height: 100%; width: 100%;">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <!-- Recipe Description -->
                        <h3 class="text-center mb-4">{{ $randomResep->nama }}</h3>
                        <!-- Bahan Section -->
                        <h5 class="card-title">Bahan:</h5>
                        <ul class="list-group list-group-flush mb-3">
                            @foreach(explode(',', $randomResep->bahan->nama_bahan) as $bahan)
                                <li class="list-group-item">{{ $bahan }}</li>
                            @endforeach
                        </ul>

                        <!-- Langkah-langkah Section -->
                        <h5 class="card-title">Cara Membuat:</h5>
                        <p class="card-text">{{ $randomResep->cara_buat }}</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
