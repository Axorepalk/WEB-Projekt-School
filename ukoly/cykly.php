
<h1>Ukol A</h1>
<?php 
for ($i = 1; $i <= 10; $i++) { ?>
    <p><?php echo $i; ?></p><?php
}
?>
<h1>Ukol B</h1>
<?php
for ($i =2 ; $i <= 20; $i+=2) { ?>
    <p><?php echo $i; ?></p><?php
}
?>
<h1>Ukol B (bonus)</h1>
<?php
for ($i = 1; $i <=20; $i++) {
    if ($i % 2 == 0) { ?>
        <p><?php echo $i; ?></p><?php
    }
}
?>
<h1>Ukol C</h1>
<?php
$number = 7;
for ($i = 1; $i <= 10; $i++) { ?>
    <p><?php echo $number . " x " . $i . " = " . ($number * $i); ?></p><?php
} ?>
<h1>Ukol D</h1>
<?php
$sum = 0;
for ($i = 1; $i <= 100; $i++) {
    $sum += $i;
}
?>
<p>Součet čísel: <?php echo $sum; ?></p>