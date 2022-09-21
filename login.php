<?php
require('top.inc.php');
?>
<link rel="stylesheet" href="css/login.css">
<div class="account-page">
	<div class="container">
		<div class="row">
			<div class="col-4">
			</div>
			<div class="col-2">
				<div class="form-container">
					<div class="form-btn">
						<span onclick="login()">LOGIN</span>
						<span onclick="Reg()">REGISTER</span>
					</div>
					<form  id="LoginForm" class="lfrom">
						<input type="text" placeholder="Enter Email">
						<input type="password" placeholder="Enter Password">
						<button type="submit" class="btn">Login</button>
					</form>

					<form   id="RegForm"class="lfrom">
						<input type="text" placeholder="Enter name">
						<input type="text" placeholder="Enter Email">
						<input type="text" placeholder="Enter Mobile">
						<input type="password" placeholder="Enter Password">
						<button type="submit" class="btn">Register</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
require('footer.inc.php');
?>

<!-- JS for toggle form -->

<script>
	var LoginForm =document.getElementById("LoginForm");
	var RegForm =document.getElementById("RegForm");
	var Indicator=document.getElementById("Indicator");

	function Reg() {
		RegForm.style.transform = "translateX(0px)";
		LoginForm.style.transform = "translateX(0px)";
		Indicator.style.transform = "translateX(100px)";
	}
	function login() {
		RegForm.style.transform = "translateX(300px)";
		LoginForm.style.transform = "translateX(300px)";
		Indicator.style.transform = "translateX(300px)";
	}
</script>