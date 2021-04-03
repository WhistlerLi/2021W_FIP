<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Contact</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link href="" rel="icon">
    <link href="" rel="apple-touch-icon">
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" >
    <link href="css/frontpages.css" rel="stylesheet">
</head>

<body>
<div class="container centered">
    <div class="c3 menu">
        <label class="gn-icon gn-icon-menu" for="checkbox1"><img src="images/menu.png"></label>
        <ul class="gn-menu-main mobile">
            <li class="gn-trigger">
                <nav class="gn-menu-wrapper">
                    <input type="checkbox" id='checkbox1'>
                    <div class="gn-scroller">
                        <ul class="gn-menu">
                            <li><a href="index.php" class="gn-icon gn-icon-home"><label class="comm"></label>MEMBERSHIP</a>
                            </li>
                            <li><a href="#" class="gn-icon"><label class="reff"></label>REFFEREE</a></li>
                            <li><a href="#" class="gn-icon"><label class="comm"></label>PARENT EDUCATON</a></li>
                            <li><a href="contact.php" class="gn-icon"><label class="comm"></label>Contact</a></li>
                            <li><a href="about.php" class="gn-icon"><label class="comm"></label>About</a></li>
                        </ul>
                    </div>
                </nav>
            </li>
        </ul>
    </div>
    <div class="c6 logo">
        <img src="images/logo1.png">
    </div>
    <div class="c3 search">
		<?php 
			if(!isset($_SESSION['id'])){
				echo '<label><a href="login.php">Login</a>  / <a href="join.php">Join</a></label><img src="images/search.png">';
			}else{
				echo '
				<div class="col-md-2 offset-sm-6 offset-md-7 dropdown p-2" style="margin-top: 5px;text-align: right;">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    '.$_SESSION["firstname"] . " " . $_SESSION["lastname"].'
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" href="admin/admin_logout.php">Logout</a></li>
                </ul>
            </div>';
			}
		?>
    </div>
</div>
<section id="home" name="home"></section>
<div class="col-12 ">
    <div class="grid">
        <figure>
            <img src="./images/connect.png" class="img-responsive">
        </figure>
    </div>
    <br>
</div>
<div class="container">
    <div class="cm4" style="float:left;">
        <form class="contact-form php-mail-form" role="form" action="contactform/contactform.php" method="POST">
            <div class="form-group">
                <div style="float:left;width:48%;">
                    <input type="name" name="firstname" class="form-control" placeholder="First Name"
                           style="margin-bottom: 15px;text-align: center;">
                </div>
                <div style="float:left;margin-left:4%;width:48%;">
                    <input type="name" name="lastname" class="form-control" placeholder="Last Name"
                           style="margin-bottom: 15px;text-align: center;">
                </div>
            </div>
            <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Email" style="text-align: center;">
            </div>
            <div class="form-group" style="margin-top:15px;">
                <textarea class="form-control" name="message" id="contact-message" placeholder="Your Message"
                          rows="5" data-rule="required" data-msg="Please write something for us"></textarea>
            </div>

        </form>
    </div>

    <div class="cm4 contact-info">
        <div class="grid contact" style="font-weight: bold;">
            Contact Info
        </div>
        <div class="grid contact">
            lrg@londonrefereesgroup.com
        </div>
        <div class="grid contact" style="height:80px;">
            <span><img src="images/f.png" class="contact-icon"></span>
            <span><img src="images/ca.png" class="contact-icon"></span>
            <span><img src="images/co.png" class="contact-icon"></span>
        </div>

    </div>
</div>

<div class="container contact-register">
    <div style="width:30%;margin:0 auto;">
        <img src="images/register.png">
    </div>
</div>

<?php
    $title = 'Login';
    include_once 'templates/footer.php';
