<?php
// var_dump($_POST);
echo "votre nom est : ".$_POST['Name']."<br>";
echo "votre Email est : ".$_POST['Email'];
echo "<br>";
$ch1 = " Au début, ils rient de vous, ensuite ils vous combattent, et à la fin, vous gagnez";
$ch1 = ucwords($ch1);
$l = explode(" ",$ch1);
$l[count($l)-1] = strtoupper($l[count($l)-1]);
$ch1 = implode(" ",$l);
echo $ch1;
?>