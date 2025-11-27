<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operacion Bikini</title>
    <link rel="stylesheet" href="/styles.css?<?php echo time(); ?>">
</head>

<body>
    <div class="card-new">
        <div class="card-info-new">
            <h1 class="h1_m8">Operación Bikini</h1>

            <!-- Lista con los detalles de la operación -->
            <ul class="ul_m8">
                <li class="li_m8">Operación a ejecutar: <?php echo $_GET["op"]; ?></li>
                <li class="li_m8">Num1: <?php echo $_GET["op1"]; ?></li>
                <li class="li_m8">Num2: <?php echo $_GET["op2"]; ?></li>
            </ul>

            <p class="p_m8">Resultado: 
                <?php
                    if(isset($_GET["op"], $_GET["op1"], $_GET["op2"])) {
                        switch($_GET["op"]){
                            case "sumar":
                            case "Sumar":
                                echo ($_GET["op1"] + $_GET["op2"]);
                                break;
                            case "restar":
                            case "Restar":
                                echo ($_GET["op1"] - $_GET["op2"]);
                                break;
                            case "multiplicar":
                            case "Multiplicar":
                                echo ($_GET["op1"] * $_GET["op2"]);
                                break;
                            case "dividir":
                            case "Dividir":
                                if ($_GET["op2"] != 0) {
                                    echo ($_GET["op1"] / $_GET["op2"]);
                                } else {
                                    echo "<span class='error_m8'>No se puede dividir entre cero</span>";
                                }
                                break;
                            default:
                                echo "<span class='error_m8'>Operación no contemplada</span>";
                                break;
                        }
                    } else {
                        echo "<span class='error_m8'>Faltan parámetros en la URL</span>";
                    }
                ?>
            </p>
            <a href="/index.php" class="button">Volver al Portafolio</a>
        </div>
    </div>
</body>
</html>
