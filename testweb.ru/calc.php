<?php

$summn_l = $_POST['myRangeInput'];
$summadd = $_POST['my2RangeInput'];
$daysn = date('t');
$summn = $_POST['myRangeInput'];
$daysy = 365;
$percent = 0.1;

if (isset ($_POST['no'])) {
	
	for ($i = 1; $i <= $_POST['years']; $i++) {
		$summn = $summn_l + $summn_l * $daysn * ($percent / $daysy);
		$summn_l = $summn;
	}
	echo "$summn";
	
} else {
	
	for ($i = 1; $i <= $_POST['years']; $i++) {
	$summn = $summn_l + ($summn_l + $summadd) * $daysn * ($percent / $daysy);
	$summn_l = $summn;
	}
	echo "$summn";
}