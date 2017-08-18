<html>
<body>
<form method="POST" action="{{URL::to('auth/login')}}">
Email: <input name="email" />
Pass: <input type="password" name="password" />
<button type="submit">Login</button>
</form>
<p> or <a href="{{URL::to('auth/register')}}">Register</a></p>
</body>
</html>
