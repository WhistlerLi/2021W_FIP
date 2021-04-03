<?php
    $title = 'Login';
    include_once 'templates/header.php';

    if(isset($_SESSION['id']) && $_SESSION['type_user'] == 0){
        header('location: admin/admin_dashboard.php');
    }

    if(isset($_POST['login'])){
        $check_user = check_user($_POST['email'],$_POST['password']);
        if($check_user){
            if(intval($_SESSION['accepted']) == 0){
                echo '
                <div class="alert alert-success alert-dismissible fade show" role="alert" style="width:500px;margin: auto;">
                    <strong>You Account not yet activated</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>';
            }else{
                header('location: admin/admin_dashboard.php');
            }
        }
    }
?>

<div class="container-fluid">
    <div class="mx-auto" style="width:400px;margin:40px 0px 150px 0px;">
        <form action="login.php" method="POST">
            <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Email" required>
                <?php
                    if(isset($check_user) && !$check_user){
                        echo '<label class="text-danger">Invalid email address/password.</label>';
                    }
                ?>
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>
            <button type="submit" class="btn btn-success" name="login">Login</button>
        </form>
    </div>
</div>

<?php
    include_once 'templates/footer.php';
?>