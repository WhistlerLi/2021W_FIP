<?php
    $title = 'Dashboard';
    include_once 'templates/header.php';
?>

        <li class="breadcrumb-item"><a href="#">Users</a></li>
    </ol>
</nav>

<div class="row">
    <div class="col-xl-4 col-sm-6 mb-3">
        <a href="admin_createuser.php" class="card text-white bg-primary o-hidden h-100">
            <div class="card-body">
                <div class="mr-5">
                    <svg style="margin-bottom:-2px" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16">
                        <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                        <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                    </svg> 
                    Add new user
                </div>
            </div>
        </a>
    </div>
</div>

<div class="block-header ml-2">
    <table class="table mt-2">
        <thead>
            <tr>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Email Address</th>
                <th>Role</th>
                <th>Action</th>
            </tr> 
        </thead>
        <tbody>
            <?php
            $users = users();
            foreach($users as $user){
                echo "<tr>";
                    echo "<td>". $user['firstname'] ."</td>";
                    echo "<td>". $user['lastname'] ."</td>";
                    echo "<td>". $user['email'] ."</td>";
                    echo "<td>". type_user($user['type_user']) ."</td>";
                    if($user['id'] != $_SESSION['id']){
                        echo '<td>';
                            if(!$user['accepted'] && $user['type_user'])
                                echo '<a  class="pr-2" href=\'admin_acceptuser.php?id='. $user["id"] .'\' onclick="return confirm(\'Are you sure that you want to accept this user ?\');" style="color:green">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                            <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z"/>
                                        </svg>
                                    </a>';
                            else
                                echo '<a class="pr-4"></a>';
                            echo '<a class="pl-1 pr-3" href=\'admin_edituser.php?id='. $user["id"] .'\' style="color:green">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                        <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5L13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175l-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                    </svg>
                                </a>
                                <a href=\'admin_deleteuser.php?id='. $user["id"] .'\' onclick="return confirm(\'Are you sur that you want to delete this user ?\');" style="color:red">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-x-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6.146-2.854a.5.5 0 0 1 .708 0L14 6.293l1.146-1.147a.5.5 0 0 1 .708.708L14.707 7l1.147 1.146a.5.5 0 0 1-.708.708L14 7.707l-1.146 1.147a.5.5 0 0 1-.708-.708L13.293 7l-1.147-1.146a.5.5 0 0 1 0-.708z"/>
                                    </svg>
                                </a>
                            </td>';
                    }else{
                        echo '<td>-</td>';
                    }
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>

<?php
    include_once 'templates/footer.php';
?>