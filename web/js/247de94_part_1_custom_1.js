var $=jQuery.noConflict();function image_preload(a,b){var c={delay:250,transition:400,easing:"linear"};$.extend(c,b);$(a).each(function(){var d=$(this);d.css({visibility:"hidden",opacity:0,display:"block"});d.wrap('<span class="preloader" />');d.one("load",function(e){$(this).delay(c.delay).css({visibility:"visible"}).animate({opacity:1},c.transition,c.easing,function(){$(this).unwrap('<span class="preloader" />')})}).each(function(){if(this.complete){$(this).trigger("load")}})})}function tab_widget(b){var a=$(".sidebar-widgets-wrap");var d=$(".footer-widgets-wrap");$(b+" .tab_content").hide();$(b+" ul.tabs li:first").addClass("active").show();$(b+" .tab_content:first").show();if(window.location.hash!=""){var c=window.location.hash;if($(c).hasClass("tab_content")){$(b+" ul.tabs li").removeClass("active");$(b+' ul.tabs li a[data-href="'+c+'"]').parent("li").addClass("active");$(b+" .tab_content").hide();$(c+".tab_content").show()}}$(b+" ul.tabs li").click(function(){$(b+" ul.tabs li").removeClass("active");$(this).addClass("active");$(b+" .tab_content").hide();var e=$(this).find("a").attr("data-href");var f=$(this);$(e).fadeIn(600,function(){if(f.parent().parent().hasClass("side-tabs")){if($(window).width()<768){if($().scrollTo){jQuery.scrollTo(e,400,{offset:-20})}}}});return false})}jQuery(document).ready(function(b){if(b().superfish){b("#primary-menu ul, .sticky-menu-wrap ul").superfish({delay:250,speed:300,animation:{opacity:"show",height:"show"},autoArrows:false,dropShadows:false})}if(b().tipsy){nTip=function(){b(".ntip").tipsy({gravity:"s",fade:true})};nTip()}if(b().tipsy){sTip=function(){b(".stip").tipsy({gravity:"n",fade:true})};sTip()}if(b().tipsy){eTip=function(){b(".etip").tipsy({gravity:"w",fade:true})};eTip()}if(b().tipsy){wTip=function(){b(".wtip").tipsy({gravity:"e",fade:true})};wTip()}b("#primary-menu ul li:has(ul)").addClass("sub-menu");b(".sticky-menu-wrap ul li:has(ul)").addClass("sub-menu");var a=b("#header").outerHeight()+170;stickyMenuFunction=function(){var d=null;b(window).scroll(function(){if(d){clearTimeout(d)}d=setTimeout(c,200)});function c(){d=null;var e=b(window).width();if(e>979){if(b(window).scrollTop()>a){b("#sticky-menu").show();b("#sticky-menu").filter(":not(:animated)").animate({top:"0px"},250)}else{b("#sticky-menu").filter(":not(:animated)").animate({top:"-60px"},250,function(){b(this).fadeOut()})}}else{b("#sticky-menu").hide()}}};stickyMenuFunction();b(".sticky-search-trigger a").click(function(){b(".sticky-search-area").fadeIn("fast",function(){b(this).find("input").focus()});return false});b(".sticky-search-area-close a").click(function(){b(".sticky-search-area").fadeOut("fast");return false});b(window).scroll(function(){if(b(this).scrollTop()>450){b("#gotoTop").fadeIn()}else{b("#gotoTop").fadeOut()}});b("#gotoTop").click(function(){b("body,html").animate({scrollTop:0},400);return false});topSocialExpander=function(){var c=b(window).width();if(c>767){b("#top-social li").show();b("#top-social li a").css({width:40});b("#top-social li a").each(function(){b(this).removeClass("stip");b(this).removeAttr("title");b(this).removeAttr("original-title")});b("#top-social li a").hover(function(){var d=b(this).children(".ts-text").outerWidth()+52;b(this).stop().animate({width:d},250,"jswing")},function(){b(this).stop().animate({width:40},250,"jswing")})}else{b("#top-social li").show();b("#top-social li a").css({width:40});b("#top-social li a").each(function(){b(this).addClass("stip");var d=b(this).children(".ts-text").text();b(this).attr("title",d)});sTip();b("#top-social li a").hover(function(){b(this).stop().animate({width:40},1,"jswing")},function(){b(this).stop().animate({width:40},1,"jswing")});if(c<479){b("#top-social li").hide();b("#top-social li").slice(0,8).show()}}};topSocialExpander();b(window).resize(function(){topSocialExpander();stickyMenuFunction()});siblingsFader=function(){b(".siblings_fade,.flickr_badge_image").hover(function(){b(this).siblings().stop().fadeTo(400,0.5)},function(){b(this).siblings().stop().fadeTo(400,1)})};siblingsFader();image_preload(".portfolio-image:not(.port-gallery) img,#kwicks-slider img,.rs-slider img");b(".port-gallery").each(function(){b(this).addClass("preloader")});b(".fslider").each(function(){b(this).addClass("preloader2")});imgFade=function(){b(".image_fade,#top-menu li.top-menu-em a").hover(function(){b(this).filter(":not(:animated)").animate({opacity:0.6},400)},function(){b(this).animate({opacity:1},400)})};imgFade();b(window).scroll(function(){b(".progress:in-viewport").each(function(){var c=b(this),d=c.find(".bar").attr("data-width");if(!c.hasClass("animated")){c.parent().find("span").hide();c.addClass("animated");c.find(".bar").animate({width:d+"%"},500,function(){c.parent().find("span").fadeIn(400)})}})});b(".togglec").hide();b(".togglet").click(function(){b(this).toggleClass("toggleta").next(".togglec").slideToggle("normal");return true});b(".pricing-defines").each(function(){var d=b(this).next().find(".pricing-features").position();var c=b(this).next().outerHeight();b(this).find(".pricing-features").css("margin-top",(d.top-1)+"px");b(this).find(".pricing-inner").css("height",(c-1)+"px")});b(".acc_content").hide();b(".acctitle:first").addClass("acctitlec").next().show();b(".acctitle").click(function(){if(b(this).next().is(":hidden")){b(".acctitle").removeClass("acctitlec").next().slideUp("normal");b(this).toggleClass("acctitlec").next().slideDown("normal")}return false});imgHoverlay=function(){b(".portfolio-item,#portfolio-related-items li").hover(function(){b(this).find(".portfolio-overlay").filter(":not(:animated)").animate({opacity:"show"},400)},function(){b(this).find(".portfolio-overlay").animate({opacity:"hide"},400)})};imgHoverlay();if(b().fitVids){b("#content,#footer,#slider:not(.layerslider-wrap),.landing-offer-media").fitVids({customSelector:"iframe[src^='http://www.dailymotion.com/embed']"})}if(b().prettyPhoto){initprettyPhoto=function(){b("a[rel^='prettyPhoto']").prettyPhoto({theme:"light_square",social_tools:false})};initprettyPhoto()}if(b().mobileMenu){b("#primary-menu ul#main-menu").mobileMenu({subMenuDash:"&nbsp;&ndash;&nbsp;"})}b("a[data-scrollto]").click(function(){var c=b(this).attr("data-scrollto");if(b().scrollTo){jQuery.scrollTo(b(c),400,{offset:-20})}return false});if(b().carouFredSel){b(".testimonials").each(function(){var f=b(this).parent(".testimonial-scroller").attr("data-prev");var g=b(this).parent(".testimonial-scroller").attr("data-next");var c=b(this).parent(".testimonial-scroller").attr("data-speed");var d=b(this).parent(".testimonial-scroller").attr("data-pause");var e=b(this).parent(".testimonial-scroller").attr("data-auto");if(!c){c=300}if(!d){d=8000}if(e=="true"){e=Number(d)}else{e=false}b(this).carouFredSel({circular:true,responsive:true,auto:e,items:1,scroll:{items:"page",fx:"fade",duration:Number(c),wipe:true},prev:{button:f,key:"left"},next:{button:g,key:"right"}})})}if(b().jflickrfeed){b(".flickrfeed").each(function(){var d=b(this).attr("data-id");var f=b(this).attr("data-count");var c=b(this).attr("data-type");var e="photos_public.gne";if(c=="group"){e="groups_pool.gne"}if(!f){f=9}b(this).jflickrfeed({feedapi:e,limit:Number(f),qstrings:{id:d},itemTemplate:'<div class="flickr_badge_image"><a rel="prettyPhoto[galflickr]" href="{{image}}" title="{{title}}"><img src="{{image_s}}" alt="{{title}}" /></a></div>'},function(g){if(b().prettyPhoto){initprettyPhoto()}})})}if(b().spectragram){b.fn.spectragram.accessData={accessToken:"36286274.b9e559e.4824cbc1d0c94c23827dc4a2267a9f6b",clientID:"b9e559ec7c284375bf41e9a9fb72ae01"};b(".instagram").each(function(){var c=b(this).attr("data-user");var e=b(this).attr("data-tag");var d=b(this).attr("data-count");var f=b(this).attr("data-type");if(!d){d=9}if(f=="tag"){b(this).spectragram("getRecentTagged",{query:e,max:Number(d),size:"small",wrapEachWith:'<div class="flickr_badge_image"></div>'})}else{if(f=="user"){b(this).spectragram("getUserFeed",{query:c,max:Number(d),size:"small",wrapEachWith:'<div class="flickr_badge_image"></div>'})}else{b(this).spectragram("getPopular",{max:Number(d),size:"small",wrapEachWith:'<div class="flickr_badge_image"></div>'})}}})}if(b().jribbble){b(".dribbble").each(function(){var e=b(this);var c=b(this).attr("data-user");var f=b(this).attr("data-count");var g=b(this).attr("data-list");var d=b(this).attr("data-type");if(!f){f=9}if(d=="follows"){b.jribbble.getShotsThatPlayerFollows(c,function(i){var h=[];b.each(i.shots,function(k,j){h.push('<div class="flickr_badge_image"><a href="'+j.url+'" target="_blank">');h.push('<img src="'+j.image_teaser_url+'" ');h.push('alt="'+j.title+'"></a></div>')});b(e).html(h.join(""))},{page:1,per_page:Number(f)})}else{if(d=="user"){b.jribbble.getShotsByPlayerId(c,function(i){var h=[];b.each(i.shots,function(k,j){h.push('<div class="flickr_badge_image"><a href="'+j.url+'" target="_blank">');h.push('<img src="'+j.image_teaser_url+'" ');h.push('alt="'+j.title+'"></a></div>')});b(e).html(h.join(""))},{page:1,per_page:Number(f)})}else{if(d=="list"){b.jribbble.getShotsByList(g,function(i){var h=[];b.each(i.shots,function(k,j){h.push('<div class="flickr_badge_image"><a href="'+j.url+'" target="_blank">');h.push('<img src="'+j.image_teaser_url+'" ');h.push('alt="'+j.title+'"></a></div>')});b(e).html(h.join(""))},{page:1,per_page:Number(f)})}}}})}});$(window).load(function(){$("#pageLoader").fadeOut(800,function(){$(this).remove()});siblingsFader();if($().flexslider){$(".fslider .flexslider").each(function(){var a=$(this).parent(".fslider").attr("data-animate");var i=$(this).parent(".fslider").attr("data-easing");var b=$(this).parent(".fslider").attr("data-direction");var d=$(this).parent(".fslider").attr("data-slideshow");var c=$(this).parent(".fslider").attr("data-pause");var g=$(this).parent(".fslider").attr("data-speed");var f=$(this).parent(".fslider").attr("data-video");var e=true;var h=false;if(!a){a="slide"}if(!i||i=="swing"){i="swing";h=true}if(!b){b="horizontal"}if(!d){d=true}if(!c){c=5000}if(!g){g=600}if(!f){f=false}if(b=="vertical"){e=false}$(this).flexslider({selector:".slider-wrap > .slide",animation:a,easing:i,direction:b,slideshow:d,slideshowSpeed:Number(c),animationSpeed:Number(g),pauseOnHover:true,video:f,controlNav:false,directionNav:true,smoothHeight:e,useCSS:h,start:function(j){j.parent(".fslider").removeClass("preloader2");j.parent(".fslider").parent(".port-gallery").removeClass("preloader")}})})}});