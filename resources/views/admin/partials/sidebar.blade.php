   <div class="nk-sidebar nk-sidebar-fixed is-light " data-content="sidebarMenu">
       <div class="nk-sidebar-element nk-sidebar-head">
           <div class="nk-sidebar-brand">
               <a href="html/index.html" class="logo-link nk-sidebar-logo">
                   <img class="logo-light logo-img" src="{{ asset('admin_assets/images/logo.png') }}" srcset="./images/logo2x.png 2x" alt="logo">
                   <img class="logo-dark logo-img" src="{{ asset('admin_assets/images/logo-dark.png') }}" srcset="./images/logo-dark2x.png 2x" alt="logo-dark">
                   <img class="logo-small logo-img logo-img-small" src="{{ asset('admin_assets/images/logo-small.png') }}" srcset="./images/logo-small2x.png 2x" alt="logo-small">
               </a>
           </div>
           <div class="nk-menu-trigger mr-n2">
               <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
               <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
           </div>
       </div><!-- .nk-sidebar-element -->
       <div class="nk-sidebar-element">
           <div class="nk-sidebar-content">
               <div class="nk-sidebar-menu" data-simplebar>
                   <ul class="nk-menu">
                       <li class="nk-menu-item">
                           <a href="dashboard" class="nk-menu-link">
                               <span class="nk-menu-icon"><em class="icon ni ni-dashboard-fill"></em></span>
                               <span class="nk-menu-text">Dashboard</span>
                           </a>
                       </li><!-- .nk-menu-item -->
                       <li class="nk-menu-item">
                           <a href="{{ route('admin.blogs') }}" class="nk-menu-link">
                               <span class="nk-menu-icon"><em class="icon ni ni-file-docs"></em></span>
                               <span class="nk-menu-text">Blogs</span>
                           </a>
                       </li><!-- .nk-menu-item -->
                       <li class="nk-menu-item">
                           <a href="{{ route('admin.categories') }}" class="nk-menu-link">
                               <span class="nk-menu-icon"><em class="icon ni ni-tag-fill"></em></span>
                               <span class="nk-menu-text">Categories</span>
                           </a>
                       </li><!-- .nk-menu-item -->
                       <li class="nk-menu-item">
                           <a href="#" class="nk-menu-link">
                               <span class="nk-menu-icon"><em class="icon ni ni-server-fill"></em></span>
                               <span class="nk-menu-text">Integration</span>
                           </a>
                       </li><!-- .nk-menu-item -->
                       <li class="nk-menu-heading">
                           <h6 class="overline-title text-primary-alt">Return to</h6>
                       </li><!-- .nk-menu-item -->
                       <li class="nk-menu-item">
                           <a href="#" class="nk-menu-link">
                               <span class="nk-menu-icon"><em class="icon ni ni-dashlite-alt"></em></span>
                               <span class="nk-menu-text">Main Dashboard</span>
                           </a>
                       </li><!-- .nk-menu-item -->
                       <li class="nk-menu-item">
                           <a href="#" class="nk-menu-link">
                               <span class="nk-menu-icon"><em class="icon ni ni-layers-fill"></em></span>
                               <span class="nk-menu-text">All Components</span>
                           </a>
                       </li><!-- .nk-menu-item -->
                   </ul><!-- .nk-menu -->
               </div><!-- .nk-sidebar-menu -->
           </div><!-- .nk-sidebar-content -->
       </div><!-- .nk-sidebar-element -->
   </div>