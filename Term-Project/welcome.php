<!DOCTYPE HTML>

<html>

 

    <head>

        <meta charset = utf-8>

    </head>

 

<body>

 

<!--로그인 창 이미지와 아이디와 패스워드 입력창-->

 

<form name = "submitform" action="LoginMgr.php" method="post">

<center>

<div style="position:relative;top:150px;background-image:url(images/Login.png);width:400px;height:250px;"> 

    <div style="position:absolute;top:154px;left:54px;"><input type="text" name="uid" style="width:187px;height:17px;"></div>

    <div style="position:absolute;top:182px;left:54px;"><input type="password" name="upwd" style="width:187px;height:17px;"></div>

<!--    <div style="position:absolute;top:152px;left:240px;width:115px;height:62px;"><input type ="submit" value="확인">  --> 

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

     

    if($ID == "marryme" & $PW =="1111") {       //아이디는 marryme이고 패스워드는 1111

         echo "<meta http-equiv='refresh' content='0; url=http://www.naver.com/Welcome.php'>";

                                                                                         //아이디와 패스워드가 일치할 경우 위 페이지로 이동.

     } else {

         echo '<script type = "text/javascript">alert("아이디나 패스워드를 잘못입력하셨습니다.")</script> ';

         echo "<meta http-equiv='refresh' content='0; url=http://www.naver.com/Login.php'>";

                                                                                         //아이디와 패스워드가 일치지 않을 경오 경고창을 띄우고 위 페이지로 이동.

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

[출처] [기배프] 강좌(5) PHP 웹 로그인창 만들기 워밍업|작성자 INNERGYAN

