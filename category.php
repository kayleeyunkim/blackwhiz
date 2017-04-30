


<!DOCTYPE html>
<html>
    <head>
        <title>Blackwhiz</title>
        <link rel="shortcut icon" type="image/png" href="../images/Logo/blogo_transparent.png">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>        
        <script src="../js/index.js"></script>
        <script src="../js/equipment.js"></script>
        <script src="../controllers/MainController.js"></script>
        <script src="../services/artists.js"></script>
        <link rel="stylesheet" href="../css/styles.css">
        <link rel="stylesheet" href="../css/category.css">
    </head>
    <?php include "navigation.php"; ?>
    <body ng-app="Blackwhiz">
        <div class="category_main">
            <p class="category_main_title">Search By Category</p>
            <div class="category_sub" id="category_equipment">
                <p class="category_title">EQUIPMENT</p>
                <div class="category_sub_div">
                    <p class="category_sub_title" id="category_sub_first_title">GUITARS</p>
                    <div class="category_element_div">
                        <ul class="list-unstyled">
                            <li><a href="#">Electric Guitars</a></li>
                            <li><a href="#">Acoustic Guitars</a></li>
                            <li><a href="#">Acoustric-electric Guitars</a></li>
                            <li><a href="#">Classical & Nylon-string Guitars</a></li>
                        </ul>
                    </div>
                    <p class="category_sub_title">DRUMS & PERCUSSION</p>
                    <div class="category_element_div">
                        <ul class="list-unstyled">
                            <li><a href="#">Drum Sets & Set Components</a></li>
                            <li><a href="#">Electronic Drums</a></li>
                            <li><a href="#">Hand Percussion</a></li>
                            <li><a href="#">Hand Drums</a></li>
                            <li><a href="#">Concert Percussion</a></li>
                            <li><a href="#">Marching Percussion</a></li>
                        </ul>
                    </div>
                    <p class="category_sub_title">LIVE SOUND & STAGE</p>
                    <div class="category_element_div">
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

                <div class="category_sub_div">
                    <p class="category_sub_title" id="category_sub_first_title">DJ & ELECTRONIC MUSIC</p>
                    <div class="category_element_div">
                        <ul class="list-unstyled">
                            <li><a href="#">DJ Equipment</a></li>
                            <li><a href="#">Electronic Music</a></li>
                            <li><a href="#">Karaoke Equipment</a></li>
                        </ul>
                    </div>
                    <p class="category_sub_title">BASS GUITARS</p>
                    <div class="category_element_div">
                        <ul class="list-unstyled">
                            <li><a href="#">Electric Basses</a></li>
                            <li><a href="#">Acoustic & Acoustic-Electric Basses</a></li>
                        </ul>
                    </div>
                    <p class="category_sub_title">RECORDING</p>
                    <div class="category_element_div">
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

                <div class="category_sub_div">
                    <p class="category_sub_title" id="category_sub_first_title">VST PLUGINS</p>
                    <div class="category_element_div">
                        <ul class="list-unstyled">
                            <li><a href="#">Effects Plugins</a></li>
                            <li><a href="#">Instrument Plugins (VSTi & AU)</a></li>
                            <li><a href="#">DAW</a></li>
                            <li><a href="#">Studio Tools Plugins</a></li>
                        </ul>
                    </div>
                    <p class="category_sub_title">AMPLIFIERS</p>
                    <div class="category_element_div">
                        <ul class="list-unstyled">
                            <li><a href="#">Effects</a></li>
                            <li><a href="#">Amplifiers</a></li>
                        </ul>
                    </div>
                    <p class="category_sub_title">KEYBOARD, <br />SYNTHESIZERS & MIDI</p>
                    <div class="category_element_div">
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

                <div class="category_sub_div">
                    <p class="category_sub_title" id="category_sub_first_title">BAND & ORCHESTRA</p>
                    <div class="category_element_div">
                        <ul class="list-unstyled">
                            <li><a href="#">Orchestral Strings</a></li>
                            <li><a href="#">Woodwinds</a></li>
                            <li><a href="#">Brass</a></li>
                        </ul>
                    </div>
                    <p class="category_sub_title">WOLRD INSTRUMENTS</p>
                    <div class="category_element_div">
                        <ul class="list-unstyled">
                            <li><a href="#">Effects</a></li>
                            <li><a href="#">Amplifiers</a></li>
                        </ul>
                    </div>
                    <p class="category_sub_title">HEADPHONES</p>
                    <div class="category_element_div">
                        <ul class="list-unstyled">
                            <li><a href="#">Headphones</a></li>
                        </ul>
                    </div>
                    <p class="category_sub_title">INSTRUMENT ACCESSORIES</p>
                    <div class="category_element_div">
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
            </div>

            <div class="category_sub" id="category_music">
                <p class="category_title">MUSIC</p>
                <div class="category_sub_div">
                    <p class="category_sub_title" id="category_sub_first_title">SUBGENRES</p>
                    <div class="category_element_div">
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

                <div class="category_sub_div" style="width: 400px;">
                    <p class="category_sub_title" id="category_sub_first_title">FUSION GENRES</p>
                    <div class="category_element_div">
                        <ul class="list-unstyled" style="width: 150px; display: inline-block">
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
                        <ul class="list-unstyled" style="width: 180px; display: inline-block; border-left:5px solid #c3c0c0; margin-left: 10px; padding-left: 15px;">
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

                <div class="category_sub_div">
                    <p class="category_sub_title" id="category_sub_first_title">REGIONAL SCENES</p>
                    <div class="category_element_div">
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
            </div>

            <div class="category_sub" id="category_clubs">
                <p class="category_title">CLUBS</p>
                <div class="category_sub_div">
                    <p class="category_sub_title" id="category_sub_first_title">NORTH AMERICA</p>
                    <div class="category_element_div">
                        <ul class="list-unstyled">
                            <li><a href="#">U.S. West Coast</a></li>
                            <li><a href="#">U.S. East Coast</a></li>
                            <li><a href="#">Canada</a></li>
                        </ul>
                    </div>

                    <p class="category_sub_title" id="category_sub_first_title">SOUTH AMERICA</p>
                    <div class="category_element_div">
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

                <div class="category_sub_div">
                    <p class="category_sub_title" id="category_sub_first_title">EUROPE</p>
                    <div class="category_element_div">
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

                <div class="category_sub_div">
                    <p class="category_sub_title" id="category_sub_first_title">ASIA</p>
                    <div class="category_element_div">
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

                <div class="category_sub_div">
                    <p class="category_sub_title" id="category_sub_first_title">AFRICA</p>
                    <div class="category_element_div">
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
            </div>

            <div class="category_sub" id="category_fashion">
                <p class="category_title">FASHION</p>
            </div>
        </div>
    </body>
</html>
