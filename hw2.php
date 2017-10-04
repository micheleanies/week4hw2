<?php
$date = date('Y-m-d', time());
echo "The value of \$date: ".$date."<br>";
$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br>";

$date = date('Y/m/d', time());
echo "The value of \$date: ".$date."";

echo "<br>";
if ($date > $tar && $date+$tar >0){
	echo "The future";
}
else if ($date+$tar == 0){
	echo "Oops";  
}
else{
	echo "The past";
}
echo "<br>";
echo "The positions are: ";
echo strpos($date,"/").", ";
echo strrpos($date,"/")."";

echo "<br>";
echo "The word count for \$date is: ".str_word_count($date)."<br>";

echo "The string length of \$date is: ".strlen($date)."";

echo "<br>";

$ISHW = "Michele Angelica";
echo ord($ISHW)."";

echo "<br>";
echo "Char value: 04 : ";
echo substr($date,0)."";
echo "<br>";

$dateposition = explode("/",$date);
echo $dateposition[0]." ";
echo $dateposition[1]." ";
echo $dateposition[2]."<br>";
echo "<br>";

$year = array("2012", "2016", "2020", "2024");
foreach ($year as $y){
	switch ($y % 4) {
		case 0:
			if ((($y % 100) > 0) || (($y % 400) == 0)){
				echo "True ";
			}
			else {
				echo "False ";
			}
	}
};
echo "";
for ($i = 0; $i < sizeof($year); $i ++){
	$y = $year[$i];
	switch ($y % 4) {
		case 0:
			if ((($y % 100) > 0) || (($y % 400) == 0)){
				echo "True ";
			}
			else {
				echo "False ";
			} 
	}
}
?>