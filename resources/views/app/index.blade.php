@extends('layouts.default')
@section('content')
 <div class="panel panel-default panel-info">
    <div class="panel-heading">用户列表</div>
        <div class="panel-body">
            <table class="table table-inverse">
                <thead>
                    <tr>
                        <th width="150">编号</th>
                        <th>名称</th>
                        <th>操作</th>
                    </tr>
                </thead>
                    @foreach($users as $user)
                    <tbody>
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>
                                <div class="btn-group" role="group">
                                      <a href="home"><button type="button" class="btn btn-default btn-info">查看</button></a>
                                      <button type="button" class="btn btn-default btn-success">修改</button>
                                      <button type="button" class="btn btn-default btn-danger">删除</button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
            </table>
    </div>

        <div class="panel-footer text-center">
        {{ $users->links()}}
        </div>
</div>


@stop
