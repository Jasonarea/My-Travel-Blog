<!DOCTYPE html>
<html>
<title>Main Page</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<head>
<title>main page</title>
<style>
	h1.hi{font-family:Monotype Corsiva;
		font-size: 70px;}
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
	display: block;
    background-color: white;
    color: black;
    border: 2px solid pink;
}

.button7:hover {
    background-color: pink;
    color:solid pink;
}
		#bottom{ display : block;
         background-color : #6799FF;
         position : absolute;
         width : 100%; /*좌우 여백조절*/
         height : 35%;
         bottom : 200;
         right : 0; /*해당 그림의 투명도는 3임을 알림*/
         background-position: -300 0;  /* body를 정의하는 스타일 */
         background-image : url("panorama.png");
         background-repeat : repeat-x;
		 opacity: 0.7;} 
		 
		 th.login{font-size:large;
		 color: red;}
	h5 {font-family:times;
		font-weight:bold;}
	h5.top{font-family: Maiandra GD;}
	#login{display:block;
		position:absolute;
		right:10%;
		top:10%;
		font-family:Maiandra GD;
		background-color: beige;
		width: 20%;
		height:15%;}
</style>
<script>
	function mouseover(){
		var x=document.getElementById("bottom");
		x.style.opacity="0.8";}
	
	function mouseout(){
		var x=document.getElementById("bottom");
		x.style.opacity="0.7";}
</script>
<body>

<nav class="w3-sidenav w3-white w3-animate-left" style="display:none;z-index:5">
  <a href="javascript:void(0)" onclick="w3_close()" 
  class="w3-closenav w3-large">Close &times;</a><br><br>
  <a href="Jason.php">Jason?</a><br>
  <a href="Chicago.php">Chicago</a><br>
  <a href="Japan.php">Japan</a><br>
  <a href="China.php">China</a><br>
  <a href="Tip.php">Tips for Travle</a><br>
</nav>

<div class="w3-overlay w3-animate-opacity" onclick="w3_close()" style="cursor:pointer"></div>

<div class="w3-container">
  <span class="w3-opennav w3-xxlarge" onclick="w3_open()">&#9776;</span>
  <h1 class="hi"><U>Jason's Homepage</U></h1>
  <h5 class="top">Welcome, Please Log In</h5>
  <div id="login">
  <form action="Mainpage.php" method="post">
  ID: &nbsp;<input type="text" name="id"><br>
  PW: <input type="password" name="pwd"><br>
	<input type="submit" value="Log In">&nbsp;<input type="submit" value="Join">
	</form></div>
  <hr border="3">
 
</div>  

<a href="Jason.php"><button class="button button1" onclick="Jason.php">Jason?</button></a>
<a href="Chicago.php"><button class="button button2">Chicago</button></a>
<a href="Japan.php"><button class="button button3">Japan</button></a>
<a href="China.php"><button class="button button4">China</button></a>
<a href="Tips.php"><button class="button button5">Tips for Travel</button></a>
<a href="Software.php"><button class="button button6">Software</button></a>

     
<script>
function w3_open() {
    document.getElementsByClassName("w3-sidenav")[0].style.display = "block";
    document.getElementsByClassName("w3-overlay")[0].style.display = "block";
}
function w3_close() {
    document.getElementsByClassName("w3-sidenav")[0].style.display = "none";
    document.getElementsByClassName("w3-overlay")[0].style.display = "none";
}
</script>

<div id="bottom" onmouseover="mouseover()" onmouseout="mouseout()"></div>
<script>
//초기
//
body_panorama_x = -300;  // 파라노마 첫 시작지점 /*블러는 40%를 사용하였다*/
function body_panorama() // 파라노마 처리
{	
      x = document.getElementById("bottom"); // x 로 아이디를 받는다
      body_panorama_x -= 3; // 파라노마 x 를 -2 해서 왼쪽으로 이동 
      x.style.backgroundPosition = body_panorama_x + ' 0'; // left = x, top = 0;
}
background_loop = setInterval("body_panorama()",100); // 처음부터 시작된다 [ 파노라마 처리 ]
</script>
</body>
</html> 