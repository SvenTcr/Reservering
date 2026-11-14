<?php
//Sven Boender
class Reservering {

private $uren = 0;
private $naam;

public function __construct($naam) {
    $this->naam = $naam;
}

public function setUren($aantal) {
    if ($aantal > 0) {
        $this->uren = $aantal;
    } else {
        throw new Exception("Aantal uren kan niet negatief zijn.");
    }
}
public function getUren() {
    return $this->uren;

    public function start() {
        return "Reservering gestart";
    }
}

}

class MachineReservering extends Reservering{

public function start() {
    return parent::start() . "Veiligheidscheck uitgevoerd";
}
}

$reserveringen= [
    new Reservering("Sven"),
    new MachineReservering("Sven")
];
foreach ($reserveringen as $reservering) {
    echo $reservering->start() . "<br>";
}


?>