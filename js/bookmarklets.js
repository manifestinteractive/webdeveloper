function browserDemo(){
	var n = navigator;var sourceWindow = window.open("about:blank");var newDoc = sourceWindow.document;newDoc.open();newDoc.write('<html><body>\n<table border=1 cellpadding=2 cellspacing=0 width=100%>\n<tr><td><b>appCodeName<\/b><\/td><td>'+n.appCodeName+'<\/td><\/tr>\n<tr><td><b>appName<\/b><\/td><td>'+n.appName+'<\/td><\/tr>\n<tr><td><b>appVersion<\/b><\/td><td>'+n.appVersion+'<\/td><\/tr>\n<tr><td><b>language<\/b><\/td><td>'+n.language+'<\/td><\/tr>\n<tr><td><b>platform<\/b><\/td><td>'+n.platform+'<\/td><\/tr>\n<tr><td><b>userAgent<\/b><\/td><td>'+n.userAgent+'<\/td><\/tr>\n<\/table>\n<\/body><\/html>');newDoc.close();
}

function cookieDemo(){
	var d=unescape(document.cookie);if(d.length<1)alert('This page doesn\'t use cookies.');else{var a='<html><style type=\'text/css\'>*{font:10px Verdana;}b,.b td{font-weight:bold;}.b td{background-color:#cccccc;}.red{color:red;}.blue{color:blue;}.green{color:green;}</style><body>\n<b>Cookies for: '+location.host+'</b><br /><table border=\'1\' cellpadding=\'2\' cellspacing=\'0\' width=\'100%\'>\n<tr class=\'b\'><td>Field</td><td>Value</td></tr>',c=d.split(';');for(x=0;x<c.length;x++){var f=c[x].split('='),cF=f[0],cV=c[x].replace(f[0],''),cV2=(cV.split('=').length>1)?cV.replace(/&/g,'<br />'):cV;a+='\n<tr><td class=\'red\' valign=\'top\'>'+cF+'</td><td class=\''+((cV==cV2)?'blue':'green')+'\'>'+cV2+'</td></tr>';}a+='\n</table>\n</body></html>';wC=window.open('','Cookies','scrollbars,resizable,top=0,left=0,width=500,height=400');wC.document.write(a);}
}

function lastmodDemo(){
	alert('Modification Date: '+document.lastModified);
}

function listimagesDemo(){
	var b='<html><body>';function P(i,t){a='<center>\n<table border=\'1\' cellspacing=\'0\'>\n<tr><td colspan=\'2\' align=\'center\'><b>'+i.length+' images in '+t+'</b></td></tr>';for(x=0;x<i.length;x++)if(a.indexOf(i[x].src)==-1){a+='\n<tr><td colspan=\'2\'>';if(i[x].name.length>0)a+='<b>name: </b>'+i[x].name+'<br>';if(i[x].id.length>0)a+='<b>id: </b>'+i[x].id+'<br>';if(i[x].alt.length>0)a+='<b>alt: </b>'+i[x].alt+'<br>';a+='<font face=\'Arial\' size=\'-1\' color=\'#993333\'>'+i[x].src+'</font></font></td></tr>\n<tr><td align=\'center\' nowrap=\'nowrap\'>'+i[x].width+' x '+i[x].height+'</td><td align=\'center\' background=\'http://samrod.com/img/checkers.gif\' bgcolor=\'#DDDDDD\'><img src=\''+i[x].src+'\'></td></tr>';}return a+'\n</table>\n</center>';}b+=P(document.images,'this page');for(z=0;z<frames.length;z++)b+='\n<br><b>Frame '+z+'</b>: '+frames[z].name+'<br>\n<b>url:</b>'+frames[z].location.href+P(frames[z].document.images,'frame '+z);w=window.open('','Images','resizable,scrollbars,width=600,height=600,top=0,left=0');w.document.write(b+'\n</body></html>');
}

function listlinksDemo(){
	var a='';for(var ln=0;ln<document.links.length;ln++){var lk=document.links[ln];a+=ln+': <a href=\''+lk+'\' title=\''+lk.text+'\'>'+lk+'</a><br>\n';}w=window.open('','Links','scrollbars,resizable,width=400,height=600');w.document.write(a);
}

function queryDemo(){
	d=unescape(location.search);if(d.length<1)alert('The current URL doesn\'t have a query string.');else{a='<html><body>\n<table border=1 cellpadding=2 cellspacing=0 width=100%>\n<tr><td bgcolor=\'#CCCCCC\' align=\'center\'><b>Field</b></td><td bgcolor=\'#CCCCCC\' align=\'center\'><B>Value</B></td></tr>';c=d.split('&');for(x=0;x<c.length;x++){f=c[x].split('=');a+='\n<tr><td><font color=\'#CC0000\'>'+f[0].replace(/\?/,'')+'</font></td><td><font color=\'#0000CC\'>'+c[x].replace(f[0],'').replace(/^=/,'')+'</font></td></tr>';}a+='\n</table>\n</body></html>';w=window.open('','Query','scrollbars,resizable,top=0,left=0,width=500,height=400');w.document.write(a);}
}

function referrerDemo(){
	a=(document.referrer.length>0)?document.referrer:'Referrer not available.';alert(a);
}

function whoisDemo(){
	void(window.open('http://www.networksolutions.com/whois/results.jsp?domain='+location.hostname));
}

