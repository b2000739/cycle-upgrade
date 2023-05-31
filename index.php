<?
$number = 123;
$array = array();
while ($number > 0) {
	$array[] = $number % 10;
	$number = intval($number / 10);
}
$array = array_reverse($array);
$j = 0;
$k = 0;
$h = 0;
for ($i = 0; $i < count($array); $i++) {
	if ($array[$i] == 3) {
		$h++;
	}
	if ($array[$i] == 7) {
		$k++;
	}
	if ($array[$i] % 2 == 0) {
		$j++;
	}
}
echo 'четные число встретились ' . $j . ' раз';
echo '<br>';
echo 'число 3 встречается ' . $h . ' раз';
echo '<br>';
echo 'число 7 встречается ' . $k . ' раз';
echo '<br>';
echo '<br>';
$nomero = -1;

while ($nomero < 10) {
	$nomero++;
	if ($nomero == 0) {
		echo $nomero  . ' - это ноль';
		echo '<br>';
	} elseif ($nomero % 2 == 0) {
		echo $nomero . ' - это четное число';
		echo '<br>';
	} else {
		echo $nomero . ' - это нечетеное число';
		echo '<br>';
	}
}
