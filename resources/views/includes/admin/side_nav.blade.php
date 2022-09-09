<div class="pcoded-main-container">
              <div class="pcoded-wrapper">
                   
                    <nav class="pcoded-navbar">
                      <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                      <div class="pcoded-inner-navbar main-menu">
                          <div class="">
                              <div class="main-menu-header">
                                  <img class="img-80 img-radius" src="{{URL::asset('admin/images/avatar-4.jpg')}}" alt="User-Profile-Image">
                                  <div class="user-details">
                                      <span id="more-details">{{ Auth::user()->name }}<i class="fa fa-caret-down"></i></span>
                                  </div>
                              </div>
        
                              <div class="main-menu-content">
                                  <ul>
                                      <li class="more-details">
                                          <a href="user-profile.html"><i class="ti-user"></i>View Profile</a>
                                          <a href="#!"><i class="ti-settings"></i>Settings</a>
                                          <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                          <i class="ti-layout-sidebar-left"></i> {{ __('Logout') }}
                                      </a>
                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                          <div class="p-15 p-b-0">
                              <form class="form-material">
                                  <div class="form-group form-primary">
                                      <input type="text" name="footer-email" class="form-control" required="">
                                      <span class="form-bar"></span>
                                      <label class="float-label"><i class="fa fa-search m-r-10"></i>Search Friend</label>
                                  </div>
                              </form>
                          </div>
                          <div class="pcoded-navigation-label" data-i18n="nav.category.navigation">Home</div>
                          <ul class="pcoded-item pcoded-left-item">
                              <li class="">
                                  <a href="/home" class="waves-effect waves-dark">
                                      <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                      <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                              </li>
                              
                          </ul>
                          <div class="pcoded-navigation-label" data-i18n="nav.category.forms">Booking &amp; List</div>
                          <ul class="pcoded-item pcoded-left-item">
                              <li>
                                  <a href="/user/booking_admin" class="waves-effect waves-dark">
                                      <span class="pcoded-micon"><i class="ti-layers"></i><b>FC</b></span>
                                      <span class="pcoded-mtext" data-i18n="nav.form-components.main">Bookings</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                              </li>
                              <li>
                                  <a href="/user/category" class="waves-effect waves-dark">
                                      <span class="pcoded-micon"><i class="ti-menu-alt"></i><b>FC</b></span>
                                      <span class="pcoded-mtext" data-i18n="nav.form-components.main">Category</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                              </li>
                              <li>
                                  <a href="/user/vendor" class="waves-effect waves-dark">
                                      <span class="pcoded-micon"><i class="ti-user"></i><b>FC</b></span>
                                      <span class="pcoded-mtext" data-i18n="nav.form-components.main">Vendor</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                              </li>
                              
        
                          </ul>
        
                          <div class="pcoded-navigation-label" data-i18n="nav.category.navigation">Other</div>
                          <ul class="pcoded-item pcoded-left-item">
                              <li class="">
                                  <a href="#" class="waves-effect waves-dark">
                                      <span class="pcoded-micon"><i class="ti-settings"></i><b>M</b></span>
                                      <span class="pcoded-mtext" data-i18n="nav.dash.main">Settings</span>
                                      <span class="pcoded-mcaret"></span>
                                  </a>
                              </li>
                              
                          </ul>
        
                          
                      </div>
                  </nav>