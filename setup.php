
<html>
<?php
$servername = "192.168.45.182";
$username = "root";
$password = "password";
$database = "trieuphat";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


if(isset($_POST["submit"])){
$name=$_POST["name"];
$pass= $_POST["pass"];
$sql = "INSERT INTO user(name, pass) VALUES('$name', '$pass')";
if($conn->query($sql) === TRUE){
  echo $sql;
}else {
  echo mysqli_error($conn);
}
}
$conn->close();
?>
<h1>Tao tai khoan</h1>
<form action = "#"  method="post" name="form1">
username: <input type ="text" name ="name" id ="name" value="" ><br><br>
PassWord: <input type="text" name ="pass" id="pass" value="" > <br><br>
<input type ="submit" value="submit" name="submit" >

</form>
</html>
