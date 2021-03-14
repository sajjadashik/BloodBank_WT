<!DOCTYPE html>
<html>
<head>
<?php
$name = "";
$err_name = "";
$uname = "";
$err_uname = "";
$pass = "";
$err_pass = "";
$cpass = "";
$err_cpass = "";
$email = "";
$err_email = "";
$phonenumber = "";
$err_phonenumber = "";
$dob = "";
$err_dob = "";
$street = "";
$err_street = "";
$city = "";
$err_city = "";
$state = "";
$err_state = "";
$zip = "";
$err_zip = "";
$err_gender = "";
$blood = "";
$err_blood = " ";
$dob = "";
$err_dob = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $err_name = "*Name is Required";
       
    } else {
        $name = htmlspecialchars($_POST["name"]);
    }
    if (empty($_POST["uname"])) {
        $err_uname = "*User Name Required";
       
    } else if (strlen($_POST["uname"]) < 6) {
        $err_uname = "*Username should be at least 6 characters";
      
    } else {
        $uname = htmlspecialchars($_POST["uname"]);
    }

    if (empty($_POST["pass"])) {
        $err_pass = "*Password is Required";
        
    } else if (strlen($_POST["pass"]) < 8) {
        $err_pass = "<*Password should be at least 8 characters";
        
    } else {
        $pass = $_POST["pass"];
    }
    
    if (empty($_POST["cpass"])) {
        $err_cpass = "*Confirm Password is Required";
        $cpass = $_POST["cpass"];
        
    }else{
        if ($_POST["pass"] == $_POST["cpass"]) {
            $cpass = $_POST["cpass"];
        } else {
            $err_cpass = "*Password & Confirm Password Is Not Same";
            
        }
    }
    if (empty($_POST["email"])) {
        $err_email = "*Email is Required";
     
    } else {
        $email = $_POST["email"];
    }
    if (empty($_POST["phonenumber"])) {
        $err_phonenumber = "Phone Number is Required";

    } else if (strlen($_POST["phonenumber"]) == 10) {
        $err_phonenumber = "*Phone Number should be 11 characters";
        
    } else {
        $phonenumber = $_POST["phonenumber"];
    }
    if (empty($_POST["dob"])) {
        $err_dob = "*DOB is Required";
        
    } else {
        $dob = htmlspecialchars($_POST["dob"]);
    }
    if (empty($_POST["street"])) {
        $err_street = "*Street is Required";
        
    } else {
        $street = $_POST["street"];
    }
    if (empty($_POST["city"])) {
        $err_city = "*City is Required";
        
    } else {
        $city = $_POST["city"];
    }
    if (empty($_POST["state"])) {
        $err_state = "*State is Required";
        
    } else {
        $state = $_POST["state"];
    }
    if (empty($_POST["zip"])) {
        $err_zip = "*Zip is Required";
       
    } else {
        $zip = $_POST["zip"];
    }
    if (!isset($_POST["gender"])) {
        $err_gender = "*Gender is Required";
     
    }

    if (empty($_POST["blood"])) {
        $err_blood = "*Blood Group is Required";
       
    }else{
        $blood = $_POST["blood"];
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
<table>
		<h1>Add Donor</h1>
                <tr>
                    <td><Span>Name</Span></td>
                    <td>: <input type="text" placeholder="Name" value="<?php echo $name; ?>" name="name"><br><span style="color: red;"><?php echo $err_name; ?> </span>
                    </td>
                </tr>
                <tr>
                    <td><span>Username</span></td>
                    <td>: <input type="text" placeholder="Username" value="<?php echo $uname; ?>" name="uname"><br><span style="color: red;"><?php echo $err_uname; ?> </span>
                    </td>
                </tr>
                <tr>
                    <td><span>Password</span></td>
                    <td>: <input  type="password" placeholder="Password" value="<?php echo $pass; ?>" name="pass"><br><span style="color: red;"><?php echo $err_pass; ?> </span>
                    </td>
                </tr>
                <tr>
                    <td><span>Confirm Password</span></td>
                    <td>: <input type="password" placeholder="Confirm Password" value="<?php echo $cpass; ?>" name="cpass"><br><span style="color: red;"><?php echo $err_cpass; ?> </span>
                    </td>
                </tr>
                <tr>
                    <td><span>Email</span></td>
                    <td>: <input type="email" placeholder="Email" value="<?php echo $email; ?>" name="email"><br><span style="color: red;"><?php echo $err_email; ?> </span>
                    </td>
                </tr>
                <tr>
                    <td><span>Phone Number</span></td>
                    <td>: <input  type="number" placeholder="Phone Number" value="<?php echo $phonenumber; ?>" name="phonenumber"><br><span style="color: red;"><?php echo $err_phonenumber; ?></span>
                    </td>
                </tr>
                <tr>
                    <td>Date Of Birth</td>
                    <td>:
                        <input  type="date" name="dob"><span style="color: red;"><br><span style="color: red;"><?php echo $err_dob; ?></span>
                    </td>
                </tr>
                <tr>
                    <td><span>Gender</span></td>
                    <td>:<input type="radio" value="Male" name="gender">Male<input type="radio" value="Female" name="gender">Female
                    <br><span style="color: red;"><?php echo $err_gender; ?></span>
                    </td>
                </tr>
                <tr>
                    <td>Blood Group</td>
                    <td>:
                        <select name="blood" value="">
                            <option disabled selected>Choose</option>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                        </select><br><span style="color: red;"><?php echo $err_blood; ?></span>
                    </td>
                </tr>
                <tr>
                    <td rowspan="4"><span>Address</span></td>
                    <td>: <input type="text" placeholder="Street Address" value="<?php echo $street; ?>" name="street"><br><span style="color: red;"><?php echo $err_street; ?></span>
                    </td>
                </tr>
                <tr>
                    <td>: <input  type="text" placeholder="City" value="<?php echo $city; ?>" name="city"><br><span style="color: red;"><?php echo $err_city; ?></span>
                    </td
                </tr>
                <tr>
                    <td>: <input  type="text" placeholder="State" value="<?php echo $state; ?>" name="state"><br><span style="color: red;"><?php echo $err_state; ?></span>
                    </td>
                </tr>
                <tr>
                    <td>: <input  type="number" placeholder="Postal/zip code" value="<?php echo $zip; ?>" name="zip"><br><span style="color: red;"><?php echo $err_zip; ?></span>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input style="width:100%; background-color:darkblue; color:white; border: 3px solid darkblue" type="submit" value="Submit"></td>
                </tr>
                <tr>

</table>
</form>
</div>
</body>
</html>