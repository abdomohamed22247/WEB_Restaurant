<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Restaurant</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            background-color: #1a1a1a;
            color: #e0e0e0;
        }
        .card {
            background-color: #2d2d2d;
            border-color: #444;
            color: #e0e0e0;
        }
        .card-body {
            color: #e0e0e0;
        }
        .card-title {
            color: #e0e0e0;
        }
        .text-muted {
            color: #999 !important;
        }
        h2 {
            color: #e0e0e0;
        }
        .btn-outline-dark {
            border-color: #555;
            color: #e0e0e0;
        }
        .btn-outline-dark:hover {
            background-color: #3d3d3d;
            border-color: #555;
            color: #ffffff;
        }
        .btn-outline-secondary {
            border-color: #666;
            color: #e0e0e0;
        }
        .btn-outline-secondary:hover {
            background-color: #3d3d3d;
            border-color: #666;
            color: #ffffff;
        }
    </style>
</head>

<body>
    <div class="container-fluid home">
        <div class="text-center text my-5">
            <h1 class="text-light">Welcome to Our Restaurant</h1>
            <p class="text-light">Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, consequuntur!</p>
        </div>
    </div>
    <div class="container">
        <h2 class="text-center my-4 text-light">Our Menu</h2>
        <div class="text-center mb-4">
            @foreach($categories as $category)
            <a href="{{ route('category.filter', $category->id) }}" class="btn btn-outline-dark m-1">
                {{ $category->name }}
            </a>
            @endforeach
            <a href="{{ route('home') }}" class="btn btn-outline-secondary m-1">Show All</a>
        </div>
        <div class="row">
            @forelse($meals as $meal)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    @if($meal->image)
                    <img src="{{ asset('storage/' . $meal->image) }}" class="card-img-top" alt="{{ $meal->name }}">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $meal->name }}</h5>
                        <p class="card-text">{{ Str::limit($meal->description, 100) }}</p>
                        <p class="fw-bold">${{ number_format($meal->price, 2) }}</p>
                        <p class="text-muted">Category: {{ $meal->category->name }}</p>
                    </div>
                </div><!-- card -->
            </div> <!-- col -->
            @empty
            <p class="text-center text-light">No meals available for this category.</p>
            @endforelse
        </div><!-- row -->
    </div> <!-- container -->
    <footer class="footer-bg bg-dark text-light py-5">
        <div class="container text-center footer-panel py-4 rounded-3">
            <div class="mb-2">
                <div class="brand">Gourmet Haven</div>
                <div class="meta small">123 Culinary Street, Foodville<br>Open Tuesday - Sunday, 11am - 10pm</div>
            </div>


            <div class="my-3 links">
                <a href="">
                    <i class="fa-brands fa-facebook-f"></i>
                </a>
                <a href="">
                    <i class="fa-brands fa-linkedin-in"></i>
                </a>
                <a href="">
                    <i class="fa-brands fa-square-linkedin"></i>
                </a>
            </div>


            <div class="mt-3 small-muted">© 2023 Gourmet Haven. All rights reserved.</div>
        </div>
    </footer>
</body>

</html>