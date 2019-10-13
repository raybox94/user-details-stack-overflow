<?php
session_start();
?>
<?php
if($_SESSION['id']==null && $_SESSION['pass']=null)
{
include 'nik.php';
}//end of main if 
else{

$id=$_POST['id'];

$db=mysqli_connect("localhost","root","root","ray") or die("unable to connect Database");
$query = "delete from details where accountid='$id'";
$query2 = mysqli_query($db, $query);

include 'list.php';


}//end of main else
?>