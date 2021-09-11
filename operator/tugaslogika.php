<?php
    $a = 1;
    $b = 9;
    $c = 10;
    $d = 11;

    echo "$a < $c : ".($a < $c);
    echo "<br>($b > $c) && ($c < $b) :"
    .(($b > $c) && ($c < $b));
    echo "<br>($c > $d) || ($b < $c) :"
    .(($c > $d) || ($b < $c));
    echo "<hr>";


    $tono = 10000;
    $tini = 8000;
    $toni = 15000;

    echo "<br> ($toni > $tono) || ($toni > $tini) : "
    .(($toni > $toni) || ($tono > $tini));
    echo "<br> ($toni > $tini) && ($toni < $tono) : "
    .(($toni > $tini) && ($toni < $tono));
    echo "<hr>";

    $email = "lira123@gmail.com";
    $user = "lira";
    $password = 12345;

    echo "<br>email/username : <b>$user</b>";
    echo "<br>password : $password";
    echo "<br>cek login :".(($user && $password) && ($user && $password));




    ?>