<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		Hello {{$username}},<br><br>

		It looks like you requested a new password. You'll need to use the following link to activate it. If you didn't request a new password, please ignore this email.<br><br>

		New password: {{$password}}<br><br>

		---<br>
		{{$link}}<br>
		---
	</body>
</html>


