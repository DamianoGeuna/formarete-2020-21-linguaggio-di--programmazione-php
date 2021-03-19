<?php

class Task
{
    public $id;
    public $taskName;
    public $status;
    public $expirationDate;

    public function isExpired():bool
    {
        //today istanza della classe DateTime
        $today = new DateTime();
        $task = new DateTime($this -> expirationDate);

        return $task > $today; 
        //gettype($today); da un oggetto
        //get_class($today) DateTime
    }

    public function getExpirationDate()
    {
        return $this -> expirationDate;
    }
    
}