<?php



//$passato = new DateTime('1969-12-31 23:59:00');
//echo $passato->getTimestamp()."\n";

$unix = new DateTime('1970-01-01 00:00:00'); // unix timestamp in secondi
//il risultato è zero, perchè si parte da li.
echo $unix->getTimestamp()."\n";

$un_minuto_dopo = new DateTime('1970-01-01 01:00:00');
echo $un_minuto_dopo->getTimestamp()."\n";


//task
$passato->getTimestamp() < $today ->getTimestamp();


$today = new DateTime();
echo $today -> getTimestamp()."\n";
//-----------------------------------------------------------------


echo $today->format('d m Y')."\n";//si potrebbe omettere la / tra mese anno etc.... M=indica mese scritto
echo $today->format('l d F Y')."\n";
echo $today->format('w')."\n";

$settimana=array ('it_IT'=>[
    'Domenica',
    'Lunedi',
    'Martedi',
    'Mercoledi',
    'Giovedi',
    'Venerdi',
    'Sabato'
],
'fr_FR' =>[
    'Dimanche',
    'Lundi',
    'Mardi',
    'Mercredi',
    'Jeudi',
    'Vendredi',
    'Samedi'

]
);

echo "Oggi è: ".$settimana['fr_FR'][$today->format('w')];