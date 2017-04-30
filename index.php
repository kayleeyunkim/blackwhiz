<?php 
session_start();
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Blackwhiz</title>
        <link rel="shortcut icon" type="image/png" href="images/Logo/blogo_transparent.png">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>        
        <script src="js/index.js"></script>
        <script src="js/equipment.js"></script>
        <script src="controllers/MainController.js"></script>
        <script src="services/artists.js"></script>
        <script src="js/navigation.js"></script>
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="css/signup.css">

    </head>

<!--

-->

    <body ng-app="Blackwhiz">
        <?php include "navigation.php"; ?>
        <div class="main" ng-controller="MainController">
            <div class="container-fluid">
                <div class="menu row">
                    <div class="menu-category list-group" ng-repeat="artist in artists" on-finish-render="ngRepeatFinished">
                        <div href="#" class="list-group-item" ng-click="hello($index)">
                            <img id="artist_image" ng-src="{{ artist.image }}">
                            <div class="artist_info">
                                <p class="artist_name" id="artist_name" ng-style="getName()">{{ artist.name }}</p>
                                <p class="artist_hidden" id="artists_role">{{ artist.role }}</p>
                                <p class="artist_hidden" id="artist_member">{{ artist.member }}</p>
                                <p class="artist_hidden" id="artist_genre">{{ artist.genres }}</p>
                                <p class="artist_hidden" id="artist_facebook"> {{ artist.facebook }}</p>
                                <p class="artist_hidden" id="artist_youtube"> {{ artist.youtube }}</p>
                                <p class="artist_hidden" id="artist_website"> {{ artist.website }}</p>
                                <p class="artist_hidden" id="artist_youtube_song"> {{ artist.youtube_song }}</p>
                                <p class="artist_hidden" id="artist_soundcloud"> {{ artist.soundcloud }}</p>
                                <div class="artist_description_div">
                                    <p id="artist_description" ng-style="getHeight('.artist_description_div')">{{ artist.description }} </p>
                                </div>
                                <a class="artist_equip_anchor"><button class="show_equip" ng-click="hello2($index)">Go to see Equipments</button></a>
                                <button type="button" class="show_more" ng-style="getButton('.show_more')" >Show More</button>
                            </div>
                            <div class="artist_pin_thumb">
                                <i class="icon-pushpin"></i><span class="icon_pin_num">0</span>
                                <br />
                                <i class="icon-thumbs-up-alt"></i><span class="icon_thumb_num">0</span>
                                <br />
                            </div>
                        </div>    <!-- End of list-group-item -->
                    </div>    <!--End of menu-category list-group-->
                </div>    <!--End of menu row-->

                <div id="preview_artist" class="preview_artist">
                    <div class="preview_sub_div">
                        <span class="preview_close_btn">&times;</span>
                        <div class="preview_info_sub_left">
                            <img class="preview_artists_img" id="preview_artists_img">
                            <div class="preview_artist_info" id="preview_artist_name"></div>
                            <div class="preview_sns" id="preview_sns">
                                <a class="preview_artist_facebook"></a>
                                <a class="preview_artist_youtube"></a>
                                <a class="preview_artist_website"></a>
                                <a class="preview_artist_youtube_song"></a>
                                <a class="preview_artist_soundcloud"></a>
                            </div>
                            <div class="preview_artist_equip_btn_div">
                                <a href="equipment.php" class="artist_equip_anchor"><button class="artist_equip_btn">Go to see Equipments</button></a>
                            </div>
                        </div>
                        <div class="preview_info_sub_right">
                            <div class="preview_artist_info" id="preview_artist_role">
                            </div>
                            <div class="preview_artist_info" id="preview_artist_member">
                            </div>
                            <div class="preview_artist_info" id="preview_artist_genre">
                            </div>
                            <br />
                            <div class="preview_artist_info" id="preview_artist_description">
                            </div>
                        </div>
                    </div>
                </div>
            </div>    <!--End of container-fluid-->
        </div>    <!--End of Main-->
    </body>
</html>
