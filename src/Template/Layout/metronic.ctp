<?php
/**
 * @var \App\View\AppView $this
 */
?>
<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->
<head>
    <base href="/">
    <meta charset="utf-8"/>
    <title>Persona | <?= $this->fetch('title') ?></title>
    <meta name="description" content="Page with empty content"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"/>
    <!--end::Fonts-->

    <link href="/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css"/>

    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/css/style.bundle.css" rel="stylesheet" type="text/css"/>
    <!--end::Global Theme Styles-->

    <!--begin::Layout Themes(used by all pages)-->
    <link href="/assets/css/themes/layout/header/base/light.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/css/themes/layout/header/menu/light.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/css/themes/layout/brand/dark.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/css/themes/layout/aside/dark.css" rel="stylesheet" type="text/css"/>
    <!--end::Layout Themes-->

<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

    <link rel="shortcut icon" href="/assets/media/logos/favicon.ico"/>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<!--end::Head-->

<!--begin::Body-->
<body id="kt_body"
      class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">

<!--begin::Main-->
<!--begin::Header Mobile-->
<div id="kt_header_mobile" class="header-mobile align-items-center  header-mobile-fixed ">
    <!--begin::Logo-->
    <a href="index.html">
        <img alt="Logo" src="/assets/media/logos/logo-light.png"/>
    </a>
    <!--end::Logo-->

    <!--begin::Toolbar-->
    <div class="d-flex align-items-center">
        <!--begin::Aside Mobile Toggle-->
        <button class="btn p-0 burger-icon burger-icon-left" id="kt_aside_mobile_toggle">
            <span></span>
        </button>
        <!--end::Aside Mobile Toggle-->

        <!--begin::Header Menu Mobile Toggle-->
        <button class="btn p-0 burger-icon ml-4" id="kt_header_mobile_toggle">
            <span></span>
        </button>
        <!--end::Header Menu Mobile Toggle-->

        <!--begin::Topbar Mobile Toggle-->
        <button class="btn btn-hover-text-primary p-0 ml-2" id="kt_header_mobile_topbar_toggle">
			<span class="svg-icon svg-icon-xl">
				<!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
				<svg
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                    height="24px" viewBox="0 0 24 24" version="1.1">
				    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
				        <polygon points="0 0 24 0 24 24 0 24"/>
				        <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z"
				              fill="#000000" fill-rule="nonzero" opacity="0.3"/>
				        <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z"
				              fill="#000000" fill-rule="nonzero"/>
				    </g>
				</svg>
				<!--end::Svg Icon-->
			</span>
		</button>
        <!--end::Topbar Mobile Toggle-->
    </div>
    <!--end::Toolbar-->
