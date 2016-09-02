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

    // var canvas = document.getElementById('background-anime');
    // var context = canvas.getContext('2d');
    //
    // canvas.width = $('#intro').outerWidth();
    // canvas.height = $('#intro').outerHeight() - 200;
    //
    // var setCanvasSize = function() {
    //     canvas.width = $('#intro').outerWidth();
    //     canvas.height = $('#intro').outerHeight();
    // };
    // window.addEventListener('resize', setCanvasSize, false);
    //
    // function make_base(){
    //
    //     base_image = new Image();
    //     base_image.src = 'http://andrewyamamoto.dev/wp-content/themes/andrewyamamoto/img/ay-logo.svg';
    //
    //     base_image.onload = function(){
    //         context.globalAlpha = Math.random() * 0.9;
    //         context.drawImage(base_image, Math.random() * canvas.width, Math.random() * 400);
    //     };
    //
    //
    //
    // }
    //
    // for(var i = 0; i < 25; i++){
    //     make_base();
    // }


    // window.addEventListener('load', function () {
    //
    //     var
    //         img = new Image,
    //         ctx = document.getElementById('background-anime').getContext('2d');
    //
    //     img.src = 'http://www.gravatar.com/avatar/a1f80339c0cef95be6dc73e0ac510d5d?s=32&d=identicon&r=PG';
    //     img.addEventListener('load', function () {
    //
    //         var interval = setInterval(function() {
    //             var x = 0, y = 0;
    //
    //             return function () {
    //                 ctx.clearRect(0, 0, ctx.canvas.width, ctx.canvas.height);
    //                 ctx.drawImage(img, x, y);
    //
    //                 x += 1;
    //                 if (x > ctx.canvas.width) {
    //                     x = 0;
    //                 }
    //             };
    //
    //         }(), 1000/40);
    //
    //     }, false);
    //
    // }, false);

    // var wobbleicons = function(){
    //     $('.social-icons a').each(function(){
    //         $(this).hover(function(){
    //             $(this).addClass('animated wobble').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
    //                 $(this).removeClass('animated wobble');
    //             });
    //         })
    //     });
    //     console.log('wobblty')
    // }

    var wobbleicons = function(){

        $('.social-icons a i, .contact-icons i, .location-icons i').each(function(){
            $(this).hover(
                function (){$(this).addClass('animated wobble'); },
                function (){ $(this).removeClass('animated wobble'); }
            );
        });
    };
    wobbleicons();
});
