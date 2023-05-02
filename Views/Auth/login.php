<?php
require_once(__DIR__ . "/../../Controllers/AuthController.php");
require_once(__DIR__ . "/../../../Learning-Management-System/Models/User.php");

$ErrorMessage = "";

if (isset($_POST["email"]) && isset($_POST["password"])) {
    if (!empty($_POST["email"]) && !empty($_POST["password"])) {
        $user = new User();
        $auth = new \Controllers\AuthController();
        $user->setEmail($_POST["email"]);
        $user->SetPassword($_POST["password"]);
        if (!$auth->login($user)) {
            if (!isset($_SESSION["UserID"])) {
                session_start();
            }
            $ErrorMessage = $_SESSION["ErrorMessage"];
        }
        else
            if (!isset($_SESSION["UserID"])) {
                session_start();
            }
            if ($_SESSION["UserID"] >= 0 && $_SESSION["UserID"] <= 1000)
                header("location: ../Admin/dashboard.php");
            elseif ($_SESSION["UserID"] > 1000 && $_SESSION["UserID"] <= 2000)
                header("location: ../Mentor/dashboard.php");
            else
            header("location: ../Student/dashboard.php");
    }
    else
        $ErrorMessage = "Please Fill All Fields!";

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login - LMS</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="../assets/fonts/fontawesome-all.min.css">
</head>

<body class="bg-gradient-primary">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9 col-lg-12 col-xl-10">
                <div class="card shadow-lg o-hidden border-0 my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-flex">
                                <div class="flex-grow-1 bg-login-image"
                                    style="background-image: url(&quot;../assets/img/dogs/image3.jpeg&quot;);"></div>
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h4 class="text-dark mb-4">Welcome Back!</h4>
                                    </div>

                                    <?php
                                        if ($ErrorMessage != "") {
                                            ?>
                                            <div class="card text-white bg-danger shadow">
                                                <div class="card-body">
                                                    <p class="m-0"><?php echo $ErrorMessage ?></p>
                                                </div>
                                            </div>
                                            <?php
                                        }
                                    ?>



                                    <form class="user" action="login.php" method="POST">
                                        <div class="mb-3"><input class="form-control form-control-user" type="email"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Enter Email Address..." name="email"></div>
                                        <div class="mb-3"><input class="form-control form-control-user" type="password"
                                                id="exampleInputPassword" placeholder="Password" name="password"></div>
                                        <div class="mb-3">
                                            <div class="custom-control custom-checkbox small">
                                                <div class="form-check"><input
                                                        class="form-check-input custom-control-input" type="checkbox"
                                                        id="formCheck-1"><label
                                                        class="form-check-label custom-control-label"
                                                        for="formCheck-1">Remember Me</label></div>
                                            </div>
                                        </div><button class="btn btn-primary d-block btn-user w-100"
                                            type="submit">Login</button>
                                        <hr><a class="btn btn-primary d-block btn-google btn-user w-100 mb-2"
                                            role="button"><i class="fab fa-google"></i>&nbsp; Login with Google</a><a
                                            class="btn btn-primary d-block btn-facebook btn-user w-100" role="button"><i
                                                class="fab fa-facebook-f"></i>&nbsp; Login with Facebook</a>
                                        <hr>
                                    </form>
                                    <div class="text-center"><a class="small" href="forgot-password.html">Forgot
                                            Password?</a></div>
                                    <div class="text-center"><a class="small" href="register.html">Create an
                                            Account!</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../assets/js/bs-init.js"></script>
    <script src="../assets/js/theme.js"></script>
</body>

</html>