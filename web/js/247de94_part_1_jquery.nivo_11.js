(function(d){var c=function(F,E){var D=d.extend({},d.fn.nivoSlider.defaults,E);var C={currentSlide:0,currentImage:"",totalSlides:0,running:false,paused:false,stop:false,controlNavEl:false};var B=d(F);B.data("nivo:vars",C).addClass("nivoSlider");var A=B.children();A.each(function(){var e=d(this);var i="";if(!e.is("img")){if(e.is("a")){e.addClass("nivo-imageLink");i=e}e=e.find("img:first")}var h=h===0?e.attr("width"):e.width(),g=g===0?e.attr("height"):e.height();if(i!==""){i.css("display","none")}e.css("display","none");C.totalSlides++});if(D.randomStart){D.startSlide=Math.floor(Math.random()*C.totalSlides)}if(D.startSlide>0){if(D.startSlide>=C.totalSlides){D.startSlide=C.totalSlides-1}C.currentSlide=D.startSlide}if(d(A[C.currentSlide]).is("img")){C.currentImage=d(A[C.currentSlide])}else{C.currentImage=d(A[C.currentSlide]).find("img:first")}if(d(A[C.currentSlide]).is("a")){d(A[C.currentSlide]).css("display","block")}var z=d('<img class="nivo-main-image" src="#" />');z.attr("src",C.currentImage.attr("src")).show();B.append(z);d(window).resize(function(){B.children("img").width(B.width());z.attr("src",C.currentImage.attr("src"));z.stop().height("auto");d(".nivo-slice").remove();d(".nivo-box").remove()});B.append(d('<div class="nivo-caption"></div>'));var y=function(e){var g=d(".nivo-caption",B);if(C.currentImage.attr("title")!=""&&C.currentImage.attr("title")!=undefined){var f=C.currentImage.attr("title");if(f.substr(0,1)=="#"){f=d(f).html()}if(g.css("display")=="block"){setTimeout(function(){g.html(f)},e.animSpeed)}else{g.html(f);g.stop().fadeIn(e.animSpeed)}}else{g.stop().fadeOut(e.animSpeed)}};y(D);var x=0;if(!D.manualAdvance&&A.length>1){x=setInterval(function(){s(B,A,D,false)},D.pauseTime)}if(D.directionNav){B.append('<div class="nivo-directionNav"><a class="nivo-prevNav">'+D.prevText+'</a><a class="nivo-nextNav">'+D.nextText+"</a></div>");d("a.nivo-prevNav",B).live("click",function(){if(C.running){return false}clearInterval(x);x="";C.currentSlide-=2;s(B,A,D,"prev")});d("a.nivo-nextNav",B).live("click",function(){if(C.running){return false}clearInterval(x);x="";s(B,A,D,"next")})}if(D.controlNav){C.controlNavEl=d('<div class="nivo-controlNav"></div>');B.after(C.controlNavEl);for(var w=0;w<A.length;w++){if(D.controlNavThumbs){C.controlNavEl.addClass("nivo-thumbs-enabled");var v=A.eq(w);if(!v.is("img")){v=v.find("img:first")}if(v.attr("data-thumb")){C.controlNavEl.append('<a class="nivo-control" rel="'+w+'"><img src="'+v.attr("data-thumb")+'" alt="" /></a>')}}else{C.controlNavEl.append('<a class="nivo-control" rel="'+w+'">'+(w+1)+"</a>")}}d("a:eq("+C.currentSlide+")",C.controlNavEl).addClass("active");d("a",C.controlNavEl).bind("click",function(){if(C.running){return false}if(d(this).hasClass("active")){return false}clearInterval(x);x="";z.attr("src",C.currentImage.attr("src"));C.currentSlide=d(this).attr("rel")-1;s(B,A,D,"control")})}if(D.pauseOnHover){B.hover(function(){C.paused=true;clearInterval(x);x=""},function(){C.paused=false;if(x===""&&!D.manualAdvance){x=setInterval(function(){s(B,A,D,false)},D.pauseTime)}})}B.bind("nivo:animFinished",function(){z.attr("src",C.currentImage.attr("src"));C.running=false;d(A).each(function(){if(d(this).is("a")){d(this).css("display","none")}});if(d(A[C.currentSlide]).is("a")){d(A[C.currentSlide]).css("display","block")}if(x===""&&!C.paused&&!D.manualAdvance){x=setInterval(function(){s(B,A,D,false)},D.pauseTime)}D.afterChange.call(this)});var u=function(h,m,l){if(d(l.currentImage).parent().is("a")){d(l.currentImage).parent().css("display","block")}d('img[src="'+l.currentImage.attr("src")+'"]',h).not(".nivo-main-image,.nivo-control img").width(h.width()).css("visibility","hidden").show();var k=d('img[src="'+l.currentImage.attr("src")+'"]',h).not(".nivo-main-image,.nivo-control img").parent().is("a")?d('img[src="'+l.currentImage.attr("src")+'"]',h).not(".nivo-main-image,.nivo-control img").parent().height():d('img[src="'+l.currentImage.attr("src")+'"]',h).not(".nivo-main-image,.nivo-control img").height();for(var j=0;j<m.slices;j++){var i=Math.round(h.width()/m.slices);if(j===m.slices-1){h.append(d('<div class="nivo-slice" name="'+j+'"><img src="'+l.currentImage.attr("src")+'" style="position:absolute; width:'+h.width()+"px; height:auto; display:block !important; top:0; left:-"+(i+j*i-i)+'px;" /></div>').css({left:i*j+"px",width:h.width()-i*j+"px",height:k+"px",opacity:"0",overflow:"hidden"}))}else{h.append(d('<div class="nivo-slice" name="'+j+'"><img src="'+l.currentImage.attr("src")+'" style="position:absolute; width:'+h.width()+"px; height:auto; display:block !important; top:0; left:-"+(i+j*i-i)+'px;" /></div>').css({left:i*j+"px",width:i+"px",height:k+"px",opacity:"0",overflow:"hidden"}))}}d(".nivo-slice",h).height(k);z.stop().animate({height:d(l.currentImage).height()},m.animSpeed)};var t=function(h,o,n){if(d(n.currentImage).parent().is("a")){d(n.currentImage).parent().css("display","block")}d('img[src="'+n.currentImage.attr("src")+'"]',h).not(".nivo-main-image,.nivo-control img").width(h.width()).css("visibility","hidden").show();var m=Math.round(h.width()/o.boxCols),l=Math.round(d('img[src="'+n.currentImage.attr("src")+'"]',h).not(".nivo-main-image,.nivo-control img").height()/o.boxRows);for(var k=0;k<o.boxRows;k++){for(var j=0;j<o.boxCols;j++){if(j===o.boxCols-1){h.append(d('<div class="nivo-box" name="'+j+'" rel="'+k+'"><img src="'+n.currentImage.attr("src")+'" style="position:absolute; width:'+h.width()+"px; height:auto; display:block; top:-"+l*k+"px; left:-"+m*j+'px;" /></div>').css({opacity:0,left:m*j+"px",top:l*k+"px",width:h.width()-m*j+"px"}));d('.nivo-box[name="'+j+'"]',h).height(d('.nivo-box[name="'+j+'"] img',h).height()+"px")}else{h.append(d('<div class="nivo-box" name="'+j+'" rel="'+k+'"><img src="'+n.currentImage.attr("src")+'" style="position:absolute; width:'+h.width()+"px; height:auto; display:block; top:-"+l*k+"px; left:-"+m*j+'px;" /></div>').css({opacity:0,left:m*j+"px",top:l*k+"px",width:m+"px"}));d('.nivo-box[name="'+j+'"]',h).height(d('.nivo-box[name="'+j+'"] img',h).height()+"px")}}}z.stop().animate({height:d(n.currentImage).height()},o.animSpeed)};var s=function(U,T,S,R){var Q=U.data("nivo:vars");if(Q&&Q.currentSlide===Q.totalSlides-1){S.lastSlide.call(this)}if((!Q||Q.stop)&&!R){return false}S.beforeChange.call(this);if(!R){z.attr("src",Q.currentImage.attr("src"))}else{if(R==="prev"){z.attr("src",Q.currentImage.attr("src"))}if(R==="next"){z.attr("src",Q.currentImage.attr("src"))}}Q.currentSlide++;if(Q.currentSlide===Q.totalSlides){Q.currentSlide=0;S.slideshowEnd.call(this)}if(Q.currentSlide<0){Q.currentSlide=Q.totalSlides-1}if(d(T[Q.currentSlide]).is("img")){Q.currentImage=d(T[Q.currentSlide])}else{Q.currentImage=d(T[Q.currentSlide]).find("img:first")}if(S.controlNav){d("a",Q.controlNavEl).removeClass("active");d("a:eq("+Q.currentSlide+")",Q.controlNavEl).addClass("active")}y(S);d(".nivo-slice",U).remove();d(".nivo-box",U).remove();var P=S.effect,O="";if(S.effect==="random"){O=new Array("sliceDownRight","sliceDownLeft","sliceUpRight","sliceUpLeft","sliceUpDown","sliceUpDownLeft","fold","fade","boxRandom","boxRain","boxRainReverse","boxRainGrow","boxRainGrowReverse");P=O[Math.floor(Math.random()*(O.length+1))];if(P===undefined){P="fade"}}if(S.effect.indexOf(",")!==-1){O=S.effect.split(",");P=O[Math.floor(Math.random()*O.length)];if(P===undefined){P="fade"}}if(Q.currentImage.attr("data-transition")){P=Q.currentImage.attr("data-transition")}Q.running=true;var N=0,M=0,L="",K="",J="",I="";if(P==="sliceDown"||P==="sliceDownRight"||P==="sliceDownLeft"){u(U,S,Q);N=0;M=0;L=d(".nivo-slice",U);if(P==="sliceDownLeft"){L=d(".nivo-slice",U)._reverse()}L.each(function(){var b=d(this);b.css({top:"0px"});if(M===S.slices-1){setTimeout(function(){b.animate({opacity:"1.0"},S.animSpeed,"",function(){U.trigger("nivo:animFinished")})},100+N)}else{setTimeout(function(){b.animate({opacity:"1.0"},S.animSpeed)},100+N)}N+=50;M++})}else{if(P==="sliceUp"||P==="sliceUpRight"||P==="sliceUpLeft"){u(U,S,Q);N=0;M=0;L=d(".nivo-slice",U);if(P==="sliceUpLeft"){L=d(".nivo-slice",U)._reverse()}L.each(function(){var b=d(this);b.css({bottom:"0px"});if(M===S.slices-1){setTimeout(function(){b.animate({opacity:"1.0"},S.animSpeed,"",function(){U.trigger("nivo:animFinished")})},100+N)}else{setTimeout(function(){b.animate({opacity:"1.0"},S.animSpeed)},100+N)}N+=50;M++})}else{if(P==="sliceUpDown"||P==="sliceUpDownRight"||P==="sliceUpDownLeft"){u(U,S,Q);N=0;M=0;var H=0;L=d(".nivo-slice",U);if(P==="sliceUpDownLeft"){L=d(".nivo-slice",U)._reverse()}L.each(function(){var b=d(this);if(M===0){b.css("top","0px");M++}else{b.css("bottom","0px");M=0}if(H===S.slices-1){setTimeout(function(){b.animate({opacity:"1.0"},S.animSpeed,"",function(){U.trigger("nivo:animFinished")})},100+N)}else{setTimeout(function(){b.animate({opacity:"1.0"},S.animSpeed)},100+N)}N+=50;H++})}else{if(P==="fold"){u(U,S,Q);N=0;M=0;d(".nivo-slice",U).each(function(){var f=d(this);var b=f.width();f.css({top:"0px",width:"0px"});if(M===S.slices-1){setTimeout(function(){f.animate({width:b,opacity:"1.0"},S.animSpeed,"",function(){U.trigger("nivo:animFinished")})},100+N)}else{setTimeout(function(){f.animate({width:b,opacity:"1.0"},S.animSpeed)},100+N)}N+=50;M++})}else{if(P==="fade"){u(U,S,Q);K=d(".nivo-slice:first",U);K.css({width:U.width()+"px"});K.animate({opacity:"1.0"},S.animSpeed*2,"",function(){U.trigger("nivo:animFinished")})}else{if(P==="slideInRight"){u(U,S,Q);K=d(".nivo-slice:first",U);K.css({width:"0px",opacity:"1"});K.animate({width:U.width()+"px"},S.animSpeed*2,"",function(){U.trigger("nivo:animFinished")})}else{if(P==="slideInLeft"){u(U,S,Q);K=d(".nivo-slice:first",U);K.css({width:"0px",opacity:"1",left:"",right:"0px"});K.animate({width:U.width()+"px"},S.animSpeed*2,"",function(){K.css({left:"0px",right:""});U.trigger("nivo:animFinished")})}else{if(P==="boxRandom"){t(U,S,Q);J=S.boxCols*S.boxRows;M=0;N=0;I=r(d(".nivo-box",U));I.each(function(){var b=d(this);if(M===J-1){setTimeout(function(){b.animate({opacity:"1"},S.animSpeed,"",function(){U.trigger("nivo:animFinished")})},100+N)}else{setTimeout(function(){b.animate({opacity:"1"},S.animSpeed)},100+N)}N+=20;M++})}else{if(P==="boxRain"||P==="boxRainReverse"||P==="boxRainGrow"||P==="boxRainGrowReverse"){t(U,S,Q);J=S.boxCols*S.boxRows;M=0;N=0;var G=0;var p=0;var n=[];n[G]=[];I=d(".nivo-box",U);if(P==="boxRainReverse"||P==="boxRainGrowReverse"){I=d(".nivo-box",U)._reverse()}I.each(function(){n[G][p]=d(this);p++;if(p===S.boxCols){G++;p=0;n[G]=[]}});for(var m=0;m<S.boxCols*2;m++){var i=m;for(var h=0;h<S.boxRows;h++){if(i>=0&&i<S.boxCols){(function(Y,X,W,V,q){var o=d(n[Y][X]);var g=o.width();var b=o.height();if(P==="boxRainGrow"||P==="boxRainGrowReverse"){o.width(0).height(0)}if(V===q-1){setTimeout(function(){o.animate({opacity:"1",width:g,height:b},S.animSpeed/1.3,"",function(){U.trigger("nivo:animFinished")})},100+W)}else{setTimeout(function(){o.animate({opacity:"1",width:g,height:b},S.animSpeed/1.3)},100+W)}})(h,i,N,M,J);M++}i--}N+=100}}}}}}}}}}};var r=function(f){for(var e,h,g=f.length;g;e=parseInt(Math.random()*g,10),h=f[--g],f[g]=f[e],f[e]=h){}return f};var a=function(b){if(this.console&&typeof console.log!=="undefined"){console.log(b)}};this.stop=function(){if(!d(F).data("nivo:vars").stop){d(F).data("nivo:vars").stop=true;a("Stop Slider")}};this.start=function(){if(d(F).data("nivo:vars").stop){d(F).data("nivo:vars").stop=false;a("Start Slider")}};D.afterLoad.call(this);return this};d.fn.nivoSlider=function(a){return this.each(function(j,i){var h=d(this);if(h.data("nivoslider")){return h.data("nivoslider")}var b=new c(this,a);h.data("nivoslider",b)})};d.fn.nivoSlider.defaults={effect:"random",slices:15,boxCols:8,boxRows:4,animSpeed:500,pauseTime:3000,startSlide:0,directionNav:true,controlNav:true,controlNavThumbs:false,pauseOnHover:true,manualAdvance:false,prevText:"Prev",nextText:"Next",randomStart:false,beforeChange:function(){},afterChange:function(){},slideshowEnd:function(){},lastSlide:function(){},afterLoad:function(){}};d.fn._reverse=[].reverse})(jQuery);