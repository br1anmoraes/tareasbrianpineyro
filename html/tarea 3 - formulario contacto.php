<?php
$nombre = '';
$apellidos = '';
$fecha_nacimiento = '';
$ci = '';
$calle_numero = '';
$codigo_postal = '';
$ciudad = '';
$departamento = '';
$telefono = '';
$selector_opciones = '';
$comentarios = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $apellidos = $_POST["apellidos"];
    $fecha_nacimiento = $_POST["fecha_nacimiento"];
    $ci = $_POST["ci"];
    $calle_numero = $_POST["calle_numero"];
    $codigo_postal = $_POST["codigo_postal"];
    $ciudad = $_POST["ciudad"];
    $departamento = $_POST["departamento"];
    $telefono = $_POST["telefono"];
    $selector_opciones = $_POST["selector_opciones"];
    $comentarios = $_POST["comentarios"];
}
if (
    isset($nombre, $apellidos, $fecha_nacimiento,
    $ci, $calle_numero, $codigo_postal, $ciudad, $departamento, $telefono, $selector_opciones, $comentarios)
) {
    echo '-';
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario - Brian Piñeyro 3ro BR</title>
    <style>
        * {
            background-color: #F0F8FF;
        }

        table {
            box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            text-align: center;
            border: 3px solid black;
        }

        tr,
        td {
            border: 1px solid black;
        }

        section {
            text-align: center;
        }

        [type="submit"] {
            background-color: #008000;
            color: #fff;
            border: none;
            padding: 10px 20px;
            margin-top: 10px;
            box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        [type="submit"]:hover {
            background-color: #005000;
        }

        [type="reset"] {
            background-color: #B22222;
            color: #fff;
            border: none;
            padding: 10px 20px;
            margin-top: 10px;
            box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        section {
            border: 3px solid black;
        }
    </style>

    <form action="formulario.php" method="POST">
        <table align="center">
            <tr>
                <td>Nombre:</td>
                <td><input type="text" name="nombre"></td>
                <td colspan="3">Fecha de nacimiento: <input type="date" name="fecha_nacimiento"> C.I: <input type="text"
                        name="ci" maxlength="8"></td>
            </tr>
            <tr>
                <td colspan>Apellidos:</td>
                <td colspan="5"><input type="text" name="apellidos" style="width: 99%;"></td>
            </tr>
            <tr>
                <td>Calle y número:</td>
                <td colspan="1"><input type="text" name="calle_numero" style=""></td>
            </tr>
            <tr>
                <td>Código postal:</td>
                <td><input type="text" name="codigo_postal"></td>
                <td>Ciudad: <input type="text" name="ciudad"> Departamento: <input type="text" name="departamento"></td>
            </tr>
            <tr>
                <td>Teléfono:</td>
                <td><input type="tel" name="telefono" maxlength="9"></td>

            </tr>

            <tr>
                <td>Opción:</td>
                <td colspan="2">
                    <select name="selector_opciones">
                        <option value="opcion1" selected>Ninguna</option>
                        <option value="opcion2">Opción 1</option>
                        <option value="opcion3">Opción 2</option>
                        <option value="opcion4">Opción 3</option>
                    </select>
                    Escoja una opción
                </td>
            </tr>

            <tr>
                <td>Comentarios <br> personales: </td>
                <td colspan="5"><textarea name="comentarios" id="comentarios_personales" cols="30" rows="6"
                        style=""></textarea></td>
            </tr>
            <tr>
                <td>
                    <h3>Enviar</h5>
                </td>
                <td colspan="2">
                    <input type="submit" value="Enviar">
                    <input type="reset" value="Eliminar">
                </td>
            </tr>

        </table>
        <br>
        <section>
            <?php
            echo "<h1>Datos:</h1>";
            echo "Nombres: " . $nombre . "<br>";
            echo "Apellidos: " . $apellidos . "<br>";
            echo "Fecha de nacimiento: " . $fecha_nacimiento . "<br>";
            echo "Cédula de identidad: " . $ci . "<br>";
            echo "Número de teléfono: " . $telefono . "<br>";
            echo "Opción elegida: " . $selector_opciones . "<br>";
            echo "Dirección:" . "<br>";
            echo "Calle y número: " . $calle_numero . "<br>";
            echo "Ciudad: " . $ciudad . "<br>";
            echo "Departamento: " . $departamento . "<br>";
            echo "Código postal: " . $codigo_postal . "<br>";
            echo "Comentarios personales: " . $comentarios . "<br>";
            echo "<br>";
            ?>
        </section>

    </form>


</head>