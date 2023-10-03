<aside class="app-navbar">
   <!-- begin sidebar-nav -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/ti-icons@0.1.2/css/themify-icons.min.css">
   
   <div class="sidebar-nav scrollbar scroll_light">
      <ul class="metismenu " id="sidebarNav">
         <li class="nav-static-title">Personal</li>
         <li class="active">
            <a class="has-arrow" href="javascript:void(0)" aria-expanded="false">
            <i class="nav-icon ti ti-rocket"></i>
            <span class="nav-title">Dashboards</span>
            <span class="nav-label label label-danger">9</span>
            </a>
            <ul aria-expanded="false">
               <li class="active"> <a href='#'>Tych</a> </li>
            </ul>
         </li>
         <li>
            <a class="has-arrow" href="javascript:void(0)" aria-expanded="false">
               <i class="ti-control-record"></i><span class="nav-title">Members</span></a>
            <ul aria-expanded="false">
               <li> <a href="{{url('admin/add-member')}}">Add Member</a> </li>
               <li> <a href="{{url('admin/all-member')}}">All Member</a> </li>
            </ul>
         </li>
         <!-- <li>
            <a class="has-arrow" href="javascript:void(0)" aria-expanded="false">
               <i class="nav-icon ti ti-key"></i><span class="nav-title">Plan</span></a>
            <ul aria-expanded="false">
               <li> <a href="add-plan.php">Add Plan</a> </li>
               <li> <a href="List-plan.php">List Plan</a> </li>
            </ul>
         </li> -->
         <li>
            <a class="has-arrow" href="javascript:void(0)" aria-expanded="false">
               <i class="ti-control-record"></i><span class="nav-title">Sub. Admin</span></a>
            <ul aria-expanded="false">
               <li> <a href="{{url('admin/add-sub')}}">Add Sub-Admin</a> </li>
               <li> <a href="{{url('admin/all-sub')}}">All Sub-Admin</a> </li>
            </ul>
         </li>
         <li>
            <a class="has-arrow" href="javascript:void(0)" aria-expanded="false">
               <i class="ti-control-record"></i><span class="nav-title">User</span></a>
            <ul aria-expanded="false">
               <li> <a href="{{url('admin/add-user')}}">Add User</a> </li>
               <li> <a href="{{url('admin/all-user')}}">All Users</a> </li>
               <li> <a href="{{url('admin/single-user-wallet')}}">Wallet History</a> </li>
            </ul>
         </li>
         
         
           <li>
            <a class="has-arrow" href="{{url('admin/all-page')}}" aria-expanded="false">
               <i class="ti-control-record"></i><span class="nav-title">Pages</span></a>
            <!-- <ul aria-expanded="false">
               <li> <a href="{{url('admin/add-page')}}">Add Page</a> </li>
               <li> <a href="{{url('admin/all-page')}}">All Pages</a> </li>
            </ul> -->
         </li>
         
           <li>
            <a class="has-arrow" href="javascript:void(0)" aria-expanded="false">
               <i class="ti-control-record"></i><span class="nav-title">3rd Party</span></a>
            <ul aria-expanded="false">
               <li> <a href="{{url('admin/key')}}">APIs Key</a> </li>
               <li> <a href="{{url('admin/others-setting')}}">Other</a> </li>
            </ul>
         </li>
         
           <li>
            <a class="has-arrow" href="javascript:void(0)" aria-expanded="false">
               <i class="ti-control-record"></i><span class="nav-title">Customer Wallet</span></a>
            <ul aria-expanded="false">
            <li> <a href="{{url('admin/user-wallet')}}">Wallet</a> </li>
               <li> <a href="{{url('admin/transactions')}}">All Transactions</a> </li>
               <li> <a href="{{url('admin/by-user')}}">By User</a> </li>
            </ul>
         </li>
           <li>
            <a class="has-arrow" href="javascript:void(0)" aria-expanded="false">
               <i class="ti-control-record"></i><span class="nav-title">System setup</span></a>
            <ul aria-expanded="false">
               <li> <a href="{{url('admin/general-setting')}}">General Setting</a> </li>
               <li> <a href="{{url('admin/app-setting')}}">App Settings</a> </li>
            </ul>
         </li>
      </ul>
   </div>
   <!-- end sidebar-nav -->
</aside>