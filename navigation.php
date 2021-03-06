<?php
session_start();

$config = parse_ini_file('config.ini');
$conn = mysqli_connect('localhost',$config['username'],$config['pw'],$config['db']);
if(!$conn)
    die('Connection Failed'.mysql_error());
?>


<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>-->
<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
<!--<link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">-->
<!--<link rel="stylesheet" href="../css/styles.css">-->
<!--<script src="../js/navigation.js"></script>-->
<!--<link rel="stylesheet" href="../css/signup.css">-->
<!---->
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="https://blackwhiz.com/">
                <img style="display: inline-block" src="../images/Logo/blogo_transparent.png" width="40" height="40" alt="">
                <p style="display: inline-block">Blackwhiz</p>
            </a>
        </div>

        <div class="collapse navbar-collapse" id="myNavbar">

            <form class="navbar-form navbar-left">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="&#xF002;  Search">
                </div>
            </form>

            <ul class="nav navbar-nav navbar-right">
               <li id="signup_pop_up"><a class="signup_a"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Sign Up</a></li>
                <li id="login_pop_up"><a class="login_a"><span class="glyphicon glyphicon-log-in"></span> &nbsp;&nbsp;Login</a></li>

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">Topics
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Video</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Sports</a></li>
                        <li><a href="#">Food & Drink</a></li>
                        <li><a href="#">News</a></li>
                        <li><a href="#">Culture & World</a></li>
                        <li><a href="#">Forum</a></li>
                        <li><a href="#">Submit</a></li>
                    </ul>
                </li>
                <li id="search_category"><a href="category.php"><i class="icon-folder-open"></i>&nbsp;&nbsp;Search By Category</a></li>
            </ul>


            <ul class="nav navbar-nav" id="category">

                <!--------------------------------Equipment--------------------------->
                <li class="dropdown" id="nav_menu">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="nav_menu_main_title">EQUIPMENT
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" id="dropdown_menu1">
                        <li class="nav_menu_li">
                            <div class="nav_menu_li_div">
                                <div class="nav_menu_title_div">
                                    <p class="nav_menu_title">
                                        GUITARS
                                    </p>
                                </div>
                                <div class="nav_menu_ul_div">
                                    <ul class="list-unstyled">
                                        <li><a href="#">Electric Guitars</a></li>
                                        <li><a href="#">Acoustic Guitars</a></li>
                                        <li><a href="#">Acoustric-electric Guitars</a></li>
                                        <li><a href="#">Classical & Nylon-string Guitars</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="nav_menu_li_div">
                                <div class="nav_menu_title_div">
                                    <p class="nav_menu_title">
                                        DRUMS & PERCUSSION
                                    </p>
                                </div>
                                <div class="nav_menu_ul_div">
                                    <ul class="list-unstyled">
                                        <li><a href="#">Drum Sets & Set Components</a></li>
                                        <li><a href="#">Electronic Drums</a></li>
                                        <li><a href="#">Hand Percussion</a></li>
                                        <li><a href="#">Hand Drums</a></li>
                                        <li><a href="#">Concert Percussion</a></li>
                                        <li><a href="#">Marching Percussion</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="nav_menu_li_div">
                                <div class="nav_menu_title_div">
                                    <p class="nav_menu_title">
                                        LIVE SOUND & STAGE
                                    </p>
                                </div>
                                <div class="nav_menu_ul_div">
                                    <ul class="list-unstyled">
                                        <li><a href="#">Monitors, Speakers & Subwoofer</a></li>
                                        <li><a href="#">Power Amplifiers</a></li>
                                        <li><a href="#">Stage & Studio Cables</a></li>
                                        <li><a href="#">PA System</a></li>
                                        <li><a href="#">Powered Mixers</a></li>
                                        <li><a href="#">Lighting Equipment & Accessories</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <li class="nav_menu_li">
                            <div class="nav_menu_li_div">
                                <div class="nav_menu_title_div">
                                    <p class="nav_menu_title">
                                        DJ & ELECTRONIC MUSIC
                                    </p>
                                </div>
                                <div class="nav_menu_ul_div">
                                    <ul class="list-unstyled">
                                        <li><a href="#">DJ Equipment</a></li>
                                        <li><a href="#">Electronic Music</a></li>
                                        <li><a href="#">Karaoke Equipment</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="nav_menu_li_div">
                                <div class="nav_menu_title_div">
                                    <p class="nav_menu_title">
                                        BASS GUITARS
                                    </p>
                                </div>
                                <div class="nav_menu_ul_div">
                                    <ul class="list-unstyled">
                                        <li><a href="#">Electric Basses</a></li>
                                        <li><a href="#">Acoustic & Acoustic-Electric Basses</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="nav_menu_li_div">
                                <div class="nav_menu_title_div">
                                    <p class="nav_menu_title">
                                        RECORDING
                                    </p>
                                </div>
                                <div class="nav_menu_ul_div">
                                    <ul class="list-unstyled">
                                        <li><a href="#">Microphones & Accessories</a></li>
                                        <li><a href="#">Signal Processors</a></li>
                                        <li><a href="#">Studio Monitors</a></li>
                                        <li><a href="#">Audio Interfaces</a></li>
                                        <li><a href="#">Mixers & Accessories</a></li>
                                        <li><a href="#">Multitrack Recorders</a></li>
                                        <li><a href="#">Studio Environment</a></li>
                                        <li><a href="#">Portable Recorders</a></li>
                                        <li><a href="#">Power Conditioners</a></li>
                                        <li><a href="#">Tape Decks</a></li>
                                        <li><a href="#">Mastering Recorders</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <li class="nav_menu_li" id="nav_menu_hide">
                            <div class="nav_menu_li_div">
                                <div class="nav_menu_title_div">
                                    <p class="nav_menu_title">
                                        VST PLUGINS
                                    </p>
                                </div>
                                <div class="nav_menu_ul_div">
                                    <ul class="list-unstyled">
                                        <li><a href="#">Effects Plugins</a></li>
                                        <li><a href="#">Instrument Plugins (VSTi & AU)</a></li>
                                        <li><a href="#">DAW</a></li>
                                        <li><a href="#">Studio Tools Plugins</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="nav_menu_li_div">
                                <div class="nav_menu_title_div">
                                    <p class="nav_menu_title">
                                        AMPLIFIERS
                                    </p>
                                </div>
                                <div class="nav_menu_ul_div">
                                    <ul class="list-unstyled">
                                        <li><a href="#">Effects</a></li>
                                        <li><a href="#">Amplifiers</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="nav_menu_li_div">
                                <div class="nav_menu_title_div">
                                    <p class="nav_menu_title">
                                        KEYBOARD, <br />SYNTHESIZERS & MIDI
                                    </p>
                                </div>
                                <div class="nav_menu_ul_div">
                                    <ul class="list-unstyled">
                                        <li><a href="#">Electronic Keyboards</a></li>
                                        <li><a href="#">Modular Synthesizers</a></li>
                                        <li><a href="#">MIDI</a></li>
                                        <li><a href="#">Digital Pianos</a></li>
                                        <li><a href="#">Organs</a></li>
                                        <li><a href="#">Pianos</a></li>
                                        <li><a href="#">Accordions</a></li>
                                        <li><a href="#">Harpsichords</a></li>
                                        <li><a href="#">Player Pianos</a></li>
                                        <li><a href="#">World Instruments</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <li class="nav_menu_li" id="nav_menu_hide">
                            <div class="nav_menu_li_div">
                                <div class="nav_menu_title_div">
                                    <p class="nav_menu_title">
                                        BAND & ORCHESTRA
                                    </p>
                                </div>
                                <div class="nav_menu_ul_div">
                                    <ul class="list-unstyled">
                                        <li><a href="#">Orchestral Strings</a></li>
                                        <li><a href="#">Woodwinds</a></li>
                                        <li><a href="#">Brass</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="nav_menu_li_div">
                                <div class="nav_menu_title_div">
                                    <p class="nav_menu_title">
                                        WOLRD INSTRUMENTS
                                    </p>
                                </div>
                                <div class="nav_menu_ul_div">
                                    <ul class="list-unstyled">
                                        <li><a href="#">Stringed Instruments</a></li>
                                        <li><a href="#">Wind Instruments</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="nav_menu_li_div">
                                <div class="nav_menu_title_div">
                                    <p class="nav_menu_title">
                                        HEADPHONES
                                    </p>
                                </div>
                                <div class="nav_menu_ul_div">
                                    <ul class="list-unstyled">
                                        <li><a href="#">Headphones</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="nav_menu_li_div">
                                <div class="nav_menu_title_div">
                                    <p class="nav_menu_title">
                                        INSTRUMENT ACCESSORIES
                                    </p>
                                </div>
                                <div class="nav_menu_ul_div">
                                    <ul class="list-unstyled">
                                        <li><a href="#">Guitar & Bass Accessories</a></li>
                                        <li><a href="#">Drum & Percussion Accessories</a></li>
                                        <li><a href="#">General Accessories</a></li>
                                        <li><a href="#">Amplifier Accessories</a></li>
                                        <li><a href="#">Keyboard Accessories</a></li>
                                        <li><a href="#">Orchestral Strings Accessories</a></li>
                                        <li><a href="#">Folk & World Intrument Accessories</a></li>
                                        <li><a href="#">Woodwind Accessories</a></li>
                                        <li><a href="#">Brass Accessories</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <div class="nav_menu_li_view_all">
                            <button class="nav_menu_view_all_button"><a href="category.php">View All</a></button>
                        </div>
                    </ul>
                </li>

                <!--------------------------------MUSIC------------------------------->
                <li class="dropdown" id="nav_menu">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="nav_menu_main_title">MUSIC
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu" id="dropdown_menu2">
                        <li class="nav_menu_li">
                            <div class="nav_menu_li_div">
                                <div class="nav_menu_title_div">
                                    <p class="nav_menu_title">
                                        SUBGENRES
                                    </p>
                                </div>
                                <div class="nav_menu_ul_div">
                                    <ul class="list-unstyled">
                                        <li><a href="#">Alternative Hip Hop</a></li>
                                        <li><a href="#">Baltimore Club</a></li>
                                        <li><a href="#">Bounce</a></li>
                                        <li><a href="#">Brick City Club</a></li>
                                        <li><a href="#">Chicano Rap</a></li>
                                        <li><a href="#">Christian Hip Hop</a></li>
                                        <li><a href="#">Conscious Hip Hop</a></li>
                                        <li><a href="#">Experimental Hip Hop</a></li>
                                        <li><a href="#">Freestyle Rap</a></li>
                                        <li><a href="#">Gangsta Rap</a></li>
                                        <li><a href="#">Horrorcore</a></li>
                                        <li><a href="#">Instrumental Hip Hop</a></li>
                                        <li><a href="#">Jerkin'</a></li>
                                        <li><a href="#">Mafioso Rap</a></li>
                                        <li><a href="#">Miami Bass</a></li>
                                        <li><a href="#">Native American Hip Hop</a></li>
                                        <li><a href="#">Nerdcore</a></li>
                                        <li><a href="#">Political Hip Hop</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <li class="nav_menu_li" style="width: 290px;">
                            <div class="nav_menu_li_div">
                                <div class="nav_menu_title_div">
                                    <p class="nav_menu_title" style="text-align: center;">
                                        FUSION GENRES
                                    </p>
                                </div>
                                <div class="nav_menu_ul_div" style="float:left; width: 128px; border: none; text-align: right; margin: 0;">
                                    <ul class="list-unstyled">
                                        <li><a href="#">Australian Hip Hop</a></li>
                                        <li><a href="#">Country Rap</a></li>
                                        <li><a href="#">Crunk</a></li>
                                        <li><a href="#">Cumbia Rap</a></li>
                                        <li><a href="#">Ghettotech</a></li>
                                        <li><a href="#">Glitch Hop</a></li>
                                        <li><a href="#">Grebo</a></li>
                                        <li><a href="#">Hip Hip Soul</a></li>
                                        <li><a href="#">Hip House</a></li>
                                        <li><a href="#">Hiplife</a></li>
                                        <li><a href="#">Hyphy</a></li>
                                        <li><a href="#">Industrial Hip Hop</a></li>
                                        <li><a href="#">Jazz Rap</a></li>
                                    </ul>
                                </div>
                                <div class="nav_menu_ul_div" style="float:left; width: 150px">
                                    <ul class="list-unstyled">
                                        <li><a href="#">Low Bap</a></li>
                                        <li><a href="#">Merenrap</a></li>
                                        <li><a href="#">Neo Soul</a></li>
                                        <li><a href="#">New Jack Swing</a></li>
                                        <li><a href="#">Nu Metal</a></li>
                                        <li><a href="#">Nyuorican Rap</a></li>
                                        <li><a href="#">Psychedelic Hip Hop</a></li>
                                        <li><a href="#">Ragga</a></li>
                                        <li><a href="#">Rap Metal</a></li>
                                        <li><a href="#">Rap Opera</a></li>
                                        <li><a href="#">Rap Rock</a></li>
                                        <li><a href="#">Reggaeton</a></li>
                                        <li><a href="#">Wonky</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <li class="nav_menu_li" style="width: 170px" id="nav_menu_hide">
                            <div class="nav_menu_li_div">
                                <div class="nav_menu_title_div">
                                    <p class="nav_menu_title">
                                        REGIONAL SCENES
                                    </p>
                                </div>
                                <div class="nav_menu_ul_div">
                                    <ul class="list-unstyled">
                                        <li><a href="#">Atlanta Hip Hop</a></li>
                                        <li><a href="#">British Hip Hop</a></li>
                                        <li><a href="#">Canadian Hip Hop</a></li>
                                        <li><a href="#">Desi Hip Hop</a></li>
                                        <li><a href="#">East Coast Hip Hop</a></li>
                                        <li><a href="#">French Hip Hop</a></li>
                                        <li><a href="#">Japenese Hip Hop</a></li>
                                        <li><a href="#">Kenyan Hip Hop</a></li>
                                        <li><a href="#">Korean Hip Hop</a></li>
                                        <li><a href="#">Midwest Hip Hop</a></li>
                                        <li><a href="#">Romanian Hip Hop</a></li>
                                        <li><a href="#">Southern Hip Hop</a></li>
                                        <li><a href="#">Turkish Hip Hop</a></li>
                                        <li><a href="#">Weat Coast Hip Hop</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <div class="nav_menu_li_view_all">
                            <button class="nav_menu_view_all_button"><a href="category.php">View All</a></button>
                        </div>
                    </ul>
                </li>

                <!--------------------------------FASHION----------------------------->
                <li class="dropdown" id="nav_menu">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="nav_menu_main_title">FASHION
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right" id="dropdown_menu3">
                        <li class="nav_menu_li">
                            <div class="nav_menu_li_div">
                                <div class="nav_menu_title_div">
                                    <p class="nav_menu_title">
                                        Hats
                                    </p>
                                </div>
                                <div class="nav_menu_ul_div">
                                    <ul class="list-unstyled">
                                        <li><a href="#"></a></li>
                                        <li><a href="#"></a></li>
                                        <li><a href="#"></a></li>
                                        <li><a href="#"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <div class="nav_menu_li_view_all">
                            <button class="nav_menu_view_all_button"><a href="category.php">View All</a></button>
                        </div>
                    </ul>
                </li>

                <!--------------------------------CLUBS------------------------------->
                <li class="dropdown" id="nav_menu">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="nav_menu_main_title">CLUBS
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right" id="dropdown_menu4">
                        <li class="nav_menu_li">
                            <div class="nav_menu_li_div">
                                <div class="nav_menu_title_div">
                                    <p class="nav_menu_title">
                                        NORTH AMERICA
                                    </p>
                                </div>
                                <div class="nav_menu_ul_div">
                                    <ul class="list-unstyled">
                                        <li><a href="#">U.S. West Coast</a></li>
                                        <li><a href="#">U.S. East Coast</a></li>
                                        <li><a href="#">Canada</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="nav_menu_li_div">
                                <div class="nav_menu_title_div">
                                    <p class="nav_menu_title">
                                        SOUTH AMERICA
                                    </p>
                                </div>
                                <div class="nav_menu_ul_div">
                                    <ul class="list-unstyled">
                                        <li><a href="#">Mexico</a></li>
                                        <li><a href="#">Brzail</a></li>
                                        <li><a href="#">Argentina</a></li>
                                        <li><a href="#">Chile</a></li>
                                        <li><a href="#">Peru</a></li>
                                        <li><a href="#">Colombia</a></li>
                                        <li><a href="#">Ecuador</a></li>
                                        <li><a href="#">Uruguay</a></li>
                                        <li><a href="#">Chile</a></li>
                                        <li><a href="#">Venezuela</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <li class="nav_menu_li">
                            <div class="nav_menu_li_div">
                                <div class="nav_menu_title_div">
                                    <p class="nav_menu_title">
                                        EUROPE
                                    </p>
                                </div>
                                <div class="nav_menu_ul_div">
                                    <ul class="list-unstyled">
                                        <li><a href="#">Spain</a></li>
                                        <li><a href="#">France</a></li>
                                        <li><a href="#">Italy</a></li>
                                        <li><a href="#">Portugal</a></li>
                                        <li><a href="#">Switzerland</a></li>
                                        <li><a href="#">Germany</a></li>
                                        <li><a href="#">Poland</a></li>
                                        <li><a href="#">United Kingdom</a></li>
                                        <li><a href="#">Denmark</a></li>
                                        <li><a href="#">Sweden</a></li>
                                        <li><a href="#">Norway</a></li>
                                        <li><a href="#">Finland</a></li>
                                        <li><a href="#">Greece</a></li>
                                        <li><a href="#">Russia</a></li>
                                        <li><a href="#">Netherlands</a></li>
                                        <li><a href="#">Turkey</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <li class="nav_menu_li" id="nav_menu_hide">
                            <div class="nav_menu_li_div">
                                <div class="nav_menu_title_div">
                                    <p class="nav_menu_title">
                                        ASIA
                                    </p>
                                </div>
                                <div class="nav_menu_ul_div">
                                    <ul class="list-unstyled">
                                        <li><a href="#">China</a></li>
                                        <li><a href="#">Japan</a></li>
                                        <li><a href="#">Korea</a></li>
                                        <li><a href="#">India</a></li>
                                        <li><a href="#">Taiwan</a></li>
                                        <li><a href="#">Thailand</a></li>
                                        <li><a href="#">Philippines</a></li>
                                        <li><a href="#">Singapore</a></li>
                                        <li><a href="#">Indonesia</a></li>
                                        <li><a href="#">Iran</a></li>
                                        <li><a href="#">Saudi Arabia</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>

                        <li class="nav_menu_li" id="nav_menu_hide">
                            <div class="nav_menu_li_div">
                                <div class="nav_menu_title_div">
                                    <p class="nav_menu_title">
                                        AFRICA
                                    </p>
                                </div>
                                <div class="nav_menu_ul_div">
                                    <ul class="list-unstyled">
                                        <li><a href="#">Nigeria</a></li>
                                        <li><a href="#">South Africa</a></li>
                                        <li><a href="#">Egypt</a></li>
                                        <li><a href="#">Algeria</a></li>
                                        <li><a href="#">Morocco</a></li>
                                        <li><a href="#">Angola</a></li>
                                        <li><a href="#">Sudan</a></li>
                                        <li><a href="#">Ethiopia</a></li>
                                        <li><a href="#">Kenya</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <div class="nav_menu_li_view_all">
                            <button class="nav_menu_view_all_button"><a href="category.php">View All</a></button>
                        </div>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>




