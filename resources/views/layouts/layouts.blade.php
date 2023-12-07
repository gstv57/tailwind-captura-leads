<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    @vite('resources/css/app.css')

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;400;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        section {
            min-height: 95vh;
            scroll-snap-align: start;
        }
    </style>

</head>

<body class="antialiaded">

    @include('layouts.partials.nav')

    @yield('content')

    @include('layouts.partials.footer')

    <script>
        function scrollToSection(sectionId) {
            const section = document.getElementById(sectionId);
            const yOffset = section.offsetTop;
            window.scrollTo({
                top: yOffset,
                behavior: 'smooth'
            });
        }
    </script>

</body>

</html>
