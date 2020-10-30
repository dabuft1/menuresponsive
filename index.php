<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo menú responsive</title>
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
    <label for="show-menu" class="show-menu">Show-menu</label>
    <input type="checkbox" id="show-menu" role="button">
    <ul id="menu">
        <li><a href="#">Home</a></li>
        <li><a href="#">About &#65516;</a>
            <ul class="hidden">
                <li><a href="#">Who We Are</a></li>
                <li><a href="#">What We Do</a></li>
            </ul>
        </li>    
        <li><a href="#">Portafolio &#65516;</a>
            <ul class="hidden">
                <li><a href="#">Photography</a></li>
                <li><a href="#">Web &amp; User Interaface Desing</a></li>
                <li><a href="#">Ilustration</a></li>
            
            </ul>
        </li>
        <li><a href="#">News</a></li>
        <li><a href="#">Contact</a></li>
    </ul>
</body>
</html>