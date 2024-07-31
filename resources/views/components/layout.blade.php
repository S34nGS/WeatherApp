<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Weather</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body>
    <header></header>
    
    <main>{{$slot}}</main>

    <footer></footer>
</body>
</html>