<?php
session_start();
?>
<?php
if($_SESSION['id']==null && $_SESSION['pass']==null)
{
include 'nik.php';
}//end of main if
else
{


echo "<script>alert('You should be a premium user to access this servise..!');</script>";
include 'nik.php';







}//end of main else
?>