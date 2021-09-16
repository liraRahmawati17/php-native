<?php

// buat class komputer
class komputer
{
    protected function belikomputer()
    {
        return "beli komputer baru";
    }
}

// turunkan class komputer ke laptop
class laptop extends komputer
{
    protected function belilaptop()
    {
        return "beli laptop baru";
    }
}

// turunkan class laptop ke cromebook
class cromebook extends laptop
{
    protected function belicromebook()
    {
        return "beli cromebook baru";
    }

    public function belisemua()
    {
        $a = $this->belikomputer();
        $b = $this->belilaptop();
        $c = $this->belicromebook();
        return "$a <br/> $b <br/> $c";
    }
}

// buat objek dari class laptop
$gadgetbaru = new cromebook();

// panggil method objek
echo $gadgetbaru->belisemua();
