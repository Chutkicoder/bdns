<?php
$m=new MongoClient();
echo "Connection to database successfully"; 
$db=$m->MYDB259743;
echo "\nDatabase selected successfully"; 
$col=$db->MyCol;
echo "\nCollection selected successfully"; 
$doc=array(
	"name"=>"Chanchal",
	"age"=>19,
	"dept"=>"TYIT",
	"rollno"=>259743
);
$col->insert($doc);
echo "\n Document inserted successfully"; 
?>




















Note:
Steps:
1.Copy php_mongo.dll file to the following path:
C:\xampp\php\ext
2.Now we need to edit the configuration file, the path of the same file is:
Xampp->php->find file type:configuration setting then open with wordpad that is where all these changes occur
Use ctrl+f to find then a small window appears stating find what type extension there and then find this line where extension are there
Add semicolon before extension=php_mongo.dll
Then copy this and paste here in next lines without semicolon
Step3: type the php code in a notepad and save this the location
C:/xampp/htdocs
To open the files open xampp window where we are supposed to select Apache server by clicking on start and admin button
In the browser we need to edit the address bar by typing the file name after the local host/filename.php
