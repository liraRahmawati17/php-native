<?php
class computer
{
    protected $jenisprocessor = "intel core 17";

    protected function tampilkanjenisprocessor()
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
echo $laptop->getprocessor();
