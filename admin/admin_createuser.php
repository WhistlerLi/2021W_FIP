<?php
    $title = "Add User";
    include_once 'templates/header.php';

    if(isset($_POST['add']))
        $add_user = create_user($_POST["firstname"],$_POST["lastname"],$_POST["email"],$_POST["password"],$_POST["type_user"]);
?>

        <li class="breadcrumb-item"><a href="#">Add User</a></li>
    </ol>
</nav>

<div class="w-100">
    <div class="mt-2 ml-2">
        <?php
            if(isset($add_user))
                if($add_user){
                    echo '<script>alert("Successfully added");</script>';
                    send_information(
                        "User Information",
                        "ahmadhussein@gmail.com",
                        $_POST["email"],
                        "Hello ".$_POST['firstname'] ." ". $_POST['lastname'].",<br/> Your email: ".$_POST["email"]."<br/>and the password: ".$_POST["password"]."<br/>Thank you"
                    );
                }
                else
                    echo '<script>alert("Error during adding this user");</script>';
        ?>
    </div>
    <form class="mt-5" action="admin_createuser.php" method="POST">
        <div class="block-content block-content-full">
            <div class="row items-push">
                <div class="col-lg-10 col-xl-6 offset-lg-3">
                    <div class="form-group">
                        <input type="text" required class="form-control" name="firstname" value="" placeholder="Fullname">
                    </div>
                    <div class="form-group">
                        <input type="text" required class="form-control" name="lastname" value="" placeholder="Lastname">
                    </div>
                    <div class="form-group">
                        <input type="email" required class="form-control" name="email" value="" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="text" required class="form-control" name="password" value="" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <select class="form-control" name="type_user">
                            <option value="0">Administrator</option>
                            <option value="1">Normal User</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success" name="add">Add</button>
                </div>
            </div>
        </div>
    </form>
</div>

<?php
    include_once 'templates/footer.php';
?>