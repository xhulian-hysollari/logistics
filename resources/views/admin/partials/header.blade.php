<!-- Fixed navbar -->
<div class="navbar navbar-default navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="#" class="navbar-brand hidden-xs navbar-brand-primary">Logistics</a>
    </div>
    <div class="navbar-collapse collapse" id="collapse">
      <ul class="nav navbar-nav navbar-right">
        <!-- user -->
        <li class="dropdown user">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="{{asset('storage/'. Sentinel::getUser()->company_logo)}}" alt=""
                   class="img-circle"/> <span
                    class="caret"></span>
          </a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="{{route('dashboard.profile')}}"><i class="fa fa-user"></i>Profile</a></li>
            <li><a href="{{route('logout')}}"><i class="fa fa-sign-out"></i>Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</div>