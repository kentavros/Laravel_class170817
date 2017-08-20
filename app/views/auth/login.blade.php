@extends('../index/layout')


@section('auth')

<form class="form-horizontal" method="POST" action="{{URL::to('auth/login')}}">
 <input class="btn btn-default" placeholder="Input Email" name="email" />
 <input class="btn btn-default" type="password" placeholder="Input Password" name="password" />
<button class="btn btn-primary btn-md" type="submit">Login</button>
</form>

<div class="button" style="margin-top: 10px; margin-left: 385px;">
<p> or <a class="btn btn-success btn-xs" href="{{URL::to('auth/register')}}">Register</a></p>
</div>

@if ($errors->all())
        <div class=" alert-danger">
                @foreach($errors->all() as $msg)
                        <p>{{$msg}}</p>
                @endforeach
        </div>
@endif

@stop

