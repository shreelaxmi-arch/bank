<?php
mysql_connect("localhost","root","");
mysql_select_db("addflower");


if(isset($_REQUEST["update"]))
{
$img=$_FILES['flowerimage']['name']; 
$filetmpname=$_FILES['flowerimage']['tmpname']; 
$folder='shrilaxmi/';
$id=$_REQUEST['id'];
move_uploaded_file($filetmpname,$folder.$img);	mysql_query("update flower set flowerimage='$img' where id='$id'");
	}

if(isset($_REQUEST["delid"]))
{
	$delid=$_REQUEST["delid"];
	$qry1=mysql_query("select * from flower where id='$delid'");
	$row1=mysql_fetch_array($qry1);
	$image=$row1["flowerimage"];
	unlink("shrilaxmi/".$image);

	mysql_query("delete from flower where id='$delid'");
}

$qry=mysql_query("SELECT * FROM flower");
$rowcount=mysql_num_rows($qry);
?>


<table align="center" border="2px" style="width:600px; line-height:50px;">
<tr>
	<th colspan="8">FLOWER INFORMATION</th>
</tr>

<tr>
	<th>ID</th>
		<th>Flower Name</th>
			<th>Description</th>
				<th>Price</th>
					
						<th>Flower Image</th>
						<th>Delete</th>
						<th>Update</th>

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
			
			<td><img src="<?php echo $rows['flowerimage'];?>"height="50" width="100">
			<br>
			<form method="post" enctype="multipart/form-data">
				<input type="hidden" name="id" value="<?php echo $rows["id"]?>">
		File update<input type="file" name="flowerimage">
				<br><input type="submit" name="update" value="update">
			</form>
		</td>
			<td><a href="adminupdate.php?delid=<?php echo $rows["id"]?>">Delete</a></td>
			<td><a href="adminupdate1.php?eid=<?php echo $rows["id"]?>">Update</a></td>
			
		</tr>
		<?php
	}
	?>
</table>


