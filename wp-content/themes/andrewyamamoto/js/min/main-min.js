$(document).ready(function(){var i,t;i=$("#skills").waypoint({handler:function(){$("#skills .item-container").each(function(i){var t=$(this).data("percent"),o={duration:500,easing:"easeOutQuint",delay:100*i};$(this).velocity({options:o,properties:{opacity:1}}).find(".skill-bar").velocity({options:o,properties:{width:t+"%"}}),$(this).find(".skill-info").velocity({options:o,properties:{opacity:1}}),$(this).find(".skill-bar .skill-percent").html(t+"%")})},offset:"bottom-in-view"}),t=$("#portfolio").waypoint({element:document.getElementById("portfolio"),handler:function(){$("#portfolio .item-container").each(function(i){var t={duration:700,easing:"easeOutQuint",delay:200*i};$(this).velocity({options:t,properties:{opacity:1}})})},offset:"300"});var o=function(){$(".social-icons a i, .contact-icons i, .location-icons i").each(function(){$(this).hover(function(){$(this).addClass("animated wobble")},function(){$(this).removeClass("animated wobble")})})};o()});