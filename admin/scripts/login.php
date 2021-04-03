<?php

function check_user($email,$password){
    $con = Database::getInstance()->getConnection();
    $stmt = $con->prepare("select * from users where email=:email and password=:password");
    $stmt->bindParam(':email',$email,PDO::PARAM_STR);
    $stmt->bindParam(':password',$password,PDO::PARAM_STR);
    $stmt->execute();
    
    if($stmt->rowCount()>0){
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        foreach($row as $key => $value){
            $_SESSION[$key] = $value;
        }
        return true;
    }
    return false;
}