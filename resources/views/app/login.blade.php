@extends('layouts.default')

@section('content')

<div class="col-md-offset-2 col-md-8">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h5>用户登录</h5>
    </div>
    <div class="panel-body">
      <form method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}
           @include('layouts._errors')
          <div class="form-group">
            <label for="email">邮箱：</label>
            <input type="text" name="email" class="form-control" value="{{ old('email') }}">
          </div>

          <div class="form-group">
            <label for="password">密码：</label>
            <input type="password" name="password" class="form-control" value="{{ old('password') }}">
          </div>

          <button type="submit" class="btn btn-primary">登陆</button>
      </form>
    </div>
  </div>
</div>
@stop
