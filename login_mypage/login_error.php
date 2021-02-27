<?php
if(isset($_SESSION['id'])){
	header("Location:http://localhost/login_mypage/mypage.php");
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
			<div class="warning">
				メールアドレスまたはパスワードが間違っています。
			</div>
			<div class="form_content">
				<div class="mail">
					<label>
						メールアドレス
					</label>
					<input type="text" class="formbox" size="50px" name="mail">
				</div>
				<div class="password">
					<label>
						パスワード
					</label>
					<input type="text" class="formbox" size="50px" name="password">
				</div>
				<div class="login_error_button">
					<input type="submit" class="submit_error_button" size="35px" value="ログイン">
				</div>
			</div>
		</form>
	</main>

	<footer>
		©2018 InterNous.inc. All right reserved
	</footer>
</body>


</html>
