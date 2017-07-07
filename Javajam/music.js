// Put your Last.fm API key here
var api_key = "234c55218141bb27464bffb4cc6a9897";

function sendRequest () {
    var xhr = new XMLHttpRequest();
	var xhrs = new XMLHttpRequest();
	var xhrss = new XMLHttpRequest();
    var method = "artist.getinfo";
	var methods= "artist.gettopalbums";
	var methodss= "artist.getsimilar";
    var artist = encodeURI(document.getElementById("form-input").value);
    xhr.open("GET", "proxy.php?method="+method+"&artist="+artist+"&api_key="+api_key+"&format=json", true);
	xhrs.open("GET", "proxy.php?method="+methods+"&artist="+artist+"&api_key="+api_key+"&format=json", true);
	xhrss.open("GET", "proxy.php?method="+methodss+"&artist="+artist+"&api_key="+api_key+"&format=json", true);
    xhr.setRequestHeader("Accept","application/json");
	xhrs.setRequestHeader("Accept","application/json");
	xhrss.setRequestHeader("Accept","application/json");
    xhr.onreadystatechange = function () {
        if (this.readyState == 4) {
            var json = JSON.parse(this.responseText);
            var str = JSON.stringify(json,undefined,2);
            document.getElementById("artistname").innerHTML = json.artist.name;
			document.getElementById("artisturl").innerHTML = json.artist.url;
			document.getElementById("artistinfo").innerHTML = json.artist.bio.content;
					
			images = '<img src="' + json.artist.image[2]['#text'] + '" />';
			document.getElementById("a_img").innerHTML=images;
           			
		}
		
	};
	xhrs.onreadystatechange = function () {
        if (this.readyState == 4) {
            var json = JSON.parse(this.responseText);
            var str = JSON.stringify(json,undefined,2);
            document.getElementById("album1").innerHTML = json.topalbums.album[0].name;
			images = '<img src="' + json.topalbums.album[0].image[2]['#text'] + '" />';
			document.getElementById("aimg1").innerHTML=images;
			
			
			document.getElementById("album2").innerHTML = json.topalbums.album[1].name;
			images = '<img src="' + json.topalbums.album[1].image[2]['#text'] + '" />';
			document.getElementById("aimg2").innerHTML=images;
			
			document.getElementById("album3").innerHTML = json.topalbums.album[2].name;
			images = '<img src="' + json.topalbums.album[2].image[2]['#text'] + '" />';
			document.getElementById("aimg3").innerHTML=images;
		}
		
	};
	
	xhrss.onreadystatechange = function () {
        if (this.readyState == 4) {
            var json = JSON.parse(this.responseText);
            var str = JSON.stringify(json,undefined,2);
            document.getElementById("a1").innerHTML = json.similarartists.artist[0].name;
			document.getElementById("a2").innerHTML = json.similarartists.artist[1].name;
			document.getElementById("a3").innerHTML = json.similarartists.artist[2].name;
			
		}
		
	};
		
    
    xhr.send(null);
	xhrs.send(null);
	xhrss.send(null);
}
