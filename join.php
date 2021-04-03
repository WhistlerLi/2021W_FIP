<?php
    $title = 'Join';
    include_once 'templates/header.php';

    if(isset($_POST['join'])){
        $create_user = create_user($_POST['firstname'],$_POST['lastname'],$_POST['email'],$_POST['password'],$user_type=1);
        if($create_user){
            echo '
            <div class="alert alert-success alert-dismissible fade show" role="alert" style="width:500px;margin: auto;">
                <strong>You Account succefully created</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>';
        }
    }
?>

<div class="container-fluid">
    <div class="mx-auto" style="width:400px;margin:40px 0px 150px 0px;">
        <form action="join.php" method="POST">
            <div class="form-group">
                <input type="text" name="firstname" class="form-control" placeholder="Firstname" required>
            </div>
            <div class="form-group">
                <input type="text" name="lastname" class="form-control" placeholder="Lastname" required>
            </div>
            <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Email" required>
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Password" required>
            </div>
            <?php
                if(isset($save_user) && $save_user){
                    echo '<label class="text-danger">We will contact you as soon as posiible.</label>';
                }
            ?>
            <button type="submit" class="btn btn-success" name="join">Join</button>
        </form>
    </div>
</div>

<?php
    include_once 'templates/footer.php';
?>