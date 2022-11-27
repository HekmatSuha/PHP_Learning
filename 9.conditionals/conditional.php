<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML & PHP</title>
   
</head>
<body>
    <h1>Task of the day</h1>
   
    <ul>
        <li>
            <strong>Name: </strong><?= $task['title'];?>
        </li>
        <li>
            <strong>Due: </strong><?= $task['due'];?>
        </li>
        <li>
            <strong>Resposible_person: </strong><?= $task['assigned_to'];?>
        </li>
        <li>
            <strong>Status: </strong>
            <?php
            
            if ($task['status']) {
                echo '&#9989;';
            } else{
                echo 'incomplete';
            }
            ?>
        </li>
    </ul>
</body>
</html>