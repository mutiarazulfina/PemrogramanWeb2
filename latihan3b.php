<?php
function styleText($jawabanIsset, $jawabanEmpty) {
	$style = "font-size: 28px; font-family: Arial; borde: solid; padding: 10px;";
	$styledText = "<p style = '$style'>$jawabanIsset $jawabanEmpty</p>";

		return $styledText;
}

$jawabanIsset = "Isset adalah elemen yang dapat digunakan untuk menentukan apakah
				suatu variabel dideklarasikan dan berbeda dari null.<br></br>";
$jawabanEmpty = "Empty adalah elemen yang dapat digunakan untuk menentukan apakah
				suatu variabel ada dan nilai variabel tidak bernilai false.";

		$styledTexts = styleText ($jawabanIsset, $jawabanEmpty);

		echo $styledTexts;
?>