<!DOCTYPE html>
<html>
<head>
    <title>Palindrome Checker</title>
</head>
<body>

<h2>Check Palindrome</h2>

<form method="post">
    Enter a String:
    <input type="text" name="text" required>
    <br><br>
    <input type="submit" name="check" value="Check">
</form>

<?php
if(isset($_POST['check']))
{
$string=$_POST['text'];
$strin=strtolower($string);
$reverse=strrev($strin);
if($strin==$reverse)
{
echo "$string is palindrome";
}
else
{
echo "$string is not palindrome";
}
}
?>
</body>
</html>
