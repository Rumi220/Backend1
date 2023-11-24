<?php 
 
$fname=$_POST['fName'];
$lname=$_POST['lName'];
$email=$_POST['emaiL'];
$phnno=$_POST['phnNo'];
$massage=$_POST['massagE'];

echo $fname;




$link = mysqli_connect("localhost","root","", "send_message");
if($link == false){
die("ERROR: Could not connect." . mysqli_connect_error());
}

$sql = "INSERT INTO massage (firstName ,lastname ,emaiL , phnNo, massagE) VALUES ('$fname' ,'$lname' ,'$email', '$phnno', '$massage')";
if(mysqli_query($link,$sql)){

   
   
}
else{
    echo "Error" . mysqli_error($link);
}



mysqli_close($link)
?> 