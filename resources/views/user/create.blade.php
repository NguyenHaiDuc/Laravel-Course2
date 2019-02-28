<!DOCTYPE html>
<html>
<head>
	<title>Create User</title>
</head>
<body>
	<form action="{{url('users')}}" method="POST">
		@csrf
		<input type="text" name="name" placeholder="Name"><br>
		<input type="text" name="email" placeholder="Email"><br>
		<option value="gender"></option>
		<input type="password" name="password" placeholder="Password"><br>
		<button type="submit">Submit</button>
	</form>
</body>
</html>