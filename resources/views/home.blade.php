<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello Laravel</title>
</head>
<body>
    <div>
        <h1>Hello Word</h1>
    </div>
    <div>
        <h3>Nome Manga: {{$name}}</h3>
        <span>Creatore: {{$creator}}</span>
        <br>
        <span>Descrizione: {{$description}}</span>
        <h5>Personaggi principali:</h5>
        <ul>
            @foreach ($personages as $character)
                <li>{{$character}}</li>
            @endforeach
        </ul>
    </div>
</body>
</html>