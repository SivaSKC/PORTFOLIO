<?php
$a=$_POST['mobileno'];
$b=$_POST['email'];
$c=$_POST['message'];
$con=mysqli_connect("localhost","root","","enquiry");
$sql="INSERT INTO cst_details(Cst_No,Cst_email,Cst_Message) values ($a,$b,$c)";
$d=mysqli_query($con,$sql);
if($d)
{
    echo "Successfully Submit";
}
else
{
    echo "Not Added";
}
?>