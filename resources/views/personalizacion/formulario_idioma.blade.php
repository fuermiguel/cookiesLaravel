<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Personalización idioma</title>

</head>


<body>
    <p>Idioma: {{$idioma}}</p>
    <form  method="post" action="{{action('IdiomaController@guardarpersonalizacion')}}">
    @csrf
        Fuente:
        <select name="idioma">
            <option value="1">Español</option>
            <option value="2">Chino</option>
            <option value="3">Ruso</option>
        </select>
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>