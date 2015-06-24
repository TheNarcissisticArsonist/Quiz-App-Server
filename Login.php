<?php
$user = $_REQUEST["user"];
$pass = $_REQUEST["pass"];
$file = fopen("UserList.csv", "r");
$wholeFile = fread($file, filesize("UserList.csv"));
$separatedFile = explode(PHP_EOL, $wholeFile);
$userExists = false;
for($i=0; $i<count($separatedFile); $i++) {
  $separatedLine = explode(",", $separatedFile[$i]);
  $compare1 = $separatedLine[0].",".$separatedLine[1];
  $compare2 = $user.",".$pass;
  if($compare1 == $compare2) {
    $userExists = true;
    break;
  }
}
if($userExists) {
  echo("OK,".$separatedLine[2]);
}
else {
  echo("WRONG PASSWORD");
}
fclose($file);
?>
