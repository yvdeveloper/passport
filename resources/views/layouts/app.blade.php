<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacts Manager</title>
    <!-- Include any CSS or meta tags needed for your application -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    <!-- Navigation bar or header -->
    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <!-- Add other navigation links as needed -->
        </ul>
    </nav>

    <!-- Main content area -->
    <div id="app">
        @yield('content')
    </div>

    <!-- Include Vue.js and compiled JavaScript -->
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
