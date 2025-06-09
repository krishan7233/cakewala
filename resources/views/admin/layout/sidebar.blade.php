<div class="ec-left-sidebar ec-bg-sidebar">
			<div id="sidebar" class="sidebar ec-sidebar-footer">

				<div class="ec-brand">
					<a href="{{route('admin.dashbord')}}" title="Ekka">
						<img class="ec-brand-icon" src="assets/img/logo/ec-site-logo.jpg" alt="" />
						<span class="ec-brand-name text-truncate">CakePlaza</span>
					</a>
				</div>

				<!-- begin sidebar scrollbar -->
				<div class="ec-navigation" data-simplebar>
					<!-- sidebar menu -->
					<ul class="nav sidebar-inner" id="sidebar-menu">
						<!-- Dashboard -->
						<li class="active">
							<a class="sidenav-item-link" href="{{route('admin.dashbord')}}">
								<i class="mdi mdi-view-dashboard-outline"></i>
								<span class="nav-text">Dashboard</span>
							</a>
							<hr>
						</li>


						<li class="has-sub">
							<a class="sidenav-item-link" href="javascript:void(0)">
								<i class="mdi mdi-account-group"></i>
								<span class="nav-text">Blog & Banner</span> <b class="caret"></b>
							</a>
							<div class="collapse">
								<ul class="sub-menu" id="users" data-parent="#sidebar-menu">
									
									<li class="">
										<a class="sidenav-item-link" href="{{route('admin.banners.index')}}">
											<span class="nav-text">Banner List</span>
										</a>
									</li>

									<li class="">
										<a class="sidenav-item-link" href="{{route('admin.blogs.index')}}">
											<span class="nav-text">Blog List</span>
										</a>
									</li>
									
								</ul>
							</div>
							<hr>
						</li>


						<!-- Users -->
						<li class="has-sub">
							<a class="sidenav-item-link" href="javascript:void(0)">
								<i class="mdi mdi-account-group"></i>
								<span class="nav-text">Users</span> <b class="caret"></b>
							</a>
							<div class="collapse">
								<ul class="sub-menu" id="users" data-parent="#sidebar-menu">
									
									<li class="">
										<a class="sidenav-item-link" href="{{route('users.index')}}">
											<span class="nav-text">User List</span>
										</a>
									</li>
									
								</ul>
							</div>
							<hr>
						</li>

						<!-- Category -->
						<li class="has-sub">
							<a class="sidenav-item-link" href="javascript:void(0)">
								<i class="mdi mdi-dns-outline"></i>
								<span class="nav-text">Categories</span> <b class="caret"></b>
							</a>
							<div class="collapse">
								<ul class="sub-menu" id="categorys" data-parent="#sidebar-menu">
									<li class="">
										<a class="sidenav-item-link" href="{{route('admin.categories')}}">
											<span class="nav-text">Main Category</span>
										</a>
									</li>
									<li class="">
										<a class="sidenav-item-link" href="{{route('admin.subcategories')}}">
											<span class="nav-text">Sub Category</span>
										</a>
									</li>
								</ul>
							</div>
						</li>

						<!-- Products -->
						<li class="has-sub">
							<a class="sidenav-item-link" href="javascript:void(0)">
								<i class="mdi mdi-palette-advanced"></i>
								<span class="nav-text">Products</span> <b class="caret"></b>
							</a>
							<div class="collapse">
								<ul class="sub-menu" id="products" data-parent="#sidebar-menu">
									<li class="">
										<a class="sidenav-item-link" href="{{route('admin.products.create')}}">
											<span class="nav-text">Add Product</span>
										</a>
									</li>
									<li class="">
										<a class="sidenav-item-link" href="{{route('admin.products.index')}}">
											<span class="nav-text">List Product</span>
										</a>
									</li>
									
								</ul>
							</div>
						</li>

						<!-- Orders -->
					    
					    <!-- Orders -->
						<li class="has-sub">
							<a class="sidenav-item-link" href="javascript:void(0)">
								<i class="mdi mdi-cart"></i>
								<span class="nav-text">Orders</span> <b class="caret"></b>
							</a>
							<div class="collapse">
								<ul class="sub-menu" id="orders" data-parent="#sidebar-menu">
								
									<li class="">
										<a class="sidenav-item-link" href="{{ route('admin.orders') }}">
											<span class="nav-text">Order History</span>
										</a>
									</li>
								
								</ul>
							</div>
						</li>
						<!-- Manual Order -->
						<li class="">
							<a class="sidenav-item-link" href="{{ route('admin.manualOrder') }}">
								<i class="mdi mdi-cart-outline"></i>
								<span class="nav-text">Manual Order</span>
							</a>
						</li>
					
                    <li class="has-sub">
							<a class="sidenav-item-link" href="javascript:void(0)">
								<i class="mdi mdi-cart"></i>
								<span class="nav-text">Coupons</span> <b class="caret"></b>
							</a>
							<div class="collapse">
								<ul class="sub-menu" id="orders" data-parent="#sidebar-menu">
								
									<li class="">
										<a class="sidenav-item-link" href="{{ route('admin.coupons.add') }}">
											<span class="nav-text">Add Coupon</span>
										</a>
									</li>
									<li class="">
										<a class="sidenav-item-link" href="{{ route('admin.coupons') }}">
											<span class="nav-text">List Coupon</span>
										</a>
									</li>
								
								</ul>
							</div>
						</li>

					<li class="">
							<a class="sidenav-item-link" href="{{ route('admin.queryList') }}">
								<i class="mdi mdi-cart-outline"></i>
								<span class="nav-text">Query List</span>
							</a>
						</li>

						
					</ul>
				</div>
			</div>
		</div>