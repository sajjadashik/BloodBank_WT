<!DOCTYPE html>
<html>
<head>
<?php
$pass="";
$npass="";
$cpass="";
$err_pass="";
$err_cpass="";
$err_npass="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST["pass"])) {
        $err_pass = "*Password is Required";
        $hasError = true;
    } else if (strlen($_POST["pass"]) < 8) {
        $err_pass = "*Password should be at least 8 characters";
        $hasError = true;
    } else {
        $pass = $_POST["pass"];
    }
	
	if (empty($_POST["npass"])) {
        $err_npass = "*New Password is Required";
        $hasError = true;
    } else if (strlen($_POST["npass"]) < 8) {
        $err_npass = "*New Password should be at least 8 characters";
        $hasError = true;
    } else {
        $pass = $_POST["npass"];
    }
	if (empty($_POST["cpass"])) {
        $err_cpass = "*Confirm Password is Required";
        $cpass = $_POST["cpass"];
        $hasError = true;
    }
	else{
        if ($_POST["pass"] == $_POST["cpass"]) {
            $cpass = $_POST["cpass"];
        } else {
            $err_cpass = "*New Password & Confirm Password Is Not Same";
            $hasError = true;
        }
    }
}
?>
<title>Admin Settings</title>
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
<h1>Change Password</h1>
<table>
<tr>
<td><Span>Current Password</Span></td>
<td>: <input type="Password" placeholder="Current Password" name="pass"><br> <span style="color: red;"><?php echo $err_pass;?> </span></td>
</tr>
<tr>
<td><span>New Password</span></td>
<td>: <input type="Password" placeholder="New Password" name="npass"><br><span style="color: red;" ><?php echo $err_npass;?> </span></td>
</tr>
<tr>
<td><span>Confirm New Password</span></td>
<td>: <input type="Password" placeholder="Confirm Password" name="cpass"><br><span style="color: red;"><?php echo $err_cpass;?></span></td>
</tr>
<tr>
<td colspan="2" align="center"><input style="width:100%; background-color:darkblue; color:white; border: 3px solid darkblue" type="submit" value="Submit"></td>
</tr>

</table>
</form>
</div>
</body>
</html>