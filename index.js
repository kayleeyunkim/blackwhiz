var element_height = [];
var artist_name = [];

$(document).ready(function() {
    console.log( "ready!" );
    $(document).on ("click", ".show_more", function () {
        var add_height = 100;

        // get index of clicked element using artist's name
        var name = $(this).parent().find('#artist_name').text();
        var index = match_name(name, artist_name);

        if ($(this).prev().hasClass("toggled"))
        {
            $(this).prev().animate({height: "100px"}, {duration: 800}).removeClass("toggled");
            $('html,body').animate({
                scrollTop: $(this).parent().prev().offset().top - add_height});
            $(this).text('Show More');
        }

        else
        {
            var original_height = element_height[index];
            $(this).prev().animate({height: original_height + "px"}, {duration: 800}).addClass("toggled");
            $('html,body').animate({
                scrollTop: $(this).parent().prev().offset().top - add_height});
            $(this).text('Show Less');
        }
    });


    // when user click the listed item, show preview
    $(document).on("click", ".list-group-item", function(e) {
        // if clicked show_more button
        if ($(e.target).is(':button'))
        {
            return;
        }

        // if clicked besides button
        else {
            //            var name = $(this).parent().find('#artist_name').text();
            //            var index = match_name(name, artist_name);

            //            var img = $(this).parent().find('#artist_image');
            var img = $(this).parent().find('#artist_image').attr("src");
            var preview_img = document.getElementById("preview_artists_img");
            var artist_name = $(this).parent().find('#artist_name').text();
            var artist_role = $(this).parent().find('#artists_role').text();
            var artist_member = $(this).parent().find('#artist_member').text();
            var artist_genre = $(this).parent().find('#artist_genre').text();
            var artist_description = $(this).parent().find('#artist_description').text();

            console.log(img + ", " + artist_name + ", " + artist_role + ", " + artist_member + ", " + artist_genre + ", " + artist_description);

            preview_img.src = img;
            $('.preview_artist').css('display', 'block');
        }


        var span = document.getElementsByClassName("preview_close_btn")[0];

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() { 
            $('.preview_artist').css('display', 'none');
        }



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
                            artist_name.push(scope.artists[i].name)
                        }
                    }
                });
            }
        }
    }
});

