<?php
require('koneksi.php');

session_start();
$error = '';
$validate = '';

if( isset($_SESSION['email']) ) header('Location: index.php');

if( isset($_POST['submit']) ){
        $nama = stripslashes($_POST['nama']);
        $nama = mysqli_real_escape_string($con, $nama);

        $email = stripslashes($_POST['email']);
        $email = mysqli_real_escape_string($con, $email);

        $password = stripslashes($_POST['password']);
        $password = mysqli_real_escape_string($con, $password);

        $repassword = stripslashes($_POST['repassword']);
        $repassword = mysqli_real_escape_string($con, $repassword);
        
        if(!empty(trim($nama)) && !empty(trim($password)) && !empty(trim($repassword))){
            if($password == $repassword){
                if( cek_nama($email,$con) == 0 ){
                    $pass  = password_hash($password, PASSWORD_DEFAULT);
                    $query = "INSERT INTO user (nama,email,password) VALUES ('$nama','$email','$pass')";
                    $result   = mysqli_query($con, $query);
                    if ($result) {
                        $_SESSION['email'] = $email;
                        
                        header('Location: index.php');
                    } else {
                        $error =  'Register User Gagal !!';
                    }
                }else{
                        $error =  'Email sudah terdaftar !!';
                }
            }else{
                $validate = 'Password tidak sama !!';
            }
        }else {
            $error =  'Data tidak boleh kosong !!';
        }
    }
    function cek_nama($email,$con){
        $email = mysqli_real_escape_string($con, $email);
        $query = "SELECT * FROM user WHERE email = '$email'";
        if( $result = mysqli_query($con, $query) ) return mysqli_num_rows($result);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Umara - Register</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 offset-lg-3">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Register</h1>
                                    </div>
                                    <?php if($error != ''){ ?>
                                        <div class="alert alert-danger" role="alert"><?= $error; ?></div>
                                    <?php } ?>
                                    <form class="user" method="post" action="register.php">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" placeholder="Nama Lengkap" name="nama">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Email" name="email">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password" name="password">
                                            <?php if($validate != '') {?>
                                                <p class="text-danger small"><?= $validate; ?></p>
                                            <?php }?>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Konfirmasi Password" name="repassword">
                                            <?php if($validate != '') {?>
                                                <p class="text-danger small"><?= $validate; ?></p>
                                            <?php }?>
                                        </div>
                                        <button type="submit" name="submit" class="btn btn-primary btn-user btn-block">
                                            Register
                                        </button>
                                        <hr>
                                    </form>
                                    <div class="text-center">
                                        <p class="small">Sudah punya akun? <a href="login.php">Login</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
</body>
</html>