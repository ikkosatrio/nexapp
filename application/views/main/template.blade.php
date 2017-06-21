<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>{{$config->name}}</title>

	<!-- Global stylesheets -->
	<link rel="shortcut icon" type="image/png" href="{{base_url()}}assets/images/website/config/icon/{{$config->icon}}"/>
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="{{base_url()}}assets/main/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="{{base_url('')}}assets/css/common.css">
	<link href="{{base_url()}}assets/main/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="{{base_url()}}assets/main/css/core.css" rel="stylesheet" type="text/css">
	<link href="{{base_url()}}assets/main/css/components.css" rel="stylesheet" type="text/css">
	<link href="{{base_url()}}assets/main/css/colors.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->
	@yield('style')
	<!-- Core JS files -->
	<script type="text/javascript" src="{{base_url()}}assets/main/js/plugins/loaders/pace.min.js"></script>
	<script type="text/javascript" src="{{base_url()}}assets/main/js/core/libraries/jquery.min.js"></script>
	<script type="text/javascript" src="{{base_url()}}assets/main/js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="{{base_url()}}assets/main/js/plugins/loaders/blockui.min.js"></script>
	<script type="text/javascript" src="{{base_url()}}assets/main/js/plugins/ui/nicescroll.min.js"></script>
	<script type="text/javascript" src="{{base_url()}}assets/main/js/plugins/ui/drilldown.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script type="text/javascript" src="{{base_url()}}assets/main/js/plugins/media/fancybox.min.js"></script>

	<script type="text/javascript" src="{{base_url()}}assets/main/js/core/app.js"></script>
	<script type="text/javascript" src="{{base_url()}}assets/main/js/pages/gallery.js"></script>

	<script type="text/javascript" src="{{base_url()}}assets/main/js/plugins/ui/ripple.min.js"></script>
	<!-- /theme JS files -->
	@yield('js')
	<style type="text/css">
		.navbar-brand > img {
		    margin-top: -5px;
		    height: 30px;
		}
		fieldset {
			border: 3px groove;
			display: block;
			text-align: justify
		}
		body {
			background: url("{{base_url()}}assets/images/bagroundnexapp-01.jpg") no-repeat center center fixed;
			-webkit-background-size: 100% 100%;
			-moz-background-size: 100% 100%;
			-o-background-size: 100% 100%;
			background-size: 100% 100%;
			opacity: 0.9;
    		/* filter: alpha(opacity=50); */
			/* width: 100%;
			height: 100%; */
		}
		p, h4 {
			text-align: justify;
		}
	</style>
</head>

