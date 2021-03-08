<?php

//Funzione di ordine superiore che restituisce una funzione
function searchText($searchText)
{
    //variabile searchText è locale per la funzione
    // per fare in modo che sia visibile (ambito valido) all'interno della funzione anonima
    //devo usare use
    return function ($taskItem) use ($searchText)
    {
        print_r($taskItem['taskName']);
        echo "sto cercando $searchText";

        $result = strpos($taskItem['taskName'], $searchText) !== false;
        return $result;

        //var_dump($result)
        //print_r($searchText);
        //print_r($taskItem);
    };
}