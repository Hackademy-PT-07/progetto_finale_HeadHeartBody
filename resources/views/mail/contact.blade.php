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
        Nome: {{$user->name}} <br>
        Email: {{$user->email}} <br>
        Message: "Salve, posso essere anche io un revisore? Grazie in anticipo." <br>
        Clicca per rendere {{$user->name}} revisore: <br>
        <a href="{{route('revisor.acceptRequest', compact('user'))}}">Rendi Revisore</a>
    </div>
</body>
</html>