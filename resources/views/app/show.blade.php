@extends('layouts.default')
@section('content')
<div class="col-md-offset-2 col-md-8">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h5>{{$user->name}}&nbsp的个人资料</h5>
    </div>
    <div class="panel-body">
      <form method="POST" action="#">
        {{ csrf_field() }}
           @include('layouts._errors')
          <div class="form-group">
            <label for="name">出生籍贯：</label>
            <input type="text" name="name" class="form-control">
          </div>

          <div class="form-group">
            <label for="email">出生日期：</label>
            <input type="text" name="email" class="form-control">
          </div>

          <div class="form-group">
            <label for="password">性别：</label>
            <input type="password" name="password" class="form-control" value="{{ old('password') }}">
          </div>

          <div class="form-group">
            <label for="password_confirmation">爱好：</label>
            <input type="password" name="password_confirmation" class="form-control" value="{{ old('password_confirmation') }}">
          </div>
            <div class="text-center">
                    <button type="submit" class="btn btn-primary" style="margin-right: 30px" disabled="disabled">确认</button>
                    <a href="{{ route('home')}}"><button type="button" class="btn btn-primary">取消</button></a>
            </div>
      </form>
    </div>
  </div>
</div>
@stop
