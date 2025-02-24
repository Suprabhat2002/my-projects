
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <button><a href="insert-form.php">Add new</a></button>
<table border="1">
        <tr>
            <th>NAME</th>
            <th>PHONE</th>
            <th>EMAIL</th>
            <th>ACTION</th>
            <th>ACTION</th>
    </tr>
    <?php
     $conn = mysqli_connect("127.0.0.1","root","","fail");
     $sql = "SELECT * FROM ME";
     $data = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($data)){?>
    <tr>
        <td><?= $row['name'];  ?></td>
        <td><?= $row['phone'];  ?></td>
        <td><?= $row['email'];  ?></td>
        <td><a href="">Edit</a></td>
        <td><a href="">Delete</a></td>
    </tr>
    
   <?php
    }
    ?>
    </table>
</body>
</html>