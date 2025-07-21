<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sphere Calculator</title>
</head>
<body>
    <form action="radius.php" method="post">
        <label>radius in cm:<label>
        <input type="text" name="radius">
        <input type="submit" value="Calculate">
    </form><br>
</body>
</html>

<?php 
 $radius = $_POST["radius"];
 $circumference = null;
 $area = null;
 $volume = null;

 $circumference = 2 * pi() * $radius;

 $area = pi() * pow($radius, 2);

 $volume = 4/3 * pi() * pow($radius, 3);

 echo"Circumference = {$circumference}cm <br>";
 echo"Area = {$area}cm^2 <br>";
 echo"Volume = {$volume}cm^3 <br>";

?>