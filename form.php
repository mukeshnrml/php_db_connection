<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form method="post" action="form.php">
    Name : <input type="text" name="name" > <br><br>
    Email: <input type="email" name="mail"><br><br>
    
    <input type="submit" name="submit">
    <button><a href="table.php">Show Table</a></button>
</form>
<br><br>
<div>

    
<?php 
if (isset($_POST['submit'])){
   $name=$_POST["name"];
   $mail=$_POST["mail"];

   $connect = mysqli_connect('localhost', 'root', '', 'rev');
   $e = "INSERT INTO adit (name, mail) VALUES ('$name', '$mail')";
   mysqli_query($connect, $e);
   echo 'User added successfully';
}
?>
</body>
</html>
