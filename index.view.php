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
        <ul>
            <?php
                foreach($names as $name){
                    echo "<li>$name</li>";
                }
            ?>
        </ul>
    </h1>
   </header>
</body>
</html>