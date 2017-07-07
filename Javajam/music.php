
<!DOCTYPE html>
<html>
<head lang ="en">
	<meta http-equiv="Content-Type" content="text/html";charset="utf.8">
	<title> JavaJam Coffee House Music</title>
        <link rel="stylesheet" href="javajam.css" type="text/css">
        
</head>
<body>

    <div id ="wrapper">
    <div id="nav" >
         <img id="coffeeimg" src="javajamlogo.jpg" alt="coffee" height="70px" width="130px" />
          <ul>
			<li><a href="index.html">Home</a></li> 
			<li><a href="menu.html">Menu</a> </li>
			<li><a href="#music.php">Music</a></li>
			<li><a href="jobs.html">Jobs</a></li>
           </ul>
	</div>
	<div id="content">
	<h1> &nbsp;JavaJam Coffee House </h1>
	<img src="guitar.JPG"  alt="image3" height="207" width="100%" />
	   <h3> &nbsp; &nbsp; &nbsp; &nbsp; Music at JavaJam </h3>
	   <p> &nbsp; &nbsp;The first friday night each month at JavaJam is a special night. Join us from 8pm to 11pm for some music &nbsp;&nbsp;&nbsp;you won't want to miss! </p>
           <h5> &nbsp; &nbsp; &nbsp; &nbsp; January  </h5>
        
           <p class="floatleft"> 
		<!--<img src="melaniethumb.jpg" alt="img2" height="50" width="50" align="top"/>
                <span> Melain Morris entertains with her melodic folk style.</span> -->
                <?php 

$user = 'root';
$psw = '';
$db = 'musicians';

$dbc = new mysqli('localhost',$user,$psw,$db)
         or die ("  Error connecting to the database  " );

$query = " SELECT name, genre FROM musician INNER JOIN performance ON musician.musianid=performance.musicianid WHERE 
                  performance.`month-year` < '2017-02-01' AND performance.`month-year` > '2016-12-31'";
$result = mysqli_query($dbc,$query) or die ('  Error in query ' );
while ($row = mysqli_fetch_array($result))
{
  echo "
  <a href=\"artistdetails.php?a_name=$row[0]\">$row[0]</a> -$row[1];	 &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; ";
}
mysqli_free_result($result);

echo "           </p>          
	   <h5> &nbsp; &nbsp; &nbsp; &nbsp; Feburary </h5>
           <p class=\"floatleft\">";
$query = " SELECT name, genre FROM musician INNER JOIN performance ON musician.musianid=performance.musicianid WHERE 
                  performance.`month-year` < '2017-03-01' AND performance.`month-year` > '2017-01-31'";
$result = mysqli_query($dbc,$query) or die ('  Error in query ' );

while ($row = mysqli_fetch_array($result))
{
  echo "<a href=\"artistdetails.php?a_name=$row[0]\">$row[0]</a> -$row[1];	 &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; ";
}
mysqli_free_result($result);

echo "           </p>        
	   <h5> &nbsp; &nbsp; &nbsp; &nbsp; March </h5>
           <p class=\"floatleft\">";
$query = " SELECT name, genre FROM musician INNER JOIN performance ON musician.musianid=performance.musicianid WHERE 
                  performance.`month-year` < '2017-04-01' AND performance.`month-year` > '2017-02-31'";
$result = mysqli_query($dbc,$query) or die ('  Error in query ' );
while ($row = mysqli_fetch_array($result))
{
  echo "<a href=\"artistdetails.php?a_name=$row[0]\">$row[0]</a> -$row[1];	 &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; ";
}
mysqli_free_result($result);


echo "           </p>         
	   <h5> &nbsp; &nbsp; &nbsp; &nbsp; April </h5>
           <p class=\"floatleft\">";
$query = " SELECT name, genre FROM musician INNER JOIN performance ON musician.musianid=performance.musicianid WHERE 
                  performance.`month-year` < '2017-05-01' AND performance.`month-year` > '2017-03-31'";
$result = mysqli_query($dbc,$query) or die ('  Error in query ' );
while ($row = mysqli_fetch_array($result))
{
  echo "<a href=\"artistdetails.php?a_name=$row[0]\">$row[0]</a> -$row[1];	 &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; ";
}
mysqli_free_result($result);


echo "           </p>         
	   <h5> &nbsp; &nbsp; &nbsp; &nbsp; May </h5>
           <p class=\"floatleft\">";
$query = " SELECT name, genre FROM musician INNER JOIN performance ON musician.musianid=performance.musicianid WHERE 
                  performance.`month-year` < '2017-06-01' AND performance.`month-year` > '2017-04-31'";
$result = mysqli_query($dbc,$query) 
               or die ('  Error in query ' );
while ($row = mysqli_fetch_array($result))
{
  echo "<a href=\"artistdetails.php?a_name=$row[0]\">$row[0]</a> -$row[1];	 &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; ";
}

mysqli_free_result($result);


echo "           </p>
           
	   <h5> &nbsp; &nbsp; &nbsp; &nbsp; June </h5>
           <p class=\"floatleft\">";


