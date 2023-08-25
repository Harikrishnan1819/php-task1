<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions in php</title>
</head>
<body>
    <h1>print name using function</h1>
<?php
function Myname() {
  echo "Hari Krishnan..!";
}

Myname(); // call the function
?>

<h1>Argument Function</h1>
<?php
function carName($cname) {
  echo "$cname <br>";
}

carName("Volvo ");
carName("BMW");
carName("Audi");
carName("Ferrari");
carName("Skoda");
?>


<h1> Default Argument</h1>
<?php  
function stock( $minheight = "None") {
  echo "The available stock is : $minheight <br>";
}

stock(350);
stock(); // will use the default value.
stock(135);
stock();
?>

<h1>PHP Functions - Returning values</h1>
<?php 
function sum(int $x, int $y) {
  $z = $x + $y;
  return $z;
}

echo "5 + 91 = " . sum(5, 91) . "<br>";
echo "41 + 35 = " . sum(41, 35) . "<br>";
echo "28 + 85 = " . sum(28, 85);
?>
    
</body>
</html>