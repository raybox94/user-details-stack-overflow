<?php
session_start();
?>
<?php
if($_SESSION['id']!=null && $_SESSION['pass']!=null)
{
include 'user.php';
}//end of main if
else
{
echo"

<html>
<head>

<title>LOGIN</title>
<style>
body{margin:0px auto;background:#7EBC5C;overflow:hidden;}
.man{width:100%;height:100%;padding-top:150px;}
.login{width:30%;height:50%;background:#fff;}


</style>
</head>
<body>
<div class='man'>
<center><div class='login'>

<form action='log.php' method='post'>
<input type='text' placeholder='Enter Id' name='id' style='width:80%;height:12%;margin-top:70px;background:#F2F2F2;border:0px;padding-left:5px;' required/>
<input type='pass' placeholder='Enter Password' name='pass' style='width:80%;height:12%;margin-top:30px;background:#F2F2F2;border:0px;padding-left:5px;' required/>
<input type='submit' value='Log In' style='width:60%;height:10%;margin-top:10px;border:0px;background:#4CAF50;'/>

</form>
</div></center>
</div>
</body>
</html>
";

}//end of main else
?>