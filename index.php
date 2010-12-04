<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
         "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>iPhone Web Developer</title>
    
    <!-- //////////////////////////////////////////////////////////////////////////////////////////////
         __  __             _  __          _      ___       _                      _   _
        |  \/  | __ _ _ __ (_)/ _| ___ ___| |_   |_ _|_ __ | |_ ___ _ __ __ _  ___| |_(_)_   _____
        | |\/| |/ _` | '_ \| | |_ / _ Y __| __|   | || '_ \| __/ _ \ '__/ _` |/ __| __| \ \ / / _ \
        | |  | | (_| | | | | |  _|  __|__ \ |_    | || | | | ||  __/ | | (_| | (__| |_| |\ V /  __/
        |_|  |_|\__,_|_| |_|_|_|  \___|___/\__|  |___|_| |_|\__\___|_|  \__,_|\___|\__|_| \_/ \___|
		
	Please feel free to learn what you wish from our source code :)

	 ////////////////////////////////////////////////////////////////////////////////////////////// -->
    
    <meta name="viewport" content="width=320; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;"/>
	<meta name="keywords" content="Manifest, Interactive, iPod, iTouch, iPhone, Apple, Developer, Tools, Bookmarklet, Favelet, Apple" />
	<meta name="description" content="These are some of the tools we created that we use regularly. Please feel free to share them with your friends and co-workers." />
	<meta name="author" content="Manifest Interactive" />
	<meta name="revisit-after" content="1 week" />
	<meta name="robots" content="index,follow" />
	<meta name="googlebot" content="index,follow" />
	<meta name="company" content="Manifest Interactive" />
	<meta name="language" content="EN" />
	<meta name="content-language" content="english" />
	<meta name="copyright" content="Manifest Interactive" />
	<meta name="rating" content="general" />
	<meta name="coverage" content="worldwide" />
	<meta name="resource-type" content="document" />
	<meta name="rating" content="general" />
	<meta http-equiv="imagetoolbar" content="no" />
    
    <script type="application/x-javascript" src="js/iphonenav.js"></script>
    <script type="application/x-javascript" src="js/bookmarklets.js"></script>
    <script type="application/x-javascript" src="http://www.manifestinteractive.com/mint/?js"></script>
    
	<link rel="shortcut icon" href="http://www.manifestinteractive.com/favicon.ico" type="image/x-icon" />
	<style type="text/css" media="screen">
		@import "css/iphonenav.css";
    </style>
    
</head>

<body onorientationchange="setTimeout(scrollTo, 0, 0, 1);">
    
    <!--// PAGE TITLE //-->
    <h1 id="pageTitle"></h1>
    
    <!--// BACK BUTTONS //-->
    
    <a id="WebdevButton" class="button" href="#Webdev">Home</a>
    <a id="BookmarkletsButton" class="button" href="#Bookmarklets">Back</a>
    <a id="InformationButton" class="button" href="#Information">Back</a>
    <a id="OutlineButton" class="button" href="#Outline">Back</a>
    <a id="ToolsButton" class="button" href="#Tools">Back</a>
    <a id="ValidatorsButton" class="button" href="#Validators">Back</a>
    
    <!--// MAIN MENU //-->
    
    <ul id="Webdev" title="iPhone Web Developer" selected="true">
        <li><a href="#about"><img border="0" src="images/icons/user_suit.png" vspace="5" hspace="5" width="16" height="16" style="vertical-align:middle; margin-top:-2px;" /> About Us</a></li>
        <li><a href="#intro"><img border="0" src="images/icons/help.png" vspace="5" hspace="5" width="16" height="16" style="vertical-align:middle; margin-top:-2px;" /> Getting Started</a></li>
        <li><a href="#Bookmarklets"><img border="0" src="images/icons/script.png" vspace="5" hspace="5" width="16" height="16" style="vertical-align:middle; margin-top:-2px;" /> iPhone Bookmarklets</a></li>
        <li><a href="javascript:void(0);" onclick="window.open('http://www.manifestinteractive.com/iphone/screen/')"><img border="0" src="images/icons/link.png" vspace="5" hspace="5" width="16" height="16" style="vertical-align:middle; margin-top:-2px;" /> iPhone Orientation Check</a></li>
    </ul>
    
    <!--// ABOUT US //-->
    
    <div id="about" class="panel" title="About Us">
        <div>
        	<center><a href="javascript:void(0);" onclick="window.open('http://www.manifestinteractive.com');" class="logo">&nbsp;</a></center><br />
            <img border="0" src="images/icons/information.png" vspace="5" hspace="5" style="vertical-align:middle; margin-top:-2px;" /> Manifest Interactive develops custom web applications. We specialize in Web Usability, Interface Design, PHP/MySQL and Flash.<br /><br />
            <ul class="menu">
                <li class="showArrow"><a href="javascript:void(0);" onclick="window.open('http://www.manifestinteractive.com');"><img border="0" src="images/icons/link.png" style="display:inline; margin-right:8px; margin-top:-5px; vertical-align:middle;" /> Visit Website</a></li>	    
                <li class="showArrow"><a href="javascript:void(0);" onclick="window.location = 'mailto:peter@manifestinteractive.com';"><img border="0" src="images/icons/email.png" style="display:inline; margin-right:8px; margin-top:-5px; vertical-align:middle;" /> Contact Us</a></li>
            </ul>
            <center><span style="color:#324F85;">Manifest Interactive is in no way affiliated or associated with <a href="http://www.apple.com" style="color:#324F85; text-decoration:none">Apple Inc</a> and/or or its respective companies.</span></center>
        </div>
    </div>
    
    <!--// GETTING STARTED //-->
    
    <div id="intro" class="panel" title="Getting Started">
        <div>
        	<center><a href="javascript:void(0);" onclick="window.open('http://www.manifestinteractive.com');" class="logo">&nbsp;</a></center><br />
            <img border="0" src="images/icons/information.png" vspace="5" hspace="5" style="vertical-align:middle; margin-top:-2px;" /> To use this application, simply locate the Bookmarklets you like and drag them into your browsers bookmarks. Once you have what you need, just sync your iPhone to your personal computer and these Bookmarklets will become accessible.<br /><br />
			<img border="0" src="images/icons/information.png" vspace="5" hspace="5" style="vertical-align:middle; margin-top:-2px;" /> When you are on a page and you would like to use one of these Bookmarklets, just open your iPhone bookmarks and click the one you want.<br /><br />
        </div>
    </div>
    
    <!--// IPHONE BOOKMARKLETS //-->
    
    <ul id="Bookmarklets" title="Bookmarklets">
        <li><a href="#All"><img border="0" src="images/icons/folder.png" vspace="5" hspace="5" style="vertical-align:middle; margin-top:-2px;" /> All Bookmarklets</a></li>
        <li><a href="#Information"><img border="0" src="images/icons/folder.png" vspace="5" hspace="5" style="vertical-align:middle; margin-top:-2px;" /> Information</a></li>
        <li><a href="#Outline"><img border="0" src="images/icons/folder.png" vspace="5" hspace="5" style="vertical-align:middle; margin-top:-2px;" /> Outline</a></li>
        <li><a href="#Tools"><img border="0" src="images/icons/folder.png" vspace="5" hspace="5" style="vertical-align:middle; margin-top:-2px;" /> Tools</a></li>
        <li><a href="#Validators"><img border="0" src="images/icons/folder.png" vspace="5" hspace="5" style="vertical-align:middle; margin-top:-2px;" /> Validators</a></li>
    </ul>
    <ul id="Information" title="Information">
        <li><a href="#browser"><img border="0" src="images/icons/script.png" vspace="5" hspace="5" style="vertical-align:middle; margin-top:-2px;" /> Browser Info</a></li>
        <li><a href="#cookie"><img border="0" src="images/icons/script.png" vspace="5" hspace="5" style="vertical-align:middle; margin-top:-2px;" /> Cookie</a></li>
        <li><a href="#lastmod"><img border="0" src="images/icons/script.png" vspace="5" hspace="5" style="vertical-align:middle; margin-top:-2px;" /> Last Modified</a></li>
        <li><a href="#listimages"><img border="0" src="images/icons/script.png" vspace="5" hspace="5" style="vertical-align:middle; margin-top:-2px;" /> List Images</a></li>
        <li><a href="#listlinks"><img border="0" src="images/icons/script.png" vspace="5" hspace="5" style="vertical-align:middle; margin-top:-2px;" /> List Links</a></li>
        <li><a href="#query"><img border="0" src="images/icons/script.png" vspace="5" hspace="5" style="vertical-align:middle; margin-top:-2px;" /> Query String</a></li>
        <li><a href="#referrer"><img border="0" src="images/icons/script.png" vspace="5" hspace="5" style="vertical-align:middle; margin-top:-2px;" /> Referrer</a></li>
        <li><a href="#whois"><img border="0" src="images/icons/script.png" vspace="5" hspace="5" style="vertical-align:middle; margin-top:-2px;" /> Whois</a></li>
    </ul>
    <ul id="Outline" title="Outline">
        <li><a href="#showtables"><img border="0" src="images/icons/script.png" vspace="5" hspace="5" style="vertical-align:middle; margin-top:-2px;" /> Tables</a></li>
        <li><a href="#showdiv"><img border="0" src="images/icons/script.png" vspace="5" hspace="5" style="vertical-align:middle; margin-top:-2px;" /> DIV Borders</a></li>
        <li><a href="#showdivid"><img border="0" src="images/icons/script.png" vspace="5" hspace="5" style="vertical-align:middle; margin-top:-2px;" /> DIV Borders &amp; IDs</a></li>
    </ul>
    <ul id="Tools" title="Tools">
		<li><a href="#dump"><img border="0" src="images/icons/script.png" vspace="5" hspace="5" style="vertical-align:middle; margin-top:-2px;" /> Dump Scripts</a></li>
        <li><a href="#execute"><img border="0" src="images/icons/script.png" vspace="5" hspace="5" style="vertical-align:middle; margin-top:-2px;" /> Execute Scripts</a></li>
        <li><a href="#find"><img border="0" src="images/icons/script.png" vspace="5" hspace="5" style="vertical-align:middle; margin-top:-2px;" /> Find on Page</a></li>
        <li><a href="#blank"><img border="0" src="images/icons/script.png" vspace="5" hspace="5" style="vertical-align:middle; margin-top:-2px;" /> New Windows</a></li>
        <li><a href="#viewsrc"><img border="0" src="images/icons/script.png" vspace="5" hspace="5" style="vertical-align:middle; margin-top:-2px;" /> View Source</a></li>
    </ul>
    <ul id="Validators" title="Validators">
        <li><a href="#valcss"><img border="0" src="images/icons/script.png" vspace="5" hspace="5" style="vertical-align:middle; margin-top:-2px;" /> Validate CSS</a></li>
        <li><a href="#valhtml"><img border="0" src="images/icons/script.png" vspace="5" hspace="5" style="vertical-align:middle; margin-top:-2px;" /> Validate HTML</a></li>
        <li><a href="#valhref"><img border="0" src="images/icons/script.png" vspace="5" hspace="5" style="vertical-align:middle; margin-top:-2px;" /> Validate Links</a></li>
    </ul>
    
    <!--// ALL BOOKMARKLETS //-->
    
    <div id="All" class="panel" title="ALL">
        <div>
        	<center><a href="javascript:void(0);" onclick="window.open('http://www.manifestinteractive.com');" class="logo">&nbsp;</a></center><br />
            <img border="0" src="images/icons/help.png" vspace="5" hspace="5" style="vertical-align:middle; margin-top:-2px;" /> <b>Instructions:</b> Drag &amp; Drop these Bookmarklets into your Personal Computers Bookmarks so that you can sync them with your iPhone.<br />
            
            <br /><hr noshade="noshade" color="#E7EAEB" /><br />
            
            <img border="0" src="images/icons/folder.png" vspace="5" hspace="5" style="vertical-align:middle; margin-top:-2px;" /> <b>Information Bookmarklets</b>
            <ul class="menu">
                <li class="showArrow"><a href="javascript:var n = navigator;var sourceWindow = window.open('about:blank');var newDoc = sourceWindow.document;newDoc.open();newDoc.write('<html><body>\n<table border=1 cellpadding=2 cellspacing=0 width=100%>\n<tr><td><b>appCodeName<\/b><\/td><td>'+n.appCodeName+'<\/td><\/tr>\n<tr><td><b>appName<\/b><\/td><td>'+n.appName+'<\/td><\/tr>\n<tr><td><b>appVersion<\/b><\/td><td>'+n.appVersion+'<\/td><\/tr>\n<tr><td><b>language<\/b><\/td><td>'+n.language+'<\/td><\/tr>\n<tr><td><b>platform<\/b><\/td><td>'+n.platform+'<\/td><\/tr>\n<tr><td><b>userAgent<\/b><\/td><td>'+n.userAgent+'<\/td><\/tr>\n<\/table>\n<\/body><\/html>');newDoc.close();"><img border="0" src="images/icons/add.png" style="display:inline; margin-right:8px; margin-top:-5px; vertical-align:middle;" /> Browser Info</a><span class="secondary">drag me</span></li>
                <li class="showArrow"><a href="javascript: var d=unescape(document.cookie);if(d.length<1)alert('This page doesn\'t use cookies.');else{var a='<html><style type=\'text/css\'>*{font:10px Verdana;}b,.b td{font-weight:bold;}.b td{background-color:#cccccc;}.red{color:red;}.blue{color:blue;}.green{color:green;}</style><body>\n<b>Cookies for: '+location.host+'</b><br /><table border=\'1\' cellpadding=\'2\' cellspacing=\'0\' width=\'100%\'>\n<tr class=\'b\'><td>Field</td><td>Value</td></tr>',c=d.split(';');for(x=0;x<c.length;x++){var f=c[x].split('='),cF=f[0],cV=c[x].replace(f[0],''),cV2=(cV.split('=').length>1)?cV.replace(/&/g,'<br />'):cV;a+='\n<tr><td class=\'red\' valign=\'top\'>'+cF+'</td><td class=\''+((cV==cV2)?'blue':'green')+'\'>'+cV2+'</td></tr>';}a+='\n</table>\n</body></html>';wC=window.open('','Cookies','scrollbars,resizable,top=0,left=0,width=500,height=400');wC.document.write(a);}"><img border="0" src="images/icons/add.png" style="display:inline; margin-right:8px; margin-top:-5px; vertical-align:middle;" /> Cookie</a><span class="secondary">drag me</span></li>
                <li class="showArrow"><a href="javascript: alert('Modification Date: '+document.lastModified);"><img border="0" src="images/icons/add.png" style="display:inline; margin-right:8px; margin-top:-5px; vertical-align:middle;" /> Last Modified</a><span class="secondary">drag me</span></li>
                <li class="showArrow"><a href="javascript: var b='<html><body>';function P(i,t){a='<center>\n<table border=\'1\' cellspacing=\'0\'>\n<tr><td colspan=\'2\' align=\'center\'><b>'+i.length+' images in '+t+'</b></td></tr>';for(x=0;x<i.length;x++)if(a.indexOf(i[x].src)==-1){a+='\n<tr><td colspan=\'2\'>';if(i[x].name.length>0)a+='<b>name: </b>'+i[x].name+'<br>';if(i[x].id.length>0)a+='<b>id: </b>'+i[x].id+'<br>';if(i[x].alt.length>0)a+='<b>alt: </b>'+i[x].alt+'<br>';a+='<font face=\'Arial\' size=\'-1\' color=\'#993333\'>'+i[x].src+'</font></font></td></tr>\n<tr><td align=\'center\' nowrap=\'nowrap\'>'+i[x].width+' x '+i[x].height+'</td><td align=\'center\' background=\'http://samrod.com/img/checkers.gif\' bgcolor=\'#DDDDDD\'><img src=\''+i[x].src+'\'></td></tr>';}return a+'\n</table>\n</center>';}b+=P(document.images,'this page');for(z=0;z<frames.length;z++)b+='\n<br><b>Frame '+z+'</b>: '+frames[z].name+'<br>\n<b>url:</b>'+frames[z].location.href+P(frames[z].document.images,'frame '+z);w=window.open('','Images','resizable,scrollbars,width=600,height=600,top=0,left=0');w.document.write(b+'\n</body></html>');"><img border="0" src="images/icons/add.png" style="display:inline; margin-right:8px; margin-top:-5px; vertical-align:middle;" /> List Images</a><span class="secondary">drag me</span></li>
                <li class="showArrow"><a href="javascript: var a='';for(var ln=0;ln<document.links.length;ln++){var lk=document.links[ln];a+=ln+': <a href=\''+lk+'\' title=\''+lk.text+'\'>'+lk+'</a><br>\n';}w=window.open('','Links','scrollbars,resizable,width=400,height=600');w.document.write(a);"><img border="0" src="images/icons/add.png" style="display:inline; margin-right:8px; margin-top:-5px; vertical-align:middle;" /> List Links</a><span class="secondary">drag me</span></li>
                <li class="showArrow"><a href="javascript: d=unescape(location.search);if(d.length<1)alert('The current URL doesn\'t have a query string.');else{a='<html><body>\n<table border=1 cellpadding=2 cellspacing=0 width=100%>\n<tr><td bgcolor=\'#CCCCCC\' align=\'center\'><b>Field</b></td><td bgcolor=\'#CCCCCC\' align=\'center\'><B>Value</B></td></tr>';c=d.split('&');for(x=0;x<c.length;x++){f=c[x].split('=');a+='\n<tr><td><font color=\'#CC0000\'>'+f[0].replace(/\?/,'')+'</font></td><td><font color=\'#0000CC\'>'+c[x].replace(f[0],'').replace(/^=/,'')+'</font></td></tr>';}a+='\n</table>\n</body></html>';w=window.open('','Query','scrollbars,resizable,top=0,left=0,width=500,height=400');w.document.write(a);}"><img border="0" src="images/icons/add.png" style="display:inline; margin-right:8px; margin-top:-5px; vertical-align:middle;" /> Query String</a><span class="secondary">drag me</span></li>
                <li class="showArrow"><a href="javascript: a=(document.referrer.length>0)?document.referrer:'Referrer not available.';alert(a);"><img border="0" src="images/icons/add.png" style="display:inline; margin-right:8px; margin-top:-5px; vertical-align:middle;" /> Referrer</a><span class="secondary">drag me</span></li>
                <li class="showArrow"><a href="javascript: void(window.open('http://www.networksolutions.com/whois/results.jsp?domain='+location.hostname));"><img border="0" src="images/icons/add.png" style="display:inline; margin-right:8px; margin-top:-5px; vertical-align:middle;" /> Whois</a><span class="secondary">drag me</span></li>
            </ul>
            
            <img border="0" src="images/icons/folder.png" vspace="5" hspace="5" style="vertical-align:middle; margin-top:-2px;" /> <b>Outline Bookmarklets</b>
            <ul class="menu">
                <li class="showArrow"><a href="javascript: var f=function(tt,col){var a=document.getElementsByTagName(tt);for(var b=0;b<a.length;b++){a[b].style.border='1px solid #'+col;}};f('table','00F');f('td','0F0');f('th','0FF');"><img border="0" src="images/icons/add.png" style="display:inline; margin-right:8px; margin-top:-5px; vertical-align:middle;" /> Tables</a><span class="secondary">drag me</span></li>
                <li class="showArrow"><a href="javascript: var a=document.getElementsByTagName('div');for(var b=0;b<a.length;b++){a[b].style.border='1px solid #F00';}"><img border="0" src="images/icons/add.png" style="display:inline; margin-right:8px; margin-top:-5px; vertical-align:middle;" /> DIV Borders</a><span class="secondary">drag me</span></li>
                <li class="showArrow"><a href="javascript: var a=document.getElementsByTagName('div');var aspan;var txtNode;for(var b=0; b < a.length;b++){ a[b].style.border='1px solid red';  if(a[b].id != ''){  aspan = document.createElement('span');  aspan.setAttribute('id', 't_ttp' + a[b].id);  aspan.setAttribute('style', 'position:relative;top:1px;left:1px; margin:10px 0px 0px 10px;background-color: beige;max-width:220;padding: 2px 10px 2px 10px;border: 1px solid #C0C0C0;font: normal 10px/12px verdana;color: #000;text-align:left;display: block;');  txtNode = document.createTextNode('div: ' + a[b].id);  aspan.appendChild(txtNode);  a[b].appendChild(aspan);}}"><img border="0" src="images/icons/add.png" style="display:inline; margin-right:8px; margin-top:-5px; vertical-align:middle;" /> DIV Borders & IDs</a><span class="secondary">drag me</span></li>
            </ul>
            
            <img border="0" src="images/icons/folder.png" vspace="5" hspace="5" style="vertical-align:middle; margin-top:-2px;" /> <b>Tool Bookmarklets</b>
            <ul class="menu">
                <li class="showArrow"><a href="javascript: var jsArray = document.getElementsByTagName('script'); var theWinref; var theHTML; var scriptObj; var frameURL; var frameObj;if(jsArray.length > 0) { theWinref = window.open('','_blank','width=320,height=255,toolbar=no,location=no,directories=no,status=yes,menubar=no,resizeable=yes'); theWinref.document.write(' <html> <head> <title>' + window.location.href + ' </title> </head> <body>'+ jsArray.length+' Script(s) Found:'); theWinref.resizeTo(600,200);theWinref.moveTo(0,0); } for (var i = 0; i  < jsArray.length; i++) { scriptObj = jsArray[i]; if(scriptObj.hasAttribute('src')){ frameURL = scriptObj.getAttribute('src'); theWinref.document.write('<p style=background-color:#999933;>Script '+eval(i+1)+' via ' + frameURL + ' <br> <iframe height=100% width=100% id=url'+ i + ' src=' + frameURL + '> </iframe> </p>'); frameObj = theWinref.document.getElementById('url' + i); } else { theHTML = scriptObj.innerHTML; theWinref.document.write('<p style=background-color:#999933;>Script '+eval(i+1)+': <br> <pre>' + theHTML + ' </pre> </p>'); } } if(jsArray.length > 0) { theWinref.document.write(' </body> </html>'); }"><img border="0" src="images/icons/add.png" style="display:inline; margin-right:8px; margin-top:-5px; vertical-align:middle;" /> Dump Scripts</a><span class="secondary">drag me</span></li>
                <li class="showArrow"><a href="javascript: var c='document.location.href',r='';while(c=prompt(r+'Enter the code to be executed:',c)){try{r='Returned: '+eval(c)+'\n';}catch(err){r='Error: '+err.message+'\n';}}"><img border="0" src="images/icons/add.png" style="display:inline; margin-right:8px; margin-top:-5px; vertical-align:middle;" /> Execute Scripts</a><span class="secondary">drag me</span></li>
                <li class="showArrow"><a href="javascript: void(s=prompt('Find text:',''));s='('+s+')';x=new RegExp(s,'gi');rn=Math.floor(Math.random()*100);rid='z' + rn;b = document.body.innerHTML;b=b.replace(x,'<span name=' + rid + ' id=' + rid + ' style=\'color:#000;background-color:yellow; font-weight:bold;\'>$1</span>');void(document.body.innerHTML=b);alert('Found ' + document.getElementsByName(rid).length + ' matches.');window.scrollTo(0,document.getElementsByName(rid)[0].offsetTop);"><img border="0" src="images/icons/add.png" style="display:inline; margin-right:8px; margin-top:-5px; vertical-align:middle;" /> Find on Page</a><span class="secondary">drag me</span></li>
                <li class="showArrow"><a href="javascript: (function(){var a=document.getElementsByTagName('a');for(var i=0,j=a.length;i<j;i++){a[i].setAttribute('target','_blank');var img=document.createElement('img');img.setAttribute('class', 'new-window');img.setAttribute('src','data:image/gif;base64,'+'R0lGODlhEAAMALMLAL66tBISEjExMdTQyBoaGjs7OyUlJWZmZgAAAMzMzP///////wAAAAAAAAAAAAAA'+'ACH5BAEAAAsALAAAAAAQAAwAAAQ/cMlZqr2Tps13yVJBjOT4gYairqohCTDMsu4iHHgwr7UA/LqdopZS'+'DBBIpGG5lBQH0GgtU9xNJ9XZ1cnsNicRADs=');img.setAttribute('style','width:16px!important;height:12px!important;border:none!important;');a[i].appendChild(img);}})();"><img border="0" src="images/icons/add.png" style="display:inline; margin-right:8px; margin-top:-5px; vertical-align:middle;" /> New Windows</a><span class="secondary">drag me</span></li>
                <li class="showArrow"><a href='javascript: var sourceWindow = window.open("about:blank"); var newDoc = sourceWindow.document; newDoc.open(); newDoc.write("<html><head><title>Source of " + document.location.href + "</title><meta name=\"viewport\" id=\"viewport\" content=\"initial-scale=1.0;" + "user-scalable=0; maximum-scale=0.6667; width=480\"/><script>function do_onload()" + "{setTimeout(function(){window.scrollTo(0,1);},100);}if(navigator.userAgent.indexOf" + "(\"iPhone\")!=-1)window.onload=do_onload;</script></head><body></body></html>"); newDoc.close(); var pre = newDoc.body.appendChild(newDoc.createElement("pre")); pre.appendChild(newDoc.createTextNode(document.documentElement.innerHTML));'><img border="0" src="images/icons/add.png" style="display:inline; margin-right:8px; margin-top:-5px; vertical-align:middle;" /> View Source</a><span class="secondary">drag me</span></li>
            </ul>
            
            <img border="0" src="images/icons/folder.png" vspace="5" hspace="5" style="vertical-align:middle; margin-top:-2px;" /> <b>Validator Bookmarklets</b>
            <ul class="menu">
                <li class="showArrow"><a href="javascript: void(window.open('http://jigsaw.w3.org/css-validator/validator?uri='+document.location));"><img border="0" src="images/icons/add.png" style="display:inline; margin-right:8px; margin-top:-5px; vertical-align:middle;" /> Validate CSS</a><span class="secondary">drag me</span></li>
                <li class="showArrow"><a href="javascript: void(window.open('http://validator.w3.org/check?uri='+document.location));"><img border="0" src="images/icons/add.png" style="display:inline; margin-right:8px; margin-top:-5px; vertical-align:middle;" /> Validate HTML</a><span class="secondary">drag me</span></li>
                <li class="showArrow"><a href="javascript: void(window.open('http://validator.w3.org/checklink?url='+document.location));"><img border="0" src="images/icons/add.png" style="display:inline; margin-right:8px; margin-top:-5px; vertical-align:middle;" /> Validate Links</a><span class="secondary">drag me</span></li>
            </ul>
			
            <center><div style="color:#324F85; margin-top:17px;">Created at Manifest Interactive<br />by Peter Schmalfeldt</div></center>
        </div>
    </div>
    
    <!--// INFORMATION //-->
    
    <div id="browser" class="panel" title="Browser Info">
        <div>
            <ul class="menu">
                <li class="showArrow"><a href="javascript:void(0);" onclick="browserDemo();"><img border="0" src="images/icons/script_go.png" style="display:inline; margin-right:8px; margin-top:-5px; vertical-align:middle;" /> Launch Demo</a></li>	    
                <li class="showArrow"><a href="javascript:var n = navigator;var sourceWindow = window.open('about:blank');var newDoc = sourceWindow.document;newDoc.open();newDoc.write('<html><body>\n<table border=1 cellpadding=2 cellspacing=0 width=100%>\n<tr><td><b>appCodeName<\/b><\/td><td>'+n.appCodeName+'<\/td><\/tr>\n<tr><td><b>appName<\/b><\/td><td>'+n.appName+'<\/td><\/tr>\n<tr><td><b>appVersion<\/b><\/td><td>'+n.appVersion+'<\/td><\/tr>\n<tr><td><b>language<\/b><\/td><td>'+n.language+'<\/td><\/tr>\n<tr><td><b>platform<\/b><\/td><td>'+n.platform+'<\/td><\/tr>\n<tr><td><b>userAgent<\/b><\/td><td>'+n.userAgent+'<\/td><\/tr>\n<\/table>\n<\/body><\/html>');newDoc.close();"><img border="0" src="images/icons/add.png" style="display:inline; margin-right:8px; margin-top:-5px; vertical-align:middle;" /> Browser Info</a><span class="secondary">drag me</span></li>
            </ul>
            <img border="0" src="images/icons/information.png" vspace="5" hspace="5" style="vertical-align:middle; margin-top:-2px;" /> <b>Description:</b> Displays your platform and browser properties in a new window.<br /><br />
            <img border="0" src="images/icons/help.png" vspace="5" hspace="5" style="vertical-align:middle; margin-top:-2px;" /> <b>Instructions:</b> Drag &amp; Drop this Bookmarklet into your computers Bookmarks. NOTE: You cannot add this directly to an iPhone.<br />
            <center><div style="color:#324F85; margin-top:17px;">Created at Manifest Interactive<br />by Peter Schmalfeldt</div></center>
        </div>
    </div>
    <div id="cookie" class="panel" title="Cookie">
        <div>
            <ul class="menu">
                <li class="showArrow"><a href="javascript:void(0);" onclick="cookieDemo();"><img border="0" src="images/icons/script_go.png" style="display:inline; margin-right:8px; margin-top:-5px; vertical-align:middle;" /> Launch Demo</a></li>	    
                <li class="showArrow"><a href="javascript: var d=unescape(document.cookie);if(d.length<1)alert('This page doesn\'t use cookies.');else{var a='<html><style type=\'text/css\'>*{font:10px Verdana;}b,.b td{font-weight:bold;}.b td{background-color:#cccccc;}.red{color:red;}.blue{color:blue;}.green{color:green;}</style><body>\n<b>Cookies for: '+location.host+'</b><br /><table border=\'1\' cellpadding=\'2\' cellspacing=\'0\' width=\'100%\'>\n<tr class=\'b\'><td>Field</td><td>Value</td></tr>',c=d.split(';');for(x=0;x<c.length;x++){var f=c[x].split('='),cF=f[0],cV=c[x].replace(f[0],''),cV2=(cV.split('=').length>1)?cV.replace(/&/g,'<br />'):cV;a+='\n<tr><td class=\'red\' valign=\'top\'>'+cF+'</td><td class=\''+((cV==cV2)?'blue':'green')+'\'>'+cV2+'</td></tr>';}a+='\n</table>\n</body></html>';wC=window.open('','Cookies','scrollbars,resizable,top=0,left=0,width=500,height=400');wC.document.write(a);}"><img border="0" src="images/icons/add.png" style="display:inline; margin-right:8px; margin-top:-5px; vertical-align:middle;" /> Cookie</a><span class="secondary">drag me</span></li>
            </ul>
            <img border="0" src="images/icons/information.png" vspace="5" hspace="5" style="vertical-align:middle; margin-top:-2px;" /> <b>Description:</b> If the site you're on uses cookies, this displays its variables and values.<br /><br />
            <img border="0" src="images/icons/help.png" vspace="5" hspace="5" style="vertical-align:middle; margin-top:-2px;" /> <b>Instructions:</b> Drag &amp; Drop this Bookmarklet into your computers Bookmarks. NOTE: You cannot add this directly to an iPhone.<br />
            <center><div style="color:#324F85; margin-top:17px;">Created at Manifest Interactive<br />by Peter Schmalfeldt</div></center>
        </div>
    </div>
    <div id="lastmod" class="panel" title="Last Modified">
        <div>
            <ul class="menu">
                <li class="showArrow"><a href="javascript:void(0);" onclick="lastmodDemo();"><img border="0" src="images/icons/script_go.png" style="display:inline; margin-right:8px; margin-top:-5px; vertical-align:middle;" /> Launch Demo</a></li>	    
                <li class="showArrow"><a href="javascript: alert('Modification Date: '+document.lastModified);"><img border="0" src="images/icons/add.png" style="display:inline; margin-right:8px; margin-top:-5px; vertical-align:middle;" /> Last Modified</a><span class="secondary">drag me</span></li>
            </ul>
            <img border="0" src="images/icons/information.png" vspace="5" hspace="5" style="vertical-align:middle; margin-top:-2px;" /> <b>Description:</b> Displays the date the page was last modified.<br /><br />
            <img border="0" src="images/icons/help.png" vspace="5" hspace="5" style="vertical-align:middle; margin-top:-2px;" /> <b>Instructions:</b> Drag &amp; Drop this Bookmarklet into your computers Bookmarks. NOTE: You cannot add this directly to an iPhone.<br />
            <center><div style="color:#324F85; margin-top:17px;">Created at Manifest Interactive<br />by Peter Schmalfeldt</div></center>
        </div>
    </div>
    <div id="listimages" class="panel" title="List Images">
        <div>
            <ul class="menu">
                <li class="showArrow"><a href="javascript:void(0);" onclick="listimagesDemo();"><img border="0" src="images/icons/script_go.png" style="display:inline; margin-right:8px; margin-top:-5px; vertical-align:middle;" /> Launch Demo</a></li>	    
                <li class="showArrow"><a href="javascript: var b='<html><body>';function P(i,t){a='<center>\n<table border=\'1\' cellspacing=\'0\'>\n<tr><td colspan=\'2\' align=\'center\'><b>'+i.length+' images in '+t+'</b></td></tr>';for(x=0;x<i.length;x++)if(a.indexOf(i[x].src)==-1){a+='\n<tr><td colspan=\'2\'>';if(i[x].name.length>0)a+='<b>name: </b>'+i[x].name+'<br>';if(i[x].id.length>0)a+='<b>id: </b>'+i[x].id+'<br>';if(i[x].alt.length>0)a+='<b>alt: </b>'+i[x].alt+'<br>';a+='<font face=\'Arial\' size=\'-1\' color=\'#993333\'>'+i[x].src+'</font></font></td></tr>\n<tr><td align=\'center\' nowrap=\'nowrap\'>'+i[x].width+' x '+i[x].height+'</td><td align=\'center\' background=\'http://samrod.com/img/checkers.gif\' bgcolor=\'#DDDDDD\'><img src=\''+i[x].src+'\'></td></tr>';}return a+'\n</table>\n</center>';}b+=P(document.images,'this page');for(z=0;z<frames.length;z++)b+='\n<br><b>Frame '+z+'</b>: '+frames[z].name+'<br>\n<b>url:</b>'+frames[z].location.href+P(frames[z].document.images,'frame '+z);w=window.open('','Images','resizable,scrollbars,width=600,height=600,top=0,left=0');w.document.write(b+'\n</body></html>');"><img border="0" src="images/icons/add.png" style="display:inline; margin-right:8px; margin-top:-5px; vertical-align:middle;" /> List Images</a><span class="secondary">drag me</span></li>
            </ul>
            <img border="0" src="images/icons/information.png" vspace="5" hspace="5" style="vertical-align:middle; margin-top:-2px;" /> <b>Description:</b> Opens a new window listing all the images in the current page, with their dimensions in the left column. Now lists images in pages with iframes as well as any images in local iframes.<br /><br />
            <img border="0" src="images/icons/help.png" vspace="5" hspace="5" style="vertical-align:middle; margin-top:-2px;" /> <b>Instructions:</b> Drag &amp; Drop this Bookmarklet into your computers Bookmarks. NOTE: You cannot add this directly to an iPhone.<br />
            <center><div style="color:#324F85; margin-top:17px;">Created at Manifest Interactive<br />by Peter Schmalfeldt</div></center>
        </div>
    </div>
    <div id="listlinks" class="panel" title="List Links">
        <div>
            <ul class="menu">
                <li class="showArrow"><a href="javascript:void(0);" onclick="listlinksDemo();"><img border="0" src="images/icons/script_go.png" style="display:inline; margin-right:8px; margin-top:-5px; vertical-align:middle;" /> Launch Demo</a></li>	    
                <li class="showArrow"><a href="javascript: var a='';for(var ln=0;ln<document.links.length;ln++){var lk=document.links[ln];a+=ln+': <a href=\''+lk+'\' title=\''+lk.text+'\'>'+lk+'</a><br>\n';}w=window.open('','Links','scrollbars,resizable,width=400,height=600');w.document.write(a);"><img border="0" src="images/icons/add.png" style="display:inline; margin-right:8px; margin-top:-5px; vertical-align:middle;" /> List Links</a><span class="secondary">drag me</span></li>
            </ul>
            <img border="0" src="images/icons/information.png" vspace="5" hspace="5" style="vertical-align:middle; margin-top:-2px;" /> <b>Description:</b> Displays all the links in the current page in a new browser window. This is the first version and will likely get better.<br /><br />
            <img border="0" src="images/icons/help.png" vspace="5" hspace="5" style="vertical-align:middle; margin-top:-2px;" /> <b>Instructions:</b> Drag &amp; Drop this Bookmarklet into your computers Bookmarks. NOTE: You cannot add this directly to an iPhone.<br />
            <center><div style="color:#324F85; margin-top:17px;">Created at Manifest Interactive<br />by Peter Schmalfeldt</div></center>
        </div>
    </div>
    <div id="query" class="panel" title="Query String">
        <div>
            <ul class="menu">
                <li class="showArrow"><a href="javascript:void(0);" onclick="queryDemo();"><img border="0" src="images/icons/script_go.png" style="display:inline; margin-right:8px; margin-top:-5px; vertical-align:middle;" /> Launch Demo</a></li>	    
                <li class="showArrow"><a href="javascript: d=unescape(location.search);if(d.length<1)alert('The current URL doesn\'t have a query string.');else{a='<html><body>\n<table border=1 cellpadding=2 cellspacing=0 width=100%>\n<tr><td bgcolor=\'#CCCCCC\' align=\'center\'><b>Field</b></td><td bgcolor=\'#CCCCCC\' align=\'center\'><B>Value</B></td></tr>';c=d.split('&');for(x=0;x<c.length;x++){f=c[x].split('=');a+='\n<tr><td><font color=\'#CC0000\'>'+f[0].replace(/\?/,'')+'</font></td><td><font color=\'#0000CC\'>'+c[x].replace(f[0],'').replace(/^=/,'')+'</font></td></tr>';}a+='\n</table>\n</body></html>';w=window.open('','Query','scrollbars,resizable,top=0,left=0,width=500,height=400');w.document.write(a);}"><img border="0" src="images/icons/add.png" style="display:inline; margin-right:8px; margin-top:-5px; vertical-align:middle;" /> Query String</a><span class="secondary">drag me</span></li>
            </ul>
            <img border="0" src="images/icons/information.png" vspace="5" hspace="5" style="vertical-align:middle; margin-top:-2px;" /> <b>Description:</b> Displays the information in the query string used to load the current page.<br /><br />
            <img border="0" src="images/icons/help.png" vspace="5" hspace="5" style="vertical-align:middle; margin-top:-2px;" /> <b>Instructions:</b> Drag &amp; Drop this Bookmarklet into your computers Bookmarks. NOTE: You cannot add this directly to an iPhone.<br />
            <center><div style="color:#324F85; margin-top:17px;">Created at Manifest Interactive<br />by Peter Schmalfeldt</div></center>
        </div>
    </div>
    <div id="referrer" class="panel" title="Referrer">
        <div>
            <ul class="menu">
                <li class="showArrow"><a href="javascript:void(0);" onclick="referrerDemo();"><img border="0" src="images/icons/script_go.png" style="display:inline; margin-right:8px; margin-top:-5px; vertical-align:middle;" /> Launch Demo</a></li>	    
                <li class="showArrow"><a href="javascript: a=(document.referrer.length>0)?document.referrer:'Referrer not available.';alert(a);"><img border="0" src="images/icons/add.png" style="display:inline; margin-right:8px; margin-top:-5px; vertical-align:middle;" /> Referrer</a><span class="secondary">drag me</span></li>
            </ul>
            <img border="0" src="images/icons/information.png" vspace="5" hspace="5" style="vertical-align:middle; margin-top:-2px;" /> <b>Description:</b> Displays the URL of the calling document if available.<br /><br />
            <img border="0" src="images/icons/help.png" vspace="5" hspace="5" style="vertical-align:middle; margin-top:-2px;" /> <b>Instructions:</b> Drag &amp; Drop this Bookmarklet into your computers Bookmarks. NOTE: You cannot add this directly to an iPhone.<br />
            <center><div style="color:#324F85; margin-top:17px;">Created at Manifest Interactive<br />by Peter Schmalfeldt</div></center>
        </div>
    </div>
    <div id="whois" class="panel" title="Whois">
        <div>
            <ul class="menu">
                <li class="showArrow"><a href="javascript:void(0);" onclick="whoisDemo();"><img border="0" src="images/icons/script_go.png" style="display:inline; margin-right:8px; margin-top:-5px; vertical-align:middle;" /> Launch Demo</a></li>	    
                <li class="showArrow"><a href="javascript: void(window.open('http://www.networksolutions.com/whois/results.jsp?domain='+location.hostname));"><img border="0" src="images/icons/add.png" style="display:inline; margin-right:8px; margin-top:-5px; vertical-align:middle;" /> Whois</a><span class="secondary">drag me</span></li>
            </ul>
            <img border="0" src="images/icons/information.png" vspace="5" hspace="5" style="vertical-align:middle; margin-top:-2px;" /> <b>Description:</b> Displays the current whois information on the current domain in a new window.<br /><br />
            <img border="0" src="images/icons/help.png" vspace="5" hspace="5" style="vertical-align:middle; margin-top:-2px;" /> <b>Instructions:</b> Drag &amp; Drop this Bookmarklet into your computers Bookmarks. NOTE: You cannot add this directly to an iPhone.<br />
            <center><div style="color:#324F85; margin-top:17px;">Created at Manifest Interactive<br />by Peter Schmalfeldt</div></center>
        </div>
    </div>
    
    <!--// OUTLINE //-->
    
    <div id="showtables" class="panel" title="Tables">
        <div>
            <ul class="menu">
                <li class="showArrow"><a href="javascript:void(0);" onclick="showtablesDemo();"><img border="0" src="images/icons/script_go.png" style="display:inline; margin-right:8px; margin-top:-5px; vertical-align:middle;" /> Launch Demo</a></li>	    
                <li class="showArrow"><a href="javascript: var f=function(tt,col){var a=document.getElementsByTagName(tt);for(var b=0;b<a.length;b++){a[b].style.border='1px solid #'+col;}};f('table','00F');f('td','0F0');f('th','0FF');"><img border="0" src="images/icons/add.png" style="display:inline; margin-right:8px; margin-top:-5px; vertical-align:middle;" /> Tables</a><span class="secondary">drag me</span></li>
            </ul>
            <table border="0" cellspacing="0" cellpadding="0"><tr><td><img border="0" src="images/icons/information.png" vspace="5" hspace="5" style="vertical-align:middle; margin-top:-2px;" /> <b>Description:</b> Displays a border around all tables, rows and columns. This one is very useful for determining if your tables are well-formed.</td></tr></table><br />
            <img border="0" src="images/icons/help.png" vspace="5" hspace="5" style="vertical-align:middle; margin-top:-2px;" /> <b>Instructions:</b> Drag &amp; Drop this Bookmarklet into your computers Bookmarks. NOTE: You cannot add this directly to an iPhone.<br />
            <center><div style="color:#324F85; margin-top:17px;">Created at Manifest Interactive<br />by Peter Schmalfeldt</div></center>
        </div>
    </div>
    <div id="showdiv" class="panel" title="DIV Borders">
        <div>
            <ul class="menu">
                <li class="showArrow"><a href="javascript:void(0);" onclick="showdivDemo();"><img border="0" src="images/icons/script_go.png" style="display:inline; margin-right:8px; margin-top:-5px; vertical-align:middle;" /> Launch Demo</a></li>	    
                <li class="showArrow"><a href="javascript: var a=document.getElementsByTagName('div');for(var b=0;b<a.length;b++){a[b].style.border='1px solid #F00';}"><img border="0" src="images/icons/add.png" style="display:inline; margin-right:8px; margin-top:-5px; vertical-align:middle;" /> DIV Borders</a><span class="secondary">drag me</span></li>
            </ul>
            <img border="0" src="images/icons/information.png" vspace="5" hspace="5" style="vertical-align:middle; margin-top:-2px;" /> <b>Description:</b> Displays a border around all DIV elements on the current page.<br /><br />
            <img border="0" src="images/icons/help.png" vspace="5" hspace="5" style="vertical-align:middle; margin-top:-2px;" /> <b>Instructions:</b> Drag &amp; Drop this Bookmarklet into your computers Bookmarks. NOTE: You cannot add this directly to an iPhone.<br />
            <center><div style="color:#324F85; margin-top:17px;">Created at Manifest Interactive<br />by Peter Schmalfeldt</div></center>
        </div>
    </div>
    <div id="showdivid" class="panel" title="DIV Borders &amp; IDs">
        <div>
            <ul class="menu">
                <li class="showArrow"><a href="javascript:void(0);" onclick="showdividDemo();"><img border="0" src="images/icons/script_go.png" style="display:inline; margin-right:8px; margin-top:-5px; vertical-align:middle;" /> Launch Demo</a></li>	    
                <li class="showArrow"><a href="javascript: var a=document.getElementsByTagName('div');var aspan;var txtNode;for(var b=0; b < a.length;b++){ a[b].style.border='1px solid red';  if(a[b].id != ''){  aspan = document.createElement('span');  aspan.setAttribute('id', 't_ttp' + a[b].id);  aspan.setAttribute('style', 'position:relative;top:1px;left:1px; margin:10px 0px 0px 10px;background-color: beige;max-width:220;padding: 2px 10px 2px 10px;border: 1px solid #C0C0C0;font: normal 10px/12px verdana;color: #000;text-align:left;display: block;');  txtNode = document.createTextNode('div: ' + a[b].id);  aspan.appendChild(txtNode);  a[b].appendChild(aspan);}}"><img border="0" src="images/icons/add.png" style="display:inline; margin-right:8px; margin-top:-5px; vertical-align:middle;" /> DIV Borders &amp; IDs</a><span class="secondary">drag me</span></li>
            </ul>
            <img border="0" src="images/icons/information.png" vspace="5" hspace="5" style="vertical-align:middle; margin-top:-2px;" /> <b>Description:</b> Displays the ID and a border around all DIV elements on the current<br /><br />
            <img border="0" src="images/icons/help.png" vspace="5" hspace="5" style="vertical-align:middle; margin-top:-2px;" /> <b>Instructions:</b> Drag &amp; Drop this Bookmarklet into your computers Bookmarks. NOTE: You cannot add this directly to an iPhone.<br />
            <center><div style="color:#324F85; margin-top:17px;">Created at Manifest Interactive<br />by Peter Schmalfeldt</div></center>
        </div>
    </div>
    
    <!--// TOOLS //-->
    
    <div id="dump" class="panel" title="Dump Scripts">
        <div>
            <ul class="menu">
                <li class="showArrow"><a href="javascript:void(0);" onclick="dumpDemo();"><img border="0" src="images/icons/script_go.png" style="display:inline; margin-right:8px; margin-top:-5px; vertical-align:middle;" /> Launch Demo</a></li>	    
                <li class="showArrow"><a href="javascript: var jsArray = document.getElementsByTagName('script'); var theWinref; var theHTML; var scriptObj; var frameURL; var frameObj;if(jsArray.length > 0) { theWinref = window.open('','_blank','width=320,height=255,toolbar=no,location=no,directories=no,status=yes,menubar=no,resizeable=yes'); theWinref.document.write(' <html> <head> <title>' + window.location.href + ' </title> </head> <body>'+ jsArray.length+' Script(s) Found:'); theWinref.resizeTo(600,200);theWinref.moveTo(0,0); } for (var i = 0; i  < jsArray.length; i++) { scriptObj = jsArray[i]; if(scriptObj.hasAttribute('src')){ frameURL = scriptObj.getAttribute('src'); theWinref.document.write('<p style=background-color:#999933;>Script '+eval(i+1)+' via ' + frameURL + ' <br> <iframe height=100% width=100% id=url'+ i + ' src=' + frameURL + '> </iframe> </p>'); frameObj = theWinref.document.getElementById('url' + i); } else { theHTML = scriptObj.innerHTML; theWinref.document.write('<p style=background-color:#999933;>Script '+eval(i+1)+': <br> <pre>' + theHTML + ' </pre> </p>'); } } if(jsArray.length > 0) { theWinref.document.write(' </body> </html>'); }"><img border="0" src="images/icons/add.png" style="display:inline; margin-right:8px; margin-top:-5px; vertical-align:middle;" /> Dump Scripts</a><span class="secondary">drag me</span></li>
            </ul>
            <img border="0" src="images/icons/information.png" vspace="5" hspace="5" style="vertical-align:middle; margin-top:-2px;" /> <b>Description:</b> Displays a new window containing all the JavaScript on or linked to the current page. Use to look for unsupported DOM calls like document.all, document.layers, etc...<br /><br />
            <img border="0" src="images/icons/help.png" vspace="5" hspace="5" style="vertical-align:middle; margin-top:-2px;" /> <b>Instructions:</b> Drag &amp; Drop this Bookmarklet into your computers Bookmarks. NOTE: You cannot add this directly to an iPhone.<br />
            <center><div style="color:#324F85; margin-top:17px;">Created at Manifest Interactive<br />by Peter Schmalfeldt</div></center>
        </div>
    </div>
    <div id="execute" class="panel" title="Execute Scripts">
        <div>
            <ul class="menu">
                <li class="showArrow"><a href="javascript:void(0);" onclick="executeDemo();"><img border="0" src="images/icons/script_go.png" style="display:inline; margin-right:8px; margin-top:-5px; vertical-align:middle;" /> Launch Demo</a></li>	    
                <li class="showArrow"><a href="javascript: var c='document.location.href',r='';while(c=prompt(r+'Enter the code to be executed:',c)){try{r='Returned: '+eval(c)+'\n';}catch(err){r='Error: '+err.message+'\n';}}"><img border="0" src="images/icons/add.png" style="display:inline; margin-right:8px; margin-top:-5px; vertical-align:middle;" /> Execute Scripts</a><span class="secondary">drag me</span></li>
            </ul>
            <img border="0" src="images/icons/information.png" vspace="5" hspace="5" style="vertical-align:middle; margin-top:-2px;" /> <b>Description:</b> Displays an input dialog that allows you to execute JavaScript in the context of the current page.<br /><br />
            <img border="0" src="images/icons/help.png" vspace="5" hspace="5" style="vertical-align:middle; margin-top:-2px;" /> <b>Instructions:</b> Drag &amp; Drop this Bookmarklet into your computers Bookmarks. NOTE: You cannot add this directly to an iPhone.<br />
            <center><div style="color:#324F85; margin-top:17px;">Created at Manifest Interactive<br />by Peter Schmalfeldt</div></center>
        </div>
    </div>
    <div id="find" class="panel" title="Find on Page">
        <div>
            <ul class="menu">
                <li class="showArrow"><a href="javascript:void(0);" onclick="findDemo();"><img border="0" src="images/icons/script_go.png" style="display:inline; margin-right:8px; margin-top:-5px; vertical-align:middle;" /> Launch Demo</a></li>	    
                <li class="showArrow"><a href="javascript: void(s=prompt('Find text:',''));s='('+s+')';x=new RegExp(s,'gi');rn=Math.floor(Math.random()*100);rid='z' + rn;b = document.body.innerHTML;b=b.replace(x,'<span name=' + rid + ' id=' + rid + ' style=\'color:#000;background-color:yellow; font-weight:bold;\'>$1</span>');void(document.body.innerHTML=b);alert('Found ' + document.getElementsByName(rid).length + ' matches.');window.scrollTo(0,document.getElementsByName(rid)[0].offsetTop);"><img border="0" src="images/icons/add.png" style="display:inline; margin-right:8px; margin-top:-5px; vertical-align:middle;" /> Find on Page</a><span class="secondary">drag me</span></li>
            </ul>
            <img border="0" src="images/icons/information.png" vspace="5" hspace="5" style="vertical-align:middle; margin-top:-2px;" /> <b>Description:</b> Highlights all the occurences of your search in the current page.<br /><br />
            <img border="0" src="images/icons/help.png" vspace="5" hspace="5" style="vertical-align:middle; margin-top:-2px;" /> <b>Instructions:</b> Drag &amp; Drop this Bookmarklet into your computers Bookmarks. NOTE: You cannot add this directly to an iPhone.<br />
            <center><div style="color:#324F85; margin-top:17px;">Created at Manifest Interactive<br />by Peter Schmalfeldt</div></center>
        </div>
    </div>
    <div id="blank" class="panel" title="New Windows">
        <div>
            <ul class="menu">
                <li class="showArrow"><a href="javascript:void(0);" onclick="blankDemo();"><img border="0" src="images/icons/script_go.png" style="display:inline; margin-right:8px; margin-top:-5px; vertical-align:middle;" /> Launch Demo</a></li>	    
                <li class="showArrow"><a href="javascript: (function(){var a=document.getElementsByTagName('a');for(var i=0,j=a.length;i<j;i++){a[i].setAttribute('target','_blank');var img=document.createElement('img');img.setAttribute('class', 'new-window');img.setAttribute('src','data:image/gif;base64,'+'R0lGODlhEAAMALMLAL66tBISEjExMdTQyBoaGjs7OyUlJWZmZgAAAMzMzP///////wAAAAAAAAAAAAAA'+'ACH5BAEAAAsALAAAAAAQAAwAAAQ/cMlZqr2Tps13yVJBjOT4gYairqohCTDMsu4iHHgwr7UA/LqdopZS'+'DBBIpGG5lBQH0GgtU9xNJ9XZ1cnsNicRADs=');img.setAttribute('style','width:16px!important;height:12px!important;border:none!important;');a[i].appendChild(img);}})();"><img border="0" src="images/icons/add.png" style="display:inline; margin-right:8px; margin-top:-5px; vertical-align:middle;" /> New Windows</a><span class="secondary">drag me</span></li>
            </ul>
            <img border="0" src="images/icons/information.png" vspace="5" hspace="5" style="vertical-align:middle; margin-top:-2px;" /> <b>Description:</b> Force all links on the page to open in a new window.<br /><br />
            <img border="0" src="images/icons/help.png" vspace="5" hspace="5" style="vertical-align:middle; margin-top:-2px;" /> <b>Instructions:</b> Drag &amp; Drop this Bookmarklet into your computers Bookmarks. NOTE: You cannot add this directly to an iPhone.<br />
            <center><div style="color:#324F85; margin-top:17px;">Created at Manifest Interactive<br />by Peter Schmalfeldt</div></center>
        </div>
    </div>
    <div id="viewsrc" class="panel" title="View Source">
        <div>
            <ul class="menu">
                <li class="showArrow"><a href="javascript:void(0);" onclick="viewsrcDemo();"><img border="0" src="images/icons/script_go.png" style="display:inline; margin-right:8px; margin-top:-5px; vertical-align:middle;" /> Launch Demo</a></li>	    
                <li class="showArrow"><a href='javascript: var sourceWindow = window.open("about:blank"); var newDoc = sourceWindow.document; newDoc.open(); newDoc.write("<html><head><title>Source of " + document.location.href + "</title><meta name=\"viewport\" id=\"viewport\" content=\"initial-scale=1.0;" + "user-scalable=0; maximum-scale=0.6667; width=480\"/><script>function do_onload()" + "{setTimeout(function(){window.scrollTo(0,1);},100);}if(navigator.userAgent.indexOf" + "(\"iPhone\")!=-1)window.onload=do_onload;</script></head><body></body></html>"); newDoc.close(); var pre = newDoc.body.appendChild(newDoc.createElement("pre")); pre.appendChild(newDoc.createTextNode(document.documentElement.innerHTML));'><img border="0" src="images/icons/add.png" style="display:inline; margin-right:8px; margin-top:-5px; vertical-align:middle;" /> View Source</a><span class="secondary">drag me</span></li>
            </ul>
            <img border="0" src="images/icons/information.png" vspace="5" hspace="5" style="vertical-align:middle; margin-top:-2px;" /> <b>Description:</b> View the Source Code for the current page.<br /><br />
            <img border="0" src="images/icons/help.png" vspace="5" hspace="5" style="vertical-align:middle; margin-top:-2px;" /> <b>Instructions:</b> Drag &amp; Drop this Bookmarklet into your computers Bookmarks. NOTE: You cannot add this directly to an iPhone.<br />
            <center><div style="color:#324F85; margin-top:17px;">Created at Manifest Interactive<br />by Peter Schmalfeldt</div></center>
        </div>
    </div>

	<!--// VALIDATORS //-->
    
    <div id="valcss" class="panel" title="Validate CSS">
        <div>
            <ul class="menu">
                <li class="showArrow"><a href="javascript:void(0);" onclick="valcssDemo();"><img border="0" src="images/icons/script_go.png" style="display:inline; margin-right:8px; margin-top:-5px; vertical-align:middle;" /> Launch Demo</a></li>	    
                <li class="showArrow"><a href="javascript: void(window.open('http://jigsaw.w3.org/css-validator/validator?uri='+document.location));"><img border="0" src="images/icons/add.png" style="display:inline; margin-right:8px; margin-top:-5px; vertical-align:middle;" /> Validate CSS</a><span class="secondary">drag me</span></li>
            </ul>
            <img border="0" src="images/icons/information.png" vspace="5" hspace="5" style="vertical-align:middle; margin-top:-2px;" /> <b>Description:</b> Sends the current URL to the W3 for CSS Validation. URL must be visible outside the firewall.<br /><br />
            <img border="0" src="images/icons/help.png" vspace="5" hspace="5" style="vertical-align:middle; margin-top:-2px;" /> <b>Instructions:</b> Drag &amp; Drop this Bookmarklet into your computers Bookmarks. NOTE: You cannot add this directly to an iPhone.<br />
            <center><div style="color:#324F85; margin-top:17px;">Created at Manifest Interactive<br />by Peter Schmalfeldt</div></center>
        </div>
    </div>
    <div id="valhtml" class="panel" title="Validate HTML">
        <div>
            <ul class="menu">
                <li class="showArrow"><a href="javascript:void(0);" onclick="valhtmlDemo();"><img border="0" src="images/icons/script_go.png" style="display:inline; margin-right:8px; margin-top:-5px; vertical-align:middle;" /> Launch Demo</a></li>	    
                <li class="showArrow"><a href="javascript: void(window.open('http://validator.w3.org/check?uri='+document.location));"><img border="0" src="images/icons/add.png" style="display:inline; margin-right:8px; margin-top:-5px; vertical-align:middle;" /> Validate HTML</a><span class="secondary">drag me</span></li>
            </ul>
            <img border="0" src="images/icons/information.png" vspace="5" hspace="5" style="vertical-align:middle; margin-top:-2px;" /> <b>Description:</b> Sends the current URL to the W3 for HTML Validation. URL must be visible outside the firewall.<br /><br />
            <img border="0" src="images/icons/help.png" vspace="5" hspace="5" style="vertical-align:middle; margin-top:-2px;" /> <b>Instructions:</b> Drag &amp; Drop this Bookmarklet into your computers Bookmarks. NOTE: You cannot add this directly to an iPhone.<br />
            <center><div style="color:#324F85; margin-top:17px;">Created at Manifest Interactive<br />by Peter Schmalfeldt</div></center>
        </div>
    </div>
    <div id="valhref" class="panel" title="Validate Links">
        <div>
            <ul class="menu">
                <li class="showArrow"><a href="javascript:void(0);" onclick="valhrefDemo();"><img border="0" src="images/icons/script_go.png" style="display:inline; margin-right:8px; margin-top:-5px; vertical-align:middle;" /> Launch Demo</a></li>	    
                <li class="showArrow"><a href="javascript: void(window.open('http://validator.w3.org/checklink?url='+document.location));"><img border="0" src="images/icons/add.png" style="display:inline; margin-right:8px; margin-top:-5px; vertical-align:middle;" /> Validate Links</a><span class="secondary">drag me</span></li>
            </ul>
            <img border="0" src="images/icons/information.png" vspace="5" hspace="5" style="vertical-align:middle; margin-top:-2px;" /> <b>Description:</b> Sends the current URL to the W3 for Link Validation. URL must be visible outside the firewall.<br /><br />
            <img border="0" src="images/icons/help.png" vspace="5" hspace="5" style="vertical-align:middle; margin-top:-2px;" /> <b>Instructions:</b> Drag &amp; Drop this Bookmarklet into your computers Bookmarks. NOTE: You cannot add this directly to an iPhone.<br />
            <center><div style="color:#324F85; margin-top:17px;">Created at Manifest Interactive<br />by Peter Schmalfeldt</div></center>
        </div>
    </div>
	<script src="http://www.google-analytics.com/urchin.js" type="text/javascript" language="javascript"></script>
    <script type="text/javascript" language="javascript">
    _uacct = "UA-513035-4";
    urchinTracker();
    </script>
</body>
</html>
