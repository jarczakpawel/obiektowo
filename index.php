<?php

class Human {
    private $name;
    private $birthDate;
    
    public function __construct($name, $birthDate){
        $this->name = $name;
        $this->birthDate = $birthDate;
    }
    public function wyswietl_imie(){
        //echo 'Imie: '. $this->name .'<br>Data urodzenia: '. $this->birthDate;
        return $this->name;
    }
     public function wyswietl_date(){
        //echo 'Imie: '. $this->name .'<br>Data urodzenia: '. $this->birthDate;
        return $this->birthDate;
    }
}

$czlowiek = new Human('Pawel','12-11-1992');
echo 'Imie: '. $czlowiek->wyswietl_imie() .'<br>Data urodzenia: '. $czlowiek->wyswietl_date();
?>