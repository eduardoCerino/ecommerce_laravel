<!-- SIGN UP PAGE -->

<!DOCTYPE html>
<html>
<head>
	<title>Formulario de inicio de sesión</title>
	<link rel="stylesheet" href="/css/signup/signup.css">
</head>
<body>
	<div class="left">
		<h1> Register 🤯  </h1>
		<h3> Shop our best products, enjoy today !!!</h3>
		<form action="{{ route('signup.post') }}" method="post">
		 @csrf
			<div class="form-group">
				<label for="name">Name</label>
				<input type="text" id="name" name="name" placeholder=" " required>
			</div>
			<div class="form-group">
				<label for="lastname">Last name</label>
				<input type="text" id="lastname" name="lastname" placeholder=" " required>
			</div>
			<div class="form-group">
				<label for="cp">CP</label>
				<input type="number" id="cp" name="cp" placeholder=" "required>
			</div><div class="form-group">
				<label for="email">Email</label>
				<input type="email" id="email" name="email" placeholder=" "required>
			</div>
			<div class="form-group">
				<label for="password">Password</label>
				<input type="password" id="password" name="password" placeholder=" "required>
			</div>
			<input type="submit" value="Sign Up" class="btn-submit">
		</form>

		<p>Already registered? <a href="{{ route('login') }}">Login.</a></p>
	</div>
	<div class="right">
		<div class="content">
			<img src="https://cdn.shopify.com/s/files/1/0276/1297/1043/products/off-white-jordan-1-unc-neon-sign-57_6f919c8b-6622-4ebc-9b78-891b5061efe8_1024x1024@2x.jpg?v=1630674846" alt="">
		</div>
	</div>
		
</body>
</html>
