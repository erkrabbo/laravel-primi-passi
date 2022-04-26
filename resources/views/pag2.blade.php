<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Laravel primi passi</title>
    <link href="/css/app.css" rel="stylesheet">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="{{ route('pag2') }}">Second</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <main>
            <h2>{{ $msg }}</h2>
        </main>
    </main>
</body>
</html>
