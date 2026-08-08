<?php

$Identificacion = $_POST["Identificacion"];
$NomApellidos = $_POST["NomApellidos"];
$Cargo = $_POST["Cargo"];
$Salario = $_POST["Salario"];

echo "<h2>Información del Empleado</h2>";

echo "Identificación: " . $Identificacion . "<br>";
echo "Nombres y Apellidos: " . $NomApellidos . "<br>";
echo "Cargo: " . $Cargo . "<br>";
echo "Salario: $" . $Salario;

?>
