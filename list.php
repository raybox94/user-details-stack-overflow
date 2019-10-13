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
echo "

<html>
<head>
<title>User | Profile</title>
  <script src='https://code.jquery.com/jquery-1.10.2.js'></script>

<style>
body{margin:0px auto;background:#7EBC5C;}
.head{width:75%;height:100px;margin:0px auto;}
.bod{width:75%;height:80%;margin:0px auto;}

td{padding-left:10px;}
.all{width:250px;height:200px;background:#F2F2F2;padding:10px 0px 0px 20px;float:left;margin-right:10px;}
span{color:#4CAF50;}

.modal {display: none; position: absolute; z-index: 1; padding-top: 100px; left: 0;top: 0;width: 100%; height: 100%;overflow: scroll; background-color: rgb(0,0,0); background-color: rgba(0,0,0,0.4);}
.modal-content {position: relative;background-color: #fefefe;margin: auto;padding: 0;border: 1px solid #888;width: 80%;box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);-webkit-animation-name: animatetop; -webkit-animation-duration: 0.4s;animation-name: animatetop;animation-duration: 0.4s;overflow:scroll;}
@-webkit-keyframes animatetop {from {top:-300px; opacity:0} to {top:0; opacity:1}}

@keyframes animatetop {from {top:-300px; opacity:0}to {top:0; opacity:1}}
.close {color: white;float: right;font-size: 28px;font-weight: bold;}
.close:hover,
.close:focus {color: #000;text-decoration: none;cursor: pointer;}

.modal-header {padding: 2px 16px;background-color:#4CAF50;color: white;}

.modal-body {padding: 2px 16px;background:#cbdecb;height:75%;overflow:scroll;}



</style>
</head>
<body>
<div class='head'>

<a href='user.php'><h1 style='float:left;color:#fff;'>List</h1></a>";

$db=mysqli_connect("localhost","root","root","ray") or die("unable to connect Database");
$query = "SELECT * FROM details";
$query2 = mysqli_query($db, $query) or die('error querying db');
$num = mysqli_num_rows($query2);


echo "<a href='rlogout.php' style='margin-top:40px;text-decoration:none;float:right;color:#fff;'>logout</a>
<a href='list.php'><h4 style='float:right;color:#fff;margin:40px 30px 0px 0px;'>Recruted : ".$num."</h4></a>";
echo "
</div>
<div class='bod'>";
$db=mysqli_connect("localhost","root","root","ray") or die("unable to connect Database");
$query = "SELECT * FROM details ";

while($row = mysqli_fetch_array($query2))
{

echo " 

<table style='color:#fff;font-size:22px;'>
<tr >
<td style='width:350px;'>Name :".$row['name']."</td>
<td style='width:300px;'>Account Id :".$row['accountid']."</td>
<td style='width:300px;'>Employee :".$row['employee']."</td>
<td style='width:300px;'>Accept rate :".$row['acceptrate']."</td>
<td style='width:250px;'>Age :".$row['age']."</td>
<td>
<form action='remove.php' method='post'>
<input type='hidden' name='id' value='".$row['accountid']."'/>
<input type='submit' value='remove'/>
</form>
</td>
<tr>
</table>
";
}//end of while
echo "</div>










</body>
</html>
";
}//end of main else
?>


 