
<html>
<body>
<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "my-restaurant";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
// $mysqli = new mysqli($servername,$username,$password,"$dbname");
if(!$conn){
   die('Could not Connect My Sql:' .mysql_error());
}

?>
</body>
</html>