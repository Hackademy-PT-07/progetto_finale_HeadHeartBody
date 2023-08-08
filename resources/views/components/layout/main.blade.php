<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(["resources\css\app.css", "resources\js\app.js"])

    <style>
    @import url('https://fonts.googleapis.com/css2?family=Barriecito&family=Mulish:ital,wght@1,300&family=Roboto:ital,wght@0,700;1,700&family=Satisfy&family=Shantell+Sans:wght@300;400&display=swap');
    </style>

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