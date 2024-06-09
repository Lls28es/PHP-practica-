<!-- http://localhost/PHP/ -->
<h1>Codigo HTML</h1>
<?php
# como mostrar en pantalla
echo "<h1>Codigo PHP</h1>";
print("<h2>bienvenido!</h2>");

# usar variables en string
$nombre = "PHP";
$texto = "repaso de $nombre";
$resp = "<h1>" . $texto;
echo $resp;

# sumar a anterior valor de la variable y guardar nuevamente
$resp .= " empecemos!</h1>";
echo $resp;

# reciviendo daots por query
// http://localhost/PHP/?nombre=lucia
echo $_GET["nombre"];

# condiciones
if (!$nombre == "PHP") {
    echo "<h2>la variable nombre no existe</h2>";
} else {
    echo "<h2>la variable nombre existe</h2>";
}

# comprobacion de existencia
$altura = "";
if (isset($_GET["altura"])) {
    $altura = "<h2>tu altura es " . $_GET["altura"] . " cm</h2>"; // http://localhost/PHP/?nombre=lucia&altura=180
} else {
    $altura = "<h2>no se ha pasado el dato altura</h2>";
}
echo $altura;

# estilos
echo '<h3 style="background:grey; color:purple;"> para estilizar en la misma etiqueta las comillas de la etiqueta son simples y las del estilo son dobles y lleva ; antes de cerrar las comillas dobles: style="background:grey; color:purple;" </h3>';

# funcones
echo comprobarNombre($_GET["nombre"]);
function comprobarNombre($argNombre)
{
    if (isset($argNombre)) {
        return "<h4>se ha colocado el nombre</h4>";
    } else {
        return "<h4>olvidaste colocar el nombre</h4>";
    }
}

# arrays
$personas = ["victor", "Fran"];
echo $personas[0];
?>

<h1>Listado</h1>
<ul>
    <?php
    # bucles
    foreach ($personas as $key => $nombre) {
        echo "<li><p> $nombre </p></li>";
    }
    ?>
</ul>