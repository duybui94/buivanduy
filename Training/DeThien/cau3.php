<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Gioi Thieu Cong Ty</title>
	<meta charset="utf-8">
	  <link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
	<div class="banner">
			<div class="logo">
				Công Ty : THHHMTV DuyBui
				<img src='img/logo.jpg' alt="logo" width="150" height="150"'><br>
				Website : <a href="cau3.php">www.duybui.com.vn</a>	<br>		
				Email 	: xeko1st@gmail.com<br>
			</div>
			<div class="banner2">
				<img src='img/banner.jpg' alt="logo" width="850" height="150"'>
		</div>
			<div class="demuc" align="center"> 
					DE MUC<br>
					<?php
					if(isset($_SESSION['login']))
					{
						echo "Xin Chao,".$_SESSION['login'];
						echo " <a href='cau5.php'><br>Câu5<br></a>";
						echo " <a href='cau6.php'>Câu6<br></a>";
						echo " <a href='cau7.php'>Câu7<br></a>";
						echo " <a href='cau8.php'>Câu8(Logout)<br></a>";
					}else
					{
						echo  " <a href='cau4.php'>Câu4(Login)</a>";
					}
					?>
			</div>

	</div>

</body>
</html>