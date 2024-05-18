<?php



$dsn = "http://localhost/phpmyadmin/index.php?route=/sql&pos=0&db=dbsignup&table=tblform"; 

$dbusername = "root";

$dbpassword = "";



try {    
     $pdo = new PDO($dsn, $dbusername, $dbpassword);  

     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

} catch (PDOException $e) {    

echo "Connection Failed" . $e->getMessage(); 

}