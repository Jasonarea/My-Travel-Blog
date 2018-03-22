<html>
<head>
	<title>Jason's Page</title>
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
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
	h2.hello{font-family: Lucida Handwriting;}
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
    background-color: #4CAF50; 
    color: white; 
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
    background-color: white;
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
.button7 {
    background-color: white;
    color: black;
    border: 2px solid black;
}

.button7:hover {
    background-color: black;
    border:2px solid black;
	color: white;
}
table{font-family: MV Boli;}
p.lalli{font-family: MV Boli;}
	</style>
</head>
<link rel="stylesheet" href="Jason.css">
<style>
.city {display:none;}
.span{font-family: Lucida Handwriting;
	font-size:15px;
	color: purple;}
</style>
<body class="w3-container">

<div id="top">
<h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<U>Jason Who?</U>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="Neo2.gif" width="70"/><span class="span"><a href="Mainpage.php">Let's go Home!</a></span></h1>
<hr>
<button class="button button1">Jason?</button>
<a href="Chicago.php"><button class="button button2">Chicago</button></a>
<a href="Japan.php"><button class="button button3">Japan</button></a>
<a href="China.php"><button class="button button4">China</button></a>
<a href="Travel.php"><button class="button button5">Tips for Travel</button></a>
<a href="Software.php"><button class="button button6">Software</button></a>
</div>
<br><br><br><br><br><br><br><br><br><br><br>
<div class="w3-row">
  <a href="#" onclick="openCity(event, 'Londo');">
    <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding">Jason?</div>
  </a>
  <a href="#" onclick="openCity(event, 'Paris');">
    <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding">Gachon Univ.</div>
  </a>
  <a href="#" onclick="openCity(event, 'Tokyo');">
    <div class="w3-third tablink w3-bottombar w3-hover-light-grey w3-padding">Software Dept.</div>
  </a>
</div>


<div id="Londo" class="w3-container city">
  <h2>Jason?</h2>
  <table><tr><td><img src="Profile.jpg" alt="Jason" width="300"/></td><td>Hi everyone~^^<img src="Frodo.gif" width="50"/><br>
 My name is Hyeonsun Jung and My English name is Jason.<br>
I'm 24 years old, and I'm undergraduate student in Gachon University.<br>
Currently I'm majoring in software. I've changed my major <br>
from Exercise Rehabilitation to Software recently. I'm studying Web programming, <br>
C Language and Discrete mathematics. <br>
It is very exciting and interesting to think and solve the problem.<br>
I'm proud of my major.<br>
<br>
I finished military service in navy last year, and I'm sophomore now.<br>
I love traveling and playing instrument especially piano.<br>
I want to do my best in my major.<br>
This webpage will introduce about my trip to Chicago and Japan<br>
Please enjoy watching my photo and review of my travel<br>
Thank you very much ^&^</td></tr></table>
</div>

<div id="Paris" class="w3-container city">
  <h2>Gachon Univ.</h2>
 <img src="gachon.png" width="300"/> <img src="gachon2.png" width="300">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="Campus.jpg" width="120"/>&nbsp;&nbsp;<img src="Campus2.jpg" width="120"/><br><p class="lalli">My University is Gachon Univ.<br>
  It is located in Seongnam, Gyeonggido near the Bokjeong Station, Bundang Line.
  Gachon University has lots of departments and colleges. There are IT, of course, <br>
  social science, Engineering and so on. Also, there is a vision tower which has
  lots of cafe, restaurants, classrooms. Above all, Vision tower is connected with <br>
  the Gachon Univ. station, so students can use the subway so easily.
  Gachon Univer is chosen for Software-oriented University. So every student<br>
  has to learn about Software. It is amazing, isn't it?^.^
  Gachon University is in Incheon as well called Medical campus.<br>
  There is only department of healthcare like nursing, physical therapy.
 
  Gachon University was Kyungwon University before 2012, but it was changed<br>
  to today's name, Gachon in 2012. After that, Gachon University has been<br>
  developing it's system and quality.<br></p> 
</div>

<div id="Tokyo" class="w3-container city">
  <h2>Department of Software</h2>
    <table><tr><td><img src="software.jpg" width="300"/><br><img src="Software.png" width="300"/></td><td><br>
	The department of software is my major. I'm studying  Web Programming, <br>
	Computer Programming, Discrete Mathematics now.<br>
	These days, software industry is growing faster and faster. Software is in our life. Mobile industry,<br>
	Internet of things and Arificial Intelligence like Alphago became famouse than before.<br>
	It will be developing more and more, and in the future we might be in digital software world.<br>
	Software has a variety of range, so we can get a job in various area. Faculties are so good at <br>
	teaching and we have lots of lab tests and quizzes,<br> then we can improve our ability to code and do programming.<br>
	Also, there are lots of opporunities for participating in the championship and festival.<br>
	and all professors give us lots of information and help for the job and related area.<br>
	I expect the future of my major.<br><br>
	
	Every spring, all freshmen students go trip to famous Enterprises like Microsoft, NHN.<br>
	The left photo is picture of the trip to "The Zone Enterprise"<br><br><br><br></td><td><img src="Ryan.gif" width="150"/></td></tr></table>

</div>
<p><br><b><i>If you Click upper navigator, You can see the information of Jason</b></i></p>
<script>
function openCity(evt, cityName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("city");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
     tablinks[i].className = tablinks[i].className.replace(" w3-border-green", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-border-green";
}
</script>





</body>
</html>


 

