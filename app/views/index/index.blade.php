<html>
<body>


<form method="POST" action="{{URL::to('/make-url')}}">
Put URL: <input name="url" />
<button type="submit"> Make URL </button>
@if ($errors->first('url'))
<p>{{{$errors->first('url')}}} </p>
@endif
</body>

</html>
