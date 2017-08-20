@extends('../index/layout')

@section('reg')
<form class="form-horizontal" method="POST" action="{{URL::to('auth/register')}}">
    <div class="control-group">
        <label class="control-label" for="inputEmail">Name:</label>
        <div class="controls">
            <input name="name"  class="btn btn-default" placeholder="input email" />
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="inputEmail">Email:</label>
        <div class="controls">
     <input name="email"  class="btn btn-default" placeholder="input name" />
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="inputEmail">Password:</label>
        <div class="controls">
            <input type="password" name="password"  class="btn btn-default" placeholder="input password" />
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="inputEmail">Repeat password:</label>
        <div class="controls">
        <input type="password" name="password2"  class="btn btn-default" placeholder="repeat password" />
        </div>
    </div>
    <div class="control-group">
        <div class="controls">
            <br>
            <button class="btn btn-info" type="submit">Register user</button>
        </div>
    </div>
</form>




@if ($errors->all())
    <div class=" alert-danger">
    @foreach($errors->all() as $msg)
        <p>{{$msg}}</p>
@endforeach
    </div>
@endif
    @stop