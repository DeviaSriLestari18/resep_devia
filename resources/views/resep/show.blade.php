<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Tabel Resep Makanan </title>
    <link rel="icon" href="{{ asset('assets/images/graduation-hat.png') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.base.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/jvectormap/jquery-jvectormap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/owl-carousel-2/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/owl-carousel-2/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" />
</head>

<body>
    <div class="container-scroller">
        {{-- SIDEBAR --}}
        @include('include.backend.sidebar')

        {{-- NAVBAR --}}
        <div class="container-fluid page-body-wrapper">
            @include('include.backend.navbar')

            {{-- FORM --}}
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-md-7 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Detail Data Resep Makanan</h3>
                                    @csrf
                                    <div class="form-group row">
                                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">
                                            Resep Makanan</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="putih" name="nama"
                                                value="{{ $resep->nama }}" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Deskripsi
                                            </label>
                                        <div class="col-sm-9">
                                            <input type="text" name="deskripsi" class="form-control"
                                                id="putih" value="{{ $resep->deskripsi }}" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Cara Membuat
                                            </label>
                                        <div class="col-sm-9">
                                            <textarea name="cara_buat" class="form-control" id="putih" rows="4" disabled>{{ $resep->cara_buat }}
                                            </textarea>
                                        </div>
                                    </div>
                                    <br>
                                    <a href="{{ url('resep') }}" class="btn btn-info">Back</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Photo</h4>
                                    @csrf
                                    <center><img class="card" src="{{ asset('images/resep/' . $resep->gambar) }}"
                                            width="380"></center>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <script src="{{ asset('assets/vendors/js/vendor.bundle.base.js') }}"></script>
            <script src="{{ asset('assets/vendors/chart.js/Chart.min.js') }}"></script>
            <script src="{{ asset('assets/vendors/progressbar.js/progressbar.min.js') }}"></script>
            <script src="{{ asset('assets/vendors/jvectormap/jquery-jvectormap.min.js') }}"></script>
            <script src="{{ asset('assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
            <script src="{{ asset('assets/vendors/owl-carousel-2/owl.carousel.min.js') }}"></script>
            <script src="{{ asset('assets/js/off-canvas.js') }}"></script>
            <script src="{{ asset('assets/js/hoverable-collapse.js') }}"></script>
            <script src="{{ asset('assets/js/misc.js') }}"></script>
            <script src="{{ asset('assets/js/settings.js') }}"></script>
            <script src="{{ asset('assets/js/todolist.js') }}"></script>
            <script src="{{ asset('assets/js/dashboard.js') }}"></script>
</body>

</html>
