

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<style>
	.were{
    position:absolute;
    top: 50%;
    left: 50%;
    width: 400px;
    padding: 40px;
    transform: translate(-50%,-50%);
    background-color: rgba(0,0,0,0.5);
    box-shadow: 0 15px 25px rgba(0,0,0,0.6);
    border-radius: 10px;
    box-sizing: border-box;
}
.sw{
	font-size: 20px;
	background-color: saddlebrown;
	width: 80px;
	border-radius: 5px;
}
label{
	font-size: 20px;
}
</style>
<body>
	<div class="were">
	<form action="" method="post">
		<label for="firstname">firstname</label>
		<input type="text"class="form_control"id="firstname" name="firstname"><br><br>
		<label for="lastname">lastname</label>
		<input type="text"class="form_control"id="lastname" name="lastname"><br><br>
		<label for="email">gender</label>
		<label for="male"class="radio_inline">
		<input type="radio" name="gender"value="male"id="male">male</label>
				<label for="female"class="radio_inline">
		<input type="radio" name="gender"value="female"id="female">female</label><br><br>
						<label for="password">password</label>
		<input type="password"class="form_control"id="password"><br><br>

<label for="number">phonenumber</label>
		<input type="number"class="form_control"id="number"name="phonenumber"><br><br>
		<button name="btn">submit</button></form></div></form>
		<?php
		include "connection.php";

	if(isset($_POST['btn'])){

            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $gender = $_POST['gender'];
            $phonenumber = $_POST['phonenumber'];
            $password = $_POST['password'];

			$sql = "INSERT INTO registration(firstname, lastname, gender, phonenumber, password) VALUES ($firstname,$lastname,$gender,$phonenumber,$password)";

			$epiph = mysqli_query($conn,$sql);

			if(sql==true){
				echo "<script>
				alert('successfull to regist');
				window.href='login.php';
				</script>";
			}
			else{
				echo "<script>
				alert('failed to regist');
				window.href='form.php';
				</script>";
			}


		}
		?>

</body>
</html>