<body>
	{{-- <img src="{{base_url()}}assets/images/bagroundnexapp-01.jpg" alt="" class="bg"> --}}
	<!-- Main navbar -->
	<div class="navbar navbar-inverse bg-indigo">
		<div class="navbar-header">
			<a class="navbar-brand" href="{{base_url()}}"><img src="{{base_url()}}assets/images/website/config/logo/{{$config->logo}}" alt=""></a>

			<ul class="nav navbar-nav pull-right visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-users"></i></a></li>
			</ul>
		</div>

		<div class="navbar-collapse collapse" id="navbar-mobile">

			<!-- <p class="navbar-text"><span class="label bg-success-400">Online</span></p> -->
			<ul class="nav navbar-nav navbar-right">
				<p class="navbar-text"><span class="label bg-warning-400">{{ucwords($ctrl->session->userdata('authmember_status'))}}</span></p>
				<li class="dropdown dropdown-user">
					<a class="dropdown-toggle" data-toggle="dropdown">
						<img src="{{base_url()}}assets/main/images/placeholder.jpg" alt="">
						<span>{{ucwords($ctrl->session->userdata('authmember_name'))}}</span>
						<i class="caret"></i>
					</a>

					<ul class="dropdown-menu dropdown-menu-right">
						<li class="divider"></li>
						<li><a href="{{base_url('main/riwayat')}}"><i class="icon-cog5"></i> Riwayat</a></li>
						<li><a href="{{base_url('authentication/logout')}}"><i class="icon-switch2"></i> Logout</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
	<!-- /main navbar -->


	<!-- Second navbar -->
	<div class="navbar navbar-default" id="navbar-second">
		<ul class="nav navbar-nav no-border visible-xs-block">
			<li><a class="text-center collapsed" data-toggle="collapse" data-target="#navbar-second-toggle"><i class="icon-menu7"></i></a></li>
		</ul>

		<div class="navbar-collapse collapse" id="navbar-second-toggle">
			<ul class="nav navbar-nav navbar-nav-material">
				<li><a href="{{base_url('main')}}"><i class="icon-home position-left"></i> Home</a></li>
				{{-- <li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-make-group position-left"></i> Materi <span class="caret"></span>
					</a>

					<ul class="dropdown-menu width-250">
						<li class="dropdown-header">Apps</li>
						<li class="dropdown-submenu">
							<a href="#"><i class="icon-task"></i> Task manager</a>
							<ul class="dropdown-menu width-200">
								<li class="dropdown-header highlight">Options</li>
								<li><a href="task_manager_grid.html">Task grid</a></li>
								<li><a href="task_manager_list.html">Task list</a></li>
								<li><a href="task_manager_detailed.html">Task detailed</a></li>
							</ul>
						</li>
						<li class="dropdown-submenu">
							<a href="#"><i class="icon-cash3"></i> Invoicing</a>
							<ul class="dropdown-menu width-200">
								<li class="dropdown-header highlight">Options</li>
								<li><a href="invoice_template.html">Invoice template</a></li>
								<li><a href="invoice_grid.html">Invoice grid</a></li>
								<li><a href="invoice_archive.html">Invoice archive</a></li>
							</ul>
						</li>
						<li class="dropdown-header">User</li>
						<li class="dropdown-submenu">
							<a href="#"><i class="icon-people"></i> User pages</a>
							<ul class="dropdown-menu width-200">
								<li class="dropdown-header highlight">Basic</li>
								<li><a href="user_pages_cards.html">User cards</a></li>
								<li><a href="user_pages_list.html">User list</a></li>
								<li class="dropdown-header highlight">Profiles</li>
								<li><a href="user_pages_profile.html">Simple profile</a></li>
								<li><a href="user_pages_profile_cover.html">Profile with cover</a></li>
							</ul>
						</li>
						<li class="dropdown-submenu">
							<a href="#"><i class="icon-user-plus"></i> Login &amp; registration</a>
							<ul class="dropdown-menu width-200">
								<li class="dropdown-header highlight">Basic</li>
								<li><a href="login_simple.html">Simple login</a></li>
								<li><a href="login_advanced.html">More login info</a></li>
								<li><a href="login_registration.html">Simple registration</a></li>
								<li><a href="login_registration_advanced.html">More registration info</a></li>
								<li><a href="login_validation.html">With validation</a></li>
								<li><a href="login_tabbed.html">Tabbed form</a></li>
								<li><a href="login_modals.html">Inside modals</a></li>
								<li class="dropdown-header highlight">Service</li>
								<li><a href="login_unlock.html">Unlock user</a></li>
								<li><a href="login_password_recover.html">Reset password</a></li>
								<li class="dropdown-header highlight">Other</li>
								<li><a href="login_hide_navbar.html">Hide navbar</a></li>
								<li><a href="login_transparent.html">Transparent box</a></li>
								<li><a href="login_background.html">Background option</a></li>
							</ul>
						</li>
						<li class="dropdown-header">Kits</li>
						<li class="dropdown-submenu">
							<a href="#"><i class="icon-search4"></i> Search</a>
							<ul class="dropdown-menu width-200">
								<li class="dropdown-header highlight">Basic</li>
								<li><a href="search_basic.html">Basic search results</a></li>
								<li><a href="search_users.html">User search results</a></li>
								<li class="dropdown-header highlight">Media</li>
								<li><a href="search_images.html">Image search results</a></li>
								<li><a href="search_videos.html">Video search results</a></li>
							</ul>
						</li>
						<li class="dropdown-submenu">
							<a href="#"><i class="icon-images2"></i> Gallery</a>
							<ul class="dropdown-menu width-200">
								<li class="dropdown-header highlight">Options</li>
								<li><a href="gallery_grid.html">Media grid</a></li>
								<li class="active"><a href="gallery_titles.html">Media with titles</a></li>
								<li><a href="gallery_description.html">Media with description</a></li>
								<li><a href="gallery_library.html">Media library</a></li>
							</ul>
						</li>
						<li class="dropdown-header">Tools</li>
						<li class="dropdown-submenu">
							<a href="#"><i class="icon-lifebuoy"></i> Support</a>
							<ul class="dropdown-menu width-200">
								<li class="dropdown-header highlight">Chats</li>
								<li><a href="support_conversation_layouts.html">Conversation layouts</a></li>
								<li><a href="support_conversation_options.html">Conversation options</a></li>
								<li class="dropdown-header highlight">Knowledgebase</li>
								<li><a href="support_knowledgebase.html">Knowledgebase</a></li>
								<li><a href="support_faq.html">FAQ page</a></li>
							</ul>
						</li>
						<li class="dropdown-submenu">
							<a href="#"><i class="icon-warning"></i> Error pages</a>
							<ul class="dropdown-menu width-200">
								<li class="dropdown-header highlight">Options</li>
								<li><a href="error_403.html">Error 403</a></li>
								<li><a href="error_404.html">Error 404</a></li>
								<li><a href="error_405.html">Error 405</a></li>
								<li><a href="error_500.html">Error 500</a></li>
								<li><a href="error_503.html">Error 503</a></li>
								<li><a href="error_offline.html">Offline page</a></li>
							</ul>
						</li>
					</ul>
				</li> --}}

				{{-- <li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="icon-strategy position-left"></i> Starter kit <span class="caret"></span>
					</a>

					<ul class="dropdown-menu width-200">
						<li class="dropdown-header">Basic layouts</li>
						<li class="dropdown-submenu">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-grid2"></i> Columns</a>
							<ul class="dropdown-menu">
								<li class="dropdown-header highlight">Options</li>
								<li><a href="starters/1_col.html">One column</a></li>
								<li><a href="starters/2_col.html">Two columns</a></li>
								<li class="dropdown-submenu">
									<a href="#">Three columns</a>
									<ul class="dropdown-menu">
										<li class="dropdown-header highlight">Sidebar position</li>
										<li><a href="starters/3_col_dual.html">Dual sidebars</a></li>
										<li><a href="starters/3_col_double.html">Double sidebars</a></li>
									</ul>
								</li>
								<li><a href="starters/4_col.html">Four columns</a></li>
							</ul>
						</li>
						<li class="dropdown-submenu">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-paragraph-justify3"></i> Navbars</a>
							<ul class="dropdown-menu">
								<li class="dropdown-header highlight">Fixed navbars</li>
								<li><a href="starters/layout_navbar_fixed_main.html">Fixed main navbar</a></li>
								<li><a href="starters/layout_navbar_fixed_secondary.html">Fixed secondary navbar</a></li>
								<li><a href="starters/layout_navbar_fixed_both.html">Both navbars fixed</a></li>
							</ul>
						</li>
						<li class="dropdown-header">Optional layouts</li>
						<li><a href="starters/layout_boxed.html"><i class="icon-align-center-horizontal"></i> Fixed width</a></li>
						<li><a href="starters/layout_sidebar_sticky.html"><i class="icon-flip-vertical3"></i> Sticky sidebar</a></li>
					</ul>
				</li> --}}
			</ul>
		</div>
	</div>
	<!-- /second navbar -->


	<!-- Page header -->
	{{-- <div class="page-header">
		<div class="page-header-content">
			<div class="page-title">
				<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Gallery</span> - With Titles</h4>
			</div>
		</div>
	</div>
	<!-- /page header -->


	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content"> --}}

			@yield('content')

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->
	<div id="modal_simulasi" class="modal fade" data-keyboard="false">
					<div class="modal-dialog">
						<div class="modal-content">
							<!-- <div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h5 class="modal-title">Disable keyboard interaction</h5>
							</div> -->

							<div class="modal-body">
								<h6 class="text-semibold">Simulasi</h6>
								<div class="row">
									<div class="col-md-12">
										<div class="panel panel-flat">
											<div class="panel-heading">
												<h6 class="panel-title">Tryout<a class="heading-elements-toggle"><i class="icon-more"></i></a></h6>
											</div>

											<div class="panel-body">
												<div class="tabbable">
													<ul class="nav nav-tabs nav-tabs-highlight">
													@foreach ($jenjang as $result)
														<li><a href="#highlighted-tab{{$result->id_jenjang}}" data-toggle="tab" class="legitRipple">{{$result->nm_jenjang}}</a></li>
													@endforeach
													</ul>

													<div class="tab-content">
														@foreach ($jenjang as $result)
														<div class="tab-pane" id="highlighted-tab{{$result->id_jenjang}}">
															@foreach ($mapel as $resultM)
																@if ($result->id_jenjang==$resultM->id_jenjang)
																<a href="{{base_url('main/tryout/'.$resultM->id_mapel)}}"><button type="submit" style="margin-top: 15px" class="btn btn-primary legitRipple">{{$resultM->nm_mapel}} <i class="icon-arrow-right14 position-right"></i></button></a>
																@endif
															@endforeach
														</div>
														@endforeach
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="panel panel-flat">
											<div class="panel-heading">
												<h6 class="panel-title">Prediksi<a class="heading-elements-toggle"><i class="icon-more"></i></a></h6>
											</div>

											<div class="panel-body">
												<div class="tabbable">
													<ul class="nav nav-tabs nav-tabs-highlight">
													@foreach ($jenjang as $result)
														<li><a href="#highlights-tab{{$result->id_jenjang}}" data-toggle="tab" class="legitRipple">{{$result->nm_jenjang}}</a></li>
													@endforeach
													</ul>

													<div class="tab-content">
														@foreach ($jenjang as $result)
														<div class="tab-pane" id="highlights-tab{{$result->id_jenjang}}">
															@foreach ($mapel as $resultM)
																@if ($result->id_jenjang==$resultM->id_jenjang)
																<a href="{{base_url('main/prediksi/'.$resultM->id_mapel)}}"><button type="submit" style="margin-top: 15px" class="btn btn-primary legitRipple">{{$resultM->nm_mapel}} <i class="icon-arrow-right14 position-right"></i></button></a>
																@endif
															@endforeach
														</div>
														@endforeach
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="modal-footer">
								<button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
								<!-- <button type="button" class="btn btn-primary">Save changes</button> -->
							</div>
						</div>
					</div>
				</div>

	<!-- Footer -->
	<!-- <div class="footer text-muted">
		&copy; 2015. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
	</div> -->
	<!-- /footer -->

</body>
</html>
