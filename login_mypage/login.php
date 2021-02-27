<?php
session_start();
if(isset($_SESSION['id'])){
	header("Location:mypage.php");
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="utf-8">
	<title>ログイン</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>

<body>

	<header>
		<img src="4eachblog_logo.jpg">
		<div class="login">
			<a href="login.php">ログイン</a>
		</div>
	</header>
	<main>
		<form action="mypage.php" method="post">
			<div class="form_content">
				<div class="mail">
					<label>
						メールアドレス
					</label>
					<input type="text" class="formbox" size="50px" name="mail" value="<?php
																					  if(isset($_COOKIE['login_keep'])){
																					  echo $_COOKIE['mail']; 
																					  }
																					  ?>">
				</div>
				<div class="password">
					<label>
						パスワード
					</label>
					<input type="text" class="formbox" size="50px" name="password" value="<?php 
																						  if(isset($_COOKIE['login_keep'])){
																						  echo $_COOKIE['password'];
																						  }
																						  ?>">
				</div>
				<div class="check">
					<input type="checkbox" class="check_button" name="login_keep" value="login_keep" <?php 
						   if(isset($_COOKIE['login_keep'])){
							   echo "checked='checked'";
						   }
						   ?>>ログイン状態を保持する
				</div>
				<div class="login_button">
					<input type="submit" class="submit_button" size="35px" value="ログイン">
				</div>
			</div>
		</form>
	</main>

	<footer>
		©2018 InterNous.inc. All right reserved
	</footer>
</body>


</html>
