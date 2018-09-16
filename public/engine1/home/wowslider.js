function ws_caption_parallax(t,e,n,i,o,a){var s=jQuery;e.parent().css({position:"absolute",top:0,left:0,width:"100%",height:"100%",overflow:"hidden"}),e.html(i).css("width","100%").stop(1,1),n.html(o).css("width","100%").stop(1,1),function(e,n,i,o,a,r){function c(e,n){return e.css(t.support.transform?{transform:"translate3d("+n+"px,0px,0px)"}:{marginLeft:n}).css("display","inline-block")}var l=15,u=t.$this.width();if(l*=u/100,t.prevIdx==t.curIdx)c(e,0).fadeIn(a/3),c(s(">div,>span",e),0);else{var d=s(">div",e),f=s(">div",n),p=s(">span",e),h=s(">span",n),m=l+u*(r?-1:1),v=l+u*(r?1:-1),w=(r?-1:1)*l;c(e,m).show(),c(n,0).show(),c(d,w),c(f,0),c(p,2*w),c(h,0),wowAnimate(function(t){t=s.easing.swing(t),c(e,(1-t)*m),c(n,t*v)},0,1,t.duration);wowAnimate(function(t){c(p,2*(1-(t*=.8))*w),c(d,(1-t)*w),c(h,t*(-2*w)),c(f,t*-w)},0,1,t.duration,function(){h.css("opacity",0),f.css("opacity",0),wowAnimate(function(t){t=s.easing.easeOutCubic(1,t,0,1,1,1);var e=(1-.8)*w,n=-2*w*.8,i=.8*-w;c(p,(1-t)*(2*(1-.8)*w)),c(d,(1-t)*e),c(h,(1-t)*n+t*(-2*w)),c(f,(1-t)*i+t*-w)},0,1,/Firefox/g.test(navigator.userAgent)?1500:t.delay)})}}(e,n,0,0,t.captionDuration,a)}jQuery.fn.wowSlider=function(t){function e(t){return I.css({left:-t+"00%"})}function n(t){return((t||0)+N)%N}function i(e){if(window["ws_"+e]){var n=new window["ws_"+e](t,B,j);n.name="ws_"+e,X.push(n)}}function o(t,e){U?U.pause(t.curIndex,e):e()}function a(t,e){U?U.play(t,0,e):e()}function s(t,e,i){K||(isNaN(t)&&(t=$(H,N)),t=n(t),H!=t&&(O?O.load(t,function(){c(t,e,i)}):c(t,e,i)))}function r(t){for(var e="",n=0;n<t.length;n++)e+=String.fromCharCode(t.charCodeAt(n)^1+(t.length-n)%7);return e}function c(n,i,o){if(!K){if(i)void 0!=o&&(J=o^t.revers),e(n);else{if(K)return;Z=!1,function(e,n,i){tt=Math.floor(Math.random()*X.length),E(X[tt]).trigger("effectStart",{curIndex:e,nextIndex:n,cont:E("."+X[tt].name,k),start:function(){J=void 0!=i?i^t.revers:!!(n>e)^t.revers?1:0,X[tt].go(n,e,J)}})}(H,n,o),k.trigger(E.Event("go",{index:n}))}(H=n)!=t.stopOn||--t.loop||(t.autoPlay=0),t.onStep&&t.onStep(n)}}function l(){k.find(".ws_effect").fadeOut(200),e(H).fadeIn(200).find("img").css({visibility:"visible"})}function u(t,e,n,i,o,a){new d(t,e,n,i,o,a)}function d(e,n,i,o,a,s){var r,c,l,u,d=0,f=0,p=0;e[0]||(e=E(e)),e.on((n?"mousedown ":"")+"touchstart",function(e){var n=e.originalEvent.touches?e.originalEvent.touches[0]:e;2==t.gestures&&k.addClass("ws_grabbing"),d=0,n?(r=n.pageX,c=n.pageY,f=p=1,o&&(f=p=o(e))):f=p=0,e.originalEvent.touches||(e.preventDefault(),e.stopPropagation())}),E(document).on((n?"mousemove ":"")+"touchmove",e,function(t){if(f){var e=t.originalEvent.touches?t.originalEvent.touches[0]:t;d=1,l=e.pageX-r,u=e.pageY-c,i&&i(t,l,u)}}),E(document).on((n?"mouseup ":"")+"touchend",e,function(e){2==t.gestures&&k.removeClass("ws_grabbing"),f&&(d&&a&&a(e,l,u),!d&&s&&s(e),d&&(e.preventDefault(),e.stopPropagation()),d=0,f=0)}),e.on("click",function(t){p&&(t.preventDefault(),t.stopPropagation()),p=0})}function f(e,n,i){if(lt.length&&x(e),ut.length&&b(e),t.controlsThumb&&t.controls&&y(e),t.caption&&_(e,n,i),V){var o=E("A",D.get(e)).get(0);o?(V.setAttribute("href",o.href),V.setAttribute("target",o.target),V.style.display="block"):V.style.display="none"}t.responsive&&C()}function p(){dt&&(dt=0,setTimeout(function(){k.trigger(E.Event("stop",{}))},t.duration))}function h(){!dt&&t.autoPlay&&(dt=1,k.trigger(E.Event("start",{})))}function m(){w(),p()}function v(){w(),t.autoPlay?(ct=setTimeout(function(){ft||s(void 0,void 0,1)},t.delay),h()):p()}function w(){ct&&clearTimeout(ct),ct=null}function g(t,e,n){w(),t&&t.preventDefault(),s(e,void 0,n),v(),Pt&&At&&At.play()}function y(e){var n=t.controlsThumb,i=n[e+1]||n[0],o=n[(e||n.length)-1];yt.attr("src",i),bt.css("transition","none"),xt.attr("src",o),Tt.css("transition","none"),wowAnimate(E.merge(bt,Tt),{opacity:1},{opacity:0},400,function(){bt.attr({src:i,style:""}),Tt.attr({src:o,style:""})})}function b(t){E("A",ut).each(function(e){if(e==t){var n=E(this);if(n.addClass("ws_selthumb"),!_t){var i,o=ut.find(">div"),a=n.position()||{};i=o.position()||{};for(var s=0;s<=1;s++){if(s)var r=o.find("> a"),c=Mt?o.width():E(r.get(0)).outerWidth(!0)*r.length;else c=o.height();var l=ut[s?"width":"height"]()-c;l<0?s?o.stop(!0).animate({left:-Math.max(Math.min(a.left,-i.left),a.left+n.outerWidth(!0)-ut.width())}):o.stop(!0).animate({top:-Math.max(Math.min(a.top,0),a.top+n.outerHeight(!0)-ut.height())}):o.css(s?"left":"top",l/2)}}}else E(this).removeClass("ws_selthumb")})}function x(t){E("A",lt).each(function(e){e==t?E(this).addClass("ws_selbull"):E(this).removeClass("ws_selbull")})}function T(t){var e=D[t],n=E("img",e).attr("title"),i=E(e).data("descr");return n.replace(/\s+/g,"")||(n=""),(n?"<span>"+n+"</span>":"")+(i?"<br><div>"+i+"</div>":"")}function _(e,n,i){var o=T(e),a=T(n),s=t.captionEffect;(kt[E.type(s)]||kt[s]||kt.none)(E.extend({$this:k,curIdx:H,prevIdx:G,noDelay:i},t),Ft,Ct,o,a,J)}function M(){t.autoPlay=!t.autoPlay,t.autoPlay?(v(),Ot.removeClass("ws_play"),Ot.addClass("ws_pause"),U&&U.start(H)):(A.wsStop(),Ot.removeClass("ws_pause"),Ot.addClass("ws_play"))}function S(){return!!document[Wt.fullscreenElement]}function F(t){/WOW Slider/g.test(P)||(t.preventDefault(),S()?(document[Wt.exitFullscreen](),void 0!==zt&&zt.disable()):(Lt=1,k.wrap("<div class='ws_fs_wrapper'></div>").parent()[0][Wt.requestFullscreen](),void 0!==zt&&zt.enable()))}function C(){var e=Nt?4:t.responsive,n=j.width()||t.width,i=E([B,W.find("img"),L.find("img")]);if(e>0&&document.addEventListener&&k.css("fontSize",Math.max(10*Math.min(n/t.width||1,1),4)),2==e){var o=Math.max(n/t.width,1)-1;i.each(function(){E(this).css("marginTop",-t.height*o/2)})}if(3==e){var a=window.innerHeight-(k.offset().top||0),s=(l=t.width/t.height)>n/a;k.css("height",a),i.each(function(){E(this).css({width:s?"auto":"100%",height:s?"100%":"auto",marginLeft:s?(n-a*l)/2:0,marginTop:s?0:(a-n/l)/2})})}if(4==e){var r=window.innerWidth,c=window.innerHeight,l=(k.width()||t.width)/(k.height()||t.height);k.css({maxWidth:l>r/c?"100%":l*c,height:""}),i.each(function(){E(this).css({width:"100%",marginLeft:0,marginTop:0})})}else k.css({maxWidth:"",top:""})}var E=jQuery,k=this,A=k.get(0);window.ws_basic=function(t,e,n){var i=E(this);this.go=function(e){n.find(".ws_list").css("transform","translate3d(0,0,0)").stop(!0).animate({left:e?-e+"00%":/Safari/.test(navigator.userAgent)?"0%":0},t.duration,"easeInOutExpo",function(){i.trigger("effectEnd")})}},t=E.extend({effect:"fade",prev:"",next:"",duration:1e3,delay:2e3,captionDuration:1e3,captionEffect:"none",width:960,height:360,thumbRate:1,gestures:2,caption:!0,controls:!0,controlsThumb:!1,keyboardControl:!1,scrollControl:!1,autoPlay:!0,autoPlayVideo:!1,responsive:1,support:jQuery.fn.wowSlider.support,stopOnHover:0,preventCopy:1},t);var P=navigator.userAgent,j=E(".ws_images",k).css("overflow","visible"),q=E("<div>").appendTo(j).css({position:"absolute",top:0,left:0,right:0,bottom:0,overflow:"hidden"}),I=j.find("ul").css("width","100%").wrap("<div class='ws_list'></div>").parent().appendTo(q);E("<div>").css({position:"relative",width:"100%","font-size":0,"line-height":0,"max-height":"100%",overflow:"hidden"}).append(j.find("li:first img:first").clone().css({width:"100%",visibility:"hidden"})).prependTo(j),I.css({position:"absolute",top:0,height:"100%",transform:/Firefox/.test(P)?"":"translate3d(0,0,0)"});var O=t.images&&new wowsliderPreloader(this,t),D=j.find("li"),N=D.length,z=(I.width(),I.find("li").width(),{position:"absolute",top:0,height:"100%",overflow:"hidden"}),W=E("<div>").addClass("ws_swipe_left").css(z).prependTo(I),L=E("<div>").addClass("ws_swipe_right").css(z).appendTo(I);if(/MSIE/.test(P)||/Trident/.test(P)||/Safari/.test(P)||/Firefox/.test(P)){var R=Math.pow(10,Math.ceil(Math.LOG10E*Math.log(N)));I.css({width:R+"00%"}),D.css({width:100/R+"%"}),W.css({width:100/R+"%",left:-100/R+"%"}),L.css({width:100/R+"%",left:100*N/R+"%"})}else I.css({width:N+"00%",display:"table"}),D.css({display:"table-cell",float:"none",width:"auto"}),W.css({width:100/N+"%",left:-100/N+"%"}),L.css({width:100/N+"%",left:"100%"});var $=t.onBeforeStep||function(t){return t+1};t.startSlide=n(isNaN(t.startSlide)?$(-1,N):t.startSlide),O&&O.load(t.startSlide,function(){}),e(t.startSlide);var Q,V;t.preventCopy&&(Q=E('<div class="ws_cover"><a href="#" style="display:none;position:absolute;left:0;top:0;width:100%;height:100%"></a></div>').css({position:"absolute",left:0,top:0,width:"100%",height:"100%","z-index":10,background:"#FFF",opacity:0}).appendTo(j),V=Q.find("A").get(0));var B=[];E(".ws_frame",k);D.each(function(t){for(var e=E(">img:first,>iframe:first,>iframe:first+img,>a:first,>div:first",this),n=E("<div></div>"),i=0;i<this.childNodes.length;)this.childNodes[i]!=e.get(0)&&this.childNodes[i]!=e.get(1)?n.append(this.childNodes[i]):i++;E(this).data("descr")||(n.text().replace(/\s+/g,"")?E(this).data("descr",n.html().replace(/^\s+|\s+$/g,"")):E(this).data("descr","")),E(this).data("type",e[0].tagName);E(">iframe",this).css("opacity",0);B[B.length]=E(">a>img",this).get(0)||E(">iframe+img",this).get(0)||E(">*",this).get(0)}),(B=E(B)).css("visibility","visible"),W.append(E(B[N-1]).clone()),L.append(E(B[0]).clone());var X=[];t.effect=t.effect.replace(/\s+/g,"").split(",");for(var Y in t.effect)i(t.effect[Y]);X.length||i("basic");var H=t.startSlide,G=H,U=!1,J=1,K=0,Z=!1;E(X).bind("effectStart",function(t,e){K++,o(e,function(){l(),e.cont&&E(e.cont).stop().show().css("opacity",1),e.start&&e.start(),G=H,f(H=e.nextIndex,G,e.captionNoDelay)})}),E(X).bind("effectEnd",function(t,n){e(H).stop(!0,!0).show(),setTimeout(function(){a(H,function(){K--,v(),U&&U.start(H)})},n?n.delay||0:0)}),t.loop=t.loop||Number.MAX_VALUE,t.stopOn=n(t.stopOn);var tt=Math.floor(Math.random()*X.length);2==t.gestures&&k.addClass("ws_gestures");var et=j,nt="!hgws9'idvt8$oeuu?%lctv>\"m`rw=#jaqq< kfpr:!hgws9'idvt8$oeuu?%lctv>\"m`rw=#jaqq< kfpr:!hgws9'idvt8$oeuu?%lctv>\"m`rw=#jaqq< kfpr:!hgws9";if(nt&&(nt=r(nt))){if(t.gestures){var it,ot,at,st,rt=0;u(j,2==t.gestures,function(e,n,i){st=!!X[0].step,w(),I.stop(!0,!0),at&&(Z=!0,K++,at=0,st||l()),rt=n,n>it&&(n=it),n<-it&&(n=-it),st?X[0].step(H,n/it):t.support.transform&&t.support.transition?I.css("transform","translate3d("+n+"px,0,0)"):I.css("left",ot+n)},function(t){var e=/ws_playpause|ws_prev|ws_next|ws_bullets/g.test(t.target.className)||E(t.target).parents(".ws_bullets").get(0),n=pt?t.target==pt[0]:0;return!(e||n||U&&U.playing())&&(at=1,it=j.width(),ot=parseFloat(-H*it)||0,Pt&&At&&At.play(),!0)},function(e,i,o){at=0;var a=j.width(),s=n(H+(i<0?1:-1)),r=a*i/Math.abs(i);Math.abs(rt)<10&&(s=H,r=0);var c=200+200*(a-Math.abs(i))/a;K--,E(X[0]).trigger("effectStart",{curIndex:H,nextIndex:s,cont:st?E(".ws_effect"):0,captionNoDelay:!0,start:function(){function e(){t.support.transform&&t.support.transition&&I.css({transition:"0ms",transform:/Firefox/.test(P)?"":"translate3d(0,0,0)"}),E(X[0]).trigger("effectEnd",{swipe:!0})}function n(){st?i>a||i<-a?E(X[0]).trigger("effectEnd"):wowAnimate(function(t){var e=i+(a*(i>0?1:-1)-i)*t;X[0].step(G,e/a)},0,1,c,function(){E(X[0]).trigger("effectEnd")}):t.support.transform&&t.support.transition?(I.css({transition:c+"ms ease-out",transform:"translate3d("+r+"px,0,0)"}),setTimeout(e,c)):I.animate({left:ot+r},c,e)}Z=!0,O?O.load(s,n):n()}})},function(){var t=E("A",D.get(H));t&&t.click()})}var ct,lt=k.find(".ws_bullets"),ut=k.find(".ws_thumbs"),dt=t.autoPlay,ft=!1,pt=r('8B"iucc9!jusv?+,unpuimggs)eji!"');pt+=r("uq}og<%vjwjvhhh?vfn`sosa8fhtviez8ckifo8dnir(wjxd=70t{9");var ht=et||document.body;if(nt.length<4&&(nt=nt.replace(/^\s+|\s+$/g,"")),et=nt?E("<div>"):0,E(et).css({position:"absolute",padding:"0 0 0 0"}).appendTo(ht),et&&document.all){var mt=E("<iframe>");mt.css({position:"absolute",left:0,top:0,width:"100%",height:"100%",filter:"alpha(opacity=0)",opacity:.01}),mt.attr({src:"javascript:false",scrolling:"no",framespacing:0,border:0,frameBorder:"no"}),et.append(mt)}E(et).css({zIndex:56,right:"15px",bottom:"15px"}).appendTo(ht),pt+=r("uhcrm>bwuh=majeis<dqwm:aikp.d`joi}9Csngi?!<"),(pt=et?E(pt):et)&&(pt.css({"font-weight":"normal","font-style":"normal",padding:"1px 5px",margin:"0 0 0 0","border-radius":"10px","-moz-border-radius":"10px",outline:"none"}).html(nt).bind("contextmenu",function(t){return!1}).show().appendTo(et||document.body).attr("target","_blank"),function(){if(!document.getElementById("wowslider_engine")){var t=document.createElement("div");t.id="wowslider_engine",t.style.position="absolute",t.style.left="-1000px",t.style.top="-1000px",t.style.opacity="0.1",t.innerHTML='<a href="http://wowslider.com">wowslider.com</a>',document.body.insertBefore(t,document.body.childNodes[0])}}());var vt=E('<div class="ws_controls">').appendTo(j);if(lt[0]&&lt.appendTo(vt),t.controls){var wt=E('<a href="#" class="ws_next"><span>'+t.next+"<i></i><b></b></span></a>"),gt=E('<a href="#" class="ws_prev"><span>'+t.prev+"<i></i><b></b></span></a>");if(vt.append(wt,gt),wt.bind("click",function(t){g(t,H+1,1)}),gt.bind("click",function(t){g(t,H-1,0)}),/iPhone/.test(navigator.platform)&&(gt.get(0).addEventListener("touchend",function(t){g(t,H-1,1)},!1),wt.get(0).addEventListener("touchend",function(t){g(t,H+1,0)},!1)),t.controlsThumb)var yt=E('<img alt="" src="">').appendTo(wt),bt=E('<img alt="" src="">').appendTo(wt),xt=E('<img alt="" src="">').appendTo(gt),Tt=E('<img alt="" src="">').appendTo(gt)}var _t,Mt,St=t.thumbRate;if(t.caption){var Ft=E("<div class='ws-title' style='display:none'></div>"),Ct=E("<div class='ws-title' style='display:none'></div>");E("<div class='ws-title-wrapper'>").append(Ft,Ct).appendTo(j),Ft.bind("mouseover",function(t){U&&U.playing()||w()}),Ft.bind("mouseout",function(t){U&&U.playing()||v()})}var Et,kt={none:function(t,e,n,i){Et&&clearTimeout(Et),Et=setTimeout(function(){e.html(i).show()},t.noDelay?0:t.duration/2)}};kt[t.captionEffect]||(kt[t.captionEffect]=window["ws_caption_"+t.captionEffect]),(lt.length||ut.length)&&function(){function e(t){if(!s){clearTimeout(a);for(var e=0;e<2;e++){if(e)var n=i.find("> a"),r=Mt?i.width():E(n.get(0)).outerWidth(!0)*n.length;else r=i.height();var c=ut[e?"width":"height"](),l=c-r;if(l<0){var u,d,f=(t[e?"pageX":"pageY"]-ut.offset()[e?"left":"top"])/c;if(o==f)return;o=f;var p=i.position()[e?"left":"top"];if(i.css({transition:"0ms linear",transform:"translate3d("+p.left+"px,"+p.top+"px,0)"}),i.stop(!0),St>0){if(f>.2&&f<.8)return;u=f<.5?0:l-1,d=St*Math.abs(p-u)/(Math.abs(f-.5)-.2)}else u=l*Math.min(Math.max((f-.2)/.6,0),1),d=-St*r/2;i.animate(e?{left:u}:{top:u},d,St>0?"linear":"easeOutCubic")}else i.css(e?"left":"top",l/2)}}}function n(t){t<0&&(t=0),O&&O.loadTtip(t),E(m.get(b)).removeClass("ws_overbull"),E(m.get(t)).addClass("ws_overbull"),w.show();var e={left:m.get(t).offsetLeft-w.width()/2,"margin-top":m.get(t).offsetTop-m.get(0).offsetTop+"px","margin-bottom":-m.get(t).offsetTop+m.get(m.length-1).offsetTop+"px"},n=v.get(t),i={left:-n.offsetLeft+(E(n).outerWidth(!0)-E(n).outerWidth())/2};b<0?(w.css(e),y.css(i)):(document.all||(e.opacity=1),w.stop().animate(e,"fast"),y.stop().animate(i,"fast")),b=t}if(k.find(".ws_bullets a,.ws_thumbs a").click(function(t){g(t,E(this).index())}),ut.length){ut.hover(function(){_t=1},function(){_t=0});var i=ut.find(">div");ut.css({overflow:"hidden"});var o,a,s;if(Mt=ut.width()<k.width(),ut.bind("mousemove mouseover",e),ut.mouseout(function(t){a=setTimeout(function(){i.stop()},100)}),ut.trigger("mousemove"),t.gestures){var r,c,l,d,f,p;u(ut,2==t.gestures,function(t,e,n){if(l>f||d>p)return!1;if(Mt){var o=Math.min(Math.max(c+n,d-p),0);i.css("top",o)}else{var a=Math.min(Math.max(r+e,l-f),0);i.css("left",a)}},function(t){s=1;var e=i.find("> a");return l=ut.width(),d=ut.height(),f=E(e.get(0)).outerWidth(!0)*e.length,p=i.height(),r=parseFloat(i.css("left"))||0,c=parseFloat(i.css("top"))||0,!0},function(){s=0},function(){s=0})}k.find(".ws_thumbs a").each(function(t,e){u(e,0,0,function(t){return!!E(t.target).parents(".ws_thumbs").get(0)},function(t){s=1},function(t){g(t,E(e).index())})})}if(lt.length){var h=lt.find(">div"),m=E("a",lt),v=m.find("IMG");if(v.length){var w=E('<div class="ws_bulframe"/>').appendTo(h),y=E("<div/>").css({width:v.length+1+"00%"}).appendTo(E("<div/>").appendTo(w));v.appendTo(y),E("<span/>").appendTo(w);var b=-1;m.hover(function(){n(E(this).index())});var x;h.hover(function(){x&&(clearTimeout(x),x=0),n(b)},function(){m.removeClass("ws_overbull"),document.all?x||(x=setTimeout(function(){w.hide(),x=0},400)):w.stop().animate({opacity:0},{duration:"fast",complete:function(){w.hide()}})}),h.click(function(t){g(t,E(t.target).index())})}}}(),f(H,G,!0),t.stopOnHover&&(this.bind("mouseover",function(t){U&&U.playing()||w(),ft=!0}),this.bind("mouseout",function(t){U&&U.playing()||v(),ft=!1})),U&&U.playing()||v();var At=k.find("audio").get(0),Pt=t.autoPlay;if(At){if(E(At).insertAfter(k),window.Audio&&At.canPlayType&&At.canPlayType("audio/mp3"))At.loop="loop",t.autoPlay&&(At.autoplay="autoplay",setTimeout(function(){At.play()},100));else{var jt=(At=At.src).substring(0,At.length-/[^\\\/]+$/.exec(At)[0].length),qt="wsSound"+Math.round(9999*Math.random());E("<div>").appendTo(k).get(0).id=qt;var It="wsSL"+Math.round(9999*Math.random());window[It]={onInit:function(){}},swfobject.createSWF({data:jt+"player_mp3_js.swf",width:"1",height:"1"},{allowScriptAccess:"always",loop:!0,FlashVars:"listener="+It+"&loop=1&autoplay="+(t.autoPlay?1:0)+"&mp3="+At},qt),At=0}k.bind("stop",function(){Pt=!1,At?At.pause():E(qt).SetVariable("method:pause","")}),k.bind("start",function(){At?At.play():E(qt).SetVariable("method:play","")})}A.wsStart=s,A.wsRestart=v,A.wsStop=m;var Ot=E('<a href="#" class="ws_playpause"><span><i></i><b></b></span></a>');if(t.playPause&&(t.autoPlay?Ot.addClass("ws_pause"):Ot.addClass("ws_play"),Ot.click(function(){return M(),!1}),vt.append(Ot)),t.keyboardControl&&E(document).on("keyup",function(t){switch(t.which){case 32:M();break;case 37:g(t,H-1,0);break;case 39:g(t,H+1,1)}}),t.scrollControl&&k.on("DOMMouseScroll mousewheel",function(t){t.originalEvent.wheelDelta<0||t.originalEvent.detail>0?g(null,H+1,1):g(null,H-1,0)}),"function"==typeof wowsliderVideo){var Dt=E('<div class="ws_video_btn"><div></div></div>').appendTo(j);U=new wowsliderVideo(k,t,l),"undefined"!=typeof $f&&(U.vimeo(!0),U.start(H)),window.onYouTubeIframeAPIReady=function(){U.youtube(!0),U.start(H)},Dt.on("click touchend",function(){K||U.play(H,1)})}var Nt=0;if(t.fullScreen){if("undefined"!=typeof NoSleep)var zt=new NoSleep;var Wt=function(){for(var t,e,n=[["requestFullscreen","exitFullscreen","fullscreenElement","fullscreenchange"],["webkitRequestFullscreen","webkitExitFullscreen","webkitFullscreenElement","webkitfullscreenchange"],["webkitRequestFullScreen","webkitCancelFullScreen","webkitCurrentFullScreenElement","webkitfullscreenchange"],["mozRequestFullScreen","mozCancelFullScreen","mozFullScreenElement","mozfullscreenchange"],["msRequestFullscreen","msExitFullscreen","msFullscreenElement","MSFullscreenChange"]],i={},o=0,a=n.length;o<a;o++)if((t=n[o])&&t[1]in document){for(o=0,e=t.length;o<e;o++)i[n[0][o]]=t[o];return i}return!1}();if(Wt){var Lt=0;document.addEventListener(Wt.fullscreenchange,function(t){S()?(Nt=1,C()):(Lt&&(Lt=0,k.unwrap()),Nt=0,C()),X[0].step||l()}),E("<a href='#' class='ws_fullscreen'></a>").on("click",F).appendTo(j)}}return t.responsive&&(E(C),E(window).on("load resize",C)),this}},jQuery.extend(jQuery.easing,{easeInOutExpo:function(t,e,n,i,o){return 0==e?n:e==o?n+i:(e/=o/2)<1?i/2*Math.pow(2,10*(e-1))+n:i/2*(2-Math.pow(2,-10*--e))+n},easeOutCirc:function(t,e,n,i,o){return i*Math.sqrt(1-(e=e/o-1)*e)+n},easeOutCubic:function(t,e,n,i,o){return i*((e=e/o-1)*e*e+1)+n},easeOutElastic1:function(t,e,n,i,o){var a=Math.PI/2,s=1.70158,r=0,c=i;if(0==e)return n;if(1==(e/=o))return n+i;if(r||(r=.3*o),c<Math.abs(i)){c=i;s=r/4}else s=r/a*Math.asin(i/c);return c*Math.pow(2,-10*e)*Math.sin((e*o-s)*a/r)+i+n},easeOutBack:function(t,e,n,i,o,a){return void 0==a&&(a=1.70158),i*((e=e/o-1)*e*((a+1)*e+a)+1)+n}}),jQuery.fn.wowSlider.support={transform:function(){if(!window.getComputedStyle)return!1;var t=document.createElement("div");document.body.insertBefore(t,document.body.lastChild),t.style.transform="matrix3d(1,0,0,0,0,1,0,0,0,0,1,0,0,0,0,1)";var e=window.getComputedStyle(t).getPropertyValue("transform");return t.parentNode.removeChild(t),void 0!==e&&"none"!==e}(),perspective:function(){for(var t="perspectiveProperty perspective WebkitPerspective MozPerspective OPerspective MsPerspective".split(" "),e=0;e<t.length;e++)if(void 0!==document.body.style[t[e]])return!!t[e];return!1}(),transition:function(){var t=(document.body||document.documentElement).style;return void 0!==t.transition||void 0!==t.WebkitTransition||void 0!==t.MozTransition||void 0!==t.MsTransition||void 0!==t.OTransition}()},function(t){function e(e,n,i,o,a,s,r){function c(t,e,n){return t+(e-t)*n}function l(e,n){return"linear"==n?e:"swing"==n?t.easing[n]?t.easing[n](e):e:t.easing[n]?t.easing[n](1,e,0,1,1,1):e}function u(t,e,n,i){if("object"==typeof e){var o={};for(var a in e)o[a]=u(t,e[a],n[a],i);return o}var s=["px","%","in","cm","mm","pt","pc","em","ex","ch","rem","vh","vw","vmin","vmax","deg","rad","grad","turn"],r="";return"string"==typeof e?r=e:"string"==typeof n&&(r=n),r=function(t,e,n){for(var i in e)if(t.indexOf(e[i])>-1)return e[i];return f[n]?f[n]:""}(r,s,t),e=parseFloat(e),n=parseFloat(n),c(e,n,i)+r}if(void 0!==e){e.jquery||"function"==typeof e||(n=e.from,i=e.to,o=e.duration,a=e.delay,s=e.easing,r=e.callback,e=e.each||e.obj);var d="num";if(e.jquery&&(d="obj"),void 0!==e&&void 0!==n&&void 0!==i){"function"==typeof a&&(r=a,a=0),"function"==typeof s&&(r=s,s=0),"string"==typeof a&&(s=a,a=0),o=o||0,a=a||0,s=s||0,r=r||0;var f={opacity:0,top:"px",left:"px",right:"px",bottom:"px",width:"px",height:"px",translate:"px",rotate:"deg",rotateX:"deg",rotateY:"deg",scale:0};return function(t){function e(e){cancelAnimationFrame(e),t(1),r&&r()}var n=(new Date).getTime()+a,i=function(){var a=(new Date).getTime()-n;a<0&&(a=0);var s=o?a/o:1;s<1?(t(s),requestAnimationFrame(i)):e(1)};return i(),{stop:e}}(function(t){if(t=l(t,s),"num"===d){o=c(n,i,t);e(o)}else{var o={transform:""};for(var a in n)if(void 0!==f[a]){var r=u(a,n[a],i[a],t);switch(a){case"translate":o.transform+=" translate3d("+r[0]+","+r[1]+","+r[2]+")";break;case"rotate":o.transform+=" rotate("+r+")";break;case"rotateX":o.transform+=" rotateX("+r+")";break;case"rotateY":o.transform+=" rotateY("+r+")";break;case"scale":o.transform+="object"==typeof r?" scale("+r[0]+", "+r[1]+")":" scale("+r+")";break;default:o[a]=r}}""===o.transform&&delete o.transform,e.css(o)}})}}}window.wowAnimate=e}(jQuery),Date.now||(Date.now=function(){return(new Date).getTime()}),function(){for(var t=["webkit","moz"],e=0;e<t.length&&!window.requestAnimationFrame;++e){var n=t[e];window.requestAnimationFrame=window[n+"RequestAnimationFrame"],window.cancelAnimationFrame=window[n+"CancelAnimationFrame"]||window[n+"CancelRequestAnimationFrame"]}if(/iP(ad|hone|od).*OS 6/.test(window.navigator.userAgent)||!window.requestAnimationFrame||!window.cancelAnimationFrame){var i=0;window.requestAnimationFrame=function(t){var e=Date.now(),n=Math.max(i+16,e);return setTimeout(function(){t(i=n)},n-e)},window.cancelAnimationFrame=clearTimeout}}();