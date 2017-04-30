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
    </head>
    <body>
        <style>
            /*
            #signup_pop_up {
            display: none;
            }

            .navbar-form  {
            width: 80%;
            }
            */
        </style>
        <?php include "navigation.php";?>
        <script>
            $('.signup_a').empty();
            $('#signup_pop_up').css('width', '100px');
        </script>
        <form class="signup_form animate" method="POST">
            <div class="error" id="error">
                <p class="error_msg" id="error_msg"></p>
            </div>
            <div class="logo_close">
                <img src="../images/Logo/blogo.png">
                <p class="logo_title">Blackwhiz</p>
            </div>
            <div class="signup_sns_div" id="signup_sns_div">
                <button class="signup_sns" id="singup_facebook"><i class="icon-facebook"></i>&nbsp;&nbsp;&nbsp;&nbsp;Sign in with Facebook</button>
                <button class="signup_sns" id="signup_tweeter"><i class="icon-twitter"></i>&nbsp;&nbsp;&nbsp;&nbsp;Sign in with Twitter</button>


            </div>
            <div class="signup_container" id="signup_container">
                <input type="text" placeholder="First Name" name="first_name" required>
                <input type="text" placeholder="Last Name" name="last_name" required>
                <input type="email" placeholder="E-mail" name="email" required>
                <input type="password" placeholder="Password" name="password" required>
                <!--            <div align="center" class="g-recaptcha" data-sitekey="6LdKPR4UAAAAAPRj65BmsKlloU-RJ__8BmEaJDm9"></div>-->
                <input type="submit" class="submit" name="submit" value="CREATE ACCOUNT">
                <button type="button" class="cancel">CANCEL</button>
            </div><br />
            <p class="signup_or">Have an account? <a class="open_log_in">Login</a></p>
        </form>


        <?php
        if ($_POST)
        {
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            $date = date("Y-m-d H:i:s");
            $encrypted_password = md5($password);

            if (isset($_POST['submit']))
            {
                if (empty($_POST["first_name"]) || empty($_POST["last_name"]) || empty($_POST["password"]) || empty($_POST["email"])) {
                    echo "<script type='text/javascript'>alert('Please fill out the form!');</script>";
                }

                else {
                    $sql = "SELECT * FROM user_login where email = \"$email\"";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_assoc($result);

                    if ($row) {
                        echo "<script type='text/javascript'>document.getElementById('error').style.display = 'block'; document.getElementById('error_msg').innerHTML = 'E-mail is already taken.<br />Please use another E-mail address.';</script>";
                    }

                    else {
                        $sql = "INSERT INTO user_login (email, password, last_name, first_name, registered_date) VALUES ('" . $email . "', '" . $encrypted_password . "', '" . $last_name . "', '" . $first_name . "' , '" . $date . "')";
                        if (mysqli_query($conn, $sql)) {
                            echo "<script type='text/javascript'>document.getElementById('error').style.display = 'block'; document.getElementById('error_msg').innerHTML = 'User Account Created! You can log in now. <br /><a href=\"https://blackwhiz.com/login.php\" style=\"color: yellow\">LOG IN HERE</a>'; document.getElementById('error').style.backgroundColor = '#2eba61';document.getElementById('error_msg').style.color = 'white';</script>";
                        }

                        else
                        {
                            echo "Error: " . mysqli_error($conn);
                        }
                    }
                }
            }
        }
        ?>
    </body>
</html>

