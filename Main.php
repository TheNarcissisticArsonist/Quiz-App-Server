<?php
$line = $_REQUEST["QuestionSet"];
$file = fopen("QuestionData.csv", "r");
$wholeFile = fread($file, filesize("QuestionData.csv"));
$separatedFile = explode(PHP_EOL, $wholeFile);
echo($separatedFile[$line-1]);
fclose($file);
?>
