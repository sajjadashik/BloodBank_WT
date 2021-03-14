<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="commonStyle.css">
	<title>Settings</title>
	<?php
	$name = "";
	$err_name = "";
	$phonenumber = "";
	$err_phonenumber = "";
	$email = "";
	$err_email = "";
	$pass="";
	$npass="";
	$cpass="";
	$err_pass="";
	$err_cpass="";
	$err_npass="";
	$street = "";
	$err_street = "";
	$city = "";
	$err_city = "";
	$state = "";
	$err_state = "";
	$zip = "";
	$err_zip = "";
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		if (empty($_POST["name"])) {
			$err_name = "*Name is Required";
			$hasError = true;
		} else {
			$name = htmlspecialchars($_POST["name"]);
		}
		 if (empty($_POST["email"])) {
        $err_email = "*Email is Required";
        $hasError = true;
		} else {
			$email = $_POST["email"];
		}
		if (empty($_POST["phonenumber"])) {
			$err_phonenumber = "*Phone Number is Required";
			$hasError = true;
		} else if (strlen($_POST["phonenumber"]) == 10) {
			$err_phonenumber = "*Phone Number should be 11 characters";
			$hasError = true;
		} else {
			$phonenumber = $_POST["phonenumber"];
		}
		if (empty($_POST["street"])) {
        $err_street = "*Street is Required";
        $hasError = true;
    } else {
        $street = $_POST["street"];
    }
    if (empty($_POST["city"])) {
        $err_city = "*City is Required";
        $hasError = true;
    } else {
        $city = $_POST["city"];
    }
    if (empty($_POST["state"])) {
        $err_state = "*State is Required";
        $hasError = true;
    } else {
        $state = $_POST["state"];
    }
    if (empty($_POST["zip"])) {
        $err_zip = "*Zip is Required";
        $hasError = true;
    } else {
        $zip = $_POST["zip"];
    }
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
</head>

<body style="background-color:rgb(219, 235, 241)">
	<div class="header">
		<table>
			<tr>
				<td><img id="element1" src="Blood_Old.png" height="50px" width="50px"></td>
				<td><b>Sheccha<br>Blood<br>Bank</b></td>
			</tr>
		</table>
	</div>
	<div align="right" class="rightinfo">
		<table>
			<tr>
				<td> <b><a href="user_home.php">Welcome, User</a></b><a href="user_settings.php"> <img id="element2 " src="settings.png" height="20px" width="20px"></a>
					<a href="login.php"> <img id="element3" src="logout.png" height="20px" width="20px"></a>
				</td>
			</tr>
		</table>
	</div>
	<div class="menu">
		<table>
			<tr align="center">
				<td class="menucell"><b><a href="user_sendreq.php">Send Request</a></b></td>
			</tr>
			<tr align="center">
				<td class="menucell"><b><a href="user_donorInfo.php">Donor List</a></b></td>
			</tr>
			<tr align="center">
				<td class="menucell"><b><a href="user_available.php">Available Stock</a></b></td>
			<tr align="center">
				<td class="menucell"><b><a href="sendmessage.php">Contact Us</a></b></td>
			</tr>
		</table>
	</div>

	<form action="" method="post">
		<div class="otherpage" align="center">
			<h1>User Information</h1>
			<tr>
				<td><Span><b>For Changing Name:<br><br><b></Span></td>
			</tr>
			<tr>
				<td><Span>Name</Span></td>
				<td>: <input type="text" placeholder="Name" value="<?php echo $name; ?>" name="name"><br><span style="color: red;"><?php echo $err_name; ?> </span><br>
				</td>
			</tr>
			<tr>
				<td><Span><b>For Changing Password:<br><br><b></Span></td>
			</tr>
<tr>
<td><Span>Current Password</Span></td>
<td>: <input type="Password" placeholder="Current Password" name="pass"><br> <span style="color: red;"><?php echo $err_pass;?> </span><br></td>
</tr>
<tr>
<td><span>New Password</span></td>
<td>: <input type="Password" placeholder="New Password" name="npass"><br><span style="color: red;" ><?php echo $err_npass;?> </span><br></td>
</tr>
<tr>
<td><span>Confirm New Password</span></td>
<td>: <input type="Password" placeholder="Confirm Password" name="cpass"><br><br><span style="color: red;"><?php echo $err_cpass;?></span><br></td>
</tr>
<tr>
<td><Span><b>For Changing Number:<br><br><b></Span></td>
</tr>
<tr>
<td><Span>Number</Span></td>
<td>: <input type="number" placeholder="Number" value="<?php echo $phonenumber; ?>" name="phonenumber"><br> <span style="color: red;"><?php echo $err_phonenumber; ?> </span><br>
</td>
</tr>
<tr>
<td><Span><b>For Changing Email:<br><br><b></Span></td>
</tr>
<tr>
                    <td><span>Email</span></td>
                    <td>: <input type="email" placeholder="Email" value="<?php echo $email; ?>" name="email"><br><span style="color: red;"><?php echo $err_email; ?> </span><br>
                    </td>
            </tr>
			<tr>
				<td><Span><b>For Changing Address:<br><br><b></Span></td>
			</tr>
			<tr>
                    <td rowspan="4"><span>Address</span></td>
                    <td>: <input type="text" placeholder="Street Address" value="<?php echo $street; ?>" name="street"><br><span style="color: red;"><?php echo $err_street; ?></span><br>
                    </td>
                </tr>
                <tr>
                    <td>: <input type="text" placeholder="City" value="<?php echo $city; ?>" name="city"><br><span style="color: red;"><?php echo $err_city; ?></span><br>
                    </td>
                </tr>
                <tr>
                    <td>: <input type="text" placeholder="State" value="<?php echo $state; ?>" name="state"><br><span style="color: red;"><?php echo $err_state; ?></span><br>
                    </td>
                </tr>
                <tr>
                    <td>: <input type="number" placeholder="Postal/zip code" value="<?php echo $zip; ?>" name="zip"><br><span style="color: red;"><?php echo $err_zip; ?></span><br>
                    </td>
                </tr>
				<tr>
					<td colspan="2" align="center"><input style="background-color:darkblue; color:white; border: 3px solid darkblue" type="submit" value="Update"></td>
				</tr>
				<table>
				</table>
		</div>
	</form>
</body>

</html>