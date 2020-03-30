<?php

$spojeni = DB::pripojit();

$dotaz = "SELECT * FROM 3ep_sk2_php_mvc_prispevky";
$vysledek = mysqli_query($spojeni, $dotaz);

$vysledek2 = mysqli_query($spojeni, "DELETE * FROM 3ep_sk2_php_mvc_prispevky WHERE id = 3");

