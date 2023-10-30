<?php
function factorial($n) {
	$result = 1;
	for ($i = 2; $i <= $n; $i++) {
		$result *= $i;
	}
	return $result;
}

$number = 5; // Ganti dengan bilangan yang ingin dihitung faktorialnya
$result = factorial($number);
echo "Faktorial dari $number adalah $result";

?>