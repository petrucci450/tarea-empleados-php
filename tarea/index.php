<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="#" method="get" action="<?php $_SERVER['PHP_SELF']; ?>'">
<label>Nombre:</label><br>
    <input type="text" name="Nombre" id="nombreid"></input><br>
    <label>Apellido: </label><br>
    <input type="text" name="apellido" id="apellidoid"></input><br>
    <br>
    <label>Edad:</label><br>
    <input type="text" name="Edad" id="edadid"></input><br>
    <label>Sexo: </label><br>
    <input type="text" name="sexo" id="sexoid"></input><br>
    <br>
    <label>Estado civil:</label><br>
    <input type="text" name="civil" id="civilid"></input><br>
    <label>Sueldo: </label><br>
    <input type="text" name="Sueldo" id="Sueldoid"></input><br>
    <br>
    <input type="submit" name="btn" value="imprimir">
   
</form>
</body>
</html>

<?php
echo $Nombre = $_GET["Nombre"];
echo $apellido = $_GET["apellido"];
echo $Edad = $_GET["Edad"];
echo $civil = $_GET["civil"];
echo $Sueldo= $_GET["Sueldo"];
echo $Sexo= $_GET["sexo"];

if(isset($_GET))
{
echo $Nombre = $_GET["Nombre"];
echo $apellido = $_GET["apellido"];
echo $Sexo = $_GET["sexo"];
echo $civil = $_GET["civil"];
echo $Sueldo = $_GET["Sueldo"];
print "<br><br>";
echo "<h2>Informacion recibida</h2>";
echo "El nombre fue recibido:".$Nombre. "<br>";
echo "Su apellido es: ".$apellido."<br>";
echo "Su Edad es: ".$Edad."<br>";
echo "El Sexo fue recibido:".$Sexo. "<br>";
echo "Su estado civil es: ".$civil."<br>";
echo "Su sueldo es: ".$Sueldo. "<br>";
}

if ($Edad>= 18)
{
echo "$Nombre Es mayor de edad";
}else{
    echo "$Nombre es menor de edad";
}








?>