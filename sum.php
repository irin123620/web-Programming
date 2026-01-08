<html>
<body>
<form method="post" action="">
<label>Number1:</label.>
<input type="text" name="n1"><br><br>
<label>Number2:</label>
<input type="text" name="n2"><br><br>
<input type="submit" name="add" value="ADD"><br>
</body>
</html>
<?php
if(isset($_POST['add']))
{
$n1=$_POST['n1'];
$n2=$_POST['n2'];
$n3=$n1+$n2;
echo "Sum of ".$n1." and ".$n2." is ".$n3;
}
?>
