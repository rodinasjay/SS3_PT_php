<?php
$discs1 = 120;
$discs2 = 50;
$discs3 = 15;
$discs4 = 14;

$discount = 78;

if ($discount >= 120) {
    echo "<p>you have 10% discount</p>";

}elseif ($discount >= 50 && $discount <= 119) {
    echo "<p>you have 5% discount</p>";
    
}elseif ($discount >= 15 && $discount <= 49) {
    echo "<p>you have 1% discount</p>";
    
}else{
    echo "<p>you have no discount</p>";
}

?>
