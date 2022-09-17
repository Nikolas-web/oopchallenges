<?php
require_once 'App/init.php';

$hp1 = new Oppo("Oppo", "Realme 9 Pro+", "1");
$hp2 = new Xiaomi("Xiaomi", "Note 9", "2");
$hp3 = new Xiaomi("Xiaomi", "Note 10", "3");
$hp4 = new Samsung("Samsung", "Galaxy Z Flip4", "4");

echo $hp1->getvolume();
echo "<br>";
echo $hp1->volumeDown(0);
echo "<br>";
echo $hp1->getvolume();
echo "<br>";
echo $hp1->volumeDown(0);
echo "<br>";
echo $hp1->getvolume();
echo "<br>";
echo $hp1->capture();
echo "<br>";

echo "<hr>";

echo $hp2->nyalakan();
echo "<br>";
echo $hp2->matikan();
echo "<br>";

echo "<hr>";

echo $hp3->UI();
echo "<br>";
echo $hp3->setUIVersion(12);
echo "<br>";
echo $hp3->UI();

echo "<hr>";

echo $hp4->getvolume();
echo "<br>";
echo $hp4->volumeUp(5);
echo "<br>";
echo $hp4->getvolume();
echo "<br>";
echo $hp4->volumeUp(5);
echo "<br>";
echo $hp4->getvolume();
echo "<br>";
echo $hp4->volumeUp(5);
echo "<br>";
echo $hp4->getvolume();
echo "<br>";
echo $hp4->volumeUp(5);
echo "<br>";
echo $hp4->getvolume();
echo "<br>";
echo $hp4->volumeUp(5);
echo "<br>";
echo $hp4->getvolume();
echo "<br>";
echo $hp4->volumeUp(5);
echo "<br>";
echo $hp4->getvolume();
echo "<br>";
echo $hp4->volumeUp(5);
echo "<br>";
echo $hp4->getvolume();
echo "<br>";
echo $hp4->volumeUp(5);
echo "<br>";
echo $hp4->getvolume();
echo "<br>";
echo $hp4->volumeUp(5);
echo "<br>";
echo $hp4->getvolume();
echo "<br>";
echo $hp4->volumeUp(5);
echo "<br>";
echo $hp4->getvolume();

echo "<hr>";


?>