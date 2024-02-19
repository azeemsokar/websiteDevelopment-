<head>

		<!-- META DATA -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="Flaira - Bootstrap HTML Admin Template">
		<meta name="author" content="Spruko Technologies Private Limited">
		<meta name="keywords" content="admin dashboard template,admin panel template,bootstrap 4 admin template,bootstrap 4 dashboard,bootstrap admin,bootstrap admin panel,admin template,bootstrap admin template,dashboard template,	bootstrap admin template,premium admin templates,html admin template,ecommerce dashboard,admin panel template,bootstrap admin theme,bootstrap admin panel">

		<!-- FAVICON -->
		<link rel="shortcut icon" type="image/x-icon" href="assets/images/logo/logo.png">

		<!-- TITLE -->
		<title>Mobile Snapshot</title>

		<!-- BOOTSTRAP CSS -->
		<link href="../../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

		<!-- STYLE CSS -->
		<link href="../../assets/css/style.css" rel="stylesheet"/>
		<link href="../../assets/css/skin-modes.css" rel="stylesheet"/>

		<!--HORIZONTAL CSS-->
		<link href="../../assets/plugins/horizontal-menu/horizontal-menu.html" rel="stylesheet" />

		<!-- C3 CHARTS CSS -->
		<link href="../../assets/plugins/charts-c3/c3-chart.css" rel="stylesheet"/>

		<!-- CUSTOM SCROLL BAR CSS-->
		<link href="../../assets/plugins/p-scroll/perfect-scrollbar.css" rel="stylesheet"/>

		<!-- SELECT2 CSS -->
		<link href="../../assets/plugins/select2/select2.min.css" rel="stylesheet"/>

		<!--- FONT-ICONS CSS -->
		<link href="../../assets/css/icons.css" rel="stylesheet"/>

		<!-- Switcher css -->
		<link  href="../../assets/switcher/css/switcher.css" rel="stylesheet" id="switcher-css" type="text/css" media="all"/>
		<link  href="../../assets/switcher/css/demo.css" rel="stylesheet"/>

		<!-- COLOR SKIN CSS -->
		<link id="theme" rel="stylesheet" type="text/css" media="all" href="../../assets/colors/color1.css" />

	</head>

