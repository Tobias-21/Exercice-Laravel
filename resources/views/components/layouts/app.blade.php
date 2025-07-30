<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Page')</title>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>  
    <header>
        <nav>
            <ul>
                <a href="/">Home</a>>
                <a href="/about">About</a>>
                <a href="/contact">Contact</a>>
            </ul>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>
</body>
</html>
