<?php
	$name="";
	$err_name="";
	$username="";
	$err_username="";
	$password="";
	$err_password="";
    $confirmpassword="";
	$err_confirmpassword="";
	$Email="";
	$err_Email="";
	$code="";
	$err_code="";
	$number="";
	$err_number="";
	$street="";
	$err_Street="";
	$City="";
	$err_City="";
	$state="";
	$err_state="";
	$postal="";
	$err_postal="";
	$gender="";
	$err_gender="";
	$learnings=[];
	$err_learnings="";
	$bio="";
	$err_bio="";
	$hasError= false;

function learningExist($learning){
		global $learnings;
		foreach($learnings as $l){
			if($l == $learning) return true;
		}
		return false;
	}
	//if($_SERVER["REQUEST_METHOD"]=="POST"){
	if(isset($_POST["submit"])){
		if(empty($_POST["name"])){
			$hasError = true;
			$err_name="Name Required";
		}
		else if(strlen($_POST["name"]) <= 3){
			$hasError = true;
			$err_name="Name must contain >3 character";
		}
		else{
			$name = $_POST["name"];
		}
		
		if(empty($_POST["username"])){
			$hasError = true;
			$err_username="User name Required";
		}
		else if(strlen($_POST["username"]) <= 2){
			$hasError = true;
			$err_username="User Name Name must contain >2 character";
		}
		else if(strpos($_POST["username"]," ")){
      $hasError=true;
       $err_username="Username should not contain space";
}
		else{
			$username = $_POST["username"];
		}

if(empty($_POST["password"])){
			$hasError = true;
			$err_password="Password Required";
		}
		else if(strlen($_POST["password"]) <= 8){
			$hasError = true;
			$err_password="Password must contain >8 character";
		}
		
		
		else{
			$password = $_POST["password"];
		}
		
		if(empty($_POST["confirmpassword"])){
			$hasError = true;
			$err_confirmpassword="Password Required";
		}
		else if($_POST["password"]!=$_POST["confirmpassword"])
{
  $hasError = true;
 $err_confirmpassword="Password doesn't match";
}
else {

	$confirmpassword=$_POST["confirmpassword"];
}
		if(empty($_POST["Email"])){
			$hasError = true;
			$err_Email="Email Required";
		}
		else if(strpos($_POST["Email"],"@.")){
          $hasError=true;
			     $err_email="Email must contain @ and .";
		     }

		
		
		else{
			$Email = $_POST["Email"];
		}
		if(empty($_POST["code"])){
			$hasError = true;
			$err_code="Code Required";
		}
		else if(!is_numeric($_POST["code"]))
{
  $hasError = true;
  $err_code="Enter a number";

}
		
		else{
			$Code = $_POST["code"];
		}
		if(empty($_POST["number"])){
			$hasError = true;
			$err_number="Number Required";
		}
		else if(!is_numeric($_POST["phone"])){
	   $hasError = true;
	  $err_phone="Phone number Required";
}

		else{
			$Number = $_POST["number"];
		}
		
		if(empty($_POST["street"])){
			$hasError = true;
			$err_street="street Required";
		}
		
		else{
			$street = $_POST["street"];
		}
		
		if(empty($_POST["city"])){
			$hasError = true;
			$err_city="City Required";
		}
		
		else{
			$City = $_POST["city"];
		}
		
		if(empty($_POST["state"])){
			$hasError = true;
			$err_state="State Required";
		}
		
		else{
			$State = $_POST["state"];
		}
		
		if(empty($_POST["postal"])){
			$hasError = true;
			$err_postal="Postal o zip Required";
		}
		
		else{
			$postal = $_POST["postal"];
		}
		
		if(!isset($_POST["gender"])){
			$hasError = true;
			$err_gender="Gender Required";
		}
		else{
			$gender = $_POST["gender"];
		}
		
		if(empty($_POST["bio"])){
			$hasError = true;
			$err_bio = "Bio Required";
		}
		else{
			$bio = $_POST["bio"];
		}
		if(!isset($_POST["learnings"])){
			$hasError = true;
			$err_learnings="This part Required";
		}
		else{
			$learnings = $_POST["learnings"];
		}	
	}
	
 ?>
	
