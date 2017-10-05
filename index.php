<?php
$date =  date('Y-m-d', time());
echo "The value of \$date: ".$date."<br>";

$newDate = str_replace("-","/",$date);
echo "The new value of \$date: ".$newDate."<br>";

$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br>";

$comp = strcmp($date,$tar);
if($comp > 0) {
	echo "the future<br>";
}elseif($comp < 0) {
	echo "the past<br>";
}elseif($comp == 0) {
	echo "Oops<br>";
}

$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";
print_r($year)

?>
