<?php
//The end time
$endTime = mktime(0, 0, 0, 05, 31, 2019); //hours, minutes, seconds, month, day, year;
$timeNow = microtime(true);
$diffTime = $endTime - $timeNow;
$milli = explode(".", round($diffTime, 2));
$millisec = round($milli[1]);
$tag = floor($diffTime / (24*3600));
$diffTime = $diffTime % (24*3600);
$stunden = floor($diffTime / (60*60));
$diffTime = $diffTime % (60*60);
$min = floor($diffTime / 60);
$sec = $diffTime % 60;
$noch = "";
if($tag != 0){
  $noch .= $tag." Tage ";
}else if($houre != 0){
  $noch .= $houre." Stunden ";
}else if($min != 0){
  $noch .= $min." Minuten ";
}else if($sec != 0){
  $noch .= $sec." Sekunden ";
}else{
  $noch .= "0 Sekunden";
}
?>
