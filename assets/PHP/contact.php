<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Module PHP David</title>
    <link rel="stylesheet" href="../CSS/custom.css">
    <script src="../JS/jquery-3.6.1.min.js"></script>
</head>
<body>
<?php
include "./navBar.php";
echo' <main>
			<div id="Horizontal">
				<div class="BlockFull">
					<form
						action=""
						id="formMess"
						class="row g-3 needs-validation"
						method="get"
						novalidate
					>
						<div class="form-floating">
							<input
								type="text"
								class="form-control"
								id="FirstName"
								name="fname"
								placeholder="First Name"
							/>
							<label for="floatingInput">First Name</label>
						</div>
						<div class="form-floating">
							<input
								type="text"
								class="form-control"
								id="LastName"
								name="lname"
								placeholder="Last Name"
							/>
							<label for="floatingInput">Last Name</label>
						</div>
						<div class="form-floating">
							<input
								type="email"
								class="form-control"
								id="Email"
								name="mail"
								placeholder="Email"
							/>
							<label for="floatingInput">Email Address</label>
						</div>
						<div class="form-floating">
							<textarea
								class="form-control"
								placeholder="Message"
								id="Message"
								name="mess"
								style="height: 150px"
							></textarea>
							<label for="floatingTextarea2">Message</label>
						</div>
						<div class="col-12"></div>
						<div class="col-12">
							<button class="btn btn-primary" type="submit">
								Send Message
							</button>
						</div>
					</form>
				</div>
				<div class="BlockTwoPart">
					<div class="Block1">
						<div class="container text-center">
							<div class="row">
								<div class="col">Petit</div>
							</div>
							<div class="row">
								<div class="col">Exemple</div>
							</div>
							<div class="row">
								<div class="col">de Grid</div>
							</div>
						</div>
					</div>
					<div class="Block2"></div>
				</div>
			</div>
		</main>';
?>
<script src="../JS/script.js"></script>
<script src="../JS/form.js"></script>
</body>
</html>