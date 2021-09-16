<?php

class komputer
{
    public $merk;
    public $processor;
    public $memori;

    public function belikomputer()
    {
        return "beli komputer baru";
    }
}

class laptop extends komputer
{
    public function lihatspec()
    {
        return "merk : $this->merk, processor: $this->processor, memori: $this->memori";
    }
}

// buat objek laptop
$laptop = new laptop();
// set property laptop dari komputer
$laptop->merk = "asus";
$laptop->processor = "intel core 15";
$laptop->memori = "4GB";

echo $laptop->belikomputer() . "<br>";
echo $laptop->lihatspec();
