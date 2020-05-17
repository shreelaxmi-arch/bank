<?php
mysql_connect("localhost","root","");
mysql_select_db("addflower");


if(isset($_REQUEST["delid"]))
{
	$delid=$_REQUEST["delid"];
mysql_query("DELETE FROM flower WHERE id='$delid'");
}
$qry=mysql_query("SELECT * FROM flower");
$rowcount=mysql_num_rows($qry);
?>

<body bgcolor="violet">
<table align="center" border="2px" style="width:600px; line-height:50px;">
<tr>
	<th colspan="6">FLOWER INFORMATION</th>
</tr>

<tr>
	<th>ID</th>
		<th>Flower Name</th>
			<th>Description</th>
				<th>Price</th>
					
						<th>Flower Image</th>
						<th>Delete</th>

					</tr>
					

	<?php
	for($i=1;$i<=$rowcount;$i++)
	{

	$rows=mysql_fetch_array($qry);

?>
		<tr>
			<td><?php echo $rows["id"];?></td>
			<td><?php echo $rows["flowername"];?></td>
			<td><?php echo $rows["description"];?></td>
			<td><?php echo $rows["price"];?></td>
			
			<td><img src="<?php echo $rows["flowerimage"];?>"height="50" width="100"></td>
			<td><a href="admindelete.php?delid=<?php echo $rows["id"]?>">Delete</a></td>
			
		</tr>
		<?php
	}
	?>
</table>