</div>
<!--end::Header Mobile-->
<div class="d-flex flex-column flex-root">
    <!--begin::Page-->
    <div class="d-flex flex-row flex-column-fluid page">

        <!--begin::Aside-->
        <div class="aside aside-left  aside-fixed  d-flex flex-column flex-row-auto" id="kt_aside">
            <!--begin::Brand-->
            <div class="brand flex-column-auto " id="kt_brand">
                <!--begin::Logo-->
                <a href="index.html" class="brand-logo">
                    <img alt="Logo" src="/assets/media/logos/logo-light.png"/>
                </a>
                <!--end::Logo-->

                <!--begin::Toggle-->
                <button class="brand-toggle btn btn-sm px-0" id="kt_aside_toggle">
					<span class="svg-icon svg-icon svg-icon-xl">
						<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-double-left.svg-->
						<svg
	                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
	                        height="24px" viewBox="0 0 24 24" version="1.1">
						    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
						        <polygon points="0 0 24 0 24 24 0 24"/>
						        <path d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z"
						              fill="#000000" fill-rule="nonzero"
						              transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999) "/>
						        <path d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z"
						              fill="#000000" fill-rule="nonzero" opacity="0.3"
						              transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999) "/>
						    </g>
						</svg><!--end::Svg Icon-->
					</span>
				</button>
                <!--end::Toggle-->
            </div>
            <!--end::Brand-->

            <!--begin::Aside Menu-->
            <div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">

                <!--begin::Menu Container-->
                <div id="kt_aside_menu" class="aside-menu my-4 " data-menu-vertical="1" data-menu-scroll="1"
                     data-menu-dropdown-timeout="500">
                    <!--begin::Menu Nav-->
                    <ul class="menu-nav ">
                        <li class="menu-item " aria-haspopup="true"><a href="index.html" class="menu-link "><i
                                class="menu-icon flaticon-home"></i><span class="menu-text">Dashboard</span></a></li>
                        <li class="menu-section ">
                            <h4 class="menu-text">Custom</h4>
                		</li>
                	</ul>
                	<!--end::Menu Nav-->
	            </div>
	            <!--end::Menu Container-->
	        </div>
	        <!--end::Aside Menu-->
	    </div>
	    <!--end::Aside-->

    <!--begin::Wrapper-->
    <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
        <!--begin::Header-->
        <div id="kt_header" class="header  header-fixed ">
            <!--begin::Container-->
            <div class=" container-fluid  d-flex align-items-stretch justify-content-between">
                <!--begin::Header Menu Wrapper-->
                <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
                    <!--begin::Header Menu-->
                    <div id="kt_header_menu" class="header-menu header-menu-mobile  header-menu-layout-default ">
                        <!--begin::Header Nav-->
                        <ul class="menu-nav ">
                            <li class="menu-item  menu-item-submenu menu-item-rel menu-item-active"
                                data-menu-toggle="click" aria-haspopup="true"><a href="javascript:;"
                                                                                 class="menu-link menu-toggle"><span
                                    class="menu-text">Pages</span><i class="menu-arrow"></i></a>
                                <div class="menu-submenu menu-submenu-classic menu-submenu-left">
                                    <ul class="menu-subnav">
                                        <li class="menu-item " aria-haspopup="true"><a href="index.html" class="menu-link ">
                                        	<span class="svg-icon menu-icon">
                                                <!--begin::Svg Icon | path:assets/media/svg/icons/Clothes/Briefcase.svg-->
                                                <svg
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
                                                viewBox="0 0 24 24" version="1.1">
												    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												        <rect x="0" y="0" width="24" height="24"/>
												        <path d="M5.84026576,8 L18.1597342,8 C19.1999115,8 20.0664437,8.79732479 20.1528258,9.83390904 L20.8194924,17.833909 C20.9112219,18.9346631 20.0932459,19.901362 18.9924919,19.9930915 C18.9372479,19.9976952 18.8818364,20 18.8264009,20 L5.1735991,20 C4.0690296,20 3.1735991,19.1045695 3.1735991,18 C3.1735991,17.9445645 3.17590391,17.889153 3.18050758,17.833909 L3.84717425,9.83390904 C3.93355627,8.79732479 4.80008849,8 5.84026576,8 Z M10.5,10 C10.2238576,10 10,10.2238576 10,10.5 L10,11.5 C10,11.7761424 10.2238576,12 10.5,12 L13.5,12 C13.7761424,12 14,11.7761424 14,11.5 L14,10.5 C14,10.2238576 13.7761424,10 13.5,10 L10.5,10 Z"
												              fill="#000000"/>
												        <path d="M10,8 L8,8 L8,7 C8,5.34314575 9.34314575,4 11,4 L13,4 C14.6568542,4 16,5.34314575 16,7 L16,8 L14,8 L14,7 C14,6.44771525 13.5522847,6 13,6 L11,6 C10.4477153,6 10,6.44771525 10,7 L10,8 Z"
												              fill="#000000" fill-rule="nonzero" opacity="0.3"/>
												    </g>
												</svg><!--end::Svg Icon-->
											</span>
											<span class="menu-text">My Account</span></a>
										</li>
                                    </ul>
                                </div>
                            </li>


                            <li class="menu-item  menu-item-submenu" data-menu-toggle="click" aria-haspopup="true"><a
                                    href="javascript:;" class="menu-link menu-toggle"><span
                                    class="menu-text">Features</span><i class="menu-arrow"></i></a>
                                <div class="menu-submenu  menu-submenu-fixed menu-submenu-left" style="width:1000px">
                                    <div class="menu-subnav">
                                        <ul class="menu-content">
                                            <li class="menu-item "><h3 class="menu-heading menu-toggle"><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">Task Reports</span><i class="menu-arrow"></i></h3>
                                                <ul class="menu-inner">
                                                    <li class="menu-item " aria-haspopup="true">
                                                    	<a href="javascript:;" class="menu-link "><span
                                                            class="svg-icon menu-icon">
                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Clothes/Briefcase.svg-->
                                                            <svg
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                            height="24px" viewBox="0 0 24 24" version="1.1">
															    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
															        <rect x="0" y="0" width="24" height="24"/>
															        <path d="M5.84026576,8 L18.1597342,8 C19.1999115,8 20.0664437,8.79732479 20.1528258,9.83390904 L20.8194924,17.833909 C20.9112219,18.9346631 20.0932459,19.901362 18.9924919,19.9930915 C18.9372479,19.9976952 18.8818364,20 18.8264009,20 L5.1735991,20 C4.0690296,20 3.1735991,19.1045695 3.1735991,18 C3.1735991,17.9445645 3.17590391,17.889153 3.18050758,17.833909 L3.84717425,9.83390904 C3.93355627,8.79732479 4.80008849,8 5.84026576,8 Z M10.5,10 C10.2238576,10 10,10.2238576 10,10.5 L10,11.5 C10,11.7761424 10.2238576,12 10.5,12 L13.5,12 C13.7761424,12 14,11.7761424 14,11.5 L14,10.5 C14,10.2238576 13.7761424,10 13.5,10 L10.5,10 Z"
															              fill="#000000"/>
															        <path d="M10,8 L8,8 L8,7 C8,5.34314575 9.34314575,4 11,4 L13,4 C14.6568542,4 16,5.34314575 16,7 L16,8 L14,8 L14,7 C14,6.44771525 13.5522847,6 13,6 L11,6 C10.4477153,6 10,6.44771525 10,7 L10,8 Z"
															              fill="#000000" fill-rule="nonzero" opacity="0.3"/>
															    </g>
															</svg><!--end::Svg Icon-->
															</span><span class="menu-text">Latest Tasks</span></a>
													</li>
                                                </ul>
                                    
                                            <li class="menu-item "><h3 class="menu-heading menu-toggle"><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">Profit Margins</span><i class="menu-arrow"></i>
	                                            </h3>
	                                                <ul class="menu-inner">
	                                                    <li class="menu-item " aria-haspopup="true"><a href="javascript:;"
	                                                                                                   class="menu-link "><i
	                                                            class="menu-bullet menu-bullet-line"><span></span></i><span
	                                                            class="menu-text">Overall Profits</span></a></li>
	                                                   
	                                                </ul>
                                            </li>
                                            <li class="menu-item "><h3 class="menu-heading menu-toggle"><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">Staff Management</span><i class="menu-arrow"></i>
	                                            </h3>
	                                                <ul class="menu-inner">
	                                                    <li class="menu-item " aria-haspopup="true"><a href="javascript:;"
	                                                                                                   class="menu-link "><i
	                                                            class="menu-bullet menu-bullet-dot"><span></span></i><span
	                                                            class="menu-text">Top Management</span></a></li>
	                                                    
	                                                </ul>
                                            </li>
                                            <li class="menu-item "><h3 class="menu-heading menu-toggle"><i
                                                    class="menu-bullet menu-bullet-dot"><span></span></i><span
                                                    class="menu-text">Tools</span><i class="menu-arrow"></i></h3>
                                                <ul class="menu-inner">
                                                    <li class="menu-item " aria-haspopup="true"><a href="javascript:;"
                                                                                                   class="menu-link "><span
                                                            class="menu-text">Analytical Reports</span></a></li>
                                                    
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <!--end::Header Nav-->
                    </div>
                    <!--end::Header Menu-->
                </div>
                <!--end::Header Menu Wrapper-->

                <!--begin::Topbar-->
                <div class="topbar">
                    <!--begin::Search-->
                    <div class="dropdown" id="kt_quick_search_toggle">
                        <!--begin::Toggle-->
                        <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
                            <div class="btn btn-icon btn-clean btn-lg btn-dropdown mr-1">
		        				<span class="svg-icon svg-icon-xl svg-icon-primary">
		        					<!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg-->
		        					<svg
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									        <rect x="0" y="0" width="24" height="24"/>
									        <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
									              fill="#000000" fill-rule="nonzero" opacity="0.3"/>
									        <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
									              fill="#000000" fill-rule="nonzero"/>
									    </g>
									</svg><!--end::Svg Icon-->
								</span>
							</div>
                        </div>
                        <!--end::Toggle-->

                        <!--begin::Dropdown-->
                        <div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg">
                            <div class="quick-search quick-search-dropdown" id="kt_quick_search_dropdown">
                                <!--begin:Form-->
                                <form method="get" class="quick-search-form">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
							                <span class="input-group-text">
							                    <span class="svg-icon svg-icon-lg">
							                    	<!--begin::Svg Icon | path:assets/media/svg/icons/General/Search.svg-->
							                    	<svg
							                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
							                            height="24px" viewBox="0 0 24 24" version="1.1">
													    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													        <rect x="0" y="0" width="24" height="24"/>
													        <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z"
													              fill="#000000" fill-rule="nonzero" opacity="0.3"/>
													        <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z"
													              fill="#000000" fill-rule="nonzero"/>
													    </g>
													</svg><!--end::Svg Icon-->
												</span>
											</span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Search..."/>
                                        <div class="input-group-append">
							                <span class="input-group-text">
							                    <i class="quick-search-close ki ki-close icon-sm text-muted"></i>
							                </span>
                                        </div>
                                    </div>
                                </form>
                                <!--end::Form-->

                                <!--begin::Scroll-->
                                <div class="quick-search-wrapper scroll" data-scroll="true" data-height="325"
                                     data-mobile-height="200">
                                </div>
                                <!--end::Scroll-->
                            </div>
                        </div>
                        <!--end::Dropdown-->

                    </div>
                    <!--end::Search-->

                   
                    <!--begin::User-->
                    <div class="topbar-item">
                        <div class="btn btn-icon btn-icon-mobile w-auto btn-clean d-flex align-items-center btn-lg px-2"
                             id="kt_quick_user_toggle">
                            <span class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">Hi,</span>
                            <span class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3">Sean</span>
                            <span class="symbol symbol-lg-35 symbol-25 symbol-light-success">
		                        <span class="symbol-label font-size-h5 font-weight-bold">S</span>
		                    </span>
                        </div>
                    </div>
                    <!--end::User-->
                </div>
                <!--end::Topbar-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Header-->


        <!--begin::Content-->
        <div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
            <!--begin::Subheader-->
            <div class="subheader py-2 py-lg-6  subheader-solid " id="kt_subheader">
                <div class=" container-fluid  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                    <!--begin::Info-->
                    <div class="d-flex align-items-center flex-wrap mr-1">

                        <!--begin::Page Heading-->
                        <div class="d-flex align-items-baseline flex-wrap mr-5">
                            <!--begin::Page Title-->
                            <h5 class="text-dark font-weight-bold my-1 mr-5">
                                <?= $this->fetch('title') ?>
                            </h5>
                            <!--end::Page Title-->

                            <!--begin::Breadcrumb-->
                            <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
                                <li class="breadcrumb-item">
                                    <a href="" class="text-muted">
                                        General </a>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="" class="text-muted">
                                        Empty Page </a>
                                </li>
                            </ul>
                            <!--end::Breadcrumb-->
                        </div>
                        <!--end::Page Heading-->
                    </div>
                    <!--end::Info-->

                    <?= $this->fetch('asa_nav'); ?>

                </div>
            </div>
            <!--end::Subheader-->

            <!--begin::Entry-->
            <div class="d-flex flex-column-fluid">
                <!--begin::Container-->
                <div class=" container ">
                    <?= $this->fetch('content') ?>
                </div>
                <!--end::Container-->
            </div>
            <!--end::Entry-->
        </div>
        <!--end::Content-->


        <!--begin::Footer-->
        <div class="footer bg-white py-4 d-flex flex-lg-column " id="kt_footer">
            <!--begin::Container-->
            <div class=" container-fluid  d-flex flex-column flex-md-row align-items-center justify-content-between">
                <!--begin::Copyright-->
                <div class="text-dark order-2 order-md-1">
                    <span class="text-muted font-weight-bold mr-2">2020 &copy;</span>
                    <a href="http://keenthemes.com/metronic" target="_blank" class="text-dark-75 text-hover-primary">ASA</a>
                </div>
                <!--end::Copyright-->

                <!--begin::Nav-->
                <div class="nav nav-dark">
                    <a href="http://keenthemes.com/metronic" target="_blank" class="nav-link pl-0 pr-0">Contact</a>
                </div>
                <!--end::Nav-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::Footer-->
    </div>
    <!--end::Wrapper-->
