!function(e,t){"object"==typeof exports&&"undefined"!=typeof module?module.exports=t():"function"==typeof define&&define.amd?define(t):(e=e||self).uuidv4=t()}(this,function(){"use strict";var e="undefined"!=typeof crypto&&crypto.getRandomValues&&crypto.getRandomValues.bind(crypto)||"undefined"!=typeof msCrypto&&"function"==typeof msCrypto.getRandomValues&&msCrypto.getRandomValues.bind(msCrypto),t=new Uint8Array(16);function n(){if(!e)throw new Error("crypto.getRandomValues() not supported. See https://github.com/uuidjs/uuid#getrandomvalues-not-supported");return e(t)}for(var o=[],i=0;i<256;++i)o.push((i+256).toString(16).substr(1));return function(e,t,i){"string"==typeof e&&(t="binary"===e?new Uint8Array(16):null,e=null);var a=(e=e||{}).random||(e.rng||n)();if(a[6]=15&a[6]|64,a[8]=63&a[8]|128,t){for(var r=i||0,l=0;l<16;++l)t[r+l]=a[l];return t}return function(e,t){var n=o;return(n[e[0]]+n[e[1]]+n[e[2]]+n[e[3]]+"-"+n[e[4]]+n[e[5]]+"-"+n[e[6]]+n[e[7]]+"-"+n[e[8]]+n[e[9]]+"-"+n[e[10]]+n[e[11]]+n[e[12]]+n[e[13]]+n[e[14]]+n[e[15]]).toLowerCase()}(a)}}),function(e){e.lmSMTObj=e.lmSMTObj||[],lmSMTObj.jsonData={},lmSMTObj.cookieDomain=".kotaklife.com",lmSMTObj.domainList=[".kotaklife.com"],lmSMTObj.clickTrackers=null,lmSMTObj.initialize=null,lmSMTObj.finalize=null,lmSMTObj.pixelFireStatus=!1,lmSMTObj.onsiteEndpoint="mu-ax-n.lemnisk.co/",lmSMTObj.version="0.02",lmSMTObj.libraryName="javascript",lmSMTObj.callbackFunction=null,lmSMTObj.writeKey=lmSMTObj.writeKey||null,lmSMTObj.vizNotifObject=!1,lmSMTObj.resetFields=function(){lmSMTObj.jsonData={},lmSMTObj.pixelFireStatus=!1,lmSMTObj.callbackFunction=null},lmSMTObj.parse=function(e){try{if(e&&(lmSMTObj.resetFields(),lmSMTObj.argType=e),!lmSMTObj.pixelFireStatus)try{lmSMTObj.fireAnalyze()}catch(e){lmSMTObj.jsonData.err=e,lmSMTObj.fireAnalyze()}}catch(e){lmSMTObj.jsonData.err=e,lmSMTObj.fireAnalyze()}},lmSMTObj.getUTMparams=function(){for(var e,t=new RegExp("(?:\\?|&)(utm_[^=]+)=(.*?)(?=&|$)","gi"),n={};null!=(e=t.exec(document.URL));)n[e[1]]=e[2];return Object.keys(n).length>0?n:void 0},lmSMTObj.getEventParams=function(e){if("object"==typeof e&&null!=e){for(var t in lmSMTObj.jsonData.properties={},e)e.hasOwnProperty(t)&&(lmSMTObj.jsonData.properties[t]=e[t]);lmSMTObj.jsonData.properties.path=e.path?e.path:location.pathname,e.referrer&&(lmSMTObj.jsonData.properties.referrer=e.referrer?e.referrer:document.referrer),e.search&&(lmSMTObj.jsonData.properties.search=e.search?e.search:location.search),lmSMTObj.jsonData.properties.title=e.title?e.title:document.title,lmSMTObj.jsonData.properties.url=e.url?e.url:document.URL}else lmSMTObj.jsonData.context.page={},lmSMTObj.jsonData.context.page.path=location.pathname,document.referrer&&(lmSMTObj.jsonData.context.page.referrer=document.referrer),document.search&&(lmSMTObj.jsonData.context.page.search=location.search),lmSMTObj.jsonData.context.page.title=document.title,lmSMTObj.jsonData.context.page.url=document.URL},lmSMTObj.getCommonParams=function(e){if(lmSMTObj.getCookie("userId"))var t=lmSMTObj.getCookie("userId");if(lmSMTObj.getCookie("_ga"))var n=lmSMTObj.getCookie("_ga");if(lmSMTObj.getCookie("_fbc"))var o=lmSMTObj.getCookie("_fbc");if(lmSMTObj.getCookie("_fbp"))var i=lmSMTObj.getCookie("_fbp");if(lmSMTObj.initialize(),lmSMTObj.jsonData.id=lmSMTObj.getCookie("_vz"),lmSMTObj.jsonData.userId=t,lmSMTObj.jsonData.originalTimestamp=(new Date).getTime(),lmSMTObj.jsonData.messageId=uuidv4(),lmSMTObj.jsonData.writeKey=lmSMTObj.writeKey,lmSMTObj.jsonData.otherIds={_ga:n,_fbc:o,_fbp:i},"object"==typeof e)for(var a in e)e.hasOwnProperty(a)&&(lmSMTObj.jsonData.otherIds[a]=e[a]);lmSMTObj.jsonData.context={library:{name:lmSMTObj.libraryName,version:lmSMTObj.version},userAgent:{deviceType:lmSMTObj.getDevice(),osType:lmSMTObj.getOS(),osVersion:lmSMTObj.getOsVersion(),browser:lmSMTObj.checkBrowser(),ua:navigator.userAgent},utm:lmSMTObj.getUTMparams()}},lmSMTObj.init=function(e){lmSMTObj.writeKey=e,lmSMTObj.initialize()},lmSMTObj.identify=function(e,t,n,o){if(lmSMTObj.resetFields(),lmSMTObj.jsonData.customerProperties={},lmSMTObj.jsonData.type="identify","function"==typeof n&&(o=n,n=null),"function"==typeof t&&(o=t,n=t=null),"function"==typeof e&&(o=e,n=t=e=null),"object"==typeof e&&(n=t,t=e,e=null),e&&(lmSMTObj.jsonData.userId=e,lmSMTObj.setCookie("userId",e,365,lmSMTObj.cookieDomain)),lmSMTObj.getCommonParams(n),lmSMTObj.getEventParams("identify"),"object"==typeof t)for(var i in t)t.hasOwnProperty(i)&&(lmSMTObj.jsonData.customerProperties[i]=t[i]);if(o&&"function"!=typeof o)throw new TypeError("argument passed to callback is not valid type");try{lmSMTObj.parse()}catch(e){}o&&setTimeout(o,500)},lmSMTObj.track=function(e,t,n,o){if(lmSMTObj.resetFields(),lmSMTObj.jsonData.properties={},lmSMTObj.jsonData.type="track",!e||"string"!=typeof e)throw new TypeError("First argument has to be string");for(var i in lmSMTObj.jsonData.event=e,"function"==typeof n&&(o=n,n=null),"function"==typeof t&&(o=t,n=null,t=null),lmSMTObj.getCommonParams(n),lmSMTObj.getEventParams("track"),t)t.hasOwnProperty(i)&&(lmSMTObj.jsonData.properties[i]=t[i]);try{lmSMTObj.parse()}catch(e){}o&&setTimeout(o,500)},lmSMTObj.page=function(e,t,n,o){lmSMTObj.resetFields(),"function"==typeof n&&(o=n,n=null),"function"==typeof t&&(o=t,n=t=null),"function"==typeof e&&(o=e,n=t=e=null),"object"==typeof e&&(n=t,t=e,e=null),lmSMTObj.jsonData.type="page",e&&(lmSMTObj.jsonData.name=e),lmSMTObj.getCommonParams(n),lmSMTObj.getEventParams(t);try{lmSMTObj.parse()}catch(e){}o&&setTimeout(o,500)},lmSMTObj.getDevice=function(){var e=navigator.userAgent;return/ipad/i.test(e)?"IPAD_TAB_MOBILE":/android|Tablet/gi.test(e)&&!/mobile/i.test(e)?"TAB_MOBILE":/mqqbrowser|tencenttraveler|baidubrowser|criOS|ucbrowser|mobile|CrMo/gi.test(e)||/opera|opr/gi.test(e)&&/mobi|mini/gi.test(e)?"MOBILE":"DESKTOP"},lmSMTObj.getOS=function(){var t=e.navigator.userAgent,n=e.navigator.platform,o=null;return-1!==["Macintosh","MacIntel","MacPPC","Mac68K"].indexOf(n)?o="Mac OS":-1!==["iPhone","iPad","iPod"].indexOf(n)?o="iOS":-1!==["Win32","Win64","Windows","WinCE"].indexOf(n)?o="Windows":/Android/.test(t)?o="Android":!o&&/Linux/.test(n)&&(o="Linux"),o},lmSMTObj.getOsVersion=function(){var t,n=null;return-1!==e.navigator.userAgent.indexOf("Windows NT 10.0")&&(n="Windows 10"),-1!==e.navigator.userAgent.indexOf("Windows NT 6.2")&&(n="Windows 8"),-1!==e.navigator.userAgent.indexOf("Windows NT 6.1")&&(n="Windows 7"),-1!==e.navigator.userAgent.indexOf("Windows NT 6.0")&&(n="Windows Vista"),-1!==e.navigator.userAgent.indexOf("Windows NT 5.1")&&(n="Windows XP"),-1!==e.navigator.userAgent.indexOf("Windows NT 5.0")&&(n="Windows 2000"),-1!==e.navigator.userAgent.indexOf("Mac")&&(n=(t=/(iPhone OS|Mac OS X)\s+([\d\.]+)/).exec(e.navigator.userAgent)[0]||t.exec(navigator.appVersion)[0]),-1!==e.navigator.userAgent.indexOf("X11")&&(n="UNIX"),-1!==e.navigator.userAgent.indexOf("Linux")&&(n="Linux"),-1!==e.navigator.userAgent.indexOf("Android")&&(n=(t=/Android\s+([\d\.]+)/).exec(e.navigator.appVersion)[1]),n},lmSMTObj.checkBrowser=function(){var e,t,n,o=navigator.userAgent;return o.indexOf("Firefox")>-1?browser="Firefox":o.indexOf("MSIE")>-1||o.indexOf("rv:")>-1?browser="Internet Explorer":o.indexOf("Edg")>-1?browser="Egde":o.indexOf("OP")>-1?(browser="Opera",n=!0):o.indexOf("Chrome")>-1?(t=!0,browser="Chrome"):o.indexOf("Safari")>-1&&(browser="Safari",e=!0),t&&e&&(e=!1,browser="chrome"),t&&n&&(t=!1,browser="Opera"),browser},lmSMTObj.getCookie=function(e){var t=document.cookie;if(!e)return"";var n=t.split(";");for(var o in n)if(n.hasOwnProperty(o)){var i=n[o].match(/\s*(.*)=(.*)/);if(i&&i[1]===e&&i[2])return i[2]}return""},lmSMTObj.selectDomain=function(){if(lmSMTObj.cookieDomain&&~document.domain.indexOf(lmSMTObj.cookieDomain)&&document.domain.indexOf(lmSMTObj.cookieDomain)+lmSMTObj.cookieDomain.length===document.domain.length)return 1;for(var e=lmSMTObj.domainList,t=1;t<e.length;t++)if(document.domain.indexOf(e[t])+e[t].length===document.domain.length)return lmSMTObj.cookieDomain=e[t],0;return lmSMTObj.cookieDomain=document.domain,-1},lmSMTObj.fireAnalyze=function(){var t="https://mu-pl.lemnisk.co/analyze/cookieCallback.php?cb="+lmSMTObj.cookieDomain;if(!lmSMTObj.pixelFireStatus){var n="https://mu-pl.lemnisk.co/analyze/analyze.php";if(e.XDomainRequest)xhttp=new XDomainRequest,xhttp.onload=function(){lmSMTObj.callBackViz(t)},xhttp.open("POST",n,!0),xhttp.withCredentials=!0,xhttp.send(JSON.stringify(lmSMTObj.jsonData));else if(e.XMLHttpRequest){var o=new XMLHttpRequest;o.onreadystatechange=function(){o.readyState===XMLHttpRequest.DONE&&200===o.status&&lmSMTObj.callBackViz(t)},o.open("POST",n,!0),o.withCredentials=!0,o.send(JSON.stringify(lmSMTObj.jsonData))}}},lmSMTObj.detectCampaign=function(){document.URL;return"VIZVRM6238"},lmSMTObj.initialize=function(){lmSMTObj.selectDomain&&lmSMTObj.selectDomain(),lmSMTObj.clickTrackers="",lmSMTObj.vizidCookie("_vz",lmSMTObj.cookieDomain)},lmSMTObj.OnsiteNotificationTag=function(){if(lmSMTObj.vizNotifObject)VizuryNotificationObject&&"function"==typeof VizuryNotificationObject.createDivElementSinglePage&&VizuryNotificationObject.createDivElementSinglePage();else try{var e=document.createElement("script");e.type="text/javascript",e.async=!0,e.src="https://cdn25.lemnisk.co/ssp/smtag/GetJsFileEventCapture.js",document.body.appendChild(e),e.onload=function(){try{VizuryNotificationObject.createDivElement(),lmSMTObj.vizNotifObject=!0}catch(e){}},e.onreadystatechange=function(){if("complete"==e.readyState||"loaded"==e.readyState)try{VizuryNotificationObject.createDivElement(),lmSMTObj.vizNotifObject=!0}catch(e){}}}catch(e){}},lmSMTObj.callBackViz=function(e){e=lmSMTObj.isSafari()?e+"&sf=y":e;var t=document.getElementsByTagName("script")[0],n=document.createElement("script");n.type="text/javascript",n.src=e,n.async=!0,t.parentNode.insertBefore(n,t),n.onload=function(){try{lmSMTObj.OnsiteNotificationTag()}catch(e){}},n.onreadystatechange=function(){if("complete"==n.readyState||"loaded"==n.readyState)try{lmSMTObj.OnsiteNotificationTag()}catch(e){}}},lmSMTObj.vizidCookie=function(e,t){var n=lmSMTObj.getCookie(e);return n||(lmSMTObj.ftu=1,n=lmSMTObj.generateVizCookie(),lmSMTObj.setCookie(e,n,365,t)),n},lmSMTObj.generateVizCookie=function(){for(var e=lmSMTObj.isSafari()?"vizSF_":"viz_",t=parseInt((new Date).getTime()/1e3,10).toString(16),n=Math.floor(7418186*Math.random()).toString(16);n.length<5;)n+=Math.floor(7418186*Math.random()).toString(16);return e+t+(n=n.slice(n.length-5))},lmSMTObj.isSafari=function(){return Object.prototype.toString.call(e.HTMLElement).indexOf("Constructor")>0||"[object SafariRemoteNotification]"===(!e.safari||safari.pushNotification).toString()},lmSMTObj.setCookie=function(e,t,n,o){var i=o?"; domain="+o:"";if(n>0){var a=new Date;a.setDate(a.getDate()+n);var r=encodeURIComponent(t)+(null==n?"":"; expires="+a.toUTCString())+"; path=/"+i;document.cookie=e+"="+r}else document.cookie=e+"="+encodeURIComponent(t)},function(){for(;lmSMTObj.length>0;){var t=Array.prototype.slice.call(lmSMTObj.shift());e.lmSMTObj[t[0]].apply(this,t.slice(1))}}(),"undefined"!=typeof lmSMTObj&&lmSMTObj&&void 0!==lmSMTObj.parse&&(lmSMTObj.pixelFireStatus=!1)}(window);