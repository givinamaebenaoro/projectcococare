<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index.html">
              <i class="mdi mdi-home menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.html">
              <i class="mdi mdi-sale menu-icon"></i>
              <span class="menu-title">Sales</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="mdi mdi-view-list menu-icon"></i>
              <span class="menu-title">Category</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="/admin/category/create">Add Category</a></li>
                <li class="nav-item"> <a class="nav-link" href="/admin/category">View Category</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#products" aria-expanded="false" aria-controls="products">
              <i class="mdi mdi-plus-circle menu-icon"></i>
              <span class="menu-title">Products</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="products">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="/admin/products/create">Add Products</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ url('admin/products')}}">View Products</a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="/admin/brands">
              <i class="mdi mdi-view-module menu-icon"></i>
              <span class="menu-title">Brands</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/admin/colors">
              <i class="mdi mdi-view-module menu-icon"></i>
              <span class="menu-title">Colors</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="mdi mdi-account menu-icon"></i>
              <span class="menu-title">Users</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/login-2.html"> Login 2 </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/register-2.html"> Register 2 </a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/samples/lock-screen.html"> Lockscreen </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="documentation/documentation.html">
              <i class="mdi mdi-view-array menu-icon"></i>
              <span class="menu-title">Home Slider</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="documentation/documentation.html">
              <i class="mdi mdi-brightness-5 menu-icon"></i>
              <span class="menu-title">Site Settings</span>
            </a>
          </li>
        </ul>
      </nav>
