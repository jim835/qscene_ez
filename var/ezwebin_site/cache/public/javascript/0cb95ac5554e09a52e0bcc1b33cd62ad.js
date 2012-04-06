
(function(a,b){function cu(a){return f.isWindow(a)?a:a.nodeType===9?a.defaultView||a.parentWindow:!1}function cr(a){if(!cg[a]){var b=c.body,d=f("<"+a+">").appendTo(b),e=d.css("display");d.remove();if(e==="none"||e===""){ch||(ch=c.createElement("iframe"),ch.frameBorder=ch.width=ch.height=0),b.appendChild(ch);if(!ci||!ch.createElement)ci=(ch.contentWindow||ch.contentDocument).document,ci.write((c.compatMode==="CSS1Compat"?"<!doctype html>":"")+"<html><body>"),ci.close();d=ci.createElement(a),ci.body.appendChild(d),e=f.css(d,"display"),b.removeChild(ch)}cg[a]=e}return cg[a]}function cq(a,b){var c={};f.each(cm.concat.apply([],cm.slice(0,b)),function(){c[this]=a});return c}function cp(){cn=b}function co(){setTimeout(cp,0);return cn=f.now()}function cf(){try{return new a.ActiveXObject("Microsoft.XMLHTTP")}catch(b){}}function ce(){try{return new a.XMLHttpRequest}catch(b){}}function b$(a,c){a.dataFilter&&(c=a.dataFilter(c,a.dataType));var d=a.dataTypes,e={},g,h,i=d.length,j,k=d[0],l,m,n,o,p;for(g=1;g<i;g++){if(g===1)for(h in a.converters)typeof h=="string"&&(e[h.toLowerCase()]=a.converters[h]);l=k,k=d[g];if(k==="*")k=l;else if(l!=="*"&&l!==k){m=l+" "+k,n=e[m]||e["* "+k];if(!n){p=b;for(o in e){j=o.split(" ");if(j[0]===l||j[0]==="*"){p=e[j[1]+" "+k];if(p){o=e[o],o===!0?n=p:p===!0&&(n=o);break}}}}!n&&!p&&f.error("No conversion from "+m.replace(" "," to ")),n!==!0&&(c=n?n(c):p(o(c)))}}return c}function bZ(a,c,d){var e=a.contents,f=a.dataTypes,g=a.responseFields,h,i,j,k;for(i in g)i in d&&(c[g[i]]=d[i]);while(f[0]==="*")f.shift(),h===b&&(h=a.mimeType||c.getResponseHeader("content-type"));if(h)for(i in e)if(e[i]&&e[i].test(h)){f.unshift(i);break}if(f[0]in d)j=f[0];else{for(i in d){if(!f[0]||a.converters[i+" "+f[0]]){j=i;break}k||(k=i)}j=j||k}if(j){j!==f[0]&&f.unshift(j);return d[j]}}function bY(a,b,c,d){if(f.isArray(b))f.each(b,function(b,e){c||bA.test(a)?d(a,e):bY(a+"["+(typeof e=="object"||f.isArray(e)?b:"")+"]",e,c,d)});else if(!c&&b!=null&&typeof b=="object")for(var e in b)bY(a+"["+e+"]",b[e],c,d);else d(a,b)}function bX(a,c){var d,e,g=f.ajaxSettings.flatOptions||{};for(d in c)c[d]!==b&&((g[d]?a:e||(e={}))[d]=c[d]);e&&f.extend(!0,a,e)}function bW(a,c,d,e,f,g){f=f||c.dataTypes[0],g=g||{},g[f]=!0;var h=a[f],i=0,j=h?h.length:0,k=a===bP,l;for(;i<j&&(k||!l);i++)l=h[i](c,d,e),typeof l=="string"&&(!k||g[l]?l=b:(c.dataTypes.unshift(l),l=bW(a,c,d,e,l,g)));(k||!l)&&!g["*"]&&(l=bW(a,c,d,e,"*",g));return l}function bV(a){return function(b,c){typeof b!="string"&&(c=b,b="*");if(f.isFunction(c)){var d=b.toLowerCase().split(bL),e=0,g=d.length,h,i,j;for(;e<g;e++)h=d[e],j=/^\+/.test(h),j&&(h=h.substr(1)||"*"),i=a[h]=a[h]||[],i[j?"unshift":"push"](c)}}}function by(a,b,c){var d=b==="width"?a.offsetWidth:a.offsetHeight,e=b==="width"?bt:bu;if(d>0){c!=="border"&&f.each(e,function(){c||(d-=parseFloat(f.css(a,"padding"+this))||0),c==="margin"?d+=parseFloat(f.css(a,c+this))||0:d-=parseFloat(f.css(a,"border"+this+"Width"))||0});return d+"px"}d=bv(a,b,b);if(d<0||d==null)d=a.style[b]||0;d=parseFloat(d)||0,c&&f.each(e,function(){d+=parseFloat(f.css(a,"padding"+this))||0,c!=="padding"&&(d+=parseFloat(f.css(a,"border"+this+"Width"))||0),c==="margin"&&(d+=parseFloat(f.css(a,c+this))||0)});return d+"px"}function bl(a,b){b.src?f.ajax({url:b.src,async:!1,dataType:"script"}):f.globalEval((b.text||b.textContent||b.innerHTML||"").replace(bd,"/*$0*/")),b.parentNode&&b.parentNode.removeChild(b)}function bk(a){f.nodeName(a,"input")?bj(a):"getElementsByTagName"in a&&f.grep(a.getElementsByTagName("input"),bj)}function bj(a){if(a.type==="checkbox"||a.type==="radio")a.defaultChecked=a.checked}function bi(a){return"getElementsByTagName"in a?a.getElementsByTagName("*"):"querySelectorAll"in a?a.querySelectorAll("*"):[]}function bh(a,b){var c;if(b.nodeType===1){b.clearAttributes&&b.clearAttributes(),b.mergeAttributes&&b.mergeAttributes(a),c=b.nodeName.toLowerCase();if(c==="object")b.outerHTML=a.outerHTML;else if(c!=="input"||a.type!=="checkbox"&&a.type!=="radio"){if(c==="option")b.selected=a.defaultSelected;else if(c==="input"||c==="textarea")b.defaultValue=a.defaultValue}else a.checked&&(b.defaultChecked=b.checked=a.checked),b.value!==a.value&&(b.value=a.value);b.removeAttribute(f.expando)}}function bg(a,b){if(b.nodeType===1&&!!f.hasData(a)){var c=f.expando,d=f.data(a),e=f.data(b,d);if(d=d[c]){var g=d.events;e=e[c]=f.extend({},d);if(g){delete e.handle,e.events={};for(var h in g)for(var i=0,j=g[h].length;i<j;i++)f.event.add(b,h+(g[h][i].namespace?".":"")+g[h][i].namespace,g[h][i],g[h][i].data)}}}}function bf(a,b){return f.nodeName(a,"table")?a.getElementsByTagName("tbody")[0]||a.appendChild(a.ownerDocument.createElement("tbody")):a}function V(a,b,c){b=b||0;if(f.isFunction(b))return f.grep(a,function(a,d){var e=!!b.call(a,d,a);return e===c});if(b.nodeType)return f.grep(a,function(a,d){return a===b===c});if(typeof b=="string"){var d=f.grep(a,function(a){return a.nodeType===1});if(Q.test(b))return f.filter(b,d,!c);b=f.filter(b,d)}return f.grep(a,function(a,d){return f.inArray(a,b)>=0===c})}function U(a){return!a||!a.parentNode||a.parentNode.nodeType===11}function M(a,b){return(a&&a!=="*"?a+".":"")+b.replace(y,"`").replace(z,"&")}function L(a){var b,c,d,e,g,h,i,j,k,l,m,n,o,p=[],q=[],r=f._data(this,"events");if(!(a.liveFired===this||!r||!r.live||a.target.disabled||a.button&&a.type==="click")){a.namespace&&(n=new RegExp("(^|\\.)"+a.namespace.split(".").join("\\.(?:.*\\.)?")+"(\\.|$)")),a.liveFired=this;var s=r.live.slice(0);for(i=0;i<s.length;i++)g=s[i],g.origType.replace(w,"")===a.type?q.push(g.selector):s.splice(i--,1);e=f(a.target).closest(q,a.currentTarget);for(j=0,k=e.length;j<k;j++){m=e[j];for(i=0;i<s.length;i++){g=s[i];if(m.selector===g.selector&&(!n||n.test(g.namespace))&&!m.elem.disabled){h=m.elem,d=null;if(g.preType==="mouseenter"||g.preType==="mouseleave")a.type=g.preType,d=f(a.relatedTarget).closest(g.selector)[0],d&&f.contains(h,d)&&(d=h);(!d||d!==h)&&p.push({elem:h,handleObj:g,level:m.level})}}}for(j=0,k=p.length;j<k;j++){e=p[j];if(c&&e.level>c)break;a.currentTarget=e.elem,a.data=e.handleObj.data,a.handleObj=e.handleObj,o=e.handleObj.origHandler.apply(e.elem,arguments);if(o===!1||a.isPropagationStopped()){c=e.level,o===!1&&(b=!1);if(a.isImmediatePropagationStopped())break}}return b}}function J(a,c,d){var e=f.extend({},d[0]);e.type=a,e.originalEvent={},e.liveFired=b,f.event.handle.call(c,e),e.isDefaultPrevented()&&d[0].preventDefault()}function D(){return!0}function C(){return!1}function m(a,c,d){var e=c+"defer",g=c+"queue",h=c+"mark",i=f.data(a,e,b,!0);i&&(d==="queue"||!f.data(a,g,b,!0))&&(d==="mark"||!f.data(a,h,b,!0))&&setTimeout(function(){!f.data(a,g,b,!0)&&!f.data(a,h,b,!0)&&(f.removeData(a,e,!0),i.resolve())},0)}function l(a){for(var b in a)if(b!=="toJSON")return!1;return!0}function k(a,c,d){if(d===b&&a.nodeType===1){var e="data-"+c.replace(j,"-$1").toLowerCase();d=a.getAttribute(e);if(typeof d=="string"){try{d=d==="true"?!0:d==="false"?!1:d==="null"?null:f.isNaN(d)?i.test(d)?f.parseJSON(d):d:parseFloat(d)}catch(g){}f.data(a,c,d)}else d=b}return d}var c=a.document,d=a.navigator,e=a.location,f=function(){function K(){if(!e.isReady){try{c.documentElement.doScroll("left")}catch(a){setTimeout(K,1);return}e.ready()}}var e=function(a,b){return new e.fn.init(a,b,h)},f=a.jQuery,g=a.$,h,i=/^(?:[^#<]*(<[\w\W]+>)[^>]*$|#([\w\-]*)$)/,j=/\S/,k=/^\s+/,l=/\s+$/,m=/\d/,n=/^<(\w+)\s*\/?>(?:<\/\1>)?$/,o=/^[\],:{}\s]*$/,p=/\\(?:["\\\/bfnrt]|u[0-9a-fA-F]{4})/g,q=/"[^"\\\n\r]*"|true|false|null|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?/g,r=/(?:^|:|,)(?:\s*\[)+/g,s=/(webkit)[ \/]([\w.]+)/,t=/(opera)(?:.*version)?[ \/]([\w.]+)/,u=/(msie) ([\w.]+)/,v=/(mozilla)(?:.*? rv:([\w.]+))?/,w=/-([a-z]|[0-9])/ig,x=/^-ms-/,y=function(a,b){return(b+"").toUpperCase()},z=d.userAgent,A,B,C,D=Object.prototype.toString,E=Object.prototype.hasOwnProperty,F=Array.prototype.push,G=Array.prototype.slice,H=String.prototype.trim,I=Array.prototype.indexOf,J={};e.fn=e.prototype={constructor:e,init:function(a,d,f){var g,h,j,k;if(!a)return this;if(a.nodeType){this.context=this[0]=a,this.length=1;return this}if(a==="body"&&!d&&c.body){this.context=c,this[0]=c.body,this.selector=a,this.length=1;return this}if(typeof a=="string"){a.charAt(0)!=="<"||a.charAt(a.length-1)!==">"||a.length<3?g=i.exec(a):g=[null,a,null];if(g&&(g[1]||!d)){if(g[1]){d=d instanceof e?d[0]:d,k=d?d.ownerDocument||d:c,j=n.exec(a),j?e.isPlainObject(d)?(a=[c.createElement(j[1])],e.fn.attr.call(a,d,!0)):a=[k.createElement(j[1])]:(j=e.buildFragment([g[1]],[k]),a=(j.cacheable?e.clone(j.fragment):j.fragment).childNodes);return e.merge(this,a)}h=c.getElementById(g[2]);if(h&&h.parentNode){if(h.id!==g[2])return f.find(a);this.length=1,this[0]=h}this.context=c,this.selector=a;return this}return!d||d.jquery?(d||f).find(a):this.constructor(d).find(a)}if(e.isFunction(a))return f.ready(a);a.selector!==b&&(this.selector=a.selector,this.context=a.context);return e.makeArray(a,this)},selector:"",jquery:"1.6.4",length:0,size:function(){return this.length},toArray:function(){return G.call(this,0)},get:function(a){return a==null?this.toArray():a<0?this[this.length+a]:this[a]},pushStack:function(a,b,c){var d=this.constructor();e.isArray(a)?F.apply(d,a):e.merge(d,a),d.prevObject=this,d.context=this.context,b==="find"?d.selector=this.selector+(this.selector?" ":"")+c:b&&(d.selector=this.selector+"."+b+"("+c+")");return d},each:function(a,b){return e.each(this,a,b)},ready:function(a){e.bindReady(),B.done(a);return this},eq:function(a){return a===-1?this.slice(a):this.slice(a,+a+1)},first:function(){return this.eq(0)},last:function(){return this.eq(-1)},slice:function(){return this.pushStack(G.apply(this,arguments),"slice",G.call(arguments).join(","))},map:function(a){return this.pushStack(e.map(this,function(b,c){return a.call(b,c,b)}))},end:function(){return this.prevObject||this.constructor(null)},push:F,sort:[].sort,splice:[].splice},e.fn.init.prototype=e.fn,e.extend=e.fn.extend=function(){var a,c,d,f,g,h,i=arguments[0]||{},j=1,k=arguments.length,l=!1;typeof i=="boolean"&&(l=i,i=arguments[1]||{},j=2),typeof i!="object"&&!e.isFunction(i)&&(i={}),k===j&&(i=this,--j);for(;j<k;j++)if((a=arguments[j])!=null)for(c in a){d=i[c],f=a[c];if(i===f)continue;l&&f&&(e.isPlainObject(f)||(g=e.isArray(f)))?(g?(g=!1,h=d&&e.isArray(d)?d:[]):h=d&&e.isPlainObject(d)?d:{},i[c]=e.extend(l,h,f)):f!==b&&(i[c]=f)}return i},e.extend({noConflict:function(b){a.$===e&&(a.$=g),b&&a.jQuery===e&&(a.jQuery=f);return e},isReady:!1,readyWait:1,holdReady:function(a){a?e.readyWait++:e.ready(!0)},ready:function(a){if(a===!0&&!--e.readyWait||a!==!0&&!e.isReady){if(!c.body)return setTimeout(e.ready,1);e.isReady=!0;if(a!==!0&&--e.readyWait>0)return;B.resolveWith(c,[e]),e.fn.trigger&&e(c).trigger("ready").unbind("ready")}},bindReady:function(){if(!B){B=e._Deferred();if(c.readyState==="complete")return setTimeout(e.ready,1);if(c.addEventListener)c.addEventListener("DOMContentLoaded",C,!1),a.addEventListener("load",e.ready,!1);else if(c.attachEvent){c.attachEvent("onreadystatechange",C),a.attachEvent("onload",e.ready);var b=!1;try{b=a.frameElement==null}catch(d){}c.documentElement.doScroll&&b&&K()}}},isFunction:function(a){return e.type(a)==="function"},isArray:Array.isArray||function(a){return e.type(a)==="array"},isWindow:function(a){return a&&typeof a=="object"&&"setInterval"in a},isNaN:function(a){return a==null||!m.test(a)||isNaN(a)},type:function(a){return a==null?String(a):J[D.call(a)]||"object"},isPlainObject:function(a){if(!a||e.type(a)!=="object"||a.nodeType||e.isWindow(a))return!1;try{if(a.constructor&&!E.call(a,"constructor")&&!E.call(a.constructor.prototype,"isPrototypeOf"))return!1}catch(c){return!1}var d;for(d in a);return d===b||E.call(a,d)},isEmptyObject:function(a){for(var b in a)return!1;return!0},error:function(a){throw a},parseJSON:function(b){if(typeof b!="string"||!b)return null;b=e.trim(b);if(a.JSON&&a.JSON.parse)return a.JSON.parse(b);if(o.test(b.replace(p,"@").replace(q,"]").replace(r,"")))return(new Function("return "+b))();e.error("Invalid JSON: "+b)},parseXML:function(c){var d,f;try{a.DOMParser?(f=new DOMParser,d=f.parseFromString(c,"text/xml")):(d=new ActiveXObject("Microsoft.XMLDOM"),d.async="false",d.loadXML(c))}catch(g){d=b}(!d||!d.documentElement||d.getElementsByTagName("parsererror").length)&&e.error("Invalid XML: "+c);return d},noop:function(){},globalEval:function(b){b&&j.test(b)&&(a.execScript||function(b){a.eval.call(a,b)})(b)},camelCase:function(a){return a.replace(x,"ms-").replace(w,y)},nodeName:function(a,b){return a.nodeName&&a.nodeName.toUpperCase()===b.toUpperCase()},each:function(a,c,d){var f,g=0,h=a.length,i=h===b||e.isFunction(a);if(d){if(i){for(f in a)if(c.apply(a[f],d)===!1)break}else for(;g<h;)if(c.apply(a[g++],d)===!1)break}else if(i){for(f in a)if(c.call(a[f],f,a[f])===!1)break}else for(;g<h;)if(c.call(a[g],g,a[g++])===!1)break;return a},trim:H?function(a){return a==null?"":H.call(a)}:function(a){return a==null?"":(a+"").replace(k,"").replace(l,"")},makeArray:function(a,b){var c=b||[];if(a!=null){var d=e.type(a);a.length==null||d==="string"||d==="function"||d==="regexp"||e.isWindow(a)?F.call(c,a):e.merge(c,a)}return c},inArray:function(a,b){if(!b)return-1;if(I)return I.call(b,a);for(var c=0,d=b.length;c<d;c++)if(b[c]===a)return c;return-1},merge:function(a,c){var d=a.length,e=0;if(typeof c.length=="number")for(var f=c.length;e<f;e++)a[d++]=c[e];else while(c[e]!==b)a[d++]=c[e++];a.length=d;return a},grep:function(a,b,c){var d=[],e;c=!!c;for(var f=0,g=a.length;f<g;f++)e=!!b(a[f],f),c!==e&&d.push(a[f]);return d},map:function(a,c,d){var f,g,h=[],i=0,j=a.length,k=a instanceof e||j!==b&&typeof j=="number"&&(j>0&&a[0]&&a[j-1]||j===0||e.isArray(a));if(k)for(;i<j;i++)f=c(a[i],i,d),f!=null&&(h[h.length]=f);else for(g in a)f=c(a[g],g,d),f!=null&&(h[h.length]=f);return h.concat.apply([],h)},guid:1,proxy:function(a,c){if(typeof c=="string"){var d=a[c];c=a,a=d}if(!e.isFunction(a))return b;var f=G.call(arguments,2),g=function(){return a.apply(c,f.concat(G.call(arguments)))};g.guid=a.guid=a.guid||g.guid||e.guid++;return g},access:function(a,c,d,f,g,h){var i=a.length;if(typeof c=="object"){for(var j in c)e.access(a,j,c[j],f,g,d);return a}if(d!==b){f=!h&&f&&e.isFunction(d);for(var k=0;k<i;k++)g(a[k],c,f?d.call(a[k],k,g(a[k],c)):d,h);return a}return i?g(a[0],c):b},now:function(){return(new Date).getTime()},uaMatch:function(a){a=a.toLowerCase();var b=s.exec(a)||t.exec(a)||u.exec(a)||a.indexOf("compatible")<0&&v.exec(a)||[];return{browser:b[1]||"",version:b[2]||"0"}},sub:function(){function a(b,c){return new a.fn.init(b,c)}e.extend(!0,a,this),a.superclass=this,a.fn=a.prototype=this(),a.fn.constructor=a,a.sub=this.sub,a.fn.init=function(d,f){f&&f instanceof e&&!(f instanceof a)&&(f=a(f));return e.fn.init.call(this,d,f,b)},a.fn.init.prototype=a.fn;var b=a(c);return a},browser:{}}),e.each("Boolean Number String Function Array Date RegExp Object".split(" "),function(a,b){J["[object "+b+"]"]=b.toLowerCase()}),A=e.uaMatch(z),A.browser&&(e.browser[A.browser]=!0,e.browser.version=A.version),e.browser.webkit&&(e.browser.safari=!0),j.test(" ")&&(k=/^[\s\xA0]+/,l=/[\s\xA0]+$/),h=e(c),c.addEventListener?C=function(){c.removeEventListener("DOMContentLoaded",C,!1),e.ready()}:c.attachEvent&&(C=function(){c.readyState==="complete"&&(c.detachEvent("onreadystatechange",C),e.ready())});return e}(),g="done fail isResolved isRejected promise then always pipe".split(" "),h=[].slice;f.extend({_Deferred:function(){var a=[],b,c,d,e={done:function(){if(!d){var c=arguments,g,h,i,j,k;b&&(k=b,b=0);for(g=0,h=c.length;g<h;g++)i=c[g],j=f.type(i),j==="array"?e.done.apply(e,i):j==="function"&&a.push(i);k&&e.resolveWith(k[0],k[1])}return this},resolveWith:function(e,f){if(!d&&!b&&!c){f=f||[],c=1;try{while(a[0])a.shift().apply(e,f)}finally{b=[e,f],c=0}}return this},resolve:function(){e.resolveWith(this,arguments);return this},isResolved:function(){return!!c||!!b},cancel:function(){d=1,a=[];return this}};return e},Deferred:function(a){var b=f._Deferred(),c=f._Deferred(),d;f.extend(b,{then:function(a,c){b.done(a).fail(c);return this},always:function(){return b.done.apply(b,arguments).fail.apply(this,arguments)},fail:c.done,rejectWith:c.resolveWith,reject:c.resolve,isRejected:c.isResolved,pipe:function(a,c){return f.Deferred(function(d){f.each({done:[a,"resolve"],fail:[c,"reject"]},function(a,c){var e=c[0],g=c[1],h;f.isFunction(e)?b[a](function(){h=e.apply(this,arguments),h&&f.isFunction(h.promise)?h.promise().then(d.resolve,d.reject):d[g+"With"](this===b?d:this,[h])}):b[a](d[g])})}).promise()},promise:function(a){if(a==null){if(d)return d;d=a={}}var c=g.length;while(c--)a[g[c]]=b[g[c]];return a}}),b.done(c.cancel).fail(b.cancel),delete b.cancel,a&&a.call(b,b);return b},when:function(a){function i(a){return function(c){b[a]=arguments.length>1?h.call(arguments,0):c,--e||g.resolveWith(g,h.call(b,0))}}var b=arguments,c=0,d=b.length,e=d,g=d<=1&&a&&f.isFunction(a.promise)?a:f.Deferred();if(d>1){for(;c<d;c++)b[c]&&f.isFunction(b[c].promise)?b[c].promise().then(i(c),g.reject):--e;e||g.resolveWith(g,b)}else g!==a&&g.resolveWith(g,d?[a]:[]);return g.promise()}}),f.support=function(){var a=c.createElement("div"),b=c.documentElement,d,e,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u;a.setAttribute("className","t"),a.innerHTML="   <link/><table></table><a href='/a' style='top:1px;float:left;opacity:.55;'>a</a><input type='checkbox'/>",d=a.getElementsByTagName("*"),e=a.getElementsByTagName("a")[0];if(!d||!d.length||!e)return{};g=c.createElement("select"),h=g.appendChild(c.createElement("option")),i=a.getElementsByTagName("input")[0],k={leadingWhitespace:a.firstChild.nodeType===3,tbody:!a.getElementsByTagName("tbody").length,htmlSerialize:!!a.getElementsByTagName("link").length,style:/top/.test(e.getAttribute("style")),hrefNormalized:e.getAttribute("href")==="/a",opacity:/^0.55$/.test(e.style.opacity),cssFloat:!!e.style.cssFloat,checkOn:i.value==="on",optSelected:h.selected,getSetAttribute:a.className!=="t",submitBubbles:!0,changeBubbles:!0,focusinBubbles:!1,deleteExpando:!0,noCloneEvent:!0,inlineBlockNeedsLayout:!1,shrinkWrapBlocks:!1,reliableMarginRight:!0},i.checked=!0,k.noCloneChecked=i.cloneNode(!0).checked,g.disabled=!0,k.optDisabled=!h.disabled;try{delete a.test}catch(v){k.deleteExpando=!1}!a.addEventListener&&a.attachEvent&&a.fireEvent&&(a.attachEvent("onclick",function(){k.noCloneEvent=!1}),a.cloneNode(!0).fireEvent("onclick")),i=c.createElement("input"),i.value="t",i.setAttribute("type","radio"),k.radioValue=i.value==="t",i.setAttribute("checked","checked"),a.appendChild(i),l=c.createDocumentFragment(),l.appendChild(a.firstChild),k.checkClone=l.cloneNode(!0).cloneNode(!0).lastChild.checked,a.innerHTML="",a.style.width=a.style.paddingLeft="1px",m=c.getElementsByTagName("body")[0],o=c.createElement(m?"div":"body"),p={visibility:"hidden",width:0,height:0,border:0,margin:0,background:"none"},m&&f.extend(p,{position:"absolute",left:"-1000px",top:"-1000px"});for(t in p)o.style[t]=p[t];o.appendChild(a),n=m||b,n.insertBefore(o,n.firstChild),k.appendChecked=i.checked,k.boxModel=a.offsetWidth===2,"zoom"in a.style&&(a.style.display="inline",a.style.zoom=1,k.inlineBlockNeedsLayout=a.offsetWidth===2,a.style.display="",a.innerHTML="<div style='width:4px;'></div>",k.shrinkWrapBlocks=a.offsetWidth!==2),a.innerHTML="<table><tr><td style='padding:0;border:0;display:none'></td><td>t</td></tr></table>",q=a.getElementsByTagName("td"),u=q[0].offsetHeight===0,q[0].style.display="",q[1].style.display="none",k.reliableHiddenOffsets=u&&q[0].offsetHeight===0,a.innerHTML="",c.defaultView&&c.defaultView.getComputedStyle&&(j=c.createElement("div"),j.style.width="0",j.style.marginRight="0",a.appendChild(j),k.reliableMarginRight=(parseInt((c.defaultView.getComputedStyle(j,null)||{marginRight:0}).marginRight,10)||0)===0),o.innerHTML="",n.removeChild(o);if(a.attachEvent)for(t in{submit:1,change:1,focusin:1})s="on"+t,u=s in a,u||(a.setAttribute(s,"return;"),u=typeof a[s]=="function"),k[t+"Bubbles"]=u;o=l=g=h=m=j=a=i=null;return k}(),f.boxModel=f.support.boxModel;var i=/^(?:\{.*\}|\[.*\])$/,j=/([A-Z])/g;f.extend({cache:{},uuid:0,expando:"jQuery"+(f.fn.jquery+Math.random()).replace(/\D/g,""),noData:{embed:!0,object:"clsid:D27CDB6E-AE6D-11cf-96B8-444553540000",applet:!0},hasData:function(a){a=a.nodeType?f.cache[a[f.expando]]:a[f.expando];return!!a&&!l(a)},data:function(a,c,d,e){if(!!f.acceptData(a)){var g,h,i=f.expando,j=typeof c=="string",k=a.nodeType,l=k?f.cache:a,m=k?a[f.expando]:a[f.expando]&&f.expando;if((!m||e&&m&&l[m]&&!l[m][i])&&j&&d===b)return;m||(k?a[f.expando]=m=++f.uuid:m=f.expando),l[m]||(l[m]={},k||(l[m].toJSON=f.noop));if(typeof c=="object"||typeof c=="function")e?l[m][i]=f.extend(l[m][i],c):l[m]=f.extend(l[m],c);g=l[m],e&&(g[i]||(g[i]={}),g=g[i]),d!==b&&(g[f.camelCase(c)]=d);if(c==="events"&&!g[c])return g[i]&&g[i].events;j?(h=g[c],h==null&&(h=g[f.camelCase(c)])):h=g;return h}},removeData:function(a,b,c){if(!!f.acceptData(a)){var d,e=f.expando,g=a.nodeType,h=g?f.cache:a,i=g?a[f.expando]:f.expando;if(!h[i])return;if(b){d=c?h[i][e]:h[i];if(d){d[b]||(b=f.camelCase(b)),delete d[b];if(!l(d))return}}if(c){delete h[i][e];if(!l(h[i]))return}var j=h[i][e];f.support.deleteExpando||!h.setInterval?delete h[i]:h[i]=null,j?(h[i]={},g||(h[i].toJSON=f.noop),h[i][e]=j):g&&(f.support.deleteExpando?delete a[f.expando]:a.removeAttribute?a.removeAttribute(f.expando):a[f.expando]=null)}},_data:function(a,b,c){return f.data(a,b,c,!0)},acceptData:function(a){if(a.nodeName){var b=f.noData[a.nodeName.toLowerCase()];if(b)return b!==!0&&a.getAttribute("classid")===b}return!0}}),f.fn.extend({data:function(a,c){var d=null;if(typeof a=="undefined"){if(this.length){d=f.data(this[0]);if(this[0].nodeType===1){var e=this[0].attributes,g;for(var h=0,i=e.length;h<i;h++)g=e[h].name,g.indexOf("data-")===0&&(g=f.camelCase(g.substring(5)),k(this[0],g,d[g]))}}return d}if(typeof a=="object")return this.each(function(){f.data(this,a)});var j=a.split(".");j[1]=j[1]?"."+j[1]:"";if(c===b){d=this.triggerHandler("getData"+j[1]+"!",[j[0]]),d===b&&this.length&&(d=f.data(this[0],a),d=k(this[0],a,d));return d===b&&j[1]?this.data(j[0]):d}return this.each(function(){var b=f(this),d=[j[0],c];b.triggerHandler("setData"+j[1]+"!",d),f.data(this,a,c),b.triggerHandler("changeData"+j[1]+"!",d)})},removeData:function(a){return this.each(function(){f.removeData(this,a)})}}),f.extend({_mark:function(a,c){a&&(c=(c||"fx")+"mark",f.data(a,c,(f.data(a,c,b,!0)||0)+1,!0))},_unmark:function(a,c,d){a!==!0&&(d=c,c=a,a=!1);if(c){d=d||"fx";var e=d+"mark",g=a?0:(f.data(c,e,b,!0)||1)-1;g?f.data(c,e,g,!0):(f.removeData(c,e,!0),m(c,d,"mark"))}},queue:function(a,c,d){if(a){c=(c||"fx")+"queue";var e=f.data(a,c,b,!0);d&&(!e||f.isArray(d)?e=f.data(a,c,f.makeArray(d),!0):e.push(d));return e||[]}},dequeue:function(a,b){b=b||"fx";var c=f.queue(a,b),d=c.shift(),e;d==="inprogress"&&(d=c.shift()),d&&(b==="fx"&&c.unshift("inprogress"),d.call(a,function(){f.dequeue(a,b)})),c.length||(f.removeData(a,b+"queue",!0),m(a,b,"queue"))}}),f.fn.extend({queue:function(a,c){typeof a!="string"&&(c=a,a="fx");if(c===b)return f.queue(this[0],a);return this.each(function(){var b=f.queue(this,a,c);a==="fx"&&b[0]!=="inprogress"&&f.dequeue(this,a)})},dequeue:function(a){return this.each(function(){f.dequeue(this,a)})},delay:function(a,b){a=f.fx?f.fx.speeds[a]||a:a,b=b||"fx";return this.queue(b,function(){var c=this;setTimeout(function(){f.dequeue(c,b)},a)})},clearQueue:function(a){return this.queue(a||"fx",[])},promise:function(a,c){function m(){--h||d.resolveWith(e,[e])}typeof a!="string"&&(c=a,a=b),a=a||"fx";var d=f.Deferred(),e=this,g=e.length,h=1,i=a+"defer",j=a+"queue",k=a+"mark",l;while(g--)if(l=f.data(e[g],i,b,!0)||(f.data(e[g],j,b,!0)||f.data(e[g],k,b,!0))&&f.data(e[g],i,f._Deferred(),!0))h++,l.done(m);m();return d.promise()}});var n=/[\n\t\r]/g,o=/\s+/,p=/\r/g,q=/^(?:button|input)$/i,r=/^(?:button|input|object|select|textarea)$/i,s=/^a(?:rea)?$/i,t=/^(?:autofocus|autoplay|async|checked|controls|defer|disabled|hidden|loop|multiple|open|readonly|required|scoped|selected)$/i,u,v;f.fn.extend({attr:function(a,b){return f.access(this,a,b,!0,f.attr)},removeAttr:function(a){return this.each(function(){f.removeAttr(this,a)})},prop:function(a,b){return f.access(this,a,b,!0,f.prop)},removeProp:function(a){a=f.propFix[a]||a;return this.each(function(){try{this[a]=b,delete this[a]}catch(c){}})},addClass:function(a){var b,c,d,e,g,h,i;if(f.isFunction(a))return this.each(function(b){f(this).addClass(a.call(this,b,this.className))});if(a&&typeof a=="string"){b=a.split(o);for(c=0,d=this.length;c<d;c++){e=this[c];if(e.nodeType===1)if(!e.className&&b.length===1)e.className=a;else{g=" "+e.className+" ";for(h=0,i=b.length;h<i;h++)~g.indexOf(" "+b[h]+" ")||(g+=b[h]+" ");e.className=f.trim(g)}}}return this},removeClass:function(a){var c,d,e,g,h,i,j;if(f.isFunction(a))return this.each(function(b){f(this).removeClass(a.call(this,b,this.className))});if(a&&typeof a=="string"||a===b){c=(a||"").split(o);for(d=0,e=this.length;d<e;d++){g=this[d];if(g.nodeType===1&&g.className)if(a){h=(" "+g.className+" ").replace(n," ");for(i=0,j=c.length;i<j;i++)h=h.replace(" "+c[i]+" "," ");g.className=f.trim(h)}else g.className=""}}return this},toggleClass:function(a,b){var c=typeof a,d=typeof b=="boolean";if(f.isFunction(a))return this.each(function(c){f(this).toggleClass(a.call(this,c,this.className,b),b)});return this.each(function(){if(c==="string"){var e,g=0,h=f(this),i=b,j=a.split(o);while(e=j[g++])i=d?i:!h.hasClass(e),h[i?"addClass":"removeClass"](e)}else if(c==="undefined"||c==="boolean")this.className&&f._data(this,"__className__",this.className),this.className=this.className||a===!1?"":f._data(this,"__className__")||""})},hasClass:function(a){var b=" "+a+" ";for(var c=0,d=this.length;c<d;c++)if(this[c].nodeType===1&&(" "+this[c].className+" ").replace(n," ").indexOf(b)>-1)return!0;return!1},val:function(a){var c,d,e=this[0];if(!arguments.length){if(e){c=f.valHooks[e.nodeName.toLowerCase()]||f.valHooks[e.type];if(c&&"get"in c&&(d=c.get(e,"value"))!==b)return d;d=e.value;return typeof d=="string"?d.replace(p,""):d==null?"":d}return b}var g=f.isFunction(a);return this.each(function(d){var e=f(this),h;if(this.nodeType===1){g?h=a.call(this,d,e.val()):h=a,h==null?h="":typeof h=="number"?h+="":f.isArray(h)&&(h=f.map(h,function(a){return a==null?"":a+""})),c=f.valHooks[this.nodeName.toLowerCase()]||f.valHooks[this.type];if(!c||!("set"in c)||c.set(this,h,"value")===b)this.value=h}})}}),f.extend({valHooks:{option:{get:function(a){var b=a.attributes.value;return!b||b.specified?a.value:a.text}},select:{get:function(a){var b,c=a.selectedIndex,d=[],e=a.options,g=a.type==="select-one";if(c<0)return null;for(var h=g?c:0,i=g?c+1:e.length;h<i;h++){var j=e[h];if(j.selected&&(f.support.optDisabled?!j.disabled:j.getAttribute("disabled")===null)&&(!j.parentNode.disabled||!f.nodeName(j.parentNode,"optgroup"))){b=f(j).val();if(g)return b;d.push(b)}}if(g&&!d.length&&e.length)return f(e[c]).val();return d},set:function(a,b){var c=f.makeArray(b);f(a).find("option").each(function(){this.selected=f.inArray(f(this).val(),c)>=0}),c.length||(a.selectedIndex=-1);return c}}},attrFn:{val:!0,css:!0,html:!0,text:!0,data:!0,width:!0,height:!0,offset:!0},attrFix:{tabindex:"tabIndex"},attr:function(a,c,d,e){var g=a.nodeType;if(!a||g===3||g===8||g===2)return b;if(e&&c in f.attrFn)return f(a)[c](d);if(!("getAttribute"in a))return f.prop(a,c,d);var h,i,j=g!==1||!f.isXMLDoc(a);j&&(c=f.attrFix[c]||c,i=f.attrHooks[c],i||(t.test(c)?i=v:u&&(i=u)));if(d!==b){if(d===null){f.removeAttr(a,c);return b}if(i&&"set"in i&&j&&(h=i.set(a,d,c))!==b)return h;a.setAttribute(c,""+d);return d}if(i&&"get"in i&&j&&(h=i.get(a,c))!==null)return h;h=a.getAttribute(c);return h===null?b:h},removeAttr:function(a,b){var c;a.nodeType===1&&(b=f.attrFix[b]||b,f.attr(a,b,""),a.removeAttribute(b),t.test(b)&&(c=f.propFix[b]||b)in a&&(a[c]=!1))},attrHooks:{type:{set:function(a,b){if(q.test(a.nodeName)&&a.parentNode)f.error("type property can't be changed");else if(!f.support.radioValue&&b==="radio"&&f.nodeName(a,"input")){var c=a.value;a.setAttribute("type",b),c&&(a.value=c);return b}}},value:{get:function(a,b){if(u&&f.nodeName(a,"button"))return u.get(a,b);return b in a?a.value:null},set:function(a,b,c){if(u&&f.nodeName(a,"button"))return u.set(a,b,c);a.value=b}}},propFix:{tabindex:"tabIndex",readonly:"readOnly","for":"htmlFor","class":"className",maxlength:"maxLength",cellspacing:"cellSpacing",cellpadding:"cellPadding",rowspan:"rowSpan",colspan:"colSpan",usemap:"useMap",frameborder:"frameBorder",contenteditable:"contentEditable"},prop:function(a,c,d){var e=a.nodeType;if(!a||e===3||e===8||e===2)return b;var g,h,i=e!==1||!f.isXMLDoc(a);i&&(c=f.propFix[c]||c,h=f.propHooks[c]);return d!==b?h&&"set"in h&&(g=h.set(a,d,c))!==b?g:a[c]=d:h&&"get"in h&&(g=h.get(a,c))!==null?g:a[c]},propHooks:{tabIndex:{get:function(a){var c=a.getAttributeNode("tabindex");return c&&c.specified?parseInt(c.value,10):r.test(a.nodeName)||s.test(a.nodeName)&&a.href?0:b}}}}),f.attrHooks.tabIndex=f.propHooks.tabIndex,v={get:function(a,c){var d;return f.prop(a,c)===!0||(d=a.getAttributeNode(c))&&d.nodeValue!==!1?c.toLowerCase():b},set:function(a,b,c){var d;b===!1?f.removeAttr(a,c):(d=f.propFix[c]||c,d in a&&(a[d]=!0),a.setAttribute(c,c.toLowerCase()));return c}},f.support.getSetAttribute||(u=f.valHooks.button={get:function(a,c){var d;d=a.getAttributeNode(c);return d&&d.nodeValue!==""?d.nodeValue:b},set:function(a,b,d){var e=a.getAttributeNode(d);e||(e=c.createAttribute(d),a.setAttributeNode(e));return e.nodeValue=b+""}},f.each(["width","height"],function(a,b){f.attrHooks[b]=f.extend(f.attrHooks[b],{set:function(a,c){if(c===""){a.setAttribute(b,"auto");return c}}})})),f.support.hrefNormalized||f.each(["href","src","width","height"],function(a,c){f.attrHooks[c]=f.extend(f.attrHooks[c],{get:function(a){var d=a.getAttribute(c,2);return d===null?b:d}})}),f.support.style||(f.attrHooks.style={get:function(a){return a.style.cssText.toLowerCase()||b},set:function(a,b){return a.style.cssText=""+b}}),f.support.optSelected||(f.propHooks.selected=f.extend(f.propHooks.selected,{get:function(a){var b=a.parentNode;b&&(b.selectedIndex,b.parentNode&&b.parentNode.selectedIndex);return null}})),f.support.checkOn||f.each(["radio","checkbox"],function(){f.valHooks[this]={get:function(a){return a.getAttribute("value")===null?"on":a.value}}}),f.each(["radio","checkbox"],function(){f.valHooks[this]=f.extend(f.valHooks[this],{set:function(a,b){if(f.isArray(b))return a.checked=f.inArray(f(a).val(),b)>=0}})});var w=/\.(.*)$/,x=/^(?:textarea|input|select)$/i,y=/\./g,z=/ /g,A=/[^\w\s.|`]/g,B=function(a){return a.replace(A,"\\$&")};f.event={add:function(a,c,d,e){if(a.nodeType!==3&&a.nodeType!==8){if(d===!1)d=C;else if(!d)return;var g,h;d.handler&&(g=d,d=g.handler),d.guid||(d.guid=f.guid++);var i=f._data(a);if(!i)return;var j=i.events,k=i.handle;j||(i.events=j={}),k||(i.handle=k=function(a){return typeof f!="undefined"&&(!a||f.event.triggered!==a.type)?f.event.handle.apply(k.elem,arguments):b}),k.elem=a,c=c.split(" ");var l,m=0,n;while(l=c[m++]){h=g?f.extend({},g):{handler:d,data:e},l.indexOf(".")>-1?(n=l.split("."),l=n.shift(),h.namespace=n.slice(0).sort().join(".")):(n=[],h.namespace=""),h.type=l,h.guid||(h.guid=d.guid);var o=j[l],p=f.event.special[l]||{};if(!o){o=j[l]=[];if(!p.setup||p.setup.call(a,e,n,k)===!1)a.addEventListener?a.addEventListener(l,k,!1):a.attachEvent&&a.attachEvent("on"+l,k)}p.add&&(p.add.call(a,h),h.handler.guid||(h.handler.guid=d.guid)),o.push(h),f.event.global[l]=!0}a=null}},global:{},remove:function(a,c,d,e){if(a.nodeType!==3&&a.nodeType!==8){d===!1&&(d=C);var g,h,i,j,k=0,l,m,n,o,p,q,r,s=f.hasData(a)&&f._data(a),t=s&&s.events;if(!s||!t)return;c&&c.type&&(d=c.handler,c=c.type);if(!c||typeof c=="string"&&c.charAt(0)==="."){c=c||"";for(h in t)f.event.remove(a,h+c);return}c=c.split(" ");while(h=c[k++]){r=h,q=null,l=h.indexOf(".")<0,m=[],l||(m=h.split("."),h=m.shift(),n=new RegExp("(^|\\.)"+f.map(m.slice(0).sort(),B).join("\\.(?:.*\\.)?")+"(\\.|$)")),p=t[h];if(!p)continue;if(!d){for(j=0;j<p.length;j++){q=p[j];if(l||n.test(q.namespace))f.event.remove(a,r,q.handler,j),p.splice(j--,1)}continue}o=f.event.special[h]||{};for(j=e||0;j<p.length;j++){q=p[j];if(d.guid===q.guid){if(l||n.test(q.namespace))e==null&&p.splice(j--,1),o.remove&&o.remove.call(a,q);if(e!=null)break}}if(p.length===0||e!=null&&p.length===1)(!o.teardown||o.teardown.call(a,m)===!1)&&f.removeEvent(a,h,s.handle),g=null,delete
t[h]}if(f.isEmptyObject(t)){var u=s.handle;u&&(u.elem=null),delete s.events,delete s.handle,f.isEmptyObject(s)&&f.removeData(a,b,!0)}}},customEvent:{getData:!0,setData:!0,changeData:!0},trigger:function(c,d,e,g){var h=c.type||c,i=[],j;h.indexOf("!")>=0&&(h=h.slice(0,-1),j=!0),h.indexOf(".")>=0&&(i=h.split("."),h=i.shift(),i.sort());if(!!e&&!f.event.customEvent[h]||!!f.event.global[h]){c=typeof c=="object"?c[f.expando]?c:new f.Event(h,c):new f.Event(h),c.type=h,c.exclusive=j,c.namespace=i.join("."),c.namespace_re=new RegExp("(^|\\.)"+i.join("\\.(?:.*\\.)?")+"(\\.|$)");if(g||!e)c.preventDefault(),c.stopPropagation();if(!e){f.each(f.cache,function(){var a=f.expando,b=this[a];b&&b.events&&b.events[h]&&f.event.trigger(c,d,b.handle.elem)});return}if(e.nodeType===3||e.nodeType===8)return;c.result=b,c.target=e,d=d!=null?f.makeArray(d):[],d.unshift(c);var k=e,l=h.indexOf(":")<0?"on"+h:"";do{var m=f._data(k,"handle");c.currentTarget=k,m&&m.apply(k,d),l&&f.acceptData(k)&&k[l]&&k[l].apply(k,d)===!1&&(c.result=!1,c.preventDefault()),k=k.parentNode||k.ownerDocument||k===c.target.ownerDocument&&a}while(k&&!c.isPropagationStopped());if(!c.isDefaultPrevented()){var n,o=f.event.special[h]||{};if((!o._default||o._default.call(e.ownerDocument,c)===!1)&&(h!=="click"||!f.nodeName(e,"a"))&&f.acceptData(e)){try{l&&e[h]&&(n=e[l],n&&(e[l]=null),f.event.triggered=h,e[h]())}catch(p){}n&&(e[l]=n),f.event.triggered=b}}return c.result}},handle:function(c){c=f.event.fix(c||a.event);var d=((f._data(this,"events")||{})[c.type]||[]).slice(0),e=!c.exclusive&&!c.namespace,g=Array.prototype.slice.call(arguments,0);g[0]=c,c.currentTarget=this;for(var h=0,i=d.length;h<i;h++){var j=d[h];if(e||c.namespace_re.test(j.namespace)){c.handler=j.handler,c.data=j.data,c.handleObj=j;var k=j.handler.apply(this,g);k!==b&&(c.result=k,k===!1&&(c.preventDefault(),c.stopPropagation()));if(c.isImmediatePropagationStopped())break}}return c.result},props:"altKey attrChange attrName bubbles button cancelable charCode clientX clientY ctrlKey currentTarget data detail eventPhase fromElement handler keyCode layerX layerY metaKey newValue offsetX offsetY pageX pageY prevValue relatedNode relatedTarget screenX screenY shiftKey srcElement target toElement view wheelDelta which".split(" "),fix:function(a){if(a[f.expando])return a;var d=a;a=f.Event(d);for(var e=this.props.length,g;e;)g=this.props[--e],a[g]=d[g];a.target||(a.target=a.srcElement||c),a.target.nodeType===3&&(a.target=a.target.parentNode),!a.relatedTarget&&a.fromElement&&(a.relatedTarget=a.fromElement===a.target?a.toElement:a.fromElement);if(a.pageX==null&&a.clientX!=null){var h=a.target.ownerDocument||c,i=h.documentElement,j=h.body;a.pageX=a.clientX+(i&&i.scrollLeft||j&&j.scrollLeft||0)-(i&&i.clientLeft||j&&j.clientLeft||0),a.pageY=a.clientY+(i&&i.scrollTop||j&&j.scrollTop||0)-(i&&i.clientTop||j&&j.clientTop||0)}a.which==null&&(a.charCode!=null||a.keyCode!=null)&&(a.which=a.charCode!=null?a.charCode:a.keyCode),!a.metaKey&&a.ctrlKey&&(a.metaKey=a.ctrlKey),!a.which&&a.button!==b&&(a.which=a.button&1?1:a.button&2?3:a.button&4?2:0);return a},guid:1e8,proxy:f.proxy,special:{ready:{setup:f.bindReady,teardown:f.noop},live:{add:function(a){f.event.add(this,M(a.origType,a.selector),f.extend({},a,{handler:L,guid:a.handler.guid}))},remove:function(a){f.event.remove(this,M(a.origType,a.selector),a)}},beforeunload:{setup:function(a,b,c){f.isWindow(this)&&(this.onbeforeunload=c)},teardown:function(a,b){this.onbeforeunload===b&&(this.onbeforeunload=null)}}}},f.removeEvent=c.removeEventListener?function(a,b,c){a.removeEventListener&&a.removeEventListener(b,c,!1)}:function(a,b,c){a.detachEvent&&a.detachEvent("on"+b,c)},f.Event=function(a,b){if(!this.preventDefault)return new f.Event(a,b);a&&a.type?(this.originalEvent=a,this.type=a.type,this.isDefaultPrevented=a.defaultPrevented||a.returnValue===!1||a.getPreventDefault&&a.getPreventDefault()?D:C):this.type=a,b&&f.extend(this,b),this.timeStamp=f.now(),this[f.expando]=!0},f.Event.prototype={preventDefault:function(){this.isDefaultPrevented=D;var a=this.originalEvent;!a||(a.preventDefault?a.preventDefault():a.returnValue=!1)},stopPropagation:function(){this.isPropagationStopped=D;var a=this.originalEvent;!a||(a.stopPropagation&&a.stopPropagation(),a.cancelBubble=!0)},stopImmediatePropagation:function(){this.isImmediatePropagationStopped=D,this.stopPropagation()},isDefaultPrevented:C,isPropagationStopped:C,isImmediatePropagationStopped:C};var E=function(a){var b=a.relatedTarget,c=!1,d=a.type;a.type=a.data,b!==this&&(b&&(c=f.contains(this,b)),c||(f.event.handle.apply(this,arguments),a.type=d))},F=function(a){a.type=a.data,f.event.handle.apply(this,arguments)};f.each({mouseenter:"mouseover",mouseleave:"mouseout"},function(a,b){f.event.special[a]={setup:function(c){f.event.add(this,b,c&&c.selector?F:E,a)},teardown:function(a){f.event.remove(this,b,a&&a.selector?F:E)}}}),f.support.submitBubbles||(f.event.special.submit={setup:function(a,b){if(!f.nodeName(this,"form"))f.event.add(this,"click.specialSubmit",function(a){var b=a.target,c=f.nodeName(b,"input")||f.nodeName(b,"button")?b.type:"";(c==="submit"||c==="image")&&f(b).closest("form").length&&J("submit",this,arguments)}),f.event.add(this,"keypress.specialSubmit",function(a){var b=a.target,c=f.nodeName(b,"input")||f.nodeName(b,"button")?b.type:"";(c==="text"||c==="password")&&f(b).closest("form").length&&a.keyCode===13&&J("submit",this,arguments)});else return!1},teardown:function(a){f.event.remove(this,".specialSubmit")}});if(!f.support.changeBubbles){var G,H=function(a){var b=f.nodeName(a,"input")?a.type:"",c=a.value;b==="radio"||b==="checkbox"?c=a.checked:b==="select-multiple"?c=a.selectedIndex>-1?f.map(a.options,function(a){return a.selected}).join("-"):"":f.nodeName(a,"select")&&(c=a.selectedIndex);return c},I=function(c){var d=c.target,e,g;if(!!x.test(d.nodeName)&&!d.readOnly){e=f._data(d,"_change_data"),g=H(d),(c.type!=="focusout"||d.type!=="radio")&&f._data(d,"_change_data",g);if(e===b||g===e)return;if(e!=null||g)c.type="change",c.liveFired=b,f.event.trigger(c,arguments[1],d)}};f.event.special.change={filters:{focusout:I,beforedeactivate:I,click:function(a){var b=a.target,c=f.nodeName(b,"input")?b.type:"";(c==="radio"||c==="checkbox"||f.nodeName(b,"select"))&&I.call(this,a)},keydown:function(a){var b=a.target,c=f.nodeName(b,"input")?b.type:"";(a.keyCode===13&&!f.nodeName(b,"textarea")||a.keyCode===32&&(c==="checkbox"||c==="radio")||c==="select-multiple")&&I.call(this,a)},beforeactivate:function(a){var b=a.target;f._data(b,"_change_data",H(b))}},setup:function(a,b){if(this.type==="file")return!1;for(var c in G)f.event.add(this,c+".specialChange",G[c]);return x.test(this.nodeName)},teardown:function(a){f.event.remove(this,".specialChange");return x.test(this.nodeName)}},G=f.event.special.change.filters,G.focus=G.beforeactivate}f.support.focusinBubbles||f.each({focus:"focusin",blur:"focusout"},function(a,b){function e(a){var c=f.event.fix(a);c.type=b,c.originalEvent={},f.event.trigger(c,null,c.target),c.isDefaultPrevented()&&a.preventDefault()}var d=0;f.event.special[b]={setup:function(){d++===0&&c.addEventListener(a,e,!0)},teardown:function(){--d===0&&c.removeEventListener(a,e,!0)}}}),f.each(["bind","one"],function(a,c){f.fn[c]=function(a,d,e){var g;if(typeof a=="object"){for(var h in a)this[c](h,d,a[h],e);return this}if(arguments.length===2||d===!1)e=d,d=b;c==="one"?(g=function(a){f(this).unbind(a,g);return e.apply(this,arguments)},g.guid=e.guid||f.guid++):g=e;if(a==="unload"&&c!=="one")this.one(a,d,e);else for(var i=0,j=this.length;i<j;i++)f.event.add(this[i],a,g,d);return this}}),f.fn.extend({unbind:function(a,b){if(typeof a=="object"&&!a.preventDefault)for(var c in a)this.unbind(c,a[c]);else for(var d=0,e=this.length;d<e;d++)f.event.remove(this[d],a,b);return this},delegate:function(a,b,c,d){return this.live(b,c,d,a)},undelegate:function(a,b,c){return arguments.length===0?this.unbind("live"):this.die(b,null,c,a)},trigger:function(a,b){return this.each(function(){f.event.trigger(a,b,this)})},triggerHandler:function(a,b){if(this[0])return f.event.trigger(a,b,this[0],!0)},toggle:function(a){var b=arguments,c=a.guid||f.guid++,d=0,e=function(c){var e=(f.data(this,"lastToggle"+a.guid)||0)%d;f.data(this,"lastToggle"+a.guid,e+1),c.preventDefault();return b[e].apply(this,arguments)||!1};e.guid=c;while(d<b.length)b[d++].guid=c;return this.click(e)},hover:function(a,b){return this.mouseenter(a).mouseleave(b||a)}});var K={focus:"focusin",blur:"focusout",mouseenter:"mouseover",mouseleave:"mouseout"};f.each(["live","die"],function(a,c){f.fn[c]=function(a,d,e,g){var h,i=0,j,k,l,m=g||this.selector,n=g?this:f(this.context);if(typeof a=="object"&&!a.preventDefault){for(var o in a)n[c](o,d,a[o],m);return this}if(c==="die"&&!a&&g&&g.charAt(0)==="."){n.unbind(g);return this}if(d===!1||f.isFunction(d))e=d||C,d=b;a=(a||"").split(" ");while((h=a[i++])!=null){j=w.exec(h),k="",j&&(k=j[0],h=h.replace(w,""));if(h==="hover"){a.push("mouseenter"+k,"mouseleave"+k);continue}l=h,K[h]?(a.push(K[h]+k),h=h+k):h=(K[h]||h)+k;if(c==="live")for(var p=0,q=n.length;p<q;p++)f.event.add(n[p],"live."+M(h,m),{data:d,selector:m,handler:e,origType:h,origHandler:e,preType:l});else n.unbind("live."+M(h,m),e)}return this}}),f.each("blur focus focusin focusout load resize scroll unload click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select submit keydown keypress keyup error".split(" "),function(a,b){f.fn[b]=function(a,c){c==null&&(c=a,a=null);return arguments.length>0?this.bind(b,a,c):this.trigger(b)},f.attrFn&&(f.attrFn[b]=!0)}),function(){function u(a,b,c,d,e,f){for(var g=0,h=d.length;g<h;g++){var i=d[g];if(i){var j=!1;i=i[a];while(i){if(i.sizcache===c){j=d[i.sizset];break}if(i.nodeType===1){f||(i.sizcache=c,i.sizset=g);if(typeof b!="string"){if(i===b){j=!0;break}}else if(k.filter(b,[i]).length>0){j=i;break}}i=i[a]}d[g]=j}}}function t(a,b,c,d,e,f){for(var g=0,h=d.length;g<h;g++){var i=d[g];if(i){var j=!1;i=i[a];while(i){if(i.sizcache===c){j=d[i.sizset];break}i.nodeType===1&&!f&&(i.sizcache=c,i.sizset=g);if(i.nodeName.toLowerCase()===b){j=i;break}i=i[a]}d[g]=j}}}var a=/((?:\((?:\([^()]+\)|[^()]+)+\)|\[(?:\[[^\[\]]*\]|['"][^'"]*['"]|[^\[\]'"]+)+\]|\\.|[^ >+~,(\[\\]+)+|[>+~])(\s*,\s*)?((?:.|\r|\n)*)/g,d=0,e=Object.prototype.toString,g=!1,h=!0,i=/\\/g,j=/\W/;[0,0].sort(function(){h=!1;return 0});var k=function(b,d,f,g){f=f||[],d=d||c;var h=d;if(d.nodeType!==1&&d.nodeType!==9)return[];if(!b||typeof b!="string")return f;var i,j,n,o,q,r,s,t,u=!0,w=k.isXML(d),x=[],y=b;do{a.exec(""),i=a.exec(y);if(i){y=i[3],x.push(i[1]);if(i[2]){o=i[3];break}}}while(i);if(x.length>1&&m.exec(b))if(x.length===2&&l.relative[x[0]])j=v(x[0]+x[1],d);else{j=l.relative[x[0]]?[d]:k(x.shift(),d);while(x.length)b=x.shift(),l.relative[b]&&(b+=x.shift()),j=v(b,j)}else{!g&&x.length>1&&d.nodeType===9&&!w&&l.match.ID.test(x[0])&&!l.match.ID.test(x[x.length-1])&&(q=k.find(x.shift(),d,w),d=q.expr?k.filter(q.expr,q.set)[0]:q.set[0]);if(d){q=g?{expr:x.pop(),set:p(g)}:k.find(x.pop(),x.length===1&&(x[0]==="~"||x[0]==="+")&&d.parentNode?d.parentNode:d,w),j=q.expr?k.filter(q.expr,q.set):q.set,x.length>0?n=p(j):u=!1;while(x.length)r=x.pop(),s=r,l.relative[r]?s=x.pop():r="",s==null&&(s=d),l.relative[r](n,s,w)}else n=x=[]}n||(n=j),n||k.error(r||b);if(e.call(n)==="[object Array]")if(!u)f.push.apply(f,n);else if(d&&d.nodeType===1)for(t=0;n[t]!=null;t++)n[t]&&(n[t]===!0||n[t].nodeType===1&&k.contains(d,n[t]))&&f.push(j[t]);else for(t=0;n[t]!=null;t++)n[t]&&n[t].nodeType===1&&f.push(j[t]);else p(n,f);o&&(k(o,h,f,g),k.uniqueSort(f));return f};k.uniqueSort=function(a){if(r){g=h,a.sort(r);if(g)for(var b=1;b<a.length;b++)a[b]===a[b-1]&&a.splice(b--,1)}return a},k.matches=function(a,b){return k(a,null,null,b)},k.matchesSelector=function(a,b){return k(b,null,null,[a]).length>0},k.find=function(a,b,c){var d;if(!a)return[];for(var e=0,f=l.order.length;e<f;e++){var g,h=l.order[e];if(g=l.leftMatch[h].exec(a)){var j=g[1];g.splice(1,1);if(j.substr(j.length-1)!=="\\"){g[1]=(g[1]||"").replace(i,""),d=l.find[h](g,b,c);if(d!=null){a=a.replace(l.match[h],"");break}}}}d||(d=typeof b.getElementsByTagName!="undefined"?b.getElementsByTagName("*"):[]);return{set:d,expr:a}},k.filter=function(a,c,d,e){var f,g,h=a,i=[],j=c,m=c&&c[0]&&k.isXML(c[0]);while(a&&c.length){for(var n in l.filter)if((f=l.leftMatch[n].exec(a))!=null&&f[2]){var o,p,q=l.filter[n],r=f[1];g=!1,f.splice(1,1);if(r.substr(r.length-1)==="\\")continue;j===i&&(i=[]);if(l.preFilter[n]){f=l.preFilter[n](f,j,d,i,e,m);if(!f)g=o=!0;else if(f===!0)continue}if(f)for(var s=0;(p=j[s])!=null;s++)if(p){o=q(p,f,s,j);var t=e^!!o;d&&o!=null?t?g=!0:j[s]=!1:t&&(i.push(p),g=!0)}if(o!==b){d||(j=i),a=a.replace(l.match[n],"");if(!g)return[];break}}if(a===h)if(g==null)k.error(a);else break;h=a}return j},k.error=function(a){throw"Syntax error, unrecognized expression: "+a};var l=k.selectors={order:["ID","NAME","TAG"],match:{ID:/#((?:[\w\u00c0-\uFFFF\-]|\\.)+)/,CLASS:/\.((?:[\w\u00c0-\uFFFF\-]|\\.)+)/,NAME:/\[name=['"]*((?:[\w\u00c0-\uFFFF\-]|\\.)+)['"]*\]/,ATTR:/\[\s*((?:[\w\u00c0-\uFFFF\-]|\\.)+)\s*(?:(\S?=)\s*(?:(['"])(.*?)\3|(#?(?:[\w\u00c0-\uFFFF\-]|\\.)*)|)|)\s*\]/,TAG:/^((?:[\w\u00c0-\uFFFF\*\-]|\\.)+)/,CHILD:/:(only|nth|last|first)-child(?:\(\s*(even|odd|(?:[+\-]?\d+|(?:[+\-]?\d*)?n\s*(?:[+\-]\s*\d+)?))\s*\))?/,POS:/:(nth|eq|gt|lt|first|last|even|odd)(?:\((\d*)\))?(?=[^\-]|$)/,PSEUDO:/:((?:[\w\u00c0-\uFFFF\-]|\\.)+)(?:\((['"]?)((?:\([^\)]+\)|[^\(\)]*)+)\2\))?/},leftMatch:{},attrMap:{"class":"className","for":"htmlFor"},attrHandle:{href:function(a){return a.getAttribute("href")},type:function(a){return a.getAttribute("type")}},relative:{"+":function(a,b){var c=typeof b=="string",d=c&&!j.test(b),e=c&&!d;d&&(b=b.toLowerCase());for(var f=0,g=a.length,h;f<g;f++)if(h=a[f]){while((h=h.previousSibling)&&h.nodeType!==1);a[f]=e||h&&h.nodeName.toLowerCase()===b?h||!1:h===b}e&&k.filter(b,a,!0)},">":function(a,b){var c,d=typeof b=="string",e=0,f=a.length;if(d&&!j.test(b)){b=b.toLowerCase();for(;e<f;e++){c=a[e];if(c){var g=c.parentNode;a[e]=g.nodeName.toLowerCase()===b?g:!1}}}else{for(;e<f;e++)c=a[e],c&&(a[e]=d?c.parentNode:c.parentNode===b);d&&k.filter(b,a,!0)}},"":function(a,b,c){var e,f=d++,g=u;typeof b=="string"&&!j.test(b)&&(b=b.toLowerCase(),e=b,g=t),g("parentNode",b,f,a,e,c)},"~":function(a,b,c){var e,f=d++,g=u;typeof b=="string"&&!j.test(b)&&(b=b.toLowerCase(),e=b,g=t),g("previousSibling",b,f,a,e,c)}},find:{ID:function(a,b,c){if(typeof b.getElementById!="undefined"&&!c){var d=b.getElementById(a[1]);return d&&d.parentNode?[d]:[]}},NAME:function(a,b){if(typeof b.getElementsByName!="undefined"){var c=[],d=b.getElementsByName(a[1]);for(var e=0,f=d.length;e<f;e++)d[e].getAttribute("name")===a[1]&&c.push(d[e]);return c.length===0?null:c}},TAG:function(a,b){if(typeof b.getElementsByTagName!="undefined")return b.getElementsByTagName(a[1])}},preFilter:{CLASS:function(a,b,c,d,e,f){a=" "+a[1].replace(i,"")+" ";if(f)return a;for(var g=0,h;(h=b[g])!=null;g++)h&&(e^(h.className&&(" "+h.className+" ").replace(/[\t\n\r]/g," ").indexOf(a)>=0)?c||d.push(h):c&&(b[g]=!1));return!1},ID:function(a){return a[1].replace(i,"")},TAG:function(a,b){return a[1].replace(i,"").toLowerCase()},CHILD:function(a){if(a[1]==="nth"){a[2]||k.error(a[0]),a[2]=a[2].replace(/^\+|\s*/g,"");var b=/(-?)(\d*)(?:n([+\-]?\d*))?/.exec(a[2]==="even"&&"2n"||a[2]==="odd"&&"2n+1"||!/\D/.test(a[2])&&"0n+"+a[2]||a[2]);a[2]=b[1]+(b[2]||1)-0,a[3]=b[3]-0}else a[2]&&k.error(a[0]);a[0]=d++;return a},ATTR:function(a,b,c,d,e,f){var g=a[1]=a[1].replace(i,"");!f&&l.attrMap[g]&&(a[1]=l.attrMap[g]),a[4]=(a[4]||a[5]||"").replace(i,""),a[2]==="~="&&(a[4]=" "+a[4]+" ");return a},PSEUDO:function(b,c,d,e,f){if(b[1]==="not")if((a.exec(b[3])||"").length>1||/^\w/.test(b[3]))b[3]=k(b[3],null,null,c);else{var g=k.filter(b[3],c,d,!0^f);d||e.push.apply(e,g);return!1}else if(l.match.POS.test(b[0])||l.match.CHILD.test(b[0]))return!0;return b},POS:function(a){a.unshift(!0);return a}},filters:{enabled:function(a){return a.disabled===!1&&a.type!=="hidden"},disabled:function(a){return a.disabled===!0},checked:function(a){return a.checked===!0},selected:function(a){a.parentNode&&a.parentNode.selectedIndex;return a.selected===!0},parent:function(a){return!!a.firstChild},empty:function(a){return!a.firstChild},has:function(a,b,c){return!!k(c[3],a).length},header:function(a){return/h\d/i.test(a.nodeName)},text:function(a){var b=a.getAttribute("type"),c=a.type;return a.nodeName.toLowerCase()==="input"&&"text"===c&&(b===c||b===null)},radio:function(a){return a.nodeName.toLowerCase()==="input"&&"radio"===a.type},checkbox:function(a){return a.nodeName.toLowerCase()==="input"&&"checkbox"===a.type},file:function(a){return a.nodeName.toLowerCase()==="input"&&"file"===a.type},password:function(a){return a.nodeName.toLowerCase()==="input"&&"password"===a.type},submit:function(a){var b=a.nodeName.toLowerCase();return(b==="input"||b==="button")&&"submit"===a.type},image:function(a){return a.nodeName.toLowerCase()==="input"&&"image"===a.type},reset:function(a){var b=a.nodeName.toLowerCase();return(b==="input"||b==="button")&&"reset"===a.type},button:function(a){var b=a.nodeName.toLowerCase();return b==="input"&&"button"===a.type||b==="button"},input:function(a){return/input|select|textarea|button/i.test(a.nodeName)},focus:function(a){return a===a.ownerDocument.activeElement}},setFilters:{first:function(a,b){return b===0},last:function(a,b,c,d){return b===d.length-1},even:function(a,b){return b%2===0},odd:function(a,b){return b%2===1},lt:function(a,b,c){return b<c[3]-0},gt:function(a,b,c){return b>c[3]-0},nth:function(a,b,c){return c[3]-0===b},eq:function(a,b,c){return c[3]-0===b}},filter:{PSEUDO:function(a,b,c,d){var e=b[1],f=l.filters[e];if(f)return f(a,c,b,d);if(e==="contains")return(a.textContent||a.innerText||k.getText([a])||"").indexOf(b[3])>=0;if(e==="not"){var g=b[3];for(var h=0,i=g.length;h<i;h++)if(g[h]===a)return!1;return!0}k.error(e)},CHILD:function(a,b){var c=b[1],d=a;switch(c){case"only":case"first":while(d=d.previousSibling)if(d.nodeType===1)return!1;if(c==="first")return!0;d=a;case"last":while(d=d.nextSibling)if(d.nodeType===1)return!1;return!0;case"nth":var e=b[2],f=b[3];if(e===1&&f===0)return!0;var g=b[0],h=a.parentNode;if(h&&(h.sizcache!==g||!a.nodeIndex)){var i=0;for(d=h.firstChild;d;d=d.nextSibling)d.nodeType===1&&(d.nodeIndex=++i);h.sizcache=g}var j=a.nodeIndex-f;return e===0?j===0:j%e===0&&j/e>=0}},ID:function(a,b){return a.nodeType===1&&a.getAttribute("id")===b},TAG:function(a,b){return b==="*"&&a.nodeType===1||a.nodeName.toLowerCase()===b},CLASS:function(a,b){return(" "+(a.className||a.getAttribute("class"))+" ").indexOf(b)>-1},ATTR:function(a,b){var c=b[1],d=l.attrHandle[c]?l.attrHandle[c](a):a[c]!=null?a[c]:a.getAttribute(c),e=d+"",f=b[2],g=b[4];return d==null?f==="!=":f==="="?e===g:f==="*="?e.indexOf(g)>=0:f==="~="?(" "+e+" ").indexOf(g)>=0:g?f==="!="?e!==g:f==="^="?e.indexOf(g)===0:f==="$="?e.substr(e.length-g.length)===g:f==="|="?e===g||e.substr(0,g.length+1)===g+"-":!1:e&&d!==!1},POS:function(a,b,c,d){var e=b[2],f=l.setFilters[e];if(f)return f(a,c,b,d)}}},m=l.match.POS,n=function(a,b){return"\\"+(b-0+1)};for(var o in l.match)l.match[o]=new RegExp(l.match[o].source+/(?![^\[]*\])(?![^\(]*\))/.source),l.leftMatch[o]=new RegExp(/(^(?:.|\r|\n)*?)/.source+l.match[o].source.replace(/\\(\d+)/g,n));var p=function(a,b){a=Array.prototype.slice.call(a,0);if(b){b.push.apply(b,a);return b}return a};try{Array.prototype.slice.call(c.documentElement.childNodes,0)[0].nodeType}catch(q){p=function(a,b){var c=0,d=b||[];if(e.call(a)==="[object Array]")Array.prototype.push.apply(d,a);else if(typeof a.length=="number")for(var f=a.length;c<f;c++)d.push(a[c]);else for(;a[c];c++)d.push(a[c]);return d}}var r,s;c.documentElement.compareDocumentPosition?r=function(a,b){if(a===b){g=!0;return 0}if(!a.compareDocumentPosition||!b.compareDocumentPosition)return a.compareDocumentPosition?-1:1;return a.compareDocumentPosition(b)&4?-1:1}:(r=function(a,b){if(a===b){g=!0;return 0}if(a.sourceIndex&&b.sourceIndex)return a.sourceIndex-b.sourceIndex;var c,d,e=[],f=[],h=a.parentNode,i=b.parentNode,j=h;if(h===i)return s(a,b);if(!h)return-1;if(!i)return 1;while(j)e.unshift(j),j=j.parentNode;j=i;while(j)f.unshift(j),j=j.parentNode;c=e.length,d=f.length;for(var k=0;k<c&&k<d;k++)if(e[k]!==f[k])return s(e[k],f[k]);return k===c?s(a,f[k],-1):s(e[k],b,1)},s=function(a,b,c){if(a===b)return c;var d=a.nextSibling;while(d){if(d===b)return-1;d=d.nextSibling}return 1}),k.getText=function(a){var b="",c;for(var d=0;a[d];d++)c=a[d],c.nodeType===3||c.nodeType===4?b+=c.nodeValue:c.nodeType!==8&&(b+=k.getText(c.childNodes));return b},function(){var a=c.createElement("div"),d="script"+(new Date).getTime(),e=c.documentElement;a.innerHTML="<a name='"+d+"'/>",e.insertBefore(a,e.firstChild),c.getElementById(d)&&(l.find.ID=function(a,c,d){if(typeof c.getElementById!="undefined"&&!d){var e=c.getElementById(a[1]);return e?e.id===a[1]||typeof e.getAttributeNode!="undefined"&&e.getAttributeNode("id").nodeValue===a[1]?[e]:b:[]}},l.filter.ID=function(a,b){var c=typeof a.getAttributeNode!="undefined"&&a.getAttributeNode("id");return a.nodeType===1&&c&&c.nodeValue===b}),e.removeChild(a),e=a=null}(),function(){var a=c.createElement("div");a.appendChild(c.createComment("")),a.getElementsByTagName("*").length>0&&(l.find.TAG=function(a,b){var c=b.getElementsByTagName(a[1]);if(a[1]==="*"){var d=[];for(var e=0;c[e];e++)c[e].nodeType===1&&d.push(c[e]);c=d}return c}),a.innerHTML="<a href='#'></a>",a.firstChild&&typeof a.firstChild.getAttribute!="undefined"&&a.firstChild.getAttribute("href")!=="#"&&(l.attrHandle.href=function(a){return a.getAttribute("href",2)}),a=null}(),c.querySelectorAll&&function(){var a=k,b=c.createElement("div"),d="__sizzle__";b.innerHTML="<p class='TEST'></p>";if(!b.querySelectorAll||b.querySelectorAll(".TEST").length!==0){k=function(b,e,f,g){e=e||c;if(!g&&!k.isXML(e)){var h=/^(\w+$)|^\.([\w\-]+$)|^#([\w\-]+$)/.exec(b);if(h&&(e.nodeType===1||e.nodeType===9)){if(h[1])return p(e.getElementsByTagName(b),f);if(h[2]&&l.find.CLASS&&e.getElementsByClassName)return p(e.getElementsByClassName(h[2]),f)}if(e.nodeType===9){if(b==="body"&&e.body)return p([e.body],f);if(h&&h[3]){var i=e.getElementById(h[3]);if(!i||!i.parentNode)return p([],f);if(i.id===h[3])return p([i],f)}try{return p(e.querySelectorAll(b),f)}catch(j){}}else if(e.nodeType===1&&e.nodeName.toLowerCase()!=="object"){var m=e,n=e.getAttribute("id"),o=n||d,q=e.parentNode,r=/^\s*[+~]/.test(b);n?o=o.replace(/'/g,"\\$&"):e.setAttribute("id",o),r&&q&&(e=e.parentNode);try{if(!r||q)return p(e.querySelectorAll("[id='"+o+"'] "+b),f)}catch(s){}finally{n||m.removeAttribute("id")}}}return a(b,e,f,g)};for(var e in a)k[e]=a[e];b=null}}(),function(){var a=c.documentElement,b=a.matchesSelector||a.mozMatchesSelector||a.webkitMatchesSelector||a.msMatchesSelector;if(b){var d=!b.call(c.createElement("div"),"div"),e=!1;try{b.call(c.documentElement,"[test!='']:sizzle")}catch(f){e=!0}k.matchesSelector=function(a,c){c=c.replace(/\=\s*([^'"\]]*)\s*\]/g,"='$1']");if(!k.isXML(a))try{if(e||!l.match.PSEUDO.test(c)&&!/!=/.test(c)){var f=b.call(a,c);if(f||!d||a.document&&a.document.nodeType!==11)return f}}catch(g){}return k(c,null,null,[a]).length>0}}}(),function(){var a=c.createElement("div");a.innerHTML="<div class='test e'></div><div class='test'></div>";if(!!a.getElementsByClassName&&a.getElementsByClassName("e").length!==0){a.lastChild.className="e";if(a.getElementsByClassName("e").length===1)return;l.order.splice(1,0,"CLASS"),l.find.CLASS=function(a,b,c){if(typeof b.getElementsByClassName!="undefined"&&!c)return b.getElementsByClassName(a[1])},a=null}}(),c.documentElement.contains?k.contains=function(a,b){return a!==b&&(a.contains?a.contains(b):!0)}:c.documentElement.compareDocumentPosition?k.contains=function(a,b){return!!(a.compareDocumentPosition(b)&16)}:k.contains=function(){return!1},k.isXML=function(a){var b=(a?a.ownerDocument||a:0).documentElement;return b?b.nodeName!=="HTML":!1};var v=function(a,b){var c,d=[],e="",f=b.nodeType?[b]:b;while(c=l.match.PSEUDO.exec(a))e+=c[0],a=a.replace(l.match.PSEUDO,"");a=l.relative[a]?a+"*":a;for(var g=0,h=f.length;g<h;g++)k(a,f[g],d);return k.filter(e,d)};f.find=k,f.expr=k.selectors,f.expr[":"]=f.expr.filters,f.unique=k.uniqueSort,f.text=k.getText,f.isXMLDoc=k.isXML,f.contains=k.contains}();var N=/Until$/,O=/^(?:parents|prevUntil|prevAll)/,P=/,/,Q=/^.[^:#\[\.,]*$/,R=Array.prototype.slice,S=f.expr.match.POS,T={children:!0,contents:!0,next:!0,prev:!0};f.fn.extend({find:function(a){var b=this,c,d;if(typeof a!="string")return f(a).filter(function(){for(c=0,d=b.length;c<d;c++)if(f.contains(b[c],this))return!0});var e=this.pushStack("","find",a),g,h,i;for(c=0,d=this.length;c<d;c++){g=e.length,f.find(a,this[c],e);if(c>0)for(h=g;h<e.length;h++)for(i=0;i<g;i++)if(e[i]===e[h]){e.splice(h--,1);break}}return e},has:function(a){var b=f(a);return this.filter(function(){for(var a=0,c=b.length;a<c;a++)if(f.contains(this,b[a]))return!0})},not:function(a){return this.pushStack(V(this,a,!1),"not",a)},filter:function(a){return this.pushStack(V(this,a,!0),"filter",a)},is:function(a){return!!a&&(typeof a=="string"?f.filter(a,this).length>0:this.filter(a).length>0)},closest:function(a,b){var c=[],d,e,g=this[0];if(f.isArray(a)){var h,i,j={},k=1;if(g&&a.length){for(d=0,e=a.length;d<e;d++)i=a[d],j[i]||(j[i]=S.test(i)?f(i,b||this.context):i);while(g&&g.ownerDocument&&g!==b){for(i in j)h=j[i],(h.jquery?h.index(g)>-1:f(g).is(h))&&c.push({selector:i,elem:g,level:k});g=g.parentNode,k++}}return c}var l=S.test(a)||typeof a!="string"?f(a,b||this.context):0;for(d=0,e=this.length;d<e;d++){g=this[d];while(g){if(l?l.index(g)>-1:f.find.matchesSelector(g,a)){c.push(g);break}g=g.parentNode;if(!g||!g.ownerDocument||g===b||g.nodeType===11)break}}c=c.length>1?f.unique(c):c;return this.pushStack(c,"closest",a)},index:function(a){if(!a)return this[0]&&this[0].parentNode?this.prevAll().length:-1;if(typeof a=="string")return f.inArray(this[0],f(a));return f.inArray(a.jquery?a[0]:a,this)},add:function(a,b){var c=typeof a=="string"?f(a,b):f.makeArray(a&&a.nodeType?[a]:a),d=f.merge(this.get(),c);return this.pushStack(U(c[0])||U(d[0])?d:f.unique(d))},andSelf:function(){return this.add(this.prevObject)}}),f.each({parent:function(a){var b=a.parentNode;return b&&b.nodeType!==11?b:null},parents:function(a){return f.dir(a,"parentNode")},parentsUntil:function(a,b,c){return f.dir(a,"parentNode",c)},next:function(a){return f.nth(a,2,"nextSibling")},prev:function(a){return f.nth(a,2,"previousSibling")},nextAll:function(a){return f.dir(a,"nextSibling")},prevAll:function(a){return f.dir(a,"previousSibling")},nextUntil:function(a,b,c){return f.dir(a,"nextSibling",c)},prevUntil:function(a,b,c){return f.dir(a,"previousSibling",c)},siblings:function(a){return f.sibling(a.parentNode.firstChild,a)},children:function(a){return f.sibling(a.firstChild)},contents:function(a){return f.nodeName(a,"iframe")?a.contentDocument||a.contentWindow.document:f.makeArray(a.childNodes)}},function(a,b){f.fn[a]=function(c,d){var e=f.map(this,b,c),g=R.call(arguments);N.test(a)||(d=c),d&&typeof d=="string"&&(e=f.filter(d,e)),e=this.length>1&&!T[a]?f.unique(e):e,(this.length>1||P.test(d))&&O.test(a)&&(e=e.reverse());return this.pushStack(e,a,g.join(","))}}),f.extend({filter:function(a,b,c){c&&(a=":not("+a+")");return b.length===1?f.find.matchesSelector(b[0],a)?[b[0]]:[]:f.find.matches(a,b)},dir:function(a,c,d){var e=[],g=a[c];while(g&&g.nodeType!==9&&(d===b||g.nodeType!==1||!f(g).is(d)))g.nodeType===1&&e.push(g),g=g[c];return e},nth:function(a,b,c,d){b=b||1;var e=0;for(;a;a=a[c])if(a.nodeType===1&&++e===b)break;return a},sibling:function(a,b){var c=[];for(;a;a=a.nextSibling)a.nodeType===1&&a!==b&&c.push(a);return c}});var W=/ jQuery\d+="(?:\d+|null)"/g,X=/^\s+/,Y=/<(?!area|br|col|embed|hr|img|input|link|meta|param)(([\w:]+)[^>]*)\/>/ig,Z=/<([\w:]+)/,$=/<tbody/i,_=/<|&#?\w+;/,ba=/<(?:script|object|embed|option|style)/i,bb=/checked\s*(?:[^=]|=\s*.checked.)/i,bc=/\/(java|ecma)script/i,bd=/^\s*<!(?:\[CDATA\[|\-\-)/,be={option:[1,"<select multiple='multiple'>","</select>"],legend:[1,"<fieldset>","</fieldset>"],thead:[1,"<table>","</table>"],tr:[2,"<table><tbody>","</tbody></table>"],td:[3,"<table><tbody><tr>","</tr></tbody></table>"],col:[2,"<table><tbody></tbody><colgroup>","</colgroup></table>"],area:[1,"<map>","</map>"],_default:[0,"",""]};be.optgroup=be.option,be.tbody=be.tfoot=be.colgroup=be.caption=be.thead,be.th=be.td,f.support.htmlSerialize||(be._default=[1,"div<div>","</div>"]),f.fn.extend({text:function(a){if(f.isFunction(a))return this.each(function(b){var c=f(this);c.text(a.call(this,b,c.text()))});if(typeof a!="object"&&a!==b)return this.empty().append((this[0]&&this[0].ownerDocument||c).createTextNode(a));return f.text(this)},wrapAll:function(a){if(f.isFunction(a))return this.each(function(b){f(this).wrapAll(a.call(this,b))});if(this[0]){var b=f(a,this[0].ownerDocument).eq(0).clone(!0);this[0].parentNode&&b.insertBefore(this[0]),b.map(function(){var a=this;while(a.firstChild&&a.firstChild.nodeType===1)a=a.firstChild;return a}).append(this)}return this},wrapInner:function(a){if(f.isFunction(a))return this.each(function(b){f(this).wrapInner(a.call(this,b))});return this.each(function(){var b=f(this),c=b.contents();c.length?c.wrapAll(a):b.append(a)})},wrap:function(a){return this.each(function(){f(this).wrapAll(a)})},unwrap:function(){return this.parent().each(function(){f.nodeName(this,"body")||f(this).replaceWith(this.childNodes)}).end()},append:function(){return this.domManip(arguments,!0,function(a){this.nodeType===1&&this.appendChild(a)})},prepend:function(){return this.domManip(arguments,!0,function(a){this.nodeType===1&&this.insertBefore(a,this.firstChild)})},before:function(){if(this[0]&&this[0].parentNode)return this.domManip(arguments,!1,function(a){this.parentNode.insertBefore(a,this)});if(arguments.length){var a=f(arguments[0]);a.push.apply(a,this.toArray());return this.pushStack(a,"before",arguments)}},after:function(){if(this[0]&&this[0].parentNode)return this.domManip(arguments,!1,function(a){this.parentNode.insertBefore(a,this.nextSibling)});if(arguments.length){var a=this.pushStack(this,"after",arguments);a.push.apply(a,f(arguments[0]).toArray());return a}},remove:function(a,b){for(var c=0,d;(d=this[c])!=null;c++)if(!a||f.filter(a,[d]).length)!b&&d.nodeType===1&&(f.cleanData(d.getElementsByTagName("*")),f.cleanData([d])),d.parentNode&&d.parentNode.removeChild(d);return this},empty:function(){for(var a=0,b;(b=this[a])!=null;a++){b.nodeType===1&&f.cleanData(b.getElementsByTagName("*"));while(b.firstChild)b.removeChild(b.firstChild)}return this},clone:function(a,b){a=a==null?!1:a,b=b==null?a:b;return this.map(function(){return f.clone(this,a,b)})},html:function(a){if(a===b)return this[0]&&this[0].nodeType===1?this[0].innerHTML.replace(W,""):null;if(typeof a=="string"&&!ba.test(a)&&(f.support.leadingWhitespace||!X.test(a))&&!be[(Z.exec(a)||["",""])[1].toLowerCase()]){a=a.replace(Y,"<$1></$2>");try{for(var c=0,d=this.length;c<d;c++)this[c].nodeType===1&&(f.cleanData(this[c].getElementsByTagName("*")),this[c].innerHTML=a)}catch(e){this.empty().append(a)}}else f.isFunction(a)?this.each(function(b){var c=f(this);c.html(a.call(this,b,c.html()))}):this.empty().append(a);return this},replaceWith:function(a){if(this[0]&&this[0].parentNode){if(f.isFunction(a))return this.each(function(b){var c=f(this),d=c.html();c.replaceWith(a.call(this,b,d))});typeof a!="string"&&(a=f(a).detach());return this.each(function(){var b=this.nextSibling,c=this.parentNode;f(this).remove(),b?f(b).before(a):f(c).append(a)})}return this.length?this.pushStack(f(f.isFunction(a)?a():a),"replaceWith",a):this},detach:function(a){return this.remove(a,!0)},domManip:function(a,c,d){var e,g,h,i,j=a[0],k=[];if(!f.support.checkClone&&arguments.length===3&&typeof j=="string"&&bb.test(j))return this.each(function(){f(this).domManip(a,c,d,!0)});if(f.isFunction(j))return this.each(function(e){var g=f(this);a[0]=j.call(this,e,c?g.html():b),g.domManip(a,c,d)});if(this[0]){i=j&&j.parentNode,f.support.parentNode&&i&&i.nodeType===11&&i.childNodes.length===this.length?e={fragment:i}:e=f.buildFragment(a,this,k),h=e.fragment,h.childNodes.length===1?g=h=h.firstChild:g=h.firstChild;if(g){c=c&&f.nodeName(g,"tr");for(var l=0,m=this.length,n=m-1;l<m;l++)d.call(c?bf(this[l],g):this[l],e.cacheable||m>1&&l<n?f.clone(h,!0,!0):h)}k.length&&f.each(k,bl)}return this}}),f.buildFragment=function(a,b,d){var e,g,h,i;b&&b[0]&&(i=b[0].ownerDocument||b[0]),i.createDocumentFragment||(i=c),a.length===1&&typeof a[0]=="string"&&a[0].length<512&&i===c&&a[0].charAt(0)==="<"&&!ba.test(a[0])&&(f.support.checkClone||!bb.test(a[0]))&&(g=!0,h=f.fragments[a[0]],h&&h!==1&&(e=h)),e||(e=i.createDocumentFragment(),f.clean
(a,i,e,d)),g&&(f.fragments[a[0]]=h?e:1);return{fragment:e,cacheable:g}},f.fragments={},f.each({appendTo:"append",prependTo:"prepend",insertBefore:"before",insertAfter:"after",replaceAll:"replaceWith"},function(a,b){f.fn[a]=function(c){var d=[],e=f(c),g=this.length===1&&this[0].parentNode;if(g&&g.nodeType===11&&g.childNodes.length===1&&e.length===1){e[b](this[0]);return this}for(var h=0,i=e.length;h<i;h++){var j=(h>0?this.clone(!0):this).get();f(e[h])[b](j),d=d.concat(j)}return this.pushStack(d,a,e.selector)}}),f.extend({clone:function(a,b,c){var d=a.cloneNode(!0),e,g,h;if((!f.support.noCloneEvent||!f.support.noCloneChecked)&&(a.nodeType===1||a.nodeType===11)&&!f.isXMLDoc(a)){bh(a,d),e=bi(a),g=bi(d);for(h=0;e[h];++h)g[h]&&bh(e[h],g[h])}if(b){bg(a,d);if(c){e=bi(a),g=bi(d);for(h=0;e[h];++h)bg(e[h],g[h])}}e=g=null;return d},clean:function(a,b,d,e){var g;b=b||c,typeof b.createElement=="undefined"&&(b=b.ownerDocument||b[0]&&b[0].ownerDocument||c);var h=[],i;for(var j=0,k;(k=a[j])!=null;j++){typeof k=="number"&&(k+="");if(!k)continue;if(typeof k=="string")if(!_.test(k))k=b.createTextNode(k);else{k=k.replace(Y,"<$1></$2>");var l=(Z.exec(k)||["",""])[1].toLowerCase(),m=be[l]||be._default,n=m[0],o=b.createElement("div");o.innerHTML=m[1]+k+m[2];while(n--)o=o.lastChild;if(!f.support.tbody){var p=$.test(k),q=l==="table"&&!p?o.firstChild&&o.firstChild.childNodes:m[1]==="<table>"&&!p?o.childNodes:[];for(i=q.length-1;i>=0;--i)f.nodeName(q[i],"tbody")&&!q[i].childNodes.length&&q[i].parentNode.removeChild(q[i])}!f.support.leadingWhitespace&&X.test(k)&&o.insertBefore(b.createTextNode(X.exec(k)[0]),o.firstChild),k=o.childNodes}var r;if(!f.support.appendChecked)if(k[0]&&typeof (r=k.length)=="number")for(i=0;i<r;i++)bk(k[i]);else bk(k);k.nodeType?h.push(k):h=f.merge(h,k)}if(d){g=function(a){return!a.type||bc.test(a.type)};for(j=0;h[j];j++)if(e&&f.nodeName(h[j],"script")&&(!h[j].type||h[j].type.toLowerCase()==="text/javascript"))e.push(h[j].parentNode?h[j].parentNode.removeChild(h[j]):h[j]);else{if(h[j].nodeType===1){var s=f.grep(h[j].getElementsByTagName("script"),g);h.splice.apply(h,[j+1,0].concat(s))}d.appendChild(h[j])}}return h},cleanData:function(a){var b,c,d=f.cache,e=f.expando,g=f.event.special,h=f.support.deleteExpando;for(var i=0,j;(j=a[i])!=null;i++){if(j.nodeName&&f.noData[j.nodeName.toLowerCase()])continue;c=j[f.expando];if(c){b=d[c]&&d[c][e];if(b&&b.events){for(var k in b.events)g[k]?f.event.remove(j,k):f.removeEvent(j,k,b.handle);b.handle&&(b.handle.elem=null)}h?delete j[f.expando]:j.removeAttribute&&j.removeAttribute(f.expando),delete d[c]}}}});var bm=/alpha\([^)]*\)/i,bn=/opacity=([^)]*)/,bo=/([A-Z]|^ms)/g,bp=/^-?\d+(?:px)?$/i,bq=/^-?\d/,br=/^([\-+])=([\-+.\de]+)/,bs={position:"absolute",visibility:"hidden",display:"block"},bt=["Left","Right"],bu=["Top","Bottom"],bv,bw,bx;f.fn.css=function(a,c){if(arguments.length===2&&c===b)return this;return f.access(this,a,c,!0,function(a,c,d){return d!==b?f.style(a,c,d):f.css(a,c)})},f.extend({cssHooks:{opacity:{get:function(a,b){if(b){var c=bv(a,"opacity","opacity");return c===""?"1":c}return a.style.opacity}}},cssNumber:{fillOpacity:!0,fontWeight:!0,lineHeight:!0,opacity:!0,orphans:!0,widows:!0,zIndex:!0,zoom:!0},cssProps:{"float":f.support.cssFloat?"cssFloat":"styleFloat"},style:function(a,c,d,e){if(!!a&&a.nodeType!==3&&a.nodeType!==8&&!!a.style){var g,h,i=f.camelCase(c),j=a.style,k=f.cssHooks[i];c=f.cssProps[i]||i;if(d===b){if(k&&"get"in k&&(g=k.get(a,!1,e))!==b)return g;return j[c]}h=typeof d,h==="string"&&(g=br.exec(d))&&(d=+(g[1]+1)*+g[2]+parseFloat(f.css(a,c)),h="number");if(d==null||h==="number"&&isNaN(d))return;h==="number"&&!f.cssNumber[i]&&(d+="px");if(!k||!("set"in k)||(d=k.set(a,d))!==b)try{j[c]=d}catch(l){}}},css:function(a,c,d){var e,g;c=f.camelCase(c),g=f.cssHooks[c],c=f.cssProps[c]||c,c==="cssFloat"&&(c="float");if(g&&"get"in g&&(e=g.get(a,!0,d))!==b)return e;if(bv)return bv(a,c)},swap:function(a,b,c){var d={};for(var e in b)d[e]=a.style[e],a.style[e]=b[e];c.call(a);for(e in b)a.style[e]=d[e]}}),f.curCSS=f.css,f.each(["height","width"],function(a,b){f.cssHooks[b]={get:function(a,c,d){var e;if(c){if(a.offsetWidth!==0)return by(a,b,d);f.swap(a,bs,function(){e=by(a,b,d)});return e}},set:function(a,b){if(!bp.test(b))return b;b=parseFloat(b);if(b>=0)return b+"px"}}}),f.support.opacity||(f.cssHooks.opacity={get:function(a,b){return bn.test((b&&a.currentStyle?a.currentStyle.filter:a.style.filter)||"")?parseFloat(RegExp.$1)/100+"":b?"1":""},set:function(a,b){var c=a.style,d=a.currentStyle,e=f.isNaN(b)?"":"alpha(opacity="+b*100+")",g=d&&d.filter||c.filter||"";c.zoom=1;if(b>=1&&f.trim(g.replace(bm,""))===""){c.removeAttribute("filter");if(d&&!d.filter)return}c.filter=bm.test(g)?g.replace(bm,e):g+" "+e}}),f(function(){f.support.reliableMarginRight||(f.cssHooks.marginRight={get:function(a,b){var c;f.swap(a,{display:"inline-block"},function(){b?c=bv(a,"margin-right","marginRight"):c=a.style.marginRight});return c}})}),c.defaultView&&c.defaultView.getComputedStyle&&(bw=function(a,c){var d,e,g;c=c.replace(bo,"-$1").toLowerCase();if(!(e=a.ownerDocument.defaultView))return b;if(g=e.getComputedStyle(a,null))d=g.getPropertyValue(c),d===""&&!f.contains(a.ownerDocument.documentElement,a)&&(d=f.style(a,c));return d}),c.documentElement.currentStyle&&(bx=function(a,b){var c,d=a.currentStyle&&a.currentStyle[b],e=a.runtimeStyle&&a.runtimeStyle[b],f=a.style;!bp.test(d)&&bq.test(d)&&(c=f.left,e&&(a.runtimeStyle.left=a.currentStyle.left),f.left=b==="fontSize"?"1em":d||0,d=f.pixelLeft+"px",f.left=c,e&&(a.runtimeStyle.left=e));return d===""?"auto":d}),bv=bw||bx,f.expr&&f.expr.filters&&(f.expr.filters.hidden=function(a){var b=a.offsetWidth,c=a.offsetHeight;return b===0&&c===0||!f.support.reliableHiddenOffsets&&(a.style.display||f.css(a,"display"))==="none"},f.expr.filters.visible=function(a){return!f.expr.filters.hidden(a)});var bz=/%20/g,bA=/\[\]$/,bB=/\r?\n/g,bC=/#.*$/,bD=/^(.*?):[ \t]*([^\r\n]*)\r?$/mg,bE=/^(?:color|date|datetime|datetime-local|email|hidden|month|number|password|range|search|tel|text|time|url|week)$/i,bF=/^(?:about|app|app\-storage|.+\-extension|file|res|widget):$/,bG=/^(?:GET|HEAD)$/,bH=/^\/\//,bI=/\?/,bJ=/<script\b[^<]*(?:(?!<\/script>)<[^<]*)*<\/script>/gi,bK=/^(?:select|textarea)/i,bL=/\s+/,bM=/([?&])_=[^&]*/,bN=/^([\w\+\.\-]+:)(?:\/\/([^\/?#:]*)(?::(\d+))?)?/,bO=f.fn.load,bP={},bQ={},bR,bS,bT=["*/"]+["*"];try{bR=e.href}catch(bU){bR=c.createElement("a"),bR.href="",bR=bR.href}bS=bN.exec(bR.toLowerCase())||[],f.fn.extend({load:function(a,c,d){if(typeof a!="string"&&bO)return bO.apply(this,arguments);if(!this.length)return this;var e=a.indexOf(" ");if(e>=0){var g=a.slice(e,a.length);a=a.slice(0,e)}var h="GET";c&&(f.isFunction(c)?(d=c,c=b):typeof c=="object"&&(c=f.param(c,f.ajaxSettings.traditional),h="POST"));var i=this;f.ajax({url:a,type:h,dataType:"html",data:c,complete:function(a,b,c){c=a.responseText,a.isResolved()&&(a.done(function(a){c=a}),i.html(g?f("<div>").append(c.replace(bJ,"")).find(g):c)),d&&i.each(d,[c,b,a])}});return this},serialize:function(){return f.param(this.serializeArray())},serializeArray:function(){return this.map(function(){return this.elements?f.makeArray(this.elements):this}).filter(function(){return this.name&&!this.disabled&&(this.checked||bK.test(this.nodeName)||bE.test(this.type))}).map(function(a,b){var c=f(this).val();return c==null?null:f.isArray(c)?f.map(c,function(a,c){return{name:b.name,value:a.replace(bB,"\r\n")}}):{name:b.name,value:c.replace(bB,"\r\n")}}).get()}}),f.each("ajaxStart ajaxStop ajaxComplete ajaxError ajaxSuccess ajaxSend".split(" "),function(a,b){f.fn[b]=function(a){return this.bind(b,a)}}),f.each(["get","post"],function(a,c){f[c]=function(a,d,e,g){f.isFunction(d)&&(g=g||e,e=d,d=b);return f.ajax({type:c,url:a,data:d,success:e,dataType:g})}}),f.extend({getScript:function(a,c){return f.get(a,b,c,"script")},getJSON:function(a,b,c){return f.get(a,b,c,"json")},ajaxSetup:function(a,b){b?bX(a,f.ajaxSettings):(b=a,a=f.ajaxSettings),bX(a,b);return a},ajaxSettings:{url:bR,isLocal:bF.test(bS[1]),global:!0,type:"GET",contentType:"application/x-www-form-urlencoded",processData:!0,async:!0,accepts:{xml:"application/xml, text/xml",html:"text/html",text:"text/plain",json:"application/json, text/javascript","*":bT},contents:{xml:/xml/,html:/html/,json:/json/},responseFields:{xml:"responseXML",text:"responseText"},converters:{"* text":a.String,"text html":!0,"text json":f.parseJSON,"text xml":f.parseXML},flatOptions:{context:!0,url:!0}},ajaxPrefilter:bV(bP),ajaxTransport:bV(bQ),ajax:function(a,c){function w(a,c,l,m){if(s!==2){s=2,q&&clearTimeout(q),p=b,n=m||"",v.readyState=a>0?4:0;var o,r,u,w=c,x=l?bZ(d,v,l):b,y,z;if(a>=200&&a<300||a===304){if(d.ifModified){if(y=v.getResponseHeader("Last-Modified"))f.lastModified[k]=y;if(z=v.getResponseHeader("Etag"))f.etag[k]=z}if(a===304)w="notmodified",o=!0;else try{r=b$(d,x),w="success",o=!0}catch(A){w="parsererror",u=A}}else{u=w;if(!w||a)w="error",a<0&&(a=0)}v.status=a,v.statusText=""+(c||w),o?h.resolveWith(e,[r,w,v]):h.rejectWith(e,[v,w,u]),v.statusCode(j),j=b,t&&g.trigger("ajax"+(o?"Success":"Error"),[v,d,o?r:u]),i.resolveWith(e,[v,w]),t&&(g.trigger("ajaxComplete",[v,d]),--f.active||f.event.trigger("ajaxStop"))}}typeof a=="object"&&(c=a,a=b),c=c||{};var d=f.ajaxSetup({},c),e=d.context||d,g=e!==d&&(e.nodeType||e instanceof f)?f(e):f.event,h=f.Deferred(),i=f._Deferred(),j=d.statusCode||{},k,l={},m={},n,o,p,q,r,s=0,t,u,v={readyState:0,setRequestHeader:function(a,b){if(!s){var c=a.toLowerCase();a=m[c]=m[c]||a,l[a]=b}return this},getAllResponseHeaders:function(){return s===2?n:null},getResponseHeader:function(a){var c;if(s===2){if(!o){o={};while(c=bD.exec(n))o[c[1].toLowerCase()]=c[2]}c=o[a.toLowerCase()]}return c===b?null:c},overrideMimeType:function(a){s||(d.mimeType=a);return this},abort:function(a){a=a||"abort",p&&p.abort(a),w(0,a);return this}};h.promise(v),v.success=v.done,v.error=v.fail,v.complete=i.done,v.statusCode=function(a){if(a){var b;if(s<2)for(b in a)j[b]=[j[b],a[b]];else b=a[v.status],v.then(b,b)}return this},d.url=((a||d.url)+"").replace(bC,"").replace(bH,bS[1]+"//"),d.dataTypes=f.trim(d.dataType||"*").toLowerCase().split(bL),d.crossDomain==null&&(r=bN.exec(d.url.toLowerCase()),d.crossDomain=!(!r||r[1]==bS[1]&&r[2]==bS[2]&&(r[3]||(r[1]==="http:"?80:443))==(bS[3]||(bS[1]==="http:"?80:443)))),d.data&&d.processData&&typeof d.data!="string"&&(d.data=f.param(d.data,d.traditional)),bW(bP,d,c,v);if(s===2)return!1;t=d.global,d.type=d.type.toUpperCase(),d.hasContent=!bG.test(d.type),t&&f.active++===0&&f.event.trigger("ajaxStart");if(!d.hasContent){d.data&&(d.url+=(bI.test(d.url)?"&":"?")+d.data,delete d.data),k=d.url;if(d.cache===!1){var x=f.now(),y=d.url.replace(bM,"$1_="+x);d.url=y+(y===d.url?(bI.test(d.url)?"&":"?")+"_="+x:"")}}(d.data&&d.hasContent&&d.contentType!==!1||c.contentType)&&v.setRequestHeader("Content-Type",d.contentType),d.ifModified&&(k=k||d.url,f.lastModified[k]&&v.setRequestHeader("If-Modified-Since",f.lastModified[k]),f.etag[k]&&v.setRequestHeader("If-None-Match",f.etag[k])),v.setRequestHeader("Accept",d.dataTypes[0]&&d.accepts[d.dataTypes[0]]?d.accepts[d.dataTypes[0]]+(d.dataTypes[0]!=="*"?", "+bT+"; q=0.01":""):d.accepts["*"]);for(u in d.headers)v.setRequestHeader(u,d.headers[u]);if(d.beforeSend&&(d.beforeSend.call(e,v,d)===!1||s===2)){v.abort();return!1}for(u in{success:1,error:1,complete:1})v[u](d[u]);p=bW(bQ,d,c,v);if(!p)w(-1,"No Transport");else{v.readyState=1,t&&g.trigger("ajaxSend",[v,d]),d.async&&d.timeout>0&&(q=setTimeout(function(){v.abort("timeout")},d.timeout));try{s=1,p.send(l,w)}catch(z){s<2?w(-1,z):f.error(z)}}return v},param:function(a,c){var d=[],e=function(a,b){b=f.isFunction(b)?b():b,d[d.length]=encodeURIComponent(a)+"="+encodeURIComponent(b)};c===b&&(c=f.ajaxSettings.traditional);if(f.isArray(a)||a.jquery&&!f.isPlainObject(a))f.each(a,function(){e(this.name,this.value)});else for(var g in a)bY(g,a[g],c,e);return d.join("&").replace(bz,"+")}}),f.extend({active:0,lastModified:{},etag:{}});var b_=f.now(),ca=/(\=)\?(&|$)|\?\?/i;f.ajaxSetup({jsonp:"callback",jsonpCallback:function(){return f.expando+"_"+b_++}}),f.ajaxPrefilter("json jsonp",function(b,c,d){var e=b.contentType==="application/x-www-form-urlencoded"&&typeof b.data=="string";if(b.dataTypes[0]==="jsonp"||b.jsonp!==!1&&(ca.test(b.url)||e&&ca.test(b.data))){var g,h=b.jsonpCallback=f.isFunction(b.jsonpCallback)?b.jsonpCallback():b.jsonpCallback,i=a[h],j=b.url,k=b.data,l="$1"+h+"$2";b.jsonp!==!1&&(j=j.replace(ca,l),b.url===j&&(e&&(k=k.replace(ca,l)),b.data===k&&(j+=(/\?/.test(j)?"&":"?")+b.jsonp+"="+h))),b.url=j,b.data=k,a[h]=function(a){g=[a]},d.always(function(){a[h]=i,g&&f.isFunction(i)&&a[h](g[0])}),b.converters["script json"]=function(){g||f.error(h+" was not called");return g[0]},b.dataTypes[0]="json";return"script"}}),f.ajaxSetup({accepts:{script:"text/javascript, application/javascript, application/ecmascript, application/x-ecmascript"},contents:{script:/javascript|ecmascript/},converters:{"text script":function(a){f.globalEval(a);return a}}}),f.ajaxPrefilter("script",function(a){a.cache===b&&(a.cache=!1),a.crossDomain&&(a.type="GET",a.global=!1)}),f.ajaxTransport("script",function(a){if(a.crossDomain){var d,e=c.head||c.getElementsByTagName("head")[0]||c.documentElement;return{send:function(f,g){d=c.createElement("script"),d.async="async",a.scriptCharset&&(d.charset=a.scriptCharset),d.src=a.url,d.onload=d.onreadystatechange=function(a,c){if(c||!d.readyState||/loaded|complete/.test(d.readyState))d.onload=d.onreadystatechange=null,e&&d.parentNode&&e.removeChild(d),d=b,c||g(200,"success")},e.insertBefore(d,e.firstChild)},abort:function(){d&&d.onload(0,1)}}}});var cb=a.ActiveXObject?function(){for(var a in cd)cd[a](0,1)}:!1,cc=0,cd;f.ajaxSettings.xhr=a.ActiveXObject?function(){return!this.isLocal&&ce()||cf()}:ce,function(a){f.extend(f.support,{ajax:!!a,cors:!!a&&"withCredentials"in a})}(f.ajaxSettings.xhr()),f.support.ajax&&f.ajaxTransport(function(c){if(!c.crossDomain||f.support.cors){var d;return{send:function(e,g){var h=c.xhr(),i,j;c.username?h.open(c.type,c.url,c.async,c.username,c.password):h.open(c.type,c.url,c.async);if(c.xhrFields)for(j in c.xhrFields)h[j]=c.xhrFields[j];c.mimeType&&h.overrideMimeType&&h.overrideMimeType(c.mimeType),!c.crossDomain&&!e["X-Requested-With"]&&(e["X-Requested-With"]="XMLHttpRequest");try{for(j in e)h.setRequestHeader(j,e[j])}catch(k){}h.send(c.hasContent&&c.data||null),d=function(a,e){var j,k,l,m,n;try{if(d&&(e||h.readyState===4)){d=b,i&&(h.onreadystatechange=f.noop,cb&&delete cd[i]);if(e)h.readyState!==4&&h.abort();else{j=h.status,l=h.getAllResponseHeaders(),m={},n=h.responseXML,n&&n.documentElement&&(m.xml=n),m.text=h.responseText;try{k=h.statusText}catch(o){k=""}!j&&c.isLocal&&!c.crossDomain?j=m.text?200:404:j===1223&&(j=204)}}}catch(p){e||g(-1,p)}m&&g(j,k,m,l)},!c.async||h.readyState===4?d():(i=++cc,cb&&(cd||(cd={},f(a).unload(cb)),cd[i]=d),h.onreadystatechange=d)},abort:function(){d&&d(0,1)}}}});var cg={},ch,ci,cj=/^(?:toggle|show|hide)$/,ck=/^([+\-]=)?([\d+.\-]+)([a-z%]*)$/i,cl,cm=[["height","marginTop","marginBottom","paddingTop","paddingBottom"],["width","marginLeft","marginRight","paddingLeft","paddingRight"],["opacity"]],cn;f.fn.extend({show:function(a,b,c){var d,e;if(a||a===0)return this.animate(cq("show",3),a,b,c);for(var g=0,h=this.length;g<h;g++)d=this[g],d.style&&(e=d.style.display,!f._data(d,"olddisplay")&&e==="none"&&(e=d.style.display=""),e===""&&f.css(d,"display")==="none"&&f._data(d,"olddisplay",cr(d.nodeName)));for(g=0;g<h;g++){d=this[g];if(d.style){e=d.style.display;if(e===""||e==="none")d.style.display=f._data(d,"olddisplay")||""}}return this},hide:function(a,b,c){if(a||a===0)return this.animate(cq("hide",3),a,b,c);for(var d=0,e=this.length;d<e;d++)if(this[d].style){var g=f.css(this[d],"display");g!=="none"&&!f._data(this[d],"olddisplay")&&f._data(this[d],"olddisplay",g)}for(d=0;d<e;d++)this[d].style&&(this[d].style.display="none");return this},_toggle:f.fn.toggle,toggle:function(a,b,c){var d=typeof a=="boolean";f.isFunction(a)&&f.isFunction(b)?this._toggle.apply(this,arguments):a==null||d?this.each(function(){var b=d?a:f(this).is(":hidden");f(this)[b?"show":"hide"]()}):this.animate(cq("toggle",3),a,b,c);return this},fadeTo:function(a,b,c,d){return this.filter(":hidden").css("opacity",0).show().end().animate({opacity:b},a,c,d)},animate:function(a,b,c,d){var e=f.speed(b,c,d);if(f.isEmptyObject(a))return this.each(e.complete,[!1]);a=f.extend({},a);return this[e.queue===!1?"each":"queue"](function(){e.queue===!1&&f._mark(this);var b=f.extend({},e),c=this.nodeType===1,d=c&&f(this).is(":hidden"),g,h,i,j,k,l,m,n,o;b.animatedProperties={};for(i in a){g=f.camelCase(i),i!==g&&(a[g]=a[i],delete a[i]),h=a[g],f.isArray(h)?(b.animatedProperties[g]=h[1],h=a[g]=h[0]):b.animatedProperties[g]=b.specialEasing&&b.specialEasing[g]||b.easing||"swing";if(h==="hide"&&d||h==="show"&&!d)return b.complete.call(this);c&&(g==="height"||g==="width")&&(b.overflow=[this.style.overflow,this.style.overflowX,this.style.overflowY],f.css(this,"display")==="inline"&&f.css(this,"float")==="none"&&(f.support.inlineBlockNeedsLayout?(j=cr(this.nodeName),j==="inline"?this.style.display="inline-block":(this.style.display="inline",this.style.zoom=1)):this.style.display="inline-block"))}b.overflow!=null&&(this.style.overflow="hidden");for(i in a)k=new f.fx(this,b,i),h=a[i],cj.test(h)?k[h==="toggle"?d?"show":"hide":h]():(l=ck.exec(h),m=k.cur(),l?(n=parseFloat(l[2]),o=l[3]||(f.cssNumber[i]?"":"px"),o!=="px"&&(f.style(this,i,(n||1)+o),m=(n||1)/k.cur()*m,f.style(this,i,m+o)),l[1]&&(n=(l[1]==="-="?-1:1)*n+m),k.custom(m,n,o)):k.custom(m,h,""));return!0})},stop:function(a,b){a&&this.queue([]),this.each(function(){var a=f.timers,c=a.length;b||f._unmark(!0,this);while(c--)a[c].elem===this&&(b&&a[c](!0),a.splice(c,1))}),b||this.dequeue();return this}}),f.each({slideDown:cq("show",1),slideUp:cq("hide",1),slideToggle:cq("toggle",1),fadeIn:{opacity:"show"},fadeOut:{opacity:"hide"},fadeToggle:{opacity:"toggle"}},function(a,b){f.fn[a]=function(a,c,d){return this.animate(b,a,c,d)}}),f.extend({speed:function(a,b,c){var d=a&&typeof a=="object"?f.extend({},a):{complete:c||!c&&b||f.isFunction(a)&&a,duration:a,easing:c&&b||b&&!f.isFunction(b)&&b};d.duration=f.fx.off?0:typeof d.duration=="number"?d.duration:d.duration in f.fx.speeds?f.fx.speeds[d.duration]:f.fx.speeds._default,d.old=d.complete,d.complete=function(a){f.isFunction(d.old)&&d.old.call(this),d.queue!==!1?f.dequeue(this):a!==!1&&f._unmark(this)};return d},easing:{linear:function(a,b,c,d){return c+d*a},swing:function(a,b,c,d){return(-Math.cos(a*Math.PI)/2+.5)*d+c}},timers:[],fx:function(a,b,c){this.options=b,this.elem=a,this.prop=c,b.orig=b.orig||{}}}),f.fx.prototype={update:function(){this.options.step&&this.options.step.call(this.elem,this.now,this),(f.fx.step[this.prop]||f.fx.step._default)(this)},cur:function(){if(this.elem[this.prop]!=null&&(!this.elem.style||this.elem.style[this.prop]==null))return this.elem[this.prop];var a,b=f.css(this.elem,this.prop);return isNaN(a=parseFloat(b))?!b||b==="auto"?0:b:a},custom:function(a,b,c){function g(a){return d.step(a)}var d=this,e=f.fx;this.startTime=cn||co(),this.start=a,this.end=b,this.unit=c||this.unit||(f.cssNumber[this.prop]?"":"px"),this.now=this.start,this.pos=this.state=0,g.elem=this.elem,g()&&f.timers.push(g)&&!cl&&(cl=setInterval(e.tick,e.interval))},show:function(){this.options.orig[this.prop]=f.style(this.elem,this.prop),this.options.show=!0,this.custom(this.prop==="width"||this.prop==="height"?1:0,this.cur()),f(this.elem).show()},hide:function(){this.options.orig[this.prop]=f.style(this.elem,this.prop),this.options.hide=!0,this.custom(this.cur(),0)},step:function(a){var b=cn||co(),c=!0,d=this.elem,e=this.options,g,h;if(a||b>=e.duration+this.startTime){this.now=this.end,this.pos=this.state=1,this.update(),e.animatedProperties[this.prop]=!0;for(g in e.animatedProperties)e.animatedProperties[g]!==!0&&(c=!1);if(c){e.overflow!=null&&!f.support.shrinkWrapBlocks&&f.each(["","X","Y"],function(a,b){d.style["overflow"+b]=e.overflow[a]}),e.hide&&f(d).hide();if(e.hide||e.show)for(var i in e.animatedProperties)f.style(d,i,e.orig[i]);e.complete.call(d)}return!1}e.duration==Infinity?this.now=b:(h=b-this.startTime,this.state=h/e.duration,this.pos=f.easing[e.animatedProperties[this.prop]](this.state,h,0,1,e.duration),this.now=this.start+(this.end-this.start)*this.pos),this.update();return!0}},f.extend(f.fx,{tick:function(){for(var a=f.timers,b=0;b<a.length;++b)a[b]()||a.splice(b--,1);a.length||f.fx.stop()},interval:13,stop:function(){clearInterval(cl),cl=null},speeds:{slow:600,fast:200,_default:400},step:{opacity:function(a){f.style(a.elem,"opacity",a.now)},_default:function(a){a.elem.style&&a.elem.style[a.prop]!=null?a.elem.style[a.prop]=(a.prop==="width"||a.prop==="height"?Math.max(0,a.now):a.now)+a.unit:a.elem[a.prop]=a.now}}}),f.expr&&f.expr.filters&&(f.expr.filters.animated=function(a){return f.grep(f.timers,function(b){return a===b.elem}).length});var cs=/^t(?:able|d|h)$/i,ct=/^(?:body|html)$/i;"getBoundingClientRect"in c.documentElement?f.fn.offset=function(a){var b=this[0],c;if(a)return this.each(function(b){f.offset.setOffset(this,a,b)});if(!b||!b.ownerDocument)return null;if(b===b.ownerDocument.body)return f.offset.bodyOffset(b);try{c=b.getBoundingClientRect()}catch(d){}var e=b.ownerDocument,g=e.documentElement;if(!c||!f.contains(g,b))return c?{top:c.top,left:c.left}:{top:0,left:0};var h=e.body,i=cu(e),j=g.clientTop||h.clientTop||0,k=g.clientLeft||h.clientLeft||0,l=i.pageYOffset||f.support.boxModel&&g.scrollTop||h.scrollTop,m=i.pageXOffset||f.support.boxModel&&g.scrollLeft||h.scrollLeft,n=c.top+l-j,o=c.left+m-k;return{top:n,left:o}}:f.fn.offset=function(a){var b=this[0];if(a)return this.each(function(b){f.offset.setOffset(this,a,b)});if(!b||!b.ownerDocument)return null;if(b===b.ownerDocument.body)return f.offset.bodyOffset(b);f.offset.initialize();var c,d=b.offsetParent,e=b,g=b.ownerDocument,h=g.documentElement,i=g.body,j=g.defaultView,k=j?j.getComputedStyle(b,null):b.currentStyle,l=b.offsetTop,m=b.offsetLeft;while((b=b.parentNode)&&b!==i&&b!==h){if(f.offset.supportsFixedPosition&&k.position==="fixed")break;c=j?j.getComputedStyle(b,null):b.currentStyle,l-=b.scrollTop,m-=b.scrollLeft,b===d&&(l+=b.offsetTop,m+=b.offsetLeft,f.offset.doesNotAddBorder&&(!f.offset.doesAddBorderForTableAndCells||!cs.test(b.nodeName))&&(l+=parseFloat(c.borderTopWidth)||0,m+=parseFloat(c.borderLeftWidth)||0),e=d,d=b.offsetParent),f.offset.subtractsBorderForOverflowNotVisible&&c.overflow!=="visible"&&(l+=parseFloat(c.borderTopWidth)||0,m+=parseFloat(c.borderLeftWidth)||0),k=c}if(k.position==="relative"||k.position==="static")l+=i.offsetTop,m+=i.offsetLeft;f.offset.supportsFixedPosition&&k.position==="fixed"&&(l+=Math.max(h.scrollTop,i.scrollTop),m+=Math.max(h.scrollLeft,i.scrollLeft));return{top:l,left:m}},f.offset={initialize:function(){var a=c.body,b=c.createElement("div"),d,e,g,h,i=parseFloat(f.css(a,"marginTop"))||0,j="<div style='position:absolute;top:0;left:0;margin:0;border:5px solid #000;padding:0;width:1px;height:1px;'><div></div></div><table style='position:absolute;top:0;left:0;margin:0;border:5px solid #000;padding:0;width:1px;height:1px;' cellpadding='0' cellspacing='0'><tr><td></td></tr></table>";f.extend(b.style,{position:"absolute",top:0,left:0,margin:0,border:0,width:"1px",height:"1px",visibility:"hidden"}),b.innerHTML=j,a.insertBefore(b,a.firstChild),d=b.firstChild,e=d.firstChild,h=d.nextSibling.firstChild.firstChild,this.doesNotAddBorder=e.offsetTop!==5,this.doesAddBorderForTableAndCells=h.offsetTop===5,e.style.position="fixed",e.style.top="20px",this.supportsFixedPosition=e.offsetTop===20||e.offsetTop===15,e.style.position=e.style.top="",d.style.overflow="hidden",d.style.position="relative",this.subtractsBorderForOverflowNotVisible=e.offsetTop===-5,this.doesNotIncludeMarginInBodyOffset=a.offsetTop!==i,a.removeChild(b),f.offset.initialize=f.noop},bodyOffset:function(a){var b=a.offsetTop,c=a.offsetLeft;f.offset.initialize(),f.offset.doesNotIncludeMarginInBodyOffset&&(b+=parseFloat(f.css(a,"marginTop"))||0,c+=parseFloat(f.css(a,"marginLeft"))||0);return{top:b,left:c}},setOffset:function(a,b,c){var d=f.css(a,"position");d==="static"&&(a.style.position="relative");var e=f(a),g=e.offset(),h=f.css(a,"top"),i=f.css(a,"left"),j=(d==="absolute"||d==="fixed")&&f.inArray("auto",[h,i])>-1,k={},l={},m,n;j?(l=e.position(),m=l.top,n=l.left):(m=parseFloat(h)||0,n=parseFloat(i)||0),f.isFunction(b)&&(b=b.call(a,c,g)),b.top!=null&&(k.top=b.top-g.top+m),b.left!=null&&(k.left=b.left-g.left+n),"using"in b?b.using.call(a,k):e.css(k)}},f.fn.extend({position:function(){if(!this[0])return null;var a=this[0],b=this.offsetParent(),c=this.offset(),d=ct.test(b[0].nodeName)?{top:0,left:0}:b.offset();c.top-=parseFloat(f.css(a,"marginTop"))||0,c.left-=parseFloat(f.css(a,"marginLeft"))||0,d.top+=parseFloat(f.css(b[0],"borderTopWidth"))||0,d.left+=parseFloat(f.css(b[0],"borderLeftWidth"))||0;return{top:c.top-d.top,left:c.left-d.left}},offsetParent:function(){return this.map(function(){var a=this.offsetParent||c.body;while(a&&!ct.test(a.nodeName)&&f.css(a,"position")==="static")a=a.offsetParent;return a})}}),f.each(["Left","Top"],function(a,c){var d="scroll"+c;f.fn[d]=function(c){var e,g;if(c===b){e=this[0];if(!e)return null;g=cu(e);return g?"pageXOffset"in g?g[a?"pageYOffset":"pageXOffset"]:f.support.boxModel&&g.document.documentElement[d]||g.document.body[d]:e[d]}return this.each(function(){g=cu(this),g?g.scrollTo(a?f(g).scrollLeft():c,a?c:f(g).scrollTop()):this[d]=c})}}),f.each(["Height","Width"],function(a,c){var d=c.toLowerCase();f.fn["inner"+c]=function(){var a=this[0];return a&&a.style?parseFloat(f.css(a,d,"padding")):null},f.fn["outer"+c]=function(a){var b=this[0];return b&&b.style?parseFloat(f.css(b,d,a?"margin":"border")):null},f.fn[d]=function(a){var e=this[0];if(!e)return a==null?null:this;if(f.isFunction(a))return this.each(function(b){var c=f(this);c[d](a.call(this,b,c[d]()))});if(f.isWindow(e)){var g=e.document.documentElement["client"+c],h=e.document.body;return e.document.compatMode==="CSS1Compat"&&g||h&&h["client"+c]||g}if(e.nodeType===9)return Math.max(e.documentElement["client"+c],e.body["scroll"+c],e.documentElement["scroll"+c],e.body["offset"+c],e.documentElement["offset"+c]);if(a===b){var i=f.css(e,d),j=parseFloat(i);return f.isNaN(j)?i:j}return this.css(d,typeof a=="string"?a:a+"px")}}),a.jQuery=a.$=f})(window);
(function($) {
var _rootUrl = '/index.php/ezwebin_site_admin/', _serverUrl = _rootUrl + 'ezjscore/', _seperator = '@SEPERATOR$',
_prefUrl = _rootUrl + 'user/preferences';
if ( window.XMLHttpRequest && window.ActiveXObject )
$.ajaxSettings.xhr = function() { try { return new window.ActiveXObject('Microsoft.XMLHTTP'); } catch(e) {} };
function _ez( callArgs, post, callBack )
{
callArgs = callArgs.join !== undefined ? callArgs.join( _seperator ) : callArgs;
var url = _serverUrl + 'call/';
if ( post )
{
var _token = '', _tokenNode = document.getElementById('ezxform_token_js');
if ( _tokenNode ) _token = _tokenNode.getAttribute('title');
if ( post.join !== undefined )// support serializeArray() format
{
post.push( { 'name': 'ezjscServer_function_arguments', 'value': callArgs } );
post.push( { 'name': 'ezxform_token', 'value': _token } );
}
else if ( typeof(post) === 'string' )// string
{
post += ( post ? '&' : '' ) + 'ezjscServer_function_arguments=' + callArgs + '&ezxform_token=' + _token;
}
else // object
{
post['ezjscServer_function_arguments'] = callArgs;
post['ezxform_token'] = _token;
}
return $.post( url, post, callBack, 'json' );
}
return $.get( url + encodeURIComponent( callArgs ), {}, callBack, 'json' );
};
_ez.url = _serverUrl;
_ez.root_url = _rootUrl;
_ez.seperator = _seperator;
$.ez = _ez;
$.ez.setPreference = function( name, value )
{
var param = {'Function': 'set_and_exit', 'Key': name, 'Value': value};
_tokenNode = document.getElementById( 'ezxform_token_js' );
if ( _tokenNode )
param.ezxform_token = _tokenNode.getAttribute( 'title' );
return $.post( _prefUrl, param );
};
function _ezLoad( callArgs, post, selector, callBack )
{
callArgs = callArgs.join !== undefined ? callArgs.join( _seperator ) : callArgs;
var url = _serverUrl + 'call/';
if ( post )
{
post['ezjscServer_function_arguments'] = callArgs;
post['ezxform_token'] = jQuery('#ezxformtoken').attr('title');
}
else
url += encodeURIComponent( callArgs );
return this.load( url + ( selector ? ' ' + selector : '' ), post, callBack );
};
$.fn.ez = _ezLoad;
})(jQuery);
if(typeof YUI!="undefined"){YUI._YUI=YUI;}var YUI=function(){var c=0,f=this,b=arguments,a=b.length,e=function(h,g){return(h&&h.hasOwnProperty&&(h instanceof g));},d=(typeof YUI_config!=="undefined")&&YUI_config;if(!(e(f,YUI))){f=new YUI();}else{f._init();if(YUI.GlobalConfig){f.applyConfig(YUI.GlobalConfig);}if(d){f.applyConfig(d);}if(!a){f._setup();}}if(a){for(;c<a;c++){f.applyConfig(b[c]);}f._setup();}f.instanceOf=e;return f;};(function(){var p,b,q="3.4.1",h=".",n="http://yui.yahooapis.com/",t="yui3-js-enabled",l=function(){},g=Array.prototype.slice,r={"io.xdrReady":1,"io.xdrResponse":1,"SWF.eventHandler":1},f=(typeof window!="undefined"),e=(f)?window:null,v=(f)?e.document:null,d=v&&v.documentElement,a=d&&d.className,c={},i=new Date().getTime(),m=function(z,y,x,w){if(z&&z.addEventListener){z.addEventListener(y,x,w);}else{if(z&&z.attachEvent){z.attachEvent("on"+y,x);}}},u=function(A,z,y,w){if(A&&A.removeEventListener){try{A.removeEventListener(z,y,w);}catch(x){}}else{if(A&&A.detachEvent){A.detachEvent("on"+z,y);}}},s=function(){YUI.Env.windowLoaded=true;YUI.Env.DOMReady=true;if(f){u(window,"load",s);}},j=function(y,x){var w=y.Env._loader;if(w){w.ignoreRegistered=false;w.onEnd=null;w.data=null;w.required=[];w.loadType=null;}else{w=new y.Loader(y.config);y.Env._loader=w;}YUI.Env.core=y.Array.dedupe([].concat(YUI.Env.core,["loader-base","loader-rollup","loader-yui3"]));return w;},o=function(y,x){for(var w in x){if(x.hasOwnProperty(w)){y[w]=x[w];}}},k={success:true};if(d&&a.indexOf(t)==-1){if(a){a+=" ";}a+=t;d.className=a;}if(q.indexOf("@")>-1){q="3.3.0";}p={applyConfig:function(D){D=D||l;var y,A,z=this.config,B=z.modules,x=z.groups,C=z.rls,w=this.Env._loader;for(A in D){if(D.hasOwnProperty(A)){y=D[A];if(B&&A=="modules"){o(B,y);}else{if(x&&A=="groups"){o(x,y);}else{if(C&&A=="rls"){o(C,y);}else{if(A=="win"){z[A]=y.contentWindow||y;z.doc=z[A].document;}else{if(A=="_yuid"){}else{z[A]=y;}}}}}}}if(w){w._config(D);}},_config:function(w){this.applyConfig(w);},_init:function(){var y,z=this,w=YUI.Env,x=z.Env,A;z.version=q;if(!x){z.Env={core:["get","features","intl-base","yui-log","yui-later","loader-base","loader-rollup","loader-yui3"],mods:{},versions:{},base:n,cdn:n+q+"/build/",_idx:0,_used:{},_attached:{},_missed:[],_yidx:0,_uidx:0,_guidp:"y",_loaded:{},_BASE_RE:/(?:\?(?:[^&]*&)*([^&]*))?\b(simpleyui|yui(?:-\w+)?)\/\2(?:-(min|debug))?\.js/,parseBasePath:function(F,D){var B=F.match(D),E,C;if(B){E=RegExp.leftContext||F.slice(0,F.indexOf(B[0]));C=B[3];if(B[1]){E+="?"+B[1];}E={filter:C,path:E};}return E;},getBase:w&&w.getBase||function(F){var D=(v&&v.getElementsByTagName("script"))||[],G=x.cdn,C,E,B,H;for(E=0,B=D.length;E<B;++E){H=D[E].src;if(H){C=z.Env.parseBasePath(H,F);if(C){y=C.filter;G=C.path;break;}}}return G;}};x=z.Env;x._loaded[q]={};if(w&&z!==YUI){x._yidx=++w._yidx;x._guidp=("yui_"+q+"_"+x._yidx+"_"+i).replace(/\./g,"_");}else{if(YUI._YUI){w=YUI._YUI.Env;x._yidx+=w._yidx;x._uidx+=w._uidx;for(A in w){if(!(A in x)){x[A]=w[A];}}delete YUI._YUI;}}z.id=z.stamp(z);c[z.id]=z;}z.constructor=YUI;z.config=z.config||{win:e,doc:v,debug:true,useBrowserConsole:true,throwFail:true,bootstrap:true,cacheUse:true,fetchCSS:true,use_rls:false,rls_timeout:2000};if(YUI.Env.rls_disabled){z.config.use_rls=false;}z.config.lang=z.config.lang||"en-US";z.config.base=YUI.config.base||z.Env.getBase(z.Env._BASE_RE);if(!y||(!("mindebug").indexOf(y))){y="min";}y=(y)?"-"+y:y;z.config.loaderPath=YUI.config.loaderPath||"loader/loader"+y+".js";},_setup:function(B){var x,A=this,w=[],z=YUI.Env.mods,y=A.config.core||[].concat(YUI.Env.core);for(x=0;x<y.length;x++){if(z[y[x]]){w.push(y[x]);}}A._attach(["yui-base"]);A._attach(w);if(A.Loader){j(A);}},applyTo:function(C,B,y){if(!(B in r)){this.log(B+": applyTo not allowed","warn","yui");return null;}var x=c[C],A,w,z;if(x){A=B.split(".");w=x;for(z=0;z<A.length;z=z+1){w=w[A[z]];if(!w){this.log("applyTo not found: "+B,"warn","yui");}}return w.apply(x,y);}return null;},add:function(x,C,B,w){w=w||{};var A=YUI.Env,D={name:x,fn:C,version:B,details:w},E,z,y=A.versions;A.mods[x]=D;y[B]=y[B]||{};y[B][x]=D;for(z in c){if(c.hasOwnProperty(z)){E=c[z].Env._loader;if(E){if(!E.moduleInfo[x]){E.addModule(w,x);}}}}return this;},_attach:function(B,M){var F,N,L,I,w,D,y,z=YUI.Env.mods,G=YUI.Env.aliases,x=this,E,A=x.Env._loader,C=x.Env._attached,H=B.length,A,K=[];for(F=0;F<H;F++){N=B[F];L=z[N];K.push(N);if(A&&A.conditions[N]){x.Object.each(A.conditions[N],function(P){var O=P&&((P.ua&&x.UA[P.ua])||(P.test&&P.test(x)));if(O){K.push(P.name);}});}}B=K;H=B.length;for(F=0;F<H;F++){if(!C[B[F]]){N=B[F];L=z[N];if(G&&G[N]){x._attach(G[N]);continue;}if(!L){if(A&&A.moduleInfo[N]){L=A.moduleInfo[N];M=true;}if(!M){if((N.indexOf("skin-")===-1)&&(N.indexOf("css")===-1)){x.Env._missed.push(N);x.Env._missed=x.Array.dedupe(x.Env._missed);x.message("NOT loaded: "+N,"warn","yui");}}}else{C[N]=true;for(E=0;E<x.Env._missed.length;E++){if(x.Env._missed[E]===N){x.message("Found: "+N+" (was reported as missing earlier)","warn","yui");x.Env._missed.splice(E,1);}}I=L.details;w=I.requires;D=I.use;y=I.after;if(w){for(E=0;E<w.length;E++){if(!C[w[E]]){if(!x._attach(w)){return false;}break;}}}if(y){for(E=0;E<y.length;E++){if(!C[y[E]]){if(!x._attach(y,true)){return false;}break;}}}if(L.fn){try{L.fn(x,N);}catch(J){x.error("Attach error: "+N,J,N);return false;}}if(D){for(E=0;E<D.length;E++){if(!C[D[E]]){if(!x._attach(D)){return false;}break;}}}}}}return true;},use:function(){var y=g.call(arguments,0),C=y[y.length-1],B=this,A=0,x,w=B.Env,z=true;if(B.Lang.isFunction(C)){y.pop();}else{C=null;}if(B.Lang.isArray(y[0])){y=y[0];}if(B.config.cacheUse){while((x=y[A++])){if(!w._attached[x]){z=false;break;}}if(z){if(y.length){}B._notify(C,k,y);return B;}}if(B._loading){B._useQueue=B._useQueue||new B.Queue();B._useQueue.add([y,C]);}else{B._use(y,function(E,D){E._notify(C,D,y);});}return B;},_notify:function(z,w,x){if(!w.success&&this.config.loadErrorFn){this.config.loadErrorFn.call(this,this,z,w,x);}else{if(z){try{z(this,w);}catch(y){this.error("use callback error",y,x);
}}}},_use:function(y,A){if(!this.Array){this._attach(["yui-base"]);}var M,F,N,K,x=this,O=YUI.Env,z=O.mods,w=x.Env,C=w._used,J=O._loaderQueue,R=y[0],E=x.Array,P=x.config,D=P.bootstrap,L=[],H=[],Q=true,B=P.fetchCSS,I=function(T,S){if(!T.length){return;}E.each(T,function(W){if(!S){H.push(W);}if(C[W]){return;}var U=z[W],X,V;if(U){C[W]=true;X=U.details.requires;V=U.details.use;}else{if(!O._loaded[q][W]){L.push(W);}else{C[W]=true;}}if(X&&X.length){I(X);}if(V&&V.length){I(V,1);}});},G=function(W){var U=W||{success:true,msg:"not dynamic"},T,S,V=true,X=U.data;x._loading=false;if(X){S=L;L=[];H=[];I(X);T=L.length;if(T){if(L.sort().join()==S.sort().join()){T=false;}}}if(T&&X){x._loading=false;x._use(y,function(){if(x._attach(X)){x._notify(A,U,X);}});}else{if(X){V=x._attach(X);}if(V){x._notify(A,U,y);}}if(x._useQueue&&x._useQueue.size()&&!x._loading){x._use.apply(x,x._useQueue.next());}};if(R==="*"){Q=x._attach(x.Object.keys(z));if(Q){G();}return x;}if(D&&x.Loader&&y.length){F=j(x);F.require(y);F.ignoreRegistered=true;F.calculate(null,(B)?null:"js");y=F.sorted;}I(y);M=L.length;if(M){L=x.Object.keys(E.hash(L));M=L.length;}if(D&&M&&x.Loader){x._loading=true;F=j(x);F.onEnd=G;F.context=x;F.data=y;F.ignoreRegistered=false;F.require(y);F.insert(null,(B)?null:"js");}else{if(M&&x.config.use_rls&&!YUI.Env.rls_enabled){O._rls_queue=O._rls_queue||new x.Queue();K=function(S,U){var T=function(W){G(W);S.rls_advance();},V=S._rls(U);if(V){S.rls_oncomplete(function(W){T(W);});S.Get.script(V,{data:U,timeout:S.config.rls_timeout,onFailure:S.rls_handleFailure,onTimeout:S.rls_handleTimeout});}else{T({success:true,data:U});}};O._rls_queue.add(function(){O._rls_in_progress=true;x.rls_callback=A;x.rls_locals(x,y,K);});if(!O._rls_in_progress&&O._rls_queue.size()){O._rls_queue.next()();}}else{if(D&&M&&x.Get&&!w.bootstrapped){x._loading=true;N=function(){x._loading=false;J.running=false;w.bootstrapped=true;O._bootstrapping=false;if(x._attach(["loader"])){x._use(y,A);}};if(O._bootstrapping){J.add(N);}else{O._bootstrapping=true;x.Get.script(P.base+P.loaderPath,{onEnd:N});}}else{Q=x._attach(y);if(Q){G();}}}}return x;},namespace:function(){var x=arguments,B=this,z=0,y,A,w;for(;z<x.length;z++){w=x[z];if(w.indexOf(h)){A=w.split(h);for(y=(A[0]=="YAHOO")?1:0;y<A.length;y++){B[A[y]]=B[A[y]]||{};B=B[A[y]];}}else{B[w]=B[w]||{};}}return B;},log:l,message:l,dump:function(w){return""+w;},error:function(A,y,x){var z=this,w;if(z.config.errorFn){w=z.config.errorFn.apply(z,arguments);}if(z.config.throwFail&&!w){throw (y||new Error(A));}else{z.message(A,"error");}return z;},guid:function(w){var x=this.Env._guidp+"_"+(++this.Env._uidx);return(w)?(w+x):x;},stamp:function(y,z){var w;if(!y){return y;}if(y.uniqueID&&y.nodeType&&y.nodeType!==9){w=y.uniqueID;}else{w=(typeof y==="string")?y:y._yuid;}if(!w){w=this.guid();if(!z){try{y._yuid=w;}catch(x){w=null;}}}return w;},destroy:function(){var w=this;if(w.Event){w.Event._unload();}delete c[w.id];delete w.Env;delete w.config;}};YUI.prototype=p;for(b in p){if(p.hasOwnProperty(b)){YUI[b]=p[b];}}YUI._init();if(f){m(window,"load",s);}else{s();}YUI.Env.add=m;YUI.Env.remove=u;if(typeof exports=="object"){exports.YUI=YUI;}}());YUI.add("yui-base",function(b){var i=b.Lang||(b.Lang={}),n=String.prototype,k=Object.prototype.toString,a={"undefined":"undefined","number":"number","boolean":"boolean","string":"string","[object Function]":"function","[object RegExp]":"regexp","[object Array]":"array","[object Date]":"date","[object Error]":"error"},c=/\{\s*([^|}]+?)\s*(?:\|([^}]*))?\s*\}/g,s=/^\s+|\s+$/g,e=b.config.win,o=e&&!!(e.MooTools||e.Prototype);i.isArray=(!o&&Array.isArray)||function(w){return i.type(w)==="array";};i.isBoolean=function(w){return typeof w==="boolean";};i.isFunction=function(w){return i.type(w)==="function";};i.isDate=function(w){return i.type(w)==="date"&&w.toString()!=="Invalid Date"&&!isNaN(w);};i.isNull=function(w){return w===null;};i.isNumber=function(w){return typeof w==="number"&&isFinite(w);};i.isObject=function(y,x){var w=typeof y;return(y&&(w==="object"||(!x&&(w==="function"||i.isFunction(y)))))||false;};i.isString=function(w){return typeof w==="string";};i.isUndefined=function(w){return typeof w==="undefined";};i.trim=n.trim?function(w){return w&&w.trim?w.trim():w;}:function(w){try{return w.replace(s,"");}catch(x){return w;}};i.trimLeft=n.trimLeft?function(w){return w.trimLeft();}:function(w){return w.replace(/^\s+/,"");};i.trimRight=n.trimRight?function(w){return w.trimRight();}:function(w){return w.replace(/\s+$/,"");};i.isValue=function(x){var w=i.type(x);switch(w){case"number":return isFinite(x);case"null":case"undefined":return false;default:return !!w;}};i.type=function(w){return a[typeof w]||a[k.call(w)]||(w?"object":"null");};i.sub=function(w,x){return w.replace?w.replace(c,function(y,z){return i.isUndefined(x[z])?y:x[z];}):w;};i.now=Date.now||function(){return new Date().getTime();};var f=b.Lang,r=Array.prototype,p=Object.prototype.hasOwnProperty;function j(y,B,A){var x,w;B||(B=0);if(A||j.test(y)){try{return r.slice.call(y,B);}catch(z){w=[];for(x=y.length;B<x;++B){w.push(y[B]);}return w;}}return[y];}b.Array=j;j.dedupe=function(B){var A={},y=[],x,z,w;for(x=0,w=B.length;x<w;++x){z=B[x];if(!p.call(A,z)){A[z]=1;y.push(z);}}return y;};j.each=j.forEach=r.forEach?function(y,w,x){r.forEach.call(y||[],w,x||b);return b;}:function(A,y,z){for(var x=0,w=(A&&A.length)||0;x<w;++x){if(x in A){y.call(z||b,A[x],x,A);}}return b;};j.hash=function(z,x){var A={},B=(x&&x.length)||0,y,w;for(y=0,w=z.length;y<w;++y){if(y in z){A[z[y]]=B>y&&y in x?x[y]:true;}}return A;};j.indexOf=r.indexOf?function(x,w){return r.indexOf.call(x,w);}:function(z,y){for(var x=0,w=z.length;x<w;++x){if(x in z&&z[x]===y){return x;}}return -1;};j.numericSort=function(x,w){return x-w;};j.some=r.some?function(y,w,x){return r.some.call(y,w,x);}:function(A,y,z){for(var x=0,w=A.length;x<w;++x){if(x in A&&y.call(z,A[x],x,A)){return true;}}return false;};j.test=function(y){var w=0;if(f.isArray(y)){w=1;}else{if(f.isObject(y)){try{if("length" in y&&!y.tagName&&!y.alert&&!y.apply){w=2;
}}catch(x){}}}return w;};function u(){this._init();this.add.apply(this,arguments);}u.prototype={_init:function(){this._q=[];},next:function(){return this._q.shift();},last:function(){return this._q.pop();},add:function(){this._q.push.apply(this._q,arguments);return this;},size:function(){return this._q.length;}};b.Queue=u;YUI.Env._loaderQueue=YUI.Env._loaderQueue||new u();var m="__",p=Object.prototype.hasOwnProperty,l=b.Lang.isObject;b.cached=function(y,w,x){w||(w={});return function(z){var A=arguments.length>1?Array.prototype.join.call(arguments,m):String(z);if(!(A in w)||(x&&w[A]==x)){w[A]=y.apply(y,arguments);}return w[A];};};b.merge=function(){var y=arguments,z=0,x=y.length,w={};for(;z<x;++z){b.mix(w,y[z],true);}return w;};b.mix=function(w,x,D,y,A,E){var B,H,G,z,I,C,F;if(!w||!x){return w||b;}if(A){if(A===2){b.mix(w.prototype,x.prototype,D,y,0,E);}G=A===1||A===3?x.prototype:x;F=A===1||A===4?w.prototype:w;if(!G||!F){return w;}}else{G=x;F=w;}B=D&&!E;if(y){for(z=0,C=y.length;z<C;++z){I=y[z];if(!p.call(G,I)){continue;}H=B?false:I in F;if(E&&H&&l(F[I],true)&&l(G[I],true)){b.mix(F[I],G[I],D,null,0,E);}else{if(D||!H){F[I]=G[I];}}}}else{for(I in G){if(!p.call(G,I)){continue;}H=B?false:I in F;if(E&&H&&l(F[I],true)&&l(G[I],true)){b.mix(F[I],G[I],D,null,0,E);}else{if(D||!H){F[I]=G[I];}}}if(b.Object._hasEnumBug){b.mix(F,G,D,b.Object._forceEnum,A,E);}}return w;};var p=Object.prototype.hasOwnProperty,e=b.config.win,o=e&&!!(e.MooTools||e.Prototype),v,g=b.Object=(!o&&Object.create)?function(w){return Object.create(w);}:(function(){function w(){}return function(x){w.prototype=x;return new w();};}()),d=g._forceEnum=["hasOwnProperty","isPrototypeOf","propertyIsEnumerable","toString","toLocaleString","valueOf"],t=g._hasEnumBug=!{valueOf:0}.propertyIsEnumerable("valueOf"),q=g._hasProtoEnumBug=(function(){}).propertyIsEnumerable("prototype"),h=g.owns=function(x,w){return !!x&&p.call(x,w);};g.hasKey=h;g.keys=(!o&&Object.keys)||function(A){if(!b.Lang.isObject(A)){throw new TypeError("Object.keys called on a non-object");}var z=[],y,x,w;if(q&&typeof A==="function"){for(x in A){if(h(A,x)&&x!=="prototype"){z.push(x);}}}else{for(x in A){if(h(A,x)){z.push(x);}}}if(t){for(y=0,w=d.length;y<w;++y){x=d[y];if(h(A,x)){z.push(x);}}}return z;};g.values=function(A){var z=g.keys(A),y=0,w=z.length,x=[];for(;y<w;++y){x.push(A[z[y]]);}return x;};g.size=function(x){try{return g.keys(x).length;}catch(w){return 0;}};g.hasValue=function(x,w){return b.Array.indexOf(g.values(x),w)>-1;};g.each=function(z,x,A,y){var w;for(w in z){if(y||h(z,w)){x.call(A||b,z[w],w,z);}}return b;};g.some=function(z,x,A,y){var w;for(w in z){if(y||h(z,w)){if(x.call(A||b,z[w],w,z)){return true;}}}return false;};g.getValue=function(A,z){if(!b.Lang.isObject(A)){return v;}var x,y=b.Array(z),w=y.length;for(x=0;A!==v&&x<w;x++){A=A[y[x]];}return A;};g.setValue=function(C,A,B){var w,z=b.Array(A),y=z.length-1,x=C;if(y>=0){for(w=0;x!==v&&w<y;w++){x=x[z[w]];}if(x!==v){x[z[w]]=B;}else{return v;}}return C;};g.isEmpty=function(w){return !g.keys(w).length;};YUI.Env.parseUA=function(C){var B=function(F){var G=0;return parseFloat(F.replace(/\./g,function(){return(G++==1)?"":".";}));},E=b.config.win,w=E&&E.navigator,z={ie:0,opera:0,gecko:0,webkit:0,safari:0,chrome:0,mobile:null,air:0,ipad:0,iphone:0,ipod:0,ios:null,android:0,webos:0,caja:w&&w.cajaVersion,secure:false,os:null},x=C||w&&w.userAgent,D=E&&E.location,y=D&&D.href,A;z.userAgent=x;z.secure=y&&(y.toLowerCase().indexOf("https")===0);if(x){if((/windows|win32/i).test(x)){z.os="windows";}else{if((/macintosh/i).test(x)){z.os="macintosh";}else{if((/rhino/i).test(x)){z.os="rhino";}}}if((/KHTML/).test(x)){z.webkit=1;}A=x.match(/AppleWebKit\/([^\s]*)/);if(A&&A[1]){z.webkit=B(A[1]);z.safari=z.webkit;if(/ Mobile\//.test(x)){z.mobile="Apple";A=x.match(/OS ([^\s]*)/);if(A&&A[1]){A=B(A[1].replace("_","."));}z.ios=A;z.ipad=z.ipod=z.iphone=0;A=x.match(/iPad|iPod|iPhone/);if(A&&A[0]){z[A[0].toLowerCase()]=z.ios;}}else{A=x.match(/NokiaN[^\/]*|webOS\/\d\.\d/);if(A){z.mobile=A[0];}if(/webOS/.test(x)){z.mobile="WebOS";A=x.match(/webOS\/([^\s]*);/);if(A&&A[1]){z.webos=B(A[1]);}}if(/ Android/.test(x)){if(/Mobile/.test(x)){z.mobile="Android";}A=x.match(/Android ([^\s]*);/);if(A&&A[1]){z.android=B(A[1]);}}}A=x.match(/Chrome\/([^\s]*)/);if(A&&A[1]){z.chrome=B(A[1]);z.safari=0;}else{A=x.match(/AdobeAIR\/([^\s]*)/);if(A){z.air=A[0];}}}if(!z.webkit){A=x.match(/Opera[\s\/]([^\s]*)/);if(A&&A[1]){z.opera=B(A[1]);A=x.match(/Version\/([^\s]*)/);if(A&&A[1]){z.opera=B(A[1]);}A=x.match(/Opera Mini[^;]*/);if(A){z.mobile=A[0];}}else{A=x.match(/MSIE\s([^;]*)/);if(A&&A[1]){z.ie=B(A[1]);}else{A=x.match(/Gecko\/([^\s]*)/);if(A){z.gecko=1;A=x.match(/rv:([^\s\)]*)/);if(A&&A[1]){z.gecko=B(A[1]);}}}}}}if(!C){YUI.Env.UA=z;}return z;};b.UA=YUI.Env.UA||YUI.Env.parseUA();YUI.Env.aliases={"anim":["anim-base","anim-color","anim-curve","anim-easing","anim-node-plugin","anim-scroll","anim-xy"],"app":["controller","model","model-list","view"],"attribute":["attribute-base","attribute-complex"],"autocomplete":["autocomplete-base","autocomplete-sources","autocomplete-list","autocomplete-plugin"],"base":["base-base","base-pluginhost","base-build"],"cache":["cache-base","cache-offline","cache-plugin"],"collection":["array-extras","arraylist","arraylist-add","arraylist-filter","array-invoke"],"dataschema":["dataschema-base","dataschema-json","dataschema-xml","dataschema-array","dataschema-text"],"datasource":["datasource-local","datasource-io","datasource-get","datasource-function","datasource-cache","datasource-jsonschema","datasource-xmlschema","datasource-arrayschema","datasource-textschema","datasource-polling"],"datatable":["datatable-base","datatable-datasource","datatable-sort","datatable-scroll"],"datatype":["datatype-number","datatype-date","datatype-xml"],"datatype-date":["datatype-date-parse","datatype-date-format"],"datatype-number":["datatype-number-parse","datatype-number-format"],"datatype-xml":["datatype-xml-parse","datatype-xml-format"],"dd":["dd-ddm-base","dd-ddm","dd-ddm-drop","dd-drag","dd-proxy","dd-constrain","dd-drop","dd-scroll","dd-delegate"],"dom":["dom-base","dom-screen","dom-style","selector-native","selector"],"editor":["frame","selection","exec-command","editor-base","editor-para","editor-br","editor-bidi","editor-tab","createlink-base"],"event":["event-base","event-delegate","event-synthetic","event-mousewheel","event-mouseenter","event-key","event-focus","event-resize","event-hover","event-outside"],"event-custom":["event-custom-base","event-custom-complex"],"event-gestures":["event-flick","event-move"],"highlight":["highlight-base","highlight-accentfold"],"history":["history-base","history-hash","history-hash-ie","history-html5"],"io":["io-base","io-xdr","io-form","io-upload-iframe","io-queue"],"json":["json-parse","json-stringify"],"loader":["loader-base","loader-rollup","loader-yui3"],"node":["node-base","node-event-delegate","node-pluginhost","node-screen","node-style"],"pluginhost":["pluginhost-base","pluginhost-config"],"querystring":["querystring-parse","querystring-stringify"],"recordset":["recordset-base","recordset-sort","recordset-filter","recordset-indexer"],"resize":["resize-base","resize-proxy","resize-constrain"],"slider":["slider-base","slider-value-range","clickable-rail","range-slider"],"text":["text-accentfold","text-wordbreak"],"widget":["widget-base","widget-htmlparser","widget-uievents","widget-skin"]};
},"3.4.1");YUI.add("get",function(e){var B=e.UA,p=e.Lang,b="text/javascript",v="text/css",I="stylesheet",s="script",q="autopurge",A="utf-8",w="link",C="async",h=true,l={script:h,css:!(B.webkit||B.gecko)},z={},r=0,g,u=function(J){var K=J.timer;if(K){clearTimeout(K);J.timer=null;}},m=function(M,J,P,N){var K=N||e.config.win,O=K.document,Q=O.createElement(M),L;if(P){e.mix(J,P);}for(L in J){if(J[L]&&J.hasOwnProperty(L)){Q.setAttribute(L,J[L]);}}return Q;},k=function(K,L,J){return m(w,{id:e.guid(),type:v,rel:I,href:K},J,L);},E=function(K,L,J){return m(s,{id:e.guid(),type:b,src:K},J,L);},a=function(K,L,J){return{tId:K.tId,win:K.win,data:K.data,nodes:K.nodes,msg:L,statusText:J,purge:function(){d(this.tId);}};},o=function(N,M,J){var L=z[N],K=L&&L.onEnd;L.finished=true;if(K){K.call(L.context,a(L,M,J));}},F=function(M,L){var K=z[M],J=K.onFailure;u(K);if(J){J.call(K.context,a(K,L));}o(M,L,"failure");},y=function(J){F(J,"transaction "+J+" was aborted");},x=function(L){var J=z[L],K=J.onSuccess;u(J);if(J.aborted){y(L);}else{if(K){K.call(J.context,a(J));}o(L,undefined,"OK");}},H=function(J,M){var K=z[M],L=(p.isString(J))?K.win.document.getElementById(J):J;if(!L){F(M,"target node not found: "+J);}return L;},d=function(O){var K,R,S,T,L,Q,P,N,M,J=z[O];if(J){K=J.nodes;M=K.length;for(N=0;N<M;N++){L=K[N];S=L.parentNode;if(L.clearAttributes){L.clearAttributes();}else{for(Q in L){if(L.hasOwnProperty(Q)){delete L[Q];}}}S.removeChild(L);}}J.nodes=[];},t=function(N,J){var K=z[N],L=K.onProgress,M;if(L){M=a(K);M.url=J;L.call(K.context,M);}},D=function(L){var J=z[L],K=J.onTimeout;if(K){K.call(J.context,a(J));}o(L,"timeout","timeout");},f=function(M,J){var L=z[M],K=(L&&!L.async);if(!L){return;}if(K){u(L);}t(M,J);if(!L.finished){if(L.aborted){y(M);}else{if((--L.remaining)===0){x(M);}else{if(K){i(M);}}}}},c=function(K,M,L,J){if(B.ie){M.onreadystatechange=function(){var N=this.readyState;if("loaded"===N||"complete"===N){M.onreadystatechange=null;f(L,J);}};}else{if(B.webkit){if(K===s){M.addEventListener("load",function(){f(L,J);},false);}}else{M.onload=function(){f(L,J);};M.onerror=function(N){F(L,N+": "+J);};}}},G=function(L,P,O){var M=z[P],N=O.document,J=M.insertBefore||N.getElementsByTagName("base")[0],K;if(J){K=H(J,P);if(K){K.parentNode.insertBefore(L,K);}}else{N.getElementsByTagName("head")[0].appendChild(L);}},i=function(Q){var O=z[Q],L=O.type,K=O.attributes,P=O.win,N=O.timeout,M,J;if(O.url.length>0){J=O.url.shift();if(N&&!O.timer){O.timer=setTimeout(function(){D(Q);},N);}if(L===s){M=E(J,P,K);}else{M=k(J,P,K);}O.nodes.push(M);c(L,M,Q,J);G(M,Q,P);if(!l[L]){f(Q,J);}if(O.async){i(Q);}}},n=function(){if(g){return;}g=true;var J,K;for(J in z){if(z.hasOwnProperty(J)){K=z[J];if(K.autopurge&&K.finished){d(K.tId);delete z[J];}}}g=false;},j=function(K,J,L){L=L||{};var O="q"+(r++),N=L.purgethreshold||e.Get.PURGE_THRESH,M;if(r%N===0){n();}M=z[O]=e.merge(L);M.tId=O;M.type=K;M.url=J;M.finished=false;M.nodes=[];M.win=M.win||e.config.win;M.context=M.context||M;M.autopurge=(q in M)?M.autopurge:(K===s)?true:false;M.attributes=M.attributes||{};M.attributes.charset=L.charset||M.attributes.charset||A;if(C in M&&K===s){M.attributes.async=M.async;}M.url=(p.isString(M.url))?[M.url]:M.url;if(!M.url[0]){M.url.shift();}M.remaining=M.url.length;i(O);return{tId:O};};e.Get={PURGE_THRESH:20,abort:function(K){var L=(p.isString(K))?K:K.tId,J=z[L];if(J){J.aborted=true;}},script:function(J,K){return j(s,J,K);},css:function(J,K){return j("css",J,K);}};},"3.4.1",{requires:["yui-base"]});YUI.add("features",function(b){var c={};b.mix(b.namespace("Features"),{tests:c,add:function(d,e,f){c[d]=c[d]||{};c[d][e]=f;},all:function(e,f){var g=c[e],d=[];if(g){b.Object.each(g,function(i,h){d.push(h+":"+(b.Features.test(e,h,f)?1:0));});}return(d.length)?d.join(";"):"";},test:function(e,g,f){f=f||[];var d,i,k,j=c[e],h=j&&j[g];if(!h){}else{d=h.result;if(b.Lang.isUndefined(d)){i=h.ua;if(i){d=(b.UA[i]);}k=h.test;if(k&&((!i)||d)){d=k.apply(b,f);}h.result=d;}}return d;}});var a=b.Features.add;a("load","0",{"name":"graphics-canvas-default","test":function(f){var e=f.config.doc,d=e&&e.createElement("canvas");return(e&&!e.implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#BasicStructure","1.1")&&(d&&d.getContext&&d.getContext("2d")));},"trigger":"graphics"});a("load","1",{"name":"autocomplete-list-keys","test":function(d){return !(d.UA.ios||d.UA.android);},"trigger":"autocomplete-list"});a("load","2",{"name":"graphics-svg","test":function(e){var d=e.config.doc;return(d&&d.implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#BasicStructure","1.1"));},"trigger":"graphics"});a("load","3",{"name":"history-hash-ie","test":function(e){var d=e.config.doc&&e.config.doc.documentMode;return e.UA.ie&&(!("onhashchange" in e.config.win)||!d||d<8);},"trigger":"history-hash"});a("load","4",{"name":"graphics-vml-default","test":function(f){var e=f.config.doc,d=e&&e.createElement("canvas");return(e&&!e.implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#BasicStructure","1.1")&&(!d||!d.getContext||!d.getContext("2d")));},"trigger":"graphics"});a("load","5",{"name":"graphics-svg-default","test":function(e){var d=e.config.doc;return(d&&d.implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#BasicStructure","1.1"));},"trigger":"graphics"});a("load","6",{"name":"widget-base-ie","trigger":"widget-base","ua":"ie"});a("load","7",{"name":"transition-timer","test":function(g){var f=g.config.doc,e=(f)?f.documentElement:null,d=true;if(e&&e.style){d=!("MozTransition" in e.style||"WebkitTransition" in e.style);}return d;},"trigger":"transition"});a("load","8",{"name":"dom-style-ie","test":function(j){var h=j.Features.test,i=j.Features.add,f=j.config.win,g=j.config.doc,d="documentElement",e=false;i("style","computedStyle",{test:function(){return f&&"getComputedStyle" in f;}});i("style","opacity",{test:function(){return g&&"opacity" in g[d].style;}});e=(!h("style","opacity")&&!h("style","computedStyle"));return e;},"trigger":"dom-style"});a("load","9",{"name":"selector-css2","test":function(f){var e=f.config.doc,d=e&&!("querySelectorAll" in e);
return d;},"trigger":"selector"});a("load","10",{"name":"event-base-ie","test":function(e){var d=e.config.doc&&e.config.doc.implementation;return(d&&(!d.hasFeature("Events","2.0")));},"trigger":"node-base"});a("load","11",{"name":"dd-gestures","test":function(d){return(d.config.win&&("ontouchstart" in d.config.win&&!d.UA.chrome));},"trigger":"dd-drag"});a("load","12",{"name":"scrollview-base-ie","trigger":"scrollview-base","ua":"ie"});a("load","13",{"name":"graphics-canvas","test":function(f){var e=f.config.doc,d=e&&e.createElement("canvas");return(e&&!e.implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#BasicStructure","1.1")&&(d&&d.getContext&&d.getContext("2d")));},"trigger":"graphics"});a("load","14",{"name":"graphics-vml","test":function(f){var e=f.config.doc,d=e&&e.createElement("canvas");return(e&&!e.implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#BasicStructure","1.1")&&(!d||!d.getContext||!d.getContext("2d")));},"trigger":"graphics"});},"3.4.1",{requires:["yui-base"]});YUI.add("intl-base",function(b){var a=/[, ]/;b.mix(b.namespace("Intl"),{lookupBestLang:function(g,h){var f,j,c,e;function d(l){var k;for(k=0;k<h.length;k+=1){if(l.toLowerCase()===h[k].toLowerCase()){return h[k];}}}if(b.Lang.isString(g)){g=g.split(a);}for(f=0;f<g.length;f+=1){j=g[f];if(!j||j==="*"){continue;}while(j.length>0){c=d(j);if(c){return c;}else{e=j.lastIndexOf("-");if(e>=0){j=j.substring(0,e);if(e>=2&&j.charAt(e-2)==="-"){j=j.substring(0,e-2);}}else{break;}}}}return"";}});},"3.4.1",{requires:["yui-base"]});YUI.add("yui-log",function(d){var c=d,e="yui:log",a="undefined",b={debug:1,info:1,warn:1,error:1};c.log=function(j,s,g,q){var l,p,n,k,o,i=c,r=i.config,h=(i.fire)?i:YUI.Env.globalEvents;if(r.debug){if(g){p=r.logExclude;n=r.logInclude;if(n&&!(g in n)){l=1;}else{if(n&&(g in n)){l=!n[g];}else{if(p&&(g in p)){l=p[g];}}}}if(!l){if(r.useBrowserConsole){k=(g)?g+": "+j:j;if(i.Lang.isFunction(r.logFn)){r.logFn.call(i,j,s,g);}else{if(typeof console!=a&&console.log){o=(s&&console[s]&&(s in b))?s:"log";console[o](k);}else{if(typeof opera!=a){opera.postError(k);}}}}if(h&&!q){if(h==i&&(!h.getEvent(e))){h.publish(e,{broadcast:2});}h.fire(e,{msg:j,cat:s,src:g});}}}return i;};c.message=function(){return c.log.apply(c,arguments);};},"3.4.1",{requires:["yui-base"]});YUI.add("yui-later",function(b){var a=[];b.later=function(j,f,k,g,h){j=j||0;g=(!b.Lang.isUndefined(g))?b.Array(g):a;f=f||b.config.win||b;var i=false,c=(f&&b.Lang.isString(k))?f[k]:k,d=function(){if(!i){if(!c.apply){c(g[0],g[1],g[2],g[3]);}else{c.apply(f,g||a);}}},e=(h)?setInterval(d,j):setTimeout(d,j);return{id:e,interval:h,cancel:function(){i=true;if(this.interval){clearInterval(e);}else{clearTimeout(e);}}};};b.Lang.later=b.later;},"3.4.1",{requires:["yui-base"]});YUI.add("loader-base",function(d){if(!YUI.Env[d.version]){(function(){var I=d.version,E="/build/",F=I+E,D=d.Env.base,A="gallery-2011.09.14-20-40",C="2in3",B="4",z="2.9.0",G=D+"combo?",H={version:I,root:F,base:d.Env.base,comboBase:G,skin:{defaultSkin:"sam",base:"assets/skins/",path:"skin.css",after:["cssreset","cssfonts","cssgrids","cssbase","cssreset-context","cssfonts-context"]},groups:{},patterns:{}},y=H.groups,x=function(K,L){var J=C+"."+(K||B)+"/"+(L||z)+E;y.yui2.base=D+J;y.yui2.root=J;},w=function(J){var K=(J||A)+E;y.gallery.base=D+K;y.gallery.root=K;};y[I]={};y.gallery={ext:false,combine:true,comboBase:G,update:w,patterns:{"gallery-":{},"lang/gallery-":{},"gallerycss-":{type:"css"}}};y.yui2={combine:true,ext:false,comboBase:G,update:x,patterns:{"yui2-":{configFn:function(J){if(/-skin|reset|fonts|grids|base/.test(J.name)){J.type="css";J.path=J.path.replace(/\.js/,".css");J.path=J.path.replace(/\/yui2-skin/,"/assets/skins/sam/yui2-skin");}}}}};w();x();YUI.Env[I]=H;}());}var f={},c=[],m=2048,a=YUI.Env,p=a._loaded,q="css",k="js",v="intl",s=d.version,u="",e=d.Object,r=e.each,j=d.Array,h=a._loaderQueue,t=a[s],b="skin-",i=d.Lang,n=a.mods,l,o,g=function(x,y,z,w){var A=x+"/"+y;if(!w){A+="-min";}A+="."+(z||q);return A;};if(YUI.Env.aliases){YUI.Env.aliases={};}d.Env.meta=t;d.Loader=function(A){var z=t.modules,x=this;l=t.md5;x.context=d;x.base=d.Env.meta.base+d.Env.meta.root;x.comboBase=d.Env.meta.comboBase;x.combine=A.base&&(A.base.indexOf(x.comboBase.substr(0,20))>-1);x.comboSep="&";x.maxURLLength=m;x.root=d.Env.meta.root;x.timeout=0;x.forceMap={};x.allowRollup=false;x.filters={};x.required={};x.patterns={};x.moduleInfo={};x.groups=d.merge(d.Env.meta.groups);x.skin=d.merge(d.Env.meta.skin);x.conditions={};x.config=A;x._internal=true;o=a._renderedMods;if(o){r(o,function y(C,B){x.moduleInfo[B]=C;});o=a._conditions;r(o,function w(C,B){x.conditions[B]=C;});}else{r(z,x.addModule,x);}if(!a._renderedMods){a._renderedMods=x.moduleInfo;a._conditions=x.conditions;}x._inspectPage();x._internal=false;x._config(A);x.testresults=null;if(d.config.tests){x.testresults=d.config.tests;}x.sorted=[];x.loaded=p[s];x.dirty=true;x.inserted={};x.skipped={};x.tested={};};d.Loader.prototype={FILTER_DEFS:{RAW:{"searchExp":"-min\\.js","replaceStr":".js"},DEBUG:{"searchExp":"-min\\.js","replaceStr":"-debug.js"}},_inspectPage:function(){r(n,function(y,x){if(y.details){var w=this.moduleInfo[x],A=y.details.requires,z=w&&w.requires;if(w){if(!w._inspected&&A&&z.length!=A.length){delete w.expanded;}}else{w=this.addModule(y.details,x);}w._inspected=true;}},this);},_requires:function(C,B){var y,A,D,E,w=this.moduleInfo,x=w[C],z=w[B];if(!x||!z){return false;}A=x.expanded_map;D=x.after_map;if(D&&(B in D)){return true;}D=z.after_map;if(D&&(C in D)){return false;}E=w[B]&&w[B].supersedes;if(E){for(y=0;y<E.length;y++){if(this._requires(C,E[y])){return true;}}}E=w[C]&&w[C].supersedes;if(E){for(y=0;y<E.length;y++){if(this._requires(B,E[y])){return false;}}}if(A&&(B in A)){return true;}if(x.ext&&x.type==q&&!z.ext&&z.type==q){return true;}return false;},_config:function(C){var y,x,B,z,A,D,w=this;if(C){for(y in C){if(C.hasOwnProperty(y)){B=C[y];if(y=="require"){w.require(B);}else{if(y=="skin"){d.mix(w.skin,C[y],true);
}else{if(y=="groups"){for(x in B){if(B.hasOwnProperty(x)){D=x;A=B[x];w.addGroup(A,D);}}}else{if(y=="modules"){r(B,w.addModule,w);}else{if(y=="gallery"){this.groups.gallery.update(B);}else{if(y=="yui2"||y=="2in3"){this.groups.yui2.update(C["2in3"],C.yui2);}else{if(y=="maxURLLength"){w[y]=Math.min(m,B);}else{w[y]=B;}}}}}}}}}}z=w.filter;if(i.isString(z)){z=z.toUpperCase();w.filterName=z;w.filter=w.FILTER_DEFS[z];if(z=="DEBUG"){w.require("yui-log","dump");}}if(w.lang){w.require("intl-base","intl");}},formatSkin:function(y,w){var x=b+y;if(w){x=x+"-"+w;}return x;},_addSkin:function(F,D,E){var C,B,x,w,A=this.moduleInfo,y=this.skin,z=A[D]&&A[D].ext;if(D){x=this.formatSkin(F,D);if(!A[x]){C=A[D];B=C.pkg||D;w={name:x,group:C.group,type:"css",after:y.after,path:(E||B)+"/"+y.base+F+"/"+D+".css",ext:z};if(C.base){w.base=C.base;}if(C.configFn){w.configFn=C.configFn;}this.addModule(w,x);}}return x;},addGroup:function(z,x){var y=z.modules,w=this;x=x||z.name;z.name=x;w.groups[x]=z;if(z.patterns){r(z.patterns,function(B,A){B.group=x;w.patterns[A]=B;});}if(y){r(y,function(B,A){B.group=x;w.addModule(B,A);},w);}},addModule:function(M,T){T=T||M.name;if(this.moduleInfo[T]&&this.moduleInfo[T].temp){M=d.merge(this.moduleInfo[T],M);}M.name=T;if(!M||!M.name){return null;}if(!M.type){M.type=k;}if(!M.path&&!M.fullpath){M.path=g(T,T,M.type);}M.supersedes=M.supersedes||M.use;M.ext=("ext" in M)?M.ext:(this._internal)?false:true;M.requires=this.filterRequires(M.requires)||[];var Q=M.submodules,P,N,H,w,I,y,L,x,O,J,F,C,A,z,S,R,G,B,D,E=this.conditions,K;this.moduleInfo[T]=M;if(!M.langPack&&M.lang){J=j(M.lang);for(O=0;O<J.length;O++){S=J[O];F=this.getLangPackName(S,T);y=this.moduleInfo[F];if(!y){y=this._addLangPack(S,M,F);}}}if(Q){w=M.supersedes||[];N=0;for(P in Q){if(Q.hasOwnProperty(P)){I=Q[P];I.path=I.path||g(T,P,M.type);I.pkg=T;I.group=M.group;if(I.supersedes){w=w.concat(I.supersedes);}y=this.addModule(I,P);w.push(P);if(y.skinnable){M.skinnable=true;G=this.skin.overrides;if(G&&G[P]){for(O=0;O<G[P].length;O++){B=this._addSkin(G[P][O],P,T);w.push(B);}}B=this._addSkin(this.skin.defaultSkin,P,T);w.push(B);}if(I.lang&&I.lang.length){J=j(I.lang);for(O=0;O<J.length;O++){S=J[O];F=this.getLangPackName(S,T);C=this.getLangPackName(S,P);y=this.moduleInfo[F];if(!y){y=this._addLangPack(S,M,F);}A=A||j.hash(y.supersedes);if(!(C in A)){y.supersedes.push(C);}M.lang=M.lang||[];z=z||j.hash(M.lang);if(!(S in z)){M.lang.push(S);}F=this.getLangPackName(u,T);C=this.getLangPackName(u,P);y=this.moduleInfo[F];if(!y){y=this._addLangPack(S,M,F);}if(!(C in A)){y.supersedes.push(C);}}}N++;}}M.supersedes=j.dedupe(w);if(this.allowRollup){M.rollup=(N<4)?N:Math.min(N-1,4);}}L=M.plugins;if(L){for(P in L){if(L.hasOwnProperty(P)){x=L[P];x.pkg=T;x.path=x.path||g(T,P,M.type);x.requires=x.requires||[];x.group=M.group;this.addModule(x,P);if(M.skinnable){this._addSkin(this.skin.defaultSkin,P,T);}}}}if(M.condition){H=M.condition.trigger;if(YUI.Env.aliases[H]){H=YUI.Env.aliases[H];}if(!d.Lang.isArray(H)){H=[H];}for(P=0;P<H.length;P++){K=H[P];D=M.condition.when;E[K]=E[K]||{};E[K][T]=M.condition;if(D&&D!="after"){if(D=="instead"){M.supersedes=M.supersedes||[];M.supersedes.push(K);}else{}}else{M.after=M.after||[];M.after.push(K);}}}if(M.after){M.after_map=j.hash(M.after);}if(M.configFn){R=M.configFn(M);if(R===false){delete this.moduleInfo[T];M=null;}}return M;},require:function(x){var w=(typeof x==="string")?j(arguments):x;this.dirty=true;this.required=d.merge(this.required,j.hash(this.filterRequires(w)));this._explodeRollups();},_explodeRollups:function(){var x=this,w,y=x.required;if(!x.allowRollup){r(y,function(z,A){w=x.getModule(A);if(w&&w.use){j.each(w.use,function(B){w=x.getModule(B);if(w&&w.use){j.each(w.use,function(C){y[C]=true;});}else{y[B]=true;}});}});x.required=y;}},filterRequires:function(z){if(z){if(!d.Lang.isArray(z)){z=[z];}z=d.Array(z);var B=[],y,x,A,w;for(y=0;y<z.length;y++){x=this.getModule(z[y]);if(x&&x.use){for(A=0;A<x.use.length;A++){w=this.getModule(x.use[A]);if(w&&w.use){B=d.Array.dedupe([].concat(B,this.filterRequires(w.use)));}else{B.push(x.use[A]);}}}else{B.push(z[y]);}}z=B;}return z;},getRequires:function(S){if(!S||S._parsed){return c;}var M,H,L,D,C,U,A=this.testresults,V=S.name,B,I,T=n[V]&&n[V].details,O,J,w,E,P,F,z,Q,R,y,G=S.lang||S.intl,N=this.moduleInfo,K=d.Features&&d.Features.tests.load,x;if(S.temp&&T){P=S;S=this.addModule(T,V);S.group=P.group;S.pkg=P.pkg;delete S.expanded;}if(S.expanded&&(!this.lang||S.langCache===this.lang)){return S.expanded;}O=[];x={};E=this.filterRequires(S.requires);if(S.lang){O.unshift("intl");E.unshift("intl");G=true;}F=this.filterRequires(S.optional);S._parsed=true;S.langCache=this.lang;for(M=0;M<E.length;M++){if(!x[E[M]]){O.push(E[M]);x[E[M]]=true;H=this.getModule(E[M]);if(H){D=this.getRequires(H);G=G||(H.expanded_map&&(v in H.expanded_map));for(L=0;L<D.length;L++){O.push(D[L]);}}}}E=this.filterRequires(S.supersedes);if(E){for(M=0;M<E.length;M++){if(!x[E[M]]){if(S.submodules){O.push(E[M]);}x[E[M]]=true;H=this.getModule(E[M]);if(H){D=this.getRequires(H);G=G||(H.expanded_map&&(v in H.expanded_map));for(L=0;L<D.length;L++){O.push(D[L]);}}}}}if(F&&this.loadOptional){for(M=0;M<F.length;M++){if(!x[F[M]]){O.push(F[M]);x[F[M]]=true;H=N[F[M]];if(H){D=this.getRequires(H);G=G||(H.expanded_map&&(v in H.expanded_map));for(L=0;L<D.length;L++){O.push(D[L]);}}}}}B=this.conditions[V];if(B){if(A&&K){r(A,function(W,Y){var X=K[Y].name;if(!x[X]&&K[Y].trigger==V){if(W&&K[Y]){x[X]=true;O.push(X);}}});}else{r(B,function(X,W){if(!x[W]){I=X&&((X.ua&&d.UA[X.ua])||(X.test&&X.test(d,E)));if(I){x[W]=true;O.push(W);H=this.getModule(W);if(H){D=this.getRequires(H);for(L=0;L<D.length;L++){O.push(D[L]);}}}}},this);}}if(S.skinnable){Q=this.skin.overrides;r(YUI.Env.aliases,function(W,X){if(d.Array.indexOf(W,V)>-1){R=X;}});if(Q&&(Q[V]||(R&&Q[R]))){y=V;if(Q[R]){y=R;}for(M=0;M<Q[y].length;M++){z=this._addSkin(Q[y][M],V);O.push(z);}}else{z=this._addSkin(this.skin.defaultSkin,V);O.push(z);}}S._parsed=false;if(G){if(S.lang&&!S.langPack&&d.Intl){U=d.Intl.lookupBestLang(this.lang||u,S.lang);
C=this.getLangPackName(U,V);if(C){O.unshift(C);}}O.unshift(v);}S.expanded_map=j.hash(O);S.expanded=e.keys(S.expanded_map);return S.expanded;},getProvides:function(x){var w=this.getModule(x),z,y;if(!w){return f;}if(w&&!w.provides){z={};y=w.supersedes;if(y){j.each(y,function(A){d.mix(z,this.getProvides(A));},this);}z[x]=true;w.provides=z;}return w.provides;},calculate:function(x,w){if(x||w||this.dirty){if(x){this._config(x);}if(!this._init){this._setup();}this._explode();if(this.allowRollup){this._rollup();}else{this._explodeRollups();}this._reduce();this._sort();}},_addLangPack:function(B,w,A){var y=w.name,x,z=this.moduleInfo[A];if(!z){x=g((w.pkg||y),A,k,true);this.addModule({path:x,intl:true,langPack:true,ext:w.ext,group:w.group,supersedes:[]},A);if(B){d.Env.lang=d.Env.lang||{};d.Env.lang[B]=d.Env.lang[B]||{};d.Env.lang[B][y]=true;}}return this.moduleInfo[A];},_setup:function(){var C=this.moduleInfo,z,A,y,w,x,B;for(z in C){if(C.hasOwnProperty(z)){w=C[z];if(w){w.requires=j.dedupe(w.requires);if(w.lang&&w.lang.length){B=this.getLangPackName(u,z);this._addLangPack(null,w,B);}}}}x={};if(!this.ignoreRegistered){d.mix(x,a.mods);}if(this.ignore){d.mix(x,j.hash(this.ignore));}for(y in x){if(x.hasOwnProperty(y)){d.mix(x,this.getProvides(y));}}if(this.force){for(A=0;A<this.force.length;A++){if(this.force[A] in x){delete x[this.force[A]];}}}d.mix(this.loaded,x);this._init=true;},getLangPackName:function(x,w){return("lang/"+w+((x)?"_"+x:""));},_explode:function(){var A=this.required,w,z,x={},y=this;y.dirty=false;y._explodeRollups();A=y.required;r(A,function(B,C){if(!x[C]){x[C]=true;w=y.getModule(C);if(w){var D=w.expound;if(D){A[D]=y.getModule(D);z=y.getRequires(A[D]);d.mix(A,j.hash(z));}z=y.getRequires(w);d.mix(A,j.hash(z));}}});},getModule:function(B){if(!B){return null;}var A,z,x,w=this.moduleInfo[B],y=this.patterns;if(!w){for(x in y){if(y.hasOwnProperty(x)){A=y[x];if(B.indexOf(x)>-1){z=A;break;}}}if(z){if(A.action){A.action.call(this,B,x);}else{w=this.addModule(d.merge(z),B);w.temp=true;}}}return w;},_rollup:function(){},_reduce:function(B){B=B||this.required;var y,x,A,w,z=this.loadType,C=this.ignore?j.hash(this.ignore):false;for(y in B){if(B.hasOwnProperty(y)){w=this.getModule(y);if(((this.loaded[y]||n[y])&&!this.forceMap[y]&&!this.ignoreRegistered)||(z&&w&&w.type!=z)){delete B[y];}if(C&&C[y]){delete B[y];}A=w&&w.supersedes;if(A){for(x=0;x<A.length;x++){if(A[x] in B){delete B[A[x]];}}}}}return B;},_finish:function(y,x){h.running=false;var w=this.onEnd;if(w){w.call(this.context,{msg:y,data:this.data,success:x});}this._continue();},_onSuccess:function(){var y=this,x=d.merge(y.skipped),A,w=[],z=y.requireRegistration,C,B;r(x,function(D){delete y.inserted[D];});y.skipped={};r(y.inserted,function(E,D){var F=y.getModule(D);if(F&&z&&F.type==k&&!(D in YUI.Env.mods)){w.push(D);}else{d.mix(y.loaded,y.getProvides(D));}});A=y.onSuccess;B=(w.length)?"notregistered":"success";C=!(w.length);if(A){A.call(y.context,{msg:B,data:y.data,success:C,failed:w,skipped:x});}y._finish(B,C);},_onFailure:function(y){var w=this.onFailure,x="failure: "+y.msg;if(w){w.call(this.context,{msg:x,data:this.data,success:false});}this._finish(x,false);},_onTimeout:function(){var w=this.onTimeout;if(w){w.call(this.context,{msg:"timeout",data:this.data,success:false});}this._finish("timeout",false);},_sort:function(){var F=e.keys(this.required),B={},w=0,y,E,D,A,z,C,x;for(;;){y=F.length;C=false;for(A=w;A<y;A++){E=F[A];for(z=A+1;z<y;z++){x=E+F[z];if(!B[x]&&this._requires(E,F[z])){D=F.splice(z,1);F.splice(A,0,D[0]);B[x]=true;C=true;break;}}if(C){break;}else{w++;}}if(!C){break;}}this.sorted=F;},partial:function(w,y,x){this.sorted=w;this.insert(y,x,true);},_insert:function(z,A,y,x){if(z){this._config(z);}if(!x){this.calculate(A);}this.loadType=y;if(!y){var w=this;this._internalCallback=function(){var C=w.onCSS,E,D,B;if(this.insertBefore&&d.UA.ie){E=d.config.doc.getElementById(this.insertBefore);D=E.parentNode;B=E.nextSibling;D.removeChild(E);if(B){D.insertBefore(E,B);}else{D.appendChild(E);}}if(C){C.call(w.context,d);}w._internalCallback=null;w._insert(null,null,k);};this._insert(null,null,q);return;}this._loading=true;this._combineComplete={};this.loadNext();},_continue:function(){if(!(h.running)&&h.size()>0){h.running=true;h.next()();}},insert:function(z,x,y){var w=this,A=d.merge(this);delete A.require;delete A.dirty;h.add(function(){w._insert(A,z,x,y);});this._continue();},loadNext:function(A){if(!this._loading){return;}var H,P,O,M,z,E,B,L,D,G,N,w,C,K,y,F,Q,R,J=this,x=J.loadType,S=function(T){J.loadNext(T.data);},I=function(V){J._combineComplete[x]=true;var U,T=F.length;for(U=0;U<T;U++){J.inserted[F[U]]=true;}S(V);};if(J.combine&&(!J._combineComplete[x])){F=[];J._combining=F;H=J.sorted;P=H.length;R=J.comboBase;z=R;Q=[];K={};for(O=0;O<P;O++){C=R;M=J.getModule(H[O]);G=M&&M.group;if(G){D=J.groups[G];if(!D.combine){M.combine=false;continue;}M.combine=true;if(D.comboBase){C=D.comboBase;}if("root" in D&&i.isValue(D.root)){M.root=D.root;}}K[C]=K[C]||[];K[C].push(M);}for(N in K){if(K.hasOwnProperty(N)){z=N;y=K[N];P=y.length;for(O=0;O<P;O++){M=y[O];if(M&&(M.type===x)&&(M.combine||!M.ext)){w=((i.isValue(M.root))?M.root:J.root)+M.path;w=J._filter(w,M.name);if((z!==N)&&(O<=(P-1))&&((w.length+z.length)>J.maxURLLength)){if(z.substr(z.length-1,1)===J.comboSep){z=z.substr(0,(z.length-1));}Q.push(J._filter(z));z=N;}z+=w;if(O<(P-1)){z+=J.comboSep;}F.push(M.name);}}if(F.length&&(z!=N)){if(z.substr(z.length-1,1)===J.comboSep){z=z.substr(0,(z.length-1));}Q.push(J._filter(z));}}}if(F.length){if(x===q){E=d.Get.css;L=J.cssAttributes;}else{E=d.Get.script;L=J.jsAttributes;}E(Q,{data:J._loading,onSuccess:I,onFailure:J._onFailure,onTimeout:J._onTimeout,insertBefore:J.insertBefore,charset:J.charset,attributes:L,timeout:J.timeout,autopurge:false,context:J});return;}else{J._combineComplete[x]=true;}}if(A){if(A!==J._loading){return;}J.inserted[A]=true;if(J.onProgress){J.onProgress.call(J.context,{name:A,data:J.data});}}H=J.sorted;P=H.length;for(O=0;O<P;O=O+1){if(H[O] in J.inserted){continue;
}if(H[O]===J._loading){return;}M=J.getModule(H[O]);if(!M){if(!J.skipped[H[O]]){B="Undefined module "+H[O]+" skipped";J.skipped[H[O]]=true;}continue;}D=(M.group&&J.groups[M.group])||f;if(!x||x===M.type){J._loading=H[O];if(M.type===q){E=d.Get.css;L=J.cssAttributes;}else{E=d.Get.script;L=J.jsAttributes;}z=(M.fullpath)?J._filter(M.fullpath,H[O]):J._url(M.path,H[O],D.base||M.base);E(z,{data:H[O],onSuccess:S,insertBefore:J.insertBefore,charset:J.charset,attributes:L,onFailure:J._onFailure,onTimeout:J._onTimeout,timeout:J.timeout,autopurge:false,context:J});return;}}J._loading=null;E=J._internalCallback;if(E){J._internalCallback=null;E.call(J);}else{J._onSuccess();}},_filter:function(y,x){var A=this.filter,w=x&&(x in this.filters),z=w&&this.filters[x],B=this.moduleInfo[x]?this.moduleInfo[x].group:null;if(B&&this.groups[B].filter){z=this.groups[B].filter;w=true;}if(y){if(w){A=(i.isString(z))?this.FILTER_DEFS[z.toUpperCase()]||null:z;}if(A){y=y.replace(new RegExp(A.searchExp,"g"),A.replaceStr);}}return y;},_url:function(y,w,x){return this._filter((x||this.base||"")+y,w);},resolve:function(A,C){var x=this,B,w,z,y={js:[],css:[]};if(A){x.calculate();}C=C||x.sorted;for(B=0;B<C.length;B++){w=x.getModule(C[B]);if(w){if(x.combine){z=x._filter((x.root+w.path),w.name,x.root);}else{z=x._filter(w.fullpath,w.name,"")||x._url(w.path,w.name);}y[w.type].push(z);}}if(x.combine){y.js=[x.comboBase+y.js.join(x.comboSep)];y.css=[x.comboBase+y.css.join(x.comboSep)];}return y;},hash:function(A,C){var x=this,B,w,z,y={js:{},css:{}};if(A){x.calculate();}C=C||x.sorted;for(B=0;B<C.length;B++){w=x.getModule(C[B]);if(w){z=x._filter(w.fullpath,w.name,"")||x._url(w.path,w.name);y[w.type][w.name]=z;}}return y;}};},"3.4.1",{requires:["get"]});YUI.add("loader-rollup",function(a){a.Loader.prototype._rollup=function(){var k,h,g,o,b=this.required,e,f=this.moduleInfo,d,l,n;if(this.dirty||!this.rollups){this.rollups={};for(k in f){if(f.hasOwnProperty(k)){g=this.getModule(k);if(g&&g.rollup){this.rollups[k]=g;}}}this.forceMap=(this.force)?a.Array.hash(this.force):{};}for(;;){d=false;for(k in this.rollups){if(this.rollups.hasOwnProperty(k)){if(!b[k]&&((!this.loaded[k])||this.forceMap[k])){g=this.getModule(k);o=g.supersedes||[];e=false;if(!g.rollup){continue;}l=0;for(h=0;h<o.length;h++){n=f[o[h]];if(this.loaded[o[h]]&&!this.forceMap[o[h]]){e=false;break;}else{if(b[o[h]]&&g.type==n.type){l++;e=(l>=g.rollup);if(e){break;}}}}if(e){b[k]=true;d=true;this.getRequires(g);}}}}if(!d){break;}}};},"3.4.1",{requires:["loader-base"]});YUI.add("loader-yui3",function(a){YUI.Env[a.version].modules=YUI.Env[a.version].modules||{"align-plugin":{"requires":["node-screen","node-pluginhost"]},"anim":{"use":["anim-base","anim-color","anim-curve","anim-easing","anim-node-plugin","anim-scroll","anim-xy"]},"anim-base":{"requires":["base-base","node-style"]},"anim-color":{"requires":["anim-base"]},"anim-curve":{"requires":["anim-xy"]},"anim-easing":{"requires":["anim-base"]},"anim-node-plugin":{"requires":["node-pluginhost","anim-base"]},"anim-scroll":{"requires":["anim-base"]},"anim-xy":{"requires":["anim-base","node-screen"]},"app":{"use":["controller","model","model-list","view"]},"array-extras":{"requires":["yui-base"]},"array-invoke":{"requires":["yui-base"]},"arraylist":{"requires":["yui-base"]},"arraylist-add":{"requires":["arraylist"]},"arraylist-filter":{"requires":["arraylist"]},"arraysort":{"requires":["yui-base"]},"async-queue":{"requires":["event-custom"]},"attribute":{"use":["attribute-base","attribute-complex"]},"attribute-base":{"requires":["event-custom"]},"attribute-complex":{"requires":["attribute-base"]},"autocomplete":{"use":["autocomplete-base","autocomplete-sources","autocomplete-list","autocomplete-plugin"]},"autocomplete-base":{"optional":["autocomplete-sources"],"requires":["array-extras","base-build","escape","event-valuechange","node-base"]},"autocomplete-filters":{"requires":["array-extras","text-wordbreak"]},"autocomplete-filters-accentfold":{"requires":["array-extras","text-accentfold","text-wordbreak"]},"autocomplete-highlighters":{"requires":["array-extras","highlight-base"]},"autocomplete-highlighters-accentfold":{"requires":["array-extras","highlight-accentfold"]},"autocomplete-list":{"after":["autocomplete-sources"],"lang":["en"],"requires":["autocomplete-base","event-resize","node-screen","selector-css3","shim-plugin","widget","widget-position","widget-position-align"],"skinnable":true},"autocomplete-list-keys":{"condition":{"name":"autocomplete-list-keys","test":function(b){return !(b.UA.ios||b.UA.android);},"trigger":"autocomplete-list"},"requires":["autocomplete-list","base-build"]},"autocomplete-plugin":{"requires":["autocomplete-list","node-pluginhost"]},"autocomplete-sources":{"optional":["io-base","json-parse","jsonp","yql"],"requires":["autocomplete-base"]},"base":{"use":["base-base","base-pluginhost","base-build"]},"base-base":{"after":["attribute-complex"],"requires":["attribute-base"]},"base-build":{"requires":["base-base"]},"base-pluginhost":{"requires":["base-base","pluginhost"]},"cache":{"use":["cache-base","cache-offline","cache-plugin"]},"cache-base":{"requires":["base"]},"cache-offline":{"requires":["cache-base","json"]},"cache-plugin":{"requires":["plugin","cache-base"]},"calendar":{"lang":["en","ja","ru"],"requires":["calendar-base","calendarnavigator"],"skinnable":true},"calendar-base":{"lang":["en","ja","ru"],"requires":["widget","substitute","datatype-date","datatype-date-math","cssgrids"],"skinnable":true},"calendarnavigator":{"requires":["plugin","classnamemanager","datatype-date","node","substitute"],"skinnable":true},"charts":{"requires":["dom","datatype-number","datatype-date","event-custom","event-mouseenter","widget","widget-position","widget-stack","graphics"]},"classnamemanager":{"requires":["yui-base"]},"clickable-rail":{"requires":["slider-base"]},"collection":{"use":["array-extras","arraylist","arraylist-add","arraylist-filter","array-invoke"]},"console":{"lang":["en","es","ja"],"requires":["yui-log","widget","substitute"],"skinnable":true},"console-filters":{"requires":["plugin","console"],"skinnable":true},"controller":{"optional":["querystring-parse"],"requires":["array-extras","base-build","history"]},"cookie":{"requires":["yui-base"]},"createlink-base":{"requires":["editor-base"]},"cssbase":{"after":["cssreset","cssfonts","cssgrids","cssreset-context","cssfonts-context","cssgrids-context"],"type":"css"},"cssbase-context":{"after":["cssreset","cssfonts","cssgrids","cssreset-context","cssfonts-context","cssgrids-context"],"type":"css"},"cssfonts":{"type":"css"},"cssfonts-context":{"type":"css"},"cssgrids":{"optional":["cssreset","cssfonts"],"type":"css"},"cssreset":{"type":"css"},"cssreset-context":{"type":"css"},"dataschema":{"use":["dataschema-base","dataschema-json","dataschema-xml","dataschema-array","dataschema-text"]},"dataschema-array":{"requires":["dataschema-base"]},"dataschema-base":{"requires":["base"]},"dataschema-json":{"requires":["dataschema-base","json"]},"dataschema-text":{"requires":["dataschema-base"]},"dataschema-xml":{"requires":["dataschema-base"]},"datasource":{"use":["datasource-local","datasource-io","datasource-get","datasource-function","datasource-cache","datasource-jsonschema","datasource-xmlschema","datasource-arrayschema","datasource-textschema","datasource-polling"]},"datasource-arrayschema":{"requires":["datasource-local","plugin","dataschema-array"]},"datasource-cache":{"requires":["datasource-local","plugin","cache-base"]},"datasource-function":{"requires":["datasource-local"]},"datasource-get":{"requires":["datasource-local","get"]},"datasource-io":{"requires":["datasource-local","io-base"]},"datasource-jsonschema":{"requires":["datasource-local","plugin","dataschema-json"]},"datasource-local":{"requires":["base"]},"datasource-polling":{"requires":["datasource-local"]},"datasource-textschema":{"requires":["datasource-local","plugin","dataschema-text"]},"datasource-xmlschema":{"requires":["datasource-local","plugin","dataschema-xml"]},"datatable":{"use":["datatable-base","datatable-datasource","datatable-sort","datatable-scroll"]},"datatable-base":{"requires":["recordset-base","widget","substitute","event-mouseenter"],"skinnable":true},"datatable-datasource":{"requires":["datatable-base","plugin","datasource-local"]},"datatable-scroll":{"requires":["datatable-base","plugin"]},"datatable-sort":{"lang":["en"],"requires":["datatable-base","plugin","recordset-sort"]},"datatype":{"use":["datatype-number","datatype-date","datatype-xml"]},"datatype-date":{"supersedes":["datatype-date-format"],"use":["datatype-date-parse","datatype-date-format"]},"datatype-date-format":{"lang":["ar","ar-JO","ca","ca-ES","da","da-DK","de","de-AT","de-DE","el","el-GR","en","en-AU","en-CA","en-GB","en-IE","en-IN","en-JO","en-MY","en-NZ","en-PH","en-SG","en-US","es","es-AR","es-BO","es-CL","es-CO","es-EC","es-ES","es-MX","es-PE","es-PY","es-US","es-UY","es-VE","fi","fi-FI","fr","fr-BE","fr-CA","fr-FR","hi","hi-IN","id","id-ID","it","it-IT","ja","ja-JP","ko","ko-KR","ms","ms-MY","nb","nb-NO","nl","nl-BE","nl-NL","pl","pl-PL","pt","pt-BR","ro","ro-RO","ru","ru-RU","sv","sv-SE","th","th-TH","tr","tr-TR","vi","vi-VN","zh-Hans","zh-Hans-CN","zh-Hant","zh-Hant-HK","zh-Hant-TW"]},"datatype-date-math":{"requires":["yui-base"]},"datatype-date-parse":{},"datatype-number":{"use":["datatype-number-parse","datatype-number-format"]},"datatype-number-format":{},"datatype-number-parse":{},"datatype-xml":{"use":["datatype-xml-parse","datatype-xml-format"]},"datatype-xml-format":{},"datatype-xml-parse":{},"dd":{"use":["dd-ddm-base","dd-ddm","dd-ddm-drop","dd-drag","dd-proxy","dd-constrain","dd-drop","dd-scroll","dd-delegate"]},"dd-constrain":{"requires":["dd-drag"]},"dd-ddm":{"requires":["dd-ddm-base","event-resize"]},"dd-ddm-base":{"requires":["node","base","yui-throttle","classnamemanager"]},"dd-ddm-drop":{"requires":["dd-ddm"]},"dd-delegate":{"requires":["dd-drag","dd-drop-plugin","event-mouseenter"]},"dd-drag":{"requires":["dd-ddm-base"]},"dd-drop":{"requires":["dd-drag","dd-ddm-drop"]},"dd-drop-plugin":{"requires":["dd-drop"]},"dd-gestures":{"condition":{"name":"dd-gestures","test":function(b){return(b.config.win&&("ontouchstart" in b.config.win&&!b.UA.chrome));
},"trigger":"dd-drag"},"requires":["dd-drag","event-synthetic","event-gestures"]},"dd-plugin":{"optional":["dd-constrain","dd-proxy"],"requires":["dd-drag"]},"dd-proxy":{"requires":["dd-drag"]},"dd-scroll":{"requires":["dd-drag"]},"dial":{"lang":["en","es"],"requires":["widget","dd-drag","substitute","event-mouseenter","event-move","event-key","transition","intl"],"skinnable":true},"dom":{"use":["dom-base","dom-screen","dom-style","selector-native","selector"]},"dom-base":{"requires":["dom-core"]},"dom-core":{"requires":["oop","features"]},"dom-deprecated":{"requires":["dom-base"]},"dom-screen":{"requires":["dom-base","dom-style"]},"dom-style":{"requires":["dom-base"]},"dom-style-ie":{"condition":{"name":"dom-style-ie","test":function(h){var f=h.Features.test,g=h.Features.add,d=h.config.win,e=h.config.doc,b="documentElement",c=false;g("style","computedStyle",{test:function(){return d&&"getComputedStyle" in d;}});g("style","opacity",{test:function(){return e&&"opacity" in e[b].style;}});c=(!f("style","opacity")&&!f("style","computedStyle"));return c;},"trigger":"dom-style"},"requires":["dom-style"]},"dump":{"requires":["yui-base"]},"editor":{"use":["frame","selection","exec-command","editor-base","editor-para","editor-br","editor-bidi","editor-tab","createlink-base"]},"editor-base":{"requires":["base","frame","node","exec-command","selection"]},"editor-bidi":{"requires":["editor-base"]},"editor-br":{"requires":["editor-base"]},"editor-lists":{"requires":["editor-base"]},"editor-para":{"requires":["editor-base"]},"editor-tab":{"requires":["editor-base"]},"escape":{"requires":["yui-base"]},"event":{"after":["node-base"],"use":["event-base","event-delegate","event-synthetic","event-mousewheel","event-mouseenter","event-key","event-focus","event-resize","event-hover","event-outside"]},"event-base":{"after":["node-base"],"requires":["event-custom-base"]},"event-base-ie":{"after":["event-base"],"condition":{"name":"event-base-ie","test":function(c){var b=c.config.doc&&c.config.doc.implementation;return(b&&(!b.hasFeature("Events","2.0")));},"trigger":"node-base"},"requires":["node-base"]},"event-custom":{"use":["event-custom-base","event-custom-complex"]},"event-custom-base":{"requires":["oop"]},"event-custom-complex":{"requires":["event-custom-base"]},"event-delegate":{"requires":["node-base"]},"event-flick":{"requires":["node-base","event-touch","event-synthetic"]},"event-focus":{"requires":["event-synthetic"]},"event-gestures":{"use":["event-flick","event-move"]},"event-hover":{"requires":["event-mouseenter"]},"event-key":{"requires":["event-synthetic"]},"event-mouseenter":{"requires":["event-synthetic"]},"event-mousewheel":{"requires":["node-base"]},"event-move":{"requires":["node-base","event-touch","event-synthetic"]},"event-outside":{"requires":["event-synthetic"]},"event-resize":{"requires":["node-base","event-synthetic"]},"event-simulate":{"requires":["event-base"]},"event-synthetic":{"requires":["node-base","event-custom-complex"]},"event-touch":{"requires":["node-base"]},"event-valuechange":{"requires":["event-focus","event-synthetic"]},"exec-command":{"requires":["frame"]},"features":{"requires":["yui-base"]},"frame":{"requires":["base","node","selector-css3","substitute","yui-throttle"]},"get":{"requires":["yui-base"]},"graphics":{"requires":["node","event-custom","pluginhost"]},"graphics-canvas":{"condition":{"name":"graphics-canvas","test":function(d){var c=d.config.doc,b=c&&c.createElement("canvas");return(c&&!c.implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#BasicStructure","1.1")&&(b&&b.getContext&&b.getContext("2d")));},"trigger":"graphics"},"requires":["graphics"]},"graphics-canvas-default":{"condition":{"name":"graphics-canvas-default","test":function(d){var c=d.config.doc,b=c&&c.createElement("canvas");return(c&&!c.implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#BasicStructure","1.1")&&(b&&b.getContext&&b.getContext("2d")));},"trigger":"graphics"}},"graphics-svg":{"condition":{"name":"graphics-svg","test":function(c){var b=c.config.doc;return(b&&b.implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#BasicStructure","1.1"));},"trigger":"graphics"},"requires":["graphics"]},"graphics-svg-default":{"condition":{"name":"graphics-svg-default","test":function(c){var b=c.config.doc;return(b&&b.implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#BasicStructure","1.1"));},"trigger":"graphics"}},"graphics-vml":{"condition":{"name":"graphics-vml","test":function(d){var c=d.config.doc,b=c&&c.createElement("canvas");return(c&&!c.implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#BasicStructure","1.1")&&(!b||!b.getContext||!b.getContext("2d")));},"trigger":"graphics"},"requires":["graphics"]},"graphics-vml-default":{"condition":{"name":"graphics-vml-default","test":function(d){var c=d.config.doc,b=c&&c.createElement("canvas");return(c&&!c.implementation.hasFeature("http://www.w3.org/TR/SVG11/feature#BasicStructure","1.1")&&(!b||!b.getContext||!b.getContext("2d")));},"trigger":"graphics"}},"highlight":{"use":["highlight-base","highlight-accentfold"]},"highlight-accentfold":{"requires":["highlight-base","text-accentfold"]},"highlight-base":{"requires":["array-extras","classnamemanager","escape","text-wordbreak"]},"history":{"use":["history-base","history-hash","history-hash-ie","history-html5"]},"history-base":{"requires":["event-custom-complex"]},"history-hash":{"after":["history-html5"],"requires":["event-synthetic","history-base","yui-later"]},"history-hash-ie":{"condition":{"name":"history-hash-ie","test":function(c){var b=c.config.doc&&c.config.doc.documentMode;return c.UA.ie&&(!("onhashchange" in c.config.win)||!b||b<8);},"trigger":"history-hash"},"requires":["history-hash","node-base"]},"history-html5":{"optional":["json"],"requires":["event-base","history-base","node-base"]},"imageloader":{"requires":["base-base","node-style","node-screen"]},"intl":{"requires":["intl-base","event-custom"]},"intl-base":{"requires":["yui-base"]},"io":{"use":["io-base","io-xdr","io-form","io-upload-iframe","io-queue"]},"io-base":{"requires":["event-custom-base","querystring-stringify-simple"]},"io-form":{"requires":["io-base","node-base"]},"io-queue":{"requires":["io-base","queue-promote"]},"io-upload-iframe":{"requires":["io-base","node-base"]},"io-xdr":{"requires":["io-base","datatype-xml-parse"]},"json":{"use":["json-parse","json-stringify"]},"json-parse":{"requires":["yui-base"]},"json-stringify":{"requires":["yui-base"]},"jsonp":{"requires":["get","oop"]},"jsonp-url":{"requires":["jsonp"]},"loader":{"use":["loader-base","loader-rollup","loader-yui3"]},"loader-base":{"requires":["get"]},"loader-rollup":{"requires":["loader-base"]},"loader-yui3":{"requires":["loader-base"]},"model":{"requires":["base-build","escape","json-parse"]},"model-list":{"requires":["array-extras","array-invoke","arraylist","base-build","escape","json-parse","model"]},"node":{"use":["node-base","node-event-delegate","node-pluginhost","node-screen","node-style"]},"node-base":{"requires":["event-base","node-core","dom-base"]},"node-core":{"requires":["dom-core","selector"]},"node-deprecated":{"requires":["node-base"]},"node-event-delegate":{"requires":["node-base","event-delegate"]},"node-event-html5":{"requires":["node-base"]},"node-event-simulate":{"requires":["node-base","event-simulate"]},"node-flick":{"requires":["classnamemanager","transition","event-flick","plugin"],"skinnable":true},"node-focusmanager":{"requires":["attribute","node","plugin","node-event-simulate","event-key","event-focus"]},"node-load":{"requires":["node-base","io-base"]},"node-menunav":{"requires":["node","classnamemanager","plugin","node-focusmanager"],"skinnable":true},"node-pluginhost":{"requires":["node-base","pluginhost"]},"node-screen":{"requires":["dom-screen","node-base"]},"node-style":{"requires":["dom-style","node-base"]},"oop":{"requires":["yui-base"]},"overlay":{"requires":["widget","widget-stdmod","widget-position","widget-position-align","widget-stack","widget-position-constrain"],"skinnable":true},"panel":{"requires":["widget","widget-stdmod","widget-position","widget-position-align","widget-stack","widget-position-constrain","widget-modality","widget-autohide","widget-buttons"],"skinnable":true},"plugin":{"requires":["base-base"]},"pluginhost":{"use":["pluginhost-base","pluginhost-config"]},"pluginhost-base":{"requires":["yui-base"]},"pluginhost-config":{"requires":["pluginhost-base"]},"profiler":{"requires":["yui-base"]},"querystring":{"use":["querystring-parse","querystring-stringify"]},"querystring-parse":{"requires":["yui-base","array-extras"]},"querystring-parse-simple":{"requires":["yui-base"]},"querystring-stringify":{"requires":["yui-base"]},"querystring-stringify-simple":{"requires":["yui-base"]},"queue-promote":{"requires":["yui-base"]},"range-slider":{"requires":["slider-base","slider-value-range","clickable-rail"]},"recordset":{"use":["recordset-base","recordset-sort","recordset-filter","recordset-indexer"]},"recordset-base":{"requires":["base","arraylist"]},"recordset-filter":{"requires":["recordset-base","array-extras","plugin"]},"recordset-indexer":{"requires":["recordset-base","plugin"]},"recordset-sort":{"requires":["arraysort","recordset-base","plugin"]},"resize":{"use":["resize-base","resize-proxy","resize-constrain"]},"resize-base":{"requires":["base","widget","substitute","event","oop","dd-drag","dd-delegate","dd-drop"],"skinnable":true},"resize-constrain":{"requires":["plugin","resize-base"]},"resize-plugin":{"optional":["resize-constrain"],"requires":["resize-base","plugin"]},"resize-proxy":{"requires":["plugin","resize-base"]},"rls":{"requires":["get","features"]},"scrollview":{"requires":["scrollview-base","scrollview-scrollbars"]},"scrollview-base":{"requires":["widget","event-gestures","transition"],"skinnable":true},"scrollview-base-ie":{"condition":{"name":"scrollview-base-ie","trigger":"scrollview-base","ua":"ie"},"requires":["scrollview-base"]},"scrollview-list":{"requires":["plugin","classnamemanager"],"skinnable":true},"scrollview-paginator":{"requires":["plugin"]},"scrollview-scrollbars":{"requires":["classnamemanager","transition","plugin"],"skinnable":true},"selection":{"requires":["node"]},"selector":{"requires":["selector-native"]},"selector-css2":{"condition":{"name":"selector-css2","test":function(d){var c=d.config.doc,b=c&&!("querySelectorAll" in c);
return b;},"trigger":"selector"},"requires":["selector-native"]},"selector-css3":{"requires":["selector-native","selector-css2"]},"selector-native":{"requires":["dom-base"]},"shim-plugin":{"requires":["node-style","node-pluginhost"]},"slider":{"use":["slider-base","slider-value-range","clickable-rail","range-slider"]},"slider-base":{"requires":["widget","dd-constrain","substitute"],"skinnable":true},"slider-value-range":{"requires":["slider-base"]},"sortable":{"requires":["dd-delegate","dd-drop-plugin","dd-proxy"]},"sortable-scroll":{"requires":["dd-scroll","sortable"]},"stylesheet":{"requires":["yui-base"]},"substitute":{"optional":["dump"],"requires":["yui-base"]},"swf":{"requires":["event-custom","node","swfdetect","escape"]},"swfdetect":{"requires":["yui-base"]},"tabview":{"requires":["widget","widget-parent","widget-child","tabview-base","node-pluginhost","node-focusmanager"],"skinnable":true},"tabview-base":{"requires":["node-event-delegate","classnamemanager","skin-sam-tabview"]},"tabview-plugin":{"requires":["tabview-base"]},"test":{"requires":["event-simulate","event-custom","substitute","json-stringify"],"skinnable":true},"text":{"use":["text-accentfold","text-wordbreak"]},"text-accentfold":{"requires":["array-extras","text-data-accentfold"]},"text-data-accentfold":{"requires":["yui-base"]},"text-data-wordbreak":{"requires":["yui-base"]},"text-wordbreak":{"requires":["array-extras","text-data-wordbreak"]},"transition":{"requires":["node-style"]},"transition-timer":{"condition":{"name":"transition-timer","test":function(e){var d=e.config.doc,c=(d)?d.documentElement:null,b=true;if(c&&c.style){b=!("MozTransition" in c.style||"WebkitTransition" in c.style);}return b;},"trigger":"transition"},"requires":["transition"]},"uploader":{"requires":["event-custom","node","base","swf"]},"view":{"requires":["base-build","node-event-delegate"]},"widget":{"use":["widget-base","widget-htmlparser","widget-uievents","widget-skin"]},"widget-anim":{"requires":["plugin","anim-base","widget"]},"widget-autohide":{"requires":["widget","event-outside","base-build","event-key"],"skinnable":false},"widget-base":{"requires":["attribute","event-focus","base-base","base-pluginhost","node-base","node-style","classnamemanager"],"skinnable":true},"widget-base-ie":{"condition":{"name":"widget-base-ie","trigger":"widget-base","ua":"ie"},"requires":["widget-base"]},"widget-buttons":{"requires":["widget","base-build","widget-stdmod"],"skinnable":true},"widget-child":{"requires":["base-build","widget"]},"widget-htmlparser":{"requires":["widget-base"]},"widget-locale":{"requires":["widget-base"]},"widget-modality":{"requires":["widget","event-outside","base-build"],"skinnable":false},"widget-parent":{"requires":["base-build","arraylist","widget"]},"widget-position":{"requires":["base-build","node-screen","widget"]},"widget-position-align":{"requires":["widget-position"]},"widget-position-constrain":{"requires":["widget-position"]},"widget-skin":{"requires":["widget-base"]},"widget-stack":{"requires":["base-build","widget"],"skinnable":true},"widget-stdmod":{"requires":["base-build","widget"]},"widget-uievents":{"requires":["widget-base","node-event-delegate"]},"yql":{"requires":["jsonp","jsonp-url"]},"yui":{},"yui-base":{},"yui-later":{"requires":["yui-base"]},"yui-log":{"requires":["yui-base"]},"yui-rls":{},"yui-throttle":{"requires":["yui-base"]}};YUI.Env[a.version].md5="105ebffae27a0e3d7331f8cf5c0bb282";},"3.4.1",{requires:["loader-base"]});YUI.add("yui",function(a){},"3.4.1",{use:["yui-base","get","features","intl-base","yui-log","yui-later","loader-base","loader-rollup","loader-yui3"]});
var YUI3_config = {"base":"\/extension\/ezjscore\/design\/standard\/lib\/yui\/3.4.1\/build\/","combine":false,"modules":{}};
YUI( YUI3_config ).add('io-ez', function( Y )
{
var _rootUrl = '/index.php/ezwebin_site_admin/', _serverUrl = _rootUrl + 'ezjscore/', _seperator = '@SEPERATOR$', _configBak,
_prefUrl = _rootUrl + 'user/preferences';
function _ez( callArgs, c )
{
callArgs = callArgs.join !== undefined ? callArgs.join( _seperator ) : callArgs;
var url = _serverUrl + 'call/';
if ( c === undefined )
c = {on:{}, data: '', headers: {}, method: 'POST'};
else
c = Y.merge( {on:{}, data: '', headers: {}, method: 'POST'}, c );
var _token = '', _tokenNode = document.getElementById('ezxform_token_js');
if ( _tokenNode ) _token = '&ezxform_token=' + _tokenNode.getAttribute('title');
if ( c.method === 'POST' )
c.data += ( c.data ? '&' : '' ) + 'ezjscServer_function_arguments=' + callArgs + _token;
else
url += encodeURIComponent( callArgs );
c.headers.Accept = 'application/json,text/javascript,*/*';
if ( c.on.success !== undefined )
c.on.successCallback = c.on.success;
c.on.success = _ioezSuccess;
_configBak = c;
return Y.io( url, c );
}
function _ioezSuccess( id, o )
{
if ( o.responseJSON === undefined )
{
var returnObject = {'responseJSON': Y.JSON.parse( o.responseText ),
'readyState': o.readyState,
'responseText': o.responseText,
'responseXML': o.responseXML,
'status': o.status,
'statusText': o.statusText
};
}
else
{
var returnObject = o;
}
var c = _configBak;
if ( c.on.successCallback !== undefined )
{
if ( c.arguments !== undefined )
c.on.successCallback( id, returnObject, c.arguments );
else
c.on.successCallback( id, returnObject, null );
}
else if ( window.console !== undefined )
{
if ( returnObject.responseJSON.error_text )
window.console.error( 'Y.ez(): ' + returnObject.responseJSON.error_text );
else
window.console.log( 'Y.ez(): ' + returnObject.responseJSON.content );
}
_configBak.on.success = _configBak.on.successCallback;
_configBak.on.successCallback = undefined;
}
_ez.url = _serverUrl;
_ez.root_url = _rootUrl;
_ez.seperator = _seperator;
Y.io.ez = _ez;
Y.io.ez.setPreference = function( name, value )
{
var c = {on:{}, data:'', headers: {}, method: 'POST'},
_tokenNode = document.getElementById( 'ezxform_token_js' );
c.data = 'Function=set_and_exit&Key=' + encodeURIComponent( name ) + '&Value=' + encodeURIComponent( value );
if ( _tokenNode )
c.data += '&ezxform_token=' + _tokenNode.getAttribute( 'title' );
return Y.io( _prefUrl, c );
}
}, '3.0.0' ,{requires:['io-base', 'json-parse']});
function ezjs_toggleCheckboxes( formname, checkboxname )
{
with ( formname )
{
for ( var i = 0, l = elements.length; i < l; i++ )
{
if ( elements[i].type === 'checkbox' && elements[i].name == checkboxname && elements[i].disabled == false )
{
if ( elements[i].checked == true )
{
elements[i].checked = false;
}
else
{
elements[i].checked = true;
}
}
}
}
}
function eZImagePreloader()
{
this.setupEventHandlers( eZImagePreloader.prototype.onImageLoad,
eZImagePreloader.prototype.onImageError,
eZImagePreloader.prototype.onImageAbort );
}
eZImagePreloader.prototype.preloadImageList = function( imageList )
{
this.nImagesCount           = imageList.length;
this.nProcessedImagesCount  = 0;
this.nLoadedImagesCount     = 0;
this.bPreloadDone           = false;
for ( var i in imageList )
{
if ( typeof imageList[i] != 'function' )
{
this.preload( imageList[i] );
}
}
}
eZImagePreloader.prototype.preload = function( imageFilePath )
{
var image = new Image;
image.onload  = this.onImageLoadEvent;
image.onerror = this.onImageErrorEvent;
image.onabort = this.onImageAbortEvent;
image.preloader = this;
image.bLoaded = false;
image.bError  = false;
image.bAbort  = false;
image.src = imageFilePath;
}
eZImagePreloader.prototype.setupEventHandlers = function( onLoad, onError, onAbort )
{
this.onImageLoadEvent = onLoad;
this.onImageErrorEvent = onError;
this.onImageAbortEvent = onAbort;
}
eZImagePreloader.prototype.onImageLoad = function()
{
this.bLoaded = true;
this.preloader.nLoadedImagesCount++;
this.preloader.onComplete();
}
eZImagePreloader.prototype.onImageError = function()
{
this.bError = true;
this.preloader.onComplete();
}
eZImagePreloader.prototype.onImageAbort = function()
{
this.bAbort = true;
this.preloader.onComplete();
}
eZImagePreloader.prototype.onComplete = function( imageList )
{
this.nProcessedImagesCount++;
if ( this.nProcessedImagesCount == this.nImagesCount )
{
this.bPreloadDone = true;
}
}
function ezjslib_preloadImageList( filepathList )
{
var preloader = new eZImagePreloader();
preloader.preloadImageList( filepathList );
}
var CurrentSubstituteValues = -1;
(function()
{
var EZPOPMENU_OFFSET = 8, EZPOPMENU_SUBOFFSET = 4, EZPOPMENU_SUBTOPOFFSET = 4;
var CurrentDisableIDList = [];
var CurrentDisableMenuID = -1;
var CurrentDisabledMenusItems = {}, DefaultDisabledMenuItemCSSClass = 'menu-item-disabled';;
var VisibleMenus = [];
function _initOffsets( offsetX, offsetY )
{
EZPOPMENU_OFFSET = offsetX;
EZPOPMENU_SUBTOPOFFSET = offsetY;
}
function _setSubstituteValue( key, value )
{
if ( CurrentSubstituteValues != -1 )
{
CurrentSubstituteValues[key] = value;
}
}
function _showTopLevel( event, menuID, substituteValues, menuHeader, disableIDList, disableMenuID )
{
if ( !document.getElementById( menuID ) ) return;
var mousePos = _mouseHandler( event ); // register new mouse position
if ( substituteValues != -1 ) // new topmenu
{
_hideAll();
CurrentSubstituteValues = substituteValues;
}
if ( disableIDList && disableIDList != -1 )
{
CurrentDisableIDList = disableIDList.push !== undefined ? disableIDList : [disableIDList];
}
CurrentDisableMenuID = disableMenuID;
_doItemSubstitution( menuID, menuHeader );
_moveTopLevelOnScreen( menuID, mousePos );
_makeVisible( menuID );
}
function _showSubLevel( event, menuID, overItem )
{
if ( !document.getElementById( menuID ) ) return;
_doItemSubstitution( menuID );
_hideHigher( menuArray[menuID]['depth'] - 1 ); //hide all other submenus
_makeVisible( menuID );
_moveSubLevelOnScreen( menuID, overItem );
}
function _makeVisible( menuID )
{
var el = document.getElementById( menuID );
if ( el ) el.style.display = 'block';
VisibleMenus[menuArray[menuID]['depth']] = menuID;
document.getElementById( menuID ).onmouseover = function() { document.onmousedown = null; }
document.getElementById( menuID ).onmouseout = function() { document.onmousedown = _hideAll; }
document.onmousedown = _hideAll;
}
function _doItemSubstitution( menuID, menuHeader )
{
for ( var i in menuArray[menuID]['elements'] )
{
var hrefElement = document.getElementById( i );
if ( !hrefElement )
{
continue;
}
var replaceString = menuArray[menuID]['elements'][i]['url'];
if ( replaceString )
{
replaceString = _substituteString( replaceString, CurrentSubstituteValues );
hrefElement.setAttribute( "href", replaceString );
}
var loopingVariable = menuArray[menuID]['elements'][i]['variable'];
if ( loopingVariable )
{
var content = '';
for ( var localVariableIndex in CurrentSubstituteValues[loopingVariable] )
{
var localVariable = CurrentSubstituteValues[loopingVariable][localVariableIndex];
if ( typeof localVariable != 'object' )
continue;
var partialContent = menuArray[menuID]['elements'][i]['content'];
for ( var substItem in CurrentSubstituteValues )
{
if ( typeof CurrentSubstituteValues[substItem] != 'object' && typeof CurrentSubstituteValues[substItem] != 'function' )
{
partialContent = partialContent.replace( substItem, CurrentSubstituteValues[substItem] );
}
}
for ( var localItem in localVariable )
{
partialContent = partialContent.replace( '%' + localItem + '%', localVariable[localItem] );
}
content += partialContent;
}
hrefElement.innerHTML = content;
}
var disabledForElement = false;
if ( typeof( menuArray[menuID]['elements'][i]['disabled_for'] ) != 'undefined' && CurrentDisableIDList )
{
for ( var disI = 0, disL = CurrentDisableIDList.length; disI < disL; disI++ )
{
if ( disabledForElement = menuArray[menuID]['elements'][i]['disabled_for'][ CurrentDisableIDList[disI] ] === 'yes'  )
break;
}
}
if ( typeof( menuArray[menuID]['elements'][i]['disabled_class'] ) != 'undefined' &&
( disabledForElement ||
( CurrentDisableMenuID && hrefElement.id == CurrentDisableMenuID ) ) )
{
CurrentDisabledMenusItems[hrefElement.id] = new Array();
CurrentDisabledMenusItems[hrefElement.id]['className'] = hrefElement.className;
CurrentDisabledMenusItems[hrefElement.id]['href'] = hrefElement.href;
CurrentDisabledMenusItems[hrefElement.id]['onmouseover'] = hrefElement.onmouseover;
CurrentDisabledMenusItems[hrefElement.id]['onclick'] = hrefElement.onclick;
hrefElement.className = menuArray[menuID]['elements'][i]['disabled_class'];
hrefElement.setAttribute( "href", '#' );
hrefElement.onmouseover = "";
hrefElement.onclick = "";
}
else if ( typeof( menuArray[menuID]['elements'][i]['disabled_class'] ) != 'undefined' &&
hrefElement.className == menuArray[menuID]['elements'][i]['disabled_class'] )
{
if ( typeof( CurrentDisabledMenusItems[hrefElement.id] ) != 'undefined' )
{
hrefElement.className = CurrentDisabledMenusItems[hrefElement.id]['className'];
hrefElement.href = CurrentDisabledMenusItems[hrefElement.id]['href'];
hrefElement.onmouseover = CurrentDisabledMenusItems[hrefElement.id]['onmouseover'];
hrefElement.onclick = CurrentDisabledMenusItems[hrefElement.id]['onclick'];
}
}
}
if ( menuHeader && typeof( menuArray[menuID]['headerID'] ) != 'undefined' )
{
var header = document.getElementById( menuArray[menuID]['headerID'] );
if ( header ) header.innerHTML = menuHeader;
}
}
function _substituteString( replaceString, substituteValues )
{
for ( var substItem in substituteValues )
{
if ( typeof substituteValues[substItem] != 'object' && typeof substituteValues[substItem] != 'function' )
{
replaceString = replaceString.replace( substItem, substituteValues[substItem] );
}
}
return replaceString;
}
function _moveTopLevelOnScreen( menuID, mousePos )
{
var menuElement = document.getElementById( menuID ), screenData = _getScreenProperties();
var newX = 0; var newY = 0;
if ( (screenData.ScrollY + screenData.Height) < ( mousePos.y + EZPOPMENU_OFFSET + menuElement.offsetHeight ) )
newY = mousePos.y - EZPOPMENU_OFFSET - menuElement.offsetHeight;
else if ( screenData.ScrollY > EZPOPMENU_OFFSET + mousePos.y )
newY = screenData.ScrollY;
else
newY = mousePos.y + EZPOPMENU_OFFSET;
if ( (screenData.ScrollX + screenData.Width) < ( mousePos.x + EZPOPMENU_OFFSET + menuElement.offsetWidth ) )
newX = mousePos.x - EZPOPMENU_OFFSET - menuElement.offsetWidth;
else if ( screenData.ScrollX > EZPOPMENU_OFFSET + mousePos.x )
newX = screenData.ScrollX;
else
newX = mousePos.x + EZPOPMENU_OFFSET;
menuElement.style.left = newX + "px";
menuElement.style.top = newY + "px";
}
function _mouseHandler( e )
{
if ( !e )e = window.event;
if ( e.pageX || e.pageY )//DOM
return { 'x': e.pageX, 'y': e.pageY };
else if ( e.clientX || e.clientY ) // IE needs special treatment
return { 'x': e.clientX + document.documentElement.scrollLeft, 'y': e.clientY + document.documentElement.scrollTop };
return { 'x': 0, 'y': 0 };
}
function _moveSubLevelOnScreen( menuID, alignItem )
{
var menuElement = document.getElementById( menuID ), screenData = _getScreenProperties();
var newX = 0; var newY = 0;
alignElement = document.getElementById( alignItem );
parentElement = document.getElementById( VisibleMenus[menuArray[menuID]['depth'] - 1] );
if ( alignElement && parentElement )
{
newX = parseInt( parentElement.style.left ) + menuElement.offsetWidth - EZPOPMENU_SUBOFFSET;
newY = parseInt( parentElement.style.top ) + alignElement.offsetTop + EZPOPMENU_SUBTOPOFFSET;
}
if ( ( screenData.ScrollY + screenData.Height ) < ( newY + menuElement.offsetHeight ) )
newY = screenData.ScrollY + screenData.Height - menuElement.offsetHeight;
else if ( screenData.ScrollY > newY )
newY = screenData.ScrollY;
if ( ( screenData.ScrollX + screenData.Width ) < ( newX + menuElement.offsetWidth ) )
{
newX = parseInt( parentElement.style.left ) + EZPOPMENU_SUBOFFSET - menuElement.offsetWidth;
}
menuElement.style.left = newX + "px";
menuElement.style.top = newY + "px";
}
function _submitForm( formID, customSubstitute )
{
var formElement = document.getElementById( formID );
if ( formElement )
{
var children = formElement.childNodes,
origValue = '', resetInputs = [];
for ( var i = 0, l = children.length; i < l; i++)
{
if ( children[i].type == 'hidden' )
{
for ( var substItem in CurrentSubstituteValues )
{
origValue = children[i].value;
children[i].value = children[i].value.replace( substItem, CurrentSubstituteValues[substItem] );
if ( customSubstitute )
{
for ( var j = 0, jl = customSubstitute.length; j < jl; j += 2 )
{
children[i].value = children[i].value.replace( '%'+customSubstitute[j]+'%', customSubstitute[j+1] );
}
}
if ( origValue != children[i].value )
{
resetInputs.push(
{ 'input': children[i], 'originalValue': origValue }
);
}
}
}
}
formElement.submit();
for( var i = 0; i != resetInputs.length; i++ )
{
resetInputs[i].input.value = resetInputs[i].originalValue;
}
}
}
function _hide( id )
{
var level = menuArray[id]['depth'];
_hideHigher( level - 1 );
}
function _hideAll()
{
document.onmousedown = null;
_hideHigher( -1 );
}
function _hideHigher( level, el )
{
for ( var i = level + 1, l = VisibleMenus.length; i < l && VisibleMenus[i] != 'none' ; i++ )
{
el = document.getElementById( VisibleMenus[i] );
if ( el ) el.style.display = 'none';
VisibleMenus[i] = 'none';
}
}
function _mouseOver( id )
{
_hideHigher( menuArray[id]['depth'] );
}
function _createAArray( flat )
{
var resultArray = {};
if ( flat.length % 2 != 0 ) return resultArray;
for ( var i = 0, l = flat.length; i < l; i += 2 )
{
resultArray[flat[i]] = flat[i+1];
}
return resultArray;
}
function _SubstituteAndRedirect( href )
{
for ( var substItem in CurrentSubstituteValues )
{
href = href.replace( substItem, CurrentSubstituteValues[substItem] );
}
location.href = href;
}
function _getScreenProperties()
{
var result = { 'ScrollX': 0, 'ScrollY': 0, 'Height': 0, 'Width': 0 };
if ( typeof( window.innerWidth ) == 'number' )// all but IE
{
result.Width = window.innerWidth;
result.Height = window.innerHeight;
}
else if ( document.documentElement && ( document.documentElement.clientWidth || document.documentElement.clientHeight ) )// IE 6
{
result.Width = document.documentElement.clientWidth;
result.Height = document.documentElement.clientHeight;
}
else if ( document.body && ( document.body.clientWidth || document.body.clientHeight ) )// IE 4
{
result.Width = document.body.clientWidth;
result.Height = document.body.clientHeight;
}
if ( document.body && ( document.body.scrollLeft || document.body.scrollTop ) )// DOM
{
result.ScrollY = document.body.scrollTop;
result.ScrollX = document.body.scrollLeft;
}
else if ( document.documentElement && ( document.documentElement.scrollLeft || document.documentElement.scrollTop ) )// IE6
{
result.ScrollY = document.documentElement.scrollTop;
result.ScrollX = document.documentElement.scrollLeft;
}
else if ( typeof( window.pageYOffset ) == 'number' )// Netscape compliant
{
result.ScrollY = window.pageYOffset;
result.ScrollX = window.pageXOffset;
}
return result;
}
window.ezpopup_SubstituteAndRedirect = _SubstituteAndRedirect;
window.ez_createAArray = _createAArray;
window.ezpopmenu_mouseOver = _mouseOver;
window.ezpopmenu_showTopLevel = _showTopLevel;
window.ezpopmenu_hideAll = _hideAll;
window.ezpopmenu_hide = _hide;
window.ezpopmenu_submitForm = _submitForm;
window.ezpopmenu_showSubLevel = _showSubLevel;
if ( window.menuArray === undefined )
{
window.menuArray = {};
}
})();// Scope end
jQuery(function( $ )
{
var leftMenuDrag = {
elements : false,
timeout : null,
down: function( e )
{
leftMenuDrag.elements = [ $( '#leftmenu' ), $( '#maincontent' ) ];
if ( leftMenuDrag.timeout !== null )
{
clearTimeout( leftMenuDrag.timeout );
leftMenuDrag.timeout = null;
}
},
up: function( e )
{
if ( leftMenuDrag.elements )
{
leftMenuDrag.elements = false;
leftMenuDrag.timeout = setTimeout( leftMenuDrag.save, 500 );
}
},
on: function( e )
{
if ( leftMenuDrag.elements  )
{
var els = leftMenuDrag.elements, offset = els[0].offset().left, pos = e.pageX, size = pos - offset;
if ( size < 20 ) size = 20;
els[0].css( 'width', ( size + 3 )  + 'px' );
els[1].css( 'marginLeft', ( size ) + 'px' );
}
},
save: function()
{
var px  = $( '#leftmenu' ).width();
var url = $.ez.url.replace( 'ezjscore/', 'user/preferences/' ) + 'set_and_exit/admin_left_menu_size/' + leftMenuDrag.em( px ) + 'em';
var _token = '', _tokenNode = document.getElementById('ezxform_token_js');
if ( _tokenNode ) _token = 'ezxform_token=' + _tokenNode.getAttribute('title');
$.post( url, _token, function(){} );
},
em: function( px )
{
var test = jQuery('<div style="display: none; font-size: 1em; margin: 0; padding:0; height: auto; line-height: 1; border:0;">&nbsp;</div>').appendTo('#columns'), scale = test.height();
test.remove();
return (px / scale).toFixed(8);
}
};
var wl = $('#widthcontrol-links'), wh = $('#widthcontrol-handler');
if ( wl && wh )
{
wl.addClass( 'hide' );
wh.removeClass( 'hide' ) ;
wh.bind( 'mousedown', leftMenuDrag.down );
$( document ).bind('mouseup click', leftMenuDrag.up );
$( document ).bind('mousemove', leftMenuDrag.on );
$('#leftmenu').addClass( 'widthcontroled' );
}
});
function ContentStructureMenu( params, i18n )
{
this.cookieName     = "contentStructureMenu";
this.cookieValidity = 3650; // days
this.cookie         = params.useCookie ? _getCookie( this.cookieName ) : '';
this.open           = ( this.cookie )? this.cookie.split( '/' ): [];
this.autoOpenPath   = params.path;
this.updateCookie = function()
{
if ( !params.useCookie )
return;
this.cookie = this.open.join('/');
expireDate  = new Date();
expireDate.setTime( expireDate.getTime() + this.cookieValidity * 86400000 );
_setCookie( this.cookieName, this.cookie, expireDate );
};
this.setOpen = function( nodeID )
{
if ( jQuery.inArray( '' + nodeID, this.open ) !== -1 )
{
return;
}
this.open[this.open.length] = nodeID;
this.updateCookie();
};
this.setClosed = function( nodeID )
{
var openIndex = jQuery.inArray( '' + nodeID, this.open );
if ( openIndex !== -1 )
{
this.open.splice( openIndex, 1 );
this.updateCookie();
}
};
this.generateEntry = function( item, lastli, rootNode )
{
var liclass = '';
if ( lastli )
{
liclass += ' lastli';
}
if ( params.path && ( params.path[params.path.length-1] == item.node_id || ( !item.has_children && jQuery.inArray( item.node_id, params.path ) !== -1 ) ) )
{
liclass += ' currentnode';
}
var html = '<li id="n'+item.node_id+'"'
+ ( ( liclass )? ' class="' + liclass + '"':
'' )
+ '>';
if ( item.has_children && !rootNode )
{
html += '<a class="openclose-open" id="a'
+ item.node_id
+ '" href="#" onclick="this.blur(); return treeMenu.load( this, '
+ item.node_id
+ ', '
+ item.modified_subnode
+' )"><\/a>';
}
var languages = "[";
var firstLanguage = true;
for ( var j = 0; j < item.languages.length; j++ )
{
if ( params.languages[item.languages[j]] )
{
if ( !firstLanguage )
{
languages += ",";
}
firstLanguage = false;
languages += "{locale:'"
+ item.languages[j].replace(/'/g,"\\'")
+ "',name:'"
+ params.languages[item.languages[j]].replace(/'/g,"\\'")
+ "'}";
}
}
languages += "]";
var canCreateClasses = false;
var classes = "[";
if ( params.createHereMenu != 'disabled' )
{
if ( params.createHereMenu == 'full' )
{
var classList = item.class_list;
for ( var j = 0; j < classList.length; j++ )
{
if ( params.classes[classList[j]] )
{
if ( canCreateClasses )
{
classes += ",";
}
canCreateClasses = true;
classes += "{classID:'"
+ classList[j]
+ "',name:'"
+ String(params.classes[classList[j]].name).replace(/'/g,"\\'").replace(/>/g,'&gt;').replace(/"/g,'&quot;')
+ "'}";
}
}
}
else
{
for ( j in params.classes )
{
if ( canCreateClasses )
{
classes += ",";
}
canCreateClasses = true;
classes += "{classID:'"
+ j
+ "',name:'"
+ String(params.classes[j].name).replace(/'/g,"\\'").replace(/>/g,'&gt;').replace(/"/g,'&quot;')
+ "'}";
}
}
}
classes += "]";
var classIdentifier = params.classes[item.class_id].identifier;
var icon = ( params.iconsList[classIdentifier] )? params.iconsList[classIdentifier]: params.iconsList['__default__'];
if ( params.context != 'browse' && item.node_id > 1 )
{
html += '<a class="nodeicon" href="#" onclick="ezpopmenu_showTopLevel( event, \'ContextMenu\', {\'%nodeID%\':'
+ item.node_id
+ ', \'%objectID%\':'
+ item.object_id
+ ', \'%languages%\':'
+ languages
+ ', \'%classList%\':'
+ classes
+ ' }, \''
+ String(item.name).replace(/'/g,"\\'").replace(/>/g,'&gt;').replace(/"/g,'&quot;')
+ '\', '
+ item.node_id
+ ', '
+ ( ( canCreateClasses )? '-1':
'\'menu-create-here\'' )
+ ' ); return false"><img src="'
+ icon
+ '" alt="" title="['
+ params.classes[item.class_id].name.replace(/>/g,'&gt;').replace(/"/g, '&quot;')
+ '] ' + i18n.expand + '" width="16" height="16" /><\/a>';
}
else
{
html += '<img src="'
+ icon
+ '" alt="" width="16" height="16" />';
}
html += '&nbsp;<a class="image-text" href="'
+ ( ( params.action )? params.action + '/' + item.node_id : item.url )
+ '"';
if ( params.showTips )
{
html += ' title="' + i18n.node_id + ': '
+ item.node_id
+ ', ' + i18n.object_id + ': '
+ item.object_id
+ ', ' + i18n.visibility + ': '
+ ( item.is_hidden ? i18n.hidden: ( item.is_invisible ? i18n.hiddenbyparent : i18n.visible ) )
+ '"';
}
html += '><span class="node-name-'
+ ( ( item.is_hidden )? 'hidden':
( item.is_invisible )? 'hiddenbyparent':
'normal' )
+ '">'
+ item.name
+ '<\/span>';
if ( item.is_hidden )
{
html += '<span class="node-hidden"> (' + i18n.hidden + ')<\/span>';
}
else if ( item.is_invisible )
{
html += '<span class="node-hiddenbyparent"> (' + i18n.hiddenbyparent + ')<\/span>';
}
html += '<\/a>';
html += '<div id="c'
+ item.node_id
+ '"><\/div>';
html += '<\/li>';
return html;
};
this.load = function( aElement, nodeID, modifiedSubnode )
{
var divElement = document.getElementById('c' + nodeID);
if ( !divElement )
{
return false;
}
if ( divElement.className == 'hidden' )
{
divElement.className = 'loaded';
if ( aElement )
{
aElement.className = 'openclose-close';
}
this.setOpen( nodeID );
return false;
}
if ( divElement.className == 'loaded' )
{
divElement.className = 'hidden';
if ( aElement )
{
aElement.className = 'openclose-open';
}
this.setClosed( nodeID );
return false;
}
if ( divElement.className == 'busy' )
{
return false;
}
var url = params.contentTreeUrl + nodeID
+ "/" + modifiedSubnode
+ "/" + params.expiry
+ "/" + params.perm;
divElement.className = 'busy';
if ( aElement )
{
aElement.className = "openclose-busy";
}
var thisThis = this, request = jQuery.ajax({
'url': url,
'dataType': 'json',
'success': function( data, textStatus )
{
var html = '<ul>', items = [];
for ( var i = 0, l = data.children_count; i < l; i++ )
{
if ( jQuery.inArray( data.children[i].node_id, params.hideNodes ) === -1 )
{
items.push( data.children[i] );
}
}
for ( var i = 0, l = items.length; i < l; i++ )
{
html += thisThis.generateEntry( items[i], i == l - 1, false );
}
html += '<\/ul>';
divElement.innerHTML += html;
divElement.className = 'loaded';
if ( aElement )
{
aElement.className = 'openclose-close';
}
thisThis.setOpen( nodeID );
thisThis.openUnder( nodeID );
return;
},
'error': function( xhr, textStatus, errorThrown )
{
divElement.className = 'error';
if (aElement) aElement.className = 'openclose-error';
function setErrorText( txt )
{
if (aElement) aElement.title = txt;
else divElement.innerHTML = '<span></span>' + txt;
}
switch( xhr.status )
{
case 403:
{
setErrorText( i18n.disabled );
} break;
case 404:
{
setErrorText( i18n.not_exist );
} break;
default:
{
setErrorText( i18n.internal_error );
}
}
if (aElement) aElement.onclick = function()
{
return false;
};
}
});
return false;
};
this.openUnder = function( parentNodeID )
{
var divElement = document.getElementById( 'c' + parentNodeID );
if ( !divElement )
{
return;
}
var ul = divElement.getElementsByTagName( 'ul' )[0];
if ( !ul )
{
return;
}
var children = ul.childNodes;
for ( var i = 0; i < children.length; i++ )
{
var liCandidate = children[i];
if ( liCandidate.nodeType == 1 && liCandidate.id )
{
var nodeID = liCandidate.id.substr( 1 ), openIndex = jQuery.inArray( nodeID, this.autoOpenPath );
if ( this.autoOpen && openIndex !== -1 )
{
this.autoOpenPath.splice( openIndex, 1 );
this.setOpen( nodeID );
}
if ( jQuery.inArray( nodeID, this.open ) !== -1 )
{
var aElement = document.getElementById( 'a' + nodeID );
if ( aElement )
{
aElement.onclick();
}
}
}
}
};
this.collapse = function( parentNodeID )
{
var divElement = document.getElementById( 'c' + parentNodeID );
if ( !divElement )
{
return;
}
var aElements = divElement.getElementsByTagName( 'a' );
for ( var index in aElements )
{
var aElement = aElements[index];
if ( aElement.className == 'openclose-close' )
{
var nodeID        = aElement.id.substr( 1 );
var subdivElement = document.getElementById( 'c' + nodeID );
if ( subdivElement )
{
subdivElement.className = 'hidden';
}
aElement.className = 'openclose-open';
this.setClosed( nodeID );
}
}
var aElement = document.getElementById( 'a' + parentNodeID );
if ( aElement )
{
divElement.className = 'hidden';
aElement.className   = 'openclose-open';
this.setClosed( parentNodeID );
}
};
function _setCookie( name, value, expires, path )
{
document.cookie = name + '=' + escape(value) + ( expires ? '; expires=' + expires.toUTCString(): '' ) + '; path='+ (path ? path : '/');
}
function _getCookie( name )
{
var n = name + '=', c = document.cookie, start = c.indexOf( n ), end = c.indexOf( ";", start );
if ( start !== -1 )
{
return unescape( c.substring( start + n.length, ( end === -1 ? c.length : end ) ) );
}
return null;
}
function _delCookie( name )
{
_setCookie( name, '', ( new Date() - 86400000 ) );
}
}
YUI(YUI3_config).use('event', 'node-screen', 'node-style', 'selector-css3', 'transition', function (Y) {
Y.on('domready', function() {
var toolbar, formY, form, fixed = true, firstInput,
toolbarHeight, toTop = Y.one('.scroll-to-top');
var handleScroll = function () {
if ( !fixed && toolbar.get('docScrollY') > formY ) {
toolbar.addClass('controlbar-fixed');
fixed = true;
} else if ( toolbar.get('docScrollY') > (formY+20) && toTop ) {
toTop.show('fadeIn', {opacity: 0.6, duration: 0.5});
} else if ( fixed && toolbar.get('docScrollY') < formY ) {
toolbar.removeClass('controlbar-fixed');
fixed = false;
if ( toTop )
toTop.hide('fadeOut', {opacity: 0, duration: 0.5});
}
}
if ( toTop ) {
toTop.setStyle('opacity', 0);
toTop.on('click', function (e) {
toTop.hide('fadeOut', {opacity: 0, duration: 0.5});
});
}
toolbar = Y.one('#controlbar-top');
form = Y.one('#editform,#ClassEdit');
if ( form && toolbar ) {
toolbarHeight = parseInt(toolbar.getStyle('height')) + parseInt(toolbar.getStyle('top'));
formY = parseInt(form.getY()) - toolbarHeight;
Y.on('scroll', handleScroll);
if ( form.get('docScrollY') < formY ) {
window.scrollTo(0, formY + 1, 0);
firstInput = form.one('input[type=text]:enabled');
if ( firstInput )
firstInput.focus();
}
handleScroll();
}
});
});
YUI(YUI3_config).add('ezmodalwindow', function (Y) {
function eZModalWindow(conf) {
this.conf = Y.merge(eZModalWindow.DEFAULT_CONFIG, conf);
this.window = Y.one(this.conf.window);
this.isOpen = false;
this.closeCallback = {};
this.mask = null;
if ( !Y.UA.ie || Y.UA.ie > 6 ) {
this.mask = Y.one(this.conf.mask);
}
this.overlay = new Y.Overlay({
srcNode: this.conf.window,
width: this.conf.width,
centered: this.conf.centered,
visible: false,
zIndex: this.conf.zIndex
});
this.overlay.render();
this.window.show();
var that = this;
this.window.delegate('click', function (e) {
e.preventDefault();
that.close();
}, this.conf.close);
Y.one(document).on('keydown', function (e) {
if ( e.charCode === 27 ) {
that.close();
}
});
};
eZModalWindow.DEFAULT_CONFIG = {
content: '.window-content',
close: '.window-close, .window-cancel',
title: 'h2 span',
centered: true,
xy: [],
zIndex: 50,
mask: '#overlay-mask',
maskOpacity: 0.5
};
eZModalWindow.prototype.onClose = function (fn, context) {
this.closeCallback = {
fn: fn,
context: context
};
};
eZModalWindow.prototype.open = function () {
this.overlay.reset();
if ( this.conf.xy && this.conf.xy.join ) {
var x = this.conf.xy[0],
y = this.conf.xy[1];
if ( x == 'centered' ) {
x = (Y.DOM.winWidth() - this.overlay.get('width')) / 2;
}
y = Y.DOM.docScrollY() + y;
this.overlay.set('xy', [x, y]);
}
if ( this.mask ) {
this.mask.show();
var anim = new Y.Anim({
node: this.mask,
to: {
opacity: this.conf.maskOpacity
},
duration: 0.4
});
anim.run();
}
this.overlay.show();
this.isOpen = true;
};
eZModalWindow.prototype.setContent = function (content) {
this.getContentNode().setContent(content);
};
eZModalWindow.prototype.getContentNode = function () {
return this.window.one(this.conf.content);
};
eZModalWindow.prototype.setTitle = function (title) {
this.window.one(this.conf.title).setContent(title);
};
eZModalWindow.prototype.empty = function () {
return !this.getContentNode().hasChildNodes();
};
eZModalWindow.prototype.close = function (keepContent) {
var that = this;
this.overlay.hide();
if ( this.mask ) {
var anim = new Y.Anim({
node: this.mask,
to: {
opacity: 0
},
duration: 0.2
});
anim.run();
anim.on('end', function () {
that.mask.hide();
});
}
this.isOpen = false;
if ( !keepContent ) {
this.setContent('');
}
if ( this.closeCallback.fn && this.closeCallback.fn.call ) {
var context = this;
if ( this.closeCallback.context ) {
context = this.closeCallback.context;
}
this.closeCallback.fn.call(context);
}
};
Y.namespace('eZ');
Y.eZ.ModalWindow = eZModalWindow;
}, '1.0.0', {
requires: [
'node', 'overlay', 'dom-base', 'anim'
]
});
YUI(YUI3_config).add('ezajaxuploader', function (Y) {
function eZAjaxUploader(modalWindow, conf) {
this.conf = Y.merge(eZAjaxUploader.DEFAULT_CONFIG, conf);
this.modalWindow = modalWindow;
this.lastMetaData = false;
this.windowEvents = [];
var that = this;
this.defaultAjaxConfiguration = {
on:{
start: function () {
that.waitAjax();
},
end: function () {
that.endAjax();
},
success: function (transactionId, data) {
var input;
if ( data.responseJSON.error_text != "" ) {
that.displayError(data.responseJSON.error_text);
} else {
that.lastMetaData = data.responseJSON.content.meta_data;
that.modalWindow.setContent(data.responseJSON.content.html);
}
}
},
method: 'POST'
};
};
eZAjaxUploader.HANDLER_FIELD_NAME = "AjaxUploadHandlerData";
eZAjaxUploader.HAD_DEFAULT_VALUE = "had-default-value";
eZAjaxUploader.DEFAULT_CONFIG = {
requiredInput: 'input.input-required',
labelErrorClass: 'message-error',
validationErrorText: "Some required fields are empty.",
parseJSONErrorText: "Unable to parse the JSON response.",
validationErrorTextElement: '.ajaxuploader-error',
errorTemplate: '<div class="message-error">%message</div>',
defaultValuedInputClass: 'has-default-value',
loading:{
opacity: 0.2,
loader: "#ajaxuploader-loader",
zIndex:51
}
};
eZAjaxUploader.prototype.displayError = function (errorText) {
var e = Y.Node.create(this.conf.errorTemplate),
contentNode = this.modalWindow.getContentNode();
e.setContent(e.get('innerHTML').replace('%message', errorText));
contentNode.setContent(e);
};
eZAjaxUploader.prototype.waitAjax = function () {
var contentNode = this.modalWindow.getContentNode(),
xy = contentNode.getXY(),
height = parseInt(contentNode.getStyle('height')),
width = parseInt(contentNode.getStyle('width')),
img = Y.one(this.conf.loading.loader);
xy[0] = xy[0] + (width/2);
xy[1] = xy[1] + (height/4);
contentNode.setStyle('opacity', this.conf.loading.opacity);
img.show();
img.setStyle('zIndex', this.conf.loading.zIndex)
img.setXY(xy)
};
eZAjaxUploader.prototype.endAjax = function () {
var contentNode = this.modalWindow.getContentNode();
contentNode.setStyle('opacity', 1);
Y.one(this.conf.loading.loader).hide();
};
eZAjaxUploader.prototype.delegateWindowEvents = function () {
var contentNode = this.modalWindow.getContentNode();
var that = this, sub, defaultValues = {};
var clearDefaultValueHint = function (e) {
defaultValues[this.generateID()] = this.get('value');
this.set('value', '');
this.removeClass(that.conf.defaultValuedInputClass).addClass(eZAjaxUploader.HAD_DEFAULT_VALUE);
};
sub = contentNode.delegate(
'click', clearDefaultValueHint, '.' + this.conf.defaultValuedInputClass
);
this.windowEvents.push(sub);
var restoreDefaultValueHint = function(e) {
var id = this.generateID();
if ( this.get('value') == '' && defaultValues[id] ) {
this.set('value', defaultValues[id]);
this.addClass(that.conf.defaultValuedInputClass);
}
};
sub = contentNode.delegate(
'blur', restoreDefaultValueHint, '.' + eZAjaxUploader.HAD_DEFAULT_VALUE
);
this.windowEvents.push(sub);
var highlightSubmitButton = function (e) {
contentNode.one('input[type="submit"]').addClass('defaultbutton');
contentNode.one(that.conf.validationErrorTextElement).setContent('');
};
sub = contentNode.delegate(
'click', highlightSubmitButton, this.conf.location.browse + ' input[type="radio"]'
);
this.windowEvents.push(sub);
sub = contentNode.delegate('change', highlightSubmitButton, 'input[type="file"]');
this.windowEvents.push(sub);
var formPreSubmit = function (e) {
var valid = true,
hiddenPlace = contentNode.one('form p'),
form = this.ancestor('form', false);
contentNode.all(that.conf.requiredInput).each(function () {
if ( !this.get('value') ) {
contentNode.all('label[for="' + this.get('id') + '"]').addClass(that.conf.labelErrorClass);
valid = false;
}
});
if ( !valid ) {
contentNode.one(that.conf.validationErrorTextElement).setContent(that.conf.validationErrorText);
e.halt(true);
return;
}
contentNode.all('label').removeClass(that.conf.labelErrorClass);
contentNode.all('.has-default-value').set('value', '');
contentNode.one(that.conf.validationErrorTextElement).setContent("");
for(var k in that.conf.target) {
hiddenPlace.append('<input type="hidden" name="' + eZAjaxUploader.HANDLER_FIELD_NAME + '[' + k + ']" value="' + that.conf.target[k] + '" />');
}
if ( that.conf.token )
hiddenPlace.append('<input type="hidden" name="ezxform_token" value="' + that.conf.token + '" />');
};
sub = contentNode.delegate(
'click', formPreSubmit, 'form input[type="submit"]'
);
this.windowEvents.push(sub);
var upload = function (e) {
e.halt(true);
that.waitAjax()
form = this.ancestor('form', false);
var c = Y.clone(that.defaultAjaxConfiguration, true),
ioCompleteSub = false;
c.form = {
id: form,
upload: true
};
c.on.success = undefined;
ioCompleteSub = Y.on('io:complete', function (transactionId, data) {
var json;
ioCompleteSub.detach();
try {
json = Y.JSON.parse(data.responseText);
} catch (e) {
that.displayError(that.conf.parseJSONErrorText);
that.endAjax();
return;
}
if ( json.error_text ) {
that.displayError(json.error_text);
} else {
that.modalWindow.setContent(decodeURIComponent(json.html));
}
that.endAjax();
});
Y.io(Y.io.ez.url + 'call/' + that.conf.upload.action, c);
};
sub = contentNode.delegate(
'click', upload, this.conf.upload.form + ' input[type="submit"]'
);
this.windowEvents.push(sub);
var postLocation = function (e) {
var c = Y.clone(that.defaultAjaxConfiguration, true),
form = this.ancestor('form', false),
radios = contentNode.all('input[type="radio"]'),
checked = false;
radios.each(function () {
if ( this.get('checked') ) {
checked = true;
}
});
if ( !checked ) {
contentNode.one(that.conf.validationErrorTextElement).setContent(that.conf.location.required);
e.halt(true);
return;
}
c.form = {
id: form
};
Y.io.ez(that.conf.location.action, c);
e.halt();
};
sub = contentNode.delegate(
'click', postLocation, this.conf.location.form + ' input[type="submit"]'
);
this.windowEvents.push(sub);
var browse = function (e) {
var c = Y.clone(that.defaultAjaxConfiguration, true),
placeholder = contentNode.one(that.conf.location.browse);
e.halt(true);
c.on.success = function (transactionId, data) {
if ( data.responseJSON.error_text != "" ) {
that.displayError(data.responseJSON.error_text);
} else {
that.lastMetaData = data.responseJSON.content.meta_data;
placeholder.setContent(data.responseJSON.content.html);
contentNode.one('input[type="submit"]').removeClass('defaultbutton').addClass('button');
}
};
c.method = 'GET';
Y.io.ez(e.currentTarget.getAttribute('href'), c);
};
sub = contentNode.delegate(
'click', browse, this.conf.location.browse + ' a'
);
this.windowEvents.push(sub);
var endForm = function (e) {
e.halt();
that.conf.preview.callback.call(that);
};
sub = contentNode.delegate(
'click', endForm, this.conf.preview.form + ' input[type="submit"]'
);
this.windowEvents.push(sub);
var formLastBeforeSubmit = function (e) {
this.addClass('button-disabled').removeClass('defaultbutton').removeClass('button').set('disabled', 'disabled');
};
sub = contentNode.delegate(
'click', formLastBeforeSubmit, 'form input[type="submit"]'
);
this.windowEvents.push(sub);
};
eZAjaxUploader.prototype.detachWindowEvents = function () {
for (var i = 0; i != this.windowEvents.length; i++) {
this.windowEvents[i].detach();
}
};
eZAjaxUploader.prototype.buildPostString = function () {
var res = '';
for (var k in this.conf.target) {
if ( res != '' )
res += '&';
res += eZAjaxUploader.HANDLER_FIELD_NAME + '[' + k + ']=' + this.conf.target[k];
}
return res;
};
eZAjaxUploader.prototype.cleanup = function () {
this.detachWindowEvents();
this.endAjax();
};
eZAjaxUploader.prototype.open = function () {
var c = Y.clone(this.defaultAjaxConfiguration, true);
this.delegateWindowEvents();
this.modalWindow.setTitle(this.conf.title);
this.modalWindow.open();
this.modalWindow.onClose(this.cleanup, this);
c.data = this.buildPostString();
Y.io.ez(this.conf.open.action, c);
};
Y.namespace('eZ');
Y.eZ.AjaxUploader = eZAjaxUploader;
}, '1.0.0', {
requires: [
'ezmodalwindow', 'io-ez', 'io-form', 'io-upload-iframe', 'json-parse'
]
});
YUI(YUI3_config).add('ezcollapsiblemenu', function (Y) {
Y.namespace('eZ');
function doTransition(elements, type) {
var el, transitionConf;
for(var i=0; i!=elements.length; i++) {
el = elements[i];
transitionConf = {duration: el.duration};
for(var k in el[type]) {
transitionConf[k] = el[type][k];
}
Y.one(el.selector).transition(transitionConf);
}
}
function eZCollapsibleMenu(conf) {
var that = this;
this.conf = conf;
Y.one(this.conf.link).on('click', function (e) {
e.preventDefault();
if ( that.conf.collapsed == 1 ) {
doTransition(that.conf.elements, 'fullStyle');
that.conf.collapsed = 0;
} else {
doTransition(that.conf.elements, 'collapsedStyle');
that.conf.collapsed = 1;
}
Y.one(that.conf.link).setContent(that.conf.content[that.conf.collapsed]);
if ( that.conf.callback ) {
that.conf.callback.call(that);
}
});
}
Y.eZ.CollapsibleMenu = eZCollapsibleMenu;
}, '1.0.0', {
requires: [
'transition', 'event'
]
});
YUI(YUI3_config).add('ezautosubmit', function (Y) {
Y.namespace('eZ');
var defaultConfig = {
interval: 300,
trackUserInput: true
};
function serializeForm(id) {
var data = [], eUC = encodeURIComponent,
item = 0,
e, f, n, v, i, il, j, jl, o,
form = Y.one(id), f = form.getDOMNode();
for (i = 0, il = f.elements.length; i < il; ++i) {
e = f.elements[i];
n = eUC(e.name) + '=';
v = eUC(e.value);
switch (e.type) {
case 'select-one':
if (e.selectedIndex > -1) {
o = e.options[e.selectedIndex];
data[item++] = n + eUC(o.attributes.value && o.attributes.value.specified ? o.value : o.text);
}
break;
case 'select-multiple':
if (e.selectedIndex > -1) {
for (j = e.selectedIndex, jl = e.options.length; j < jl; ++j) {
o = e.options[j];
if (o.selected) {
data[item++] = n + eUC(o.attributes.value && o.attributes.value.specified ? o.value : o.text);
}
}
}
break;
case 'radio':
case 'checkbox':
if (e.checked) {
data[item++] = n + v;
}
break;
case undefined:
case 'reset':
case 'button':
break;
case 'file':
case 'submit':
default:
data[item++] = n + v;
}
}
return data.join('&');
}
function eZAutoSubmit(conf) {
var that = this;
this.conf = Y.merge(defaultConfig, conf);
this.conf.interval = parseInt(this.conf.interval);
if ( !this.conf.interval ) {
this.conf.interval = defaultConfig.interval;
}
this.timer = false;
this.started = false;
this.state = '';
this.ajaxConfiguration = {
form:{
id: Y.one(this.conf.form),
upload: true
},
method: 'POST'
};
this.ajax = false;
this.ajaxSubscription = false;
Y.on('domready', function () {
that.fire('init');
});
}
eZAutoSubmit.prototype.start = function () {
var that = this;
if ( this.started ) {
return;
}
Y.on('domready', function () {
that.timer = Y.later(that.conf.interval * 1000, that, that.submit, [], true);
that.started = true;
that.state = serializeForm(that.conf.form);
if ( that.conf.trackUserInput ) {
Y.one(that.conf.form).delegate('blur', function (e) {
that.submit();
}, 'input, select, textarea, iframe');
}
Y.one(that.conf.form).on('submit', function () {
that.stop();
});
});
}
eZAutoSubmit.prototype.stop = function () {
if ( this.started ) {
this.timer.cancel();
this.started = false;
if ( this.ajax ) {
this.ajax.abort();
this.ajax = false;
}
if ( this.ajaxSubscription ) {
this.ajaxSubscription.detach();
}
}
}
eZAutoSubmit.prototype.submit = function (fields) {
var that = this,
formState = serializeForm(this.conf.form),
ajaxConf = Y.clone(this.ajaxConfiguration, true);
ajaxConf.form.id = Y.one(this.conf.form);
if ( !this.started ) {
return;
}
if ( fields ) {
formState += '&' + fields;
}
if ( this.state != formState ) {
if ( this.ajax && this.ajax.isInProgress() ) {
this.ajaxSubscription.detach();
this.ajax.abort();
this.ajax = false;
}
this.ajaxSubscription = Y.on('io:complete', function (tId, data) {
var json, error = false;
that.ajaxSubscription.detach();
if ( Y.Lang.isUndefined(data.responseText) ) {
that.fire('abort');
return;
}
try {
json = Y.JSON.parse(data.responseText);
} catch(e) {
error = true;
}
if ( error || json.error_text ) {
that.fire('error', {json: json});
} else {
that.fire('success', {json: json});
}
});
this.state = formState;
this.fire('beforesave');
if ( fields ) {
ajaxConf.data = fields;
}
this.ajax = Y.io(this.conf.action, ajaxConf);
} else {
this.fire('nochange');
}
}
Y.augment(eZAutoSubmit, Y.EventTarget, true, null, {emitFacade: true});
Y.eZ.AutoSubmit = eZAutoSubmit;
}, '1.0.0', {
requires: [
'event', 'event-custom', 'node-event-delegate', 'io-form', 'io-upload-iframe', 'yui-later', 'json-parse'
]
});
