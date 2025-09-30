<?php
$m = new MongoClient();
echo "Connection to database successfully"; 
$db = $m -> MYDB259743",
echo "\n Database selected successfully" ; 
$col = $db-> MyCol;
echo "\n Collection selected successfully"; 
$cursor=$col ->find();
foreach ($cursor as $doc)
{
echo "<br/>";
echo $doc["name"]."<br/>"; 
echo $doc["age"]."<br/>"; 
echo $doc["dept"]."<br/>"; 
echo $doc["rollno"]."<br/>";
}
?>