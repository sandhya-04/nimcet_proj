<?php
$sname=$_POST['sname'];
$mname=$_POST['mname'];
$lname=$_POST['lname'];
$Fname=$_POST['Fname'];
$pname=$_POST['pname'];
$Birth=$_POST['Birth'];
$gender=$_POST['gender'];
$state=$_POST['state'];
$city=$_POST['city'];
$mobile=$_POST['mobile'];
$adhar=$_POST['adhar'];
if(!empty($sname) || !empty($mname) || !empty($lname) || !empty($Fname) || !empty($pname) || !empty($Birth) || !empty($gender) || !empty($state) || !empty($city) || !empty($mobile) || !empty($adhar)){
	$host="localhost";
	$dbUsername="root";
	$dbPassword="";
	$dbname="sandhya";

	$conn=new mysqli($host,$dbUsername,$dbPassword,$dbname);
	if(mysqli_connect_error())
	{
		die('connect error('.mysqli_connect_error().')'.mysqli_connect_error());

	}
	else
	{
       $INSERT="INSERT Into register(sname,mname,lname,Fname,pname,Birth,gender,state,city,mobile,adhar) values(?,?,?,?,?,?,?,?,?,?,?)";
       echo "record is inserted successfully";
	}
}else
{
echo "all fileds are required";
die(); 
}
?>