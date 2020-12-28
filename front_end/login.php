
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PNB Login</title>
    <link rel="shortcut icon" type="image/x-icon" href="#">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="images/favicon.png">
    <link rel="stylesheet" type="text/css" href="../assets/front_end/login/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/front_end/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/front_end/login/vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="../assets/front_end/login/vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/front_end/login/vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/front_end/login/css/util.css">
    <link rel="stylesheet" type="text/css" href="../assets/front_end/login/css/main.css">
</head>
<body>

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-pic js-tilt" data-tilt>
                <a href="../index.php"><img src="../assets/front_end/login/images/single_logo.png" alt="IMG"></a>
            </div>

            <form class="login100-form validate-form" method="POST" action="">
					<span class="login100-form-title">
						PNB User Login
					</span>

                <div class="wrap-input100 validate-input" data-validate = "User ID required">
                    <input class="input100" type="text" name="uname" placeholder="Email ID">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
					</span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Password is required">
                    <input class="input100" type="password" name="upass" placeholder="Password">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
					</span>
                </div>

                <div class="container-login100-form-btn">
                    <button type="submit" name="login" class="login100-form-btn">Login</button>
                </div>
            </form>
            <div class="container-login100-form-btn">
                <a href="../index.php"><button class="login100-form-btn">Back to site</button></a>
            </div>
        </div>
    </div>
</div>


<script src="../assets/front_end/login/vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="../assets/front_end/login/vendor/bootstrap/js/popper.js"></script>
<script src="../assets/front_end/login/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="../assets/front_end/login/vendor/select2/select2.min.js"></script>
<script src="../assets/front_end/login/vendor/tilt/tilt.jquery.min.js"></script>
<script >
    $('.js-tilt').tilt({
        scale: 1.1
    })
</script>
<script src="../assets/front_end/login/js/main.js"></script>

</body>
</html>