<nav x-data="{ open: false }" class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
                    </a>
                </div>

                <!-- Navigation Links 
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                    <img src="assets/images/logo/logo.png" alt="Logo" width="50" height="50">{{ __('Mobile_Snapshot') }}
                    </x-nav-link>
                </div>-->
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
	<!--/Horizontal-main -->
    <div class="sticky">
					<div class="horizontal-main hor-menu clearfix">
						<div class="horizontal-mainwrapper container clearfix">
							<!--Nav-->
							<nav class="horizontalMenu clearfix">
								<ul class="horizontalMenu-list">
									<li aria-haspopup="true"><a href="#" class="sub-icon active"><i class="fe fe-airplay"></i> Dashboard <i class="fa fa-angle-down horizontal-icon"></i></a>
										<ul class="sub-menu">
											<li aria-haspopup="true"><a href="index.html">Left Menu</a></li>
											<li aria-haspopup="true"><a  class="active" href="index2.html">Horizontal Menu</a></li>
										</ul>
									</li>
									<li aria-haspopup="true"><a href="mobile" class=""><i class="fe fe-layers"></i>Mobiles</a></li>
									<li aria-haspopup="true"><a href="#" class="sub-icon"><i class="fe fe-package"></i>Components <i class="fa fa-angle-down horizontal-icon"></i></a>
										<ul class="sub-menu">
											<li aria-haspopup="true"><a href="cards.html"> Cards design</a></li>
											<li aria-haspopup="true"><a href="calendar.html">Default calendar</a></li>
											<li aria-haspopup="true"><a href="calendar2.html">Full calendar</a></li>
											<li aria-haspopup="true"><a href="chat.html">Default Chat</a></li>
											<li aria-haspopup="true"><a href="notify.html">Notifications</a></li>
											<li aria-haspopup="true"><a href="sweetalert.html">Sweet alerts</a></li>
											<li aria-haspopup="true"><a href="rangeslider.html">Range slider</a></li>
											<li aria-haspopup="true"><a href="scroll.html">Content Scroll bar</a></li>
											<li aria-haspopup="true"><a href="loaders.html">Loaders</a></li>
											<li aria-haspopup="true"><a href="counters.html">Counters</a></li>
											<li aria-haspopup="true"><a href="rating.html">Rating</a></li>
											<li aria-haspopup="true"><a href="timeline.html">Timeline</a></li>
										</ul>
									</li>
									<li aria-haspopup="true"><a href="#" class="sub-icon"><i class="fe fe-grid"></i> Elements  <i class="fa fa-angle-down horizontal-icon"></i></a>
										<div class="horizontal-megamenu clearfix">
											<div class="container">
												<div class="mega-menubg">
													<div class="row">
														<div class="col-lg-3 col-md-12 col-xs-12 link-list">
															<ul>
																<li aria-haspopup="true"><a href="alerts.html">Alerts</a></li>
																<li aria-haspopup="true"><a href="buttons.html">Buttons</a></li>
																<li aria-haspopup="true"><a href="colors.html">Colors</a></li>
																<li aria-haspopup="true"><a href="avatarsquare.html">Avatar-Square</a></li>
																<li aria-haspopup="true"><a href="avatar-round.html">Avatar-Rounded</a></li>
																<li aria-haspopup="true"><a href="avatar-radius.html">Avatar-Radius</a></li>
																<li aria-haspopup="true"><a href="dropdown.html">Drop downs</a></li>
																<li aria-haspopup="true"><a href="list.html">List</a></li>
																<li aria-haspopup="true"><a href="tags.html">Tags</a></li>
																<li aria-haspopup="true"><a href="mediaobject.html">Media Object</a></li>
																<li aria-haspopup="true"><a href="carousel.html">Carousels</a></li>
															</ul>
														</div>
														<div class="col-lg-3 col-md-12 col-xs-12 link-list">
															<ul>
																<li aria-haspopup="true"><a href="pagination.html">Pagination</a></li>
																<li aria-haspopup="true"><a href="navigation.html">Navigation</a></li>
																<li aria-haspopup="true"><a href="typography.html">Typography</a></li>
																<li aria-haspopup="true"><a href="breadcrumbs.html">Breadcrumbs</a></li>
																<li aria-haspopup="true"><a href="badge.html">Badges</a></li>
																<li aria-haspopup="true"><a href="jumbotron.html">Jumbotron</a></li>
																<li aria-haspopup="true"><a href="panels.html">Panels</a></li>
																<li aria-haspopup="true"><a href="thumbnails.html">Thumbnails</a></li>
																<li aria-haspopup="true"><a href="modal.html">Modal</a></li>
																<li aria-haspopup="true"><a href="tooltipandpopover.html">Tooltip and popover</a></li>
																<li aria-haspopup="true"><a href="progress.html">Progress</a></li>
															</ul>
														</div>
														<div class="col-lg-3 col-md-12 col-xs-12 link-list">
															<ul>
																<li><h3 class="fs-14 font-weight-bold mb-1">Tables</h3></li>
																<li aria-haspopup="true"><a href="tables.html">Default table</a></li>
																<li aria-haspopup="true"><a href="datatable.html"> Data Tables</a></li>
																<li><h3 class="fs-14 font-weight-bold mb-1 mt-3">Forms</h3></li>
																<li aria-haspopup="true"><a href="form-elements.html">Form Elements</a></li>
																<li aria-haspopup="true"><a href="wysiwyag.html">Form Editor</a></li>
																<li aria-haspopup="true"><a href="form-wizard.html">Form Wizard</a></li>
																<li><h3 class="fs-14 font-weight-bold mb-1 mt-3">E-Commerce</h3></li>
																<li aria-haspopup="true"><a href="shop.html">Shop</a></li>
																<li aria-haspopup="true"><a href="shop-description.html">Product Details</a></li>
																<li aria-haspopup="true"><a href="cart.html">Shopping Cart</a></li>
															</ul>
														</div>
														<div class="col-lg-3 col-md-12 col-xs-12 link-list">
															<ul>
																<li><h3 class="fs-14 font-weight-bold mb-3">Authenication & Error</h3></li>
																<li aria-haspopup="true"><a href="login.html">Login</a></li>
																<li aria-haspopup="true"><a href="register.html">Register</a></li>
																<li aria-haspopup="true"><a href="forgot-password.html">Forgot Password</a></li>
																<li aria-haspopup="true"><a href="lockscreen.html">Lock screen </a></li>
																<li aria-haspopup="true"><a href="400.html">400</a></li>
																<li aria-haspopup="true"><a href="401.html">401</a></li>
																<li aria-haspopup="true"><a href="403.html">403</a></li>
																<li aria-haspopup="true"><a href="404.html">404</a></li>
																<li aria-haspopup="true"><a href="403.html">500</a></li>
																<li aria-haspopup="true"><a href="503.html">503</a></li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
									</li>
									<li aria-haspopup="true"><a href="#" class="sub-icon"><i class="fe fe-database"></i>Advanced Elements <i class="fa fa-angle-down horizontal-icon"></i></a>
										<ul class="sub-menu">
											<li aria-haspopup="true"><a href="accordion.html"> Accordions</a></li>
											<li aria-haspopup="true"><a href="tabs.html">Tabs</a></li>
											<li aria-haspopup="true"><a href="chart.html">Charts</a></li>
											<li aria-haspopup="true"><a href="headers.html">Headers</a></li>
											<li aria-haspopup="true"><a href="footers.html">Footers</a></li>
											<li aria-haspopup="true"><a href="users-list.html">User List</a></li>
											<li aria-haspopup="true"><a href="search.html">Search</a></li>
											<li aria-haspopup="true"><a href="crypto-currencies.html">Crypto-currencies</a></li>
											<li aria-haspopup="true"><a href="maps.html">Maps</a></li>
										</ul>
									</li>
									<li aria-haspopup="true"><a href="#" class="sub-icon"><i class="fe fe-activity"></i> Charts <i class="fa fa-angle-down horizontal-icon"></i></a>
										<ul class="sub-menu">
											<li aria-haspopup="true"><a href="chart-chartist.html">Chart Js</a></li>
											<li aria-haspopup="true"><a href="chart-flot.html">Flot Charts</a></li>
											<li aria-haspopup="true"><a href="chart-echart.html">ECharts</a></li>
											<li aria-haspopup="true"><a href="chart-morris.html">Morris Charts</a></li>
											<li aria-haspopup="true"><a href="chart-nvd3.html">Nvd3 Charts</a></li>
											<li aria-haspopup="true"><a href="charts.html">C3 Bar Charts</a></li>
											<li aria-haspopup="true"><a href="chart-line.html">C3 Line Charts</a></li>
											<li aria-haspopup="true"><a href="chart-donut.html">C3 Donut Charts</a></li>
											<li aria-haspopup="true"><a href="chart-pie.html">C3 Pie Charts</a></li>
										</ul>
									</li>
									<li aria-haspopup="true"><a href="#" class="sub-icon"><i class="fe fe-copy"></i> Pages <i class="fa fa-angle-down horizontal-icon"></i></a>
										<ul class="sub-menu">
											<li aria-haspopup="true" class="sub-menu-sub"><a href="#">Profile</a>
												<ul class="sub-menu">
													<li aria-haspopup="true"><a href="profile.html"> Profile </a></li>
													<li aria-haspopup="true"><a href="editprofile.html">Edit Profile</a></li>
												</ul>
											</li>
											<li aria-haspopup="true" class="sub-menu-sub"><a href="#">Mail</a>
												<ul class="sub-menu">
													<li aria-haspopup="true"><a href="email.html">Mail-Inbox</a></li>
													<li aria-haspopup="true"><a href="emailservices.html">Mail-Compose</a></li>
												</ul>
											</li>
											<li aria-haspopup="true"><a href="gallery.html">Gallery</a></li>
											<li aria-haspopup="true"><a href="about.html">About Company </a></li>
											<li aria-haspopup="true"><a href="services.html">Services </a></li>
											<li aria-haspopup="true"><a href="faq.html">FAQS</a></li>
											<li aria-haspopup="true"><a href="terms.html">Terms</a></li>
											<li aria-haspopup="true"><a href="invoice.html">Invoice</a></li>
											<li aria-haspopup="true"><a href="pricing.html">Pricing Tables</a></li>
											<li aria-haspopup="true"><a href="blog.html">Blog</a></li>
											<li aria-haspopup="true"><a href="empty.html">Empty Page</a></li>
											<li aria-haspopup="true" ><a href="construction.html">Under Construction</a></li>
										</ul>
									</li>
									<li aria-haspopup="true"><a href="#" class="sub-icon"><i class="fe fe-shield"></i> Icons <i class="fa fa-angle-down horizontal-icon"></i></a>
										<ul class="sub-menu">
											<li aria-haspopup="true"><a href="icons.html">Font Awesome</a></li>
											<li aria-haspopup="true"><a href="icons2.html">Material Design Icons</a></li>
											<li aria-haspopup="true"><a href="icons3.html">Simple Line Icons</a></li>
											<li aria-haspopup="true"><a href="icons4.html">Feather Icons</a></li>
											<li aria-haspopup="true"><a href="icons5.html">Ionic Icons</a></li>
											<li aria-haspopup="true"><a href="icons6.html">Flag Icons</a></li>
											<li aria-haspopup="true"><a href="icons7.html">pe7 Icons</a></li>
											<li aria-haspopup="true"><a href="icons8.html">Themify Icons</a></li>
											<li aria-haspopup="true"><a href="icons9.html">Typicons Icons</a></li>
											<li aria-haspopup="true"><a href="icons10.html">Weather Icons</a></li>
										</ul>
									</li>
								</ul>
							</nav>
							<!--Nav-->
						</div>
					</div>
				</div>
				<!--/Horizontal-main -->

                 <!--app-content open-->
				<div class="app-content">
					<div class="container">

						<!-- PAGE-HEADER -->
						<div class="page-header">
							<!-- breadcrumb -->
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#"><h3 class="mb-0 breadcrump-tittle">Welcome To Flaira</h3></a></li>
							</ol>
							<!-- End breadcrumb -->
							<div class="ml-auto">
								<div class="input-group">
									<a href="#" class="btn btn-white button-icon mr-3 mt-1 mb-1">
										<span><i class="fe fe-shopping-cart"></i>Buy Now</span>
									</a>
									<a href="#" class="btn btn-white button-icon mr-3 mt-1 mb-1">
										<span><i class="fe fe-printer"></i>Print</span>
									</a>
									<a href="#" class="btn btn-primary button-icon mr-3 mt-1 mb-1">
										<span><i class="fe fe-download"></i>Download</span>
									</a>
								</div>
							</div>
						</div>
						<!-- PAGE-HEADER END -->

						<div class="">
							<div class="banner banner-color mt-0 row">
								<div class="col-xl-1 col-lg-2 col-md-12 p-0">
									<img src="https://www.spruko.com/demo/flaira/Flaira/assets/images/svgs/email.svg" alt="image" class="image">
								</div>
								<div class="page-content col-xl-7 col-lg-6 col-md-12">
									<h3 class="mb-1">Welcome back! <span class="font-weight-bold text-primary">Devid Antoni</span></h3>
									<p class="mb-0 fs-16">Want to be the first to know about Flaira updates? Subscribe Now</p>
								</div>
								<div class="col-xl-4 col-lg-4 col-md-12 text-lg-right">
									<a href="#" class="btn btn-success mr-3 mt-1 mb-1" id="skip">Skip</a>
									<a href="#" class="btn btn-danger mt-1 mb-1">Subscribe Now</a>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12 col-xl-4 col-lg-6">
								<div class="card overflow-hidden">
									<div class="card-body pb-0">
										<div class="row">
											<div class="col-md-8">
												<div class="d-flex">
													<div class="order-icon mb-0 border-primary">
														<i class="fa fa-database text-primary"></i>
													</div>
													<div class="ml-3 mt-1">
														<h5 class="mb-1 widget-tittle">Total Quantity</h5>
														<span class=""><i class="fa fa-caret-up mr-1"></i><span>+5%</span></span>
														<span class="text-muted ml-0">Last Month</span>
													</div>
												</div>
											</div>
											<div class="col-md-4">
												<h2 class="mt-2 number-font mb-0 float-md-right">37,258</h2>
											</div>
										</div>
									</div>
									<div>
										<div class="flot-chart-absolute h-99 chart-dropshadow-primary" id="flotChart2"></div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-xl-4 col-lg-6">
								<div class="card overflow-hidden">
									<div class="card-body pb-0">
										<div class="row">
											<div class="col-md-8">
												<div class="d-flex">
													<div class="order-icon mb-0 border-success">
														<i class="fa fa-line-chart text-success"></i>
													</div>
													<div class="ml-3 mt-1">
														<h5 class="mb-1 widget-tittle">Total Cost</h5>
														<span class=""><i class="fa fa-caret-down mr-1"></i><span>-7%</span></span>
														<span class="text-muted ml-0">Last Month</span>
													</div>
												</div>
											</div>
											<div class="col-md-4">
												<h2 class="mt-2 number-font mb-0 float-md-right">78,765</h2>
											</div>
										</div>
									</div>
									<div>
										<div class="flot-chart-absolute h-99 chart-dropshadow-success" id="flotChart3"></div>
									</div>
								</div>
							</div>
							<div class="col-sm-12 col-xl-4 col-lg-12">
								<div class="card overflow-hidden">
									<div class="card-body pb-0">
										<div class="row">
											<div class="col-md-8">
												<div class="d-flex">
													<div class="order-icon mb-0 border-danger">
														<i class="fa fa-dollar text-danger"></i>
													</div>
													<div class="ml-3 mt-1">
														<h5 class="mb-1 widget-tittle">Total Revenue</h5>
														<span class=""><i class="fa fa-caret-up mr-1"></i><span>+3%</span></span>
														<span class="text-muted ml-0">Last Month</span>
													</div>
												</div>
											</div>
											<div class="col-md-4">
												<h2 class="mt-2 number-font mb-0 float-md-right">45,854</h2>
											</div>
										</div>
									</div>
									<div>
										<div class="flot-chart-absolute h-99 chart-dropshadow-danger" id="flotChart4"></div>
									</div>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-lg-5">
								<div class="card">
									<div class="card-header custom-header">
										<div>
											<h3 class="card-title">New Tasks</h3>
										</div>
									</div>
									<div class="card-body">
										<div class="latest-timeline">
											<h5>2019</h5>
											<ul class="timeline mb-0">
												<li class="mt-0">
													<a target="_blank" href="#" class="font-weight-semibold text-dark fs-16">New Project approved</a>
													<div><small class="fs-13 text-muted">23 Sep, 2019</small></div>
													<p class="text-muted mt-2">Lorem ipsum dolor tempor incididunt ut labore et dolore magna aliqua. </p>
												</li>
												<li>
													<a target="_blank" href="#" class="font-weight-semibold text-dark fs-16">Need Some Updates in Project</a>
													<div><small class="fs-13 text-muted">16 Aug, 2019</small></div>
													<p class="text-muted mt-2">Lorem ipsum dolor tempor incididunt ut labore et dolore.</p>
												</li>
												<li>
													<a target="_blank" href="#" class="font-weight-semibold text-dark fs-16">Completed total projects</a>
													<div><small class="fs-13 text-muted">23 Feb, 2019</small></div>
													<p class="text-muted mt-2 mb-0">Lorem ipsum dolor tempor incididunt ut labore et dolore.</p>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-7 col-sm-12">
								<div class="card">
									<div class="card-header">
										<h3 class="card-title">Completed Tasks</h3>
									</div>
									<div class="card-body">
										<div class="chart-wrapper">
											<canvas id="revenue"></canvas>
										</div>
									</div>
								</div>
							</div><!-- COL END -->
						</div>


						<!-- ROW-3 -->
						<div class="row">
							<div class="col-lg-8">
								<div class="card">
									<div class="card-header">
										<h4 class="card-title">Revenue</h4>
										<div class="card-options">
											<div class="btn-group">
												<button class="btn btn-outline-primary">Today</button>
												<button class="btn btn-outline-primary">Week</button>
												<button class="btn btn-primary">Month</button>
												<button class="btn btn-outline-primary">Year</button>
											  </div>
										</div>
									</div>
									<div class="card-body">
										<div>
											<div class="flot-chart h-300" id="flotChart"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-lg-4">
								<div class="card">
									<div class="card-header text-center">
										<h5 class="card-title">Sales Growth</h2>
									</div>
									<div class="card-body">
										<div class="mx-auto chart-circle chart-circle-lg mt-3 mb-4 text-center" data-value="0.80" data-thickness="8" data-color="#556ee7"><div class="chart-circle-value text-primary ml-3">80%</div></div>
										<div class="text-center mt-3">
											<h3>Average Sales</h3>
											<p class="mb-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quam velit quisquam .</p>
											<div class="col p-1 mt-2">
												<div class="float-left text-left">
													  <h3 class="ml-0 mb-2"><i class="fa fa-caret-down fa-1x text-danger mr-1"></i>$2.4</h3>
													  <h6 class="pb-0 mb-0">last month</h6>
												</div>
												<div class="float-right text-right">
													  <h3 class="mr-0 mb-2"><i class="fa fa-caret-up fa-1x text-green mr-1"></i>$3.6</h3>
													  <h6 class="mt-0 mb-0">Current Month</h6>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- ROW-3 END -->

						 <!-- ROW-4 -->
						<div class="row row-deck">
							<div class="col-lg-12 col-md-12">
								<div class="card">
									<div class="card-header">
										<h5 class="card-title">Projects Status</h5>
									</div>
									<div class="table-responsive">
										<table class="table card-table table-vcenter text-nowrap">
											<thead>
												<tr>
													<th>Id</th>
													<th>Project Name</th>
													<th>Team Lead</th>
													<th>Date</th>
													<th>Due Date</th>
													<th>Feedback</th>
													<th>Status</th>
													<th>Preview</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>2345</td>
													<td class="text-sm font-weight-600">Megan Peters</td>
													<td>Season Claeys</td>
													<td class="text-nowrap">Jan 13, 2019</td>
													<td class="text-nowrap">Mar 24, 2020</td>
													<td>please check pricing Info </td>
													<td class="text-success">Completed</td>
													<td class="text-nowrap"><a class="btn btn-outline-primary" href="#">View Project</a></td>
												</tr>
												<tr>
													<td>4562</td>
													<td class="text-sm font-weight-600">Phil Vance</td>
													<td>Meagan Moone</td>
													<td class="text-nowrap">Jan 15, 2019</td>
													<td class="text-nowrap">Apr 25, 2020</td>
													<td>New stock</td>
													<td class="text-orange">Pending</td>
													<td class="text-nowrap"><a class="btn btn-outline-primary" href="#">View Project</a></td>
												</tr>
												<tr>
													<td>8765</td>
													<td class="text-sm font-weight-600">Adam Sharp</td>
													<td>Freeda Harig</td>
													<td class="text-nowrap">Jan 8, 2019</td>
													<td class="text-nowrap">Nox 18, 2019</td>
													<td>Daily updates</td>
													<td class="text-yellow">Ongoing Process</td>
													<td class="text-nowrap"><a class="btn btn-outline-primary" href="#">View Project</a></td>
												</tr>
												<tr>
													<td>2665</td>
													<td class="text-sm font-weight-600">Samantha Slater</td>
													<td>Lena Pompa</td>
													<td class="text-nowrap">Jan 28, 2019</td>
													<td class="text-nowrap">Feb 28, 2020</td>
													<td>available item list</td>
													<td class="text-success">Completed</td>
													<td class="text-nowrap"><a class="btn btn-outline-primary" href="#">View Project</a></td>
												</tr>
												<tr>
													<td>1245</td>
													<td class="text-sm font-weight-600">Joanne Nash</td>
													<td>Whitney Cadle</td>
													<td class="text-nowrap">Jan 2, 2019</td>
													<td class="text-nowrap">Dec 12, 2019</td>
													<td>Provide Best Services</td>
													<td class="text-orange">Pending</td>
													<td class="text-nowrap"><a class="btn btn-outline-primary" href="#">View Project</a></td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<!-- ROW-4 END -->
					</div>
				</div>
				<!-- CONTAINER END -->
            </div>