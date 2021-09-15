<?php
class laptop
{
    public $pemilik;

    protected function hidupkan_laptop()
    {
        return "hidupkan laptop";
    }

    public function paksahidupkanlaptop()
    {
        return $this->hidupkan_laptop();
    }
}

$laptopanton = new laptop();
$laptopanton->pemilik = "anto <br>";

echo $laptopanton->pemilik;
echo $laptopanton->paksahidupkanlaptop();
