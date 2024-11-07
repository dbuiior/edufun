<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> -->
    <link rel="stylesheet" href="{{ asset('css/homePage.css') }}">

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
            <li class="nav-item active">
                <a class="nav-link text-primary" href="{{route ('homePage')}}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route ('category')}}">Category</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route ('writers')}}">Writers</a>
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
    <main style="height: 100vh;" class="d-flex justify-content-center align-items-center">
        <div class="container">
            <img src="{{ $articles->image }}" alt="">
            <h2>{{ $articles->title }}</h2>
            <p><strong>By: </strong>{{ $articles->writer->writer_name }}</p>
            <p class="fs-8">{{ $articles->description }}</p>
        </div>
    </main>

     <!-- Main End -->
   
        
    
     <!-- Footer -->
     <footer class="footer pt-3 bg-dark">
        <div class="text-center text-light">
            &copy; EduFun 2024 | Web Programming | Adior Gandawidjaja | 2602061725
        </div>
    </footer>
     <!-- Footer End -->
</body>
</html>