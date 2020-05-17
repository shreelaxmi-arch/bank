<?php
mysql_connect('localhost','root','');
mysql_select_db('addflower');
$qry="SELECT * FROM flower";
$result=mysql_query($qry);
?>
<html>
<body bgcolor="violet">
<table align="center" border="2px" style="width:600px; line-height:50px;">
<tr>
	<th colspan="6">FLOWER INFORMATION</th>
</tr>
<t>
	<th>ID</th>
		<th>Flower Name</th>
			<th>Description</th>
				<th>Price</th>
					
						<th>Flower Image</th>

					</t>
					

	<?php
	while($rows=mysql_fetch_assoc($result))
	{
		?>
		<tr>
			<td><?php echo $rows['id'];?></td>
			<td><?php echo $rows['flowername'];?></td>
			<td><?php echo $rows['description'];?></td>
			<td><?php echo $rows['price'];?></td>
			
			<td><img src="<?php echo $rows['flowerimage'];?>"height="50" width="100"></td>
		</tr>
		<?php
	}
	?>
</table>

</body>
</html>
