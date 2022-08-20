  <aside class="main-sidebar sidebar-light-teal elevation-4">


      {{-- Brand Logo --}}
      <a href="/" class="brand-link">
          <img src="{{ asset('assets/dist/img/CompanyLogo.png') }}" alt="Purrfect Clinic Logo"
              class="brand-image img-circle">
          <span class="brand-text font-weight-light">Purrfect Clinic | <b class="text-teal">PMS</b></span>
      </a>

      {{-- Sidebar --}}
      <div class="sidebar">

          {{-- Sidebar Menu --}}
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                  data-accordion="false">
                  <li class="nav-item">
                      <a href="/" class="nav-link {{ request()->is('/') ? 'active' : '' }}">
                          <i class="fas fa-home nav-icon"></i>
                          <p>Home</p>
                      </a>
                  </li>

                  <li class="nav-item">
                      <a href="{{ route('pets.index') }}" class="nav-link {{ request()->is('pets') ? 'active' : '' }}">
                          <i class="fas fa-dog nav-icon"></i>
                          <p>Pets</p>
                      </a>
                  </li>

                  <li class="nav-item">
                      <a href="{{ route('owners.index') }}"
                          class="nav-link {{ request()->is('owners*') ? 'active' : '' }}">
                          <i class="fas fa-user-friends nav-icon"></i>
                          <p>Owners</p>
                      </a>
                  </li>

                  <li class="nav-item">
                      <a href="#" class="nav-link">
                          <i class="fas fa-th-large nav-icon"></i>
                          <p>Types</p>
                      </a>
                  </li>


              </ul>
          </nav>
      </div>
  </aside>
