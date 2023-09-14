<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite(["resources\css\app.css", "resources\js\app.js"])

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Barriecito&family=Mulish:ital,wght@1,300&family=Roboto:ital,wght@0,700;1,700&family=Satisfy&family=Shantell+Sans:wght@300;400&display=swap');
    </style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" 
integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" 
crossorigin="anonymous" referrerpolicy="no-referrer" />

    @livewireStyles

    <title>{{$pageName}}</title>
</head>

<body class="d-flex flex-column min-vh-100">
    
    <header>
        <x-navbar />
    </header>
    

    <div class="bgColor">
        <main>    
            {{$slot}}
        </main>  
    </div>  

    <x-footer />

        
    @livewireScripts

</body>

</html>