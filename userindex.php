<?php
mysql_connect('localhost','root','');
mysql_select_db('addflower');
$qry="SELECT * FROM cart";
$result=mysql_query($qry);
$tot=mysql_num_rows($result);
?>
<body bgcolor="violet">

<a href="cart.php"><p align="right">View Cart<?php echo $tot;?></p></a>
<center>
	<h1><?php echo $_GET['mes'];?></h1>
<table align="center" border="2px" style="width:600px; line-height:50px;">
<tr>
	<th colspan="8">FLOWER INFORMATION</th>
</tr>
<tr>
	
		<th>Flower Name</th>
			<th>Description</th>
				<th>Price</th>
					
						<th>Flower Image</th>
<th>ADD TO CART</th>
					</tr>
<?php
mysql_connect('localhost','root','');
mysql_select_db('addflower');
$qry="SELECT * FROM flower";
$result=mysql_query($qry);
while($rows=mysql_fetch_array($result))
{
	$id=$row['id'];
	 $fname=$row['flowername'];
	       $image=$row['flowerimage'];
	       $price=$row['price'];
	       $dis=$row['description'];
	       ?>
	       <tr>
			
			<th><?php echo $rows['flowername'];?></th>
			<th><?php echo $rows['description'];?></th>
			<th><?php echo $rows['price'];?></th>
			
			<th><img src="<?php echo $rows['flowerimage'];?>"height="50" width="100"></th>
	      <th><a href="process.php?id=<?php echo $rows["id"]?>"><button name="cart">ADD TO CART</button></a></th>
		</tr>
		<?php
	}

	
?>
</table>
</center>