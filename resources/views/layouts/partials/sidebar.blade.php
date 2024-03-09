<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

	<a href="{{route('home')}}" class="logo">
		<span class="logo-lg">{{ Session::get('business.name') }}</span>
	</a>

  <ul class="sidebar-menu tree">
    <li><a href="{{url('/')}}/home"><i class="fa fas fa-tachometer-alt"></i> <span>Home</span></a></li>
  
    <li class="treeview">
        <a href="#">
          <i class="fa fas fa-users"></i> <span>Staff</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
      <ul class="treeview-menu">
        <li><a href="{{url('/')}}/users"><i class="fa fas fa-user"></i> <span>Staff</span></a></li>
        <li><a href="{{url('/')}}/roles"><i class="fa fas fa-briefcase"></i> <span>Roles</span></a></li>
        <?php /*
        <li><a href="{{url('/')}}/attendant"><i class="fa fas fa-briefcase"></i> <span>Attendant</span></a></li>
       
        <li><a href="{{url('/')}}/salary-expense"><i class="fa fas fa-briefcase"></i> <span>Salary Expense</span></a></li>   
        */?>
        @endphp
       </ul>
    </li>
    <li class="treeview" id="tour_step5">
      <a href="#">
        <i class="fa fas fa-cubes"></i> <span>Product</span>
            <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
      </a>
      <ul class="treeview-menu">
        <li><a href="{{url('/')}}/products"><i class="fa fas fa-list"></i> <span>List Products</span></a></li>
        <li><a href="{{url('/')}}/units"><i class="fa fas fa-list"></i> <span>Unit</span></a></li>
        <li><a href="{{url('/')}}/taxonomies?type=product"><i class="fa fas fa-tags"></i> <span>Categories</span></a></li>
      </ul>
    </li>


      
    <li class="treeview" id="tour_step6">
      <a href="#">
          <i class="fa fas fa-arrow-circle-down"></i> <span>Purchase</span>
          <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
      </a>
      <ul class="treeview-menu">
        <li><a href="{{url('/')}}/contacts?type=supplier"><i class="fa fas fa-star"></i> <span>Supplier</span></a></li>
        <li><a href="{{url('/')}}/purchases"><i class="fa fas fa-list"></i> <span>Purchase Order</span></a></li>
        <li><a href="{{url('/')}}/purchase-return"><i class="fa fas fa-undo"></i> <span>Purchase Return</span></a></li>
      </ul>
    </li>

    <li class="treeview" id="tour_step7">
        <a href="#">
            <i class="fa fas fa-arrow-circle-up"></i> <span>Sell</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{url('/')}}/contacts?type=customer"><i class="fa fas fa-star"></i> <span>Customer</span></a></li>
          <li><a href="{{url('/')}}/sells"><i class="fa fas fa-list"></i> <span>Sales Order</span></a></li>
          <li><a href="{{url('/')}}/sell-return"><i class="fa fas fa-undo"></i> <span>Sales Return</span></a></li>
          <li class="active"><a href="{{url('/')}}/shipments"><i class="fa fas fa-truck"></i> <span>Shipments</span></a></li>
        </ul>
      </li>
  </ul>




  <!-- Sidebar Menu -->
    {!! Menu::render('admin-sidebar-menu', 'adminltecustom'); !!}

    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>
