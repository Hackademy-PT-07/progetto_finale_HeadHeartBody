<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(["resources\css\app.css", "resources\css\app.css"])

    <title>{{$pageName}}</title>
</head>
<body class="d-flex flex-column min-vh-100">

    <header>
        <x-navbar />
    </header>

    <main>
        {{$slot}}
    </main>

    <footer class="mt-auto">
        <x-footer />
    </footer>

</body>
</html>