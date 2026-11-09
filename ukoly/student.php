<?php

//proměnné

$jméno = "Patrik";
$příjmení = "Vaněk";
$věk = 17;
$třída = "2.I";
$výška = 1.8;
$student = true;
$oblíbený_prg_jazyk = "PHP";
?>
/* výpis proměnných */
<h1>Můj studentský profil</h1>
<br>
jméno: <?php echo $jméno; ?>
<br>
příjmení: <?php echo $příjmení; ?>
<br>
třída: <?php echo $třída; ?>
<br>
Věk: <?php echo $věk; ?> let
<br>
Výška: <?php echo $výška; ?>m
<br>
Student: <?php echo $student ? 'Ano' : 'Ne'; ?>
<br>
Oblíbený programovací jazyk: <?php echo $oblíbený_prg_jazyk; ?>

<h1>Datové typy</h1>
<?php
//datové typy
var_dump($jméno);
var_dump($příjmení);
var_dump($věk);
var_dump($třída);
var_dump($výška);
var_dump($student);
var_dump($oblíbený_prg_jazyk);
