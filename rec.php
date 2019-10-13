<?php
session_start();
?>
<?php
if($_SESSION['id']==null && $_SESSION['pass']==null)
{
include 'nik.php';
}
else
{

$name=$_POST['name'];
$id=$_POST['id'];
$employee=$_POST['employee'];
$age=$_POST['age'];
$accept=$_POST['accept'];

//echo $name.$id.$employee.$age.$accept;
$db=mysqli_connect("localhost","root","root","ray") or die("unable to connect Database");
$query = "insert into details(name,accountid,employee,acceptrate,age) values ('$name','$id','$employee','$accept','$age')";
$query2 = mysqli_query($db, $query);

if($query2 != null)
{
include 'nik.php';
echo "<script>alert('Recruted Successful..!');</script>";

}
else{
include 'nik.php';
echo "<script>alert('Already Recruted');</script>";

}
}//end of main else


?>