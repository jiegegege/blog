@extends('layouts.default')
@section('content')

        <table class="table table-inverse table-hover" id="table-hover">
            <thead>
                <tr  class="success">
                    <th>{{$user->name}}&nbsp的资料</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                 <tr>
                    <td>编号</td>
                    <td>{{ $user->id}}</td>
                </tr>

                <tr>
                    <td>管理员</td>
                    <td>
                        @if($user->is_admin)
                            是
                        @else
                            否
                        @endif
                    </td>
                </tr>
                <tr>
                    <td>邮箱</td>
                    <td>{{ $user->email}}</td>
                </tr>

                 <tr>
                    <td>注册日期</td>
                    <td>{{ $user->created_at}}</td>
                </tr>

                 <tr>
                    <td>更新日期</td>
                    <td>{{ $user->updated_at}}</td>
                </tr>
            </tbody>
            <footer>
                <tr class="info">
                    <td>当前时间</td>
                    <td>{{date('Y-m-d H:i:s',time())}}</td>
                </tr>
            </footer>
        </table>

@stop
