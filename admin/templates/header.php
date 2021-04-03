<?php
    include_once "../load.php";
    if(!isset($_SESSION['id'])){
        header('location: ../login.php');
        exit();
    }
    if(isset($_SESSION['id']) && $_SESSION['type_user'] != 0){
        header('location: ../index.php');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?php echo 'LRG - ' . $title; ?></title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" >
        <link href="../css/style.css" rel="stylesheet">
        <link href="../css/frontpages.css" rel="stylesheet">
    </head>
    <body class="container-fluid">
        <div class="row p-1" style="background-color: #e2e2e2;">
            <div class="col-md-3 col-sm-4 clearfix">
                <img src="../images/logo1.png" style="width:60px">
                <label style="font-weight:bold;font-size:24px">Panel Admin</label>
            </div>
            <div class="col-md-2 offset-sm-6 offset-md-7 dropdown p-2" style="margin-top: 5px;text-align: right;">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <?php echo $_SESSION['firstname'] . " " . $_SESSION['lastname']; ?>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="admin_edituser.php?id=<?php echo $_SESSION['id']; ?>">Profile</a></li>
                    <li><a class="dropdown-item" href="admin_logout.php">Logout</a></li>
                </ul>
            </div>
        </div>

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mt-2">
                <li class="breadcrumb-item"><a href="admin_dashboard.php">Dashboard</a></li>
                
                