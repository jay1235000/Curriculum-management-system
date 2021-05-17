<?php
    define('DB_USER','root');
    define('DB_PASS' ,'');
    define('DB_INFO', 'mysql:host=localhost;dbname=notification_db');

    function fetchAll($query){
        $con = new PDO(DB_INFO,DB_USER,DB_PASS);
        $stmt = $con->query($query);
        //return $stmt->fetchAll();
    }

    function performQuery($query){
        $con = new PDO(DB_INFO,DB_USER,DB_PASS);
        $stmt = $con->prepare($query);
        if($stmt->execute()){
            return true;
        }else{
            return false;
        }
    }
?>