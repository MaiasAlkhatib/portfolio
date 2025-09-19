<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Homepagina</title>
</head>
<body>
    <h1>Welkom op de homepage</h1>
    <nav>
        <ul>
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('movies') }}">Films</a></li>
            <li><a href="{{ route('series') }}">Series</a></li>
        </ul>
    </nav>
</body>
</html>
