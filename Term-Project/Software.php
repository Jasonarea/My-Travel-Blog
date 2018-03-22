<html>
<head>
	<title>Community</title>
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
	<link rel="stylesheet" href="nav.css">

	<style>
	.city {display:none;}

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
    background-color: khaki;
    color: black;
    border: 2px solid brown;
}

.button6:hover {
    background-color: khaki;
    color:solid khaki;
}
h5.Hi{color: red;}
div.img {
    margin: 5px;
    border: 1px solid #ccc;
    float: left;
    width: 180px;

	.spen{font-family: Lucida Handwriting;
	font-size:15px;
	color: purple;}
label{float:left;}
}
#comment {width: 50%;
		left: 10%;
		position:absolute;
		font-family: MV Boli, 휴먼모음T;}
#Home {right:10%;
		top:15%;
		position:absolute;}
</style>
</head>
<body bgcolor="beige">

<div id="top">
<h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Community</h1>
	<div id="Home">

		<a href="Mainpage2.php"><img id="apeach" src="Apeach.png" width="100" onmouseover="src='JayG2.png'" onmouseout="src='Apeach.png'"/>HOME</a>
	</div>
<hr>
&nbsp;&nbsp;&nbsp;<a href="Jason.php"><button class="button button1">Jason?</button></a>
<a href="Chicago.php"><button class="button button2">Chicago</button></a>
<a href="Japan.php"><button class="button button3">Japan</button></a>
<a href="China.php"><button class="button button4">China</button></a>
<a href="Tips.php"><button class="button button5">Tips for Travel</button></a>
<button class="button button6">Community</button>
</div>
<div id="comment">
<br><br><br><br><br><br><br><br><br><br><br><br>	
<?php
// Establish connection
$conn = new mysqli("localhost", "root", "apmsetup", "hompi");
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

// Execute a query
$sql = "SELECT user_id,comment FROM community";
$result = $conn->query($sql);

// Print query result
if ($result->num_rows > 0) {
	echo "<table border=2>";
	echo "<tr><th>ID</th><th>Comment</th></tr>";
	while($row = $result->fetch_assoc()) {
		echo "<tr><td>",$row["user_id"],"</td><td>",$row["comment"],"</td></tr>";
	}
	echo "</table>";
} else {
	echo "0 rows</br>";
}

// Close connection
$conn->close();
?>
<p>

<br><br><br>This is Comment Tool. If you click the 'insert' button, You have to do 새로고침<br>

<form action="Software.php" method="POST" id="Form">
<label>ID: </label><input type="text" name="user_id" size=23/><br>
<label>Comment: </label><input type="text" name="text" size=100/><br>

<?php
// Establish connection
$conn = new mysqli("localhost", "root", "apmsetup", "hompi");
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
// Perform insertion
if (array_key_exists("user_id", $_POST)) {
	$stmt = $conn->prepare("INSERT INTO community(user_id,comment) VALUES(?,?)");
	$stmt->bind_param("ss",$id,$text);
	
	$id = $_POST["user_id"];
	$text = $_POST["text"];
	$result = $stmt->execute();

	if ($result === TRUE) {
		echo "Good";
	} else {
		echo "<p style=\"color: red\">Error: insert failed.</p>";
	}
	$stmt->close();
}

// Close connection
$conn->close();
?>
<p>
<input type="reset" value="Reset"/>
<input type="submit" value="Insert"/>
</form>
<form action="Software.php">
<br><br><input type="submit" value=HOME/>
</form>
</div>
</body>
</html>
