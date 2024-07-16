<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="images/trophy.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    @yield('title')
</head>

<body class="d-flex flex-column justify-content-between align-items-center" style="height: 100vh">
    <div class="w-100 d-flex flex-column">
        <header class="w-100 d-flex justify-content-center align-items-center border-top border-bottom bg-dark-subtle"
            style="height: 10vh">
            <h2>Welcome to this incredibly awesome <span class="text-success">OMEGA</span> page of doom</h2>
        </header>
        <div class="d-flex align-items-center flex-column pt-2">
            <nav> @yield ('navbar') </nav>
            <article> @yield ('content') </article>
        </div>
    </div>
    <footer class="w-100 d-flex justify-content-center border-top border-bottom bg-dark-subtle">
        <em>© Team6400 All right reserved</em>
    </footer>
</body>
