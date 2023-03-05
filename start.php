<?php
$firstName ="Janusz";
$lastName = "Nowak";
echo "Imie i nazwisko $firstName $lastName <br>";
echo "Imie i nazwisko $firstName $lastName <br>";


// heredoc
echo <<< DATA
Imię: $firstName<br>
Nazwisko: $lastName
<hr>
DATA;


$data = <<< DATA
Imię: $firstName<br>
Nazwisko: $lastName
<hr>
DATA;


echo $data;

// nowdoc
echo <<< 'DATA'
Imię: $firstName<br>
Nazwisko: $lastName
<hr>
DATA;

$bin = 0b1011;
echo $bin;
echo "<br>";

$oct = 01011;
echo $oct;
echo "<br>";

$hex = 0x1A;
echo $hex;
echo "<br>";

?>