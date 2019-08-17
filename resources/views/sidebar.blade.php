<aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{ url('/home') }}" class="brand-link">
          <img src="./img/bd.png" alt="" class="brand-image img-circle elevation-3"
               style="opacity: .8">
          <span class="brand-text font-weight-light">YourServe</span>
        </a>
    
        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img src="./img/profile.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
              <a href="#" class="d-block">{{auth::user()->name}}</a>
            </div>
          </div>
    
          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class
                   with font-awesome or any other icon font library -->
              <li class="nav-item">
                  <router-link to="/dashbord" class="nav-link">
                  <i class="nav-icon fas fa-tachometer-alt text-yellow"></i>
                  <p>
                      Dashboard
                  </p>
                  </router-link>
              </li>
              <li class="nav-item has-treeview menu-close">
                <a href="#" class="nav-link">
                        <i class="fas fa-cogs text-orange"></i>
                  <p>
                    Managment
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                      <router-link to="/users" class="nav-link">
                            <i class="fas fa-users text-green"></i>
                      <p>Users list</p>
                      </router-link>
                  </li>
                  <li class="nav-item">
                    <router-link to="/services" class="nav-link">
                            <i class="fas fa-poll-h text-green"></i>
                      <p>Services</p>
                    </router-link>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                  <router-link to="/profile" class="nav-link">
                      <i class="fas fa-id-card text-cyan"></i>
                  <p>
                      Profile
                  </p>
                  </router-link>
              </li>
              <li class="nav-item">
                  <a href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();" class="nav-link">
                      <i class="fas fa-sign-out-alt text-red"></i>
                  <p>
                      LogOut
                  </p>
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
              </li>
            </ul>
          </nav>
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>