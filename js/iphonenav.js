
(function() {

var animateX = -20;
var animateInterval = 24;

var currentPage = null;
var currentDialog = null;
var currentWidth = 0;
var currentHash = location.hash;
var hashPrefix = "#_";
var pageHistory = [];

addEventListener("load", function(event)
{
    var body = document.getElementsByTagName("body")[0];
    for (var child = body.firstChild; child; child = child.nextSibling)
    {
        if (child.nodeType == 1 && child.getAttribute("selected") == "true")
        {
            showPage(child);
            break;
        }
    }

    setInterval(checkOrientAndLocation, 300);
    setTimeout(scrollTo, 0, 0, 1);
}, false);
    
addEventListener("click", function(event)
{
    event.preventDefault();

    var link = event.target;
    while (link && link.localName.toLowerCase() != "a")
        link = link.parentNode;

    if (link && link.hash)
    {
        var page = document.getElementById(link.hash.substr(1));
        showPage(page);
    }
}, true);

function checkOrientAndLocation()
{
    if (window.outerWidth != currentWidth)
    {
        currentWidth = window.outerWidth;

        var orient = currentWidth == 320 ? "profile" : "landscape";
        document.body.setAttribute("orient", orient);
    }

    if (location.hash != currentHash)
    {
        currentHash = location.hash;

        var pageId = currentHash.substr(hashPrefix.length);
        var page = document.getElementById(pageId);
        if (page)
        {
            var index = pageHistory.indexOf(pageId);
            var backwards = index != -1;
            if (backwards)
                pageHistory.splice(index, pageHistory.length);
                
            showPage(page, backwards);
        }
    }
}
    
function showPage(page, backwards)
{
    if (currentDialog)
    {
        currentDialog.removeAttribute("selected");
        currentDialog = null;
    }

    if (page.className.indexOf("dialog") != -1)
        showDialog(page);
    else
    {        
        location.href = currentHash = hashPrefix + page.id;
        pageHistory.push(page.id);

        var fromPage = currentPage;
        currentPage = page;

        var pageTitle = document.getElementById("pageTitle");
        pageTitle.innerHTML = page.title || "";

        var WebdevButton = document.getElementById("WebdevButton");
        if (WebdevButton){
            if( page.id == 'intro' 
			 || page.id == 'about' 
			 || page.id == 'Bookmarklets'){
				WebdevButton.style.display = 'inline';
			} else {
				WebdevButton.style.display = 'none';
			}
		}
		
		var BookmarkletsButton = document.getElementById("BookmarkletsButton");
        if (BookmarkletsButton){
            if( page.id == 'All'
			 || page.id == 'Information' 
			 || page.id == 'Outline' 
			 || page.id == 'Tools' 
			 || page.id == 'Validators'){
				BookmarkletsButton.style.display = 'inline';
			} else {
				BookmarkletsButton.style.display = 'none';
			}
		}
		
		var InformationButton = document.getElementById("InformationButton");
		if (InformationButton){
            if(	page.id == 'browser' 
			 || page.id == 'cookie' 
			 || page.id == 'lastmod' 
			 || page.id == 'listimages' 
			 || page.id == 'listlinks' 
			 || page.id == 'query' 
			 || page.id == 'referrer' 
			 || page.id == 'whois'){
				InformationButton.style.display = 'inline';
			} else {
				InformationButton.style.display = 'none';
			}
		}

		var OutlineButton = document.getElementById("OutlineButton");
		if (OutlineButton){
            if(	page.id == 'showtables' 
			 || page.id == 'showdiv' 
			 || page.id == 'showdivid'){
				OutlineButton.style.display = 'inline';
			} else {
				OutlineButton.style.display = 'none';
			}
		}
		
		var ToolsButton = document.getElementById("ToolsButton");
		if (ToolsButton){
            if(	page.id == 'dump' 
			 || page.id == 'execute' 
			 || page.id == 'find' 
			 || page.id == 'blank' 
			 || page.id == 'viewsrc'){
				ToolsButton.style.display = 'inline';
			} else {
				ToolsButton.style.display = 'none';
			}
		}
		
		var ValidatorsButton = document.getElementById("ValidatorsButton");
		if (ValidatorsButton){
            if(	page.id == 'valcss' 
			 || page.id == 'valhtml' 
			 || page.id == 'valhref'){
				ValidatorsButton.style.display = 'inline';
			} else {
				ValidatorsButton.style.display = 'none';
			}
		}

        if (fromPage)
            setTimeout(swipePage, 0, fromPage, page, backwards);
    }
}

function swipePage(fromPage, toPage, backwards)
{        
    toPage.style.left = "100%";
    toPage.setAttribute("selected", "true");
    scrollTo(0, 1);
    
    var percent = 100;
    var timer = setInterval(function()
    {
        percent += animateX;
        if (percent <= 0)
        {
            percent = 0;
            fromPage.removeAttribute("selected");
            clearInterval(timer);
        }

        fromPage.style.left = (backwards ? (100-percent) : (percent-100)) + "%"; 
        toPage.style.left = (backwards ? -percent : percent) + "%"; 
    }, animateInterval);
}

function showDialog(form)
{
    currentDialog = form;
    form.setAttribute("selected", "true");
    
    form.onsubmit = function(event)
    {
        event.preventDefault();
        form.removeAttribute("selected");

        var index = form.action.lastIndexOf("#");
        if (index != -1)
            showPage(document.getElementById(form.action.substr(index+1)));
    }

    form.onclick = function(event)
    {
        if (event.target == form)
            form.removeAttribute("selected");
    }
}

})();
