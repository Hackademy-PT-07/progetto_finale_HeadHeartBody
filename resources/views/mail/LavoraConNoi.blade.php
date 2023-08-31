<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        Hai ricevuto una richiesta di contatto:
        <br>
        Nome: {{$name}} <br>
        Email: {{$email}} <br>
        Message: "Salve, posso essere anche io un revisore? Grazie in anticipo." <br>
        @if(auth()->user()->role == 'user')
        Clicca per rendere {{$name}} revisore: <br>
        <a href="{{route('revisor.acceptRequest', compact('user'))}}">Rendi Revisore</a>
        @endif
    </div>
</body>
</html>