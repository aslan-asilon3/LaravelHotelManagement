
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>Hotel Dashboard Template</title>
	<link rel="shortcut icon" type="image/x-icon" href="{{ url('images/aslanhotel2.png')}}">
	<link rel="stylesheet" href="{{ url('admin-asset/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{ url('admin-asset/plugins/fontawesome/css/fontawesome.min.css')}}">
	<link rel="stylesheet" href="{{ url('admin-asset/plugins/fontawesome/css/all.min.css')}}">
	<link rel="stylesheet" href="{{ url('admin-asset/css/feathericon.min.css')}}">
	<link rel="stylehseet" href="https://cdn.oesmith.co.uk/morris-0.5.1.css">
	<link rel="stylesheet" href="{{ url('admin-asset/plugins/morris/morris.css')}}">
	<link rel="stylesheet" href="{{ url('admin-asset/css/style.css')}}"> </head>

	@yield('Resources');



<body>
	<div class="main-wrapper">
		<div class="header">
			<div class="header-left">
				<a href="index.html" class="logo"> <img src="{{ url('images/aslanhotel2.png')}}" width="50" height="70" alt="logo"> <span class="logoclass">aslan hotel</span> </a>
				<a href="index.html" class="logo logo-small"> <img src="{{ url('images/aslan2.png')}}" alt="Logo" width="30" height="30"> </a>
			</div>
			<a href="javascript:void(0);" id="toggle_btn"> <i class="fe fe-text-align-left"></i> </a>
			<a class="mobile_btn" id="mobile_btn"> <i class="fas fa-bars"></i> </a>
			<ul class="nav user-menu">
				<li class="nav-item dropdown noti-dropdown">
					<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"> <i class="fe fe-bell"></i> <span class="badge badge-pill">3</span> </a>
					<div class="dropdown-menu notifications">
						<div class="topnav-dropdown-header"> <span class="notification-title">Notifications</span> <a href="javascript:void(0)" class="clear-noti"> Clear All </a> </div>
						<div class="noti-content">
							<ul class="notification-list">
								<li class="notification-message">
									<a href="#">
										<div class="media"> <span class="avatar avatar-sm">
											<img class="avatar-img rounded-circle" alt="User Image" src="{{ url('admin-asset/img/profiles/avatar-02.jpg')}}">
											</span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">Carlson Tech</span> has approved <span class="noti-title">your estimate</span></p>
												<p class="noti-time"><span class="notification-time">4 mins ago</span> </p>
											</div>
										</div>
									</a>
								</li>
								<li class="notification-message">
									<a href="#">
										<div class="media"> <span class="avatar avatar-sm">
											<img class="avatar-img rounded-circle" alt="User Image" src="{{ url('') }}admin-asset/img/profiles/avatar-11.jpg">
											</span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">International Software
													Inc</span> has sent you a invoice in the amount of <span class="noti-title">$218</span></p>
												<p class="noti-time"><span class="notification-time">6 mins ago</span> </p>
											</div>
										</div>
									</a>
								</li>
								<li class="notification-message">
									<a href="#">
										<div class="media"> <span class="avatar avatar-sm">
											<img class="avatar-img rounded-circle" alt="User Image" src="{{ url('admin-asset/img/profiles/avatar-17.jpg') }}">
											</span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">John Hendry</span> sent a cancellation request <span class="noti-title">Apple iPhone
													XR</span></p>
												<p class="noti-time"><span class="notification-time">8 mins ago</span> </p>
											</div>
										</div>
									</a>
								</li>
								<li class="notification-message">
									<a href="#">
										<div class="media"> <span class="avatar avatar-sm">
											<img class="avatar-img rounded-circle" alt="User Image" src="{{ url('admin-asset/img/profiles/avatar-13.jpg') }}">
											</span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">Mercury Software
												Inc</span> added a new product <span class="noti-title">Apple
												MacBook Pro</span></p>
												<p class="noti-time"><span class="notification-time">12 mins ago</span> </p>
											</div>
										</div>
									</a>
								</li>
							</ul>
						</div>
						<div class="topnav-dropdown-footer"> <a href="#">View all Notifications</a> </div>
					</div>
				</li>
				<li class="nav-item dropdown has-arrow">
					<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"> <span class="user-img"><img class="rounded-circle" src="{{ url('images/aslan2.png') }}" width="31" alt="AslanAsilon"></span> </a>
					<div class="dropdown-menu">
						<div class="user-header">
							<div class="avatar avatar-sm"> <img src="{{ url('images/aslan2.png') }}" alt="User Image" class="avatar-img rounded-circle"> </div>
							<div class="user-text">
								<h6>AslanAsilon</h6>
								<p class="text-muted mb-0">Administrator</p>
							</div>
						</div> <a class="dropdown-item" href="profile.html">My Profile</a> <a class="dropdown-item" href="settings.html">Account Settings</a> <a class="dropdown-item" href="/logout">Logout</a> </div>
				</li>
			</ul>
			<div class="top-nav-search">
				<form>
					<input type="text" class="form-control" placeholder="Search here">
					<button class="btn" type="submit"><i class="fas fa-search"></i></button>
				</form>
			</div>
		</div>
		<div class="sidebar" id="sidebar">
			<div class="sidebar-inner slimscroll">
				<div id="sidebar-menu" class="sidebar-menu">
					<ul>
						<li class="active"> <a href="{{ url('admin/dashboard') }}"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a> </li>
						<li class="list-divider"></li>

						<li> <a href="{{ url('/tesgrafik') }}"><i class="fas fa-suitcase"></i> <span>Tes Grafik</span></a> </li>
						<li> <a href="{{ url('admin/booking') }}"><i class="fas fa-suitcase"></i> <span>Booking</span></a> </li>
						<li class="submenu"> <a href="#"><i class="fas fa-suitcase"></i> <span> Cash Flow </span> <span class="menu-arrow"></span></a>
							<ul class="submenu_class" style="display: none;">
								<li><a href="#"> Income </a></li>
								<li><a href="#"> Expense </a></li>
								<li><a href="#"> Transaction </a></li>
								<li><a href="#"> Report </a></li>
							</ul>
						</li>
						<li> <a href="admin/pelanggan"><i class="fas fa-user"></i> <span>Customers</span></a> </li>
						<li> <a href="admin/ruangan"><i class="fas fa-key"></i> <span>Rooms</span></a> </li>
						<li> <a href="admin/staff"><i class="fas fa-user"></i> <span>Staff</span></a> </li>
						<li> <a href="admin/pembayaran"><i class="fas fa-money-bill-alt"></i> <span>Pembayaran</span></a> </li>
						<li> <a href="admin/karyawan"><i class="fas fa-user"></i> <span>Karyawan</span></a> </li>
						<li> <a href="admin/akuntansi"><i class="fas fa-money-bill-alt"></i> <span>Akuntansi</span></a> </li>
						<li> <a href="admin/penggajian"><i class="fas fa-book"></i> <span>Penggajian</span></a> </li>
						<li> <a href="admin/laporan"><i class="fas fa-file"></i> <span>Laporan</span></a> </li>
					</ul>
				</div>
			</div>
		</div>
		<div class="page-wrapper">

        
            <!-- Preloader before show page  -->

            <!-- END Preloader before show page  -->

            @yield('content');

		</div>
	</div>
	<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
	<script src="{{ url('admin-asset/js/jquery-3.5.1.min.js')}}"></script>
	<script src="{{ url('admin-asset/js/popper.min.js')}}"></script>
	<script src="{{ url('admin-asset/js/bootstrap.min.js')}}"></script>
	<script src="{{ url('admin-asset/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
	<script src="{{ url('admin-asset/plugins/raphael/raphael.min.js')}}"></script>
	<script src="{{ url('admin-asset/plugins/morris/morris.min.js')}}"></script>
	<script src="{{ url('admin-asset/js/chart.morris.js')}}"></script>
	<script src="{{ url('admin-asset/js/script.js')}}"></script>
</body>

</html>