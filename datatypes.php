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
        <h2>Data Types</h2>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">string</h5>
                <?php
                $fname = "Hari";
                $lname = "krishnan";
                var_dump("$fname", "$lname") ;
                ?>
            </div>
        </div>

        <div class="card mt-4">
            <div class="card-body">
                <h5 class="card-title">Integer</h5>
                <?php
                $num = 58481;
                var_dump($num);
                ?>
            </div>
        </div>

        <div class="card mt-4">
            <div class="card-body">
                <h5 class="card-title">Float</h5>
                <?php
                $num = 58481;
                var_dump($num);
                ?>
            </div>
        </div>

        <div class="card mt-4">
            <div class="card-body">
                <h5 class="card-title">NULL</h5>
                <?php
                $x = "Sparkout";
                $x = null;
                var_dump($x);
                ?>
            </div>
        </div>

        <div class="card mt-4">
            <div class="card-body">
                <h5 class="card-title">Object</h5>
                <?php
               class Pen {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
  public function message() {
    return "My pen is a " . $this->color . " " . $this->model . "!";
  }
}

$myPen = new Pen("black", "Volvo");
echo $myPen -> message();
echo "<br>";
$myPen = new Pen("red", "Toyota");
echo $myPen -> message()
               
                ?>
            </div>
        </div>


    </div>
    <script src="./js/bootstrap.js"></script>
</body>

</html>