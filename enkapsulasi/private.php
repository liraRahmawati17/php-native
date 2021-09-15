<?php
class computer
{
    private $jenisprocessor = "intel core 17";

    public function tampilkanjenisprocessor()
    {
        return $this->jenisprocessor;
    }
}

class laptop extends computer
{
    public function getprocessor()
    {
        return $this->jenisprocessor;
    }
}

$laptop = new laptop();
$computer = new computer();
echo $laptop->getprocessor();
echo $computer->tampilkanjenisprocessor();
