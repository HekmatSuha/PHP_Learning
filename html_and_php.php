<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML & PHP</title>
    <style>
        header{
            background:#e3e3e3;
            padding: 3em;
            text-align:center;
        }
    </style>
</head>
<body>
   <header>
   <h1>
        <!-- <?php
        // $name = $_GET['name'];

        // echo "Hello $name";
        
        ?> -->
        <?= "Hello & welcome , " . htmlspecialchars($_GET['name']); ?>
    </h1>
   </header>
</body>
</html>