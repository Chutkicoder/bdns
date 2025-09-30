<?php
$m = new MongoClient();
echo "Connection to database successfully"; 
$db = $m -> MYDB259743
echo "\n Database selected successfully";
$col = $db -> MyCol;
echo "\n Connection selected successfully";""
$col-> update(array ("name" => "Chanchal"),array('$set'=>array("age" => 19 ) ) ) ;
echo "\n Document updated successfully";
?>