$query = " SELECT name, genre FROM musician INNER JOIN performance ON musician.musianid=performance.musicianid WHERE 
                  performance.`month-year` < '2017-07-01' AND performance.`month-year` > '2017-05-31'";
$result = mysqli_query($dbc,$query) 
               or die ('  Error in query ' );
while ($row = mysqli_fetch_array($result))
{
  echo "<a href=\"artistdetails.php?a_name=$row[0]\">$row[0]</a> -$row[1];	 &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;  ";
}

mysqli_free_result($result);

echo "           </p>
           
	   <h5> &nbsp; &nbsp; &nbsp; &nbsp; July </h5>
           <p class=\"floatleft\">";


$query = " SELECT name, genre FROM musician INNER JOIN performance ON musician.musianid=performance.musicianid WHERE 
                  performance.`month-year` < '2017-08-01' AND performance.`month-year` > '2017-06-31'";
$result = mysqli_query($dbc,$query) 
               or die ('  Error in query ' );
while ($row = mysqli_fetch_array($result))
{
  echo "<a href=\"artistdetails.php?a_name=$row[0]\">$row[0]</a> -$row[1];	 &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  ";
}

mysqli_free_result($result);

echo "           </p>
           
	   <h5> &nbsp; &nbsp; &nbsp; &nbsp; August </h5>
           <p class=\"floatleft\">";


$query = " SELECT name, genre FROM musician INNER JOIN performance ON musician.musianid=performance.musicianid WHERE 
                  performance.`month-year` < '2017-09-01' AND performance.`month-year` > '2017-07-31'";
$result = mysqli_query($dbc,$query) 
               or die ('  Error in query ' );
while ($row = mysqli_fetch_array($result))
{
  echo "<a href=\"artistdetails.php?a_name=$row[0]\">$row[0]</a> -$row[1];	 &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; ";
}

mysqli_free_result($result);

echo "           </p>
           
	   <h5> &nbsp; &nbsp; &nbsp; &nbsp; September </h5>
           <p class=\"floatleft\">";


$query = " SELECT name, genre FROM musician INNER JOIN performance ON musician.musianid=performance.musicianid WHERE 
                  performance.`month-year` < '2017-10-01' AND performance.`month-year` > '2017-08-31'";
$result = mysqli_query($dbc,$query) 
               or die ('  Error in query ' );
while ($row = mysqli_fetch_array($result))
{
  echo "<a href=\"artistdetails.php?a_name=$row[0]\">$row[0]</a> -$row[1];	 &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; ";
}

mysqli_free_result($result);

echo "           </p>
           
	   <h5> &nbsp; &nbsp; &nbsp; &nbsp; October </h5>
           <p class=\"floatleft\">";


$query = " SELECT name, genre FROM musician INNER JOIN performance ON musician.musianid=performance.musicianid WHERE 
                  performance.`month-year` < '2017-11-01' AND performance.`month-year` > '2017-09-31'";
$result = mysqli_query($dbc,$query) 
               or die ('  Error in query ' );
while ($row = mysqli_fetch_array($result))
{
  echo "<a href=\"artistdetails.php?a_name=$row[0]\">$row[0]</a> -$row[1];	 &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; ";
}

mysqli_free_result($result);


echo "           </p>
           
	   <h5> &nbsp; &nbsp; &nbsp; &nbsp; November </h5>
           <p class=\"floatleft\">";


$query = " SELECT name, genre FROM musician INNER JOIN performance ON musician.musianid=performance.musicianid WHERE 
                  performance.`month-year` < '2017-12-01' AND performance.`month-year` > '2017-10-31'";
$result = mysqli_query($dbc,$query) 
               or die ('  Error in query ' );
while ($row = mysqli_fetch_array($result))
{
  echo "<a href=\"artistdetails.php?a_name=$row[0]\">$row[0]</a> -$row[1];	 &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;  ";
}

mysqli_free_result($result);

echo "           </p>
           
	   <h5> &nbsp; &nbsp; &nbsp; &nbsp; December </h5>
           <p class=\"floatleft\">";


$query = " SELECT name, genre FROM musician INNER JOIN performance ON musician.musianid=performance.musicianid WHERE 
                  performance.`month-year` < '2018-01-01' AND performance.`month-year` > '2017-11-31'";
$result = mysqli_query($dbc,$query) 
               or die ('  Error in query ' );
while ($row = mysqli_fetch_array($result))
{
  echo "<a href=\"artistdetails.php?a_name=$row[0]\">$row[0]</a> -$row[1];	 &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; ";
}

mysqli_free_result($result);

mysqli_close($dbc);

?>



		<!--<img src="gregthumb.jpg" alt="img3" height="50" width="50" align="top"/>
                Tahoe Greg is back from his tour. New songs. New stories. -->
           </p>
	</div>
	<div id="footer"> 
		Copyright &copy; 2016 JavaJam Coffee House </br>
		<a href="mailto:randhinaa@SusaiAdaiakalamXavierPrince.com">
                 randhinaa@SusaiAdaiakalamXavierPrince.com</a> </br>
	</div>
    </div>

</body>
</html>     
	
