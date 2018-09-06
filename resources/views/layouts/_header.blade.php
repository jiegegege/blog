<nav class="navbar navbar-default navbar-inverse navbar-fixed-top">
  <div class="container">

    <div class="navbar-header">

      <a class="navbar-brand" href="#">博客</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
            <li><a href="#" class="active glyphicon glyphicon-home">网站首页</a></li>
            <li><a href="#" class="glyphicon glyphicon-earphone">关于我们</a></li>
            <li><a href="#">加盟合作</a></li>
            <li><a href="#">公益活动</a></li>
            <li><a href="#">购物商城</a></li>
      </ul>

        @if(Auth::check())

            <ul class="nav navbar-nav navbar-right">
                {{-- <li type="button" class="btn btn-xs btn-danger" id="button"><a href="{{ route('logout') }}">退出</a></li> --}}

                <li class="button-btn">
                        <a href="{{ route('logout') }}">退出</a>
                </li>

                <li><a href="#">帮助</a></li>
            </ul>

          {{--   dropdonwn-menu --}}
            <ul class="nav navbar-nav navbar-right">

                <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        hi,~{{ Auth::user()->name }} <b class="caret"></b>
                      </a>
                      <ul class="dropdown-menu">
                        <li><a href="{{ route('user.edit', auth()->user()) }}">修改资料</a></li>
                         <li class="divider"></li>
                        <li><a href="{{ route('user.show', auth()->user()) }}">个人中心</a></li>
                        <li><a href="{{ route('user.index') }}">用户列表</a></li>
                      </ul>
            </li>

        </ul>

        @else
           <ul class="nav navbar-nav navbar-right">
            <li><a href="{{ route('login') }}">登陆</a></li>
            <li><a href="{{ route('user.create') }}">注册</a></li>
            </ul>
        @endif

    </div>
  </div>
</nav>
