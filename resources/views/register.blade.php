<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
<form action="#" method="post">
    @csrf
    Pick Username: <input name="userName" type="text"><br>
    Email: <input name="email" type="text"><br>
    Password: <input name="password" type="password"><br>
    <button type="submit">Register</button>
</form>
</body>
</html>
