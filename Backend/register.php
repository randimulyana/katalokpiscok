<?php 
 
include 'config/koneksi.php';
 
error_reporting(0);
 
session_start();
 
if (isset($_SESSION['username'])) {
    header("Location: index.php");
}
 
if (isset($_POST['submit'])) {
    $username  = $_POST['username'];
    $email     = $_POST['email'];
    $password  = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);
 
    if ($password == $cpassword) {
        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($koneksi, $sql);
        if (!$result->num_rows > 0) {
            $sql = "INSERT INTO users (username, email, password)
                    VALUES ('$username', '$email', '$password')";
            $result = mysqli_query($koneksi, $sql);
            if ($result) {
                echo "<script>alert('Selamat, pendaftaran berhasil! silahkan login di halamaan login')</script>";
                $username = "";
                $email = "";
                $_POST['password'] = "";
                $_POST['cpassword'] = "";
            } else {
                echo "<script>alert('terjadi kelasalah di codingnya.')</script>";
            }
        } else {
            echo "<script>alert('email kamu sudah terdaftar sebelumnya.')</script>";
        }
         
    } else {
        echo "<script>alert('Password tidak sesuai')</script>";
    }
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

    <title>User - Register</title>

    <!-- Custom fonts for this template-->
    <link href="../assets/backend/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../assets/backend/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>

                       
                        <form action="" method="post" class="user">
                                <div class="form-group">
                                    <input type="text" name="username" class="form-control form-control-user" value="<?php echo $username; ?>"
                                        placeholder="Username" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" value="<?php echo $email; ?>" class="form-control form-control-user"
                                        placeholder="Email Address" required>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" name="password" value="<?php echo $_POST['password']; ?>" class="form-control form-control-user"
                                            placeholder="Password" required>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" class="form-control form-control-user"
                                        placeholder="Repeat Password" required>
                                    </div>
                                </div>
                                <button name="submit" class="btn btn-primary btn-user btn-block">Register</button>
                                

                        </form>

                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.php">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login.php">Already have an account? Login!</a>
                            </div>
                             </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../assets/backend/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/backend/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../assets/backend/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../assets/backend/js/sb-admin-2.min.js"></script>

</body>

</html>