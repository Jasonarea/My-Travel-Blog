<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Join</title>
<style type="text/css">
body { font-family: MV Bolis;
		background-color:beige;}
label {  float:center; width: 80px; left:50; 
		font-family: Segoe Print;}
#Form {border: solid 2px;
		width: 30%;
		background-color: FFFDFF;}
input[type=text].memo{padding:10px;}
</style>
</head>
<body>
<center>
<h1><img src="heart.png" width="17"/>Let's Join With Us<img src="heart.png" width="17"/></h1>
<form action="Login.php" method="POST" id="Form">
<br><label>NAME: </label><input type="text" name="NAME" size=23/><br><br/><hr><br>
<label>ID: &nbsp;&nbsp;&nbsp; </label><input type="text" name="ID" size=23/><br><br><hr><br>
<label>PWD:  </label><input type="password" name="PWD" size=23/><br><br><hr><br/>
<label>EMAIL: </label><input type="text" name="EMAIL" size=23/><br><br><hr><br/>
<label>MEMO: </label><input type="text" name="MEMO" class="memo" /><br>

<?php
// Establish connection
$conn = new mysqli("localhost", "root", "apmsetup", "hompi");
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
// Perform insertion
if (array_key_exists("ID", $_POST)) {
	$stmt = $conn->prepare("INSERT INTO MEMBER(NAME,ID,PWD,EMAIL,MEMO) VALUES(?,?,?,?,?)");
	$stmt->bind_param("sssss",$name, $id, $pwd, $email,$memo);
	
	$name = $_POST["NAME"];
	$id = $_POST["ID"];
	$pwd = $_POST["PWD"];
	$email = $_POST["EMAIL"];
	$memo = $_POST["MEMO"];
	$result = $stmt->execute();

	if ($result === TRUE) {
		echo "<script>window.alert('Welcome! to Jason's Homepage!');</script>";
		echo "<script>location.href='Mainpage.php';</script>";
	} else {
		echo "<p style=\"color: red\">Error: insert failed.</p>";
	}
	$stmt->close();
}

// Close connection
$conn->close();
?>
<p>
<img src="Neo.gif" width="100"/><input type="submit" value="Join"/>
<input type="reset" value="Reset"/><img src="Frodo.gif" width="100"/>
</form>
<form action="Mainpage.php">
<br><br><input type="submit" value=HOME/>
</form>
</center>
</body>
</html>
