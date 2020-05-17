 <html>
 <body>

<?php // THIS IS MY DB.PHP TO CONNECT TO DATABASE
$user='root';
$pword="";
$server='localhost';
$db='addflower';
$conn = mysql_connect($server,$user,$pass) or die("unable to connect to the database");
$mysql= mysql_select_db($db,$conn);
$img=$_FILES['flowerimage']['name']; 
$filetmpname=$_FILES['flowerimage']['tmpname']; 
$folder='shrilaxmi/';
move_uploaded_file($filetmpname,$folder.$img);
$sql="INSERT INTO flower (flowername, description,price,flowerimage) VALUES('$_POST[flowername]','$_POST[description]','$_POST[price]','$img')";

 

if (!mysql_query($sql,$conn))

  {

  die('Error: ' . mysql_error());

  }
echo '<script type="text/javascript"> alert("Added successfully")</script>';

 

?>

</body>

</html>