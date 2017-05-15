 <!-- sidebar menu -->
  <div class="profile clearfix">
              <div class="profile_pic">
                <img src={{asset('images/user.png')}} alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>John Doe</h2>
              </div>
            </div>
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li class="" id="nav-dashboard"><a href={{route('page.dashboard')}}>Dashboard</a></li>
                      <li><a href="/">Dashboard2</a></li>
                      <li><a href="/">Dashboard3</a></li>
                    </ul>
                  </li>
                  <li class="" id="nav-list-users"><a href={{route('page.list-users')}}><i class="fa fa-user"></i> User</a>
                  </li>
                  </li>
                  <li class="" id="nav-list-logs"><a href={{route('page.list-logs')}}><i class="fa fa-user"></i> Logs</a>
                  </li>
                </ul>
              </div>
            </div>