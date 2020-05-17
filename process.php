<?php
mysql_connect('localhost','root','');
mysql_select_db('addflower');
echo $id=$_GET['id'];
$qry="SELECT * FROM flower where id='$id'";
$result=mysql_query($qry);
while($row=mysql_fetch_array($result))
	{
	$id=$row['id'];
	        $fname=$row['flowername'];
	       $image=$row['flowerimage'];
	       $price=$row['price'];
	       $dis=$row['description'];
	      
	       $qry="insert into cart(flowername,flowerimage,price,description) VALUES ('$fname','$image','$price','$dis')";

	       if(mysql_query($qry))
	       {
	       	header("location:userindex.php?mes=Success");
	       }
	       else
	       {
	       	header("location:userindex.php?mes=failed");
	       }
	   }
	


	?>
