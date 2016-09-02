$(document).ready(function(){

    var skill_wp, portfolio_wp; //base_image scale

    skill_wp = $('#skills').waypoint({
        handler: function() {
            $('#skills .item-container').each(function(num){

                var percent = $(this).data("percent");
                var o = {duration: 500,easing: 'easeOutQuint',delay: num * 100};

                $(this).velocity({
                    options: o,
                    properties:{opacity:1},
                }).find('.skill-bar').velocity({
                    options: o,
                    properties:{width: percent + "%"},
                });

                $(this).find('.skill-info').velocity({
                    options: o,
                    properties:{opacity:1}
                });

                $(this).find('.skill-bar .skill-percent').html( percent + "%");

            });
        },
        offset: 'bottom-in-view'
    });

     portfolio_wp = $('#portfolio').waypoint({
        element: document.getElementById('portfolio'),
        handler: function() {

            $('#portfolio .item-container').each(function(num){

                var o = {duration: 700,easing: 'easeOutQuint',delay: num * 200};

                $(this).velocity({
                    options: o,
                    properties:{opacity:1},
                });
            });
        },
        offset: '300'
    });

    function wobbleicons(){

        $('.social-icons a i, .contact-icons i, .location-icons i').each(function(){
            $(this).hover(
                function (){$(this).addClass('animated wobble'); },
                function (){ $(this).removeClass('animated wobble'); }
            );
        });
    };
    wobbleicons();



});
