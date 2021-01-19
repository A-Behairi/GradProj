<nav class="navbar navbar-default banner">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Uofk Quiz App</a>
      </div>
  
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

        @if(Auth::user())
        
          <ul class="nav navbar-nav navbar-right navbar-nav-primary">
            <li><a href="{{ route('tests.index') }}">Home</a></li>
            <li><a href="{{ route('results.index') }}">My Results</a></li>
            <li><a href="#logout" onclick="$('#logout').submit();">Logout</a></li>
          </ul>

        @endif
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
  {!! Form::open(['route' => 'auth.logout', 'style' => 'display:none;', 'id' => 'logout']) !!}
<button type="submit">@lang('quickadmin.logout')</button>
{!! Form::close() !!}