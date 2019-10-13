<?php
session_start();
?>
<?php
if($_SESSION['id']!=null && $_SESSION['pass']!=null)
{
include 'user.php';
}
else
{

$id=$_POST['id'];
$pass=$_POST['pass'];
$db=mysqli_connect("localhost","root","root","ray") or die("unable to connect Database");
$query = "SELECT * FROM login WHERE id='$id'";
$query2 = mysqli_query($db, $query);
while($row = mysqli_fetch_array($query2))
{
  $id1=$row['id'];
   $pass1=$row['pass'];
}
if($id==$id1 && $pass==$pass1)
{
$_SESSION["id"]=$id1;
$_SESSION["pass"]=$pass1;

include 'user.php';

}
else
{

include 'nik.php';
echo "<script type='text/javascript'>alert('May be wrong Email or Password');</script>";

}








}
?>