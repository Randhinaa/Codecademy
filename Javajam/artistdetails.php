<!DOCTYPE html>
<!-- Student Name: Randhinaa SXP -->
<html lang="en">
  <head>
    <title>A Music Web Application</title>
    <meta charset="utf-8"/>
	<link rel="stylesheet" href="javajam.css" type="text/css"/> 
    <script type="text/javascript" src="music.js"></script>
  </head>
  <body onload="sendRequest()">
    <div id="wrapper">
    <div id="nav">
           <img id="coffeeimg" src="javajamlogo.jpg" alt="coffee" height="70px" width="130px" />
            <ul>
			<li><a href="index.html">Home</a></li> 
			<li><a href="menu.html">Menu</a> </li>
			<li><a href="music.php">Music</a></li>
			<li><a href="jobs.html">Jobs</a></li>
           </ul>
	</div>
    <div id="content">
	     <h1> &nbsp;JavaJam Coffee House </h1>	
    <form action="music.js">
       <label>Artist name: <input type="text" id="form-input" value="<?php $name = $_GET['a_name']; echo"$name"?>"/></label>
       <input type="button" onclick="sendRequest();" value="Display Info"/>
    </form>
    <table>
	<tr> <td><b>Artist:</b></td> <td id ="artistname"> </td> </tr>
	<tr> <td><b>Artist URL:</b></td> <td id ="artisturl"> </td> </tr>
	<tr> <td><b>Artist Information:</b></td> <td id ="artistinfo"> </td> </tr>
	<tr> <td><b>Artist Image:</b></td> <td id="a_img"> </td> </tr>
	<tr> <td colspan="2"><b>&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp<u>Artist's Top Albums:</u></b></td> </tr>
	<tr> <td ><b>Album 1: </b>  </td> <td id="album1"> </td> </tr>
	<tr> <td><b>Image of Album:</b></td><td id="aimg1"></td></tr>
	<tr> <td ><b>Album 2: </b>  </td> <td id="album2"> </td> </tr>
	<tr> <td><b>Image of Album:</b></td><td id="aimg2"></td></tr>
	<tr> <td ><b>Album 3: </b>  </td> <td id="album3"> </td> </tr>
	<tr> <td><b>Image of Album:</b></td><td id="aimg3"></td></tr>
	<tr> <td colspan="2"> <b>&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp<u>Similar Artists:</u></b></b></td></tr>
	<tr> <td></td><td id="a1"></td> </tr>
	<tr> <td></td><td id="a2"></td> </tr>
	<tr> <td></td><td id="a3"></td> </tr>
	</table>
	</div>
	<div id ="footer">       
		Copyright &copy; 2016 JavaJam Coffee House </br>
		<a href="#randhinaa@SusaiAdaiakalamXavierPrince.com">
                 randhinaa@SusaiAdaiakalamXavierPrince.com</a> </br> 	   
    </div>
    </div>
  </body>
</html>
