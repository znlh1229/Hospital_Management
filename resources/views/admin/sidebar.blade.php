     <nav class="sidebar sidebar-offcanvas" id="sidebar">
         <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
             <a class="sidebar-brand brand-logo " href="index.html" style="color: #00D9A5"> Admin Dashboard</a>
             <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg"
                     alt="logo" /></a>
         </div>
         <ul class="nav">


             <li class="nav-item nav-category">
                 <span class="nav-link">Navigation</span>
             </li>
             <li class="nav-item menu-items">
                 <a class="nav-link" href="{{ url('/') }}">
                     <span class="menu-icon">
                         <i class="mdi mdi-speedometer"></i>
                     </span>
                     <span class="menu-title">Dashboard</span>
                 </a>
             </li>

             <li class="nav-item menu-items">
                 <a class="nav-link" href="{{ url('add_doctors') }}">
                     <span class="menu-icon">
                         <i class="mdi mdi-playlist-play"></i>
                     </span>
                     <span class="menu-title">Add Doctors</span>
                 </a>
             </li>
             <li class="nav-item menu-items">
                 <a class="nav-link" href="{{ url('check_appointment') }}">
                     <span class="menu-icon">
                         <i class="mdi mdi-table-large"></i>
                     </span>
                     <span class="menu-title"> Appointments</span>
                 </a>
             </li>
             <li class="nav-item menu-items">
                 <a class="nav-link" href="{{ url('doctor_list') }}">
                     <span class="menu-icon">
                         <i class="mdi mdi-chart-bar"></i>
                     </span>
                     <span class="menu-title">Doctor List</span>
                 </a>
             </li>
             {{-- <li class="nav-item menu-items">
                 <a class="nav-link" href="pages/charts/chartjs.html">
                     <span class="menu-icon">
                         <i class="mdi mdi-chart-bar"></i>
                     </span>
                     <span class="menu-title">Charts</span>
                 </a>
             </li>
             <li class="nav-item menu-items">
                 <a class="nav-link" href="pages/icons/mdi.html">
                     <span class="menu-icon">
                         <i class="mdi mdi-contacts"></i>
                     </span>
                     <span class="menu-title">Icons</span>
                 </a>
             </li>
             <li class="nav-item menu-items">
                 <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                     <span class="menu-icon">
                         <i class="mdi mdi-security"></i>
                     </span>
                     <span class="menu-title">User Pages</span>
                     <i class="menu-arrow"></i>
                 </a>
                 <div class="collapse" id="auth">
                     <ul class="nav flex-column sub-menu">
                         <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Blank
                                 Page </a></li>
                         <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a>
                         </li>
                         <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a>
                         </li>
                         <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a>
                         </li>
                         <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register
                             </a></li>
                     </ul>
                 </div>
             </li> --}}

         </ul>
     </nav>
