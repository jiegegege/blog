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
                        <th>普通权限</th>
                        <th>最高权限</th>
                    </tr>
                </thead>
                    @foreach($users as $user)
                    <tbody>
                        <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>
                                <div class="btn-group" role="group">

                                      <a href="{{ route('usermsg', $user) }}"><button type="button" class="btn btn-default btn-success">查看</button></a>

                                       @if(auth()->user()->is_admin)
                                      <a href=" {{ route('edit', $user) }}"><button type="button" class="btn btn-default btn-warning">修改</button></a>
                                        @else
                                             <a href=" {{ route('edit', $user) }}"><button type="button" class="btn btn-default btn-warning" data-toggle="tooltip" data-placement="right" title="permission denied" disabled="disabled">修改</button></a>
                                        @endif
                                </div>
                            </td>
                            <td>

                              {{--   <button type="button" class="btn btn-default" data-toggle="tooltip" data-placement="top" title="Tooltip on top">Tooltip on top</button> --}}

                                @if(auth()->user()->is_admin)
                                   <form action="{{ route('user.destroy', $user) }}" method="post">
                                        {{ csrf_field()}}
                                        {{ method_field('DELETE') }}

                                        <button type="submit" class="btn btn-default btn-danger">删除</button>

                                    </form>
                                @else
                                 <form action="{{ route('user.destroy', $user) }}" method="post">
                                        {{ csrf_field()}}
                                        {{ method_field('DELETE') }}

                                        <button type="submit" class="btn btn-default btn-danger" data-toggle="tooltip" data-placement="right" title="permission denied" disabled="disabled">删除</button>
                                    </form>
                                @endif

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
