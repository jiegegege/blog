<nav class="navbar navbar-default navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">
          <img src="{{ asset('/img/superman.PNG') }}"  width="55" height="40" alt="">
      </a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example">
      <ul class="nav navbar-nav">
            <li><a href="{{ route('home') }}" class="brand-bar glyphicon glyphicon-home">ISMTA实验室</a></li>
      </ul>
    </div>
  </div>
</nav>
