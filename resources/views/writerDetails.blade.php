<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Writer Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/writer.css')}}">
    <link rel="stylesheet" href="{{ asset('css/homePage.css') }}">
    <link rel="stylesheet" href="{{asset('css/writerDetails.css')}}">
    
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
    <main>
        <div class="container">
            <div class="writer-content mt-4 d-flex align-items-center">
                @if ($articles->isNotEmpty())
                    <img src="{{ $articles->first()->writer->writer_image }}" alt="" class="writer-img">
                    <div class="test d-flex justify-content-center"></div>
                    {{ $articles->first()->writer->writer_name }}
                    <br>
                    {{ $articles->first()->writer->writer_role }}
                @else
                    Unknown
                @endif
            </div>
            
            <div class="content">
            @if ($articles->isNotEmpty())
                @foreach ($articles as $article)
                    <div class="article-card m-5">
                        <h2>{{ $article->title }}</h2>
                        <p>By: {{ $article->writer->writer_name }} || {{ $article->release_date }}</p>
                        <a href="{{ route('details.show', $article->article_id) }}"><button class="btn btn-dark align-self-end">Read more</button></a>
                        <p>{{ $article->description }}</p>
                    </div>
                @endforeach
            @else   
                <p>No articles available.</p>
            @endif
            </div>
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