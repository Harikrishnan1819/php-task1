<h2>Array</h2>
<?php
//output with datatype
$fruits = array("apple", "orange", "mango", "banana");
var_dump($fruits);
?>
<br>
<?php
//output by index
$fruits = array("apple", "orange", "mango", "banana");
echo $fruits[0], "<br>";
echo $fruits[2], "<br>";
echo $fruits[1], "<br>";
?>

<h2>Associate Array</h2>
<?php
$name = [
    'name1' => 'Hari',
    'name2' => 'Krishnan'
];
$name['name3'] = 'kannan';
print_r($name);

?>