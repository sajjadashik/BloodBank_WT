<!DOCTYPE html>
<html>
<head>
<title>Reply Messeges</title>
<?php

$rmessage="";
$err_rmessage="";
if ($_SERVER["REQUEST_METHOD"] == "POST")
   {
		if(empty($_POST["rmessage"]))
		{
			$err_rmessage="Message is Required";
			$hasError=true;
		}
		else
		{
			$rmessage=$_POST["rmessage"];
		}
		
   }
?>

<link rel="stylesheet" type="text/css" href="commonStyle.css">
</head>
<body style="background-color:rgb(219, 235, 241);"> 
	
	<div class="header">
	<table>
	<tr><td><img id="element1" src="Blood_Old.png" height="50px" width="50px"></td>
        <td><b>Sheccha<br>Blood<br>Bank</b></td></tr></table></div>
		<div align="right" class="rightinfo">
		<table><tr>
	    <td><b><a href="admin_home.php">Welcome, Admin</a><b> <a href="admin_settings.php"> <img id="element2 "src="settings.png" height="20px" width="20px"></a>
			              <a href="login.php"> <img id="element3"src="logout.png" height="20px" width="20px"></a></td></tr></table></div>
	
	<div class="menu">
	<table>
	<tr align="center"><td class="menucell"><b><a href="admin_reqApproval.php">Request Approval</a></b></td></tr>
	<tr align="center"><td class="menucell"><b><a href="admin_adddonor.php">Add Donor</a></b></td></tr>
	<tr align="center"><td class="menucell" ><b><a href="admin_donorInfo.php">Donor Info</a></b></td></tr>
	<tr align="center"><td class="menucell" ><b><a href="admin_messeges.php">Messeges</a></b></td></tr>
	</table>
	</div>
	
<div class="otherpage" align="center">
<form action="" method="post">
<h1>Reply Messeges</h1>
<tr>
<td><Span><b>From: Seccha Blood Bank<b><br></Span></td>
</tr>
<tr>
<td><Span><b>Name: Saiful Islam<b></Span><br></td>
</tr>
<tr>
<td><Span><b>UserName:saiful<b></Span><br></td>
</tr>
<td><span><b>Message:Thank You for saving my mothers life.</b></span><br></td>
</tr>
<tr>
<td><span>Reply Message</span></td>
<td>:<textarea placeholder="Reply" name="rmessage"></textarea><br><span style="color: red;"><?php echo $err_rmessage;?></span></td>
</tr>
<tr>
<td colspan="2" align="center"><input style=" background-color:darkblue; color:white; border: 3px solid darkblue" type="submit" value="Send"></td>
</tr>
</table>
</form>
</div>
</body>
</html>