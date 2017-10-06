<?php
$date =  date('Y-m-d', time());
echo "The value of \$date: ".$date."<br>";

$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br>";

$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";
print_r($year);
echo '<br>';

$newDate = str_replace("-","/",$date);
echo "The value of \$newDate: ".$newDate."<br>";

$comp = strcmp($date,$tar);
echo 'Value: ' .  $comp . '<br>';
if($comp > 0) {
	echo "the future<br>";
}elseif($comp < 0) {
	echo "the past<br>";
}elseif($comp == 0) {
	echo "Oops<br>";
}

$otherComp = strcmp($newDate,$tar);
echo 'Value: ' .  $otherComp . '<br>';
if($otherComp > 0) {
        echo "the future<br>";
}elseif($otherComp < 0) {
	echo "the past<br>";
}elseif($otherComp == 0) {
	echo "Oops<br>";
}

$count = substr_count($newDate, "/");
echo $count . '<br>';
for($a = 0; $a < $count; $a++) {
	$ans += 1;
	$ans = stripos($newDate,"/",$ans);
	echo $ans . ' ';
}
echo '<br>';

$words = str_word_count($newDate, 0);
echo $words . '<br>';
$example = "Hello world";
$nwords = str_word_count($example, 0);
echo $nwords . '<br>';

echo strlen($newDate) . '<br>';

echo ord($newDate) . '<br>';

$array = str_split($newDate);
$element = count($array);
for($a = 0; $a < 2; $a++) {
	$element -= 1;
	echo $array[$element];
}
echo '<br>';

$narray = explode('/', $newDate);
$nelement = count($narray);
for($a = 0; $a < $nelement; $a++) {
	echo $narray[$a] . ' ';
}
echo '<br>';

foreach($year as $value) {
	switch((($value % 4) == 0) && ((($value % 100) != 0) || (($value % 400) == 0))) {
		case 1:
			echo $value . " True ";
			break;
		default:
			echo $value . " False ";
	}
}

?>
