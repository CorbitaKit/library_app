
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">


    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">

        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>



      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <li class="nav-item">
                <router-link to="/dashboard" :class="[currentPage.includes('dashboard') ? 'active' : '', 'nav-link']">
                  <i class="fas fa-list nav-icon"></i>
                  <p>Dashboard</p>
                </router-link>
              </li>
          </li>

          <li class="nav-item">
            <router-link to="/library" :class="[currentPage.includes('library') ? 'active' : '', 'nav-link']">
                <i class="far fa-building nav-icon"></i>
                <p>Library  List</p>
            </router-link>
          </li>
          <li class="nav-item">
            <a href="#" :class="[currentPage.includes('user') ? 'active' : '', 'nav-link']">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Users
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <router-link to="/user-list" :class="[currentPage.includes('user-list') ? 'active' : '', 'nav-link']">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User List</p>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link to="/add-user" :class="[currentPage.includes('add-user') ? 'active' : '', 'nav-link']">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add  New User</p>
                </router-link>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" :class="[currentPage.includes('book') ? 'active' : '', 'nav-link']">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Books
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <router-link to="/book-list" :class="[currentPage.includes('book-list') ? 'active' : '', 'nav-link']">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Book List</p>
                </router-link>
              </li>
              <li class="nav-item">
                <router-link to="/add-book" :class="[currentPage.includes('add-book') ? 'active' : '', 'nav-link']">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add New Book</p>
                </router-link>
              </li>


            </ul>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
