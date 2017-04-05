
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><b>Computer Poetry 101<b></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav"></ul>

      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><b>Resources</b><span class="caret"></span></a>
          <ul class="dropdown-menu" style="text-align: center">
            <li><a style="font-weight: bold" href="{{route('frontend')}}">Front End</a></li>
            <li><a style="font-weight: bold" href="{{route('backend')}}">Back End</a></li>
            <li><a style="font-weight: bold" href="{{route('database')}}">Databases</a></li>
          </ul>
        </li>
        <li><a href="{{route('tools.tools')}}"><b>Tools</b></a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>