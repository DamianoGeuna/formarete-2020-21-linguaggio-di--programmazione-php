<?php
// Carico le dipendenze, quello che mi serve per elaborare script finale (Tipo Bootstrap e Jquery)
require "./lib/JSONReader.php";

// Model: in questo caso è JSONReader(parte che si occupa di recuperare/gestire i dati dell'applicazione)
// controller: parte che si occupa di gestire le altre due parti, la vista e il model
$taskList = JSONReader('./dataset/TaskList.json');

?>

<!-- (vista) visualizzazione / intercetta le azione dell'utente -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task List</title>
    <link rel="stylesheet" href="asset/style.css">
</head>
<body>
    <form action="">
        <input type="text" name="searchText">
        <button type="submit">cerca</button>
    </form>
    <ul>
        <?php
        foreach ($taskList as $key => $task) { 
            
            $status =$task['status'];           
            $taskName =$task['taskName'];            
            ?>
            
            <li class="tasklist-item tasklist-item-<?= $status ?>">
                <?= $taskName?>
                <b> <?=$status?></b>
            </li>


        <?php } ?>

        <!--
        <li class="tasklist-item tasklist-item-done">uova <b>done</b></li>
        <li class="tasklist-item tasklist-item-todo">farina <b>todo</b></li>
        -->
    </ul>
</body>
</html>
