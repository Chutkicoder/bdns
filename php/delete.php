<?php
$m = new MongoClient();
echo "Connection to database successfully";
$db = $m -> MYDB259743,
echo "\n Database selected successfully";
$col = $db-> MyCol;
echo "\n Collection selected successfully";
$col->remove(array("name" => "Chanchal"));
echo "\n Document deleted successfully";
?>
























