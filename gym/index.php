<?php
if(isset($_POST['name'])){
$server="localhost";
$username="root";
$password="";
$con=mysqli_connect($server,$username,$password);
if(!$con){
    die("Connection to the Database failed due to " . mysqli_connect_error());
}
/*else{
     echo "Successfully connected to the Database";
 }*/
$name=$_POST['name'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$locality=$_POST['locality'];
$contact=$_POST['contact'];
$email=$_POST['email'];
$sql="INSERT INTO `riyagymproject`.`gyminfo` (`name`, `age`, `gender`, `locality`, `contact`, `email`, `datetime`) VALUES ('$name','$age','$gender','$locality','$contact','$email', current_timestamp());";
// echo $sql;
// $rs = mysqli_query($con, $sql);
if($con->query($sql) == true){
    echo "Inserted Successfully";
}
else{
    echo "ERROR: $sql <br> $con->error";
}
$con->close();
}
?>