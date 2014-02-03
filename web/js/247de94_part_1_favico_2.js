(function(){var a=(function(e){e=(e)?e:{};var x={bgColor:"#d00",textColor:"#fff",fontFamily:"sans-serif",fontStyle:"bold",type:"circle",position:"down",animation:"slide",elementId:false};var l,z,g,B,t,v,i,f,s,u,q,o,r,c,E;r={};r.ff=(/firefox/i.test(navigator.userAgent.toLowerCase()));r.chrome=(/chrome/i.test(navigator.userAgent.toLowerCase()));r.opera=(/opera/i.test(navigator.userAgent.toLowerCase()));r.ie=(/msie/i.test(navigator.userAgent.toLowerCase()))||(/trident/i.test(navigator.userAgent.toLowerCase()));r.supported=(r.chrome||r.ff||r.opera);var n=[];q=function(){};f=o=false;var y=function(){l=m(x,e);l.bgColor=F(l.bgColor);l.textColor=F(l.textColor);l.position=l.position.toLowerCase();l.animation=(C.types[""+l.animation])?l.animation:x.animation;var K=l.position.indexOf("up")>-1;var L=l.position.indexOf("left")>-1;if(K||L){for(var H=0;H<C.types[""+l.animation].length;H++){var I=C.types[""+l.animation][H];if(K){if(I.y<0.6){I.y=I.y-0.4}else{I.y=I.y-2*I.y+(1-I.w)}}if(L){if(I.x<0.6){I.x=I.x-0.4}else{I.x=I.x-2*I.x+(1-I.h)}}C.types[""+l.animation][H]=I}}l.type=(k[""+l.type])?l.type:x.type;try{z=p.getIcon();t=document.createElement("canvas");i=document.createElement("img");if(z.hasAttribute("href")){i.setAttribute("src",z.getAttribute("href"));i.onload=function(){g=(i.height>0)?i.height:32;B=(i.width>0)?i.width:32;t.height=g;t.width=B;v=t.getContext("2d");D.ready()}}else{i.setAttribute("src","");g=32;B=32;i.height=g;i.width=B;t.height=g;t.width=B;v=t.getContext("2d");D.ready()}}catch(J){throw"Error initializing favico. Message: "+J.message}};var D={};D.ready=function(){f=true;D.reset();q()};D.reset=function(){n=[];s=false;v.clearRect(0,0,B,g);v.drawImage(i,0,0,B,g);p.setIcon(t);window.clearTimeout(c);window.clearTimeout(E)};D.start=function(){if(!f||u){return}var I=function(){s=n[0];u=false;if(n.length>0){n.shift();D.start()}else{}};if(n.length>0){u=true;var H=function(){["type","animation","bgColor","textColor","fontFamily","fontStyle"].forEach(function(J){if(J in n[0].options){l[J]=n[0].options[J]}});C.run(n[0].options,function(){I()},false)};if(s){C.run(s.options,function(){H()},true)}else{H()}}};var k={};var j=function(H){H.n=((typeof H.n)==="number")?Math.abs(H.n|0):H.n;H.x=B*H.x;H.y=g*H.y;H.w=B*H.w;H.h=g*H.h;H.len=(""+H.n).length;return H};k.circle=function(I){I=j(I);var H=false;if(I.len===2){I.x=I.x-I.w*0.4;I.w=I.w*1.4;H=true}else{if(I.len>=3){I.x=I.x-I.w*0.65;I.w=I.w*1.65;H=true}}v.clearRect(0,0,B,g);v.drawImage(i,0,0,B,g);v.beginPath();v.font=l.fontStyle+" "+Math.floor(I.h*(I.n>99?0.85:1))+"px "+l.fontFamily;v.textAlign="center";if(H){v.moveTo(I.x+I.w/2,I.y);v.lineTo(I.x+I.w-I.h/2,I.y);v.quadraticCurveTo(I.x+I.w,I.y,I.x+I.w,I.y+I.h/2);v.lineTo(I.x+I.w,I.y+I.h-I.h/2);v.quadraticCurveTo(I.x+I.w,I.y+I.h,I.x+I.w-I.h/2,I.y+I.h);v.lineTo(I.x+I.h/2,I.y+I.h);v.quadraticCurveTo(I.x,I.y+I.h,I.x,I.y+I.h-I.h/2);v.lineTo(I.x,I.y+I.h/2);v.quadraticCurveTo(I.x,I.y,I.x+I.h/2,I.y)}else{v.arc(I.x+I.w/2,I.y+I.h/2,I.h/2,0,2*Math.PI)}v.fillStyle="rgba("+l.bgColor.r+","+l.bgColor.g+","+l.bgColor.b+","+I.o+")";v.fill();v.closePath();v.beginPath();v.stroke();v.fillStyle="rgba("+l.textColor.r+","+l.textColor.g+","+l.textColor.b+","+I.o+")";if((typeof I.n)==="number"&&I.n>999){v.fillText(((I.n>9999)?9:Math.floor(I.n/1000))+"k+",Math.floor(I.x+I.w/2),Math.floor(I.y+I.h-I.h*0.2))}else{v.fillText(I.n,Math.floor(I.x+I.w/2),Math.floor(I.y+I.h-I.h*0.15))}v.closePath()};k.rectangle=function(I){I=j(I);var H=false;if(I.len===2){I.x=I.x-I.w*0.4;I.w=I.w*1.4;H=true}else{if(I.len>=3){I.x=I.x-I.w*0.65;I.w=I.w*1.65;H=true}}v.clearRect(0,0,B,g);v.drawImage(i,0,0,B,g);v.beginPath();v.font="bold "+Math.floor(I.h*(I.n>99?0.9:1))+"px sans-serif";v.textAlign="center";v.fillStyle="rgba("+l.bgColor.r+","+l.bgColor.g+","+l.bgColor.b+","+I.o+")";v.fillRect(I.x,I.y,I.w,I.h);v.fillStyle="rgba("+l.textColor.r+","+l.textColor.g+","+l.textColor.b+","+I.o+")";if((typeof I.n)==="number"&&I.len>3){v.fillText(((I.n>9999)?9:Math.floor(I.n/1000))+"k+",Math.floor(I.x+I.w/2),Math.floor(I.y+I.h-I.h*0.2))}else{v.fillText(I.n,Math.floor(I.x+I.w/2),Math.floor(I.y+I.h-I.h*0.15))}v.closePath()};var h=function(I,H){H=((typeof H)==="string"?{animation:H}:H)||{};q=function(){try{if(typeof(I)==="number"?(I>0):(I!=="")){var J={type:"badge",options:{n:I}};if("animation" in H&&C.types[""+H.animation]){J.options.animation=""+H.animation}if("type" in H&&k[""+H.type]){J.options.type=""+H.type}["bgColor","textColor"].forEach(function(L){if(L in H){J.options[L]=F(H[L])}});["fontStyle","fontFamily"].forEach(function(L){if(L in H){J.options[L]=H[L]}});n.push(J);if(n.length>100){throw"Too many badges requests in queue."}D.start()}else{D.reset()}}catch(K){throw"Error setting badge. Message: "+K.message}};if(f){q()}};var w=function(H){q=function(){try{var I=H.width;var K=H.height;var L=document.createElement("img");var J=(I/B<K/g)?(I/B):(K/g);L.setAttribute("src",H.getAttribute("src"));L.height=(K/J);L.width=(I/J);v.clearRect(0,0,B,g);v.drawImage(L,0,0,B,g);p.setIcon(t)}catch(M){throw"Error setting image. Message: "+M.message}};if(f){q()}};var A=function(H){q=function(){try{if(H==="stop"){o=true;D.reset();o=false;return}H.addEventListener("play",function(){G(this)},false)}catch(I){throw"Error setting video. Message: "+I.message}};if(f){q()}};var b=function(I){if(!window.URL||!window.URL.createObjectURL){window.URL=window.URL||{};window.URL.createObjectURL=function(J){return J}}if(r.supported){var H=false;navigator.getUserMedia=navigator.getUserMedia||navigator.oGetUserMedia||navigator.msGetUserMedia||navigator.mozGetUserMedia||navigator.webkitGetUserMedia;q=function(){try{if(I==="stop"){o=true;D.reset();o=false;return}H=document.createElement("video");H.width=B;H.height=g;navigator.getUserMedia({video:true,audio:false},function(K){H.src=URL.createObjectURL(K);H.play();G(H)},function(){})}catch(J){throw"Error setting webcam. Message: "+J.message}};if(f){q()}}};function G(H){if(H.paused||H.ended||o){return false}try{v.clearRect(0,0,B,g);v.drawImage(H,0,0,B,g)}catch(I){}E=setTimeout(G,C.duration,H);p.setIcon(t)}var p={};p.getIcon=function(){var J=false;var H="";var I=function(){var M=document.getElementsByTagName("head")[0].getElementsByTagName("link");for(var K=M.length,L=(K-1);L>=0;L--){if((/(^|\s)icon(\s|$)/i).test(M[L].getAttribute("rel"))){return M[L]}}return false};if(l.elementId){J=document.getElementById(l.elementId);J.setAttribute("href",J.getAttribute("src"))}else{J=I();if(J===false){J=document.createElement("link");J.setAttribute("rel","icon");document.getElementsByTagName("head")[0].appendChild(J)}}H=(l.elementId)?J.src:J.href;if(H.indexOf(document.location.hostname)===-1){throw new Error("Error setting favicon. Favicon image is on different domain (Icon: "+H+", Domain: "+document.location.hostname+")")}J.setAttribute("type","image/png");return J};p.setIcon=function(J){var I=J.toDataURL("image/png");if(l.elementId){document.getElementById(l.elementId).setAttribute("src",I)}else{if(r.ff||r.opera){var H=z;z=document.createElement("link");if(r.opera){z.setAttribute("rel","icon")}z.setAttribute("rel","icon");z.setAttribute("type","image/png");document.getElementsByTagName("head")[0].appendChild(z);z.setAttribute("href",I);if(H.parentNode){H.parentNode.removeChild(H)}}else{z.setAttribute("href",I)}}};function F(J){var I=/^#?([a-f\d])([a-f\d])([a-f\d])$/i;J=J.replace(I,function(L,N,M,K){return N+N+M+M+K+K});var H=/^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(J);return H?{r:parseInt(H[1],16),g:parseInt(H[2],16),b:parseInt(H[3],16)}:false}function m(K,H){var J={};var I;for(I in K){J[I]=K[I]}for(I in H){J[I]=H[I]}return J}function d(){return document.hidden||document.msHidden||document.webkitHidden||document.mozHidden}var C={};C.duration=40;C.types={};C.types.fade=[{x:0.4,y:0.4,w:0.6,h:0.6,o:0},{x:0.4,y:0.4,w:0.6,h:0.6,o:0.1},{x:0.4,y:0.4,w:0.6,h:0.6,o:0.2},{x:0.4,y:0.4,w:0.6,h:0.6,o:0.3},{x:0.4,y:0.4,w:0.6,h:0.6,o:0.4},{x:0.4,y:0.4,w:0.6,h:0.6,o:0.5},{x:0.4,y:0.4,w:0.6,h:0.6,o:0.6},{x:0.4,y:0.4,w:0.6,h:0.6,o:0.7},{x:0.4,y:0.4,w:0.6,h:0.6,o:0.8},{x:0.4,y:0.4,w:0.6,h:0.6,o:0.9},{x:0.4,y:0.4,w:0.6,h:0.6,o:1}];C.types.none=[{x:0.4,y:0.4,w:0.6,h:0.6,o:1}];C.types.pop=[{x:1,y:1,w:0,h:0,o:1},{x:0.9,y:0.9,w:0.1,h:0.1,o:1},{x:0.8,y:0.8,w:0.2,h:0.2,o:1},{x:0.7,y:0.7,w:0.3,h:0.3,o:1},{x:0.6,y:0.6,w:0.4,h:0.4,o:1},{x:0.5,y:0.5,w:0.5,h:0.5,o:1},{x:0.4,y:0.4,w:0.6,h:0.6,o:1}];C.types.popFade=[{x:0.75,y:0.75,w:0,h:0,o:0},{x:0.65,y:0.65,w:0.1,h:0.1,o:0.2},{x:0.6,y:0.6,w:0.2,h:0.2,o:0.4},{x:0.55,y:0.55,w:0.3,h:0.3,o:0.6},{x:0.5,y:0.5,w:0.4,h:0.4,o:0.8},{x:0.45,y:0.45,w:0.5,h:0.5,o:0.9},{x:0.4,y:0.4,w:0.6,h:0.6,o:1}];C.types.slide=[{x:0.4,y:1,w:0.6,h:0.6,o:1},{x:0.4,y:0.9,w:0.6,h:0.6,o:1},{x:0.4,y:0.9,w:0.6,h:0.6,o:1},{x:0.4,y:0.8,w:0.6,h:0.6,o:1},{x:0.4,y:0.7,w:0.6,h:0.6,o:1},{x:0.4,y:0.6,w:0.6,h:0.6,o:1},{x:0.4,y:0.5,w:0.6,h:0.6,o:1},{x:0.4,y:0.4,w:0.6,h:0.6,o:1}];C.run=function(J,H,I,L){var K=C.types[d()?"none":l.animation];if(I===true){L=(typeof L!=="undefined")?L:K.length-1}else{L=(typeof L!=="undefined")?L:0}H=(H)?H:function(){};if((L<K.length)&&(L>=0)){k[l.type](m(J,K[L]));c=setTimeout(function(){if(I){L=L-1}else{L=L+1}C.run(J,H,I,L)},C.duration);p.setIcon(t)}else{H();return}};y();return{badge:h,video:A,image:w,webcam:b,reset:D.reset}});if(typeof define!=="undefined"&&define.amd){define([],function(){return a})}else{if(typeof module!=="undefined"&&module.exports){module.exports=a}else{this.Favico=a}}})();