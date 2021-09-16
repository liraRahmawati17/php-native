<?php
class pembelian
{

    protected $nama = "lira rahmawati";
    private $pin = "176543";

    public function nama()
    {
        return $this->nama;
    }
    public function pin()
    {
        return $this->pin;
    }
}

class pembayaran extends pembelian
{
    public function nama()
    {
        return $this->nama;
    }
    public function pin()
    {
        return $this->pin;
    }
}

$pembelian = new pembelian();
$pembayaran = new pembayaran();

// ingin mengetahui data akun shopee dari object pembelian
echo " nama akun shopee : " . $pembelian->nama() . "<br>";
echo " pin  : " . $pembelian->pin() . "<hr>";
