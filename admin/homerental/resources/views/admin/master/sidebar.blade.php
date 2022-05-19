<div class="iq-sidebar">
    <div class="iq-sidebar-logo d-flex justify-content-between">
       <a href="{{ url('/admin') }}">
       <div class="iq-light-logo">
          <div class="iq-light-logo">
             <img src="{{ url('assets/revamp') }}/images/dashboard/side-logo.png" class="img-fluid" alt="">
           </div>
             <div class="iq-dark-logo">
                <img src="{{ url('assets/revamp') }}/images/dashboard/side-logo.png" class="img-fluid" alt="">
             </div>
       </div>
       <div class="iq-dark-logo">
          <img src="{{ url('assets/revamp') }}/images/dashboard/side-logo.png" class="img-fluid" alt="">
       </div>
       {{-- <span>Cottontree</span> --}}
       </a>
       <div class="iq-menu-bt-sidebar">
          <div class="iq-menu-bt align-self-center">
             <div class="wrapper-menu">
                <div class="main-circle"><i class="ri-arrow-left-s-line"></i></div>
                <div class="hover-circle"><i class="ri-arrow-right-s-line"></i></div>
             </div>
          </div>
       </div>
    </div>
    <div id="sidebar-scrollbar">
       <nav class="iq-sidebar-menu">
          <ul id="iq-sidebar-toggle" class="iq-menu">
             <li class="iq-menu-title"><i class="ri-subtract-line"></i><span>Dashboard</span></li>
             <li class="active">
                <a href="{{ url('/admin') }}" class="iq-waves-effect"><i class="ri-home-3-line"></i><span>Dashboard</span></a>
             </li>
            
             
             
             {{-- <li class="">
                <a href="#menu-design" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-menu-3-line"></i><span>Menu</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                <ul id="menu-design" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                   <li><a href="horizontal-menu.html"><i class="ri-git-commit-line"></i>Horizontal menu</a></li>
                   <li><a href="horizontal-top-menu.html"><i class="ri-text-spacing"></i>Horizontal Top Menu</a></li>
                   <li><a href="two-sidebar.html"><i class="ri-indent-decrease"></i>Two Sidebar</a></li>
                   <li><a href="vertical-top-menu.html"><i class="ri-line-height"></i>Vertical block menu</a></li>
                </ul>
             </li> --}}



             {{-- <li class="iq-menu-title"><i class="ri-subtract-line"></i><span>User</span></li>
             <li>
                <a href="#userinfo" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-user-line"></i><span>User</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                <ul id="userinfo" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                   <li><a href="{{ url('/employee/index') }}"><i class="ri-file-list-line"></i>User List</a></li>
                </ul>
             </li> --}}



             <li class="iq-menu-title"><i class="ri-subtract-line"></i><span>Category</span></li>
             <li>
                <a href="#categoryinfo" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-shopping-cart-line"></i><span>Category</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                <ul id="categoryinfo" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                   <li><a href="{{ url('/addcategory') }}"><i class="ri-profile-line"></i>Add</a></li>
                   <li><a href="{{ url('/viewcategory') }}"><i class="ri-file-list-line"></i>View</a></li>
                   
                </ul>
             </li>

             {{-- <li>
                <a href="#subcategoryinfo" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-shopping-cart-line"></i><span>SubCategory</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                <ul id="subcategoryinfo" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                   <li><a href="{{ url('/addsubcategory') }}"><i class="ri-profile-line"></i>Add</a></li>
                   <li><a href="{{ url('/viewsubcategory') }}"><i class="ri-file-list-line"></i>View</a></li>
                   
                </ul>
             </li> --}}

             {{-- <li>
                <a href="#innercategoryinfo" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-shopping-cart-line"></i><span>InnerCategory</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                <ul id="innercategoryinfo" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                   <li><a href="{{ url('/addchildcategory') }}"><i class="ri-profile-line"></i>Add</a></li>
                   <li><a href="{{ url('/viewchildcategory') }}"><i class="ri-file-list-line"></i>View</a></li>
                   
                </ul>
             </li> --}}



             <li class="iq-menu-title"><i class="ri-shopping-cart-line"></i></i><span>Products</span></li>
             
             <li>
                <a href="#ecommerce" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-shopping-cart-line"></i><span>Products</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                <ul id="ecommerce" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                   <li><a href="{{ url('/addproduct') }}"><i class="ri-file-list-line"></i>Add</a></li>
                   <li><a href="{{ url('/viewproduct') }}"><i class="ri-file-list-line"></i>View</a></li>
                   {{-- <li><a href="{{ url('/addsection') }}"><i class="ri-file-list-line"></i>Add Section</a></li> --}}
                </ul>
             </li>

             {{-- <li class="iq-menu-title"><i class="ri-shopping-cart-line"></i></i><span>Orders</span></li>
             
             <li>
                <a href="#ecommercee" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-shopping-cart-line"></i><span>Order</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                <ul id="ecommercee" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                   <li><a href="{{ url('/order/orderdetail') }}"><i class="ri-file-list-line"></i>View</a></li>
                </ul>
             </li> --}}

             
          </ul>
       </nav>
       <div class="p-3"></div>
    </div>
 </div>