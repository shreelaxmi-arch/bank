<?php


session_start();
	if(isset($_POST['login']))
	{
		$uname=$_POST['uname'];
		$upass=$_POST['upass'];
		
		$con=mysqli_connect('localhost','root','','adminlogin');
		$db=mysqli_select_db($con,'adminlogin');
		
		$q="SELECT * FROM login WHERE uname='$uname' AND upass='$upass'";
		
		$result=mysqli_query($con,$q);
		$ans=mysqli_num_rows($result);
		if($ans>0)
		{
			echo"<script>alert('Welcome Admin ....');</script>";
			$_SESSION['username']=$uname;
			echo"<script>window.open('a1.html','_parent');</script>";
		}
		else
		{
			echo"<script>alert('Your Entered Username/Password do not match with our database so please enter Right info....');</script>";
			echo"<script>window.open('adminloginform.php','_self');</script>";
		}
	}

?>