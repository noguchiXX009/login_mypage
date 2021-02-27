<?php
mb_internal_encoding("utf8");

$temp_pic_name = $_FILES['picture']['tmp_name'];
$original_pic_name = $_FILES['picture']['name'];

$path_filename = './image/'.$original_pic_name;

move_uploaded_file($temp_pic_name, './image/'.$original_pic_name);

?>

<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="utf-8">
	<title>マイページ登録</title>
	<link rel="stylesheet" type="text/css" href="register_confirm.css">
</head>

<body>
	<header>
		<img src="4eachblog_logo.jpg">
	</header>
	<main>
		<div class="confirm">
			<h1>会員登録 確認</h1>
			<div class="confirm_let">
				こちらの内容で登録しても宜しいでしょうか?
			</div>
			<p>
				名前：<?php echo $_POST['name'];?>
			</p>
			<p>
				メールアドレス：<?php echo $_POST['mail']; ?>
			</p>
			<p>
				パスワード：<?php echo $_POST['password']; ?>
			</p>
			<p>
				プロフィール画像：<?php echo $original_pic_name; ?>
			</p>
			<p>
				コメント：<?php echo $_POST['comments']; ?>
			</p>
			<div class="confirm_button">
				<div class="button1">
					<a href="register.php">戻って修正する</a>
				</div>
				<div class=submit>
					<form action="register_insert.php" method="post">
						<input type="submit" class="button2" value="登録する">
						<input type="hidden" value="<?php echo $_POST['name']; ?>" name="name">
						<input type="hidden" value="<?php echo $_POST['mail']; ?>" name="mail">
						<input type="hidden" value="<?php echo $_POST['password']; ?>" name="password">
						<input type="hidden" value="<?php echo $path_filename; ?>" name="path_filename">
						<input type="hidden" value="<?php echo $_POST['comments']; ?>" name="comments">
					</form>
				</div>
			</div>
		</div>
	</main>
	<footer>
		©2018 InterNous.inc. All right reserved
	</footer>
</body>

</html>
