<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>GNDEC Training and Placement</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    <header>
        <div class="container">
            <h1>GNDEC Training and Placement Cell</h1>
            <nav>
                <ul>
                    <li><a href="{{ url('/home') }}">Home</a></li>
                    <li><a href="{{ url('/create-post') }}">Create Post</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="container">
        <section class="featured-posts">
            <h2>Featured Posts</h2>
            <div id="posts">
                <!-- Placeholder for React component -->
            </div>
        </section>
    </div>

    <footer>
        <div class="container">
            <p>&copy; {{ date('Y') }} GNDEC Training and Placement Cell. All rights reserved.</p>
        </div>
    </footer>

    <!-- React App -->
    <!-- <div id="root"></div> -->

    <!-- Scripts -->
    <!-- <script src="{{ mix('js/app.js') }}"></script> -->
</body>
</html>
