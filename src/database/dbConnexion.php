<?php

try{
    
    $servername="localhost";
    $username="root";
    $dbname="db_banque";
    $password="";
    $dns="mysql:host=".$servername.";dbname=".$dbname;
    
    $pdp=new PDO($dns,$username,$password);
}catch(PDOException $ex){
    die("error".$ex->getMessage());
}

?>