<?php
session_start();?>
<!DOCTYPE html>
<html>
    <head>
        <title>Blackwhiz</title>
        <link rel="shortcut icon" type="image/png" href="../images/Logo/blogo_transparent.png">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
        <script src="../js/index.js"></script>
        <script src="../js/navigation.js"></script>
        <link rel="stylesheet" href="../css/styles.css">
        <link rel="stylesheet" href="../css/signup.css">
        <link rel="stylesheet" href="../css/acctinfo.css">
    </head>
    <body>

        <!--
<script>
$('.login_a').empty();
$('#login_pop_up').css('width', '100px');
</script>
-->
        <?php include "navigation.php";
        if ($_POST)
        {
            $password = $_POST['password'];
            $email = $_POST['email'];
            $encrypted_password = md5($password);

            if (isset($_POST['submit']))
            {
                if (empty($_POST["password"]) || empty($_POST["email"])) {
                    echo "<script type='text/javascript'>alert('Please fill out the form!');</script>";
                }

                else {
                    $sql = "SELECT * FROM  user_login where email = \"$email\" AND password = \"$encrypted_password\"";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_assoc($result);

                    if ($row) {

                        $_SESSION['user_index'] = $row['user_index'];
                        $_SESSION['logged_in']= true;
                        $_SESSION['email']= $email;
                        $_SESSION['first_name'] = $row['first_name'];
                        $_SESSION['last_name'] = $row['last_name'];
                        //                        $error = "Hello, " . $_SESSION['first_name'] . ".";

                        //                        echo "<script>
                        //                        document.getElementById('error').style.display = 'block'; 
                        //                        document.getElementById('error').style.backgroundColor = '#2eba61'; 
                        //                        document.getElementById('error_msg').style.color = 'white';
                        //                        document.getElementById('error_msg').innerHTML = '$error';
                        //                        </script>";
                    }

                    else {
                        $error = "Wrong credentials.<br />Please try again or register.";
                        echo "<script>
                               $('.error').css('display', 'block');
                                </script>";
                    }
                }
            }
        }


        ?>

        <?php
        if (!isset($_SESSION['logged_in']))
        {?>
        <form class="login_form animate" method="POST">
            <div class="error" id="error">
                <p class="error_msg" id="error_msg"><?php echo $error;?></p>
            </div>
            <div class="logo_close">
                <img src="../images/Logo/blogo.png">
                <p class="logo_title">Blackwhiz</p>
            </div>
            <div class="login_sns_div" id="login_sns_div">
                <button class="signup_sns" id="login_facebook"><i class="icon-facebook"></i>&nbsp;&nbsp;&nbsp;&nbsp;Sign in with Facebook</button>
                <button class="signup_sns" id="login_tweeter"><i class="icon-twitter"></i>&nbsp;&nbsp;&nbsp;&nbsp;Sign in with Twitter</button>
            </div>
            <div class="login_container" id="login_container">
                <input type="email" placeholder="E-mail" name="email" required>
                <input type="password" placeholder="Password" name="password" required>
                <!--            <div align="center" class="g-recaptcha" data-sitekey="6LdKPR4UAAAAAPRj65BmsKlloU-RJ__8BmEaJDm9"></div>-->
                <button type="submit" class="login_submit" name="submit">LOG IN</button>
                <button type="button" class="login_cancel">CANCEL</button>


            </div><br />
            <p class="signup_or">Don't have an account? <a class="open_sign_up">Sign Up</a></p>
        </form>


        <?}

        else {
            $error = "Hello, " . $_SESSION['first_name'] . ".";

            if (isset($_SESSION['error']))
            {
                echo "<div style='color:red; text-align: center; font-size: 20px;'> " .$_SESSION['error'] . "</div>";
                unset($_SESSION['error']);
            }

            if(isset($_SESSION['success']))
            {
                echo "<div style='color:green; text-align: center; font-size: 20px;'> " .$_SESSION['success'] . "</div>";
                unset($_SESSION['success']);
            }

            //            make new page for after log in
            //            <form class = 'logindiv' action="mailer.php" method="post">
        ?>
<!--        <p style="font-size: 50px; margin-top: 130px">Hello </p>-->
<!--        <a style = 'font-size: 18px;' href="logout.php">Log Out</a>-->

        <div class="acct_main_div" id="acct_main_div">
            <div class="acct_sub_div" id="acct_sub_div">
                <div class="profile_pic">
                    <!--                put profile img here            -->
                </div>
                <div class="acct_header">
                    <p class="acct_nickname" id="acct_nickname"><?=$_SESSION['first_name']?> &nbsp; <?=$_SESSION['last_name']?></p>
                </div>
            </div>
        </div>

        <?
        }


        ?>
    </body>
</html>

