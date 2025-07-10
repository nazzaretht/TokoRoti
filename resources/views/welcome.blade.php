<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Toko Roti - Welcome</title>
    @vite(['resources/js/app.js'])

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- AOS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" />
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

    <style>
    /* Background & body */
    body {
        background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
            url('/images/backweb1.jpg') no-repeat center center fixed;
        background-size: cover;
        color: white;
    }


    /* Navbar glassmorphism */
    .navbar {
        backdrop-filter: blur(10px);
        background-color: rgba(33, 37, 41, 0.75);
        transition: background-color 0.3s ease;
    }

    .navbar:hover {
        background-color: rgba(33, 37, 41, 0.9);
    }

    /* Navbar toggler icons */
    .navbar-toggler {
        border: none;
        outline: none;
        transition: transform 0.3s ease-in-out;
    }

    .navbar-toggler-icon {
        display: none;
    }

    .navbar-toggler .fa-bars {
        display: inline;
        font-size: 1.5rem;
        color: white;
    }

    .navbar-toggler.active .fa-bars {
        display: none;
    }

    .navbar-toggler .fa-times {
        display: none;
        font-size: 1.5rem;
        color: white;
    }

    .navbar-toggler.active .fa-times {
        display: inline;
    }

    /* Welcome hero section */
    .welcome-section {
        min-height: 90vh;
        display: flex;
        flex-direction: row;
        justify-content: center;
        align-items: center;
        gap: 3rem;
        padding: 1rem;
        flex-wrap: wrap;
        text-align: left;
    }

    /* Text content */
    .welcome-text {
        max-width: 550px;
    }

    .welcome-text h1 {
        font-size: 3.5rem;
        font-weight: 700;
        line-height: 1.2;
        margin-bottom: 1rem;
        text-shadow: 2px 2px 6px rgba(0, 0, 0, 0.3);
    }

    .welcome-text p {
        font-size: 1.3rem;
        margin-bottom: 2rem;
        text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.25);
    }

    /* Button style */
    .btn-shop {
        background: #ffc107;
        color: #222;
        font-weight: 600;
        padding: 0.85rem 2.5rem;
        border-radius: 50px;
        box-shadow: 0 8px 15px rgba(255, 193, 7, 0.3);
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 0.75rem;
        font-size: 1.2rem;
    }

    .btn-shop:hover {
        background: #e0a800;
        color: white;
        transform: scale(1.1);
        box-shadow: 0 12px 20px rgba(224, 168, 0, 0.5);
        text-decoration: none;
    }

    /* Hero image */
    .welcome-image {
        max-width: 450px;
        width: 100%;
        animation: floatUpDown 4s ease-in-out infinite;
    }

    @keyframes floatUpDown {

        0%,
        100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-15px);
        }
    }

    /* Responsive */
    @media (max-width: 768px) {
        .welcome-section {
            flex-direction: column;
            text-align: center;
        }

        .welcome-text h1 {
            font-size: 2.8rem;
        }

        .btn-shop {
            font-size: 1.1rem;
        }
    }

    @media (max-width: 480px) {
        .welcome-text h1 {
            font-size: 2.4rem;
        }

        .welcome-text p {
            font-size: 1.1rem;
        }
    }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand text-white fw-bold fs-4" href="#">Toko Roti</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
                <i class="fas fa-times"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#shop">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#about">About</a>
                    </li>
                    @if (Route::has('login'))
                    @auth
                    <li class="nav-item">
                        <a href="{{ url('/dashboard') }}" class="nav-link text-white fw-semibold">Dashboard</a>
                    </li>
                    @else
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="nav-link text-white fw-semibold">Login</a>
                    </li>
                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a href="{{ route('register') }}" class="nav-link text-white fw-semibold">Register</a>
                    </li>
                    @endif
                    @endauth
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    <section class="welcome-section" data-aos="fade-up">
        <div class="welcome-text" data-aos="fade-right" data-aos-delay="200">
            <h1>Welcome to <br />Toko Roti</h1>
            <p>Experience the best bakery treats and freshest breads with us. Shop your favorites now!</p>
            <a href="#shop" class="btn btn-shop">
                Start Shopping
                <i class="fas fa-shopping-cart"></i>
            </a>
        </div>
        <div class="welcome-image" data-aos="fade-left" data-aos-delay="400">
            <!--<img src="{{ asset('/images/malik_logo.svg')}}" alt="Bakery Illustration" class="img-fluid" />-->

        </div>
    </section>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- AOS JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script>
    AOS.init({
        once: true,
        duration: 900,
        easing: 'ease-in-out',
    });

    // Navbar toggler icon toggle
    document.querySelector(".navbar-toggler").addEventListener("click", function() {
        this.classList.toggle("active");
    });

    // Close navbar when clicking outside
    document.addEventListener("click", function(event) {
        let navbar = document.querySelector(".navbar-collapse");
        let toggler = document.querySelector(".navbar-toggler");
        if (!navbar.contains(event.target) && !toggler.contains(event.target)) {
            navbar.classList.remove("show");
            toggler.classList.remove("active");
        }
    });

    // Auto close navbar on nav-link click (mobile)
    document.querySelectorAll('.navbar-collapse .nav-link').forEach(link => {
        link.addEventListener('click', () => {
            const navbarCollapse = document.querySelector('.navbar-collapse');
            const toggler = document.querySelector('.navbar-toggler');
            if (navbarCollapse.classList.contains('show')) {
                toggler.click();
            }
        });
    });
    </script>
</body>

</html>