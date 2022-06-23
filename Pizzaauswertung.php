<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
</head>
  <body style="background-color:lightgrey; height: 100%">
	<center>	
	<img src="Logo.png" height="200px">
<?php
srand((double)microtime()*1000000);
$Zeit = rand(1,3);
$Preis = 0;


if ($_POST["Anrede"] == "1"){
	echo "<p> Vielen Dank für Ihre Bestellung Herr " . $_POST["Name"] . "!</p>";
}
else if ($_POST["Anrede"] == "2") {
	echo "<p>Vielen Dank für Ihre Bestellung Frau " . $_POST["Name"] . "!</p>";
}


if ($_POST["Art"] == "M"){
	echo "<p>Wir Liefern Ihre Pizza Margherita ";
	$Preis = 6.50;
}
else if ($_POST["Art"] == "P"){
	echo "<p>Wir Liefern Ihre Pizza Peperoni ";
	$Preis = 7.50;
}
else if ($_POST["Art"] == "S"){
	echo "<p>Wir Liefern Ihre Pizza Salami ";
	$Preis = 7.50;
}
else if ($_POST["Art"] == "T"){
	echo "<p>Wir Liefern Ihre Pizza Tonno ";
	$Preis = 8.50;
}
else if ($_POST["Art"] == "C"){
	echo "<p>Wir Liefern Ihre Pizza Con Tutto ";
	$Preis = 7.10;
}

if (isset($_POST["Thunfisch"])){
	echo "mit Thunfisch ";
	$Preis = $Preis + 0.60;
}

else if (isset($_POST["Salami"])){
	echo "mit extra Salami ";
	$Preis = $Preis + 1.10;
}

echo "<br>" ;

if ($Zeit == 1) {
	echo "in 20 Minuten an die folgende Adresse: ";
}
else if ($Zeit == 2) {
	echo "in 30 Minuten an die folgende Adresse: ";
}
if ($Zeit == 3) {
	echo "in 40 Minuten an die folgende Adresse: ";
}

echo "<br>";
echo $_POST["Adresse"];
echo "</p>";

echo "<p> Der Preis Ihrer Bestellung liegt bei " .  $Preis. "0€ </p>" ;

echo "<p> Ihr Pizza Fantastico-Team!</p>";

echo "</center>" ;
?>
</body>
</html>