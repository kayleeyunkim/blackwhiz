var element_height = [];
var artist_name = [];

$(document).ready(function() {
    
    $(document).on ("click", ".show_more", function () {
        var add_height = 100;

        // get index of clicked element using artist's name
        var name = $(this).parent().find('#artist_name').text();
        var index = match_name(name, artist_name);

        if ($(this).prev().prev().hasClass("toggled"))
        {
            $(this).prev().prev().animate({height: "100px"}, {duration: 800}).removeClass("toggled");
            $('html,body').animate({
                scrollTop: $(this).parent().prev().offset().top - add_height});
            $(this).text('Show More');
        }

        else
        {
            var original_height = element_height[index];
            $(this).prev().prev().animate({height: original_height + "px"}, {duration: 800}).addClass("toggled");
            $('html,body').animate({
                scrollTop: $(this).parent().prev().offset().top - add_height});
            $(this).text('Show Less');
        }
    });
    

    // when user click the listed item, show preview
    $(document).on("click", ".list-group-item", function(e) {
        $('html,body').animate({
                scrollTop: $(this).offset().top});
        
        // if clicked show_more button
        if (($(e.target).is(':button')) || 
            ($(e.target).is('.icon-pushpin')) || 
            ($(e.target).is('.icon-thumbs-up-alt')))
        {
            return;
        }

        // if clicked besides button
        else {
            $("body").css("overflow", "hidden");

            // get pretty scroll bar
            var preview_img = document.getElementById("preview_artists_img");
            var img = $(this).parent().find('#artist_image').attr("src");
            var artist_name = $(this).parent().find('#artist_name').text();
            var artist_role = $(this).parent().find('#artists_role').text();
            var artist_member = $(this).parent().find('#artist_member').text();
            var artist_genre = $(this).parent().find('#artist_genre').text();
            var artist_description = $(this).parent().find('#artist_description').text();
            var artist_facebook = $(this).parent().find('#artist_facebook').text();
            var artist_youtube = $(this).parent().find('#artist_youtube').text();
            var artist_website = $(this).parent().find('#artist_website').text();
            var artist_youtube_song = $(this).parent().find('#artist_youtube_song').text();
            var artist_soundcloud = $(this).parent().find('#artist_soundcloud').text();

            preview_img.src = img;
            $('#preview_artist_name').empty();
            $('#preview_artist_role').empty();
            $('#preview_artist_member').empty();
            $('#preview_artist_genre').empty();
            $('#preview_artist_description').empty();
            $('.preview_artist_facebook').empty();
            $('.preview_artist_youtube').empty();
            $('.preview_artist_website').empty();
            $('.preview_artist_youtube_song').empty();
            $('.preview_artist_soundcloud').empty();

            $('#preview_artist_name').append(artist_name);
            $('#preview_artist_role').append("<b>Roles: </b>" + artist_role);
            $('#preview_artist_member').append("<b>Member of: </b>" + artist_member);
            $('#preview_artist_genre').append("<b>Genre: </b>" + artist_genre);
            $('#preview_artist_description').append(artist_description);

            if (artist_facebook !== " ")
            {
                $('.preview_artist_facebook').append('<i class="icon-facebook-sign"></i>');
                $('.preview_artist_facebook').attr("href", artist_facebook);
                $('.preview_artist_facebook').attr("target", "_blank");
            }

            if (artist_youtube !== " ")
            {
                $('.preview_artist_youtube').append('<i class="icon-youtube">');
                $('.preview_artist_youtube').attr("href", artist_youtube);
                $('.preview_artist_youtube').attr("target", "_blank");
            }
            
            if (artist_website !== " ")
            {
                $('.preview_artist_website').append('<i class="icon-home"></i>');
                $('.preview_artist_website').attr("href", artist_website);
                $('.preview_artist_website').attr("target", "_blank");
            }
            
            if (artist_youtube_song !== " ")
            {
                $('.preview_artist_youtube_song').append('<i class="icon-music">');
                $('.preview_artist_youtube_song').attr("href", artist_youtube_song);
                $('.preview_artist_youtube_song').attr("target", "_blank");
            }
            
            if (artist_soundcloud !== " ")
            {
                $('.preview_artist_soundcloud').append('<i class="icon-cloud"></i>');
                $('.preview_artist_soundcloud').attr("href", artist_soundcloud);
                $('.preview_artist_soundcloud').attr("target", "_blank");
            }

            $('.preview_artist').css('display', 'block');
        }

        var span = document.getElementsByClassName("preview_close_btn")[0];

        span.onclick = function() { 
            $('.preview_artist').css('display', 'none');
            $("body").css("overflow", "auto");
        }

        $(document).on("click", ".preview_artist", function(ev) {
            if (($(ev.target).is('.preview_info_sub_left')) || 
                ($(ev.target).is('.preview_artists_img')) || 
                ($(ev.target).is('.preview_artist_info')) ||
                ($(ev.target).is('.preview_info_sub_right')) ||
                ($(ev.target).is('.preview_sub_div')) ||
                ($(ev.target).is('.preview_artist_equip_btn_div')) ||
                ($(ev.target).is('.artist_equip_btn')))
            {
                return;
            }

            else {
                $('.preview_artist').css('display', 'none');
                $("body").css("overflow", "auto");
            }
        });

    });


    // when user click the pin icon, add number to specific artist
    // don't forget to insert to mysql
    // need to add feature for 1000 -> 1k, 10000 -> 10k
    $(document).on("click", ".icon-pushpin", function() {
        //        var name = $(this).parent().parent().find('#artist_name').text();
        //        var index = match_name(name, artist_name);
        var pin_count = $(this).parent().find('.icon_pin_num').text();
        pin_count++;
        $(this).parent().find('.icon_pin_num').text(pin_count);        
    });

    // when user click the thumb icon, add number to specific artist
    // don't forget to insert to mysql
    // need to add feature for 1000 -> 1k, 10000 -> 10k
    $(document).on("click", ".icon-thumbs-up-alt", function() {
        //        var name = $(this).parent().parent().find('#artist_name').text();
        //        var index = match_name(name, artist_name);
        var pin_count = $(this).parent().find('.icon_thumb_num').text();
        pin_count++;
        $(this).parent().find('.icon_thumb_num').text(pin_count);
    });

});

