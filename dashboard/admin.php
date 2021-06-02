<?php
  require '../include/config.php';
  session_start();
  if (isset($_SESSION['log_email'])){
    $sender_id = $_SESSION['sender_id'];
    if (isset($_POST['receiver_id'])) {          
        if ( !empty( $_POST['csrf_token'] ) ) {
            if( checkToken( $_POST['csrf_token'], 'protectedForm' ) ) {
                $receiver_id = $_POST['receiver_id'];               
                $permission = $_POST['permission']; 
                $receiver_email = $_POST['receiver_email'];
                switch ($permission) {
                    case '3':
                        $assignedPsermission = 'Client';
                        break;
                    case '4':
                        $assignedPsermission = 'Data Entry';
                        break;
                    case '5':
                        $assignedPsermission = 'Manager';
                        break;
                    default: 
                        $assignedPsermission = 'New User';
                        break;
                }


              $sql1 = "UPDATE user SET role='$permission' WHERE id='$receiver_id'";
                if ($conn->query($sql1) === TRUE) {

                    $sender_email = $_SESSION['log_email'];                   
                    //email part
                    $emailFrom = $sender_email;
                    $reply = $sender_email;
                    $to = $receiver_email;
                    $subject = "You Permission Changed.";
                    
                    $message = '<body >
                        <div style="width:500px; margin:10px auto; background:#f1f1f1; border:1px solid #ccc">
                            <table  width="100%" border="0" cellspacing="5" cellpadding="10">
                                <tr>
                                    <td style="font-size:14px; color:#323232">Your Permission is '.$assignedPsermission.'</td>
                                    <td style="font-size:14px; color:#323232">Please contact to administrator.<a href = "mailto:'.$sender_email.'>'.$sender_email.'</a>"</td>
                                </tr>                                                                       
                            </table>
                        </div>
                    </body>
                    ';
                    
                    $headers = "From: " . $emailFrom . "\r\n";
                    $headers .= "Content-type: text/html; charset=UTF-8" . "\r\n";
                    // email send function
                    mail($to,$subject,$message,$headers);

                    echo "<script>
                            history.go(-1);
                        </script>";

                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
            }
            else{
              echo "<script>
              alert('Invalid Access!');
              history.go(-1);
              </script>";
            }
        }
    }
    else if(isset($_POST['user_id']))
    {      
        if ( !empty( $_POST['csrf_token'] ) ) {
            if( checkToken( $_POST['csrf_token'], 'protectedForm' ) ) {
                $user_id = $_POST['user_id'];

                
                $sql3 = "DELETE FROM user WHERE id = '$user_id'";
                if ($conn->query($sql3) === TRUE) {
                    echo "<script>
                        history.go(-1);
                        </script>";

                  } else {
                    echo "Error: " . $sql3 . "<br>" . $conn->error;
                  }
               
            }
            else{
              echo "<script>
              alert('Invalid Access!');
              history.go(-1);
              </script>";
            }

        }
    }
    else if(isset($_POST['reset_id'])){
        if ( !empty( $_POST['csrf_token'] ) ) {
            if( checkToken( $_POST['csrf_token'], 'protectedForm' ) ) {
                $reset_id = $_POST['reset_id'];
                $new_pass = $_POST['new_pass'];
                $password = sha1($new_pass);

                
                $sql3 = "UPDATE user SET user_password='$password', origin_password = '$new_pass' WHERE id='$reset_id'";
                if ($conn->query($sql3) === TRUE) {
                    echo "<script>
                        history.go(-1);
                        </script>";

                  } else {
                    echo "Error: " . $sql3 . "<br>" . $conn->error;
                  }
               
            }
            else{
              echo "<script>
              alert('Invalid Access!');
              history.go(-1);
              </script>";
            }

        }
    }
    else{
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin Page</title>
    <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="../assets/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="../assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/main.css">
</head>

<body id="page-top">

    <div id="wrapper">

        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Admin</div>
            </a>         

            <hr class="sidebar-divider">

            <li class="nav-item active">
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>User List</span>
                </a>
            </li>
            <hr class="sidebar-divider">
            <li class="nav-item">
                <a class="nav-link" href="adminTable.php">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Admin Page</span>
                </a>
            </li>

            <hr class="sidebar-divider">

            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>

        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small user_name">
                                    <?php echo $_SESSION['log_name'] ?>
                                </span>
                                <img class="img-profile rounded-circle" src="../assets/img/avatar.jpg">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">

                                <a class="dropdown-item" href="../logout.php" data-toggle="modal"
                                    data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                </nav>

                <div class="container-fluid">
                    <div class="card shadow mb-4 registerd_card">
                        <div class="card-header py-3">
                            <h3 class="m-0 font-weight-bold text-primary">Registered Users</h3>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered text-center" id="dataTable" width="100%"
                                    cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>
                                                Permission
                                            </th>       
                                            <th>Password</th>                                    
                                            <th></th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                        <?php
                                            $sql = "SELECT * FROM user WHERE role != 1";
                                            $result = $conn->query($sql);

                                            if ($result->num_rows > 0) {
                                                while($row = $result->fetch_assoc()) {
                                                    switch ($row['role']) {
                                                        case 3:
                                                            $seted_permission = 'Client';
                                                          break;
                                                        case 4:
                                                            $seted_permission = 'Data Entry';
                                                          break;
                                                        case 5:
                                                            $seted_permission = 'Manager';
                                                          break;
                                                        default:
                                                            $seted_permission = 'New User';
                                                      }
                                                    echo "                                                    
                                                        <tr>
                                                            <td>".$row['user_name']."</td>
                                                            <td>".$row['user_email']."</td>
                                                            <td>
                                                               ".$seted_permission."
                                                            </td> 
                                                            <td>".$row['origin_password']."</td>
                                                            <td>
                                                                <a href='#' class='btn btn-success btn-circle btn-sm modal-btn1 mx-2' data-toggle='modal' data-target='#inviteModal' data-id=".$row['id']." data-email = ".$row['user_email']." >
                                                                    <span class='icon'>
                                                                        <i class='fas fa-flag'></i>
                                                                    </span>                                                                   
                                                                </a>
                                                                <a href='#' class='btn btn-warning btn-circle btn-sm modal-btn2 mx-2' data-toggle='modal' data-target='#resetModal' data-id=".$row['id']." data-email = ".$row['user_email']." >
                                                                    <span class='icon'>
                                                                        <i class='fas fa-key'></i>
                                                                    </span>                                                                   
                                                                </a>
                                                                <a href='' class='btn btn-danger btn-circle btn-sm delete_btn' data-toggle='modal' data-target='#rejectModal' data-id=".$row['id']." >
                                                                    <i class='fas fa-trash'></i>
                                                                </a>   
                                                            </td>                                                       
                                                        </tr>
                                                    ";
                                                }}
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; 2021</span>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="../logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="inviteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content invite_card">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Create the Permission</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post" class="invitation_form">
                        <input type="hidden" name="receiver_id" id="receiver_id">
                        <input type="hidden" name="receiver_email" id="receiver_email">
                        <input type="hidden" name="csrf_token" value="<?php echo generateToken('protectedForm'); ?>" />
                       
                        <div class="form-group">
                            <label for="permission">Select Permission</label>
                            <select name="permission" id="permission" class='form-control'> 
                                <option value="3">Client</option>
                                <option value="4">Data Entry</option>                                
                                <option value="5">Manager</option>
                            </select>
                        </div>
                       
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary sendInvite_btn" name="sendInvite">Set Permission</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="rejectModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete User</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post" class="delete_form">
                        <input type="hidden" name="user_id" id="user_id">
                        <input type="hidden" name="csrf_token" value="<?php echo generateToken('protectedForm'); ?>" />                       
                        <label for="">Are you sure delete this user?</label>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary delete_user" name="delete_user">Delete</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="resetModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Reset Password</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post" class="reset_form">
                        <input type="hidden" name="reset_id" id="reset_id">
                        <input type="hidden" name="csrf_token" value="<?php echo generateToken('protectedForm'); ?>" />                       
                        <div class="form-group">
                            <label for="new_pass">New Password</label>
                            <input type="password" name="new_pass" id="new_pass" class="form-control new_pass" required>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button class="btn btn-primary reset_btn" name="reset_btn">Reset Password</button>
                </div>
            </div>
        </div>
    </div>

    <?php
    }
}
else {
  echo "<script>
  alert('Invalid Access!');
  history.go(-1);
  </script>";
} ?>

    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="../assets/js/sb-admin-2.min.js"></script>
    <script src="../assets/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="../assets/js/demo/datatables-demo.js"></script>
    <script>
        $(document).ready(function() {

            var weddingBack = "../assets/img/wedding.jpg";
            var birthdayBack = "../assets/img/birthday.jpg";
            var eventBack = "../assets/img/event.jpg";

            $('.modal-btn1').click(function() {
                var receiver_id = $(this).data('id');
                var receiver_email = $(this).data('email');
                $('#receiver_id').val(receiver_id);
                $('#receiver_email').val(receiver_email);
            });

            $('.sendInvite_btn').click(function() {
                $('.invitation_form').submit();
            });

            $('.delete_btn').click(function() {
                var user_id = $(this).data('id');
                $('#user_id').val(user_id);
            })

            $('.delete_user').click(function() {           
                $('.delete_form').submit();
            })

            $('.modal-btn2').click(function(){
                var reset_id = $(this).data('id');
                $('#reset_id').val(reset_id);
            });

            $('.reset_btn').click(function(){
                $('.reset_form').submit();
            })
    
        })
    </script>

</body>

</html>