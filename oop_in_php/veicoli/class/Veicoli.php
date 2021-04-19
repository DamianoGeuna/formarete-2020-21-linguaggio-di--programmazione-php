<?php


class Veicolo {

    /**Per passeggeri intendo numero massimo di persone */

    private $npasseggeri;
    private $motore;
    private $serbatoio = 0;
    private $carburante;
    private $posizione = 0;
    private $tipoCarburante;

    public function __construct($motore,$serbatoio,$npasseggeri) {
        $this->motore =$motore;
        $this->serbatoio = $serbatoio;
        $this->npasseggeri = $npasseggeri;
        $this->carburante = 0;
        //$this->posizione = 0;
    }


    // setPosizione
    public function sposta(float $spostamento):float
    {
        if($this->carburante !==0)
        {
            $this->posizione += $spostamento;
            $this->carburante -= $spostamento;
        }
        return $this->posizione;
    }

// setCarburante
    public function rifornimento(float $carburante){
        if($this->serbatoio<$carburante){
            return new Exception('Troppa benzina');
        }
    }


    public function getSerbatoio():float {
        return $this->serbatoio;
    }


    public function getNPasseggeri():int {
        return $this->npasseggeri;
    }

    public function getMotore(){
        return $this->motore;
    }



}