</div>
<!--end::Page-->
</div>
<!--end::Main-->


<!-- begin::User Panel-->
<div id="kt_quick_user" class="offcanvas offcanvas-right p-10">
    <!--begin::Header-->
    <div class="offcanvas-header d-flex align-items-center justify-content-between pb-5">
        <h3 class="font-weight-bold m-0">
            User Profile
            <small class="text-muted font-size-sm ml-2">12 messages</small>
        </h3>
        <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_user_close">
            <i class="ki ki-close icon-xs text-muted"></i>
        </a>
    </div>
    <!--end::Header-->

    <!--begin::Content-->
    <div class="offcanvas-content pr-5 mr-n5">
        <!--begin::Header-->
        <div class="d-flex align-items-center mt-5">
            <div class="symbol symbol-100 mr-5">
                <div class="symbol-label" style="background-image:url('assets/media/users/300_21.jpg')"></div>
                <i class="symbol-badge bg-success"></i>
            </div>
            <div class="d-flex flex-column">
                <a href="#" class="font-weight-bold font-size-h5 text-dark-75 text-hover-primary">
                    James Jones
                </a>
                <div class="text-muted mt-1">
                    Application Developer
                </div>
                <div class="navi mt-2">
                    <a href="#" class="navi-item">
                        <span class="navi-link p-0 pb-2">
                            <span class="navi-icon mr-1">
								<span class="svg-icon svg-icon-lg svg-icon-primary">
									<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-notification.svg-->
									<svg
                                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									        <rect x="0" y="0" width="24" height="24"/>
									        <path d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z"
									              fill="#000000"/>
									        <circle fill="#000000" opacity="0.3" cx="19.5" cy="17.5" r="2.5"/>
									    </g>
									</svg><!--end::Svg Icon-->
								</span>
							</span>
                            <span class="navi-text text-muted text-hover-primary">jm@softplus.com</span>
                        </span>
                    </a>

                    <a href="#" class="btn btn-sm btn-light-primary font-weight-bolder py-2 px-5">Sign Out</a>
                </div>
            </div>
        </div>
        <!--end::Header-->

        <!--begin::Separator-->
        <div class="separator separator-dashed mt-8 mb-5"></div>
        <!--end::Separator-->

        <!--begin::Nav-->
        <div class="navi navi-spacer-x-0 p-0">
            <!--begin::Item-->
            <a href="custom/apps/user/profile-1/personal-information.html" class="navi-item">
                <div class="navi-link">
                    <div class="symbol symbol-40 bg-light mr-3">
                        <div class="symbol-label">
							<span class="svg-icon svg-icon-md svg-icon-success">
								<!--begin::Svg Icon | path:assets/media/svg/icons/General/Notification2.svg-->
								<svg
                                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
								    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								        <rect x="0" y="0" width="24" height="24"/>
								        <path d="M13.2070325,4 C13.0721672,4.47683179 13,4.97998812 13,5.5 C13,8.53756612 15.4624339,11 18.5,11 C19.0200119,11 19.5231682,10.9278328 20,10.7929675 L20,17 C20,18.6568542 18.6568542,20 17,20 L7,20 C5.34314575,20 4,18.6568542 4,17 L4,7 C4,5.34314575 5.34314575,4 7,4 L13.2070325,4 Z"
								              fill="#000000"/>
								        <circle fill="#000000" opacity="0.3" cx="18.5" cy="5.5" r="2.5"/>
								    </g>
								</svg><!--end::Svg Icon-->
							</span>
						</div>
                    </div>
                    <div class="navi-text">
                        <div class="font-weight-bold">
                            My Profile
                        </div>
                        <div class="text-muted">
                            Account settings and more
                            <span class="label label-light-danger label-inline font-weight-bold">update</span>
                        </div>
                    </div>
                </div>
            </a>
            <!--end:Item-->

            <!--begin::Item-->
            <a href="custom/apps/user/profile-3.html" class="navi-item">
                <div class="navi-link">
                    <div class="symbol symbol-40 bg-light mr-3">
                        <div class="symbol-label">
 						   <span class="svg-icon svg-icon-md svg-icon-warning">
 						   	<!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Chart-bar1.svg-->
 						   	<svg
                                   xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                   width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
								    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
								        <rect x="0" y="0" width="24" height="24"/>
								        <rect fill="#000000" opacity="0.3" x="12" y="4" width="3" height="13" rx="1.5"/>
								        <rect fill="#000000" opacity="0.3" x="7" y="9" width="3" height="8" rx="1.5"/>
								        <path d="M5,19 L20,19 C20.5522847,19 21,19.4477153 21,20 C21,20.5522847 20.5522847,21 20,21 L4,21 C3.44771525,21 3,20.5522847 3,20 L3,4 C3,3.44771525 3.44771525,3 4,3 C4.55228475,3 5,3.44771525 5,4 L5,19 Z"
								              fill="#000000" fill-rule="nonzero"/>
								        <rect fill="#000000" opacity="0.3" x="17" y="11" width="3" height="6" rx="1.5"/>
								    </g>
							</svg><!--end::Svg Icon-->
							</span>
						</div>
                    </div>
                    <div class="navi-text">
                        <div class="font-weight-bold">
                            My Messages
                        </div>
                        <div class="text-muted">
                            Inbox and tasks
                        </div>
                    </div>
                </div>
            </a>
            <!--end:Item-->
            
        </div>
        <!--end::Nav-->

        <!--begin::Separator-->
        <div class="separator separator-dashed my-7"></div>
        <!--end::Separator-->

    </div>
    <!--end::Content-->
