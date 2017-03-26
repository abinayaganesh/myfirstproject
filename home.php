<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<title>hotel</title>
<link rel="stylesheet" type="text/css" href="/hotel/style.css" />
 <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Tangerine">
 <style>

.mySlides {
	display:none;
	margin :0px;
	padding:0px;
	border-top: 3px solid grey;
}
.slider{
	margin:0px;
	padding:0px;
}
#abi{
    background-image: url(images/abi1.jpg);
    -webkit-transition: opacity 1s ease-in-out;
    padding: 15px;
    width:1235px;
    height:300px;
    background-size: 100% 100%;
}
#abi1{
  background-image: url(images/abi2.jpg);
  -webkit-transition: opacity 1s ease-in-out;
  padding: 15px;
    width:1235px;
    height:300px;
    background-size: 100% 100%;
}
#abi2{
  background-image: url(images/abi3.jpg);
  padding: 15px;
  -webkit-transition: opacity 1s ease-in-out;
    width:1235px;
    height:300px;
    background-size: 100% 100%;
}
#slid{
  border-radius: 15px 0px 15px 5px;
    background: #B0C4DE;
    width: 150px;
    height: 40px;
    margin-left: 180px;
    padding-top: 3px;
    padding-left: 15px;
}
#slid1{
  border-radius: 5px 5px 5px 5px;
    background: #B0C4DE;
    width: 330px;
    height: 90px;
    margin-left: 180px;
    padding-top: 10px;
    padding-left: 10px;
}
#slid2{
  display: block;
  border-radius: 5px 5px 5px 5px;
    background :#B0C4DE;
    width:80px;
    margin-left: 180px;
    padding:10px 10px 10px 10px;
    text-decoration:none;
    color:black;
}
#slid2:hover{
  background-color: #1E90FF;
}
</style>
</head>
<body>
<header>
<h1>ABCGE hotel</h1>
<p>Where you can experience real taste</p>
<nav>
<ul>
<li><a href="javascript:void(0)">HOME</a></li>
<li><a href="about.html">ABOUT</a></li>
<li><a href="submit.php">ORDER</a></li>
<li><a href="index.php">DISHES</a></li>
<li><a href="contact.html">CONTACT</a></li>
</ul></nav></header>
<section class="slider" style="max-width:800px">
<div class="mySlides" id="abi">
<div class="abinaya">
  <h2 id="slid">Lorem Ipsum</h2>
<p id="slid1">Weit hinten, hinter den Wortbergen, <br>fern der Länder Vokalien und Konsonantien leben<br> die Blindtexte. Abgeschieden wohnen Sie in<br> Buchstabhausen an der Küste des Semantik.</p>
<p><a href="some_page.html" id="slid2">Mehr lesen</a></p>
</div></div>
  <div class="mySlides" id="abi1">
  <!--<h2 id="slid">Lorem Ipsum</h2>!-->
<p id="slid1">Weit hinten, hinter den Wortbergen, <br>fern der Länder Vokalien und Konsonantien leben<br> die Blindtexte. Abgeschieden wohnen Sie in<br> Buchstabhausen an der Küste des Semantik.</p>
<p><a href="some_page.html" id="slid2">Mehr lesen</a></p>
</div>
<div class="mySlides" id="abi2">
  <h2 id="slid">Lorem Ipsum</h2>
<p id="slid1">Weit hinten, hinter den Wortbergen, <br>fern der Länder Vokalien und Konsonantien leben<br> die Blindtexte. Abgeschieden wohnen Sie in<br> Buchstabhausen an der Küste des Semantik.</p>
<p><a href="some_page.html" id="slid2">Mehr lesen</a></p>
</div>
</section>

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 4000); // Change image every 2 seconds
}
</script>

<section class="spacer">
<div id="spa">
<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit?</p></div>
<div id="spa1">
<?php
$server="localhost";
$username="abi";
$password="sofiamenon";
$connect_mysql=mysql_connect($server,$username,$password) or die ("Connection Failed!");
$mysql_db=mysql_select_db("abihotel",$connect_mysql) or die ("Could not Connect to Database");
$query = "SELECT * FROM dish";
$result=mysql_query($query) or die("Query Failed : ".mysql_error());
$i=0;
while($rows=mysql_fetch_array($result))
{
$name[$i]=$rows['name'];
$i++;
}
$total_elmt=count($name);
?>
<form method="POST" action="search.php">
Select dish name: <select name="sel">
<option>Select</option>
<?php 
for($j=0;$j<$total_elmt;$j++)
{
?><option><?php 
echo $name[$j];
?></option><?php
}
?>
</select>

<input name="submit" type="submit" value="Search"/><br />
</form>
</div>
</section>




<section id="boxcontent">
<article id ="b">
<img src="images/abi9.png" alt="alt text" width="100" height="100" />
<h3>Welcome to us</h3>
<p>
Eines Tages aber beschloß eine kleine <br>Zeile Blindtext,ihr Name war Lorem Ipsum, <br>hinaus zu gehen.</p></article>
<article id="b1">
<img src="images/abi8.png" alt="alt text" width="100" height="100"/>
<h3>About us</h3>
<p>
Der große Oxmox riet ihr davon ab,<br> da es dort wimmele von bösen <br>Kommata,wilden Fragezeichen...</p></article>
<article id="b2">
<img src="images/abi10.png" alt="alt text" width="100" height="100"/>
<h3>Our services</h3>
<p>
Es packte seine sieben Versalien,<br> schob sich sein Initial in den Gürtel und <br>machte sich auf den Weg.</p></article>
<br class="clear"/>
</section>



<section id="four_columns">
<h2 style="border-bottom:1px solid grey;padding-bottom:20px;margin-right:90px;">Lorem ipsum</h2>
<article id="c">
<figure>
<a href="images/abi4.jpg" rel="lightbox" title="Some Title" width="200" height="100">
<span class="thumb-screen"></span>
<img src="images/abi4.jpg" alt="Some alt text" width="150" height="100"/></a>
<figcaption>
<strong id="s">
Photo by: Some Name</strong><br>
Als es die ersten Hügel<br> des Kursivgebirges <br>erklommen hatte</figcaption></figure></article>
<article id="c1">
<figure>
<a href="images/abi5.jpg" rel="lightbox" title="Some Title" width="200" height="100">
<span class="thumb-screen"></span>
<img src="images/abi5.jpg" alt="Some alt text" width="150" height="100" /></a>
<figcaption>
<strong>
Photo by: Some Name</strong><br>
warf es einen letzten Blick <br>zurück auf die Skyline seiner<br> Heimatstadt Buchstabhausen</figcaption></figure></article>
<article id="c2">
<figure>
<a href="images/abi6.jpg" rel="lightbox" title="Some Title" width="200" height="100">
<span class="thumb-screen"></span>
<img src="images/abi6.jpg" alt="Some alt text" width="150" height="100"/></a>
<figcaption>
<strong>
Photo by: Some Name</strong><br>
die Headline von Alphabetdorf und<br> die Subline seiner eigenen Straße.</figcaption></figure></article>
<article id="c3">
<figure>
<a href="images/abi7.jpg" rel="lightbox" title="Some Title">
<span class="thumb-screen"></span>
<img src="images/abi7.jpg" alt="Some alt text" width="150" height="100" /></a>
<figcaption>
<strong>
Photo by: Some Name</strong><br>
Wehmütig lief ihm eine rhetorische<br> Frage über die Wange.</figcaption></figure></article>
<br class="clear"/>
</section>
</body>
<footer>
  <p>all copyrights reserved by 2012</p>
</footer>
</html>