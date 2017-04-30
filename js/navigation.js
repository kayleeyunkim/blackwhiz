
$(document).ready(function() {
    var signup_pop_up_div = document.getElementById('signup_pop_up_div');
    var login_pop_up_div = document.getElementById('login_pop_up_div');

    $("#signup_pop_up").on("click", function(){
        $("#login_pop_up_div").css('display', 'none');
        $("#signup_pop_up_div").css('display', 'block');
        $("body").css("overflow", "hidden");
    });

    window.onclick = function(event) {
        if ((event.target == signup_pop_up_div) || (event.target == login_pop_up_div)) {
            signup_pop_up_div.style.display = "none";
            login_pop_up_div.style.display = "none";
        }
    };

    $('.close').on("click", function() {
        $("#signup_pop_up_div").css('display', 'none');
    });
    
    $('.cancel').on("click", function() {
        $("#signup_pop_up_div").css('display', 'none');
    });

    $("#login_pop_up").on("click", function(){
        $("#signup_pop_up_div").css('display', 'none');
        $("#login_pop_up_div").css('display', 'block');
        $("body").css("overflow", "hidden");
    });


    $('.close').on("click", function() {
        $("#signup_pop_up_div").css('display', 'none');
        $("#login_pop_up_div").css('display', 'none');
    });

    $('.login_cancel').on("click", function() {
        $("#login_pop_up_div").css('display', 'none');
    });

    $('.open_log_in').on("click", function() {
        $("#signup_pop_up_div").css('display', 'none');
        $("#login_pop_up_div").css('display', 'block');
    });

    $('.open_sign_up').on("click", function() {
        $("#login_pop_up_div").css('display', 'none');
        $("#signup_pop_up_div").css('display', 'block');
    });

//    $('.submit').on("click", function() {
//        console.log("clicked");
//        $('.error').css('display', 'block');
//    })
//    
//    $('.cancel').on("click", function() {
//        console.log("clicked");
//        $('.error').css('display', 'block');
//    })


});