</div>
<!-- end::User Panel-->



<!--begin::Scrolltop-->
<div id="kt_scrolltop" class="scrolltop">
	<span class="svg-icon">
		<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Up-2.svg-->
		<svg
            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px"
            viewBox="0 0 24 24" version="1.1">
			<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
			    <polygon points="0 0 24 0 24 24 0 24"/>
			    <rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10" rx="1"/>
			    <path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z"
			          fill="#000000" fill-rule="nonzero"/>
			</g>
		</svg><!--end::Svg Icon-->
	</span>
</div>
<!--end::Scrolltop-->


<script>var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";</script>
<!--begin::Global Config(global config for global JS scripts)-->
<script>
    var KTAppSettings = {
        "breakpoints": {
            "sm": 576,
            "md": 768,
            "lg": 992,
            "xl": 1200,
            "xxl": 1400
        },
        "colors": {
            "theme": {
                "base": {
                    "white": "#ffffff",
                    "primary": "#3699FF",
                    "secondary": "#E5EAEE",
                    "success": "#1BC5BD",
                    "info": "#8950FC",
                    "warning": "#FFA800",
                    "danger": "#F64E60",
                    "light": "#E4E6EF",
                    "dark": "#181C32"
                },
                "light": {
                    "white": "#ffffff",
                    "primary": "#E1F0FF",
                    "secondary": "#EBEDF3",
                    "success": "#C9F7F5",
                    "info": "#EEE5FF",
                    "warning": "#FFF4DE",
                    "danger": "#FFE2E5",
                    "light": "#F3F6F9",
                    "dark": "#D6D6E0"
                },
                "inverse": {
                    "white": "#ffffff",
                    "primary": "#ffffff",
                    "secondary": "#3F4254",
                    "success": "#ffffff",
                    "info": "#ffffff",
                    "warning": "#ffffff",
                    "danger": "#ffffff",
                    "light": "#464E5F",
                    "dark": "#ffffff"
                }
            },
            "gray": {
                "gray-100": "#F3F6F9",
                "gray-200": "#EBEDF3",
                "gray-300": "#E4E6EF",
                "gray-400": "#D1D3E0",
                "gray-500": "#B5B5C3",
                "gray-600": "#7E8299",
                "gray-700": "#5E6278",
                "gray-800": "#3F4254",
                "gray-900": "#181C32"
            }
        },
        "font-family": "Poppins"
    };
</script>
<!--end::Global Config-->

</script>
<!--begin::Global Theme Bundle(used by all pages)-->
<script src="/assets/plugins/global/plugins.bundle.js"></script>
<script src="/assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
<script src="/assets/js/scripts.bundle.js"></script>
<!--end::Global Theme Bundle-->

</body>
<!--end::Body-->
</html>