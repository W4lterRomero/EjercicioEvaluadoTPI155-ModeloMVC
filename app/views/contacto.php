<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>
<body>
    <nav
        class="nav justify-content-center  ">
        <a class="nav-link active" href="HomeView" aria-current="page">Pagina principal</a>
        <a class="nav-link" href="inicio">Mi información</a>
        <a class="nav-link " href="lenguaje"> Lenguaje Favorito</a>
        
        <a class="nav-link " href="contacto"> Mi contacto BRR</a>
    </nav>

    <form method = "POST">
        <label for="">Correo</label>
        <input type="text" name = "correo">
        <label for="">Telefono</label>
        <input type="text"  name = "telefono" max="8">
        <label for="">Número de DUI</label>
        <input type="text"  name = "dui" max = "8">
        <input type="button" value="submit" name = "submit">
    </form>

    <?php

        $validadorCorreo = '/^[A-Za-z0-9._%+\-]+@[A-Za-z0-9._%+\-]+\[A-Z,a-z`]{2,}$/';

        

        if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["correo"]) && isset($_POST["telefono"]) && isset($_POST["dui"])){
            $correo = $_POST["correo"];
            $telefono = $_POST["telefono"];
            $dui = $_POST["dui"];

            if(preg_match($validadorCorreo,$correo)){
                echo "funciona";
            }
        }
    ?>
</body>
</html>