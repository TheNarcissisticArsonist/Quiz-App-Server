<?php
$user     = $_REQUEST["user"];
$newScore = $_REQUEST["score"];
$scoreFile = fopen("UserList.csv", "r");
$wholeFile = fread($scoreFile, filesize("UserList.csv"));
fclose($scoreFile);
$separatedByLines = explode(PHP_EOL, $wholeFile);
$lines = [];
$scoreFile = fopen("UserList.csv", "w");
for($i=0; $i<count($separatedByLines); $i++) {
  if($user == explode(",", $separatedByLines[$i])[0]) {
    $newLine = explode(",", $separatedByLines[$i])[0].",".explode(",", $separatedByLines[$i])[1].",".((string)$newScore);
    $separatedByLines[$i] = $newLine;
  }
  echo($separatedByLines[$i]);
  fwrite($scoreFile, $separatedByLines[$i]);
  fwrite($scoreFile, PHP_EOL);
}
fclose($scoreFile);
?>