function showtablesDemo(){
	var f=function(tt,col){var a=document.getElementsByTagName(tt);for(var b=0;b<a.length;b++){a[b].style.border='1px solid #'+col;}};f('table','00F');f('td','0F0');f('th','0FF');
}

function showdivDemo(){
	var a=document.getElementsByTagName('div');for(var b=0;b<a.length;b++){a[b].style.border='1px solid #F00';}
}

function showdividDemo(){
	var a=document.getElementsByTagName('div');var aspan;var txtNode;for(var b=0; b < a.length;b++){ a[b].style.border='1px solid red';  if(a[b].id != ''){  aspan = document.createElement('span');  aspan.setAttribute('id', 't_ttp' + a[b].id);  aspan.setAttribute('style', 'position:relative;top:1px;left:1px; margin:10px 0px 0px 10px;background-color: beige;max-width:220;padding: 2px 10px 2px 10px;border: 1px solid #C0C0C0;font: normal 10px/12px verdana;color: #000;text-align:left;display: block;');  txtNode = document.createTextNode('div: ' + a[b].id);  aspan.appendChild(txtNode);  a[b].appendChild(aspan);}}
}

function dumpDemo(){
	var jsArray = document.getElementsByTagName("script"); var theWinref; var theHTML; var scriptObj; var frameURL; var frameObj;if(jsArray.length > 0) { theWinref = window.open('','_blank','width=320,height=255,toolbar=no,location=no,directories=no,status=yes,menubar=no,resizeable=yes'); theWinref.document.write(' <html> <head> <title>' + window.location.href + ' </title> </head> <body>'+ jsArray.length+' Script(s) Found:'); theWinref.resizeTo(600,200);theWinref.moveTo(0,0); } for (var i = 0; i  < jsArray.length; i++) { scriptObj = jsArray[i]; if(scriptObj.hasAttribute("src")){ frameURL = scriptObj.getAttribute("src"); theWinref.document.write(" <p style='background-color:#999933;'>Script "+eval(i+1)+" via " + frameURL + " <br> <iframe height='100%' width='100%' id='url"+ i + "' src='" + frameURL + "'> </iframe> </p>"); frameObj = theWinref.document.getElementById("url" + i); } else { theHTML = scriptObj.innerHTML; theWinref.document.write(" <p style='background-color:#999933;'>Script "+eval(i+1)+": <br> <pre>" + theHTML + " </pre> </p>"); } } if(jsArray.length > 0) { theWinref.document.write(' </body> </html>'); }
}

function executeDemo(){
	var c='document.location.href',r='';while(c=prompt(r+'Enter the code to be executed:',c)){try{r='Returned: '+eval(c)+'\n';}catch(err){r='Error: '+err.message+'\n';}}
}

function findDemo(){
	void(s=prompt('Find text:',''));s='('+s+')';x=new RegExp(s,'gi');rn=Math.floor(Math.random()*100);rid='z' + rn;b = document.body.innerHTML;b=b.replace(x,'<span name=' + rid + ' id=' + rid + ' style=\'color:#000;background-color:yellow; font-weight:bold;\'>$1</span>');void(document.body.innerHTML=b);alert('Found ' + document.getElementsByName(rid).length + ' matches.');window.scrollTo(0,document.getElementsByName(rid)[0].offsetTop);
}

function blankDemo(){
	(function(){var a=document.getElementsByTagName('a');for(var i=0,j=a.length;i<j;i++){a[i].setAttribute('target','_blank');var img=document.createElement('img');img.setAttribute('class', 'new-window');img.setAttribute('src','data:image/gif;base64,'+'R0lGODlhEAAMALMLAL66tBISEjExMdTQyBoaGjs7OyUlJWZmZgAAAMzMzP///////wAAAAAAAAAAAAAA'+'ACH5BAEAAAsALAAAAAAQAAwAAAQ/cMlZqr2Tps13yVJBjOT4gYairqohCTDMsu4iHHgwr7UA/LqdopZS'+'DBBIpGG5lBQH0GgtU9xNJ9XZ1cnsNicRADs=');img.setAttribute('style','width:16px!important;height:12px!important;border:none!important;');a[i].appendChild(img);}})();
}

function viewsrcDemo(){
	var sourceWindow = window.open("about:blank"); var newDoc = sourceWindow.document; newDoc.open(); newDoc.write("<html><head><title>Source of " + document.location.href + "</title><meta name=\"viewport\" id=\"viewport\" content=\"initial-scale=1.0;" + "user-scalable=0; maximum-scale=0.6667; width=480\"/><script>function do_onload()" + "{setTimeout(function(){window.scrollTo(0,1);},100);}if(navigator.userAgent.indexOf" + "(\"iPhone\")!=-1)window.onload=do_onload;</script></head><body></body></html>"); newDoc.close(); var pre = newDoc.body.appendChild(newDoc.createElement("pre")); pre.appendChild(newDoc.createTextNode(document.documentElement.innerHTML));
}

function valcssDemo(){
	void(window.open('http://jigsaw.w3.org/css-validator/validator?uri='+document.location));
}

function valhtmlDemo(){
	void(window.open('http://validator.w3.org/check?uri='+document.location));
}

function valhrefDemo(){
	void(window.open('http://validator.w3.org/checklink?url='+document.location));
}