function match_name(name, array) {
    for (var i = 0; i < array.length; i++)
    {
        if (name === array[i])
            return i;
    }
}


function check_over_height(array) {
    var over_height = [];
    for (var i = 0; i < array.length; i++) 
    {
        if (array[i] > 100) {
            over_height.push(i);
        }
    }
    return over_height;
}


var Blackwhiz = angular.module("Blackwhiz", [])
.directive('onFinishRender', function ($timeout) {
    return {
        restrict: 'A',
        link: function (scope, element, attr) {
            if (scope.$last === true) {
                $timeout(function () {
                    var count = 1;

                    // get original height of every description divs
                    scope.getHeight = function(selector) 
                    {
                        var element = $(selector); 
                        for (var i = 0; i < element.length; i++)
                        {
                            var height = element[i].offsetHeight;
                            element_height.push(height);
                        }
                        count++;

                        var over_height = check_over_height(element_height);
                        for (var j = 0; j < over_height.length; j++)
                        {
                            element[over_height[j]].style.height = '100px';
                        }
                    };

                    // display buttons only for description div height is over 100.
                    // determines from check_over_height function
                    scope.getButton = function(selector) {
                        var over_height = check_over_height(element_height);
                        var element = $(selector);
                        for (var i = 0; i < over_height.length; i++)
                        {
                            element[over_height[i]].style.display = 'block';
                        }
                    }

                    // get all the artists' name and store in array
                    scope.getName = function() {
                        for (var i = 0; i < scope.artists.length; i++) {
                            artist_name.push(scope.artists[i].name);
                        }
                    }
                });
            }
        }
    }
});

