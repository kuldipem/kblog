(function(b){b.fn.camera=function(a8,a7){function a5(){if(navigator.userAgent.match(/Android/i)||navigator.userAgent.match(/webOS/i)||navigator.userAgent.match(/iPad/i)||navigator.userAgent.match(/iPhone/i)||navigator.userAgent.match(/iPod/i)){return true}}function av(){var c=b(aR).width();b("li",aR).removeClass("camera_visThumb");b("li",aR).each(function(){var p=b(this).position(),o=b("ul",aR).outerWidth(),n=b("ul",aR).offset().left,m=b("> div",aR).offset().left,l=m-n;if(l>0){b(".camera_prevThumbs",ag).removeClass("hideNav")}else{b(".camera_prevThumbs",ag).addClass("hideNav")}if(o-l>c){b(".camera_nextThumbs",ag).removeClass("hideNav")}else{b(".camera_nextThumbs",ag).addClass("hideNav")}var k=p.left,j=p.left+b(this).width();if(j-l<=c&&k-l>=0){b(this).addClass("camera_visThumb")}})}function ar(){function e(){aQ=a4.width();if(a8.height.indexOf("%")!=-1){var d=Math.round(aQ/(100/parseFloat(a8.height)));if(a8.minHeight!=""&&d<parseFloat(a8.minHeight)){aP=parseFloat(a8.minHeight)}else{aP=d}a4.css({height:aP})}else{if(a8.height=="auto"){aP=a4.height()}else{aP=parseFloat(a8.height);a4.css({height:aP})}}b(".camerarelative",aZ).css({width:aQ,height:aP});b(".imgLoaded",aZ).each(function(){var v=b(this),u=v.attr("width"),t=v.attr("height"),s=v.index(),r,q,p=v.attr("data-alignment"),o=v.attr("data-portrait");if(typeof p==="undefined"||p===false||p===""){p=a8.alignment}if(typeof o==="undefined"||o===false||o===""){o=a8.portrait}if(o==false||o=="false"){if(u/t<aQ/aP){var n=aQ/u;var m=Math.abs(aP-t*n)*0.5;switch(p){case"topLeft":r=0;break;case"topCenter":r=0;break;case"topRight":r=0;break;case"centerLeft":r="-"+m+"px";break;case"center":r="-"+m+"px";break;case"centerRight":r="-"+m+"px";break;case"bottomLeft":r="-"+m*2+"px";break;case"bottomCenter":r="-"+m*2+"px";break;case"bottomRight":r="-"+m*2+"px";break}v.css({height:t*n,"margin-left":0,"margin-right":0,"margin-top":r,position:"absolute",visibility:"visible",width:aQ})}else{var n=aP/t;var m=Math.abs(aQ-u*n)*0.5;switch(p){case"topLeft":q=0;break;case"topCenter":q="-"+m+"px";break;case"topRight":q="-"+m*2+"px";break;case"centerLeft":q=0;break;case"center":q="-"+m+"px";break;case"centerRight":q="-"+m*2+"px";break;case"bottomLeft":q=0;break;case"bottomCenter":q="-"+m+"px";break;case"bottomRight":q="-"+m*2+"px";break}v.css({height:aP,"margin-left":q,"margin-right":q,"margin-top":0,position:"absolute",visibility:"visible",width:u*n})}}else{if(u/t<aQ/aP){var n=aP/t;var m=Math.abs(aQ-u*n)*0.5;switch(p){case"topLeft":q=0;break;case"topCenter":q=m+"px";break;case"topRight":q=m*2+"px";break;case"centerLeft":q=0;break;case"center":q=m+"px";break;case"centerRight":q=m*2+"px";break;case"bottomLeft":q=0;break;case"bottomCenter":q=m+"px";break;case"bottomRight":q=m*2+"px";break}v.css({height:aP,"margin-left":q,"margin-right":q,"margin-top":0,position:"absolute",visibility:"visible",width:u*n})}else{var n=aQ/u;var m=Math.abs(aP-t*n)*0.5;switch(p){case"topLeft":r=0;break;case"topCenter":r=0;break;case"topRight":r=0;break;case"centerLeft":r=m+"px";break;case"center":r=m+"px";break;case"centerRight":r=m+"px";break;case"bottomLeft":r=m*2+"px";break;case"bottomCenter":r=m*2+"px";break;case"bottomRight":r=m*2+"px";break}v.css({height:t*n,"margin-left":0,"margin-right":0,"margin-top":r,position:"absolute",visibility:"visible",width:aQ})}}})}var f;if(au==true){clearTimeout(f);f=setTimeout(e,200)}else{e()}au=true}function ae(f){for(var e,h,g=f.length;g;e=parseInt(Math.random()*g),h=f[--g],f[g]=f[e],f[e]=h){}return f}function ad(c){return Math.ceil(c)==Math.floor(c)}function aa(){if(b(aR).length&&!b(aS).length){var s=b(aR).outerWidth(),r=b("ul > li",aR).outerWidth(),q=b("li.cameracurrent",aR).length?b("li.cameracurrent",aR).position():"",p=b("ul > li",aR).length*b("ul > li",aR).outerWidth(),o=b("ul",aR).offset().left,n=b("> div",aR).offset().left,m;if(o<0){m="-"+(n-o)}else{m=n-o}if(aF==true){b("ul",aR).width(b("ul > li",aR).length*b("ul > li",aR).outerWidth());if(b(aR).length&&!b(aS).lenght){a4.css({marginBottom:b(aR).outerHeight()})}av();b("ul",aR).width(b("ul > li",aR).length*b("ul > li",aR).outerWidth());if(b(aR).length&&!b(aS).lenght){a4.css({marginBottom:b(aR).outerHeight()})}}aF=false;var l=b("li.cameracurrent",aR).length?q.left:"",f=b("li.cameracurrent",aR).length?q.left+b("li.cameracurrent",aR).outerWidth():"";if(l<b("li.cameracurrent",aR).outerWidth()){l=0}if(f-m>s){if(l+s<p){b("ul",aR).animate({"margin-left":"-"+l+"px"},500,av)}else{b("ul",aR).animate({"margin-left":"-"+(b("ul",aR).outerWidth()-s)+"px"},500,av)}}else{if(l-m<0){b("ul",aR).animate({"margin-left":"-"+l+"px"},500,av)}else{b("ul",aR).css({"margin-left":"auto","margin-right":"auto"});setTimeout(av,100)}}}}function aJ(){a9=0;var f=b(".camera_bar_cont",ag).width(),e=b(".camera_bar_cont",ag).height();if(a2!="pie"){switch(ah){case"leftToRight":b("#"+a1).css({right:f});break;case"rightToLeft":b("#"+a1).css({left:f});break;case"topToBottom":b("#"+a1).css({bottom:e});break;case"bottomToTop":b("#"+a1).css({top:e});break}}else{aE.clearRect(0,0,a8.pieDiameter,a8.pieDiameter)}}function aG(bp){a0.addClass("camerasliding");ak=false;var bo=parseFloat(b("div.cameraSlide.cameracurrent",aZ).index());if(bp>0){var bn=bp-1}else{if(bo==aB-1){var bn=0}else{var bn=bo+1}}var bm=b(".cameraSlide:eq("+bn+")",aZ);var bl=b(".cameraSlide:eq("+(bn+1)+")",aZ).addClass("cameranext");if(bo!=bn+1){bl.hide()}b(".cameraContent",a3).fadeOut(600);b(".camera_caption",a3).show();b(".camerarelative",bm).append(b("> div ",a0).eq(bn).find("> div.camera_effected"));b(".camera_target_content .cameraContent:eq("+bn+")",a4).append(b("> div ",a0).eq(bn).find("> div"));if(!b(".imgLoaded",bm).length){var bk=aO[bn];var bj=new Image;bj.src=bk+"?"+(new Date).getTime();bm.css("visibility","hidden");bm.prepend(b(bj).attr("class","imgLoaded").css("visibility","hidden"));var bi,bf;if(!b(bj).get(0).complete||bi=="0"||bf=="0"||typeof bi==="undefined"||bi===false||typeof bf==="undefined"||bf===false){b(".camera_loader",a4).delay(500).fadeIn(400);bj.onload=function(){bi=bj.naturalWidth;bf=bj.naturalHeight;b(bj).attr("data-alignment",aK[bn]).attr("data-portrait",aL[bn]);b(bj).attr("width",bi);b(bj).attr("height",bf);aZ.find(".cameraSlide_"+bn).hide().css("visibility","visible");ar();aG(bn+1)}}}else{if(aO.length>bn+1&&!b(".imgLoaded",bl).length){var bd=aO[bn+1];var S=new Image;S.src=bd+"?"+(new Date).getTime();bl.prepend(b(S).attr("class","imgLoaded").css("visibility","hidden"));S.onload=function(){bi=S.naturalWidth;bf=S.naturalHeight;b(S).attr("data-alignment",aK[bn+1]).attr("data-portrait",aL[bn+1]);b(S).attr("width",bi);b(S).attr("height",bf);ar()}}a8.onLoaded.call(this);if(b(".camera_loader",a4).is(":visible")){b(".camera_loader",a4).fadeOut(400)}else{b(".camera_loader",a4).css({visibility:"hidden"});b(".camera_loader",a4).fadeOut(400,function(){b(".camera_loader",a4).css({visibility:"visible"})})}var M=a8.rows,L=a8.cols,K=1,E=0,B,z,y,v,u,t=new Array("simpleFade","curtainTopLeft","curtainTopRight","curtainBottomLeft","curtainBottomRight","curtainSliceLeft","curtainSliceRight","blindCurtainTopLeft","blindCurtainTopRight","blindCurtainBottomLeft","blindCurtainBottomRight","blindCurtainSliceBottom","blindCurtainSliceTop","stampede","mosaic","mosaicReverse","mosaicRandom","mosaicSpiral","mosaicSpiralReverse","topLeftBottomRight","bottomRightTopLeft","bottomLeftTopRight","topRightBottomLeft","scrollLeft","scrollRight","scrollTop","scrollBottom","scrollHorz");marginLeft=0,marginTop=0,opacityOnGrid=0;if(a8.opacityOnGrid==true){opacityOnGrid=0}else{opacityOnGrid=1}var s=b(" > div",a0).eq(bn).attr("data-fx");if(a5()&&a8.mobileFx!=""&&a8.mobileFx!="default"){v=a8.mobileFx}else{if(typeof s!=="undefined"&&s!==false&&s!=="default"){v=s}else{v=a8.fx}}if(v=="random"){v=ae(t);v=v[0]}else{v=v;if(v.indexOf(",")>0){v=v.replace(/ /g,"");v=v.split(",");v=ae(v);v=v[0]}}dataEasing=b(" > div",a0).eq(bn).attr("data-easing");mobileEasing=b(" > div",a0).eq(bn).attr("data-mobileEasing");if(a5()&&a8.mobileEasing!=""&&a8.mobileEasing!="default"){if(typeof mobileEasing!=="undefined"&&mobileEasing!==false&&mobileEasing!=="default"){u=mobileEasing}else{u=a8.mobileEasing}}else{if(typeof dataEasing!=="undefined"&&dataEasing!==false&&dataEasing!=="default"){u=dataEasing}else{u=a8.easing}}B=b(" > div",a0).eq(bn).attr("data-slideOn");if(typeof B!=="undefined"&&B!==false){r=B}else{if(a8.slideOn=="random"){var r=new Array("next","prev");r=ae(r);r=r[0]}else{r=a8.slideOn}}var h=b(" > div",a0).eq(bn).attr("data-time");if(typeof h!=="undefined"&&h!==false&&h!==""){z=parseFloat(h)}else{z=a8.time}var g=b(" > div",a0).eq(bn).attr("data-transPeriod");if(typeof g!=="undefined"&&g!==false&&g!==""){y=parseFloat(g)}else{y=a8.transPeriod}if(!b(a0).hasClass("camerastarted")){v="simpleFade";r="next";u="";y=400;b(a0).addClass("camerastarted")}switch(v){case"simpleFade":L=1;M=1;break;case"curtainTopLeft":if(a8.slicedCols==0){L=a8.cols}else{L=a8.slicedCols}M=1;break;case"curtainTopRight":if(a8.slicedCols==0){L=a8.cols}else{L=a8.slicedCols}M=1;break;case"curtainBottomLeft":if(a8.slicedCols==0){L=a8.cols}else{L=a8.slicedCols}M=1;break;case"curtainBottomRight":if(a8.slicedCols==0){L=a8.cols}else{L=a8.slicedCols}M=1;break;case"curtainSliceLeft":if(a8.slicedCols==0){L=a8.cols}else{L=a8.slicedCols}M=1;break;case"curtainSliceRight":if(a8.slicedCols==0){L=a8.cols}else{L=a8.slicedCols}M=1;break;case"blindCurtainTopLeft":if(a8.slicedRows==0){M=a8.rows}else{M=a8.slicedRows}L=1;break;case"blindCurtainTopRight":if(a8.slicedRows==0){M=a8.rows}else{M=a8.slicedRows}L=1;break;case"blindCurtainBottomLeft":if(a8.slicedRows==0){M=a8.rows}else{M=a8.slicedRows}L=1;break;case"blindCurtainBottomRight":if(a8.slicedRows==0){M=a8.rows}else{M=a8.slicedRows}L=1;break;case"blindCurtainSliceTop":if(a8.slicedRows==0){M=a8.rows}else{M=a8.slicedRows}L=1;break;case"blindCurtainSliceBottom":if(a8.slicedRows==0){M=a8.rows}else{M=a8.slicedRows}L=1;break;case"stampede":E="-"+y;break;case"mosaic":E=a8.gridDifference;break;case"mosaicReverse":E=a8.gridDifference;break;case"mosaicRandom":break;case"mosaicSpiral":E=a8.gridDifference;K=1.7;break;case"mosaicSpiralReverse":E=a8.gridDifference;K=1.7;break;case"topLeftBottomRight":E=a8.gridDifference;K=6;break;case"bottomRightTopLeft":E=a8.gridDifference;K=6;break;case"bottomLeftTopRight":E=a8.gridDifference;K=6;break;case"topRightBottomLeft":E=a8.gridDifference;K=6;break;case"scrollLeft":L=1;M=1;break;case"scrollRight":L=1;M=1;break;case"scrollTop":L=1;M=1;break;case"scrollBottom":L=1;M=1;break;case"scrollHorz":L=1;M=1;break}var bq=0;var R=M*L;var e=aQ-Math.floor(aQ/L)*L;var bb=aP-Math.floor(aP/M)*M;var U;var f;var bc=0;var V=0;var i=new Array;var be=new Array;var W=new Array;while(bq<R){i.push(bq);be.push(bq);ay.append('<div class="cameraappended" style="display:none; overflow:hidden; position:absolute; z-index:1000" />');var j=b(".cameraappended:eq("+bq+")",aZ);if(v=="scrollLeft"||v=="scrollRight"||v=="scrollTop"||v=="scrollBottom"||v=="scrollHorz"){aj.eq(bn).clone().show().appendTo(j)}else{if(r=="next"){aj.eq(bn).clone().show().appendTo(j)}else{aj.eq(bo).clone().show().appendTo(j)}}if(bq%L<e){U=1}else{U=0}if(bq%L==0){bc=0}if(Math.floor(bq/L)<bb){f=1}else{f=0}j.css({height:Math.floor(aP/M+f+1),left:bc,top:V,width:Math.floor(aQ/L+U+1)});b("> .cameraSlide",j).css({height:aP,"margin-left":"-"+bc+"px","margin-top":"-"+V+"px",width:aQ});bc=bc+j.width()-1;if(bq%L==L-1){V=V+j.height()-1}bq++}switch(v){case"curtainTopLeft":break;case"curtainBottomLeft":break;case"curtainSliceLeft":break;case"curtainTopRight":i=i.reverse();break;case"curtainBottomRight":i=i.reverse();break;case"curtainSliceRight":i=i.reverse();break;case"blindCurtainTopLeft":break;case"blindCurtainBottomLeft":i=i.reverse();break;case"blindCurtainSliceTop":break;case"blindCurtainTopRight":break;case"blindCurtainBottomRight":i=i.reverse();break;case"blindCurtainSliceBottom":i=i.reverse();break;case"stampede":i=ae(i);break;case"mosaic":break;case"mosaicReverse":i=i.reverse();break;case"mosaicRandom":i=ae(i);break;case"mosaicSpiral":var bg=M/2,X,k,bh,ab=0;for(bh=0;bh<bg;bh++){k=bh;for(X=bh;X<L-bh-1;X++){W[ab++]=k*L+X}X=L-bh-1;for(k=bh;k<M-bh-1;k++){W[ab++]=k*L+X}k=M-bh-1;for(X=L-bh-1;X>bh;X--){W[ab++]=k*L+X}X=bh;for(k=M-bh-1;k>bh;k--){W[ab++]=k*L+X}}i=W;break;case"mosaicSpiralReverse":var bg=M/2,X,k,bh,ab=R-1;for(bh=0;bh<bg;bh++){k=bh;for(X=bh;X<L-bh-1;X++){W[ab--]=k*L+X}X=L-bh-1;for(k=bh;k<M-bh-1;k++){W[ab--]=k*L+X}k=M-bh-1;for(X=L-bh-1;X>bh;X--){W[ab--]=k*L+X}X=bh;for(k=M-bh-1;k>bh;k--){W[ab--]=k*L+X}}i=W;break;case"topLeftBottomRight":for(var k=0;k<M;k++){for(var X=0;X<L;X++){W.push(X+k)}}be=W;break;case"bottomRightTopLeft":for(var k=0;k<M;k++){for(var X=0;X<L;X++){W.push(X+k)}}be=W.reverse();break;case"bottomLeftTopRight":for(var k=M;k>0;k--){for(var X=0;X<L;X++){W.push(X+k)}}be=W;break;case"topRightBottomLeft":for(var k=0;k<M;k++){for(var X=L;X>0;X--){W.push(X+k)}}be=W;break}b.each(i,function(w,l){function p(){b(this).addClass("cameraeased");if(b(".cameraeased",aZ).length>=0){b(aR).css({visibility:"visible"})}if(b(".cameraeased",aZ).length==R){aa();b(".moveFromLeft, .moveFromRight, .moveFromTop, .moveFromBottom, .fadeIn, .fadeFromLeft, .fadeFromRight, .fadeFromTop, .fadeFromBottom",a3).each(function(){b(this).css("visibility","hidden")});aj.eq(bn).show().css("z-index","999").removeClass("cameranext").addClass("cameracurrent");aj.eq(bo).css("z-index","1").removeClass("cameracurrent");b(".cameraContent",a3).eq(bn).addClass("cameracurrent");if(bo>=0){b(".cameraContent",a3).eq(bo).removeClass("cameracurrent")}a8.onEndTransition.call(this);if(b("> div",a0).eq(bn).attr("data-video")!="hide"&&b(".cameraContent.cameracurrent .imgFake",a3).length){b(".cameraContent.cameracurrent .imgFake",a3).click()}var D=aj.eq(bn).find(".fadeIn").length;var A=b(".cameraContent",a3).eq(bn).find(".moveFromLeft, .moveFromRight, .moveFromTop, .moveFromBottom, .fadeIn, .fadeFromLeft, .fadeFromRight, .fadeFromTop, .fadeFromBottom").length;if(D!=0){b(".cameraSlide.cameracurrent .fadeIn",a3).each(function(){if(b(this).attr("data-easing")!=""){var Q=b(this).attr("data-easing")}else{var Q=u}var P=b(this);if(typeof P.attr("data-outerWidth")==="undefined"||P.attr("data-outerWidth")===false||P.attr("data-outerWidth")===""){var O=P.outerWidth();P.attr("data-outerWidth",O)}else{var O=P.attr("data-outerWidth")}if(typeof P.attr("data-outerHeight")==="undefined"||P.attr("data-outerHeight")===false||P.attr("data-outerHeight")===""){var N=P.outerHeight();P.attr("data-outerHeight",N)}else{var N=P.attr("data-outerHeight")}var J=P.position();var I=J.left;var H=J.top;var G=P.attr("class");var F=P.index();var o=P.parents(".camerarelative").outerHeight();var c=P.parents(".camerarelative").outerWidth();if(G.indexOf("fadeIn")!=-1){P.animate({opacity:0},0).css("visibility","visible").delay(z/D*0.1*(F-1)).animate({opacity:1},z/D*0.15,Q)}else{P.css("visibility","visible")}})}b(".cameraContent.cameracurrent",a3).show();if(A!=0){b(".cameraContent.cameracurrent .moveFromLeft, .cameraContent.cameracurrent .moveFromRight, .cameraContent.cameracurrent .moveFromTop, .cameraContent.cameracurrent .moveFromBottom, .cameraContent.cameracurrent .fadeIn, .cameraContent.cameracurrent .fadeFromLeft, .cameraContent.cameracurrent .fadeFromRight, .cameraContent.cameracurrent .fadeFromTop, .cameraContent.cameracurrent .fadeFromBottom",a3).each(function(){if(b(this).attr("data-easing")!=""){var m=b(this).attr("data-easing")}else{var m=u}var N=b(this);var J=N.position();var I=J.left;var H=J.top;var G=N.attr("class");var F=N.index();var o=N.outerHeight();if(G.indexOf("moveFromLeft")!=-1){N.css({left:"-"+aQ+"px",right:"auto"});N.css("visibility","visible").delay(z/A*0.1*(F-1)).animate({left:J.left},z/A*0.15,m)}else{if(G.indexOf("moveFromRight")!=-1){N.css({left:aQ+"px",right:"auto"});N.css("visibility","visible").delay(z/A*0.1*(F-1)).animate({left:J.left},z/A*0.15,m)}else{if(G.indexOf("moveFromTop")!=-1){N.css({top:"-"+aP+"px",bottom:"auto"});N.css("visibility","visible").delay(z/A*0.1*(F-1)).animate({top:J.top},z/A*0.15,m,function(){N.css({top:"auto",bottom:0})})}else{if(G.indexOf("moveFromBottom")!=-1){N.css({top:aP+"px",bottom:"auto"});N.css("visibility","visible").delay(z/A*0.1*(F-1)).animate({top:J.top},z/A*0.15,m)}else{if(G.indexOf("fadeFromLeft")!=-1){N.animate({opacity:0},0).css({left:"-"+aQ+"px",right:"auto"});N.css("visibility","visible").delay(z/A*0.1*(F-1)).animate({left:J.left,opacity:1},z/A*0.15,m)}else{if(G.indexOf("fadeFromRight")!=-1){N.animate({opacity:0},0).css({left:aQ+"px",right:"auto"});N.css("visibility","visible").delay(z/A*0.1*(F-1)).animate({left:J.left,opacity:1},z/A*0.15,m)}else{if(G.indexOf("fadeFromTop")!=-1){N.animate({opacity:0},0).css({top:"-"+aP+"px",bottom:"auto"});N.css("visibility","visible").delay(z/A*0.1*(F-1)).animate({top:J.top,opacity:1},z/A*0.15,m,function(){N.css({top:"auto",bottom:0})})}else{if(G.indexOf("fadeFromBottom")!=-1){N.animate({opacity:0},0).css({bottom:"-"+o+"px"});N.css("visibility","visible").delay(z/A*0.1*(F-1)).animate({bottom:"0",opacity:1},z/A*0.15,m)}else{if(G.indexOf("fadeIn")!=-1){N.animate({opacity:0},0).css("visibility","visible").delay(z/A*0.1*(F-1)).animate({opacity:1},z/A*0.15,m)}else{N.css("visibility","visible")}}}}}}}}}})}b(".cameraappended",aZ).remove();a0.removeClass("camerasliding");aj.eq(bo).hide();var x=b(".camera_bar_cont",ag).width(),n=b(".camera_bar_cont",ag).height(),C;if(a2!="pie"){C=0.05}else{C=0.005}b("#"+a1).animate({opacity:a8.loaderOpacity},200);aq=setInterval(function(){if(a0.hasClass("stopped")){clearInterval(aq)}if(a2!="pie"){if(a9<=1.002&&!a0.hasClass("stopped")&&!a0.hasClass("paused")&&!a0.hasClass("hovered")){a9=a9+C}else{if(a9<=1&&(a0.hasClass("stopped")||a0.hasClass("paused")||a0.hasClass("stopped")||a0.hasClass("hovered"))){a9=a9}else{if(!a0.hasClass("stopped")&&!a0.hasClass("paused")&&!a0.hasClass("hovered")){clearInterval(aq);af();b("#"+a1).animate({opacity:0},200,function(){clearTimeout(ap);ap=setTimeout(aJ,q);aG();a8.onStartLoading.call(this)})}}}switch(ah){case"leftToRight":b("#"+a1).animate({right:x-x*a9},z*C,"linear");break;case"rightToLeft":b("#"+a1).animate({left:x-x*a9},z*C,"linear");break;case"topToBottom":b("#"+a1).animate({bottom:n-n*a9},z*C,"linear");break;case"bottomToTop":b("#"+a1).animate({bottom:n-n*a9},z*C,"linear");break}}else{aH=a9;aE.clearRect(0,0,a8.pieDiameter,a8.pieDiameter);aE.globalCompositeOperation="destination-over";aE.beginPath();aE.arc(a8.pieDiameter/2,a8.pieDiameter/2,a8.pieDiameter/2-a8.loaderStroke,0,Math.PI*2,false);aE.lineWidth=a8.loaderStroke;aE.strokeStyle=a8.loaderBgColor;aE.stroke();aE.closePath();aE.globalCompositeOperation="source-over";aE.beginPath();aE.arc(a8.pieDiameter/2,a8.pieDiameter/2,a8.pieDiameter/2-a8.loaderStroke,0,Math.PI*2*aH,false);aE.lineWidth=a8.loaderStroke-a8.loaderPadding*2;aE.strokeStyle=a8.loaderColor;aE.stroke();aE.closePath();if(a9<=1.002&&!a0.hasClass("stopped")&&!a0.hasClass("paused")&&!a0.hasClass("hovered")){a9=a9+C}else{if(a9<=1&&(a0.hasClass("stopped")||a0.hasClass("paused")||a0.hasClass("hovered"))){a9=a9}else{if(!a0.hasClass("stopped")&&!a0.hasClass("paused")&&!a0.hasClass("hovered")){clearInterval(aq);af();b("#"+a1+", .camera_canvas_wrap",ag).animate({opacity:0},200,function(){clearTimeout(ap);ap=setTimeout(aJ,q);aG();a8.onStartLoading.call(this)})}}}}},z*C)}}if(l%L<e){U=1}else{U=0}if(l%L==0){bc=0}if(Math.floor(l/L)<bb){f=1}else{f=0}switch(v){case"simpleFade":height=aP;width=aQ;opacityOnGrid=0;break;case"curtainTopLeft":height=0,width=Math.floor(aQ/L+U+1),marginTop="-"+Math.floor(aP/M+f+1)+"px";break;case"curtainTopRight":height=0,width=Math.floor(aQ/L+U+1),marginTop="-"+Math.floor(aP/M+f+1)+"px";break;case"curtainBottomLeft":height=0,width=Math.floor(aQ/L+U+1),marginTop=Math.floor(aP/M+f+1)+"px";break;case"curtainBottomRight":height=0,width=Math.floor(aQ/L+U+1),marginTop=Math.floor(aP/M+f+1)+"px";break;case"curtainSliceLeft":height=0,width=Math.floor(aQ/L+U+1);if(l%2==0){marginTop=Math.floor(aP/M+f+1)+"px"}else{marginTop="-"+Math.floor(aP/M+f+1)+"px"}break;case"curtainSliceRight":height=0,width=Math.floor(aQ/L+U+1);if(l%2==0){marginTop=Math.floor(aP/M+f+1)+"px"}else{marginTop="-"+Math.floor(aP/M+f+1)+"px"}break;case"blindCurtainTopLeft":height=Math.floor(aP/M+f+1),width=0,marginLeft="-"+Math.floor(aQ/L+U+1)+"px";break;case"blindCurtainTopRight":height=Math.floor(aP/M+f+1),width=0,marginLeft=Math.floor(aQ/L+U+1)+"px";break;case"blindCurtainBottomLeft":height=Math.floor(aP/M+f+1),width=0,marginLeft="-"+Math.floor(aQ/L+U+1)+"px";break;case"blindCurtainBottomRight":height=Math.floor(aP/M+f+1),width=0,marginLeft=Math.floor(aQ/L+U+1)+"px";break;case"blindCurtainSliceBottom":height=Math.floor(aP/M+f+1),width=0;if(l%2==0){marginLeft="-"+Math.floor(aQ/L+U+1)+"px"}else{marginLeft=Math.floor(aQ/L+U+1)+"px"}break;case"blindCurtainSliceTop":height=Math.floor(aP/M+f+1),width=0;if(l%2==0){marginLeft="-"+Math.floor(aQ/L+U+1)+"px"}else{marginLeft=Math.floor(aQ/L+U+1)+"px"}break;case"stampede":height=0;width=0;marginLeft=aQ*0.2*(w%L-(L-Math.floor(L/2)))+"px";marginTop=aP*0.2*(Math.floor(w/L)+1-(M-Math.floor(M/2)))+"px";break;case"mosaic":height=0;width=0;break;case"mosaicReverse":height=0;width=0;marginLeft=Math.floor(aQ/L+U+1)+"px";marginTop=Math.floor(aP/M+f+1)+"px";break;case"mosaicRandom":height=0;width=0;marginLeft=Math.floor(aQ/L+U+1)*0.5+"px";marginTop=Math.floor(aP/M+f+1)*0.5+"px";break;case"mosaicSpiral":height=0;width=0;marginLeft=Math.floor(aQ/L+U+1)*0.5+"px";marginTop=Math.floor(aP/M+f+1)*0.5+"px";break;case"mosaicSpiralReverse":height=0;width=0;marginLeft=Math.floor(aQ/L+U+1)*0.5+"px";marginTop=Math.floor(aP/M+f+1)*0.5+"px";break;case"topLeftBottomRight":height=0;width=0;break;case"bottomRightTopLeft":height=0;width=0;marginLeft=Math.floor(aQ/L+U+1)+"px";marginTop=Math.floor(aP/M+f+1)+"px";break;case"bottomLeftTopRight":height=0;width=0;marginLeft=0;marginTop=Math.floor(aP/M+f+1)+"px";break;case"topRightBottomLeft":height=0;width=0;marginLeft=Math.floor(aQ/L+U+1)+"px";marginTop=0;break;case"scrollRight":height=aP;width=aQ;marginLeft=-aQ;break;case"scrollLeft":height=aP;width=aQ;marginLeft=aQ;break;case"scrollTop":height=aP;width=aQ;marginTop=aP;break;case"scrollBottom":height=aP;width=aQ;marginTop=-aP;break;case"scrollHorz":height=aP;width=aQ;if(bo==0&&bn==aB-1){marginLeft=-aQ}else{if(bo<bn||bo==aB-1&&bn==0){marginLeft=aQ}else{marginLeft=-aQ}}break}var d=b(".cameraappended:eq("+l+")",aZ);if(typeof aq!=="undefined"){clearInterval(aq);clearTimeout(ap);ap=setTimeout(aJ,y+E)}if(b(aS).length){b(".camera_pag li",a4).removeClass("cameracurrent");b(".camera_pag li",a4).eq(bn).addClass("cameracurrent")}if(b(aR).length){b("li",aR).removeClass("cameracurrent");b("li",aR).eq(bn).addClass("cameracurrent");b("li",aR).not(".cameracurrent").find("img").animate({opacity:0.5},0);b("li.cameracurrent img",aR).animate({opacity:1},0);b("li",aR).hover(function(){b("img",this).stop(true,false).animate({opacity:1},150)},function(){if(!b(this).hasClass("cameracurrent")){b("img",this).stop(true,false).animate({opacity:0.5},150)}})}var q=parseFloat(y)+parseFloat(E);if(v=="scrollLeft"||v=="scrollRight"||v=="scrollTop"||v=="scrollBottom"||v=="scrollHorz"){a8.onStartTransition.call(this);q=0;d.delay((y+E)/R*be[w]*K*0.5).css({display:"block",height:height,"margin-left":marginLeft,"margin-top":marginTop,width:width}).animate({height:Math.floor(aP/M+f+1),"margin-top":0,"margin-left":0,width:Math.floor(aQ/L+U+1)},y-E,u,p);aj.eq(bo).delay((y+E)/R*be[w]*K*0.5).animate({"margin-left":marginLeft*-1,"margin-top":marginTop*-1},y-E,u,function(){b(this).css({"margin-top":0,"margin-left":0})})}else{a8.onStartTransition.call(this);q=parseFloat(y)+parseFloat(E);if(r=="next"){d.delay((y+E)/R*be[w]*K*0.5).css({display:"block",height:height,"margin-left":marginLeft,"margin-top":marginTop,width:width,opacity:opacityOnGrid}).animate({height:Math.floor(aP/M+f+1),"margin-top":0,"margin-left":0,opacity:1,width:Math.floor(aQ/L+U+1)},y-E,u,p)}else{aj.eq(bn).show().css("z-index","999").addClass("cameracurrent");aj.eq(bo).css("z-index","1").removeClass("cameracurrent");b(".cameraContent",a3).eq(bn).addClass("cameracurrent");b(".cameraContent",a3).eq(bo).removeClass("cameracurrent");d.delay((y+E)/R*be[w]*K*0.5).css({display:"block",height:Math.floor(aP/M+f+1),"margin-top":0,"margin-left":0,opacity:1,width:Math.floor(aQ/L+U+1)}).animate({height:height,"margin-left":marginLeft,"margin-top":marginTop,width:width,opacity:opacityOnGrid},y-E,u,p)}}})}}var a6={alignment:"center",autoAdvance:true,mobileAutoAdvance:true,barDirection:"leftToRight",barPosition:"bottom",cols:6,easing:"easeInOutExpo",mobileEasing:"",fx:"random",mobileFx:"",gridDifference:250,height:"50%",imagePath:"images/",hover:true,loader:"pie",loaderColor:"#eeeeee",loaderBgColor:"#222222",loaderOpacity:0.8,loaderPadding:2,loaderStroke:7,minHeight:"200px",navigation:true,navigationHover:true,mobileNavHover:true,opacityOnGrid:false,overlayer:true,pagination:true,playPause:true,pauseOnClick:true,pieDiameter:38,piePosition:"rightTop",portrait:false,rows:4,slicedCols:12,slicedRows:8,slideOn:"random",thumbnails:false,time:7000,transPeriod:1500,onEndTransition:function(){},onLoaded:function(){},onStartLoading:function(){},onStartTransition:function(){}};var a8=b.extend({},a6,a8);var a4=b(this).addClass("camera_wrap");a4.wrapInner('<div class="camera_src" />').wrapInner('<div class="camera_fakehover" />');var a3=b(".camera_fakehover",a4);a3.append('<div class="camera_target"></div>');if(a8.overlayer==true){a3.append('<div class="camera_overlayer"></div>')}a3.append('<div class="camera_target_content"></div>');var a2;if(a8.loader=="pie"&&b.browser.msie&&b.browser.version<9){a2="bar"}else{a2=a8.loader}if(a2=="pie"){a3.append('<div class="camera_pie"></div>')}else{if(a2=="bar"){a3.append('<div class="camera_bar"></div>')}else{a3.append('<div class="camera_bar" style="display:none"></div>')}}if(a8.playPause==true){a3.append('<div class="camera_commands"></div>')}if(a8.navigation==true){a3.append('<div class="camera_prev"><span></span></div>').append('<div class="camera_next"><span></span></div>')}if(a8.thumbnails==true){a4.append('<div class="camera_thumbs_cont" />')}if(a8.thumbnails==true&&a8.pagination!=true){b(".camera_thumbs_cont",a4).wrap("<div />").wrap('<div class="camera_thumbs" />').wrap("<div />").wrap('<div class="camera_command_wrap" />')}if(a8.pagination==true){a4.append('<div class="camera_pag"></div>')}a4.append('<div class="camera_loader"></div>');b(".camera_caption",a4).each(function(){b(this).wrapInner("<div />")});var a1="pie_"+a4.index(),a0=b(".camera_src",a4),aZ=b(".camera_target",a4),aY=b(".camera_target_content",a4),aX=b(".camera_pie",a4),aW=b(".camera_bar",a4),aV=b(".camera_prev",a4),aU=b(".camera_next",a4),aT=b(".camera_commands",a4),aS=b(".camera_pag",a4),aR=b(".camera_thumbs_cont",a4);var aQ,aP;var aO=new Array;b("> div",a0).each(function(){aO.push(b(this).attr("data-src"))});var aN=new Array;b("> div",a0).each(function(){if(b(this).attr("data-link")){aN.push(b(this).attr("data-link"))}else{aN.push("")}});var aM=new Array;b("> div",a0).each(function(){if(b(this).attr("data-target")){aM.push(b(this).attr("data-target"))}else{aM.push("")}});var aL=new Array;b("> div",a0).each(function(){if(b(this).attr("data-portrait")){aL.push(b(this).attr("data-portrait"))}else{aL.push("")}});var aK=new Array;b("> div",a0).each(function(){if(b(this).attr("data-alignment")){aK.push(b(this).attr("data-alignment"))}else{aK.push("")}});var aD=new Array;b("> div",a0).each(function(){if(b(this).attr("data-thumb")){aD.push(b(this).attr("data-thumb"))}else{aD.push("")}});var aB=aO.length;b(aY).append('<div class="cameraContents" />');var aA;for(aA=0;aA<aB;aA++){b(".cameraContents",aY).append('<div class="cameraContent" />');if(aN[aA]!=""){var az=b("> div ",a0).eq(aA).attr("data-box");if(typeof az!=="undefined"&&az!==false&&az!=""){az='data-box="'+b("> div ",a0).eq(aA).attr("data-box")+'"'}else{az=""}b(".camera_target_content .cameraContent:eq("+aA+")",a4).append('<a class="camera_link" href="'+aN[aA]+'" '+az+' target="'+aM[aA]+'"></a>')}}b(".camera_caption",a4).each(function(){var d=b(this).parent().index(),e=a4.find(".cameraContent").eq(d);b(this).appendTo(e)});aZ.append('<div class="cameraCont" />');var ay=b(".cameraCont",a4);var ax;for(ax=0;ax<aB;ax++){ay.append('<div class="cameraSlide cameraSlide_'+ax+'" />');var aw=b("> div:eq("+ax+")",a0);aZ.find(".cameraSlide_"+ax).clone(aw)}b(window).bind("load resize pageshow",function(){aa();av()});ay.append('<div class="cameraSlide cameraSlide_'+ax+'" />');var au;a4.show();var aQ=aZ.width();var aP=aZ.height();var at;b(window).bind("resize pageshow",function(){if(au==true){ar()}b("ul",aR).animate({"margin-top":0},0,aa);if(!a0.hasClass("paused")){a0.addClass("paused");if(b(".camera_stop",ag).length){b(".camera_stop",ag).hide();b(".camera_play",ag).show();if(a2!="none"){b("#"+a1).hide()}}else{if(a2!="none"){b("#"+a1).hide()}}clearTimeout(at);at=setTimeout(function(){a0.removeClass("paused");if(b(".camera_play",ag).length){b(".camera_play",ag).hide();b(".camera_stop",ag).show();if(a2!="none"){b("#"+a1).fadeIn()}}else{if(a2!="none"){b("#"+a1).fadeIn()}}},1500)}});var aq,ap;var ao,an,am,aT,aS;var al,ak;if(a5()&&a8.mobileAutoAdvance!=""){an=a8.mobileAutoAdvance}else{an=a8.autoAdvance}if(an==false){a0.addClass("paused")}if(a5()&&a8.mobileNavHover!=""){am=a8.mobileNavHover}else{am=a8.navigationHover}if(a0.length!=0){var aj=b(".cameraSlide",aZ);aj.wrapInner('<div class="camerarelative" />');var ai;var ah=a8.barDirection;var ag=a4;b("iframe",a3).each(function(){var e=b(this);var g=e.attr("src");e.attr("data-src",g);var f=e.parent().index(".camera_src > div");b(".camera_target_content .cameraContent:eq("+f+")",a4).append(e)});function af(){b("iframe",a3).each(function(){b(".camera_caption",a3).show();var n=b(this);var m=n.attr("data-src");n.attr("src",m);var l=a8.imagePath+"blank.gif";var k=new Image;k.src=l;if(a8.height.indexOf("%")!=-1){var g=Math.round(aQ/(100/parseFloat(a8.height)));if(a8.minHeight!=""&&g<parseFloat(a8.minHeight)){aP=parseFloat(a8.minHeight)}else{aP=g}}else{if(a8.height=="auto"){aP=a4.height()}else{aP=parseFloat(a8.height)}}n.after(b(k).attr({"class":"imgFake",width:aQ,height:aP}));var f=n.clone();n.remove();b(k).bind("click",function(){if(b(this).css("position")=="absolute"){b(this).remove();if(m.indexOf("vimeo")!=-1||m.indexOf("youtube")!=-1){if(m.indexOf("?")!=-1){autoplay="&autoplay=1"}else{autoplay="?autoplay=1"}}else{if(m.indexOf("dailymotion")!=-1){if(m.indexOf("?")!=-1){autoplay="&autoPlay=1"}else{autoplay="?autoPlay=1"}}}f.attr("src",m+autoplay);ak=true}else{b(this).css({position:"absolute",top:0,left:0,zIndex:10}).after(f);f.css({position:"absolute",top:0,left:0,zIndex:9})}})})}af();if(a8.hover==true){if(!a5()){a3.hover(function(){a0.addClass("hovered")},function(){a0.removeClass("hovered")})}}if(am==true){b(aV,a4).animate({opacity:0},0);b(aU,a4).animate({opacity:0},0);b(aT,a4).animate({opacity:0},0);if(a5()){a3.live("vmouseover",function(){b(aV,a4).animate({opacity:1},200);b(aU,a4).animate({opacity:1},200);b(aT,a4).animate({opacity:1},200)});a3.live("vmouseout",function(){b(aV,a4).delay(500).animate({opacity:0},200);b(aU,a4).delay(500).animate({opacity:0},200);b(aT,a4).delay(500).animate({opacity:0},200)})}else{a3.hover(function(){b(aV,a4).animate({opacity:1},200);b(aU,a4).animate({opacity:1},200);b(aT,a4).animate({opacity:1},200)},function(){b(aV,a4).animate({opacity:0},200);b(aU,a4).animate({opacity:0},200);b(aT,a4).animate({opacity:0},200)})}}b(".camera_stop",ag).live("click",function(){an=false;a0.addClass("paused");if(b(".camera_stop",ag).length){b(".camera_stop",ag).hide();b(".camera_play",ag).show();if(a2!="none"){b("#"+a1).hide()}}else{if(a2!="none"){b("#"+a1).hide()}}});b(".camera_play",ag).live("click",function(){an=true;a0.removeClass("paused");if(b(".camera_play",ag).length){b(".camera_play",ag).hide();b(".camera_stop",ag).show();if(a2!="none"){b("#"+a1).show()}}else{if(a2!="none"){b("#"+a1).show()}}});if(a8.pauseOnClick==true){b(".camera_target_content",a3).mouseup(function(){an=false;a0.addClass("paused");b(".camera_stop",ag).hide();b(".camera_play",ag).show();b("#"+a1).hide()})}b(".cameraContent, .imgFake",a3).hover(function(){al=true},function(){al=false});b(".cameraContent, .imgFake",a3).bind("click",function(){if(ak==true&&al==true){an=false;b(".camera_caption",a3).hide();a0.addClass("paused");b(".camera_stop",ag).hide();b(".camera_play",ag).show();b("#"+a1).hide()}})}if(a2!="pie"){aW.append('<span class="camera_bar_cont" />');b(".camera_bar_cont",aW).animate({opacity:a8.loaderOpacity},0).css({position:"absolute",left:0,right:0,top:0,bottom:0,"background-color":a8.loaderBgColor}).append('<span id="'+a1+'" />');b("#"+a1).animate({opacity:0},0);var ac=b("#"+a1);ac.css({position:"absolute","background-color":a8.loaderColor});switch(a8.barPosition){case"left":aW.css({right:"auto",width:a8.loaderStroke});break;case"right":aW.css({left:"auto",width:a8.loaderStroke});break;case"top":aW.css({bottom:"auto",height:a8.loaderStroke});break;case"bottom":aW.css({top:"auto",height:a8.loaderStroke});break}switch(ah){case"leftToRight":ac.css({left:0,right:0,top:a8.loaderPadding,bottom:a8.loaderPadding});break;case"rightToLeft":ac.css({left:0,right:0,top:a8.loaderPadding,bottom:a8.loaderPadding});break;case"topToBottom":ac.css({left:a8.loaderPadding,right:a8.loaderPadding,top:0,bottom:0});break;case"bottomToTop":ac.css({left:a8.loaderPadding,right:a8.loaderPadding,top:0,bottom:0});break}}else{aX.append('<canvas id="'+a1+'"></canvas>');var ba;var ac=document.getElementById(a1);ac.setAttribute("width",a8.pieDiameter);ac.setAttribute("height",a8.pieDiameter);var aC;switch(a8.piePosition){case"leftTop":aC="left:0; top:0;";break;case"rightTop":aC="right:0; top:0;";break;case"leftBottom":aC="left:0; bottom:0;";break;case"rightBottom":aC="right:0; bottom:0;";break}ac.setAttribute("style","position:absolute; z-index:1002; "+aC);var a9;var aH;if(ac&&ac.getContext){var aE=ac.getContext("2d");aE.rotate(Math.PI*(3/2));aE.translate(-a8.pieDiameter,0)}}if(a2=="none"||an==false){b("#"+a1).hide();b(".camera_canvas_wrap",ag).hide()}if(b(aS).length){b(aS).append('<ul class="camera_pag_ul" />');var a;for(a=0;a<aB;a++){b(".camera_pag_ul",a4).append('<li class="pag_nav_'+a+'" style="position:relative; z-index:1002"><span><span>'+a+"</span></span></li>")}b(".camera_pag_ul li",a4).hover(function(){b(this).addClass("camera_hover");if(b(".camera_thumb",this).length){var e=b(".camera_thumb",this).outerWidth(),g=b(".camera_thumb",this).outerHeight(),f=b(this).outerWidth();b(".camera_thumb",this).show().css({top:"-"+g+"px",left:"-"+(e-f)/2+"px"}).animate({opacity:1,"margin-top":"-3px"},200);b(".thumb_arrow",this).show().animate({opacity:1,"margin-top":"-3px"},200)}},function(){b(this).removeClass("camera_hover");b(".camera_thumb",this).animate({"margin-top":"-20px",opacity:0},200,function(){b(this).css({marginTop:"5px"}).hide()});b(".thumb_arrow",this).animate({"margin-top":"-20px",opacity:0},200,function(){b(this).css({marginTop:"5px"}).hide()})})}if(b(aR).length){var aI;if(!b(aS).length){b(aR).append("<div />");b(aR).before('<div class="camera_prevThumbs hideNav"><div></div></div>').before('<div class="camera_nextThumbs hideNav"><div></div></div>');b("> div",aR).append("<ul />");b.each(aD,function(f,i){if(b("> div",a0).eq(f).attr("data-thumb")!=""){var h=b("> div",a0).eq(f).attr("data-thumb"),g=new Image;g.src=h;b("ul",aR).append('<li class="pix_thumb pix_thumb_'+f+'" />');b("li.pix_thumb_"+f,aR).append(b(g).attr("class","camera_thumb"))}})}else{b.each(aD,function(f,i){if(b("> div",a0).eq(f).attr("data-thumb")!=""){var h=b("> div",a0).eq(f).attr("data-thumb"),g=new Image;g.src=h;b("li.pag_nav_"+f,aS).append(b(g).attr("class","camera_thumb").css({position:"absolute"}).animate({opacity:0},0));b("li.pag_nav_"+f+" > img",aS).after('<div class="thumb_arrow" />');b("li.pag_nav_"+f+" > .thumb_arrow",aS).animate({opacity:0},0)}});a4.css({marginBottom:b(aS).outerHeight()})}}else{if(!b(aR).length&&b(aS).length){a4.css({marginBottom:b(aS).outerHeight()})}}var aF=true;if(b(aT).length){b(aT).append('<div class="camera_play"></div>').append('<div class="camera_stop"></div>');if(an==true){b(".camera_play",ag).hide();b(".camera_stop",ag).show()}else{b(".camera_stop",ag).hide();b(".camera_play",ag).show()}}aJ();b(".moveFromLeft, .moveFromRight, .moveFromTop, .moveFromBottom, .fadeIn, .fadeFromLeft, .fadeFromRight, .fadeFromTop, .fadeFromBottom",a3).each(function(){b(this).css("visibility","hidden")});a8.onStartLoading.call(this);aG();if(b(aV).length){b(aV).click(function(){if(!a0.hasClass("camerasliding")){var d=parseFloat(b(".cameraSlide.cameracurrent",aZ).index());clearInterval(aq);af();b("#"+a1+", .camera_canvas_wrap",a4).animate({opacity:0},0);aJ();if(d!=0){aG(d)}else{aG(aB)}a8.onStartLoading.call(this)}})}if(b(aU).length){b(aU).click(function(){if(!a0.hasClass("camerasliding")){var d=parseFloat(b(".cameraSlide.cameracurrent",aZ).index());clearInterval(aq);af();b("#"+a1+", .camera_canvas_wrap",ag).animate({opacity:0},0);aJ();if(d==aB-1){aG(1)}else{aG(d+2)}a8.onStartLoading.call(this)}})}if(a5()){a3.bind("swipeleft",function(f){if(!a0.hasClass("camerasliding")){var e=parseFloat(b(".cameraSlide.cameracurrent",aZ).index());clearInterval(aq);af();b("#"+a1+", .camera_canvas_wrap",ag).animate({opacity:0},0);aJ();if(e==aB-1){aG(1)}else{aG(e+2)}a8.onStartLoading.call(this)}});a3.bind("swiperight",function(f){if(!a0.hasClass("camerasliding")){var e=parseFloat(b(".cameraSlide.cameracurrent",aZ).index());clearInterval(aq);af();b("#"+a1+", .camera_canvas_wrap",ag).animate({opacity:0},0);aJ();if(e!=0){aG(e)}else{aG(aB)}a8.onStartLoading.call(this)}})}if(b(aS).length){b(".camera_pag li",a4).click(function(){if(!a0.hasClass("camerasliding")){var f=parseFloat(b(this).index());var e=parseFloat(b(".cameraSlide.cameracurrent",aZ).index());if(f!=e){clearInterval(aq);af();b("#"+a1+", .camera_canvas_wrap",ag).animate({opacity:0},0);aJ();aG(f+1);a8.onStartLoading.call(this)}}})}if(b(aR).length){b(".pix_thumb img",aR).click(function(){if(!a0.hasClass("camerasliding")){var f=parseFloat(b(this).parents("li").index());var e=parseFloat(b(".cameracurrent",aZ).index());if(f!=e){clearInterval(aq);af();b("#"+a1+", .camera_canvas_wrap",ag).animate({opacity:0},0);b(".pix_thumb",aR).removeClass("cameracurrent");b(this).parents("li").addClass("cameracurrent");aJ();aG(f+1);aa();a8.onStartLoading.call(this)}}});b(".camera_thumbs_cont .camera_prevThumbs",ag).hover(function(){b(this).stop(true,false).animate({opacity:1},250)},function(){b(this).stop(true,false).animate({opacity:0.7},250)});b(".camera_prevThumbs",ag).click(function(){var g=0,k=b(aR).outerWidth(),j=b("ul",aR).offset().left,i=b("> div",aR).offset().left,h=i-j;b(".camera_visThumb",aR).each(function(){var d=b(this).outerWidth();g=g+d});if(h-g>0){b("ul",aR).animate({"margin-left":"-"+(h-g)+"px"},500,av)}else{b("ul",aR).animate({"margin-left":0},500,av)}});b(".camera_thumbs_cont .camera_nextThumbs",ag).hover(function(){b(this).stop(true,false).animate({opacity:1},250)},function(){b(this).stop(true,false).animate({opacity:0.7},250)});b(".camera_nextThumbs",ag).click(function(){var h=0,m=b(aR).outerWidth(),l=b("ul",aR).outerWidth(),k=b("ul",aR).offset().left,j=b("> div",aR).offset().left,i=j-k;b(".camera_visThumb",aR).each(function(){var d=b(this).outerWidth();h=h+d});if(i+h+h<l){b("ul",aR).animate({"margin-left":"-"+(i+h)+"px"},500,av)}else{b("ul",aR).animate({"margin-left":"-"+(l-m)+"px"},500,av)}})}}})(jQuery);(function(b){b.fn.cameraStop=function(){var a=b(this),h=b(".camera_src",a),g="pie_"+a.index();h.addClass("stopped");if(b(".camera_showcommands").length){var f=b(".camera_thumbs_wrap",a)}else{var f=a}}})(jQuery);(function(b){b.fn.cameraPause=function(){var a=b(this);var d=b(".camera_src",a);d.addClass("paused")}})(jQuery);(function(b){b.fn.cameraResume=function(){var a=b(this);var d=b(".camera_src",a);if(typeof autoAdv==="undefined"||autoAdv!==true){d.removeClass("paused")}}})(jQuery);