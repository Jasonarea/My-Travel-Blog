<!DOCTYPE HTML>

<html>

 

    <head>

        <meta charset = utf-8>

    </head>

 

<body>

 

<!--�α��� â �̹����� ���̵�� �н����� �Է�â-->

 

<form name = "submitform" action="LoginMgr.php" method="post">

<center>

<div style="position:relative;top:150px;background-image:url(images/Login.png);width:400px;height:250px;"> 

    <div style="position:absolute;top:154px;left:54px;"><input type="text" name="uid" style="width:187px;height:17px;"></div>

    <div style="position:absolute;top:182px;left:54px;"><input type="password" name="upwd" style="width:187px;height:17px;"></div>

<!--    <div style="position:absolute;top:152px;left:240px;width:115px;height:62px;"><input type ="submit" value="Ȯ��">  --> 

    <div style="position:absolute;top:152px;left:240px;width:115px;height:62px;"><img src="images/bt_login.png" border=0 onclick = "document.submitform.submit()";></div>   

</div>

 

</body>

    

 

</html>

 

File Name ;LoginMgr.php

 

<?

header("Content-Type: text/html; charset=UTF-8");

 

?>

 

<?

     $ID = $_POST['uid'];

     $PW = $_POST['upwd'];

     

    if($ID == "marryme" & $PW =="1111") {       //���̵�� marryme�̰� �н������ 1111

         echo "<meta http-equiv='refresh' content='0; url=http://www.naver.com/Welcome.php'>";

                                                                                         //���̵�� �н����尡 ��ġ�� ��� �� �������� �̵�.

     } else {

         echo '<script type = "text/javascript">alert("���̵� �н����带 �߸��Է��ϼ̽��ϴ�.")</script> ';

         echo "<meta http-equiv='refresh' content='0; url=http://www.naver.com/Login.php'>";

                                                                                         //���̵�� �н����尡 ��ġ�� ���� ��� ���â�� ���� �� �������� �̵�.

     } 

?>

 

File Name ;LoginMgr.php

 

<!DOCTYPE HTML>

<html>

 

    <head>

        <meta charset = utf-8>

    </head>

 

<body>

<br><br><br><br><br><br><br>

<center>

 <h1>Welcome To Marry Me Site!</h1>

  <h2><a href="Login.php">Sign Out</a></h2>

</body>

 

 

</html>

[��ó] [�����] ����(5) PHP �� �α���â ����� ���־�|�ۼ��� INNERGYAN