<div class="signup_pop_up_div" id="signup_pop_up_div">
    <form class="signup_form animate" method="POST" action="https://blackwhiz.com/signup.php">
        <div class="logo_close">
            <span class="close">&times;</span>
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

            <input type="submit" class="submit" name="submit" value="CREATE ACCOUNT">
            <button type="button" class="cancel">CANCEL</button>
        </div><br />
        <p class="signup_or">Have an account? <a class="open_log_in">Login</a></p>
    </form>
</div>

<?php 
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
            }

            else {
                $error = "Wrong credentials.<br />Please try again or register.";
                //                        echo "<script>
                //                        document.getElementById('error').style.display = 'block'; 
                //                        document.getElementById('error_msg').innerHTML = '$error';
                //                        </script>";
            }
        }
    }
}


?>



<?php
if (!isset($_SESSION['logged_in']))
{?>
<script>
    console.log("not logged in");
    $('#login_pop_up').empty();
    $('#login_pop_up').append('<a class="login_a"><span class="glyphicon glyphicon-log-in"></span> &nbsp;&nbsp;Login</a>');
    $('#signup_pop_up').empty();
    $('#signup_pop_up').append('<a class="signup_a"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Sign Up</a>');
</script>

<div class="login_pop_up_div" id="login_pop_up_div">
    <form class="login_form animate" method="POST" action="https://blackwhiz.com/login.php">
        <div class="logo_close">
            <span class="close">&times;</span>
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
</div>
<?}

else {?>
<script>
    console.log("logged in!");
    $('#login_pop_up').empty();
    $('#login_pop_up').append('<a class="login_a" href="logout.php"><span class="glyphicon glyphicon-log-in"></span> &nbsp;&nbsp;Logout</a>');
    $('#signup_pop_up').empty();
    $('#signup_pop_up').append('<a class="signup_a" href="login.php"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;Acct Info</a>')
</script>
<?}?>


