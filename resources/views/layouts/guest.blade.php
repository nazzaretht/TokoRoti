<!-- filepath: resources/views/layouts/guest.blade.php -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', config('app.name', 'Bakery'))</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body {
            background: linear-gradient(135deg, #f8fafc 0%, #e0e7ff 50%, #fbc2eb 100%);
        }
        .auth-card {
            border-radius: 2rem;
            margin-left: auto;
            margin-right: auto;
            width: 100%;
            max-width: 350px;
            background: rgba(255,255,255,0.97);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.12);
            padding: 2rem 1.25rem 2rem 1.25rem;
        }
            .btn-auth {
            background: #6366f1;
            color: #fff;
            font-weight: 600;
            border-radius: 0.75rem;
            width: 100%;
            padding: 0.75rem 1rem;
            box-shadow: 0 2px 8px rgba(99,102,241,0.08);
            transition: background 0.2s, box-shadow 0.2s, transform 0.2s;
            border: none;
        }
        .btn-auth:hover, .btn-auth:focus {
            background: #4f46e5;
            color: #fff;
            box-shadow: 0 4px 16px rgba(99,102,241,0.15);
            transform: translateY(-2px) scale(1.02);
        }
        @media (min-width: 640px) {
            .auth-card {
                max-width: 400px;
                border-radius: 2.5rem;
                padding: 2.5rem 2rem 2.5rem 2rem;
            }
        }
        @media (max-width: 480px) {
            .auth-card {
                max-width: 95vw;
                padding-left: 1rem !important;
                padding-right: 1rem !important;
            }
        }
        @media (max-width: 350px) {
            .auth-card {
                max-width: 99vw;
                padding-left: 0.5rem !important;
                padding-right: 0.5rem !important;
            }
        }
        .auth-title {
            font-size: 2rem;
            font-weight: 700;
            color: #6366f1;
            margin-bottom: 0.5rem;
            text-align: center;
            letter-spacing: 0.02em;
        }
        .auth-desc {
            color: #64748b;
            font-size: 1rem;
            text-align: center;
            margin-bottom: 1.5rem;
        }
        .auth-card form > *:not(:last-child) {
            margin-bottom: 1.1rem;
        }
    </style>
</head>
<body class="font-sans text-gray-900 antialiased min-h-screen">
    <div class="min-h-screen flex flex-col justify-center items-center pt-6 sm:pt-0">
        <div data-aos="zoom-in" data-aos-duration="700">
            <a href="/">
                <!-- <img src="{{ asset('images/logo-bakery.png') }}" alt="Bakery" class="w-20 h-20 mx-auto rounded-full shadow-lg" /> -->
            </a>
        </div>
        <div
            class="auth-card mt-6"
            data-aos="fade-up" data-aos-duration="800"
        >
            @hasSection('title')
                <div class="auth-title">@yield('title')</div>
            @endif
            @hasSection('desc')
                <div class="auth-desc">@yield('desc')</div>
            @endif
            @yield('content')
        </div>
    </div>
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>