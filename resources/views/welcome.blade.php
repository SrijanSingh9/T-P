<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Training & Placement</title>

   <!-- Fonts -->
   <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

<!-- Bootstrap CSS -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<!-- Custom Styles -->
<style>
    body {
        font-family: 'Nunito', sans-serif;
        background-color: #D3D3D3;
        color: #333;
    }

    .navbar {
        margin-bottom: 20px;
    }

    .navbar-brand {
        font-size: 1.8rem;
    }

    .hero {
        background: #343a40;
        color: #fff;
        padding: 60px 0;
        text-align: center;
    }

    .hero h1 {
        font-size: 3rem;
        margin-bottom: 20px;
    }

    .hero p {
        font-size: 1.25rem;
    }

    .section-title {
        margin-bottom: 40px;
        font-size: 2rem;
        text-align: center;
        color: #343a40;
    }

    .footer {
        background: #343a40;
        color: #fff;
        padding: 20px 0;
        text-align: center;
    }

    .footer a {
        color: #ffc107;
        text-decoration: none;
    }

    .footer a:hover {
        text-decoration: underline;
    }
</style>
</head>
<body class="bg-gray-100">

    <!-- Navbar -->
    <nav class="bg-gray-800 p-4">
        <div class="container mx-auto flex justify-between items-center">
            <a class="text-white text-2xl font-bold" href="#">Training & Placement</a>
            <div class="flex space-x-4">
                <a class="text-white hover:text-gray-300" href="#">Home</a>
                <a class="text-white hover:text-gray-300" href="#">Services</a>
                <a class="text-white hover:text-gray-300" href="#">About</a>
                <a class="text-white hover:text-gray-300" href="#">Contact</a>

                @if (Route::has('login'))
                    @auth
                        <a class="text-white hover:text-gray-300" href="{{ url('/home') }}">Home</a>
                    @else
                        <a class="text-white hover:text-gray-300" href="{{ route('login') }}">Log in</a>

                        @if (Route::has('register'))
                            <a class="text-white hover:text-gray-300" href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                @endif
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <header class="hero text-center py-16">
        <h1 class="text-4xl font-extrabold mb-4">Welcome to Training & Placement</h1>
        <p class="text-lg">Empowering your career through specialized training and guidance.</p>
    </header>

    <!-- Services Section -->
    <section class="container mx-auto py-16">
        <h2 class="text-3xl font-semibold text-center mb-12">Our Services</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h3 class="text-xl font-semibold mb-2">Skill Development Programs</h3>
                <p>Enhance your skills with our tailored programs designed to meet industry standards.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h3 class="text-xl font-semibold mb-2">Mock Interviews</h3>
                <p>Prepare for real interviews with our comprehensive mock interview sessions.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h3 class="text-xl font-semibold mb-2">Resume Writing Workshops</h3>
                <p>Craft a standout resume with our expert guidance and workshops.</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h3 class="text-xl font-semibold mb-2">Career Counseling</h3>
                <p>Get personalized career advice and planning from experienced counselors.</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer py-6">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 Training and Placement Cell | <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a></p>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/forms@0.4.0/dist/tailwind-forms.min.js"></script>
</body>
</html>
