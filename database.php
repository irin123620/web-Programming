<html>
<body>
<form method="post" action="">
<label>NAme:</label>
<input type="text" name="nme">
<label>Email:</label>
<input type="email" name="email">
<input type="submit" value="Register" name="reg">

</form>
<?php
$conn=new mysqli("localhost","root","","testdb");
if($conn->connect_error)
{
die("Connection Failed".$conn->connect_error);
}
if(isset($_POST['reg']))
{
$n=$_POST['nme'];
$e=$_POST['email'];
$conn->query("INSERT INTO users(name,email) VALUES('$n','$e')"
);
}
$result=$conn->query("SELECT * FROM users");
if($result->num_rows>0)
{
echo '<h1>DETAILS</h1>';
echo '<table border="1">
<tr>
<th>SINO</th>
<th>Name</th>
<th>Email</th>
<tr>';
while($row=$result->fetch_assoc())
{
echo"<tr>
<td>{$row['SINO']}</td>
<td>{$row['name']}</td>
<td>{$row['email']}</td>
</tr>";
}
echo '<table>';
}
else
{
echo "No records";
}
?>
</body>
</html>


