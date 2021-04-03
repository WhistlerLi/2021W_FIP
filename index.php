<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Home</title>
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

<div class="grid">
    <figure>
        <img src="./images/banner.png" class="img-responsive">
    </figure>
</div>

<div class="container centered">
    <div class="intro text-font">
        We are an organization of 225 hockey referees serving London and area if you are currently
        looking for an organization to referee your hockey league,
        our team would like the opportunity to assist
    </div>
</div>
<div class="container centered" style="text-align: center;">
    <div style="width:30%;margin:0 auto;">
        <a href="join.php"><img src="images/register.png" class="btn-large"></a>
    </div>
</div>

<div class="container" style="background: #f0f0f0;">
    <div class="cm4 left" style="margin-bottom: 15px;">
        <div class="grid">
            <figure>
                <img class="img-responsive" src="images/pexels-pixabay-163039.png">
            </figure>
        </div>
        <div class="text-font">
            Lorem ipsum dolor sit amet,consectetur adipiscing elit,send do eiusmod tempor incididunt ut labore et
            dolore magna aliqua.Quis ipsum suspendisse ultrices gravida.Risus commodo viverra maecenas accumsan lacus
            vel facilisis.
        </div>
        <div class="skills"><img src="images/skills.png"></div>
    </div>

    <div class="cm4 right">
        <div class="grid">
            <figure>
                <img class="img-responsive" src="images/pexels-skitterphoto-63897.png">
            </figure>
        </div>
        <div class="text-font">
            Lorem ipsum dolor sit amet,consectetur adipiscing elit,send do eiusmod tempor incididunt ut labore et
            dolore magna aliqua.Quis ipsum suspendisse ultrices gravida.Risus commodo viverra maecenas accumsan lacus
            vel facilisis.
        </div>
        <div class="skills"><img src="images/parent.png"></div>

    </div>
</div>

<div class="container adv">
    <img src="images/partenrs.png">
</div>

<div class="container">
    <div class="cm4">
        <div class="grid">
            <figure>
                <img class="img-responsive" src="images/yifei-chen-QWsdUMj8amc-unsplash.png">
            </figure>
        </div>
        <div class="text-font">
            Lorem ipsum dolor sit amet,consectetur adipiscing elit,send do eiusmod tempor incididunt ut labore et
            dolore magna aliqua.Quis ipsum suspendisse ultrices gravida.Risus commodo viverra maecenas accumsan lacus
            vel facilisis.
        </div>
    </div>
    <div class="cm4">
        <div class="grid">
            <figure>
                <img class="img-responsive" src="images/ross-bonander-mRg4DgW8dZg-unsplash.png">
            </figure>
        </div>
        <div class="text-font">
            Lorem ipsum dolor sit amet,consectetur adipiscing elit,send do eiusmod tempor incididunt ut labore et
            dolore magna aliqua.Quis ipsum suspendisse ultrices gravida.Risus commodo viverra maecenas accumsan lacus
            vel facilisis.
        </div>
    </div>
    <div class="cm4">
        <div class="grid">
            <figure>
                <img class="img-responsive" src="images/pexels-саша-лазарев-6679187.png">
            </figure>
        </div>
        <div class="text-font">
            Lorem ipsum dolor sit amet,consectetur adipiscing elit,send do eiusmod tempor incididunt ut labore et
            dolore magna aliqua.Quis ipsum suspendisse ultrices gravida.Risus commodo viverra maecenas accumsan lacus
            vel facilisis.
        </div>
    </div>
</div>
<div class="container join">
    <div class="j">
        <img src="images/join.png">
    </div>
</div>
<div class="container adv">
    <img src="images/membership.png">
</div>
<div class="container text-font">
    Lorem ipsum dolor sit amet,consectetur adipiscing elit,send do eiusmod tempor incididunt ut labore et
    dolore magna aliqua.Quis ipsum suspendisse ultrices gravida.Risus commodo viverra maecenas accumsan lacus
    vel facilisis.
</div>

<div class="container link">
    <ul>
        <li><img src="images/newlogo.png"></li>
        <li><img src="images/logo.png"></li>
        <li><img src="images/newlogo.png"></li>
        <li><img src="images/OWHA-Logo-300x196.png"></li>
        <li><img src="images/OWHA-Logo-300x196.png"></li>
        <li><img src="images/OWHA-Logo-300x196.png"></li>
        <li><img src="images/OWHA-Logo-300x196.png"></li>
    </ul>
</div>
<?php
    $title = 'Login';
    include_once 'templates/footer.php';
