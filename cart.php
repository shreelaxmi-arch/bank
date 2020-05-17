<body bgcolor="violet">
<center>
	<form action="cart.php" method="post" ecctype="multiple/form-data">
<?php echo @$_GET['mes'];?>
<h1>YOU ARE IN CART</h1>
<form>
<table border=1>

<tr><th colspan=8>ALL CART ITEM</th></tr>
<tr>

	<th>NAME</th>
	<th>IMAGE</th>
	<th>PRICE</th>
	<th>QUANTITY</th>

	<th>TOTAL PRICE</th>
</tr>
<?php
	
	mysql_connect("localhost","root","");
	
	mysql_select_db("addflower");

	
	$query="SELECT * FROM cart";
	
	$run=mysql_query($query);
	
	while($row=mysql_fetch_array($run))
	{
	
	        $id=$row['id'];
	        $fname=$row['flowername'];
	       $image=$row['flowerimage'];
	       $price=$row['price'];
	       $qua=$row['quantity'];
	
	//total price of row with quantity

	$qprice=$row['price'] *$qua;
	
	//total piece of cart item

	@$total+=$row['price'] *$qua;
	
	?>
	<!--we make a array of checkboxs-->
	
    <td><?php echo $fname; ?></td>
	<td><img src="<?php echo $row['flowerimage'];?>"height="50" width="50"></td>
	<td><?php echo $price; ?></td>
	<td>
	<!--we make hidden id column for update quantity-->
	<input type="hidden" name="id[]" value="<?php echo $id; ?>" />
	<input type="text" name="qty[]" value="<?php echo $qua; ?>" size="5" /></td>
	<td><?php echo $qprice; ?></td></tr>	
<?php
	}
?>
<th colspan=8><input type="submit" name="submit" value="Update"/></th></tr>
</table>
</form>
</center>
</body>
<?php
mysql_connect("localhost","root","");
	
	mysql_select_db("addflower");
if(isset($_POST['submit']))
{
	if(isset($_POST['qty']))
	{
	$qty=$_POST['qty'];
	$ids=$_POST['id'];
	$array=array_combine($qty,$ids);
	foreach($array as $q=>$i)
	{
		$query="update cart set quantity='$q' where id='$i'";
		mysql_query($query);
		//header("location:xx.php?mes=Update quantity successfully");
	}
}
}
?>
<div align="center"><p>TOTAL PRICE:<?php echo $total;?></p>

<a href="userindex.php"><button>CONTINUE SHOPING</button></a>
</div>