<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light shadow-lg">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a href=""><img src="{{ asset('assets/EF.png') }}" alt="logo-img"></a>
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0 ms-auto gap-5 me-3">
                <li class="nav-item">
                    <a class="nav-link" href="{{route ('homePage')}}">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-primary" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Category
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('course.category', ['category_id' => 1]) }}">Data Science</a></li>
                        <li><a class="dropdown-item" href="{{ route('course.category', ['category_id' => 2]) }}">Network Security</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route ('writers')}}">Writers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route ('aboutUs')}}">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Popular</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Main -->
    <main>
        <div class="container mt-4">
        <h1>{{ $category->name }} Courses</h1>

        @foreach($courses as $course)
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">{{ $course->name }}</h5>
                    <p class="card-text">{{ $course->description }}</p>
                    <a href="{{ route('courses.show', $course->id) }}" class="btn btn-primary">View Details</a>
                </div>
            </div>
        @endforeach
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
