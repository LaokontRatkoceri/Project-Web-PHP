<?php

     $servername = 'localhost';
     $user = 'root';
     $password = '';
     $databaseName = 'web_engineering';

   
        // inicojme koneksionin me db
        try {
            $connection = new PDO("mysql:host=$servername; dbname=$databaseName",$user,$password);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "Done";
        } catch (PDOException $e) {
            echo $e->getMessage();
            return null;
        }
      
    
?>