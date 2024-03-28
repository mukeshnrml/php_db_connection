<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border="1" style="text-align: center;">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Action</th>
    </tr>
  
    <?php 
    $connect = mysqli_connect('localhost', 'root', '', 'rev');
    $result = mysqli_query($connect, "SELECT * FROM adit");
    while ($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['mail']."</td>";
        echo "</tr>";
    }
    ?>


</table>


</div>
<br><br>
<button><a href="form.php">Add User</a></button><br/><br/>
</body>
</html>