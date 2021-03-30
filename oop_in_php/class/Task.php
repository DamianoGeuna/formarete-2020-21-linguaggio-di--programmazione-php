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

        //è oggi
        if($today->format('Ymd') === $task->format('Ymd')) {

            return false;

        }
    
        return $today ->getTimestamp() > $task->getTimestamp(); 
        //gettype($today); da un oggetto
        //get_class($today) DateTime
    }

    public function getExpirationDate()
    {
        return $this -> expirationDate;
    }
    
}