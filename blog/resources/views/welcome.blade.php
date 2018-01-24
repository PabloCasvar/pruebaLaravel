<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Hello <?= $name; ?></h1>
    <p>Estas son tus actividades</p>
    
    <ul>
        @foreach($tasks as $task)
            <li> {{ $task }}</li>
        @endforeach
    </ul>

    <p>Estas son las actividades desde la base de datos:</p>

    <ul>
        @foreach($tasksdb as $task)
            <li>{{ $task -> body }}</li>
        @endforeach
    </ul>
</body>
</html>