<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Contact Form Tutorial</title>
		<link href="php-styles.css" rel="stylesheet" />
	</head>
	<body>
			<main>
				<p>SEND E-Mail</p>
				<form class="contact-form" action="formsubmited.php" method="POST">
					<input type="text" name="firstName" value="" placeholder="First name" />
					<input type="text" name="lastName" value="" placeholder="Last Name" />
					<input type="email" name="emailAddress" value="" placeholder="Email Address" />
					<input type="tel" name="phoneNumber" value="" placeholder="555 555 5555" />
					<input type="number" name="numberOfAdults" value="" placeholder="Number of Adults", min: 0, required: true />
					<input type="number" name="numberOfChildren" value="" placeholder="Number of Children", min: 0, required: true />
					<input type="date" name="tripDate" value="", required: true />

					<button type="submit" name="Submit" value="submit">SUBMIT</button>

				</form>
			</main>
	</body>
</html>