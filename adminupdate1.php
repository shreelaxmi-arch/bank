<?php
mysql_connect("localhost","root","");
mysql_select_db("addflower");


$eid=$_GET["eid"];
$qry=mysql_query("select * from flower where id='$eid'");
$row=mysql_fetch_array($qry);



?>
<html>
<body bgcolor="skyblue">
	<form action="adminupdate1.php?flower=<?php echo $eid?>" method="POST">

<table align="center" border="2px" style="width:400px; line-height:40px;">
<tr>
	<th colspan="6">FLOWER INFORMATION</th>
</tr>
<tr><td>Flower Name:</td><td><input type="text" name="flowername" value="<?php echo $flowername?>" required></td></tr>
<tr><td>Description:</td><td><input type="text" name="description" value="<?php echo $description?>" required></td></tr>


<tr><td>Price:</td><td><input type="text" name="price" value="<?php echo $price?>" required> </td></tr>



<tr><td><input type="submit" name="submit" value="Update"></td></tr>
<a href="adminupdate.php">
<input type="submit"name="view" value="Back">
</a>

</table>

</form>
</center>
</body>
</html>

<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("addflower");


if(isset($_POST["submit"]))
{
$flowername=$_POST["flowername"];
	$description=$_POST["description"];
	$price=$_POST["price"];

$id=$_GET["flower"];

	$update=mysql_query("update flower set flowername='$flowername',description='$description',price='$price' where id='$id'");


}
?>