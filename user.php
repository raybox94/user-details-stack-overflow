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

<a href='user.php'><h1 style='float:left;color:#fff;'>USER PROFILE</h1></a>";

$db=mysqli_connect("localhost","root","root","ray") or die("unable to connect Database");
$query = "SELECT * FROM details";
$query2 = mysqli_query($db, $query) or die('error querying db');
$num = mysqli_num_rows($query2);


echo "<a href='rlogout.php' style='margin-top:40px;text-decoration:none;float:right;color:#fff;'>logout</a>
<a href='list.php'><h4 style='float:right;color:#fff;margin:40px 30px 0px 0px;'>Recruted : ".$num."</h4></a>";
echo "
</div>
<div class='bod'>



<a id='myBtn' href='#' style='text-decoration:none;'><div class='all'>
<h5 style='padding:40px 0px 0px 0px;margin:0px;font-size:22px;color:#4CAF50;' >Stack Overflow  </h5>
</div></a>
<a href='dum.php' style='text-decoration:none;'><div class='all'>
<h5 style='padding:40px 0px 0px 0px;margin:0px;font-size:22px;color:#4CAF50;' >Add  </h5>
</div></a>

</div>


<div id='myModal' class='modal'>

  <div class='modal-content'>
    <div class='modal-header'>
      <span class='close'>&times;</span>
      <h2>Complete Details of persons </h2>
 
    </div>
    <div class='modal-body'>
 
    
<table id='in' border='1' style='float:left;width:100%;'>
      
      
</table>
     
    </div>
    
  </div>

</div>";







echo "</body>
</html>
";
}//end of main else
?>


  <script>
  var a,b;
  
  
  
$.getJSON('https://api.stackexchange.com/users?&site=stackoverflow', function(obj){
//document.write(obj.items.length);

 for(var i=0;i<obj.items.length;i++)
    {

   
        document.getElementById('in').innerHTML=document.getElementById('in').innerHTML+"<tr ><td><img src='"+obj.items[i].profile_image+"' style='float:left;'/></td><td><form action='rec.php' method='post'><input type='hidden' name='name' value='"+obj.items[i].display_name+"'/><input type='hidden' name='id' value='"+obj.items[i].account_id+"'/><input type='hidden' name='employee' value='"+obj.items[i].is_employee+"'/><input type='hidden' name='accept' value='"+obj.items[i].accept_rate+"'/><input type='hidden' name='age' value='"+obj.items[i].age+"'/><input type='submit' value='recrute'/></form>    </td>";

       document.getElementById('in').innerHTML=document.getElementById('in').innerHTML + "<td><span>Name:</span>"+obj.items[i].display_name+"</td><td><span>Silver:</span>"+obj.items[i].badge_counts.silver+"</td><td><span>Gold:</span>"+obj.items[i].badge_counts.gold+"</td><td><span>Account Id :</span>"+obj.items[i].account_id+"</td><td><span>Age :</span>"+obj.items[i].age+"</td></tr>";
    
  
  
    }//end of for loop 
});


  
</script>






<script>

var modal = document.getElementById('myModal');

var btn = document.getElementById('myBtn');

var span = document.getElementsByClassName('close')[0];

btn.onclick = function() {
    modal.style.display = 'block';
}

span.onclick = function() {
    modal.style.display = 'none';
}

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = 'none';
    }
}
</script>