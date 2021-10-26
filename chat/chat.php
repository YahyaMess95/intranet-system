
<?php 
session_start();
 ?>

<!doctype html>
<html lang="en">


<!-- Mirrored from demo.dashboardpack.com/fiori-html-pro/apps-chat.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Oct 2019 18:30:49 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Chat</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"
    />
    <meta name="description" content="Fiori HTML Bootstrap 4 Dashboard Template">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

<link href="../main.087c8d15f89e6bbe3f9e.css" rel="stylesheet">




<style type="text/css">
    

body {
  text-align: center;
  background: #EBF4FB;
  font-family: arial
}
.red {
  color : #ff0000 !important;
}
textarea {
  border: 2px solid #D9E3F9;
  border-radius: 4px;
  padding: 8px 20px;
}
h1 {
  color: #1da1f2;
    font-size: 33px;
    font-weight: 300;
    line-height: 33px;
    margin-bottom: 11px;
}
#counterBlock {
  color: #456; 
  font-size: 37px;
  font-weight: bold;
  margin-top:0px


}

</style>




</head>
<body>
<div class="app-container app-theme-white">
        <div class="app-top-bar bg-plum-plate top-bar-text-light">
            <div class="container fiori-container">
                <div class="top-bar-left">
                    <ul class="nav">
                        <li class="nav-item">
                            <a href="https://dashboardpack.com/" target="_blank" class="nav-link">
                                DashboardPack.com
                            </a>
                        </li>
                        <li class="nav-item ml-1">
                            <a data-placement="top" rel="popover-focus" data-toggle="popover-custom" class="nav-link">
                                Grid Menu
                                <i class="fa fa-angle-down ml-2 opacity-8"></i>
                            </a>
                            <div class="rm-max-width">
                                <div class="d-none popover-custom-content">
                                    <div class="grid-menu grid-menu-2col">
                                        <div class="no-gutters row">
                                            <div class="col-sm-6">
                                                <button class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-dark"><i class="lnr-lighter text-dark opacity-7 btn-icon-wrapper mb-2"> </i>Automation
                                                </button>
                                            </div>
                                            <div class="col-sm-6">
                                                <button class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-danger"><i class="lnr-construction text-danger opacity-7 btn-icon-wrapper mb-2"> </i>Reports
                                                </button>
                                            </div>
                                            <div class="col-sm-6">
                                                <button class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-success"><i class="lnr-bus text-success opacity-7 btn-icon-wrapper mb-2"> </i>Activity
                                                </button>
                                            </div>
                                            <div class="col-sm-6">
                                                <button class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-focus"><i class="lnr-gift text-focus opacity-7 btn-icon-wrapper mb-2"> </i>Settings
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="nav flex-column">
                                        <li class="nav-item-divider nav-item"></li>
                                        <li class="nav-item-btn d-block text-center nav-item">
                                            <button class="btn-shadow btn btn-focus btn-sm">View Details</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="top-bar-right">
                    <ul class="nav">
                        <li class="nav-item mr-1">
                            <a href="javascript:void(0);" class="nav-link">
                                Create Account
                            </a>
                        </li>
                        <li class="nav-item mr-2">
                            <a href="javascript:void(0);" class="nav-link">
                                Login
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a aria-haspopup="true" data-toggle="dropdown" aria-expanded="false" class="nav-link">
                                <i class="typcn typcn-world-outline mr-1"></i>
                                Language
                                <i class="fa fa-angle-down ml-2 opacity-8"></i>
                            </a>
                            <div tabindex="-1" role="menu" aria-hidden="true" class="rm-pointers dropdown-menu dropdown-menu-right">
                                <div class="dropdown-menu-header">
                                    <div class="dropdown-menu-header-inner pt-4 pb-4 bg-focus">
                                        <div class="menu-header-image opacity-05" style="background-image: url('assets/images/dropdown-header/city2.jpg');"></div>
                                        <div class="menu-header-content text-center text-white">
                                            <h6 class="menu-header-subtitle mt-0">
                                                Choose Language
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                                <h6 tabindex="-1" class="dropdown-header">
                                    Popular Languages
                                </h6>
                                <button type="button" tabindex="0" class="dropdown-item">
                                    <span class="mr-3 opacity-8 flag large US"></span>
                                    USA
                                </button>
                                <button type="button" tabindex="0" class="dropdown-item">
                                    <span class="mr-3 opacity-8 flag large CH"></span>
                                    Switzerland
                                </button>
                                <button type="button" tabindex="0" class="dropdown-item">
                                    <span class="mr-3 opacity-8 flag large FR"></span>
                                    France
                                </button>
                                <button type="button" tabindex="0" class="dropdown-item">
                                    <span class="mr-3 opacity-8 flag large ES"></span>
                                    Spain
                                </button>
                                <div tabindex="-1" class="dropdown-divider"></div>
                                <h6 tabindex="-1" class="dropdown-header">Others</h6>
                                <button type="button" tabindex="0" class="dropdown-item active">
                                    <span class="mr-3 opacity-8 flag large DE"></span>
                                    Germany
                                </button>
                                <button type="button" tabindex="0" class="dropdown-item">
                                    <span class="mr-3 opacity-8 flag large IT"></span>
                                    Italy
                                </button>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="app-header header-shadow">
            <div class="container fiori-container">
                <div class="app-header__mobile-menu">
                    <div>
                        <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="app-header__logo">
                    <a href="https://fiori.architectui.com/" target="_blank" data-toggle="tooltip" data-placement="bottom" title="Fiori Admin Template" class="logo-src"></a>
                </div>        <ul class="horizontal-nav-menu">
                    <li class="dropdown">
                        <a  data-toggle="dropdown" data-offset="10" data-display="static" aria-expanded="false">
                            <i class="nav-icon-big typcn typcn-directions"></i>
                            <span>Dashboards</span>
                            <i class="nav-icon-pointer icon ion-ios-arrow-down"></i>
                        </a>
                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-lg">
                            <div class="dropdown-menu-header">
                                <div class="dropdown-menu-header-inner bg-plum-plate">
                                    <div class="menu-header-image" style="background-image: url('assets/images/dropdown-header/abstract4.jpg');"></div>
                                    <div class="menu-header-content text-left">
                                        <h5 class="menu-header-title">Dashboards</h5>
                                        <h6 class="menu-header-subtitle">This is a dropdown header example!</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="scroll-area-xs">
                                <div class="scrollbar-container">
                                    <a class="dropdown-item" href="analytics-dashboard.html">Analytics</a>
                                    <a class="dropdown-item" href="management-dashboard.html">Management</a>
                                    <a class="dropdown-item" href="advertisement-dashboard.html">Advertisement</a>
                                    <a class="dropdown-item" href="index-2.html">Helpdesk</a>
                                    <a class="dropdown-item" href="monitoring-dashboard.html">Monitoring</a>
                                    <a class="dropdown-item" href="crypto-dashboard.html">Cryptocurrency</a>
                                    <a class="dropdown-item" href="pm-dashboard.html">Project Management</a>
                                    <a class="dropdown-item" href="product-dashboard.html">Product</a>
                                    <a class="dropdown-item" href="statistics-dashboard.html">Statistics</a>
                                </div>
                            </div>
                            <ul class="nav flex-column">
                                <li class="nav-item-divider nav-item"></li>
                                <li class="nav-item-btn nav-item d-block text-center">
                                    <a href="#" class="btn-wide btn-shadow btn btn-success btn-sm">Purchase</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a  data-toggle="dropdown" data-offset="10" data-display="static" aria-expanded="false" class="active">
                            <i class="nav-icon-big typcn typcn-document"></i>
                            <span>Layouts</span>
                            <i class="nav-icon-pointer icon ion-ios-arrow-down"></i>
                        </a>
                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-rounded">
                            <div class="dropdown-mega-menu p-0">
                                <div class="grid-menu grid-menu-2col">
                                    <div class="no-gutters row">
                                        <div class="col-sm-8 pl-lg-0 pb-lg-0 pt-lg-0">
                                            <div class="nav flex-column">
                                                <a href="apps-mailbox.html" class="dropdown-item-desc dropdown-item">
                                                    <span>Mailbox</span>
                                                    <p>Sed consequat, leo eget bibendum sodales, augue velit cursus nunc.</p>
                                                </a>
                                                <div class="divider mt-2 mb-2"></div>
                                                <a href="apps-chat.html" class="dropdown-item-desc dropdown-item active">
                                                    <span>Chat</span>
                                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.</p>
                                                </a>
                                                <div class="divider mt-2 mb-2"></div>
                                                <a href="apps-faq-section.html" class="dropdown-item-desc dropdown-item">
                                                    <span>FAQ Section</span>
                                                    <p>Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat.</p>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="nav flex-column">
                                                <div class="nav-item-header text-primary nav-item">
                                                    User Pages
                                                </div>
                                                <a class="dropdown-item" href="pages-login.html">
                                                    Login
                                                </a>
                                                <a class="dropdown-item" href="pages-login-boxed.html">
                                                    Login Boxed
                                                </a>
                                                <a class="dropdown-item" href="pages-register.html">
                                                    Register
                                                </a>
                                                <a class="dropdown-item" href="pages-register-boxed.html">
                                                    Register Boxed
                                                </a>
                                                <a class="dropdown-item" href="pages-forgot-password.html">
                                                    Forgot Password
                                                </a>
                                                <a class="dropdown-item" href="pages-forgot-password-boxed.html">
                                                    Forgot Password Boxed
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a  data-toggle="dropdown" data-offset="10" data-display="static" aria-expanded="false">
                            <i class="nav-icon-big typcn typcn-lightbulb"></i>
                            <span>Components</span>
                            <i class="nav-icon-pointer icon ion-ios-arrow-down"></i>
                        </a>
                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-rounded p-0">
                            <div class="dropdown-mega-menu dropdown-mega-menu-sm p-0">
                                <div class="grid-menu grid-menu-3col">
                                    <div class="nav flex-column">
                                        <div class="row no-gutters">
                                            <div class="col-sm-4">
                                                <a href="components-tabs.html" class="dropdown-item">
                                                    Tabs
                                                </a>
                                                <a href="components-accordions.html" class="dropdown-item">
                                                    Accordions
                                                </a>
                                                <a href="components-notifications.html" class="dropdown-item">
                                                    Notifications
                                                </a>
                                                <a href="components-modals.html" class="dropdown-item">
                                                    Modals
                                                </a>
                                                <a href="components-loading-blocks.html" class="dropdown-item">
                                                    Loading Blockers
                                                </a>
                                                <a href="components-progress-bar.html" class="dropdown-item">
                                                    Progress Bar
                                                </a>
                                                <a href="components-tooltips-popovers.html" class="dropdown-item">
                                                    Tooltips &amp; Popovers
                                                </a>
                                                <a href="components-carousel.html" class="dropdown-item">
                                                    Carousel
                                                </a>
                                                <a href="components-calendar.html" class="dropdown-item">
                                                    Calendar
                                                </a>
                                            </div>
                                            <div class="col-sm-4">
                                                <a href="components-pagination.html" class="dropdown-item">
                                                    Pagination
                                                </a>
                                                <a href="components-count-up.html" class="dropdown-item">
                                                    Count Up
                                                </a>
                                                <a href="components-scrollable-elements.html" class="dropdown-item">
                                                    Scrollable
                                                </a>
                                                <a href="components-tree-view.html" class="dropdown-item">
                                                    Tree View
                                                </a>
                                                <a href="components-maps.html" class="dropdown-item">
                                                    Maps
                                                </a>
                                                <a href="components-ratings.html" class="dropdown-item">
                                                    Ratings
                                                </a>
                                                <a href="components-image-crop.html" class="dropdown-item">
                                                    Image Crop
                                                </a>
                                                <a href="components-guided-tours.html" class="dropdown-item">
                                                    Guided Tours
                                                </a>
                                                <a href="elements-utilities.html" class="dropdown-item">
                                                    Utilities
                                                </a>
                                            </div>
                                            <div class="col-sm-4">
                                                <a href="elements-buttons-standard.html" class="dropdown-item ">
                                                    Buttons
                                                </a>
                                                <a href="elements-dropdowns.html" class="dropdown-item">
                                                    Dropdowns
                                                </a>
                                                <a href="elements-icons.html" class="dropdown-item">
                                                    Icons
                                                </a>
                                                <a href="elements-badges-labels.html" class="dropdown-item">
                                                    Badges
                                                </a>
                                                <a href="elements-cards.html" class="dropdown-item">
                                                    Cards
                                                </a>
                                                <a href="elements-loaders.html" class="dropdown-item">
                                                    Loading Indicators
                                                </a>
                                                <a href="elements-list-group.html" class="dropdown-item">
                                                    List Groups
                                                </a>
                                                <a href="elements-navigation.html" class="dropdown-item">
                                                    Navigation Menus
                                                </a>
                                                <a href="elements-timelines.html" class="dropdown-item">
                                                    Timeline
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a  data-toggle="dropdown" data-offset="10" data-display="static" aria-expanded="false">
                            <i class="nav-icon-big typcn typcn-tags"></i>
                            <span>Widgets</span>
                            <i class="nav-icon-pointer icon ion-ios-arrow-down"></i>
                        </a>
                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu">
                            <div class="dropdown-mega-menu dropdown-mega-menu-sm p-0">
                                <div class="grid-menu grid-menu-3col">
                                    <div class="nav flex-column">
                                        <div class="row no-gutters">
                                            <div class="col-sm-4">
                                                <div class="nav flex-column">
                                                    <div class="nav-item-header text-primary nav-item">
                                                        Boxes
                                                    </div>
                                                    <a href="widgets-chart-boxes.html" class="dropdown-item">
                                                        Chart Boxes 1
                                                    </a>
                                                    <a href="widgets-chart-boxes-2.html" class="dropdown-item">
                                                        Chart Boxes 2
                                                    </a>
                                                    <a href="widgets-chart-boxes-3.html" class="dropdown-item">
                                                        Chart Boxes 3
                                                    </a>
                                                    <a href="widgets-profile-boxes.html" class="dropdown-item">
                                                        Profile Boxes
                                                    </a>
                                                    <div class="divider"></div>
                                                    <div class="nav-item-header text-primary nav-item">
                                                        Tables
                                                    </div>
                                                    <a href="tables-data-tables.html" class="dropdown-item">
                                                        Data Tables
                                                    </a>
                                                    <a href="tables-regular.html" class="dropdown-item">
                                                        Regular Tables
                                                    </a>
                                                    <a href="tables-grid.html" class="dropdown-item">
                                                        Grid Tables
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="nav flex-column">
                                                    <div class="nav-item-header text-primary nav-item">
                                                        Forms
                                                    </div>
                                                    <a href="forms-controls.html" class="dropdown-item">
                                                        Controls
                                                    </a>
                                                    <a href="forms-layouts.html" class="dropdown-item">
                                                        Layouts
                                                    </a>
                                                    <a href="forms-validation.html" class="dropdown-item">
                                                        Validation
                                                    </a>
                                                    <a href="forms-wizard.html" class="dropdown-item">
                                                        Wizard
                                                    </a>
                                                    <div class="divider"></div>
                                                    <a href="forms-datepicker.html" class="dropdown-item">
                                                        Datepicker
                                                    </a>
                                                    <a href="forms-range-slider.html" class="dropdown-item">
                                                        Range Slider
                                                    </a>
                                                    <a href="forms-toggle-switch.html" class="dropdown-item">
                                                        Toggle Switch
                                                    </a>
                                                    <a href="forms-wysiwyg-editor.html" class="dropdown-item">
                                                        WYSIWYG Editor
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="nav flex-column">
                                                    <div class="nav-item-header text-primary nav-item">
                                                        Charts
                                                    </div>
                                                    <a href="charts-chartjs.html" class="dropdown-item">
                                                        ChartJS
                                                    </a>
                                                    <a href="charts-apexcharts.html" class="dropdown-item">
                                                        Apex Charts
                                                    </a>
                                                    <a href="charts-sparklines.html" class="dropdown-item">
                                                        Chart Sparklines
                                                    </a>
                                                    <div class="divider"></div>
                                                    <a href="forms-input-mask.html" class="dropdown-item">
                                                        Input Mask
                                                    </a>
                                                    <a href="forms-clipboard.html" class="dropdown-item">
                                                        Clipboard
                                                    </a>
                                                    <a href="forms-textarea-autosize.html" class="dropdown-item">
                                                        Textarea Autosize
                                                    </a>
                                                    <a href="forms-input-selects.html" class="dropdown-item">
                                                        Input Selects
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>        <div class="app-header-right">
                    <div class="search-wrapper">
                        <i class="search-icon-wrapper typcn typcn-zoom-outline"></i>
                        <input type="text" placeholder="Search...">
                    </div>
                    <div class="header-btn-lg pr-0">
                        <div class="header-dots">
                            <div class="dropdown">
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="p-0 mr-2 btn btn-link">
                                    <i class="typcn typcn-th-large-outline"></i>
                                </button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-xl rm-pointers dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-menu-header">
                                        <div class="dropdown-menu-header-inner bg-vicious-stance">
                                            <div class="menu-header-image opacity-4" style="background-image: url('assets/images/dropdown-header/city5.jpg');"></div>
                                            <div class="menu-header-content text-white">
                                                <h5 class="menu-header-title">Grid Dashboard</h5>
                                                <h6 class="menu-header-subtitle">Easy grid navigation inside dropdowns</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="grid-menu grid-menu-xl grid-menu-3col">
                                        <div class="no-gutters row">
                                            <div class="col-sm-6 col-xl-4">
                                                <button class="btn-icon-vertical btn-square btn-transition btn btn-outline-link">
                                                    <i class="pe-7s-world icon-gradient bg-night-fade btn-icon-wrapper btn-icon-lg mb-3"></i>
                                                    Automation
                                                </button>
                                            </div>
                                            <div class="col-sm-6 col-xl-4">
                                                <button class="btn-icon-vertical btn-square btn-transition btn btn-outline-link">
                                                    <i class="pe-7s-piggy icon-gradient bg-night-fade btn-icon-wrapper btn-icon-lg mb-3"> </i>
                                                    Reports
                                                </button>
                                            </div>
                                            <div class="col-sm-6 col-xl-4">
                                                <button class="btn-icon-vertical btn-square btn-transition btn btn-outline-link">
                                                    <i class="pe-7s-config icon-gradient bg-night-fade btn-icon-wrapper btn-icon-lg mb-3"> </i>
                                                    Settings
                                                </button>
                                            </div>
                                            <div class="col-sm-6 col-xl-4">
                                                <button class="btn-icon-vertical btn-square btn-transition btn btn-outline-link">
                                                    <i class="pe-7s-browser icon-gradient bg-night-fade btn-icon-wrapper btn-icon-lg mb-3"> </i>
                                                    Content
                                                </button>
                                            </div>
                                            <div class="col-sm-6 col-xl-4">
                                                <button class="btn-icon-vertical btn-square btn-transition btn btn-outline-link">
                                                    <i class="pe-7s-hourglass icon-gradient bg-night-fade btn-icon-wrapper btn-icon-lg mb-3"> </i>
                                                    Activity
                                                </button>
                                            </div>
                                            <div class="col-sm-6 col-xl-4">
                                                <button class="btn-icon-vertical btn-square btn-transition btn btn-outline-link">
                                                    <i class="pe-7s-world icon-gradient bg-night-fade btn-icon-wrapper btn-icon-lg mb-3"> </i>
                                                    Contacts
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="nav flex-column">
                                        <li class="nav-item-divider nav-item"></li>
                                        <li class="nav-item-btn text-center nav-item">
                                            <button class="btn-shadow btn btn-primary btn-sm">Follow-ups</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="dropdown">
                                <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="p-0 btn btn-link">
                                    <i class="typcn typcn-bell"></i>
                                    <span class="badge badge-dot badge-dot-sm badge-danger">Notifications</span>
                                </button>
                                <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-xl rm-pointers dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-menu-header mb-0">
                                        <div class="dropdown-menu-header-inner bg-night-sky">
                                            <div class="menu-header-image opacity-5" style="background-image: url('assets/images/dropdown-header/city2.jpg');"></div>
                                            <div class="menu-header-content text-light">
                                                <h5 class="menu-header-title">Notifications</h5>
                                                <h6 class="menu-header-subtitle">You have <b>21</b> unread messages</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="tabs-animated-shadow tabs-animated nav nav-justified tabs-shadow-bordered p-3">
                                        <li class="nav-item">
                                            <a role="tab" class="nav-link active" data-toggle="tab" href="#tab-messages-header">
                                                <span>Messages</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a role="tab" class="nav-link" data-toggle="tab" href="#tab-events-header">
                                                <span>Events</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a role="tab" class="nav-link" data-toggle="tab" href="#tab-errors-header">
                                                <span>System</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="tab-messages-header" role="tabpanel">
                                            <div class="scroll-area-sm">
                                                <div class="scrollbar-container">
                                                    <div class="p-3">
                                                        <div class="notifications-box">
                                                            <div class="vertical-time-simple vertical-without-time vertical-timeline vertical-timeline--one-column">
                                                                <div class="vertical-timeline-item dot-danger vertical-timeline-element">
                                                                    <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                                        <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title">All Hands Meeting</h4><span class="vertical-timeline-element-date"></span></div>
                                                                    </div>
                                                                </div>
                                                                <div class="vertical-timeline-item dot-warning vertical-timeline-element">
                                                                    <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                                        <div class="vertical-timeline-element-content bounce-in"><p>Yet another one, at <span class="text-success">15:00 PM</span></p><span class="vertical-timeline-element-date"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="vertical-timeline-item dot-success vertical-timeline-element">
                                                                    <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                                        <div class="vertical-timeline-element-content bounce-in">
                                                                            <h4 class="timeline-title">Build the production release
                                                                                <span class="badge badge-danger ml-2">NEW</span>
                                                                            </h4>
                                                                            <span class="vertical-timeline-element-date"></span></div>
                                                                    </div>
                                                                </div>
                                                                <div class="vertical-timeline-item dot-primary vertical-timeline-element">
                                                                    <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                                        <div class="vertical-timeline-element-content bounce-in">
                                                                            <h4 class="timeline-title">Something not important
                                                                                <div class="avatar-wrapper mt-2 avatar-wrapper-overlap">
                                                                                    <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                        <div class="avatar-icon"><img
                                                                                                src="assets/images/avatars/1.jpg"
                                                                                                alt=""></div>
                                                                                    </div>
                                                                                    <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                        <div class="avatar-icon"><img
                                                                                                src="assets/images/avatars/2.jpg"
                                                                                                alt=""></div>
                                                                                    </div>
                                                                                    <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                        <div class="avatar-icon"><img
                                                                                                src="assets/images/avatars/3.jpg"
                                                                                                alt=""></div>
                                                                                    </div>
                                                                                    <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                        <div class="avatar-icon"><img
                                                                                                src="assets/images/avatars/4.jpg"
                                                                                                alt=""></div>
                                                                                    </div>
                                                                                    <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                        <div class="avatar-icon"><img
                                                                                                src="assets/images/avatars/5.jpg"
                                                                                                alt=""></div>
                                                                                    </div>
                                                                                    <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                        <div class="avatar-icon"><img
                                                                                                src="assets/images/avatars/9.jpg"
                                                                                                alt=""></div>
                                                                                    </div>
                                                                                    <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                        <div class="avatar-icon"><img
                                                                                                src="assets/images/avatars/7.jpg"
                                                                                                alt=""></div>
                                                                                    </div>
                                                                                    <div class="avatar-icon-wrapper avatar-icon-sm">
                                                                                        <div class="avatar-icon"><img
                                                                                                src="assets/images/avatars/8.jpg"
                                                                                                alt=""></div>
                                                                                    </div>
                                                                                    <div class="avatar-icon-wrapper avatar-icon-sm avatar-icon-add">
                                                                                        <div class="avatar-icon"><i>+</i></div>
                                                                                    </div>
                                                                                </div>
                                                                            </h4>
                                                                            <span class="vertical-timeline-element-date"></span></div>
                                                                    </div>
                                                                </div>
                                                                <div class="vertical-timeline-item dot-info vertical-timeline-element">
                                                                    <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                                        <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title">This dot has an info state</h4><span class="vertical-timeline-element-date"></span></div>
                                                                    </div>
                                                                </div>
                                                                <div class="vertical-timeline-item dot-danger vertical-timeline-element">
                                                                    <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                                        <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title">All Hands Meeting</h4><span class="vertical-timeline-element-date"></span></div>
                                                                    </div>
                                                                </div>
                                                                <div class="vertical-timeline-item dot-warning vertical-timeline-element">
                                                                    <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                                        <div class="vertical-timeline-element-content bounce-in"><p>Yet another one, at <span class="text-success">15:00 PM</span></p><span class="vertical-timeline-element-date"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="vertical-timeline-item dot-success vertical-timeline-element">
                                                                    <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                                        <div class="vertical-timeline-element-content bounce-in">
                                                                            <h4 class="timeline-title">Build the production release
                                                                                <span class="badge badge-danger ml-2">NEW</span>
                                                                            </h4>
                                                                            <span class="vertical-timeline-element-date"></span></div>
                                                                    </div>
                                                                </div>
                                                                <div class="vertical-timeline-item dot-dark vertical-timeline-element">
                                                                    <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                                        <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title">This dot has a dark state</h4><span class="vertical-timeline-element-date"></span></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab-events-header" role="tabpanel">
                                            <div class="scroll-area-sm">
                                                <div class="scrollbar-container">
                                                    <div class="p-3">
                                                        <div class="vertical-without-time vertical-timeline vertical-timeline--animate vertical-timeline--one-column">
                                                            <div class="vertical-timeline-item vertical-timeline-element">
                                                                <div><span class="vertical-timeline-element-icon bounce-in"><i class="badge badge-dot badge-dot-xl badge-success"> </i></span>
                                                                    <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title">All Hands Meeting</h4>
                                                                        <p>Lorem ipsum dolor sic amet, today at <a href="javascript:void(0);">12:00 PM</a></p><span class="vertical-timeline-element-date"></span></div>
                                                                </div>
                                                            </div>
                                                            <div class="vertical-timeline-item vertical-timeline-element">
                                                                <div><span class="vertical-timeline-element-icon bounce-in"><i class="badge badge-dot badge-dot-xl badge-warning"> </i></span>
                                                                    <div class="vertical-timeline-element-content bounce-in"><p>Another meeting today, at <b class="text-danger">12:00 PM</b></p>
                                                                        <p>Yet another one, at <span class="text-success">15:00 PM</span></p><span class="vertical-timeline-element-date"></span></div>
                                                                </div>
                                                            </div>
                                                            <div class="vertical-timeline-item vertical-timeline-element">
                                                                <div><span class="vertical-timeline-element-icon bounce-in"><i class="badge badge-dot badge-dot-xl badge-danger"> </i></span>
                                                                    <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title">Build the production release</h4>
                                                                        <p>Lorem ipsum dolor sit amit,consectetur eiusmdd tempor incididunt ut labore et dolore magna elit enim at minim veniam quis nostrud</p><span
                                                                                class="vertical-timeline-element-date"></span></div>
                                                                </div>
                                                            </div>
                                                            <div class="vertical-timeline-item vertical-timeline-element">
                                                                <div><span class="vertical-timeline-element-icon bounce-in"><i class="badge badge-dot badge-dot-xl badge-primary"> </i></span>
                                                                    <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title text-success">Something not important</h4>
                                                                        <p>Lorem ipsum dolor sit amit,consectetur elit enim at minim veniam quis nostrud</p><span class="vertical-timeline-element-date"></span></div>
                                                                </div>
                                                            </div>
                                                            <div class="vertical-timeline-item vertical-timeline-element">
                                                                <div><span class="vertical-timeline-element-icon bounce-in"><i class="badge badge-dot badge-dot-xl badge-success"> </i></span>
                                                                    <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title">All Hands Meeting</h4>
                                                                        <p>Lorem ipsum dolor sic amet, today at <a href="javascript:void(0);">12:00 PM</a></p><span class="vertical-timeline-element-date"></span></div>
                                                                </div>
                                                            </div>
                                                            <div class="vertical-timeline-item vertical-timeline-element">
                                                                <div><span class="vertical-timeline-element-icon bounce-in"><i class="badge badge-dot badge-dot-xl badge-warning"> </i></span>
                                                                    <div class="vertical-timeline-element-content bounce-in"><p>Another meeting today, at <b class="text-danger">12:00 PM</b></p>
                                                                        <p>Yet another one, at <span class="text-success">15:00 PM</span></p><span class="vertical-timeline-element-date"></span></div>
                                                                </div>
                                                            </div>
                                                            <div class="vertical-timeline-item vertical-timeline-element">
                                                                <div><span class="vertical-timeline-element-icon bounce-in"><i class="badge badge-dot badge-dot-xl badge-danger"> </i></span>
                                                                    <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title">Build the production release</h4>
                                                                        <p>Lorem ipsum dolor sit amit,consectetur eiusmdd tempor incididunt ut labore et dolore magna elit enim at minim veniam quis nostrud</p><span
                                                                                class="vertical-timeline-element-date"></span></div>
                                                                </div>
                                                            </div>
                                                            <div class="vertical-timeline-item vertical-timeline-element">
                                                                <div><span class="vertical-timeline-element-icon bounce-in"><i class="badge badge-dot badge-dot-xl badge-primary"> </i></span>
                                                                    <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title text-success">Something not important</h4>
                                                                        <p>Lorem ipsum dolor sit amit,consectetur elit enim at minim veniam quis nostrud</p><span class="vertical-timeline-element-date"></span></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="tab-errors-header" role="tabpanel">
                                            <div class="scroll-area-sm">
                                                <div class="scrollbar-container">
                                                    <div class="no-results pt-3 pb-0">
                                                        <div class="swal2-icon swal2-success swal2-animate-success-icon">
                                                            <div class="swal2-success-circular-line-left" style="background-color: rgb(255, 255, 255);"></div>
                                                            <span class="swal2-success-line-tip"></span>
                                                            <span class="swal2-success-line-long"></span>
                                                            <div class="swal2-success-ring"></div>
                                                            <div class="swal2-success-fix" style="background-color: rgb(255, 255, 255);"></div>
                                                            <div class="swal2-success-circular-line-right" style="background-color: rgb(255, 255, 255);"></div>
                                                        </div>
                                                        <div class="results-subtitle">All caught up!</div>
                                                        <div class="results-title">There are no system errors!</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="nav flex-column">
                                        <li class="nav-item-divider nav-item"></li>
                                        <li class="nav-item-btn text-center nav-item">
                                            <button class="btn-shadow btn-wide btn-pill btn btn-focus btn-sm">View Latest Changes</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                            <img width="42" class="rounded" src="../assets/images/avatars/3.jpg" alt="">
                                            <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="rm-pointers dropdown-menu-lg dropdown-menu dropdown-menu-right">
                                            <div class="dropdown-menu-header">
                                                <div class="dropdown-menu-header-inner bg-info">
                                                    <div class="menu-header-image opacity-2" style="background-image: url('assets/images/dropdown-header/city1.jpg');"></div>
                                                    <div class="menu-header-content text-left">
                                                        <div class="widget-content p-0">
                                                            <div class="widget-content-wrapper">
                                                                <div class="widget-content-left mr-3">
                                                                    <img width="42" class="rounded-circle"
                                                                         src="../assets/images/avatars/3.jpg"
                                                                         alt="">
                                                                </div>
                                                                <div class="widget-content-left">
                                                                    <div class="widget-heading">Minnie Betts
                                                                    </div>
                                                                    <div class="widget-subheading opacity-8">A short profile description
                                                                    </div>
                                                                </div>
                                                                <div class="widget-content-right mr-2">
                                                                    <button class="btn-pill btn-shadow btn-shine btn btn-focus">Logout
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="scroll-area-xs" style="height: 150px;">
                                                <div class="scrollbar-container ps">
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item-header nav-item">Activity
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="javascript:void(0);" class="nav-link">Chat
                                                                <div class="ml-auto badge badge-pill badge-info">8
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="javascript:void(0);" class="nav-link">Recover Password
                                                            </a>
                                                        </li>
                                                        <li class="nav-item-header nav-item">My Account
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="javascript:void(0);" class="nav-link">Settings
                                                                <div class="ml-auto badge badge-success">New
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="javascript:void(0);" class="nav-link">Messages
                                                                <div class="ml-auto badge badge-warning">512
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a href="javascript:void(0);" class="nav-link">Logs
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <ul class="nav flex-column">
                                                <li class="nav-item-divider mb-0 nav-item"></li>
                                            </ul>
                                            <div class="grid-menu grid-menu-2col">
                                                <div class="no-gutters row">
                                                    <div class="col-sm-6">
                                                        <button class="btn-icon-vertical btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-warning">
                                                            <i class="pe-7s-chat icon-gradient bg-amy-crisp btn-icon-wrapper mb-2"></i>
                                                            Message Inbox
                                                        </button>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <button class="btn-icon-vertical btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-danger">
                                                            <i class="pe-7s-ticket icon-gradient bg-love-kiss btn-icon-wrapper mb-2"></i>
                                                            <b>Support Tickets</b>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="nav flex-column">
                                                <li class="nav-item-divider nav-item">
                                                </li>
                                                <li class="nav-item-btn text-center nav-item">
                                                    <button class="btn-wide btn btn-primary btn-sm">
                                                        Open Messages
                                                    </button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>        </div>
                <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
                </div>
            </div>
        </div>   

         <div class="app-main">
            <div class="app-main__outer">
                <div class="app-main__inner p-0">
                    <div class="app-inner-layout chat-layout">
                        <div class="container fiori-container">
                            <div class="app-inner-layout__header pl-0 pr-0">
                                <div class="app-page-title app-page-title-simple">
                                    <div class="page-title-wrapper">
                                        <div class="page-title-heading">
                                            <div>
                                                Chat
                                                <div class="page-title-subheading">Vous pouvez envoyer des fichiers dans les messages</div>
                                            </div>



                                        </div>


                                        
        </div>


    </div>


