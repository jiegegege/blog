<nav class="navbar navbar-default navbar-inverse navbar-fixed-top">
  <div class="container">

    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">
          <img src="{{ asset('/img/superman.PNG') }}"  width="55" height="40" alt="">
      </a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
            <li><a href="{{ route('home') }}">网站首页</a></li>
            <li><a href="{{ route('about') }}">关于我们</a></li>
            <li><a href="{{ route('cooperation') }}">加盟合作</a></li>
            <li><a href="{{ route('activity') }}">公益活动</a></li>
            <li><a href="{{ route('store') }}">购物商城</a></li>
      </ul>

        @if(Auth::check())
             {{--   dropdonwn-menu --}}
            <ul class="nav navbar-nav navbar-right  hidden-xs">

                <li class="dropdown" id="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="toggle">
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

            <ul class="nav navbar-nav navbar-right  hidden-xs hidden-sm">
                {{-- <li type="button" class="btn btn-xs btn-danger" id="button"><a href="{{ route('logout') }}">退出</a></li> --}}

                <li class="button-btn">
                        <div class="exit"><a href="{{ route('logout') }}">退出</a></div>
                </li>

                <li><a href="#">帮助</a></li>
            </ul>



        @else
           <ul class="nav navbar-nav navbar-right  hidden-xs hidden-sm">
            <li><a href="{{ route('login') }}">登陆</a></li>
            <li><a href="{{ route('user.create') }}">注册</a></li>
            </ul>
        @endif

    </div>
  </div>
</nav>
