<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h1>Operators</h1>
        <h2>Arithmetic operator </h2>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Addition-50 + 25</h5>
                <?php
                $a = 50;
                $b = 25;
                echo ($a + $b); //output - 75
                ?>
            </div>
        </div>

        <div class="card mt-4">
            <div class="card-body">
                <h5 class="card-title">Subraction-150 + 50</h5>
                <?php
                $a = 150;
                $b = 50;
                echo ($a - $b); //output - 100
                ?>
            </div>
        </div>

        <div class="card mt-4">
            <div class="card-body">
                <h5 class="card-title">Multiplication-9*5</h5>
                <?php
                $a = 9;
                $b = 5;
                echo ($a * $b); //output - 45
                ?>
            </div>
        </div>

        <div class="card mt-4">
            <div class="card-body">
                <h5 class="card-title">Division-500/3</h5>
                <?php
                $a = 500;
                $b = 3;
                echo ($a / $b);  //output - 166.6666
                ?>
            </div>
        </div>

        <div class="card mt-4">
            <div class="card-body">
                <h5 class="card-title">Modulus</h5>
                <?php
                $a = 25;
                $b = 2;
                echo ($a % $b);  //output - 1
                ?>
            </div>
        </div>
        <h2>Assignment operator</h2>
        <div class="card mt-4">
            <div class="card-body">
                <h5 class="card-title">Adding $x=20 with $x+ =100</h5>
                <?php
                $x = 20;
                $x += 100;
                echo $x; //output - 120
                ?>
            </div>
        </div>

        <div class="card mt-4">
            <div class="card-body">
                <h5 class="card-title">subtracting $x =50 with $x -=30</h5>
                <?php
                $x = 50;
                $x -= 30;
                echo $x; //output - 20
                ?>
            </div>
        </div>

        <div class="card mt-4">
            <div class="card-body">
                <h5 class="card-title">Multiplication $x =5 with $x*=6</h5>
                <?php
                 $x = 5;
                $x *= 6;
                echo $x; //output - 30
                ?>
            </div>
        </div>

        <div class="card mt-4">
            <div class="card-body">
                <h5 class="card-title">Division $x=84 with $x /=12</h5>
                <?php
                $x = 84;
                $x /= 12;
                echo $x; //output - 7
                ?>
            </div>
        </div>

        <div class="card mt-4">
            <div class="card-body">
                <h5 class="card-title">Modulus $x=19 with $x %=4</h5>
                <?php
                $x = 19;
                $x %= 4;
                echo $x; //output - 3
                ?>
            </div>
        </div>
    </div>
    <script src="./js/bootstrap.js"></script>
</body>

</html>