<?php
    $title = "Edit User";
    include_once 'templates/header.php';

    if(isset($_POST['update']))
        $update_user = update_user($_POST["id"],$_POST["firstname"],$_POST["lastname"],$_POST["email"],$_POST["password"],$_POST["type_user"]);

    isset($_POST["id"]) ? $user = read_user($_POST["id"]) : $user = read_user($_GET['id']);
?>

        <li class="breadcrumb-item"><a href="#">Edit User</a></li>
    </ol>
</nav>

<div class="w-100">
    <div class="mt-2 ml-2">
        <?php
            if(isset($update_user))
                if($update_user)
                    echo '<script>alert("Successfully edited");</script>';
                else
                    echo '<script>alert("Error during editing");</script>';
        ?>
    </div>

    <form class="mt-5" action="admin_edituser.php?id=<?php echo $_GET['id']; ?>" method="POST">
        <div class="block-content block-content-full">
            <div class="row items-push">
                <div class="col-lg-10 col-xl-6 offset-lg-3">
                    <div class="form-group">
                        <input type="hidden" required class="form-control" id="id" name="id" value="<?php echo $user['id']; ?>">
                    </div>
                    <div class="form-group">
                        <input type="text" required class="form-control" name="firstname" value="<?php echo $user['firstname']; ?>" placeholder="Firstname">
                    </div>
                    <div class="form-group">
                        <input type="text" required class="form-control" name="lastname" value="<?php echo $user['lastname']; ?>" placeholder="Lastname">
                    </div>
                    <div class="form-group">
                        <input type="email" required class="form-control" name="email" value="<?php echo $user['email']; ?>" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="text" required class="form-control" name="password" value="<?php echo $user['password']; ?>" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <select class="form-control" id="userlevel" name="type_user">
                            <option value="0" <?php if($user['type_user'] == 0) echo 'selected'; ?>>Administrator</option>
                            <option value="1" <?php if($user['type_user'] == 1) echo 'selected'; ?>>Normal User</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success" name="update">Update</button>
                </div>
            </div>
        </div>
    </form>
</div>

<?php
    include_once 'templates/footer.php';
?>