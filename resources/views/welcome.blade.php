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
        background: #000942;
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

    .hidden { display: none; }
    .show { display: block; }
</style>
</head>
<body class="bg-gray-100">

   <!-- Navbar -->
<nav style="background-color: #000942; padding: 1rem;">
    <div style="max-width: 1280px; margin: 0 auto; display: flex; justify-content: space-between; align-items: center;">
        <div style="flex: 1; display: flex; align-items: center;">
            <h1 style="color: white; font-size: 1.5rem; font-weight: bold; margin: 0;">Training and Placement Cell</h1>
        </div>
        <div style="flex: 1; display: flex; justify-content: flex-end;">
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/home') }}" style="color: white; text-decoration: none; margin-right: 1rem;">Home</a>
                @else
                    <a href="{{ route('login') }}" style="color: white; text-decoration: none; margin-right: 1rem;">Log in</a>
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" style="color: white; text-decoration: none; margin-right: 1rem;">Register</a>
                    @endif
                @endauth
            @endif
        </div>
    </div>
</nav>


   <!-- Hero Section -->
   <header style="text-align: center; padding: 2rem; background-color: #f8f9fa;">
        <h1 style="font-size: 2.5rem; font-weight: bold; margin-bottom: 1rem;">Welcome to Training & Placement</h1>
        <p style="font-size: 1.125rem;">Empowering your career through specialized training and guidance.</p>
    </header>

    <!-- Navbar -->
    <nav style="background-color: #007bff; padding: 1rem;">
        <ul style="list-style: none; padding: 0; margin: 0; display: flex; justify-content: center;">
            <li style="margin-right: 1rem;"><a href="#" onclick="filterContent('engineering')" style="color: white; text-decoration: none;">Engineering Field</a></li>
            <li style="margin-right: 1rem;"><a href="#" onclick="filterContent('internal-recruitments')" style="color: white; text-decoration: none;">T&P Internal Recruitments</a></li>
            <li><a href="#" onclick="filterContent('all')" style="color: white; text-decoration: none;">Anyone Can Apply</a></li>
        </ul>
    </nav>

    <!-- Opportunities Section -->
    <section style="padding: 2rem; background-color: #e9ecef;">
        <h2 style="font-size: 2rem; font-weight: 600; text-align: center; margin-bottom: 1.5rem;">Recruitment & Training Opportunities</h2>
        <div id="content" style="max-width: 1200px; margin: 0 auto; display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 1.5rem;">
            <!-- Engineering Field Posts -->
            <div class="content-item engineering hidden">
                <h3 style="font-size: 1.25rem; font-weight: 600; margin-bottom: 0.5rem;">Company XYZ - Electrical</h3>
                <p>Looking for electrical engineers with experience in power systems.</p>
                <a href="#" style="color: #007bff; text-decoration: none;">Learn More</a>
            </div>
            <div class="content-item engineering hidden">
                <h3 style="font-size: 1.25rem; font-weight: 600; margin-bottom: 0.5rem;">Company ABC - Computer Science</h3>
                <p>Join our team as a software developer with a focus on AI.</p>
                <a href="#" style="color: #007bff; text-decoration: none;">Learn More</a>
            </div>
            <div class="content-item engineering hidden">
                <h3 style="font-size: 1.25rem; font-weight: 600; margin-bottom: 0.5rem;">Company DEF - Mechanical</h3>
                <p>Seeking mechanical engineers for a manufacturing role.</p>
                <a href="#" style="color: #007bff; text-decoration: none;">Learn More</a>
            </div>
            <div class="content-item internal-recruitments hidden">
                <h3 style="font-size: 1.25rem; font-weight: 600; margin-bottom: 0.5rem;">Media Team - Intern</h3>
                <p>Join our media team for an internship with exciting projects.</p>
                <a href="#" style="color: #007bff; text-decoration: none;">Learn More</a>
            </div>
            <div class="content-item internal-recruitments hidden">
                <h3 style="font-size: 1.25rem; font-weight: 600; margin-bottom: 0.5rem;">Technical Team - Senior Developer</h3>
                <p>We're looking for a senior developer to lead technical projects.</p>
                <a href="#" style="color: #007bff; text-decoration: none;">Learn More</a>
            </div>
            <div class="content-item all">
                <h3 style="font-size: 1.25rem; font-weight: 600; margin-bottom: 0.5rem;">Career Boosters - Resume Workshop</h3>
                <p>Free resume workshops available every weekend.</p>
                <a href="#" style="color: #007bff; text-decoration: none;">Learn More</a>
            </div>
            <!-- Add more content items here as needed -->
        </div>
    </section>

    <!-- Services Section -->
    <section style="padding: 2rem;">
        <h2 style="font-size: 2rem; font-weight: 600; text-align: center; margin-bottom: 1.5rem;">Our Services</h2>
        <div style="max-width: 1200px; margin: 0 auto; display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 1.5rem;">
            <div style="background-color: white; padding: 1.5rem; border-radius: 0.5rem; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                <h3 style="font-size: 1.25rem; font-weight: 600; margin-bottom: 0.5rem;">Skill Development Programs</h3>
                <p>Enhance your skills with our tailored programs designed to meet industry standards.</p>
            </div>
            <div style="background-color: white; padding: 1.5rem; border-radius: 0.5rem; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                <h3 style="font-size: 1.25rem; font-weight: 600; margin-bottom: 0.5rem;">Mock Interviews</h3>
                <p>Prepare for real interviews with our comprehensive mock interview sessions.</p>
            </div>
            <div style="background-color: white; padding: 1.5rem; border-radius: 0.5rem; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                <h3 style="font-size: 1.25rem; font-weight: 600; margin-bottom: 0.5rem;">Resume Writing Workshops</h3>
                <p>Craft a standout resume with our expert guidance and workshops.</p>
            </div>
            <div style="background-color: white; padding: 1.5rem; border-radius: 0.5rem; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
                <h3 style="font-size: 1.25rem; font-weight: 600; margin-bottom: 0.5rem;">Career Counseling</h3>
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
    <script>
        function filterContent(category) {
            var allItems = document.querySelectorAll('.content-item');
            allItems.forEach(function(item) {
                item.classList.add('hidden');
                if (category === 'all') {
                    item.classList.add('show');
                } else if (item.classList.contains(category)) {
                    item.classList.remove('hidden');
                    item.classList.add('show');
                }
            });
        }
    </script>
</body>
</html>
