function getXMLHttp() {
	var xmlHttp;
	try {
		xmlHttp = new XMLHttpRequest();
	}
	catch(e) {
		try {
			xmlHttp = ActiveXObject("Msxml2.XMLHTTP");
		}
		catch(e) {
			try {
				xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			catch(e) {
				alert("The browser version is too old for AJAX.");
			}
		}
	}
	return xmlHttp;
}

function AJAXRequest() {
	var xmlHttp = getXMLHttp();
	xmlHttp.onreadystatechange = function() {
		if (xmlHttp.readyState == 4) {
			HandleResponse(xmlHttp.responseText);
		}
	}
	xmlHttp.open("GET","./controller/search-stop.php",true);
	xmlHttp.send(null);
}

function HandleResponse(response) {
	document.getElementById('search-results').innerHTML = response;
}
