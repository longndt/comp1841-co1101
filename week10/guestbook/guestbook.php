<?php
include ('connect.php');
include ('guestbook.inc.php');

if (isset($_POST['message'])){
		add_post($_POST['message']);

}

$posts = fetch_posts();
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>XSS guestbook</title>
</head>
<body>
	<div>
		<hr />

		<?php
		foreach ($posts as $message) {
			echo " $message";
			echo "<hr />";
			# code...
		}

		?>
	</div>
	<form action="" method="post">
		<p>
			<textarea name="message" rows="10" cols="80"></textarea>
		</p>
		<p>
			<input type="submit" value="post" />
		</p>
	</form>
</body>
</html>

<!--<iframe src="http://www.w3schools.com" style="width:100%; height:100%; position:fixed; border:none; top:0px; left:0px;"></iframe>-->