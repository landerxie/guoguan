var BSHARE_SHOST_NAME="http://static.bshare.cn",BSHARE_BUTTON_HOST="http://b.bshare.cn",BSHARE_WEB_HOST="http://www.bshare.cn";(function(f,i){if(!f.bShareUtil||!f.bShareControl)var k=i.documentElement,j=navigator,l=f.BUZZ={},b=f.bShareControl={count:0,viewed:!1,bShareLoad:!1,clicked:!1},e=f.bShareUtil={requestedScripts:[],encode:encodeURIComponent,isIe6:/msie|MSIE 6/.test(j.userAgent),isIe7:/MSIE 7/.test(j.userAgent),isIe8:/MSIE 8/.test(j.userAgent),isIe9:/MSIE 9/.test(j.userAgent),isIe:/Microsoft Internet Explorer/.test(j.appName),isSt:i.compatMode=="CSS1Compat",isQk:function(){return e.isIe6||e.isIe&&!e.isSt},eleInViewport:function(a){if(a.getBoundingClientRect)return a=
a.getBoundingClientRect(),a.top>=0&&a.left>=0&&a.bottom<=(f.innerHeight||k.clientHeight)&&a.right<=(f.innerWidth||k.clientWidth);for(var c=a.offsetTop,d=a.offsetLeft,b=a.offsetWidth,g=a.offsetHeight;a.offsetParent;)a=a.offsetParent,c+=a.offsetTop,d+=a.offsetLeft;return c>=f.pageYOffset&&d>=f.pageXOffset&&c+g<=f.pageYOffset+f.innerHeight&&d+b<=f.pageXOffset+f.innerWidth},getElemById:function(a){return i.getElementById(a)},createElement:function(a,c,d,b,g){a=i.createElement(a);if(c)a.id=c;if(d)a.className=
d;if(b)a.style.cssText=b;if(g)a.innerHTML=g;return a},formatParam:function(a,c){return typeof a=="number"?+c:typeof a=="boolean"?/^true$/i.test(c):c},isUndefined:function(a){return typeof a=="undefined"},arrayContains:function(a,c,d){for(var b=a.length;b--;)if(!e.isUndefined(c)&&a[b]===c||!e.isUndefined(d)&&d.test(a[b]))return!0;return!1},loadScript:function(a,c){var d=e.requestedScripts;if(!e.arrayContains(d,a))/(bsMore|bshareS887)(Org)?\.js/.test(a)&&d.push(a),c=c||function(){},d=e.createElement("script"),
d.src=a,d.type="text/javascript",d.charset="utf-8",d.onload=c,d.onreadystatechange=function(){/complete|loaded/.test(this.readyState)&&c()},i.getElementsByTagName("head")[0].appendChild(d)},loadStyle:function(a){var c=e.createElement("style");c.type="text/styles";c.styleSheet?c.styleSheet.cssText=a:c.appendChild(i.createTextNode(a));i.getElementsByTagName("head")[0].appendChild(c)},getOffset:function(a){for(var c={x:a.offsetLeft,y:a.offsetTop,h:a.offsetHeight,w:a.offsetWidth};a=a.offsetParent;c.x+=a.offsetLeft,
c.y+=a.offsetTop);return c},getElem:function(a,c,d,b){for(var a=a.getElementsByTagName(c),c=[],g=0,h=0,e=a.length;g<e;g++){var f=a[g];if(!d||f.className.indexOf(d)!=-1)c.push(f),typeof b=="function"&&b(f,h++)}return c},getText:function(a){return e.isIe?a.innerText:a.textContent},insertAfter:function(a,c){var d=c.parentNode;d.lastChild===c?d.appendChild(a):d.insertBefore(a,c.nextSibling)},getWH:function(){return{h:(e.isSt?k:i.body).clientHeight,w:(e.isSt?k:i.body).clientWidth}},stopProp:function(a){a=
a||f.event||{};a.stopPropagation?a.stopPropagation():a.cancelBubble=!0},getScript:function(a){for(var c=i.getElementsByTagName("script"),d=[],b=0,g=c.length;b<g;b++){var h=c[b].src;h&&h.search(a)>=0&&/bshare.(cn|com|me)|static.(local|dev)/i.test(h)&&d.push(c[b])}return d},parseOptions:function(a,c){var d={};if(a=/\?(.*)|#(.*)/.exec(a))for(var a=a[0].slice(1).replace("+"," "),b=a.split(/[&;]/g),g=0,h=b.length;g<h;g++){var e=b[g].split("="),f=decodeURIComponent(e[0]),j=c?e[1]:null;if(!c)try{j=decodeURIComponent(e[1])}catch(i){}d[f]=
j}return d},submitForm:function(a,c,d,b){var b=b||"post",g=e.createElement("form");i.body.appendChild(g);g.method=b;g.target=d;g.setAttribute("accept-charset","utf-8");g.action=a;for(var h in c)if(typeof c[h]!="function")a=e.createElement("input"),a.type="hidden",a.name=h,a.value=c[h],g.appendChild(a);if(e.isIe)i.charset="utf-8";g.submit();i.body.removeChild(g)},replaceParam:function(a,b,d){return b?d.replace(a,e.encode(b)):d.replace(a,"")},ready:function(a){if(i.addEventListener)i.addEventListener("DOMContentLoaded",
function(){i.removeEventListener("DOMContentLoaded",arguments.callee,!1);a.call()},!1),f.addEventListener("load",a,!1);else if(i.attachEvent){i.attachEvent("onreadystatechange",function(){i.readyState=="complete"&&(i.detachEvent("onreadystatechange",arguments.callee),a.call())});f.attachEvent("onload",a);var b=!1;try{b=f.frameElement===null}catch(d){}k.doScroll&&b&&function(){try{k.doScroll("left")}catch(d){setTimeout(arguments.callee,10);return}a.call()}()}else f.onload=a},createBuzzObject:function(a,
c){if(f[a])return f[a];c.namespace=a;var d=f[a]={shost:f.BSHARE_SHOST_NAME,bhost:f.BSHARE_BUTTON_HOST,whost:f.BSHARE_WEB_HOST,defaultConfig:c,params:{type:0,publisherUuid:"",url:"",title:"",summary:"",content:"",pic:"",pics:"",video:"",vTag:"",vUid:"",vEmail:"",product:"",price:"0",brand:"",tag:"",category:"",template:"1",popcss:"",apvuid:"",apts:"",apsign:"",admtest:!1},isReady:!1,completed:!1,curb:0,preb:-1,entries:[],counters:[],viewInfo:null};d.config={};d.elems={powerBy:'<div id="bsPower" style="float:right;text-align:right;overflow:hidden;height:100%;"><a class="bsSiteLink" style="font-size:10px;vertical-align:text-bottom;line-height:24px;cursor:pointer;" href="'+
d.whost+'" target="_blank"><span style="font-size:10px;vertical-align:text-bottom;"><span style="color:#f60;">b</span>Share</span></a></div>'};for(var m in d.defaultConfig)d.config[m]=d.defaultConfig[m];d.imageBasePath=d.shost+"/frame/images/";d.jsBasePath=d.shost+"/b/";d.addEntry=function(a){if(typeof d.counters=="number")d.counters=[];d.entries.push(a);d.counters.push(0)};d.fc="";d.createFlashObj=function(){if(!e.getElemById("bshareFS")){var a=d.shost+"/flash/bfc.swf";i.body.appendChild(e.createElement("div",
"","","height:0;line-height:0;font-size:0;",'<object id="bshareFS" type="application/x-shockwave-flash" data="'+a+'" width="0" height="0"><param name="movie" value="'+a+'"/><param name="allowScriptAccess" value="always"/><param name="allowNetworking" value="all"/></object>'));l.fCB=function(){b.viewed||d.view()}}};d.updateFC=function(a){try{var b=j.appName.indexOf("Microsoft")!=-1?f.bshareFS:i.bshareFS;d.fc=b.bSyncInfo(a||"")}catch(c){}};d.initAdm=function(){var a=e.createElement("a"),b,c,m;m=["rayli.com"];
a.href=f.location.href;a=a.host;for(b=0,c=m.length;b<c;++b)if(a.indexOf(m[b])>-1){d.params.admtest=!0;break}if(!d.params.admtest)return"";d.admIdsObj=[];m=i.getElementsByTagName("object");for(b=0,c=m.length;b<c;++b)a=m[b].id,a=j.appName.indexOf("Microsoft")!=-1?e.getElemById(a):i[a],a.objVisible&&(d.admIdsObj[b]=a);if(d.admIdsObj.length!=0)d.eleInViewportEvent=function(){for(b=0,c=d.admIdsObj.length;b<c;b++){var a=d.admIdsObj[b];if(a&&e.eleInViewport(a)&&!a.isViewed)try{a.objVisible(),a.isViewed=
!0}catch(g){}}},f.addEventListener?f.addEventListener("scroll",d.eleInViewportEvent,!1):f.attachEvent("onscroll",d.eleInViewportEvent),d.eleInViewportEvent()};return f[a]},parseBuzzOptions:function(a,b,d,f,g){var c;c=(a=e.getScript(b)[a])?e.parseOptions(a.src):{},a=c;g&&(a=g(a));for(var h in a)if(!e.isUndefined(a[h])&&!(a[h]===null||typeof d[h]=="number"&&a[h]===""))e.isUndefined(d[h])?e.isUndefined(f[h])||(f[h]=e.formatParam(f[h],a[h])):d[h]=e.formatParam(d[h],a[h])}}})(window,document);(function(f,i,k){var j=i.bShareUtil,l=i.bShareControl;if(!(l.count>0)){var b=j.createBuzzObject(f,{lang:"zh",height:0,width:0,image:"",bgc:"none",fgc:"#333",poptxtc:"#666",popbgc:"#f2f2f2",sn:!1,logo:!0,style:1,fs:0,inline:!1,beta:!1,popjs:"",popHCol:2,pop:0,mdiv:0,poph:"auto",bps:"",bps2:"",showShareCount:!0,icon:!0,text:null,promote:!1}),e=b.config,a=b.params;b.boxConfig={position:0,boxHeight:408,boxWidth:548,closeTop:8,closeRight:20,hasTop:!0,hasFrame:!0,hasMore:!0};b.boxConfigEC={position:0,boxHeight:404,
boxWidth:650,closeTop:10,closeRight:16,hasFrame:!0};b.boxConfigWX={id:"bsWXBox",position:0,boxHeight:245,boxWidth:220,closeTop:8,closeRight:20,hasTop:!0};b.customization={};b.loadOptions=function(){j.parseBuzzOptions(0,/button(Lite)?(Org)?\.js|bshare_load/,e,a,function(a){if(!j.isUndefined(i.bShareOpt))for(var c in i.bShareOpt)a[c]=i.bShareOpt[c];if(!j.arrayContains(b.langs,a.lang))a.lang="zh";if(a.h&&a.w&&a.img)a.height=a.h,a.width=a.w,a.image=a.img;a.bgc=a.bgcolor||void 0;a.fgc=a.textcolor||void 0;
a.logo=!(a.logo&&/^false$/i.test(a.logo));a.popHCol=a.pophcol||void 0;if(a.style)a.style=/^(-1|0|1|2|3|4|5|10|11|999)$/.test(a.style)?+a.style:void 0;if(a.bp)a.style&&a.style==2?a.bps2=a.bp.split(","):a.bps=a.bp.split(",");a.showShareCount=a.style&&/3|4|5/.test(a.style)?!1:!(a.ssc&&/^false$/i.test(a.ssc.toString()));a.type=i.BSHARE_BUTTON_TYPE||a.type;a.publisherUuid=a.uuid||void 0;return a});for(var c in b.defaultConfig)b.defaultConfig[c]!==e[c]&&(b.customization[c]=e[c]);if(a.type!=15)a.popcss=
"";if(i.location.href.indexOf(b.whost+"/moreStyles")<0)e.promote=!1};b.writeButton=function(){var a="",d={0:0,1:[110,85],10:[90,51],11:[82,82]},f={0:16,1:24,10:21,11:49},g=b.imageBasePath,h=e.style,i=e.image,l=e.showShareCount,n=e.width,o=e.height;/^(3|4|5)$/.test(h)||(a='<div class="bsPromo bsPromo1"></div>');h>1&&h<6?b.writeBshareDiv(a):h==-1?(j.getElem(k,"div","bshare-custom",function(a){if(!a.childNodes[0].className||a.childNodes[0].className.indexOf("bsPromo")<0){var c=j.createElement("div",
"","bsPromo bsPromo"+(b.isLite?2:1));a.insertBefore(c,a.childNodes[0])}}),(e.beta||e.popjs)&&b.writeBshareDiv('<div class="buzzButton"></div>',"")):h>=0&&(h!=999&&(i=g+"logo_square_s.gif",h!=0&&(i=g+"button_custom"+h+"-"+(e.lang=="en"?"en":"zh"),l&&(i+="-c"),h==10&&(n=/Blue|Red|Green|Grey|Orange/.test(e.bgc)?e.bgc:"Orange",i+="-"+n),i+=".gif"),n=d[h][l?0:1],o=f[h]),a+='<div class="buzzButton" style="height:'+o+"px;color:"+e.fgc+";",h==0?(a+=e.icon?"":"",a+='float:left">'+"</div>",l&&(a+='<div style="float:left;width:40px;height:16px;text-align:center;font-weight:bold;">&nbsp;<span style="position:relative;line-height:16px;" class="shareCount"></span></div>')):(a+="width:"+24+'px;">',l&&h!=999&&(a+='<span style="font-weight:bold;position:relative;line-height:'+(h==10?"22":"25")+'px;" class="shareCount"></span>'),a+="</div>"),a+='<div style="clear:both;"></div>',b.writeBshareDiv(a,"font-size:12px;height:"+o+"px;width:"+n+"px;"))};b.more=function(){return typeof b.moreDiv=="function"?(b.moreDiv(),!0):!1};b.load=function(c){if(!c){if(e.mdiv<0)return;var d=0,f=setInterval(function(){b.more()||d>=30?clearInterval(f):++d},100);return!1}a.target=
c||"";b.click();b.disappear();b.prepare();if(!b.loadPlus||!b.loadPlus()){var g;if(c=="bsharesync")g=[b.whost,"/bsyncShare?site=",c].join(""),b.updateCounter(),b.shareStats(c),j.submitForm(g,a,"_blank");else if(c=="email")g=[b.bhost,"/bshareEmail"].join(""),b.shareStats(c),j.submitForm(g,a,"_blank");else if(c=="clipboard")j.copy2Clipboard(),b.shareStats(c);else if(c=="favorite")j.add2Bookmark(),b.shareStats(c);else if(c=="printer")j.add2Printer(),b.shareStats(c);else if(c=="weixin"){g=b.bhost+"/barCode?site=weixin";
for(var h in a)!/content|target/.test(h)&&typeof a[h]!="function"&&(g+="&"+h+"="+j.encode(a[h]));k.getElementById("bsWXBox")||b.createBox(b.boxConfigWX);b.getFrame(b.boxConfigWX).innerHTML='<img style="width:178px;height:178px;margin:21px;display:inline-block;" src="'+g+'" />';b.display(!1,b.boxConfigWX)}else{if(l.bShareLoad)for(h in g=b.bhost+"/bshare_redirect?site="+c,a)!/content|target/.test(h)&&typeof a[h]!="function"&&(g+="&"+h+"="+j.encode(a[h]));else(g=i.BS_PURL_MAP[c])||alert(b.iL8n.loadFailed),
c=="gmw"?g=j.replaceParam("${URL}",a.url.replace("http://",""),g):a.url&&(g=j.replaceParam("${URL}",a.url,g)),g=j.replaceParam("${TITLE}",a.title,g),g=j.replaceParam("${CONTENT}",a.summary,g),g=j.replaceParam("${IMG}",a.pic,g),g=j.replaceParam("${VIDEO}",a.video,g);i.open(g,"","height=600,width=800,top=100,left=100,screenX=100,screenY=100,scrollbars=yes,resizable=yes")}}};b.show=function(){b.load()};b.onLoad=function(){j.getElem(k,"a","bshareDiv",function(a,c){j.getElem(a,"div","buzzButton",function(a){a.onclick=
function(a){return function(c){b.more(c,a);return!1}}(c)})});var a=e.showShareCount;if(e.style==0){var d=j.getElem(k,"div","buzzButton")[0].offsetWidth;a&&(d+=41);j.getElem(k,"a","bshareDiv",function(a){a.style.width=d+"px"})}var f=b.entries.length;if(a&&f>0){for(var a="",g=0;g<f;g++){var h=b.entries[g];if(typeof h.url=="string"){if(j.isIe&&a.length+h.url.length>2E3)break;a!=""&&(a+="|");a+=h.url}}a!=""&&(a+="|");a+=i.location.href;b.count(a)}};b.renderButton=function(){j.loadStyle("a.bshareDiv,#bsPanel,#bsMorePanel,#bshareF{border:none;background:none;padding:0;margin:0;font:12px Helvetica,Calibri,Tahoma,Arial,\u5b8b\u4f53,sans-serif;line-height:14px;}#bsPanel div,#bsMorePanel div,#bshareF div{display:block;}.bsRlogo .bsPopupAwd,.bsRlogoSel .bsPopupAwd,.bsLogo .bsPopupAwd,.bsLogoSel .bsPopupAwd{line-height:16px !important;}a.bshareDiv div,#bsFloatTab div{*display:inline;zoom:1;display:inline-block;}a.bshareDiv img,a.bshareDiv div,a.bshareDiv span,a.bshareDiv a,#bshareF table,#bshareF tr,#bshareF td{text-decoration:none;background:none;margin:0;padding:0;border:none;line-height:1.2}a.bshareDiv span{display:inline;float:none;}div.buzzButton{cursor:pointer;font-weight:bold;}.buzzButton .shareCount a{color:#333}.bsStyle1 .shareCount a{color:#fff}span.bshareText{white-space:nowrap;}span.bshareText:hover{text-decoration:underline;}a.bshareDiv .bsPromo,div.bshare-custom .bsPromo{display:none;position:absolute;z-index:100;}a.bshareDiv .bsPromo.bsPromo1,div.bshare-custom .bsPromo.bsPromo1{width:51px;height:18px;top:-18px;left:0;line-height:16px;font-size:12px !important;font-weight:normal !important;color:#fff;text-align:center;background:url("+
b.imageBasePath+"bshare_box_sprite2.gif) no-repeat 0 -606px;}div.bshare-custom .bsPromo.bsPromo2{background:url("+b.imageBasePath+"bshare_promo_sprite.gif) no-repeat;cursor:pointer;}");b.writeButton();a.type==15&&b.filterECPlats()};b.loadButtonStyle=function(){if(a.type!=15){var c,d=e.style;if(e.beta)c=b.jsBasePath+"styles/bshareS888.js?v=20131210";else if(e.popjs)c=e.popjs;else if(e.style!=-1&&(c=b.jsBasePath+"styles/bshareS"+(d>1&&d<6?d:1)+".js?v=20131210",e.pop==-1&&(d<=1||d>=6)))c="";c&&j.loadScript(c)}};b.international=
function(a){e.lang=="zh"?a():j.loadScript(b.jsBasePath+"langs/bs-lang-"+e.lang+".js?v=20131210",a)};b.start=function(){j.loadEngine&&(j.loadEngine(f),b.createFlashObj(),b.loadOptions(),b.international(function(){if(!b.completed){if(j.isUndefined(e.text)||e.text===null)e.text=e.style==0?b.iL8n.shareTextShort:b.iL8n.shareText;a.type!=1&&b.renderButton();j.createShareBox(f);if(a.type==15)b.boxConfig=b.boxConfigEC;b.createBox();e.mdiv>=0&&a.type!=15&&j.loadScript(b.jsBasePath+"components/bsMore.js?v=20131210");if(a.type==
1)return b.load(),!1;b.loadButtonStyle();b.onLoad();b.prepare(0);setTimeout(function(){l.viewed||b.view();setTimeout(function(){l.bShareLoad||j.loadScript(b.jsBasePath+"components/bsPlatforms.js?v=20131210")},3E3)},3E3);b.completed=!0}}))};b.init=function(){if(!b.isReady)b.isReady=!0,j.loadScript(b.jsBasePath+"engines/bs-engine.js?v=20131210",b.start)};j.loadScript(b.jsBasePath+"components/bsStatic.js?v=20131210")}})("bShare",window,document);(function(f,i,k){if(!(i.bShareControl.count>0)){i.bShareControl.count+=1;var j=i.bShareUtil,f=i[f],l=f.config;f.isLite=!0;f.customization.type="lite";f.writeBshareDiv=function(b,e){j.getElem(k,"a","bshareDiv",function(a){if(b)a.innerHTML=b;else if(a.innerHTML.length<24)a.innerHTML="";a.onclick=function(){return!1};a.style.cssText=(l.inline?"":"display:block;")+"text-decoration:none;padding:0;margin:0;"+e||""})};j.ready(f.init)}})("bShare",window,document);(function(){var f=window.bShare;if(!f)f=window.bShare={};f.pnMap={115:["115\u6536\u85cf\u5939",0],"139mail":["139\u90ae\u7bb1",2],"9dian":["\u8c46\u74e39\u70b9",6],baiducang:["\u767e\u5ea6\u641c\u85cf",7],baiduhi:["\u767e\u5ea6\u7a7a\u95f4",8],bgoogle:["Google\u4e66\u7b7e",10],bsharesync:["\u4e00\u952e\u901a",16],caimi:["\u8d22\u8ff7",17],cfol:["\u4e2d\u91d1\u5fae\u535a",18],chouti:["\u62bd\u5c49",20],clipboard:["\u590d\u5236\u7f51\u5740",21],cyolbbs:["\u4e2d\u9752\u8bba\u575b",22],cyzone:["\u521b\u4e1a\u5427",23],delicious:["\u7f8e\u5473\u4e66\u7b7e",24],dig24:["\u9012\u5ba2\u7f51",25],digg:["Digg",26],diglog:["\u5947\u5ba2\u53d1\u73b0",27],diigo:["Diigo",29],douban:["\u8c46\u74e3\u7f51",30],dream:["\u68a6\u5e7b\u4eba\u751f",31],duitang:["\u5806\u7cd6",32],eastdaymb:["\u4e1c\u65b9\u5fae\u535a",33],email:["\u7535\u5b50\u90ae\u4ef6",
34],evernote:["Evernote",35],facebook:["Facebook",36],fanfou:["\u996d\u5426",37],favorite:["\u6536\u85cf\u5939",38],feixin:["\u98de\u4fe1",39],friendfeed:["FriendFeed",40],fwisp:["Fwisp",42],ganniu:["\u8d76\u725b\u5fae\u535a",43],gmail:["Gmail",44],gmw:["\u5149\u660e\u7f51",45],gtranslate:["\u8c37\u6b4c\u7ffb\u8bd1",46],hemidemi:["\u9ed1\u7c73\u4e66\u7b7e",47],hexunmb:["\u548c\u8baf\u5fae\u535a",48],huaban:["\u82b1\u74e3",49],ifengkb:["\u51e4\u51f0\u5feb\u535a",50],ifengmb:["\u51e4\u51f0\u5fae\u535a",51],ifensi:["\u7c89\u4e1d\u7f51",52],instapaper:["Instapaper",53],itieba:["i\u8d34\u5427",54],joinwish:["\u597d\u613f\u7f51",55],kaixin001:["\u5f00\u5fc3\u7f51",56],laodao:["\u5520\u53e8\u7f51",57],leihou:["\u96f7\u7334",58],leshou:["\u4e50\u6536",59],linkedin:["LinkedIn",
60],livespace:["MS Livespace",61],mala:["\u9ebb\u8fa3\u5fae\u535a",63],masar:["\u739b\u6492\u7f51",65],meilishuo:["\u7f8e\u4e3d\u8bf4",66],miliao:["\u7c73\u804a",67],mister_wong:["Mister Wong",68],mogujie:["\u8611\u83c7\u8857",69],moptk:["\u732b\u6251\u63a8\u5ba2",70],msn:["MSN",71],myshare:["MyShare",72],myspace:["MySpace",73],neteasemb:["\u7f51\u6613\u5fae\u535a",74],netvibes:["Netvibes",75],peoplemb:["\u4eba\u6c11\u5fae\u535a",76],pinterest:["Pinterest",79],poco:["Poco\u7f51",81],printer:["\u6253\u5370",82],printf:["Print Friendly",83],qqmb:["\u817e\u8baf\u5fae\u535a",84],qqshuqian:["QQ\u4e66\u7b7e",85],qqxiaoyou:["\u670b\u53cb\u7f51",86],qzone:["QQ\u7a7a\u95f4",87],readitlater:["ReadItLater",88],
reddit:["Reddit",89],redmb:["\u7ea2\u5fae\u535a",90],renjian:["\u4eba\u95f4\u7f51",91],renmaiku:["\u4eba\u8109\u5e93",92],renren:["\u4eba\u4eba\u7f51",93],shouji:["\u624b\u673a",95],sinaminiblog:["\u65b0\u6d6a\u5fae\u535a",96],sinaqing:["\u65b0\u6d6aQing",97],sinavivi:["\u65b0\u6d6aVivi",98],sohubai:["\u641c\u72d0\u767d\u793e\u4f1a",99],sohuminiblog:["\u641c\u72d0\u5fae\u535a",100],southmb:["\u5357\u65b9\u5fae\u535a",101],stumbleupon:["StumbleUpon",102],szone:["\u5b88\u682a\u7f51",103],taojianghu:["\u6dd8\u6c5f\u6e56",104],tianya:["\u5929\u6daf",105],tongxue:["\u540c\u5b66\u5fae\u535a",106],tuita:["\u63a8\u4ed6",107],tumblr:["Tumblr",108],twitter:["Twitter",109],ushi:["\u4f18\u58eb\u7f51",110],waakee:["\u6316\u5ba2",112],wealink:["\u82e5\u90bb\u7f51",113],woshao:["\u6211\u70e7\u7f51",115],xianguo:["\u9c9c\u679c\u7f51",
116],xiaomeisns:["\u6821\u5a92\u91c7\u901a",117],xinminmb:["\u65b0\u6c11\u5fae\u535a",118],xyweibo:["\u5fae\u535a\u6821\u56ed",119],yaolanmb:["\u6447\u7bee\u5fae\u535a",120],yijee:["\u6613\u96c6\u7f51",121],youdao:["\u6709\u9053\u4e66\u7b7e",122],zjol:["\u6d59\u6c5f\u5fae\u535a",124],xinhuamb:["\u65b0\u534e\u5fae\u535a"],szmb:["\u6df1\u5733\u5fae\u535a"],changshamb:["\u5fae\u957f\u6c99"],hefeimb:["\u5408\u80a5\u5fae\u535a"],wansha:["\u73a9\u5565e\u65cf"],"189share":["\u624b\u673a\u5feb\u4f20"],diandian:["\u70b9\u70b9\u7f51"],tianji:["\u5929\u9645\u7f51"],jipin:["\u5f00\u5fc3\u96c6\u54c1"],chezhumb:["\u8f66\u4e3b\u5fae\u535a"],gplus:["Google+"],yidongweibo:["\u79fb\u52a8\u5fae\u535a"],youdaonote:["\u6709\u9053\u7b14\u8bb0"],jschina:["\u5fae\u6c5f\u82cf"],mingdao:["\u660e\u9053"],jxcn:["\u6c5f\u897f\u5fae\u535a"],qileke:["\u5947\u4e50\u6536\u85cf"],sohukan:["\u641c\u72d0\u968f\u8eab\u770b"],maikunote:["\u9ea6\u5e93\u8bb0\u4e8b"],lezhimark:["\u4e50\u77e5\u4e66\u7b7e"],"189mail":["189\u90ae\u7bb1"],
wo:["WO+\u5206\u4eab"],gmweibo:["\u5149\u660e\u5fae\u535a"],jianweibo:["\u5409\u5b89\u5fae\u535a"],qingbiji:["\u8f7b\u7b14\u8bb0"],duankou:["\u7aef\u53e3\u7f51"],qqim:["QQ\u597d\u53cb"],kdweibo:["\u4e91\u4e4b\u5bb6"],xueqiu:["\u96ea\u7403"],weixin:["\u5fae\u4fe1"]};f.iL8n={promoteHot:"\u70ed",promoteNew:"\u65b0",promoteRec:"\u63a8\u8350",rtnTxt:"\u9009\u62e9\u5176\u4ed6\u5e73\u53f0 >>",shareText:"\u5206\u4eab\u5230",shareTextShort:"\u5206\u4eab",shareTextPromote:"\u5206\u4eab\u6709\u793c",morePlats:"\u66f4\u591a\u5e73\u53f0...",morePlatsShort:"\u66f4\u591a...",whatsThis:"\u8fd9\u662f\u4ec0\u4e48\u5de5\u5177\uff1f",promote:"\u5206\u4eab\u6709\u793c",promoteShort:"\u5956",searchHint:"\u8f93\u5165\u5e73\u53f0\u5173\u952e\u5b57\u67e5\u8be2",closeHint:"30\u5206\u949f\u5185\u4e0d\u518d\u51fa\u73b0\u6b64\u5206\u4eab\u6846",loadFailed:"\u7f51\u7edc\u592a\u6162\u65e0\u6cd5\u52a0\u8f7d\uff0c\u8bf7\u7a0d\u540e\u518d\u8bd5\u3002",loadFailed2:"\u5f88\u62b1\u6b49\uff0c\u65e0\u6cd5\u8fde\u63a5\u670d\u52a1\u5668\u3002\u8bf7\u7a0d\u540e\u91cd\u8bd5\uff01",notSupport:"\u4e0d\u652f\u6301\uff01",copySuccess:"\u590d\u5236\u6210\u529f\uff01\u60a8\u53ef\u4ee5\u7c98\u8d34\u5230QQ/MSN\u4e0a\u5206\u4eab\u7ed9\u60a8\u7684\u597d\u53cb\uff01",
copyTip:"\u8bf7\u6309Ctrl+C\u590d\u5236\uff0c\u7136\u540e\u60a8\u53ef\u4ee5\u7c98\u8d34\u5230QQ/MSN\u4e0a\u5206\u4eab\u7ed9\u60a8\u7684\u597d\u53cb\uff01",bookmarkTip:"\u6309\u4e86OK\u4ee5\u540e\uff0c\u8bf7\u6309Ctrl+D\uff08Macs\u7528Command+D\uff09\u3002",confirmClose:"\u5173\u95ed\u540e\uff0c\u8be5\u5206\u4eab\u6309\u94ae30\u5206\u949f\u5c06\u4e0d\u518d\u51fa\u73b0\uff0c\u60a8\u4e5f\u65e0\u6cd5\u4f7f\u7528\u5206\u4eab\u529f\u80fd\uff0c\u786e\u5b9a\u5417\uff1f"}})();
