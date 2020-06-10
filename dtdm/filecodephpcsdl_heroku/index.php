<html>
	<head>
	<meta http-equiv="content-type" content="text/html"; charset="utf-8"/>
		<title>le_van_trieu_b1606947</title>			
		<style>
			input[type=text]{
				width: 230px;
				padding: 3px;
				border-radius: 4px;
				box-sizing:border-box;
			}
			input[type=submit]{
				width: 80px;
				padding: 3px;
				margin-left: 195px;
				border-radius: 4px;
				box-sizing:border-box;
			}
		</style>
	</head>

	<body>
	    <?php
			if(isset($_POST["submit"])){
				$name = $_POST["name"];
				$email = $_POST["email"];
			
				echo "<script>alert('tên của bạn là: $name,Có Email là: $email'); </script>";
			}
		?>	
		<form action="#" method="post" name="form1">
					<h3>Nhập Vào tên và email của bạn</h3>
				User-Name: <input type="text" name="name" id="name" value=""><br><br>
				Email: <input type="text" name="email" id="email" value=""><br><br>
						<input type="submit" value="Submit" name="submit">

		</form>
<h3> bai tu chu de 6 den chu de 8</h3>

<br>
<a href=setup.php> Create Database</a>
<br>
<a href=add_account.php>Add Account</a>
<br>
<a href=list_account.php>List Account</a>

	</body>
</html>
