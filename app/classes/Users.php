<?php


class Users
{
    public function __construct()
    {
        $this->link = mysqli_connect('localhost', 'root', '', 'price_now_bd');
        //$this->link = mysqli_connect('192.168.10.5', 'pricenow_root', 'J@hir467350', 'pricenow_pricenowbd', '3306');
    }

    public function userRegistration($data)
    {
        if ($data['user_password'] != $data['cf_user_password']) {
            $message = "Password and Confirm Password Does not Match!!";
            return $message;
        } else {
            $sql = "SELECT * FROM new_users WHERE bd_no='$data[bd_no]'";
            if (mysqli_query($this->link, $sql)) {
                $queryResult = mysqli_query($this->link, $sql);
                $userInfo = mysqli_fetch_assoc($queryResult);
                if ($userInfo['bd_no'] == $data['bd_no']) {
                    $message = "User already exists!";
                    return $message;
                } else {
                    $sql = "INSERT INTO users(user_name,bd_no,password)
                          VALUES ('$data[full_name]','$data[bd_no]','$data[user_password]')";
                    if (mysqli_query($this->link, $sql)) {
                        $message = "User Registration success. Please Login.";
                        $_SESSION['message'] = $message;
                        return $message;
                        //header('Location: index.php');
                    } else {
                        die('User Registration Query Error : ' . mysqli_error($this->link));
                    }
                }
            } else {
                die('User Check Error : ' . mysqli_error($this->link));
            }
        }
    }

    public function userResetPassword($data)
    {
        $sql = "SELECT * FROM new_users WHERE bd_no='$_SESSION[bd_no]'";
        $queryResult = mysqli_query($this->link, $sql);

        if (mysqli_num_rows($queryResult)>0) {
            $sql = "UPDATE new_users SET
            password='$data[user_password]'
            WHERE bd_no='$_SESSION[bd_no]'";
            if (mysqli_query($this->link, $sql)) {
                $_SESSION['message'] = "Password changed Successfully! <br> Pl login again with new password.";
                $this->adminLogout();
                header('Location: ../index.php');
            } else {
                die('Password Reset Error : ' . mysqli_error($this->link));
            }
        } else {
            $message = "User Svc No not found.<br> Please contact Dte AI(3050,01769993050) if you are not a registered!";
            return $message;
        }
    }

    public function adminLoginCheck()
    {
        $sql = "SELECT * FROM users WHERE email='$_POST[email]'";
        if (mysqli_query($this->link, $sql)) {
            $queryResult = mysqli_query($this->link, $sql);
            if (mysqli_num_rows($queryResult) > 0) {
                $userInfo = mysqli_fetch_assoc($queryResult);
                if ($_POST['password'] == $userInfo['password']) {
                    session_start();
                    $_SESSION['user_id'] = $userInfo['id'];
                    $_SESSION['full_name'] = $userInfo['full_name'];
                    $_SESSION['user_role'] = $userInfo['user_role'];
                    header('location:../../admin/index.php');
                    $message = "Login Successful.";
                } else {
                    $message = "Password is not correct!<br> Please reset your password.";
                }
            } else {
                $message = "You are not registered! <br> Please Register!";
            }
        }
        else {
            die('Login Query Problem : ' . mysqli_error($this->link));
        }
        return $message;
    }

    public function adminLogout()
    {
        session_destroy();
        header('location: ../../admin/index.php');
        $message = "Logged out successfully.";
        return $message;
    }

}