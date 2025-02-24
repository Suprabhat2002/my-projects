<?php
 $conn = mysqli_connect("127.0.0.1","root","","fail");
 $name= $_POST['name'];
 $phone= $_POST['phone'];
 $email= $_POST['email'];
 $sql= "INSERT INTO me(name,phone,email)VALUES('$name','$phone','$email')";
 $query = mysqli_query($conn,$sql);
header("location:form.php");
?>