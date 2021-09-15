<?php
class orangTua
{

    protected $noAtm = "111-222-333-444";
    private $pinAtm = "001122";

    public function noAtm()
    {
        return $this->noAtm;
    }
    public function pinAtm()
    {
        return $this->pinAtm;
    }
}

class anak extends orangTua
{
    public function noAtm()
    {
        return $this->noAtm;
    }
    public function pinAtm()
    {
        return $this->pinAtm;
    }
}

$orangTua = new orangTua();
$anak = new anak();

// ingin mengetahui data atm dari object orang tua
echo " no kartu atm : " . $orangTua->noAtm() . "<br>";
echo " pin atm : " . $orangTua->pinAtm() . "<hr>";

// anak ingin mengetahui data atm dari class orang tua
echo " no katru atm : " . $anak->noAtm() . "<br>";
echo " pin atm : " . $anak->pinAtm();