</div>
    
<?php


include "../crud.php";
$crud= new crud();
$conn=$crud->cnx;

  ?>


                                    <div class="card-body">




                                       <div>
                                        <select class="multiselect-dropdown form-control" onchange="return loadIframe('contenu', 'contenu.php')"  id="chat">
                                    </div>




                                            <option  disabled selected>choisir un utilisateur pour le contacter  </option>

                                            <?php 





$users = $crud->afficheUser($conn) ; 
foreach ($users as $key ) {
   

 ?>
                                                <option value="<?php echo $key['id'] ;  ?> " ><?php echo $key['email'] ;  ?> </option>






<?php } ?>
                                              
                                        </select>
                                    </div>              
                            

<script type="text/javascript">

function loadIframe(iframeName, url) {


 
    var $iframe = $('#' + iframeName);
    if ( $iframe.length ) {
        $iframe.attr('src',url+"?To="+document.getElementById("chat").value);   
        return false;

    }
    return true;

}



</script>





</div>
<center><iframe src="contenu.php" width="1100" height="300" id="contenu"> </iframe></center>
   
<div>
    

<form action="fctChat.php" method="post" enctype="multipart/form-data">
<input type="file" name="fichier" class="mb-2 mr-2 btn-square btn btn-alternate" accept=".doc,.docx,.xlsx,.xls,csv,.pdf" >
<br>