<html>
	<head></head>
	<body>
		<form action="#" method="post">
		<fieldset>
			<table>
				<tr>
					<td>Name</td>
					<td>: <input type="text" name="name" value="<?php echo $name; ?>" placeholder="Your name ...."> </td>
					<td><span> <?php echo $err_name;?> </span></td>
				</tr>
				<tr>
					<td>Username</td>
					<td>: <input type="text" name="username" value="<?php echo $username; ?>"placeholder="Username">  </td>
					<td><span> <?php echo $err_username;?> </span></td>
				</tr>
				<tr>
					<td>Password</td>
					<td>: <input type="password" name="password" value="<?php echo $password; ?>" placeholder="Password">  </td>
					<td><span> <?php echo $err_password;?> </span></td>
				</tr>
				<tr>
					<td> Confirm Password</td>
					<td>: <input type="password" name="confirmpassword" value="<?php echo $confirmpassword; ?>" placeholder=" Confirm Password">  </td>
					<td><span> <?php echo $err_confirmpassword;?> </span></td>
				</tr>
				<tr>
					<td>Email</td>
					<td>: <input type="text" name="Email" value="<?php echo $Email; ?>" placeholder="Insert Your Email">  </td>
					<td><span> <?php echo $err_Email;?> </span></td>
				</tr>
				<tr>
					<td>Phone</td>
					<td>:
                    <input type="text" name="code"value="<?php echo $code; ?>"  placeholder="Code" >
                    
                    <input type="text" name="number" value="<?php echo $number; ?>" placeholder="Number"> </td>
					
                    <td><span> <?php echo $err_code;?> </span></td>
					<td><span> <?php echo $err_number;?> </span></td>
				
                </tr>
				<tr>
					<td>Address</td>
					<td> : <input type="text" name="Street" value="<?php echo $street; ?>" placeholder="Street Address"> <input type="text" name="City" value="<?php echo $City; ?>" placeholder="City">- <input type="text" name="state" value="<?php echo $state; ?>" placeholder="State"> <br> <input type="text" name="postal" value="<?php echo $postal; ?>" placeholder="Postal/Zip Code">  </td>
					<td><span> <?php echo $err_Street;?> </span></td>
					<td><span> <?php echo $err_City;?> </span></td>
					<td><span> <?php echo $err_state;?> </span></td>
					<td><span> <?php echo $err_postal;?> </span></td>
					
				</tr>
			
				<tr>
					<td>Gender</td>
					<td>: <input type="radio" value="Male" <?php if($gender=="Male") echo "checked"; ?> name="gender"> Male <input name="gender" <?php if($gender=="Female") echo "checked"; ?> value="Female" type="radio"> Female </td>
					<td><span> <?php echo $err_gender;?> </span></td>
				</tr>
				</tr>
				<tr>
					<td>Where Did you hear about us?</td>
					<td>: <input type="checkbox" name="learnings[]" <?php if(learningExist("A Frind or Colleague")) echo "checked";?> value="A Frind or Colleague"> A Frind or Colleague
					<input type="checkbox" name="learnings[]" <?php if(learningExist("Google")) echo "checked";?> value="Google"> Google<br>
					<input type="checkbox" name="learnings[]" <?php if(learningExist("Blog Post")) echo "checked";?> value="Blog Post"> Blog Post
					<input type="checkbox" name="learnings[]" <?php if(learningExist("New Article")) echo "checked";?> value="New Article"> New Article
					</td>
					<td><span> <?php echo $err_learnings;?> </span></td>
				</tr>
				<tr>
					<td>Bio</td>
					<td>: <textarea name="bio" ><?php echo $bio; ?></textarea>
					<td><span> <?php echo $err_bio;?> </span></td>
					</td>
				</tr>
				<tr>
					<td colspan="2" align="right"><input type="submit" name="submit" value="Submit"></td>
					
				</tr>
			</table>
				
		</fieldset>
		</form>
	</body>
</html>
				