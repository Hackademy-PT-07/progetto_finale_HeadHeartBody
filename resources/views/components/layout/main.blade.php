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
    <div style="background-image: url('https://thumbs.dreamstime.com/z/cart-background-made-carts-vector-illustration-36868023.jpg?w=768'); background-repeat: no-repeat; background-size: cover;" class="bg-image vh-100">
            {{ $slot }}
        </div>
    </main>

    <footer class="mt-auto">
        <x-footer />
    </footer>

</body>
</html>