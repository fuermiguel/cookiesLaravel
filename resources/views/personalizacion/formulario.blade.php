<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Personalización</title>

    <style>

        body{
            font-size: {{$fuente}}
        }
    </style>
</head>
<body>
    <p>fuente: {{$fuente}}</p>
    <form  method="post" action="{{action('PersonalizacionController@guardarpersonalizacion')}}">
    @csrf
        Fuente:
        <select name="fuente">
            <option value="24pt">Grande</option>
            <option value="16pt">Mediana</option>
            <option value="12pt">Pequeña</option>
        </select>
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>