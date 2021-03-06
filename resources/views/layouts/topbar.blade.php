 <header class="header">
        <nav class="navbar">
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <div class="navbar-header">
                  <div class="brand-text d-none d-md-inline-block"><strong class="text-primary">ระบบจัดการข้อมูลลูกค้า</strong></div></a></div>
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                @if(!Auth::check())
                <li class="nav-item"><a href="login" class="nav-link logout">Login<i class="fa fa-sign-out"></i></a></li>
                @endif
                @if(Auth::check())
                <li class="nav-item"><a href="logout" class="nav-link logout" onclick="var result = confirm('Are you sure you wish to logout?');">Logout<i class="fa fa-sign-out"></i></a></li>
                @endif
              </ul>
            </div>
          </div>
        </nav>
      </header>
