<?php
    if(isset($_POST[proses])){
        $saran = n12br ($_POST['saran']);
        echo "kritik / saran anda adalah : <br>";
        echo "<font color=blue><b>$saran</b></font>";
    }
    ?> 