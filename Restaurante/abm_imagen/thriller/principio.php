<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta name = "viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        </head>
        <body>
            <p> texto de prueba <p>
                <?php echo 'hola';?>
</body>
</html>
<body>
    <?php
    $mensaje= $_REQUEST ['nombre'];
    $pass= $_REQUEST['password'];
    echo '<div>';
    echo '<h1> El nombre es -'.$mensajes. '</h1>';
    echo '<h1> Mi contraseña es: -'.$pass. '</h1>';
    echo '</div>';
    $suma= 2 +4;
    echo "la suma es: ".$suma;
    $resta= 2-4;
    echo "la resta es: ".$resta;
    $multiplicacion= 2*4;
    echo "la multiplicacion es: ".$multiplicacion;
    $division= 2/4;
    echo "la division es: ".$division;
    ?>
    </body>
</html>