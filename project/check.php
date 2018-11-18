<?php
if(!$_SESSION['id'])
{
	header("Location:index.php");
}
if(isset($_POST['submit']))
{
	session_start();
	$server='localhost';
	$username='root';
	$password='';
	$db='dbms1';
	$conn=new mysqli($server,$username,$password,$db);
	$id=$_POST['id'];
	$password=$_POST['password'];
	$sql = "SELECT * FROM student";
	$sql1="SELECT * FROM register";
	$sql2 = "SELECT * FROM teacher";

	$data=$conn->query($sql);
	
	$data1=$conn->query($sql1);
	
	$data2=$conn->query($sql2);
	
	if(!$data) {
			die("database query failed");
		}
	if(!$data1) {
			die("database query failed");
		}
	if(!$data2) {
			die("database query failed");
		}
	if($data->num_rows >0){
		while($row=$data->fetch_assoc()){
			if ($row['id']==$id&& $row['password']==$password){
				$_SESSION['id']=$id;
				header("Location:home.php");
				exit(0);
			}
		}
	}
	if($data1->num_rows >0){
		while($row=$data1->fetch_assoc()){
			if ($row['r_id']==$id&& $row['password']==$password){
				$_SESSION['id']=$id;
				header("Location:a_home.php");
				exit(0);
			}
		}
	}
	if($data2->num_rows >0){
		while($row=$data2->fetch_assoc()){
			if ($row['t_id']==$id&& $row['password']==$password){
				$_SESSION['id']=$id;
				header("Location:t_home.php");
				exit(0);
			}
		}
	}
}
else{
	echo "Invalid name or password.... try again.";
}	
?>