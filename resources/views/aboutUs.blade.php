<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" href="{{asset('css/aboutUs.css')}}">
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
                <a class="nav-link " href="{{route ('writers')}}">Writers</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-primary" href="{{route ('aboutUs')}}">About us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route ('popular')}}">Popular</a>
            </li>
            </ul>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Main -->
    <main class="d-flex justify-content-center align-items-center">
        <div class="content text-center">
            <strong class="title fs-3"> About EduFun </strong>
            <p class="mb-4">EduFun adalah perusahaan pendidikan berbasis teknologi asal Indonesia. EduFun menyediakan layanan akses pendidikan dalam format tulisan berbahasa Indonesia yang disajikan secara online melalui website.</p>
            <p>Hingga Juni 2024, EduFun memiliki lebih dari 10 ribu pengguna. EduFun hadir sebagai bentuk revolusi dari pendidikan di Indonesia dengan mengedepankan cara berpikir kritis, logis, rasional, dan sumber pengetahuan sains yang terintegrasi terhadap semua mahasiswa IT di Indonesia. EduFun bercita-cita mencetak generasi Indonesia yang memahami ilmu pengetahuan dan cinta belajar.</p>
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