var element_height = [];
var artist_name = [];

$(document).ready(function() {
    console.log( "ready!" );
    $(document).on ("click", ".show_more", function () {
        var add_height = 100;
        
        // get index of clicked element
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

                    scope.getButton = function(selector) {
                        var over_height = check_over_height(element_height);
                        var element = $(selector);
                        for (var i = 0; i < over_height.length; i++)
                        {
                            element[over_height[i]].style.display = 'block';
                        }
                    }

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