<textarea id="tweetContent" placeholder="Bonjour ..." style="overflow: hidden; word-wrap: break-word; resize: horizontal; height: 86px; width:60%" maxlength="499" name="tchat" ></textarea><p id="counterBlock"  style="  margin-left:600px ; font-size: 15px ;"> </p> 


<input  type="submit" name="submit" class="mb-2 mr-2 btn-hover-shine btn btn-alternate" value="             AJOUTER            "> 


















</form>





<script type="text/javascript">
    

// On selectionne l'element textarea et l'élement p#counterBlock
var textarea = document.querySelector('#tweetContent');
var blockCount = document.getElementById('counterBlock');

function count() {
    // la fonction count calcule la longueur de la chaîne de caractère contenue dans le textarea
    var count = 499-textarea.value.length;
    // et affche cette valeur dans la balise p#counterBlock grâce à innerHTML
    blockCount.innerHTML= count;
    
   // si le count descend sous 0 on ajoute la class red à la balise p#counterBlock
   if(count<0) {
        blockCount.classList.add("red");
   } 
   else if(count>=0) {
        blockCount.classList.remove("red");
   }
   else{}
}

// on pose un écouteur d'évènement keyup sur le textarea.
// On déclenche la fonction count quand l'évènement se produit et au chargement de la page
textarea.addEventListener('keyup', count);
count();


</script>






</div>

</div>







</div>
</div>
</div>
<div class="app-drawer-overlay d-none animated fadeIn"></div><script type="text/javascript" src="../assets/scripts/main.087c8d15f89e6bbe3f9e.js"></script></body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!-- Mirrored from demo.dashboardpack.com/fiori-html-pro/apps-chat.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Oct 2019 18:30:49 GMT -->
</html>
