<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Writer</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/homePage.css') }}">
    <link rel="stylesheet" href="{{ asset('css/writer.css') }}">
    
    
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light shadow-lg">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a href=""><img src="{{ asset('assets/EF.png') }}" alt="logo-img"></a>
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0 ms-auto gap-5 me-3">
            <li class="nav-item">
                <a class="nav-link" href="{{route ('homePage')}}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route ('category')}}">Category</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-primary" href="{{route ('writers')}}">Writers</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route ('aboutUs')}}">About us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route ('popular')}}">Popular</a>
            </li>
            </ul>
        </div>
    </nav>
    <!-- Navbar End -->


    <!-- Main -->
    <main class="d-flex justify-content-center flex-wrap h-100vh">
        @foreach ($writers as $writer)
            <div class="writer d-flex flex-column align-items-center justify-content-center m-5">
                <a href="{{ route('writers.articles', $writer->writer_id) }}">
                    <img src="{{ $writer->writer_image }}" alt="writer-img" class="writer-img">
                </a>
                <strong>{{ $writer->writer_name }}</strong>
                <p>{{ $writer->writer_role }}</p>
            </div>
        @endforeach
    </main>



    <!-- Main End -->


    <!-- Footer -->
    <footer class="footer bg-dark">
        <div class="text-center text-light">
            &copy; EduFun 2024 | Web Programming | Adior Gandawidjaja | 2602061725
        </div>
    </footer>
    <!-- Footer End -->
</body>
</html>