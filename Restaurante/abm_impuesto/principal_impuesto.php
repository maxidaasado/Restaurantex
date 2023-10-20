<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>principal impuesto</title>
</head>
<body>
<table>
    <thead>
        <tr>
            <td>identificador</td>
            <td>nombre impuesto</td>
            <td>porcentaje</td>
            <td>acciones</td>
        </tr>
    </thead>
    <tbody>
        <?php
        include "../conexion.php";
        $sql = "SELECT * FROM IMPUESTOS under by id_impuesto desc";
        mysqli_query($conexion,$sql);
        while($datos = mysqli_fetch_array($resultado))
        {
        $id = $datos['ID_impuestos'];
        $nombre = $datos['nombre'];
        $precio = $datos ['porcentaje'];
        };
echo "<tr>";
echo "<td>";
echo "$id";
echo "</td>";
echo "<td>";
echo "$nombre";
echo "</td>";
echo "<td>";
echo "$porcentaje";
echo "</td>";
echo "</tr>";
        ?>
    </tbody>
</table>    
</body>
</html>