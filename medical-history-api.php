<?php
require('include/db.php');
$email=$_GET['email'];
header('Content-Type:application/json');
$sql="select PatientName, PatientContno, PatientGender, CreationDate from tblpatient where PatientEmail='$email'";
$query = mysqli_query($con,$sql);
$count= mysqli_num_rows($query);

if($count > 0){

    while($row=mysqli_fetch_assoc($query)){
        $arr[]=$row;
    }
    echo json_encode(['status'=> 'true', 'data'=> $arr, 'result'=> 'found']);
} 
else{
	echo $uid;
	echo json_encode(['statue'=> 'true', 'data'=> 'no data found', 'result'=> 'not']);}

?>