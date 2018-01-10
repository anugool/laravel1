   <!-- Side Navbar -->
    <nav class="side-navbar">
      <div class="side-navbar-wrapper">
        <div class="sidenav-header d-flex align-items-center justify-content-center">
          <div class="sidenav-header-inner text-center">
            @if(Auth::check())
            <h2 class="h5 text-uppercase">{{ Auth::user()->name }}</h2>
            @endif
            @if(!Auth::check())
            <h2 class="h5 text-uppercase">Kbet</h2>
            @endif
          </div>
        </div>
        <div class="main-menu">
          <ul id="side-main-menu" class="side-menu list-unstyled">

            <li> <a href="/"><i class="icon-form"></i><span>แสดงข้อมลลูกค้า</span></a></li>
            <li><a href="customer"> <i class="icon-home"></i><span>เพิ่มข้อมูลลูกค้า</span></a></li>

          </ul>
        </div>
        <div class="admin-menu">
          <!-- <ul id="side-admin-menu" class="side-menu list-unstyled">
            <li> <a href="#pages-nav-list" data-toggle="collapse" aria-expanded="false"><i class="icon-interface-windows"></i><span>Dropdown</span>
                <div class="arrow pull-right"><i class="fa fa-angle-down"></i></div></a>
              <ul id="pages-nav-list" class="collapse list-unstyled">
                <li> <a href="#">Page 1</a></li>
                <li> <a href="#">Page 2</a></li>
                <li> <a href="#">Page 3</a></li>
                <li> <a href="#">Page 4</a></li>
              </ul>
            </li>
            <li> <a href="#"> <i class="icon-screen"> </i><span>Demo</span></a></li>
            <li> <a href="#"> <i class="icon-flask"> </i><span>Demo</span>
                <div class="badge badge-info">Special</div></a></li>
            <li> <a href=""> <i class="icon-flask"> </i><span>Demo</span></a></li>
            <li> <a href=""> <i class="icon-picture"> </i><span>Demo</span></a></li>
          </ul> -->
        </div>
      </div>
    </nav>
