<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Laravel primi passi</title>
    <link href="/css/app.css" rel="stylesheet">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/second">Second</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h2>{{ $msg }}</h2>
    </main>
</body>
</html>
