<html>
<body>


<form method="POST" action="{{URL::to('/make-url')}}">
Put URL: <input name="url" />
<button type="submit"> Make URL </button>
@if ($errors->first('url'))
<p>{{{$errors->first('url')}}} </p>
@endif
</form>
@if (Auth::check())
<a href="{{URL::to('auth/logout')}}">Logout</a>
@endif
</body>

</html>
