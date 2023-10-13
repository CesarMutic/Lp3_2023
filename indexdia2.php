<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercico 1</title>
</head>
<body>
    <?php
        date_default_timezone_set('America/Asuncion');
        $dia_ingles = date('D');
        $str = "El dia es:";
        switch($dia_ingles){
            case "Mon": echo "$str Lunes";break;
            case "Tue": echo "$str Martes";break;
            case "Wed": echo "$str Miercoles";break;
            case "Thu": echo "$str Jueves";break;
            case "Fry": echo "$str Viernes";break;
            case "Sat": echo "$str Sabado";break;
            case "Sun": echo "$str Domingo";break;

        }
    ?>
</body>
</html>