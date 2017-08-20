@extends('../index/layout')

@section('url')
@if(Auth::check())
    <p class="alert-info text-center" style="margin-bottom: 50px; font-size: 30px;">
        Hello - {{ Auth::user()->name }}!
    </p>
@endif
<form class="form-horizontal" method="POST" action="{{URL::to('/make-url')}}">
Put URL->  <input class="btn btn-default" name="url" />
<button class="btn btn-primary btn-md" type="submit"> Make URL </button>

</form>
@if (Auth::check())
    <div style="margin-top: 10px; margin-left: 310px">
<a class="btn btn-success btn-xs" href="{{URL::to('auth/logout')}}">Logout</a>
    </div>
@endif

@if ($errors->first('url'))
    <div class=" alert-danger">
        <p>{{$errors->first('url')}} </p>
    </div>
@endif
    @stop



