<?php
$StudentName = "Patrik Vaněk";
$test1 = 0;
$test2 = 0;
$test3 = 101;

$NeplatneHodnoceni = $test1 < 0 || $test1 > 100
    || $test2 < 0 || $test2 > 100
    || $test3 < 0 || $test3 > 100;
?>
<h1>Hodnocení studenta</h1>
<h2><?php echo $StudentName; ?></h2>
<h3>Výsledky testů:</h3>
<h4>Test 1: <?php echo $test1; ?> bodů</h4>
<h4>Test 2: <?php echo $test2; ?> bodů</h4>
<h4>Test 3: <?php echo $test3; ?> bodů</h4>

<?php if ($NeplatneHodnoceni): ?>
    <h3>Neplatné bodové hodnocení. Každý test musí mít 0 až 100 bodů.</h3>
<?php else: ?>
    <?php $CelkovyPocetBodu = $test1 + $test2 + $test3; ?>
    <h3>Celkový počet bodů: <?php echo $CelkovyPocetBodu; ?></h3>

    <?php $Avgbody = $CelkovyPocetBodu / 3; ?>
    <h3>Průměrný počet bodů: <?php echo $Avgbody; ?></h3>

    <?php $ProcentualniUspesnost = ($CelkovyPocetBodu / 300) * 100; ?>
    <h3>Procentuální úspěšnost: <?php echo $ProcentualniUspesnost; ?>%</h3>

    <?php
    if ($ProcentualniUspesnost >= 90) {
        $grade = 1;
    } elseif ($ProcentualniUspesnost >= 75) {
        $grade = 2;
    } elseif ($ProcentualniUspesnost >= 60) {
        $grade = 3;
    } elseif ($ProcentualniUspesnost >= 40) {
        $grade = 4;
    } else {
        $grade = 5;
    }
    ?>
    <h4>Hodnocení: <?php echo $grade; ?></h4>
    <?php if ($grade == 5): ?>
        <h4>Nedostatečné.<br>Bonusové úkoly:</h4>
    <?php elseif ($grade == 4): ?>
        <h4>Student prošel. Dostatečné</h4>
    <?php elseif ($grade == 3): ?>
        <h4>Student prošel. Dobré</h4>
    <?php elseif ($grade == 2): ?>
        <h4>Student prošel. Chvalitebné</h4>
    <?php elseif ($grade == 1): ?>
        <h4>Student prošel. Výborné</h4>
    <?php endif; ?>
<?php endif; ?>
