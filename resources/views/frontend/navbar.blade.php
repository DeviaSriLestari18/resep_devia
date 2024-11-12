<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resep Makanan</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        .navbar {
            background: url('https://www.example.com/path/to/your/food-background.jpg') no-repeat center center;
            background-size: cover;
            padding: 15px;
        }

        .navbar .nav-link {
            font-weight: bold;
            color: #000;
        }

        .navbar-brand {
            color: #ffce54 !important;
            font-size: 1.5rem;
            font-weight: bold;
        }

        .navbar-dark .navbar-nav .nav-link {
            font-weight: bold;
            color: #000;
        }

        .navbar-toggler-icon {
            color: #ffce54;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#"><i class="fas fa-utensils"></i> Resep Makanan</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="{{ route('welcome') }}"><i class="fas fa-home"></i> Home</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('about') }}"><i class="fas fa-info-circle"></i> About</a>
                    </li>
                    {{-- <li class="nav-item"><a class="nav-link" href="{{ route('recipes') }}"><i class="fas fa-carrot"></i> Recipes</a>
                    </li> --}}
                </ul>
            </div>
        </div>
    </nav>

    <!-- Bootstrap JavaScript and Font Awesome Icons -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
