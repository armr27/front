<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->
<head>
	<base href="../">
	<title>Dumai Berkhidmat</title>
	<meta charset="utf-8" />
	<meta name="description"
		content="Check out all the features of the Start admin panel. A large number of templates, components and widgets." />
	<meta name="keywords"
		content="Start, bootstrap, bootstrap 5, admin themes, free admin themes, bootstrap admin, bootstrap dashboard, html admin theme, html template" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="Start - Bootstrap 5 HTML Multipurpose Admin Dashboard Template" />
	<meta property="og:url"
		content="https://themes.getbootstrap.com/product/start-multipurpose-admin-dashboard-theme/" />
	<meta property="og:site_name" content="Keenthemes | Start" />
	<link rel="canonical" href="https://preview.keenthemes.com/start" />
	<link rel="shortcut icon" href="<?= base_url('assets/') ?>assets/media/logos/logo.png" />
	<!--begin::Fonts-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
	<!--end::Fonts-->
	<!--begin::Global Stylesheets Bundle(used by all pages)-->
	<link href="<?= base_url('assets/') ?>assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url('assets/') ?>assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
	<style>
		.sidebarDash {
			width: 450px;
		}

		#kt_wrapper {
			margin-right: 430px;
		}
	</style>
	<!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" data-sidebar="on" class="header-fixed header-tablet-and-mobile-fixed sidebar-enabled">
	<!--begin::Main-->
	<!--begin::Root-->
	<div class="d-flex flex-column flex-root">
		<!--begin::Page-->
		<div class="page d-flex flex-row flex-column-fluid">
			<!--begin::Wrapper-->
			<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
				<!--begin::Header-->
				<div id="kt_header" class="header" data-kt-sticky="true" data-kt-sticky-name="header"
					data-kt-sticky-offset="{default: '200px', lg: '300px'}">
					<!--begin::Container-->
					<div class="container-xxl d-flex align-items-stretch justify-content-between">
						<!--begin::Left-->
						<div class="d-flex align-items-center">
							<!--begin::Mega Menu Toggler-->
							<button class="btn btn-icon btn-accent me-2 me-lg-6" id="kt_mega_menu_toggle"
								data-bs-toggle="modal" data-bs-target="#kt_mega_menu_modal">
								<!--begin::Svg Icon | path: icons/duotune/general/gen059.svg-->
								<span class="svg-icon svg-icon-3">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15"
										fill="none">
										<rect y="6" width="16" height="3" rx="1.5" fill="black" />
										<rect opacity="0.3" y="12" width="8" height="3" rx="1.5" fill="black" />
										<rect opacity="0.3" width="12" height="3" rx="1.5" fill="black" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</button>
							<!--end::Mega Menu Toggler-->

						</div>
						<!--end::Left-->
						<!--begin::Right-->
						<div class="d-flex align-items-center pe-7">
							<!--begin::User-->
							<div class="ms-1 ms-lg-6">
								<!--begin::Toggle-->
								<div class="btn btn-icon btn-sm btn-active-bg-accent" data-kt-menu-trigger="click"
									data-kt-menu-placement="bottom-end" id="kt_header_user_menu_toggle">
									<!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
									<span class="svg-icon svg-icon-1 svg-icon-dark">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
											viewBox="0 0 24 24" fill="none">
											<path
												d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z"
												fill="black" />
											<rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4" fill="black" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</div>
								<!--begin::Menu-->
								<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold w-300px"
									data-kt-menu="true">
									<div class="menu-content fw-bold d-flex align-items-center bgi-no-repeat bgi-position-y-top rounded-top"
										style="background-image:url('<?= base_url('assets/') ?>assets/media//misc/dropdown-header-bg.jpg')">
										<div class="symbol symbol-45px mx-5 py-5">
											<span class="symbol-label bg-primary align-items-end">
												<img alt="Logo" src="<?= base_url('assets/') ?>assets/media/svg/avatars/001-boy.svg"
													class="mh-35px" />
											</span>
										</div>
										<div class="">
											<span class="text-white fw-bolder fs-4">Hello, Administrator</span>
											<span class="text-white fw-bold fs-7 d-block">Superadmin Dumai
												Berkhidmat</span>
										</div>
									</div>
									<!--begin::Row-->
									<div class="row row-cols-1 g-0">
										<a href="aplication/login.html"
											class="col text-center py-10 btn btn-active-color-primary rounded-0">
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr077.svg-->
											<span class="svg-icon svg-icon-3x me-n1">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
													viewBox="0 0 24 24" fill="none">
													<rect opacity="0.3" x="4" y="11" width="12" height="2" rx="1"
														fill="black" />
													<path
														d="M5.86875 11.6927L7.62435 10.2297C8.09457 9.83785 8.12683 9.12683 7.69401 8.69401C7.3043 8.3043 6.67836 8.28591 6.26643 8.65206L3.34084 11.2526C2.89332 11.6504 2.89332 12.3496 3.34084 12.7474L6.26643 15.3479C6.67836 15.7141 7.3043 15.6957 7.69401 15.306C8.12683 14.8732 8.09458 14.1621 7.62435 13.7703L5.86875 12.3073C5.67684 12.1474 5.67684 11.8526 5.86875 11.6927Z"
														fill="black" />
													<path
														d="M8 5V6C8 6.55228 8.44772 7 9 7C9.55228 7 10 6.55228 10 6C10 5.44772 10.4477 5 11 5H18C18.5523 5 19 5.44772 19 6V18C19 18.5523 18.5523 19 18 19H11C10.4477 19 10 18.5523 10 18C10 17.4477 9.55228 17 9 17C8.44772 17 8 17.4477 8 18V19C8 20.1046 8.89543 21 10 21H19C20.1046 21 21 20.1046 21 19V5C21 3.89543 20.1046 3 19 3H10C8.89543 3 8 3.89543 8 5Z"
														fill="#C4C4C4" />
												</svg>
											</span>
											<!--end::Svg Icon-->
											<span class="fw-bolder fs-6 d-block pt-3">Sign Out</span>
										</a>
									</div>
									<!--end::Row-->
								</div>
								<!--end::Menu-->
							</div>
							<!--end::User-->
							<!--begin::Notifications-->
							<div class="ms-1 ms-lg-6">
								<!--begin::Dropdown-->
								<button class="btn btn-icon btn-sm btn-light-danger fw-bolder pulse pulse-danger"
									data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
									id="kt_activities_toggle">
									<span class="position-absolute fs-6">4</span>
									<span class="pulse-ring"></span>
								</button>
								<!--begin::Menu-->
								<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded fw-bold menu-title-gray-800 menu-hover-bg menu-state-title-primary w-250px w-md-300px"
									data-kt-menu="true">
									<div class="menu-item mx-3">
										<div class="menu-content fs-6 text-dark fw-bolder py-6">4 New Notifications
										</div>
									</div>
									<div class="separator mb-3"></div>
									<div class="menu-item mx-3">
										<a href="#" class="menu-link px-4 py-3">
											<div class="symbol symbol-35px">
												<span class="symbol-label bg-light-info">
													<!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
													<span class="svg-icon svg-icon-3 svg-icon-info">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
															viewBox="0 0 24 24" fill="none">
															<path opacity="0.3"
																d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z"
																fill="black" />
															<path
																d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z"
																fill="black" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</span>
											</div>
											<div class="ps-4">
												<span class="menu-title fw-bold mb-1">Pengaduan Baru Ditambahkan</span>
												<span class="text-muted fw-bold d-block fs-7">3 Hours ago</span>
											</div>
										</a>
									</div>
									<div class="menu-item mx-3">
										<a href="#" class="menu-link px-4 py-3">
											<div class="symbol symbol-35px">
												<span class="symbol-label bg-light-warning">
													<!--begin::Svg Icon | path: icons/duotune/communication/com004.svg-->
													<span class="svg-icon svg-icon-3 svg-icon-warning">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
															viewBox="0 0 24 24" fill="none">
															<path opacity="0.3"
																d="M14 3V20H2V3C2 2.4 2.4 2 3 2H13C13.6 2 14 2.4 14 3ZM11 13V11C11 9.7 10.2 8.59995 9 8.19995V7C9 6.4 8.6 6 8 6C7.4 6 7 6.4 7 7V8.19995C5.8 8.59995 5 9.7 5 11V13C5 13.6 4.6 14 4 14V15C4 15.6 4.4 16 5 16H11C11.6 16 12 15.6 12 15V14C11.4 14 11 13.6 11 13Z"
																fill="black" />
															<path
																d="M2 20H14V21C14 21.6 13.6 22 13 22H3C2.4 22 2 21.6 2 21V20ZM9 3V2H7V3C7 3.6 7.4 4 8 4C8.6 4 9 3.6 9 3ZM6.5 16C6.5 16.8 7.2 17.5 8 17.5C8.8 17.5 9.5 16.8 9.5 16H6.5ZM21.7 12C21.7 11.4 21.3 11 20.7 11H17.6C17 11 16.6 11.4 16.6 12C16.6 12.6 17 13 17.6 13H20.7C21.2 13 21.7 12.6 21.7 12ZM17 8C16.6 8 16.2 7.80002 16.1 7.40002C15.9 6.90002 16.1 6.29998 16.6 6.09998L19.1 5C19.6 4.8 20.2 5 20.4 5.5C20.6 6 20.4 6.60005 19.9 6.80005L17.4 7.90002C17.3 8.00002 17.1 8 17 8ZM19.5 19.1C19.4 19.1 19.2 19.1 19.1 19L16.6 17.9C16.1 17.7 15.9 17.1 16.1 16.6C16.3 16.1 16.9 15.9 17.4 16.1L19.9 17.2C20.4 17.4 20.6 18 20.4 18.5C20.2 18.9 19.9 19.1 19.5 19.1Z"
																fill="black" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</span>
											</div>
											<div class="ps-4">
												<span class="menu-title fw-bold mb-1">Pengembalian Penanganan Pengaduan
													Oleh OPD</span>
												<span class="text-muted fw-bold d-block fs-7">5 Hours ago</span>
											</div>
										</a>
									</div>
									<div class="menu-item mx-3">
										<a href="#" class="menu-link px-4 py-3">
											<div class="symbol symbol-35px">
												<span class="symbol-label bg-light-primary">
													<!--begin::Svg Icon | path: icons/duotune/communication/com012.svg-->
													<span class="svg-icon svg-icon-3 svg-icon-primary">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
															viewBox="0 0 24 24" fill="none">
															<path opacity="0.3"
																d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z"
																fill="black" />
															<rect x="6" y="12" width="7" height="2" rx="1"
																fill="black" />
															<rect x="6" y="7" width="12" height="2" rx="1"
																fill="black" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</span>
											</div>
											<div class="ps-4">
												<span class="menu-title fw-bold mb-1">Penerusan Pengaduan
													Successful</span>
												<span class="text-muted fw-bold d-block fs-7">A Day ago</span>
											</div>
										</a>
									</div>
									<div class="menu-item mx-3">
										<a href="#" class="menu-link px-4 py-3">
											<div class="symbol symbol-35px">
												<span class="symbol-label bg-light-danger">
													<!--begin::Svg Icon | path: icons/duotune/coding/cod008.svg-->
													<span class="svg-icon svg-icon-3 svg-icon-danger">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
															viewBox="0 0 24 24" fill="none">
															<path
																d="M11.2166 8.50002L10.5166 7.80007C10.1166 7.40007 10.1166 6.80005 10.5166 6.40005L13.4166 3.50002C15.5166 1.40002 18.9166 1.50005 20.8166 3.90005C22.5166 5.90005 22.2166 8.90007 20.3166 10.8001L17.5166 13.6C17.1166 14 16.5166 14 16.1166 13.6L15.4166 12.9C15.0166 12.5 15.0166 11.9 15.4166 11.5L18.3166 8.6C19.2166 7.7 19.1166 6.30002 18.0166 5.50002C17.2166 4.90002 16.0166 5.10007 15.3166 5.80007L12.4166 8.69997C12.2166 8.89997 11.6166 8.90002 11.2166 8.50002ZM11.2166 15.6L8.51659 18.3001C7.81659 19.0001 6.71658 19.2 5.81658 18.6C4.81658 17.9 4.71659 16.4 5.51659 15.5L8.31658 12.7C8.71658 12.3 8.71658 11.7001 8.31658 11.3001L7.6166 10.6C7.2166 10.2 6.6166 10.2 6.2166 10.6L3.6166 13.2C1.7166 15.1 1.4166 18.1 3.1166 20.1C5.0166 22.4 8.51659 22.5 10.5166 20.5L13.3166 17.7C13.7166 17.3 13.7166 16.7001 13.3166 16.3001L12.6166 15.6C12.3166 15.2 11.6166 15.2 11.2166 15.6Z"
																fill="black" />
															<path opacity="0.3"
																d="M5.0166 9L2.81659 8.40002C2.31659 8.30002 2.0166 7.79995 2.1166 7.19995L2.31659 5.90002C2.41659 5.20002 3.21659 4.89995 3.81659 5.19995L6.0166 6.40002C6.4166 6.60002 6.6166 7.09998 6.5166 7.59998L6.31659 8.30005C6.11659 8.80005 5.5166 9.1 5.0166 9ZM8.41659 5.69995H8.6166C9.1166 5.69995 9.5166 5.30005 9.5166 4.80005L9.6166 3.09998C9.6166 2.49998 9.2166 2 8.5166 2H7.81659C7.21659 2 6.71659 2.59995 6.91659 3.19995L7.31659 4.90002C7.41659 5.40002 7.91659 5.69995 8.41659 5.69995ZM14.6166 18.2L15.1166 21.3C15.2166 21.8 15.7166 22.2 16.2166 22L17.6166 21.6C18.1166 21.4 18.4166 20.8 18.1166 20.3L16.7166 17.5C16.5166 17.1 16.1166 16.9 15.7166 17L15.2166 17.1C14.8166 17.3 14.5166 17.7 14.6166 18.2ZM18.4166 16.3L19.8166 17.2C20.2166 17.5 20.8166 17.3 21.0166 16.8L21.3166 15.9C21.5166 15.4 21.1166 14.8 20.5166 14.8H18.8166C18.0166 14.8 17.7166 15.9 18.4166 16.3Z"
																fill="black" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</span>
											</div>
											<div class="ps-4">
												<span class="menu-title fw-bold mb-1">32 Updete Baru Dari OPD</span>
												<span class="text-muted fw-bold d-block fs-7">2 Day ago</span>
											</div>
										</a>
									</div>
									<div class="separator mt-3"></div>
									<div class="menu-item mx-2">
										<div class="menu-content py-5">
											<a href="#" class="btn btn-primary fw-bolder me-2 px-5">Report</a>
											<a href="#" class="btn btn-light fw-bolder px-5">Reset</a>
										</div>
									</div>
								</div>
								<!--end::Menu-->
								<!--end::Dropdown-->
							</div>
							<!--end::Notifications-->
							<!--begin::Aside Toggler-->
							<!--end::Aside Toggler-->
							<!--begin::Sidebar Toggler-->
							<button class="btn btn-icon btn-sm btn-active-bg-accent d-lg-none ms-1 ms-lg-6"
								id="kt_sidebar_toggler">
								<!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
								<span class="svg-icon svg-icon-1 svg-icon-dark">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
										fill="none">
										<path
											d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z"
											fill="black" />
										<path opacity="0.3"
											d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z"
											fill="black" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</button>
							<!--end::Sidebar Toggler-->
						</div>
						<!--end::Right-->
					</div>
					<!--end::Container-->
				</div>
				<!--end::Header-->