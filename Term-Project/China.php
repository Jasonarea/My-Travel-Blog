<html>
<head>
	<title>Vation Plan</title>
	<link rel="stylesheet" href="china.css">
	<style>
	#top{display:block;
		position:absolute;
		width:100%;
		height:30%;}
	h1{font-family: Monotype Corsiva;
		font-size: 70px;}
	.button1 {
    background-color: white; 
    color: black; 
    border: 2px solid #4CAF50;
}
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}
.button1 {
    background-color: white; 
    color: black; 
    border: 2px solid #4CAF50;
}
.button1:hover {
    background-color: #4CAF50;
    color: white;
}

.button2 {
    background-color: white; 
    color: black; 
    border: 2px solid #008CBA;
}

.button2:hover {
    background-color: #008CBA;
    color: white;
}

.button3 {
    background-color: white; 
    color: black; 
    border: 2px solid #f44336;
}

.button3:hover {
    background-color: #f44336;
    color: white;
}

.button4 {
    background-color: #e7e7e7;
    color: black;
    border: 2px solid #e7e7e7;
}

.button4:hover {background-color: #e7e7e7;}

.button5 {
    background-color: white;
    color: black;
    border: 2px solid #555555;
}

.button5:hover {
    background-color: #555555;
    color: white;
}
.button6 {
    background-color: white;
    color: black;
    border: 2px solid khaki;
}

.button6:hover {
    background-color: khaki;
    color:solid khaki;
}
td {font-family: MV Boli;}
#div{display:none;
	width:100%;
	height:100%;
	background-color:white;
	margin-left: 20%;
	}
	.span{font-family: Lucida Handwriting;
	font-size:15px;
	color: purple;}
	</style>
</head>
<body>
<div id="top">
<h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<U>Vacation Plan : China  <img src="china.png" width="60"></U>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="Neo2.gif" width="70"/><span class="span"><a href="Mainpage.php">Let's go Home!</a></span></h1>
<hr>
&nbsp;&nbsp;&nbsp;<a href="Jason.php"><button class="button button1">Jason?</button></a>
<a href="Chicago.php"><button class="button button2">Chicago</button></a>
<a href="Japan.php"><button class="button button3">Japan</button></a>
<button class="button button4">China</button>
<a href="Travel.php"><button class="button button5">Tips for Travel</button></a>
<a href="Software.php"><button class="button button6">Software</button></a>
</div>
<br><br><br><br><br><br><br><br><br><br><br>
<script type="text/javascript">
function China(){
	var x=document.getElementById("chin");
	x.src="map_china2.png";x.width="400";
	var y=document.getElementById("text");
	y.innerHTML="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;YEAH~~~^^<img src='heart.png' width='17'/><img src='heart.png' width='17'/><img src='heart.png' width='17'/><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I plan to go Beiging and Darren !!<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If you click Ryan Emoticon, You can read my concrete plan!!!<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Let's go~!<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img id='ryan' src='Ryan2.gif' width='80' onclick='Ryan()'/>";
	}
	function Ryan(){
	var x=document.getElementById("div");
	x.style.display="block";
	var y=document.getElementById("body");
	y.style.display="none";
	y.style.opacity="0.5";}
</script>

<table id="body">
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img id="chin" src="map_china.png" width="400"/></td>
<td id="text" rowspan=2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I plan to go China on this Summer Vacation.<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Do you know where I go to?<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Click The Button!
<input type="button" onclick="China()" value="Click!"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="Neo1.gif" width="100"/></td><td></td></tr>
</table>
</div>
<div id="div">
<h2>Beijing & Darren</h2>
<p><a href="China.php"><input type="button" value="Back"/></a><br>I used 'Neil Tour' that people can book the ticket and can reserve the hoter so easily.<br>
I plan to go to Beijing from August 22 to August 26.^^Yeah~~~<br>
I booked the flight ticket on Korean Airline which was the cheapest one. <br>
<img src="cal.png" width="200"/>&nbsp; I used the free travel program called "GeumGgagi"<br>
It provides us the course for self-trip and cheap flight ticket and accomodations.<br>I want to use the Express Train to move from Beijing to Darren. Darren is accessed to North Korea.<br>
I want to visit the historical sites and Baekdu Mountain, also I want to see the earth of North Korea.<br>
I think that it would be the invaluable experience for me. <br>	</p>
<table>
<tr>
<td>
<img src="neil.jpg" width="200"/></td><td><p>&nbsp;They Provide lots of services for us.<br>
First, they get us to know about the cheapest flight tickets among various airlines<br>
You can confirm that Korean Airline is the cheapest ticket of that day!!!^^<br>
plus, I can be provided the Metro Pass for free!! I think that this tour site so helpful and<br>
informative!!<img src="heart.png" width="17"/></p></td></tr>
<tr><td><img src="neil2.jpg" width="200"/></td><td><p>&nbsp;Also, Neil Tour provides the recommended schedule.<br>
We don't have to schedule the travel by ourselves. <br>They give us the right time and <br>place which was made from <br>
professional Tour cordinator. It was the first time <br>to use this application but it was very nice. <br>
I love it!!!<br></p></td></tr>
</table>

</body>
</html>