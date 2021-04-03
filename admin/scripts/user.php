<?php

function users(){
    $con = Database::getInstance()->getConnection();
    $stmt = $con->prepare("select * from users");
    $stmt->execute();
    return $stmt->fetchAll();
}

// create user
function create_user($firstname,$lastname,$email,$password,$type_user=1){
    $con = Database::getInstance()->getConnection();
    $stmt = $con->prepare("insert into users (firstname,lastname,email,password,type_user) values(:firstname,:lastname,:email,:password,:type_user)");
    $stmt->bindParam(':firstname',$firstname,PDO::PARAM_STR);
    $stmt->bindParam(':lastname',$lastname,PDO::PARAM_STR);
    $stmt->bindParam(':email',$email,PDO::PARAM_STR);
    $stmt->bindParam(':password',$password,PDO::PARAM_STR);
    $stmt->bindParam(':type_user',$type_user,PDO::PARAM_INT);
    $stmt->execute();
    return 1;
}

// read user
function read_user($id){
    $con = Database::getInstance()->getConnection();
    $stmt = $con->prepare("select * from users where id=:id");
    $stmt->bindParam(':id',$id,PDO::PARAM_INT);
    $stmt->execute();

    return $stmt->fetch();
}

// update user
function update_user($id,$firstname,$lastname,$email,$password,$type_user){
    $con = Database::getInstance()->getConnection();
    $stmt = $con->prepare("update users set firstname=:firstname,lastname=:lastname,email=:email,password=:password,type_user=:type_user where id=:id");
    $stmt->bindParam(':firstname',$firstname,PDO::PARAM_STR);
    $stmt->bindParam(':lastname',$lastname,PDO::PARAM_STR);
    $stmt->bindParam(':email',$email,PDO::PARAM_STR);
    $stmt->bindParam(':password',$password,PDO::PARAM_STR);
    $stmt->bindParam(':type_user',$type_user,PDO::PARAM_INT);
    $stmt->bindParam(':id',$id,PDO::PARAM_INT);
    $stmt->execute();
    return 1;
}

// delete user
function delete_user($id){
    $con = Database::getInstance()->getConnection();
    $stmt = $con->prepare("delete from users where id=:id");
    $stmt->bindParam(':id',$id,PDO::PARAM_INT);
    $stmt->execute();
}

// accept user
function accept_user($id){
    $con = Database::getInstance()->getConnection();
    $stmt = $con->prepare("update users set accepted=1 where id=:id");
    $stmt->bindParam(':id',$id,PDO::PARAM_INT);
    $stmt->execute();
}

// send user information
function send_information($subject,$from,$to,$text){
    $user = "a.lrg.fip@gmail.com";
    $pass = "lrg12345.";
    $transport = (new Swift_SmtpTransport('smtp.gmail.com', 465, "ssl"))
      ->setUsername($user)
      ->setPassword($pass);
    $mailer = new Swift_Mailer($transport);
    $message = (new Swift_Message())
      ->setSubject($subject)
      ->setFrom([$from => $from])
      ->setTo([$to => $to])
      ->addPart($text, 'text/html');
    $result = $mailer->send($message);
}

function type_user($type_user){
    $types = array(
        0 => 'Administrator',
        1 => 'Normal user'
    );
    return $types[$type_user];
}