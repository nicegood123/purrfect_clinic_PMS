  {{-- <aside class="main-sidebar sidebar-dark-primary elevation-4"> --}}
  <aside class="main-sidebar sidebar-dark-parimary elevation-4">

      {{-- Brand Logo --}}
      <a href="/" class="brand-link">
          <img src="{{ asset('assets/dist/img/avatar5.png') }}" alt="School Logo"
              class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">Admin | <b class="text-indigo">LTE</b></span>
      </a>

      {{-- Sidebar --}}
      <div class="sidebar">

          {{-- Sidebar Menu --}}
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                  data-accordion="false">
                  <li class="nav-item">
                      <a href="/" class="nav-link">
                          <i class="fas fa-home nav-icon"></i>
                          <p>Home</p>
                      </a>
                  </li>

                  <li class="nav-item">
                      <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-folder"></i>
                          <p>
                              Action Plans
                              <i class="right fas fa-angle-left"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Create New</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Action Plans List</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="#" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Pendings</p>
                                  <span class="badge badge-dark right">12</span>
                              </a>
                          </li>
                      </ul>
                  </li>

                  <li class="nav-item">
                      <a href="" class="nav-link">
                          <i class="fas fa-archive nav-icon"></i>
                          <p>Feedback Sources</p>
                      </a>
                  </li>

                  <li class="nav-item">
                      <a href="/" class="nav-link">
                          <i class="fas fa-chart-bar nav-icon"></i>
                          <p>Reports</p>
                      </a>
                  </li>


              </ul>
          </nav>
      </div>
  </aside>
