<!DOCTYPE html>
<!--
Author: Keenthemes
Product Name: Keen
Product Version: 3.0.3
Purchase: https://themes.getbootstrap.com/product/keen-the-ultimate-bootstrap-admin-theme/
Website: http://www.keenthemes.com
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
License: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html lang="en">
<!--begin::Head-->
<head>
    <base href="../">
    <title>Keen - Multi-demo Bootstrap 5 HTML Admin Dashboard Template by Keenthemes</title>
    <meta charset="utf-8">
    <meta name="description" content="The most advanced Bootstrap Admin Theme on Bootstrap Market trusted by over 4,000 beginners and professionals. Multi-demo, Dark Mode, RTL support. Grab your copy now and get life-time updates for free.">
    <meta name="keywords" content="keen, bootstrap, bootstrap 5, bootstrap 4, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="article">
    <meta property="og:title" content="Keen - Multi-demo Bootstrap 5 HTML Admin Dashboard Theme">
    <meta property="og:url" content="https://keenthemes.com/keen">
    <meta property="og:site_name" content="Keenthemes | Keen">
    <link rel="canonical" href="https://preview.keenthemes.com/keen">
    <link rel="shortcut icon" href="{{asset('admin/assets/media/logos/favicon.ico')}}"><!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700"><!--end::Fonts-->
    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link href="{{asset('admin/assets/plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin/assets/plugins/custom/vis-timeline/vis-timeline.bundle.css')}}" rel="stylesheet" type="text/css"><!--end::Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="{{asset('admin/assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admin/assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css"><!--end::Global Stylesheets Bundle-->
</head><!--end::Head-->
<!--begin::Body-->
<body id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">
<!--begin::Theme mode setup on page load-->
<script>
    var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-bs-theme-mode")) { themeMode = document.documentElement.getAttribute("data-bs-theme-mode"); } else { if ( localStorage.getItem("data-bs-theme") !== null ) { themeMode = localStorage.getItem("data-bs-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-bs-theme", themeMode); }
</script> <!--end::Theme mode setup on page load-->
<!--begin::App-->
<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
    <!--begin::Page-->
    <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
        <!--begin::Header-->
            @include('admin.layout.header')
        <!--end::Header-->
        <!--begin::Wrapper-->
        <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
            <!--begin::Sidebar-->
            @include('admin.layout.sidebar')
            <!--end::Sidebar-->
            <!--begin::Main-->
            <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                <!--begin::Content wrapper-->
                @yield('content')
                <!--end::Content wrapper-->
                <!--begin::Footer-->
                @include('admin.layout.footer')
                <!--end::Footer-->
            </div><!--end:::Main-->
        </div><!--end::Wrapper-->
    </div><!--end::Page-->
</div><!--end::App-->
<!--begin::Drawers-->
<!--begin::Activities drawer-->
    @include('admin.layout.drawar.activities_drawar')
<!--end::Activities drawer-->
<!--begin::Chat drawer-->
    @include('admin.layout.drawar.chat_drawer')
<!--end::Chat drawer-->
<!--begin::Cart drawer-->
    @include('admin.layout.drawar.cart_drawar')
<!--end::Chat drawer-->
<!--end::Drawers-->
<!--begin::Engage drawers-->
<!--begin::Demos drawer-->
    @include('admin.layout.drawar.demo_drawar')
<!--end::Demos drawer-->
<!--begin::Help drawer-->
    @include('admin.layout.drawar.help_drawar')
<!--end::Help drawer-->
<!--end::Engage drawers-->
<!--begin::Engage toolbar-->
    @include('admin.layout.toolbar.engage_toolbar')
<!--end::Engage toolbar-->
<!--begin::Scrolltop-->
    @include('admin.layout.scrolltop.scrolltop')
<!--end::Scrolltop-->
<!--begin::Modals-->
<!--begin::Modal - Upgrade plan-->
    @include('admin.layout.modal.modal_upgrade_plan')
<!--end::Modal - Upgrade plan-->
<!--begin::Modal - View Users-->
    @include('admin.layout.modal.modal_view_users')
<!--end::Modal - View Users-->
<!--begin::Modal - Users Search-->
    @include('admin.layout.modal.modal_users_search')
<!--end::Modal - Users Search-->
<!--begin::Modal - Invite Friends-->
    @include('admin.layout.modal.modal_invite_friends')
<!--end::Modal - Invite Friend-->
<!--end::Modals-->
<!--begin::Javascript-->
<script>
    var hostUrl = "{{asset('admin/assets/')}}";
</script> <!--begin::Global Javascript Bundle(mandatory for all pages)-->

<script src="{{asset('admin/assets/plugins/global/plugins.bundle.js')}}"></script>
<script src="{{asset('admin/assets/js/scripts.bundle.js')}}"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Vendors Javascript(used for this page only)-->

<script src="{{asset('admin/assets/plugins/custom/datatables/datatables.bundle.js')}}"></script>
<script src="{{asset('admin/assets/plugins/custom/vis-timeline/vis-timeline.bundle.js')}}"></script> <!--end::Vendors Javascript-->
<!--begin::Custom Javascript(used for this page only)-->

<script src="{{asset('admin/assets/js/widgets.bundle.js')}}"></script>
<script src="{{asset('admin/assets/js/custom/apps/chat/chat.js')}}"></script>
<script src="{{asset('admin/assets/js/custom/utilities/modals/upgrade-plan.js')}}"></script>
<script src="{{asset('admin/assets/js/custom/utilities/modals/users-search.js')}}"></script> <!--end::Custom Javascript-->
<!--end::Javascript-->
<!--end::Body-->
</body>
</html>
