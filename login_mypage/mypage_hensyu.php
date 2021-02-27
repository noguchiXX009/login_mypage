<?php
mb_internal_encoding("utf8");

session_start();
if(empty($_POST)){
	header("Location:http://localhost/login_mypage/login_error.php");
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="utf-8">
	<title>マイページ登録</title>
	<link rel="stylesheet" type="text/css" href="mypage.css">
</head>

<body>
	<header>
		<img src="4eachblog_logo.jpg">
		<div class="login">
			<a href="log_out.php">ログアウト</a>
		</div>
	</header>
	<main>
		<form action="mypage_update.php" method="post" enctype="multipart/form-data">
			<div class="form_design">
				<div class="form_content">
					<input type="hidden" value="<?php echo $_SESSION['id'] ; ?>" name="id">
					<h1>会員情報</h1>
					<p>こんにちは!　<?php echo $_SESSION['name']; ?>さん</p>
					<img src="<?php echo $_SESSION['picture']; ?>">
					<div class="name">
						氏名：<input type="text" name="name" size="30" value="<?php echo $_SESSION['name']; ?>">
					</div>
					<div class="mail">
						メール：<input type="text" name="mail" size="30" value="<?php echo $_SESSION['mail']; ?>">
					</div>
					<div class="paassword">
						パスワード：<input type="text" name="password" size="30" value="<?php echo $_SESSION['password']; ?>">
					</div>
					<div class="comments">
						<textarea name="comments" rows="3" cols="70" ><?php echo $_SESSION['comments']; ?></textarea>
					</div>
					<div class="edit_information">
						<input type="submit" class="change_button" size="35px" value="この内容に変更する">
					</div>
				</div>
			</div>
		</form>
	</main>
	<footer>
		©2018 InterNous.inc. All right reserved
	</footer>
</body>

</html>
