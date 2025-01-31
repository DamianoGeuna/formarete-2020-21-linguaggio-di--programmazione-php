<?php

require "./vendor/JSONReader.php";
require "./class/Task.php";

$taskList = JSONReader('./dataset/TaskList.json');

//print_r($taskList);

//imperativo
$taskListObj=[];

foreach ($taskList as $taskArray)
{
    $taskObj = new Task();
    $taskObj-> id=$taskArray['id'];
    $taskObj->taskName=$taskArray['taskName'];
    $taskObj->status = $taskArray['status'];
    $taskObj->expirationDate = $taskArray['expirationDate'];

    $taskListObj[]=$taskObj;
}

//dichiarativo--> programmazione funzionale
//concetto di funzione di ordine superiore
//concetto di funzione pura. Esempio: Somma(4,5) --> funzione pura
// -->is expired// nessuno

$taskListObj = array_map(function($taskArray){

    $taskObj = new Task();
    $taskObj-> id=$taskArray['id'];
    $taskObj->taskName=$taskArray['taskName'];
    $taskObj->status = $taskArray['status'];
    $taskObj->expirationDate = $taskArray['expirationDate'];

    return $taskObj;

}, $taskList);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TaskList a oggetti</title>
</head>
<body>
    
    <table>
        <tr> <!--Tr = table Row-->
            <th>Nome Attività</th> <!--TH = Table header-->
            <th>Scaduta?</th>
        </tr>
        <?php
        foreach ($taskListObj as $task) { ?> <!--Potrei riusare TaskListObj, perchè qui non è attivo.-->
            <!--qui HTML-->
            <tr>
                <td><?php echo $task->taskName ?></td>
                <td><?= $task->isExpired() ? "si" : "no" ?></td> <!-- mettere = indica fare php echo-->
            </tr>





        <?php } ?>
        
        <tr>
            <td>Comprare Latte</td>
            <td>Sì</td>
        </tr>
        <tr>
            <td>Appuntamento</td>
            <td>No</td>
        </tr>
    
    
    
    
    </table>





</body>
</html>