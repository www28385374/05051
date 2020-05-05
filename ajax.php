<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
	</head>
	<body>
		<form action="./member.php" id="editform" method="post" onsubmit="return check('account')">
						帳號: <input type="name" value="" name="account">
						<br><br>
						姓名: <input type="name" value="" name="name">
						<br><br>
						信箱: <input type="email" value="" name="email">
						<br><br>
						電話: <input type="text" value="" name="phone">
						<br><br>
		</form>
		<button type="submit" class="btn btn-primary" form="editform">確認修改</button>
	</body>
</html>