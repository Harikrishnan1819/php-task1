<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
</head>

<body>

    <div class="container">

        <h1>Strings</h1><br>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Return the length of the string - sparkout</h5>
                <?php
                echo strlen("sparkout"); // output - 8
                ?>
            </div>
        </div>

        <div class="card mt-4">
            <div class="card-body">
                <h5 class="card-title">Count the number of words in the string-Hari Krishnan</h5>
                <?php
                echo str_word_count("Hari krishnan") //output - 2
                ?>
            </div>
        </div>

        <div class="card mt-4">
            <div class="card-body">
                <h5 class="card-title">Reverse the string-Sparkout</h5>
                <?php
                echo strrev("Sparkout") //output - tuokrapS
                ?>
            </div>
        </div>

        <div class="card mt-4">
            <div class="card-body">
                <h5 class="card-title">Return the position of the string-The Quick Brown Fox", "Brown</h5>
                <?php
                echo strpos("The Quick Brown Fox", "Brown") //output - 10
                ?>
            </div>
        </div>

        <div class="card mt-4">
            <div class="card-body">
                <h5 class="card-title">Replace the string-"Morning","Evening","Good Morning"</h5>
                <?php
                echo str_replace("Morning", "Evening", "Good Morning") //output - Good Evening
                ?>
            </div>
        </div>

        <script src="./js/bootstrap.js"></script>
</body>

</html>

</div>