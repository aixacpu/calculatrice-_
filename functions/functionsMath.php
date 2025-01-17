<?php
function addition($a, $b) {
    return $a + $b;
}

function soustraction($a, $b) {
    return $a - $b;
}

function multiplication($a, $b) {
    return $a * $b;
}

function division($a, $b) {
    if ($b == 0) {
        return "Division par zéro impossible.";
    }
    return $a / $b;
}
?>

