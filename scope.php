<h2>Scopes</h2>
<?php
$x = 50; //global scope
function num()
{
    $x = 20; //local scope
    echo $x, " is inside variable<br>";
}
num();
echo $x, " is out side the function";
?>