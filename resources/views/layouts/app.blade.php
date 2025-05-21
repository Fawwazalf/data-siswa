<!DOCTYPE html>
<!-- Template Name: DashCode - HTML, React, Vue, Tailwind Admin Dashboard Template Author: Codeshaper Website: https://codeshaper.net Contact: support@codeshaperbd.net Like: https://www.facebook.com/Codeshaperbd Purchase: https://themeforest.net/item/dashcode-admin-dashboard-template/42600453 License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project. -->
<html lang="zxx" dir="ltr" class="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <title>Dashcode - HTML Template</title>
    <link rel="icon" type="image/png" href="/assets/images/logo/favicon.svg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" href="/assets/css/rt-plugins.css">
    <link rel="stylesheet" href="/assets/css/app.css">
    <!-- End : Theme CSS-->
    <script src="/assets/js/settings.js" sync></script>
    <style>
        .text-danger {
            color: #dc3545;
        }
    </style>
</head>

<body class="font-inter dashcode-app" id="body_class">
    <!-- [if IE]> <p class="browserupgrade"> You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security. </p> <![endif] -->
    <main class="app-wrapper">
        <!-- BEGIN: Sidebar -->
        <!-- BEGIN: Sidebar -->
        <div class="sidebar-wrapper group">
            <div id="bodyOverlay"
                class="fixed top-0 z-10 hidden h-screen w-screen bg-slate-900 bg-opacity-50 backdrop-blur-sm"></div>
            <div class="logo-segment">
                <a class="flex items-center" href="index.html">
                    <img src="/assets/images/logo/logo-c.svg" class="black_logo" alt="logo">
                    <img src="/assets/images/logo/logo-c-white.svg" class="white_logo" alt="logo">
                    <span
                        class="font-Inter text-xl font-bold text-slate-900 ltr:ml-3 rtl:mr-3 dark:text-white">DashCode</span>
                </a>
                <!-- Sidebar Type Button -->
                <div id="sidebar_type" class="cursor-pointer text-lg text-slate-900 dark:text-white">
                    <span class="sidebarDotIcon extend-icon cursor-pointer text-2xl text-slate-900 dark:text-white">
                        <div
                            class="ring-black-900 h-4 w-4 rounded-full border-[1.5px] border-slate-900 bg-slate-900 ring-2 ring-inset ring-offset-4 transition-all duration-150 dark:border-slate-700 dark:bg-slate-400 dark:ring-slate-400 dark:ring-offset-slate-700">
                        </div>
                    </span>
                    <span class="sidebarDotIcon collapsed-icon cursor-pointer text-2xl text-slate-900 dark:text-white">
                        <div
                            class="h-4 w-4 rounded-full border-[1.5px] border-slate-900 transition-all duration-150 dark:border-slate-700">
                        </div>
                    </span>
                </div>
                <button class="sidebarCloseIcon text-2xl">
                    <iconify-icon class="text-slate-900 dark:text-slate-200"
                        icon="clarity:window-close-line"></iconify-icon>
                </button>
            </div>
            <div id="nav_shadow"
                class="nav_shadow nav-shadow pointer-events-none absolute top-[80px] z-[1] h-[60px] w-full opacity-0 transition-all duration-200">
            </div>
            <div class="sidebar-menus z-50 h-[calc(100%-80px)] overflow-y-auto bg-white px-4 py-2 dark:bg-slate-800"
                id="sidebar_menus">
                <ul class="sidebar-menu">
                    <li class="sidebar-menu-title">MENU</li>
                    <li class="">
                        <a href="#" class="navItem">
                            <span class="flex items-center">
                                <iconify-icon class="nav-icon" icon="heroicons-outline:home"></iconify-icon>
                                <span>Tables</span>
                            </span>
                            <iconify-icon class="icon-arrow" icon="heroicons-outline:chevron-right"></iconify-icon>
                        </a>
                        <ul class="sidebar-submenu">
                            @yield('active')

                        </ul>
                    </li>

                    <!-- Upgrade Your Business Plan Card Start -->
            </div>
        </div>
        <!-- End: Sidebar -->
        <!-- End: Sidebar -->
        <!-- BEGIN: Settings -->

        <!-- BEGIN: Settings -->
        <!-- Settings Toggle Button -->
        <button
            class="shadow-deep fixed top-1/2 z-[888] flex translate-y-1/2 rotate-90 transform cursor-pointer items-center bg-slate-800 px-2 py-2 text-sm font-medium text-slate-50 ltr:right-0 ltr:rounded-b ltr:md:right-[-29px] rtl:left-0 rtl:rounded-t rtl:md:left-[-29px] dark:bg-slate-700 dark:text-slate-300"
            data-bs-toggle="offcanvas" data-bs-target="#offcanvas" aria-controls="offcanvas">
            <iconify-icon class="animate-spin text-lg text-slate-50"
                icon="material-symbols:settings-outline-rounded"></iconify-icon>
            <span class="hidden md:inline-block ltr:ml-2 rtl:mr-2">Settings</span>
        </button>

        <!-- BEGIN: Settings Modal -->
        <div class="offcanvas offcanvas-end invisible fixed bottom-0 top-0 flex w-96 max-w-full flex-col border-none bg-white bg-clip-padding text-gray-700 shadow-sm outline-none transition duration-300 ease-in-out ltr:right-0 rtl:left-0 dark:bg-slate-800"
            tabindex="-1" id="offcanvas" aria-labelledby="offcanvas">
            <div class="offcanvas-header flex items-center justify-between border-b border-b-slate-300 p-4 pt-3">
                <div>
                    <h3 class="font-Inter block text-xl font-medium text-slate-900 dark:text-[#eee]">
                        Theme customizer
                    </h3>
                    <p class="font-Inter block text-sm font-light text-[#68768A] dark:text-[#eee]">Customize & Preview
                        in Real Time</p>
                </div>
                <button type="button"
                    class="-my-5 -mr-2 box-content h-4 w-4 rounded-none border-none p-2 pt-0 text-2xl text-black opacity-100 hover:text-black hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none dark:text-white"
                    data-bs-dismiss="offcanvas"><iconify-icon icon="line-md:close"></iconify-icon></button>
            </div>
            <div class="offcanvas-body flex-grow overflow-y-auto">
                <div class="settings-modal">
                    <div class="p-6">

                        <h3 class="mt-4">Theme</h3>
                        <form class="input-area flex items-center space-x-8 rtl:space-x-reverse" id="themeChanger">
                            <div class="input-group flex items-center">
                                <input type="radio" id="light" name="theme" value="light"
                                    class="themeCustomization-checkInput">
                                <label for="light" class="themeCustomization-checkInput-label">Light</label>
                            </div>
                            <div class="input-group flex items-center">
                                <input type="radio" id="dark" name="theme" value="dark"
                                    class="themeCustomization-checkInput">
                                <label for="dark" class="themeCustomization-checkInput-label">Dark</label>
                            </div>
                            <div class="input-group flex items-center">
                                <input type="radio" id="semiDark" name="theme" value="semiDark"
                                    class="themeCustomization-checkInput">
                                <label for="semiDark" class="themeCustomization-checkInput-label">Semi Dark</label>
                            </div>
                        </form>
                    </div>
                    <div class="divider"></div>
                    <div class="p-6">

                        <div class="mt-5 flex items-center justify-between">
                            <h3 class="!mb-0">Rtl</h3>
                            <label id="rtl_ltr"
                                class="relative inline-flex h-6 w-[46px] cursor-pointer items-center rounded-full transition-all duration-150">
                                <input type="checkbox" value="" class="peer sr-only">
                                <span
                                    class="peer-checked:bg-black-600 peer h-6 w-11 rounded-full bg-gray-200 ring-0 after:absolute after:left-[2px] after:top-[2px] after:h-5 after:w-5 after:rounded-full after:border after:border-gray-300 after:bg-white after:transition-all after:content-[''] peer-checked:after:translate-x-full peer-checked:after:border-white peer-focus:outline-none dark:border-gray-600 dark:bg-gray-900"></span>
                            </label>
                        </div>
                    </div>
                    <div class="divider"></div>
                    <div class="p-6">
                        <h3>Content Width</h3>
                        <div class="input-area flex items-center space-x-8 rtl:space-x-reverse">
                            <div class="input-group flex items-center">
                                <input type="radio" id="fullWidth" name="content-width" value="fullWidth"
                                    class="themeCustomization-checkInput">
                                <label for="fullWidth" class="themeCustomization-checkInput-label">Full Width</label>
                            </div>
                            <div class="input-group flex items-center">
                                <input type="radio" id="boxed" name="content-width" value="boxed"
                                    class="themeCustomization-checkInput">
                                <label for="boxed" class="themeCustomization-checkInput-label">Boxed</label>
                            </div>
                        </div>
                        <h3 class="mt-4">Menu Layout</h3>
                        <div class="input-area flex items-center space-x-8 rtl:space-x-reverse">
                            <div class="input-group flex items-center">
                                <input type="radio" id="vertical_menu" name="menu_layout" value="vertical"
                                    class="themeCustomization-checkInput">
                                <label for="vertical_menu"
                                    class="themeCustomization-checkInput-label">Vertical</label>
                            </div>
                            <div class="input-group flex items-center">
                                <input type="radio" id="horizontal_menu" name="menu_layout" value="horizontal"
                                    class="themeCustomization-checkInput">
                                <label for="horizontal_menu"
                                    class="themeCustomization-checkInput-label">Horizontal</label>
                            </div>
                        </div>
                        <div id="menuCollapse" class="mt-5 flex items-center justify-between">
                            <h3 class="!mb-0">Menu Collapsed</h3>
                            <label
                                class="relative inline-flex h-6 w-[46px] cursor-pointer items-center rounded-full transition-all duration-150">
                                <input type="checkbox" value="" class="peer sr-only">
                                <span
                                    class="peer-checked:bg-black-500 peer h-6 w-11 rounded-full bg-gray-200 ring-0 after:absolute after:left-[2px] after:top-[2px] after:h-5 after:w-5 after:rounded-full after:border after:border-gray-300 after:bg-white after:transition-all after:content-[''] peer-checked:after:translate-x-full peer-checked:after:border-white peer-focus:outline-none dark:border-gray-600 dark:bg-gray-900"></span>
                            </label>
                        </div>
                        <div id="menuHidden" class="mt-5 !flex items-center justify-between">
                            <h3 class="!mb-0">Menu Hidden</h3>
                            <label id="menuHide"
                                class="relative inline-flex h-6 w-[46px] cursor-pointer items-center rounded-full transition-all duration-150">
                                <input type="checkbox" value="" class="peer sr-only">
                                <span
                                    class="peer-checked:bg-black-500 peer h-6 w-11 rounded-full bg-gray-200 ring-0 after:absolute after:left-[2px] after:top-[2px] after:h-5 after:w-5 after:rounded-full after:border after:border-gray-300 after:bg-white after:transition-all after:content-[''] peer-checked:after:translate-x-full peer-checked:after:border-white peer-focus:outline-none dark:border-gray-600 dark:bg-gray-900"></span>
                            </label>
                        </div>
                    </div>
                    <div class="divider"></div>
                    <div class="p-6">
                        <h3>Navbar Type</h3>
                        <div class="input-area flex flex-wrap items-center space-x-4 rtl:space-x-reverse">
                            <div class="input-group flex items-center">
                                <input type="radio" id="nav_floating" name="navbarType" value="floating"
                                    class="themeCustomization-checkInput">
                                <label for="nav_floating" class="themeCustomization-checkInput-label">Floating</label>
                            </div>
                            <div class="input-group flex items-center">
                                <input type="radio" id="nav_sticky" name="navbarType" value="sticky"
                                    class="themeCustomization-checkInput">
                                <label for="nav_sticky" class="themeCustomization-checkInput-label">Sticky</label>
                            </div>
                            <div class="input-group flex items-center">
                                <input type="radio" id="nav_static" name="navbarType" value="static"
                                    class="themeCustomization-checkInput">
                                <label for="nav_static" class="themeCustomization-checkInput-label">Static</label>
                            </div>
                            <div class="input-group flex items-center">
                                <input type="radio" id="nav_hidden" name="navbarType" value="hidden"
                                    class="themeCustomization-checkInput">
                                <label for="nav_hidden" class="themeCustomization-checkInput-label">Hidden</label>
                            </div>
                        </div>
                        <h3 class="mt-4">Footer Type</h3>
                        <div class="input-area flex items-center space-x-4 rtl:space-x-reverse">
                            <div class="input-group flex items-center">
                                <input type="radio" id="footer_sticky" name="footerType" value="sticky"
                                    class="themeCustomization-checkInput">
                                <label for="footer_sticky" class="themeCustomization-checkInput-label">Sticky</label>
                            </div>
                            <div class="input-group flex items-center">
                                <input type="radio" id="footer_static" name="footerType" value="static"
                                    class="themeCustomization-checkInput">
                                <label for="footer_static" class="themeCustomization-checkInput-label">Static</label>
                            </div>
                            <div class="input-group flex items-center">
                                <input type="radio" id="footer_hidden" name="footerType" value="hidden"
                                    class="themeCustomization-checkInput">
                                <label for="footer_hidden" class="themeCustomization-checkInput-label">Hidden</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Settings Modal -->
        <!-- END: Settings -->

        <!-- End: Settings -->
        <div class="flex min-h-screen flex-col justify-between">
            <div>
                <!-- BEGIN: Header -->
                <!-- BEGIN: Header -->
                <div class="z-[9]" id="app_header">
                    <div
                        class="app-header z-[999] bg-white shadow-sm ltr:ml-[248px] rtl:mr-[248px] dark:bg-slate-800 dark:shadow-slate-700">
                        <div class="flex h-full items-center justify-between">
                            <div
                                class="vertical-box flex items-center space-x-2 md:space-x-4 xl:space-x-0 rtl:space-x-reverse">
                                <a href="index.html" class="mobile-logo inline-block xl:hidden">
                                    <img src="/assets/images/logo/logo-c.svg" class="black_logo" alt="logo">
                                    <img src="/assets/images/logo/logo-c-white.svg" class="white_logo"
                                        alt="logo">
                                </a>
                                <button class="smallDeviceMenuController hidden md:inline-block xl:hidden">
                                    <iconify-icon
                                        class="relative top-[2px] bg-transparent text-xl leading-none text-slate-900 dark:text-white"
                                        icon="heroicons-outline:menu-alt-3"></iconify-icon>
                                </button>
                                <button
                                    class="search-modal flex items-center px-1 text-lg text-slate-800 xl:text-sm xl:text-slate-400 rtl:space-x-reverse dark:text-slate-300"
                                    data-bs-toggle="modal" data-bs-target="#searchModal">
                                    <iconify-icon icon="heroicons-outline:search"></iconify-icon>
                                    <span class="ml-3 hidden xl:inline-block">Search...
                                    </span>
                                </button>

                            </div>
                            <!-- end vertcial -->
                            <div class="horizental-box items-center space-x-4 rtl:space-x-reverse">
                                <a href="index.html">
                                    <span class="hidden xl:inline-block">
                                        <img src="/assets/images/logo/logo.svg" class="black_logo" alt="logo">
                                        <img src="/assets/images/logo/logo-white.svg" class="white_logo"
                                            alt="logo">
                                    </span>
                                    <span class="inline-block xl:hidden">
                                        <img src="/assets/images/logo/logo-c.svg" class="black_logo" alt="logo">
                                        <img src="/assets/images/logo/logo-c-white.svg" class="white_logo"
                                            alt="logo">
                                    </span>
                                </a>
                                <button
                                    class="smallDeviceMenuController open-sdiebar-controller inline-block xl:hidden">
                                    <iconify-icon
                                        class="relative top-[2px] bg-transparent text-xl leading-none text-slate-900 dark:text-white"
                                        icon="heroicons-outline:menu-alt-3"></iconify-icon>
                                </button>

                            </div>
                            <!-- end horizental -->

                            <div class="main-menu">
                                <ul>

                                    <li class="menu-item-has-children">
                                        <!--  Single menu -->

                                        <!-- has dropdown -->

                                        <a href="javascript:void()">
                                            <div class="flex flex-1 items-center space-x-[6px] rtl:space-x-reverse">
                                                <span class="icon-box">
                                                    <iconify-icon icon=heroicons-outline:home> </iconify-icon>
                                                </span>
                                                <div class="text-box">Dashboard</div>
                                            </div>
                                            <div
                                                class="relative top-1 flex-none text-sm leading-[1] ltr:ml-3 rtl:mr-3">
                                                <iconify-icon icon="heroicons-outline:chevron-down"> </iconify-icon>
                                            </div>
                                        </a>

                                        <!-- Dropdown menu -->

                                        <ul class="sub-menu">

                                            <li>
                                                <a href=index.html>
                                                    <div class="flex items-start space-x-2 rtl:space-x-reverse">
                                                        <iconify-icon icon=heroicons:presentation-chart-line
                                                            class="text-base leading-[1]"> </iconify-icon>
                                                        <span class="leading-[1]">
                                                            Analytics Dashboard
                                                        </span>
                                                    </div>
                                                </a>
                                            </li>

                                            <li>
                                                <a href=ecommerce-dashboard.html>
                                                    <div class="flex items-start space-x-2 rtl:space-x-reverse">
                                                        <iconify-icon icon=heroicons:shopping-cart
                                                            class="text-base leading-[1]"> </iconify-icon>
                                                        <span class="leading-[1]">
                                                            Ecommerce Dashboard
                                                        </span>
                                                    </div>
                                                </a>
                                            </li>

                                            <li>
                                                <a href=project-dashboard.html>
                                                    <div class="flex items-start space-x-2 rtl:space-x-reverse">
                                                        <iconify-icon icon=heroicons:briefcase
                                                            class="text-base leading-[1]"> </iconify-icon>
                                                        <span class="leading-[1]">
                                                            Project Dashboard
                                                        </span>
                                                    </div>
                                                </a>
                                            </li>

                                            <li>
                                                <a href=crm-dashboard.html>
                                                    <div class="flex items-start space-x-2 rtl:space-x-reverse">
                                                        <iconify-icon icon=ri:customer-service-2-fill
                                                            class="text-base leading-[1]"> </iconify-icon>
                                                        <span class="leading-[1]">
                                                            CRM Dashboard
                                                        </span>
                                                    </div>
                                                </a>
                                            </li>

                                            <li>
                                                <a href=banking-dashboard.html>
                                                    <div class="flex items-start space-x-2 rtl:space-x-reverse">
                                                        <iconify-icon icon=heroicons:wrench-screwdriver
                                                            class="text-base leading-[1]"> </iconify-icon>
                                                        <span class="leading-[1]">
                                                            Banking Dashboard
                                                        </span>
                                                    </div>
                                                </a>
                                            </li>

                                        </ul>

                                        <!-- Megamenu -->

                                    </li>

                                    <li class="menu-item-has-children">
                                        <!--  Single menu -->

                                        <!-- has dropdown -->

                                        <a href="javascript:void()">
                                            <div class="flex flex-1 items-center space-x-[6px] rtl:space-x-reverse">
                                                <span class="icon-box">
                                                    <iconify-icon icon=heroicons-outline:chip> </iconify-icon>
                                                </span>
                                                <div class="text-box">App</div>
                                            </div>
                                            <div
                                                class="relative top-1 flex-none text-sm leading-[1] ltr:ml-3 rtl:mr-3">
                                                <iconify-icon icon="heroicons-outline:chevron-down"> </iconify-icon>
                                            </div>
                                        </a>

                                        <!-- Dropdown menu -->

                                        <ul class="sub-menu">

                                            <li>
                                                <a href=chat.html>
                                                    <div class="flex items-start space-x-2 rtl:space-x-reverse">
                                                        <iconify-icon icon=heroicons-outline:chat
                                                            class="text-base leading-[1]"> </iconify-icon>
                                                        <span class="leading-[1]">
                                                            Chat
                                                        </span>
                                                    </div>
                                                </a>
                                            </li>

                                            <li>
                                                <a href=email.html>
                                                    <div class="flex items-start space-x-2 rtl:space-x-reverse">
                                                        <iconify-icon icon=heroicons-outline:mail
                                                            class="text-base leading-[1]"> </iconify-icon>
                                                        <span class="leading-[1]">
                                                            Email
                                                        </span>
                                                    </div>
                                                </a>
                                            </li>

                                            <li>
                                                <a href=calender>
                                                    <div class="flex items-start space-x-2 rtl:space-x-reverse">
                                                        <iconify-icon icon=heroicons-outline:calendar
                                                            class="text-base leading-[1]"> </iconify-icon>
                                                        <span class="leading-[1]">
                                                            Calendar
                                                        </span>
                                                    </div>
                                                </a>
                                            </li>

                                            <li>
                                                <a href=kanban>
                                                    <div class="flex items-start space-x-2 rtl:space-x-reverse">
                                                        <iconify-icon icon=heroicons-outline:view-boards
                                                            class="text-base leading-[1]"> </iconify-icon>
                                                        <span class="leading-[1]">
                                                            Kanban
                                                        </span>
                                                    </div>
                                                </a>
                                            </li>

                                            <li>
                                                <a href=todo>
                                                    <div class="flex items-start space-x-2 rtl:space-x-reverse">
                                                        <iconify-icon icon=heroicons-outline:clipboard-check
                                                            class="text-base leading-[1]"> </iconify-icon>
                                                        <span class="leading-[1]">
                                                            Todo
                                                        </span>
                                                    </div>
                                                </a>
                                            </li>

                                            <li>
                                                <a href=projects>
                                                    <div class="flex items-start space-x-2 rtl:space-x-reverse">
                                                        <iconify-icon icon=heroicons-outline:document
                                                            class="text-base leading-[1]"> </iconify-icon>
                                                        <span class="leading-[1]">
                                                            Projects
                                                        </span>
                                                    </div>
                                                </a>
                                            </li>

                                        </ul>

                                        <!-- Megamenu -->

                                    </li>

                                    <li class="menu-item-has-children has-megamenu">
                                        <!--  Single menu -->

                                        <!-- has dropdown -->

                                        <a href="javascript:void()">
                                            <div class="flex flex-1 items-center space-x-[6px] rtl:space-x-reverse">
                                                <span class="icon-box">
                                                    <iconify-icon icon=heroicons-outline:view-boards> </iconify-icon>
                                                </span>
                                                <div class="text-box">Pages</div>
                                            </div>
                                            <div
                                                class="relative top-1 flex-none text-sm leading-[1] ltr:ml-3 rtl:mr-3">
                                                <iconify-icon icon="heroicons-outline:chevron-down"> </iconify-icon>
                                            </div>
                                        </a>

                                        <!-- Dropdown menu -->

                                        <!-- Megamenu -->

                                        <div class="rt-mega-menu">
                                            <div class="flex flex-wrap justify-between space-x-8 rtl:space-x-reverse">

                                                <div>
                                                    <!-- mega menu title -->
                                                    <div
                                                        class="mb-2 flex items-center space-x-1 text-sm font-medium text-slate-900 dark:text-white">

                                                        <span> Authentication</span>
                                                    </div>
                                                    <!-- single menu item* -->

                                                    <a href=signin-one.html>

                                                        <div
                                                            class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                                            <span
                                                                class="inline-block h-[6px] w-[6px] flex-none rounded-full border border-slate-600 dark:border-white"></span>
                                                            <span
                                                                class="capitalize text-slate-600 dark:text-slate-300">
                                                                Signin One
                                                            </span>
                                                        </div>

                                                    </a>

                                                    <a href=signin-two.html>

                                                        <div
                                                            class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                                            <span
                                                                class="inline-block h-[6px] w-[6px] flex-none rounded-full border border-slate-600 dark:border-white"></span>
                                                            <span
                                                                class="capitalize text-slate-600 dark:text-slate-300">
                                                                Signin Two
                                                            </span>
                                                        </div>

                                                    </a>

                                                    <a href=signin-three.html>

                                                        <div
                                                            class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                                            <span
                                                                class="inline-block h-[6px] w-[6px] flex-none rounded-full border border-slate-600 dark:border-white"></span>
                                                            <span
                                                                class="capitalize text-slate-600 dark:text-slate-300">
                                                                Signin Three
                                                            </span>
                                                        </div>

                                                    </a>

                                                    <a href=signup-one.html>

                                                        <div
                                                            class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                                            <span
                                                                class="inline-block h-[6px] w-[6px] flex-none rounded-full border border-slate-600 dark:border-white"></span>
                                                            <span
                                                                class="capitalize text-slate-600 dark:text-slate-300">
                                                                Signup One
                                                            </span>
                                                        </div>

                                                    </a>

                                                    <a href=signup-two.html>

                                                        <div
                                                            class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                                            <span
                                                                class="inline-block h-[6px] w-[6px] flex-none rounded-full border border-slate-600 dark:border-white"></span>
                                                            <span
                                                                class="capitalize text-slate-600 dark:text-slate-300">
                                                                Signup Two
                                                            </span>
                                                        </div>

                                                    </a>

                                                    <a href=signup-three.html>

                                                        <div
                                                            class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                                            <span
                                                                class="inline-block h-[6px] w-[6px] flex-none rounded-full border border-slate-600 dark:border-white"></span>
                                                            <span
                                                                class="capitalize text-slate-600 dark:text-slate-300">
                                                                Signup Three
                                                            </span>
                                                        </div>

                                                    </a>

                                                    <a href=forget-password-one.html>

                                                        <div
                                                            class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                                            <span
                                                                class="inline-block h-[6px] w-[6px] flex-none rounded-full border border-slate-600 dark:border-white"></span>
                                                            <span
                                                                class="capitalize text-slate-600 dark:text-slate-300">
                                                                Forget Password One
                                                            </span>
                                                        </div>

                                                    </a>

                                                    <a href=forget-password-two.html>

                                                        <div
                                                            class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                                            <span
                                                                class="inline-block h-[6px] w-[6px] flex-none rounded-full border border-slate-600 dark:border-white"></span>
                                                            <span
                                                                class="capitalize text-slate-600 dark:text-slate-300">
                                                                Forget Password Two
                                                            </span>
                                                        </div>

                                                    </a>

                                                    <a href=forget-password-three.html>

                                                        <div
                                                            class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                                            <span
                                                                class="inline-block h-[6px] w-[6px] flex-none rounded-full border border-slate-600 dark:border-white"></span>
                                                            <span
                                                                class="capitalize text-slate-600 dark:text-slate-300">
                                                                Forget Password Three
                                                            </span>
                                                        </div>

                                                    </a>

                                                    <a href=lock-screen-one.html>

                                                        <div
                                                            class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                                            <span
                                                                class="inline-block h-[6px] w-[6px] flex-none rounded-full border border-slate-600 dark:border-white"></span>
                                                            <span
                                                                class="capitalize text-slate-600 dark:text-slate-300">
                                                                Lock Screen One
                                                            </span>
                                                        </div>

                                                    </a>

                                                    <a href=lock-screen-two.html>

                                                        <div
                                                            class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                                            <span
                                                                class="inline-block h-[6px] w-[6px] flex-none rounded-full border border-slate-600 dark:border-white"></span>
                                                            <span
                                                                class="capitalize text-slate-600 dark:text-slate-300">
                                                                Lock Screen Two
                                                            </span>
                                                        </div>

                                                    </a>

                                                    <a href=lock-screen-three.html>

                                                        <div
                                                            class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                                            <span
                                                                class="inline-block h-[6px] w-[6px] flex-none rounded-full border border-slate-600 dark:border-white"></span>
                                                            <span
                                                                class="capitalize text-slate-600 dark:text-slate-300">
                                                                Lock Screen Three
                                                            </span>
                                                        </div>

                                                    </a>

                                                </div>

                                                <div>
                                                    <!-- mega menu title -->
                                                    <div
                                                        class="mb-2 flex items-center space-x-1 text-sm font-medium text-slate-900 dark:text-white">

                                                        <span> Components</span>
                                                    </div>
                                                    <!-- single menu item* -->

                                                    <a href=typography.html>

                                                        <div
                                                            class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                                            <span
                                                                class="inline-block h-[6px] w-[6px] flex-none rounded-full border border-slate-600 dark:border-white"></span>
                                                            <span
                                                                class="capitalize text-slate-600 dark:text-slate-300">
                                                                typography
                                                            </span>
                                                        </div>

                                                    </a>

                                                    <a href=colors.html>

                                                        <div
                                                            class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                                            <span
                                                                class="inline-block h-[6px] w-[6px] flex-none rounded-full border border-slate-600 dark:border-white"></span>
                                                            <span
                                                                class="capitalize text-slate-600 dark:text-slate-300">
                                                                colors
                                                            </span>
                                                        </div>

                                                    </a>

                                                    <a href=alert.html>

                                                        <div
                                                            class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                                            <span
                                                                class="inline-block h-[6px] w-[6px] flex-none rounded-full border border-slate-600 dark:border-white"></span>
                                                            <span
                                                                class="capitalize text-slate-600 dark:text-slate-300">
                                                                alert
                                                            </span>
                                                        </div>

                                                    </a>

                                                    <a href=button.html>

                                                        <div
                                                            class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                                            <span
                                                                class="inline-block h-[6px] w-[6px] flex-none rounded-full border border-slate-600 dark:border-white"></span>
                                                            <span
                                                                class="capitalize text-slate-600 dark:text-slate-300">
                                                                button
                                                            </span>
                                                        </div>

                                                    </a>

                                                    <a href=card.html>

                                                        <div
                                                            class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                                            <span
                                                                class="inline-block h-[6px] w-[6px] flex-none rounded-full border border-slate-600 dark:border-white"></span>
                                                            <span
                                                                class="capitalize text-slate-600 dark:text-slate-300">
                                                                card
                                                            </span>
                                                        </div>

                                                    </a>

                                                    <a href=carousel.html>

                                                        <div
                                                            class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                                            <span
                                                                class="inline-block h-[6px] w-[6px] flex-none rounded-full border border-slate-600 dark:border-white"></span>
                                                            <span
                                                                class="capitalize text-slate-600 dark:text-slate-300">
                                                                carousel
                                                            </span>
                                                        </div>

                                                    </a>

                                                    <a href=dropdown.html>

                                                        <div
                                                            class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                                            <span
                                                                class="inline-block h-[6px] w-[6px] flex-none rounded-full border border-slate-600 dark:border-white"></span>
                                                            <span
                                                                class="capitalize text-slate-600 dark:text-slate-300">
                                                                dropdown
                                                            </span>
                                                        </div>

                                                    </a>

                                                    <a href=image.html>

                                                        <div
                                                            class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                                            <span
                                                                class="inline-block h-[6px] w-[6px] flex-none rounded-full border border-slate-600 dark:border-white"></span>
                                                            <span
                                                                class="capitalize text-slate-600 dark:text-slate-300">
                                                                image
                                                            </span>
                                                        </div>

                                                    </a>

                                                    <a href=modal.html>

                                                        <div
                                                            class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                                            <span
                                                                class="inline-block h-[6px] w-[6px] flex-none rounded-full border border-slate-600 dark:border-white"></span>
                                                            <span
                                                                class="capitalize text-slate-600 dark:text-slate-300">
                                                                modal
                                                            </span>
                                                        </div>

                                                    </a>

                                                    <a href=progress-bar.html>

                                                        <div
                                                            class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                                            <span
                                                                class="inline-block h-[6px] w-[6px] flex-none rounded-full border border-slate-600 dark:border-white"></span>
                                                            <span
                                                                class="capitalize text-slate-600 dark:text-slate-300">
                                                                Progress bar
                                                            </span>
                                                        </div>

                                                    </a>

                                                    <a href=placeholder.html>

                                                        <div
                                                            class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                                            <span
                                                                class="inline-block h-[6px] w-[6px] flex-none rounded-full border border-slate-600 dark:border-white"></span>
                                                            <span
                                                                class="capitalize text-slate-600 dark:text-slate-300">
                                                                Placeholder
                                                            </span>
                                                        </div>

                                                    </a>

                                                    <a href=tab-accordion.html>

                                                        <div
                                                            class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                                            <span
                                                                class="inline-block h-[6px] w-[6px] flex-none rounded-full border border-slate-600 dark:border-white"></span>
                                                            <span
                                                                class="capitalize text-slate-600 dark:text-slate-300">
                                                                Tab &amp; Accordion
                                                            </span>
                                                        </div>

                                                    </a>

                                                </div>

                                                <div>
                                                    <!-- mega menu title -->
                                                    <div
                                                        class="mb-2 flex items-center space-x-1 text-sm font-medium text-slate-900 dark:text-white">

                                                        <span> Forms</span>
                                                    </div>
                                                    <!-- single menu item* -->

                                                    <a href=input.html>

                                                        <div
                                                            class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                                            <span
                                                                class="inline-block h-[6px] w-[6px] flex-none rounded-full border border-slate-600 dark:border-white"></span>
                                                            <span
                                                                class="capitalize text-slate-600 dark:text-slate-300">
                                                                Input
                                                            </span>
                                                        </div>

                                                    </a>

                                                    <a href=input-group.html>

                                                        <div
                                                            class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                                            <span
                                                                class="inline-block h-[6px] w-[6px] flex-none rounded-full border border-slate-600 dark:border-white"></span>
                                                            <span
                                                                class="capitalize text-slate-600 dark:text-slate-300">
                                                                Input group
                                                            </span>
                                                        </div>

                                                    </a>

                                                    <a href=input-layout.html>

                                                        <div
                                                            class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                                            <span
                                                                class="inline-block h-[6px] w-[6px] flex-none rounded-full border border-slate-600 dark:border-white"></span>
                                                            <span
                                                                class="capitalize text-slate-600 dark:text-slate-300">
                                                                Input layout
                                                            </span>
                                                        </div>

                                                    </a>

                                                    <a href=form-validation.html>

                                                        <div
                                                            class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                                            <span
                                                                class="inline-block h-[6px] w-[6px] flex-none rounded-full border border-slate-600 dark:border-white"></span>
                                                            <span
                                                                class="capitalize text-slate-600 dark:text-slate-300">
                                                                Form validation
                                                            </span>
                                                        </div>

                                                    </a>

                                                    <a href=form-wizard.html>

                                                        <div
                                                            class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                                            <span
                                                                class="inline-block h-[6px] w-[6px] flex-none rounded-full border border-slate-600 dark:border-white"></span>
                                                            <span
                                                                class="capitalize text-slate-600 dark:text-slate-300">
                                                                Wizard
                                                            </span>
                                                        </div>

                                                    </a>

                                                    <a href=input-mask.html>

                                                        <div
                                                            class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                                            <span
                                                                class="inline-block h-[6px] w-[6px] flex-none rounded-full border border-slate-600 dark:border-white"></span>
                                                            <span
                                                                class="capitalize text-slate-600 dark:text-slate-300">
                                                                Input mask
                                                            </span>
                                                        </div>

                                                    </a>

                                                    <a href=file-input>

                                                        <div
                                                            class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                                            <span
                                                                class="inline-block h-[6px] w-[6px] flex-none rounded-full border border-slate-600 dark:border-white"></span>
                                                            <span
                                                                class="capitalize text-slate-600 dark:text-slate-300">
                                                                File input
                                                            </span>
                                                        </div>

                                                    </a>

                                                    <a href=form-repeater.html>

                                                        <div
                                                            class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                                            <span
                                                                class="inline-block h-[6px] w-[6px] flex-none rounded-full border border-slate-600 dark:border-white"></span>
                                                            <span
                                                                class="capitalize text-slate-600 dark:text-slate-300">
                                                                Form repeater
                                                            </span>
                                                        </div>

                                                    </a>

                                                    <a href=textarea.html>

                                                        <div
                                                            class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                                            <span
                                                                class="inline-block h-[6px] w-[6px] flex-none rounded-full border border-slate-600 dark:border-white"></span>
                                                            <span
                                                                class="capitalize text-slate-600 dark:text-slate-300">
                                                                Textarea
                                                            </span>
                                                        </div>

                                                    </a>

                                                    <a href=checkbox.html>

                                                        <div
                                                            class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                                            <span
                                                                class="inline-block h-[6px] w-[6px] flex-none rounded-full border border-slate-600 dark:border-white"></span>
                                                            <span
                                                                class="capitalize text-slate-600 dark:text-slate-300">
                                                                Checkbox
                                                            </span>
                                                        </div>

                                                    </a>

                                                    <a href=radio-button.html>

                                                        <div
                                                            class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                                            <span
                                                                class="inline-block h-[6px] w-[6px] flex-none rounded-full border border-slate-600 dark:border-white"></span>
                                                            <span
                                                                class="capitalize text-slate-600 dark:text-slate-300">
                                                                Radio button
                                                            </span>
                                                        </div>

                                                    </a>

                                                    <a href=switch.html>

                                                        <div
                                                            class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                                            <span
                                                                class="inline-block h-[6px] w-[6px] flex-none rounded-full border border-slate-600 dark:border-white"></span>
                                                            <span
                                                                class="capitalize text-slate-600 dark:text-slate-300">
                                                                Switch
                                                            </span>
                                                        </div>

                                                    </a>

                                                </div>

                                                <div>
                                                    <!-- mega menu title -->
                                                    <div
                                                        class="mb-2 flex items-center space-x-1 text-sm font-medium text-slate-900 dark:text-white">

                                                        <span> Utility</span>
                                                    </div>
                                                    <!-- single menu item* -->

                                                    <a href=invoice.html>

                                                        <div
                                                            class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                                            <span
                                                                class="inline-block h-[6px] w-[6px] flex-none rounded-full border border-slate-600 dark:border-white"></span>
                                                            <span
                                                                class="capitalize text-slate-600 dark:text-slate-300">
                                                                Invoice
                                                            </span>
                                                        </div>

                                                    </a>

                                                    <a href=pricing.html>

                                                        <div
                                                            class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                                            <span
                                                                class="inline-block h-[6px] w-[6px] flex-none rounded-full border border-slate-600 dark:border-white"></span>
                                                            <span
                                                                class="capitalize text-slate-600 dark:text-slate-300">
                                                                Pricing
                                                            </span>
                                                        </div>

                                                    </a>

                                                    <a href=faq.html>

                                                        <div
                                                            class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                                            <span
                                                                class="inline-block h-[6px] w-[6px] flex-none rounded-full border border-slate-600 dark:border-white"></span>
                                                            <span
                                                                class="capitalize text-slate-600 dark:text-slate-300">
                                                                FAQ
                                                            </span>
                                                        </div>

                                                    </a>

                                                    <a href=blank-page.html>

                                                        <div
                                                            class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                                            <span
                                                                class="inline-block h-[6px] w-[6px] flex-none rounded-full border border-slate-600 dark:border-white"></span>
                                                            <span
                                                                class="capitalize text-slate-600 dark:text-slate-300">
                                                                Blank page
                                                            </span>
                                                        </div>

                                                    </a>

                                                    <a href=blog.html>

                                                        <div
                                                            class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                                            <span
                                                                class="inline-block h-[6px] w-[6px] flex-none rounded-full border border-slate-600 dark:border-white"></span>
                                                            <span
                                                                class="capitalize text-slate-600 dark:text-slate-300">
                                                                Blog
                                                            </span>
                                                        </div>

                                                    </a>

                                                    <a href=404.html>

                                                        <div
                                                            class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                                            <span
                                                                class="inline-block h-[6px] w-[6px] flex-none rounded-full border border-slate-600 dark:border-white"></span>
                                                            <span
                                                                class="capitalize text-slate-600 dark:text-slate-300">
                                                                404 page
                                                            </span>
                                                        </div>

                                                    </a>

                                                    <a href=comming-soon.html>

                                                        <div
                                                            class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                                            <span
                                                                class="inline-block h-[6px] w-[6px] flex-none rounded-full border border-slate-600 dark:border-white"></span>
                                                            <span
                                                                class="capitalize text-slate-600 dark:text-slate-300">
                                                                Coming Soon
                                                            </span>
                                                        </div>

                                                    </a>

                                                    <a href=under-maintanance.html>

                                                        <div
                                                            class="flex items-center space-x-2 text-[15px] leading-6 rtl:space-x-reverse">
                                                            <span
                                                                class="inline-block h-[6px] w-[6px] flex-none rounded-full border border-slate-600 dark:border-white"></span>
                                                            <span
                                                                class="capitalize text-slate-600 dark:text-slate-300">
                                                                Under Maintanance page
                                                            </span>
                                                        </div>
                                                    </a>
                                                </div>

                                            </div>
                                        </div>

                                    </li>

                                    <li class="menu-item-has-children">
                                        <!--  Single menu -->

                                        <!-- has dropdown -->

                                        <a href="javascript:void()">
                                            <div class="flex flex-1 items-center space-x-[6px] rtl:space-x-reverse">
                                                <span class="icon-box">
                                                    <iconify-icon icon=heroicons-outline:view-grid-add> </iconify-icon>
                                                </span>
                                                <div class="text-box">Widgets</div>
                                            </div>
                                            <div
                                                class="relative top-1 flex-none text-sm leading-[1] ltr:ml-3 rtl:mr-3">
                                                <iconify-icon icon="heroicons-outline:chevron-down"> </iconify-icon>
                                            </div>
                                        </a>

                                        <!-- Dropdown menu -->

                                        <ul class="sub-menu">

                                            <li>
                                                <a href=basic-widgets.html>
                                                    <div class="flex items-start space-x-2 rtl:space-x-reverse">
                                                        <iconify-icon icon=heroicons-outline:document-text
                                                            class="text-base leading-[1]"> </iconify-icon>
                                                        <span class="leading-[1]">
                                                            Basic
                                                        </span>
                                                    </div>
                                                </a>
                                            </li>

                                            <li>
                                                <a href=statistics-widgets.html>
                                                    <div class="flex items-start space-x-2 rtl:space-x-reverse">
                                                        <iconify-icon icon=heroicons-outline:document-text
                                                            class="text-base leading-[1]"> </iconify-icon>
                                                        <span class="leading-[1]">
                                                            Statistic
                                                        </span>
                                                    </div>
                                                </a>
                                            </li>

                                        </ul>

                                        <!-- Megamenu -->

                                    </li>

                                    <li class="menu-item-has-children">
                                        <!--  Single menu -->

                                        <!-- has dropdown -->

                                        <a href="javascript:void()">
                                            <div class="flex flex-1 items-center space-x-[6px] rtl:space-x-reverse">
                                                <span class="icon-box">
                                                    <iconify-icon icon=heroicons-outline:template> </iconify-icon>
                                                </span>
                                                <div class="text-box">Extra</div>
                                            </div>
                                            <div
                                                class="relative top-1 flex-none text-sm leading-[1] ltr:ml-3 rtl:mr-3">
                                                <iconify-icon icon="heroicons-outline:chevron-down"> </iconify-icon>
                                            </div>
                                        </a>

                                        <!-- Dropdown menu -->

                                        <ul class="sub-menu">

                                            <li>
                                                <a href=basic-table.html>
                                                    <div class="flex items-start space-x-2 rtl:space-x-reverse">
                                                        <iconify-icon icon=heroicons-outline:table
                                                            class="text-base leading-[1]"> </iconify-icon>
                                                        <span class="leading-[1]">
                                                            Basic Table
                                                        </span>
                                                    </div>
                                                </a>
                                            </li>

                                            <li>
                                                <a href=advance-table.html>
                                                    <div class="flex items-start space-x-2 rtl:space-x-reverse">
                                                        <iconify-icon icon=heroicons-outline:table
                                                            class="text-base leading-[1]"> </iconify-icon>
                                                        <span class="leading-[1]">
                                                            Advanced table
                                                        </span>
                                                    </div>
                                                </a>
                                            </li>

                                            <li>
                                                <a href=apex-chart.html>
                                                    <div class="flex items-start space-x-2 rtl:space-x-reverse">
                                                        <iconify-icon icon=heroicons-outline:chart-bar
                                                            class="text-base leading-[1]"> </iconify-icon>
                                                        <span class="leading-[1]">
                                                            Apex chart
                                                        </span>
                                                    </div>
                                                </a>
                                            </li>

                                            <li>
                                                <a href=chartjs.html>
                                                    <div class="flex items-start space-x-2 rtl:space-x-reverse">
                                                        <iconify-icon icon=heroicons-outline:chart-bar
                                                            class="text-base leading-[1]"> </iconify-icon>
                                                        <span class="leading-[1]">
                                                            Chart js
                                                        </span>
                                                    </div>
                                                </a>
                                            </li>

                                            <li>
                                                <a href=map.html>
                                                    <div class="flex items-start space-x-2 rtl:space-x-reverse">
                                                        <iconify-icon icon=heroicons-outline:map
                                                            class="text-base leading-[1]"> </iconify-icon>
                                                        <span class="leading-[1]">
                                                            Map
                                                        </span>
                                                    </div>
                                                </a>
                                            </li>

                                        </ul>

                                        <!-- Megamenu -->

                                    </li>

                                </ul>
                            </div>
                            <!-- end top menu -->
                            <div
                                class="nav-tools leading-0 flex items-center space-x-3 lg:space-x-5 rtl:space-x-reverse">

                                <!-- BEGIN: Language Dropdown  -->

                                <div class="relative">
                                    <button
                                        class="inline-flex items-center rounded-lg text-center text-sm font-medium text-slate-800 focus:outline-none focus:ring-0 dark:text-white"
                                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <iconify-icon icon="circle-flags:uk"
                                            class="mr-0 text-xl md:mr-2 rtl:ml-2"></iconify-icon>
                                        <span
                                            class="hidden text-sm font-medium text-slate-600 md:block dark:text-slate-300">
                                            En</span>
                                    </button>
                                    <!-- Language Dropdown menu -->
                                    <div
                                        class="dropdown-menu !top-[25px] z-10 hidden w-44 divide-y divide-slate-100 overflow-hidden rounded-md border bg-white shadow dark:border-slate-900 dark:bg-slate-800">
                                        <ul class="py-1 text-sm text-slate-800 dark:text-slate-200">
                                            <li>
                                                <a href="#"
                                                    class="flex items-center px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600 dark:hover:text-white">
                                                    <iconify-icon icon="circle-flags:uk"
                                                        class="text-xl ltr:mr-2 rtl:ml-2"></iconify-icon>
                                                    <span class="font-medium">ENG</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="flex items-center px-4 py-2 hover:bg-slate-100 dark:hover:bg-slate-600 dark:hover:text-white">
                                                    <iconify-icon icon="emojione:flag-for-germany"
                                                        class="text-xl ltr:mr-2 rtl:ml-2"></iconify-icon>
                                                    <span class="font-medium">GER</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- Theme Changer -->
                                <!-- END: Language Dropdown -->

                                <!-- BEGIN: Toggle Theme -->
                                <div>
                                    <button id="themeMood"
                                        class="lg:bg-gray-500-f7 flex h-[28px] w-[28px] cursor-pointer flex-col items-center justify-center rounded-full bg-slate-50 text-[20px] text-slate-900 lg:h-[32px] lg:w-[32px] dark:bg-slate-900 dark:text-white lg:dark:bg-slate-900">
                                        <iconify-icon class="hidden text-xl text-slate-800 dark:block dark:text-white"
                                            id="moonIcon"
                                            icon="line-md:sunny-outline-to-moon-alt-loop-transition"></iconify-icon>
                                        <iconify-icon class="block text-xl text-slate-800 dark:hidden dark:text-white"
                                            id="sunIcon"
                                            icon="line-md:moon-filled-to-sunny-filled-loop-transition"></iconify-icon>
                                    </button>
                                </div>
                                <!-- END: TOggle Theme -->

                                <!-- BEGIN: gray-scale Dropdown -->
                                <div>
                                    <button id="grayScale"
                                        class="flex cursor-pointer flex-col items-center justify-center rounded-full text-[20px] text-slate-900 lg:h-[32px] lg:w-[32px] lg:bg-slate-100 dark:text-white lg:dark:bg-slate-900">
                                        <iconify-icon class="text-xl text-slate-800 dark:text-white"
                                            icon="mdi:paint-outline"></iconify-icon>
                                    </button>
                                </div>
                                <!-- END: gray-scale Dropdown -->

                                <!-- BEGIN: Message Dropdown -->
                                <!-- Mail Dropdown -->
                                <div class="relative hidden md:block">
                                    <button
                                        class="flex cursor-pointer flex-col items-center justify-center rounded-full text-[20px] text-slate-900 lg:h-[32px] lg:w-[32px] lg:bg-slate-100 dark:text-white lg:dark:bg-slate-900"
                                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <iconify-icon class="text-xl text-slate-800 dark:text-white"
                                            icon="heroicons-outline:mail"></iconify-icon>
                                        <span
                                            class="absolute -right-1 -top-[6px] z-[45] flex h-4 w-4 flex-col items-center justify-center rounded-full bg-red-500 text-[8px] font-semibold text-white lg:top-0">
                                            10</span>
                                    </button>
                                    <!-- Mail Dropdown -->
                                    <div
                                        class="dropdown-menu lrt:origin-top-right !top-[23px] z-10 hidden w-[335px] divide-y divide-slate-100 overflow-hidden rounded-md border bg-white shadow rtl:origin-top-left dark:divide-slate-700 dark:border-slate-700 dark:bg-slate-800">
                                        <div class="flex items-center justify-between px-4 py-4">
                                            <h3 class="font-Inter text-sm font-medium text-slate-700 dark:text-white">
                                                Messages</h3>
                                            <a class="font-Inter text-xs font-normal text-slate-500 underline dark:text-white"
                                                href="#">See All</a>
                                        </div>
                                        <div class="divide-y divide-slate-100 dark:divide-slate-700" role="none">
                                            <div
                                                class="block w-full px-4 py-2 text-sm text-slate-600 dark:text-slate-300">
                                                <div
                                                    class="relative flex space-x-3 ltr:text-left rtl:space-x-reverse rtl:text-right">
                                                    <div class="flex-none">
                                                        <div
                                                            class="relative h-8 w-8 rounded-full bg-white dark:bg-slate-700">
                                                            <span
                                                                class="bg-secondary-500 absolute right-0 top-0 inline-block h-[10px] w-[10px] rounded-full border border-white dark:border-slate-700"></span>
                                                            <img src="//assets/images/all-img/user.png" alt="user"
                                                                class="block h-full w-full rounded-full border border-transparent object-cover hover:border-white">
                                                        </div>
                                                    </div>
                                                    <div class="flex-1">
                                                        <a href="#"
                                                            class="mb-1 text-sm font-medium text-slate-800 before:absolute before:left-0 before:top-0 before:h-full before:w-full dark:text-slate-300">
                                                            Wade Warren</a>
                                                        <div
                                                            class="mb-1 text-xs text-slate-600 hover:text-[#68768A] dark:text-slate-300">
                                                            Hi! How are you doing?.....</div>
                                                        <div class="text-xs text-slate-400 dark:text-slate-400">
                                                            3 min ago</div>
                                                    </div>
                                                    <div class="flex-0">
                                                        <span
                                                            class="bg-danger-500 flex h-4 w-4 items-center justify-center rounded-full border border-white text-[10px] text-white">
                                                            1</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="block w-full cursor-pointer px-4 py-2 text-sm text-slate-600 dark:text-slate-300">
                                                <div
                                                    class="relative flex space-x-3 ltr:text-left rtl:space-x-reverse rtl:text-right">
                                                    <div class="flex-none">
                                                        <div
                                                            class="relative h-8 w-8 rounded-full bg-white dark:bg-slate-700">
                                                            <span
                                                                class="absolute right-0 top-0 inline-block h-[10px] w-[10px] rounded-full border border-white bg-green-500 dark:border-slate-700"></span>
                                                            <img src="//assets/images/all-img/user2.png"
                                                                alt="user"
                                                                class="block h-full w-full rounded-full border border-transparent object-cover hover:border-white">
                                                        </div>
                                                    </div>
                                                    <div class="flex-1">
                                                        <a href="#"
                                                            class="mb-1 text-sm font-medium text-slate-800 before:absolute before:left-0 before:top-0 before:h-full before:w-full dark:text-slate-300">
                                                            Savannah Nguyen</a>
                                                        <div
                                                            class="mb-1 text-xs text-slate-600 hover:text-[#68768A] dark:text-slate-300">
                                                            Hi! How are you doing?.....</div>
                                                        <div class="text-xs text-slate-400 dark:text-slate-400">3 min
                                                            ago
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="block w-full cursor-pointer px-4 py-2 text-sm text-slate-600 dark:text-slate-300">
                                                <div
                                                    class="relative flex space-x-3 ltr:text-left rtl:space-x-reverse rtl:text-right">
                                                    <div class="flex-none">
                                                        <div
                                                            class="relative h-8 w-8 rounded-full bg-white dark:bg-slate-700">
                                                            <span
                                                                class="absolute right-0 top-0 inline-block h-[10px] w-[10px] rounded-full border border-white bg-green-500 dark:border-slate-700"></span>
                                                            <img src="//assets/images/all-img/user3.png"
                                                                alt="user"
                                                                class="block h-full w-full rounded-full border border-transparent object-cover hover:border-white">
                                                        </div>
                                                    </div>
                                                    <div class="flex-1">
                                                        <a href="#"
                                                            class="mb-1 text-sm font-medium text-slate-800 before:absolute before:left-0 before:top-0 before:h-full before:w-full dark:text-slate-300">
                                                            Ralph Edwards</a>
                                                        <div
                                                            class="mb-1 text-xs text-slate-600 hover:text-[#68768A] dark:text-slate-300">
                                                            Hi! How are you doing?.....</div>
                                                        <div class="text-xs text-slate-400 dark:text-slate-400">
                                                            3 min ago
                                                        </div>
                                                    </div>
                                                    <div class="flex-0">
                                                        <span
                                                            class="bg-danger-500 flex h-4 w-4 items-center justify-center rounded-full border border-white text-[10px] text-white">
                                                            8</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END: Message Dropdown -->

                                <!-- BEGIN: Notification Dropdown -->
                                <!-- Notifications Dropdown area -->
                                <div class="relative hidden md:block">
                                    <button
                                        class="flex cursor-pointer flex-col items-center justify-center rounded-full text-[20px] text-slate-900 lg:h-[32px] lg:w-[32px] lg:bg-slate-100 dark:text-white lg:dark:bg-slate-900"
                                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <iconify-icon class="animate-tada text-xl text-slate-800 dark:text-white"
                                            icon="heroicons-outline:bell"></iconify-icon>
                                        <span
                                            class="absolute -right-1 -top-[6px] z-[99] flex h-4 w-4 flex-col items-center justify-center rounded-full bg-red-500 text-[8px] font-semibold text-white lg:top-0">
                                            4</span>
                                    </button>
                                    <!-- Notifications Dropdown -->
                                    <div
                                        class="dropdown-menu lrt:origin-top-right !top-[23px] z-10 hidden w-[335px] overflow-hidden rounded-md border bg-white shadow rtl:origin-top-left dark:border-slate-700 dark:bg-slate-800">
                                        <div class="flex items-center justify-between px-4 py-4">
                                            <h3 class="font-Inter text-sm font-medium text-slate-700 dark:text-white">
                                                Notifications</h3>
                                            <a class="font-Inter text-xs font-normal text-slate-500 underline dark:text-white"
                                                href="#">See All</a>
                                        </div>
                                        <div class="" role="none">
                                            <div
                                                class="relative block w-full bg-slate-100 px-4 py-2 text-sm text-slate-800 dark:bg-slate-700 dark:bg-opacity-70">
                                                <div class="flex ltr:text-left rtl:text-right">
                                                    <div class="flex-none ltr:mr-3 rtl:ml-3">
                                                        <div class="h-8 w-8 rounded-full bg-white">
                                                            <img src="//assets/images/all-img/user.png" alt="user"
                                                                class="block h-full w-full rounded-full border border-white object-cover">
                                                        </div>
                                                    </div>
                                                    <div class="flex-1">
                                                        <a href="#"
                                                            class="mb-1 text-sm font-medium text-slate-600 before:absolute before:left-0 before:top-0 before:h-full before:w-full dark:text-slate-300">
                                                            Your order is placed</a>
                                                        <div
                                                            class="text-xs leading-4 text-slate-500 dark:text-slate-200">
                                                            Amet minim mollit non deser unt ullamco est sit
                                                            aliqua.</div>
                                                        <div class="mt-1 text-xs text-slate-400 dark:text-slate-400">
                                                            3 min ago
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="block w-full px-4 py-2 text-sm text-slate-600 dark:text-slate-300">
                                                <div class="relative flex ltr:text-left rtl:text-right">
                                                    <div class="flex-none ltr:mr-3 rtl:ml-3">
                                                        <div class="h-8 w-8 rounded-full bg-white">
                                                            <img src="//assets/images/all-img/user2.png"
                                                                alt="user"
                                                                class="block h-full w-full rounded-full border border-transparent object-cover">
                                                        </div>
                                                    </div>
                                                    <div class="flex-1">
                                                        <a href="#"
                                                            class="mb-1 text-sm font-medium text-slate-600 before:absolute before:left-0 before:top-0 before:h-full before:w-full dark:text-slate-300">
                                                            Congratulations Darlene 🎉</a>
                                                        <div
                                                            class="text-xs leading-4 text-slate-600 dark:text-slate-300">
                                                            Won the monthly best seller badge</div>
                                                        3 min ago
                                                    </div>
                                                </div>
                                                <div class="flex-0">
                                                    <span
                                                        class="bg-danger-500 inline-block h-[10px] w-[10px] rounded-full border border-white dark:border-slate-400"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="block w-full px-4 py-2 text-sm text-slate-600 dark:text-slate-300">
                                            <div class="relative flex ltr:text-left rtl:text-right">
                                                <div class="flex-none ltr:mr-3 rtl:ml-3">
                                                    <div class="h-8 w-8 rounded-full bg-white">
                                                        <img src="//assets/images/all-img/user3.png" alt="user"
                                                            class="block h-full w-full rounded-full border border-transparent object-cover">
                                                    </div>
                                                </div>
                                                <div class="flex-1">
                                                    <a href="#"
                                                        class="mb-1 text-sm font-medium text-slate-600 before:absolute before:left-0 before:top-0 before:h-full before:w-full dark:text-slate-300">
                                                        Revised Order 👋</a>
                                                    <div class="text-xs leading-4 text-slate-600 dark:text-slate-300">
                                                        Won the monthly best seller badge</div>
                                                    <div class="mt-1 text-xs text-slate-400 dark:text-slate-400">3 min
                                                        ago</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="block w-full px-4 py-2 text-sm text-slate-600 dark:text-slate-300">
                                            <div class="relative flex ltr:text-left rtl:text-right">
                                                <div class="flex-none ltr:mr-3 rtl:ml-3">
                                                    <div class="h-8 w-8 rounded-full bg-white">
                                                        <img src="//assets/images/all-img/user4.png" alt="user"
                                                            class="block h-full w-full rounded-full border border-transparent object-cover">
                                                    </div>
                                                </div>
                                                <div class="flex-1">
                                                    <a href="#"
                                                        class="mb-1 text-sm font-medium text-slate-600 before:absolute before:left-0 before:top-0 before:h-full before:w-full dark:text-slate-300">
                                                        Brooklyn Simmons</a>
                                                    <div class="text-xs leading-4 text-slate-600 dark:text-slate-300">
                                                        Added you to Top Secret Project group...</div>
                                                    <div class="mt-1 text-xs text-slate-400 dark:text-slate-400">
                                                        3 min ago
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- END: Notification Dropdown -->

                                <!-- BEGIN: Profile Dropdown -->
                                <!-- Profile DropDown Area -->
                                <div class="hidden w-full md:block">
                                    <button
                                        class="inline-flex items-center rounded-lg text-center text-sm font-medium text-slate-800 focus:outline-none focus:ring-0 dark:text-white"
                                        type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <div
                                            class="h-7 w-7 flex-1 rounded-full lg:h-8 lg:w-8 ltr:mr-[10px] rtl:ml-[10px]">
                                            <img src="/assets/images/all-img/user.png" alt="user"
                                                class="block h-full w-full rounded-full object-cover">
                                        </div>
                                        <span
                                            class="hidden flex-none items-center overflow-hidden text-ellipsis whitespace-nowrap text-sm font-normal text-slate-600 lg:flex dark:text-white">@auth
                                                {{ auth()->user()->name }}
                                            @endauth </span>
                                        <svg class="ml-[10px] inline-block hidden h-[16px] w-[16px] text-base lg:inline-block rtl:mr-[10px] dark:text-white"
                                            aria-hidden="true" fill="none" stroke="currentColor"
                                            viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 9l-7 7-7-7"></path>
                                        </svg>
                                    </button>
                                    <!-- Dropdown menu -->
                                    <div
                                        class="dropdown-menu !top-[23px] z-10 hidden w-44 divide-y divide-slate-100 overflow-hidden rounded-md border bg-white shadow dark:border-slate-700 dark:bg-slate-800">
                                        <ul class="py-1 text-sm text-slate-800 dark:text-slate-200">
                                            <li>
                                                <a href="index.html"
                                                    class="font-inter block px-4 py-2 text-sm font-normal text-slate-600 hover:bg-slate-100 dark:text-white dark:hover:bg-slate-600 dark:hover:text-white">
                                                    <iconify-icon icon="heroicons-outline:user"
                                                        class="relative top-[2px] text-lg ltr:mr-1 rtl:ml-1"></iconify-icon>
                                                    <span class="font-Inter">Dashboard</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="chat.html"
                                                    class="font-inter block px-4 py-2 text-sm font-normal text-slate-600 hover:bg-slate-100 dark:text-white dark:hover:bg-slate-600 dark:hover:text-white">
                                                    <iconify-icon icon="heroicons-outline:chat"
                                                        class="relative top-[2px] text-lg ltr:mr-1 rtl:ml-1"></iconify-icon>
                                                    <span class="font-Inter">Chat</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="email.html"
                                                    class="font-inter block px-4 py-2 text-sm font-normal text-slate-600 hover:bg-slate-100 dark:text-white dark:hover:bg-slate-600 dark:hover:text-white">
                                                    <iconify-icon icon="heroicons-outline:mail"
                                                        class="relative top-[2px] text-lg ltr:mr-1 rtl:ml-1"></iconify-icon>
                                                    <span class="font-Inter">Email</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="todo.html"
                                                    class="font-inter block px-4 py-2 text-sm font-normal text-slate-600 hover:bg-slate-100 dark:text-white dark:hover:bg-slate-600 dark:hover:text-white">
                                                    <iconify-icon icon="heroicons-outline:clipboard-check"
                                                        class="relative top-[2px] text-lg ltr:mr-1 rtl:ml-1"></iconify-icon>
                                                    <span class="font-Inter">Todo</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="settings.html"
                                                    class="font-inter block px-4 py-2 text-sm font-normal text-slate-600 hover:bg-slate-100 dark:text-white dark:hover:bg-slate-600 dark:hover:text-white">
                                                    <iconify-icon icon="heroicons-outline:cog"
                                                        class="relative top-[2px] text-lg ltr:mr-1 rtl:ml-1"></iconify-icon>
                                                    <span class="font-Inter">Settings</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="pricing.html"
                                                    class="font-inter block px-4 py-2 text-sm font-normal text-slate-600 hover:bg-slate-100 dark:text-white dark:hover:bg-slate-600 dark:hover:text-white">
                                                    <iconify-icon icon="heroicons-outline:credit-card"
                                                        class="relative top-[2px] text-lg ltr:mr-1 rtl:ml-1"></iconify-icon>
                                                    <span class="font-Inter">Price</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('logout') }}"
                                                    class="font-inter block px-4 py-2 text-sm font-normal text-slate-600 hover:bg-slate-100 dark:text-white dark:hover:bg-slate-600 dark:hover:text-white">
                                                    <iconify-icon icon="heroicons-outline:login"
                                                        class="relative top-[2px] text-lg ltr:mr-1 rtl:ml-1"></iconify-icon>
                                                    <span class="font-Inter">Logout</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- END: Header -->
                                <button class="smallDeviceMenuController leading-0 block md:hidden">
                                    <iconify-icon class="cursor-pointer text-2xl text-slate-900 dark:text-white"
                                        icon="heroicons-outline:menu-alt-3"></iconify-icon>
                                </button>
                                <!-- end mobile menu -->
                            </div>
                            <!-- end nav tools -->
                        </div>
                    </div>
                </div>

                <!-- BEGIN: Search Modal -->
                <div class="modal fade fixed left-0 top-0 hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none"
                    id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
                    <div class="modal-dialog pointer-events-none relative top-1/4 w-auto">
                        <div
                            class="modal-content pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-slate-900">
                            <form>
                                <div class="relative">
                                    <input type="text" class="form-control !py-3 !pr-12" placeholder="Search">
                                    <button
                                        class="absolute right-0 top-1/2 flex h-full w-9 -translate-y-1/2 items-center justify-center border-l border-l-slate-200 text-xl dark:border-l-slate-600 dark:text-slate-300">
                                        <iconify-icon icon="heroicons-solid:search"></iconify-icon>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- END: Search Modal -->
                <!-- END: Header -->
                <!-- END: Header -->
                <div class="content-wrapper transition-all duration-150 ltr:ml-[248px] rtl:mr-[248px]"
                    id="content_wrapper">
                    <div class="page-content">
                        <div class="container-fluid transition-all duration-150" id="page_layout">
                            <div id="content_layout">

                                <!-- BEGIN: Breadcrumb -->
                                <div class="mb-5">
                                    @hasSection('breadcrumb')
                                        @yield('breadcrumb')
                                    @else
                                        <ul class="m-0 list-none p-0">
                                            <li
                                                class="text-primary-500 font-Inter relative top-[3px] inline-block text-base">
                                                <a href="/">
                                                    <iconify-icon icon="heroicons-outline:home"></iconify-icon>
                                                    <iconify-icon icon="heroicons-outline:chevron-right"
                                                        class="relative text-sm text-slate-500 rtl:rotate-180"></iconify-icon>
                                                </a>
                                            </li>
                                            <li
                                                class="font-Inter relative inline-block text-sm text-slate-500 dark:text-white">
                                                Table
                                            </li>
                                        </ul>
                                    @endif
                                </div>
                                <!-- END: BreadCrumb -->

                                @yield('section')

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('partials.footer')

        <div
            class="custom-dropshadow footer-bg bothrefm-0 fixed bottom-0 left-0 z-[9999] flex w-full items-center justify-around bg-white bg-no-repeat px-4 py-[12px] backdrop-blur-[40px] backdrop-filter md:hidden dark:bg-slate-700">
            <a href="chat.html">
                <div>
                    <span
                        class="relative mb-1 flex cursor-pointer flex-col items-center justify-center rounded-full text-[20px] text-slate-900 dark:text-white">
                        <iconify-icon icon="heroicons-outline:mail"></iconify-icon>
                        <span
                            class="lg:hrefp-0 -hrefp-2 absolute right-[5px] z-[99] flex h-4 w-4 flex-col items-center justify-center rounded-full bg-red-500 text-[8px] font-semibold text-white">
                            10
                        </span>
                    </span>
                    <span class="block text-[11px] text-slate-600 dark:text-slate-300">
                        Messages
                    </span>
                </div>
            </a>
            <a href="profile.html"
                class="footer-bg relative z-[-1] -mt-[40px] flex h-[65px] w-[65px] items-center justify-center rounded-full bg-white bg-no-repeat backdrop-blur-[40px] backdrop-filter dark:bg-slate-700">
                <div class="hrefp-[0px] custom-dropshadow relative left-[0px] h-[50px] w-[50px] rounded-full">
                    <img src="/assets/images/users/user-1.jpg" alt=""
                        class="h-full w-full rounded-full border-2 border-slate-100">
                </div>
            </a>
            <a href="#">
                <div>
                    <span
                        class="relative mb-1 flex cursor-pointer flex-col items-center justify-center rounded-full text-[20px] text-slate-900 dark:text-white">
                        <iconify-icon icon="heroicons-outline:bell"></iconify-icon>
                        <span
                            class="lg:hrefp-0 -hrefp-2 absolute right-[17px] z-[99] flex h-4 w-4 flex-col items-center justify-center rounded-full bg-red-500 text-[8px] font-semibold text-white">
                            2
                        </span>
                    </span>
                    <span class="block text-[11px] text-slate-600 dark:text-slate-300">
                        Notifications
                    </span>
                </div>
            </a>
        </div>
        </div>
    </main>
    <!-- scripts -->
    <script src="/assets/js/jquery-3.6.0.min.js"></script>
    <script src="/assets/js/rt-plugins.js"></script>
    <script src="/assets/js/app.js"></script>
    <script>
        @yield('script')
    </script>
</body>

</html>
