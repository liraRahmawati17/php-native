<?php
class laptop
{
    public $pemilik;

    public function hidupkan_laptop()
    {
        return "hidupkan laptop";
    }
}

$laptopanton = new laptop();
$laptopanton->pemilik = "anto ";

echo $laptopanton->pemilik;
echo $laptopanton->hidupkan_laptop();
