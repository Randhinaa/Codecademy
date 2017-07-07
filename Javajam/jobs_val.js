
function msg(){
var x = document.forms["application"]["myName"].value;

var y = document.forms["application"]["myEmail"].value;
var atpos = y.indexOf("@");
var dotpos = y.lastIndexOf(".");

var exp = document.forms["application"]["myExperience"].value;
var expval = /^[0-9]+$/;


    if (x == " " || x.length <= 1 ) {
        alert("Please enter a name with more than one character");
        document.getElementById('myName').value="";
        return false;
    }

    
    else if (atpos<1 || dotpos<atpos+2 || dotpos+2>=y.length) {
        alert("Please enter a valid e-mail address with atleast *@*.**");
        document.getElementById('myEmail').value="";
        return false;
    }  

    else if (!(exp.match(expval)) || exp < 0 || exp > 100)  {
	document.getElementById('myExperience').value="";
        alert("Please enter a valid number of experience between 0 and 100");
        return false;
    }
   
    else
        alert("Job Requent Succefully Submitted!!!");  
}
   
