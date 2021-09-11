<?php
$nilai = [90,80,60,100,127,81,51,99];

function nilaiMaksimal($nilai)
{
    $nilaiTerbesar =count ($nilai);
    $terbesar = $nilai[0];

    for ($i=1; $i <= $nilaiTerbesar ; $i++) { 
        
    if ($terbesar < $nilai[$i]){
        $terbesar = $nilai[$i];
    return $terbesar;
}
}
}

function nilaiMinimal($nilai)
{
    $nilaiTerkecil =count ($nilai);
    $terkecil = $nilai[0];

    for ($i=1; $i < $nilaiTerkecil ; $i++) { 
        
    if ($terkecil > $nilai[$i]){
        $terkecil = $nilai[$i];
    
    return $terkecil;
}
}
}
$nilai = [90,80,60,100,127,81,51,99];
echo "Nilai Maksimal = " . max($nilai);
echo "<br>Nilai Minimal = " . min($nilai);
?>