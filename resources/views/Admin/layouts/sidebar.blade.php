<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
 

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
     
      <div class="info">
        <a href="#" class="d-block">Admin Dashboradr</a>
      </div>
    </div>

    <!-- SidebarSearch Form -->
   
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        
      
    
  
   
    
        
        <li class="nav-item">
          <a href="#" class="nav-link">
          
            <p>
              User
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('users.index') }}">List User</a>
          </li>
          
          
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('users.create') }}" class="nav-link">
                  <p>Add User</p>
              </a>
          </li>
          
            <li class="nav-item">
              <a href="pages/examples/e-commerce.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>E-commerce</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/examples/projects.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Projects</p>
              </a>
            </li>
          
       
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>