<div class="iq-sidebar sidebar-default">
    <div class="iq-sidebar-logo d-flex align-items-center justify-content-between">
        <a href="{{ route('dashboard.1') }}" class="header-logo">
            <img src="{{ asset('images/logo.png') }}" class="img-fluid rounded-normal light-logo" alt="logo">
{{--            <img src="{{ asset('images/logo.png') }}" class="img-fluid rounded-normal darkmode-logo" alt="logo">--}}
            <h5 class="logo-title light-logo ml-3">POSDash</h5>
        </a>
        <div class="side-menu-bt-sidebar">
            <i class="las la-bars wrapper-menu"></i>
        </div>
    </div>
    <div class="data-scrollbar" data-scroll="1">
        <nav class="iq-sidebar-menu">
            <ul id="iq-sidebar-toggle" class="iq-menu">
                <li class="{{ activeRoute('dashboard1') }}">
                    <a href="{{ route('dashboard.1') }}" class="svg-icon">
                        <svg  class="svg-icon" id="p-dash1" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line>
                        </svg>
                        <span class="ml-4">Dashboards</span>
                    </a>
                </li>
                <li class=" ">
                    <a href="#product" class="collapsed" data-toggle="collapse" aria-expanded="false">
                        <svg class="svg-icon" id="p-dash2" width="20" height="20"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle>
                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                        </svg>
                        <span class="ml-4">Products</span>
                        <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="10 15 15 20 20 15"></polyline><path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                        </svg>
                    </a>
                    <ul id="product" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="{{activeRoute('list-product')}}">
                            <a href="{{route('list.product')}}">
                                <i class="las la-minus"></i><span>List Product</span>
                            </a>
                        </li>
                        <li class="{{activeRoute('add-product')}}">
                            <a href="{{route('add.product')}}">
                                <i class="las la-minus"></i><span>Add Product</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=" ">
                    <a href="#category" class="collapsed" data-toggle="collapse" aria-expanded="false">
                        <svg class="svg-icon" id="p-dash3" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect>
                            <path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>
                        </svg>
                        <span class="ml-4">Categories</span>
                        <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="10 15 15 20 20 15"></polyline><path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                        </svg>
                    </a>
                    <ul id="category" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="{{activeRoute('list-category')}}">
                            <a href="{{route('list.category')}}">
                                <i class="las la-minus"></i><span>List Category</span>
                            </a>
                        </li>
                        <li class="{{activeRoute('add-category')}}">
                            <a href="{{route('add.category')}}">
                                <i class="las la-minus"></i><span>Add Category</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=" ">
                    <a href="#sale" class="collapsed" data-toggle="collapse" aria-expanded="false">
                        <svg class="svg-icon" id="p-dash4" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path><path d="M22 12A10 10 0 0 0 12 2v10z"></path>
                        </svg>
                        <span class="ml-4">Sale</span>
                        <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="10 15 15 20 20 15"></polyline><path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                        </svg>
                    </a>
                    <ul id="sale" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="{{activeRoute('list-sale')}}">
                            <a href="{{route('list.sale')}}">
                                <i class="las la-minus"></i><span>List Sale</span>
                            </a>
                        </li>
                        <li class="{{activeRoute('add-sale')}}">
                            <a href="{{route('add.sale')}}">
                                <i class="las la-minus"></i><span>Add Sale</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=" ">
                    <a href="#purchase" class="collapsed" data-toggle="collapse" aria-expanded="false">
                        <svg class="svg-icon" id="p-dash5" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect>
                            <line x1="1" y1="10" x2="23" y2="10"></line>
                        </svg>
                        <span class="ml-4">Purchases</span>
                        <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="10 15 15 20 20 15"></polyline><path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                        </svg>
                    </a>
                    <ul id="purchase" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="{{activeRoute('list-purchase')}}">
                            <a href="{{route('list.purchase')}}l">
                                <i class="las la-minus"></i><span>List Purchases</span>
                            </a>
                        </li>
                        <li class="{{activeRoute('add-purchase')}}">
                            <a href="{{route('add.purchase')}}">
                                <i class="las la-minus"></i><span>Add purchase</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=" ">
                    <a href="#return" class="collapsed" data-toggle="collapse" aria-expanded="false">
                        <svg class="svg-icon" id="p-dash6" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="4 14 10 14 10 20"></polyline><polyline points="20 10 14 10 14 4"></polyline><line x1="14" y1="10" x2="21" y2="3"></line><line x1="3" y1="21" x2="10" y2="14"></line>
                        </svg>
                        <span class="ml-4">Returns</span>
                        <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="10 15 15 20 20 15"></polyline><path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                        </svg>
                    </a>
                    <ul id="return" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="{{activeRoute('list-return')}}">
                            <a href="{{route('list.return')}}">
                                <i class="las la-minus"></i><span>List Returns</span>
                            </a>
                        </li>
                        <li class="{{activeRoute('add-return')}}">
                            <a href="{{route('add.return')}}">
                                <i class="las la-minus"></i><span>Add Return</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class=" ">
                    <a href="#people" class="collapsed" data-toggle="collapse" aria-expanded="false">
                        <svg class="svg-icon" id="p-dash8" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                        <span class="ml-4">People</span>
                        <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="10 15 15 20 20 15"></polyline><path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                        </svg>
                    </a>
                    <ul id="people" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class="{{activeRoute('people/customer')}}">
                            <a href="{{route('people.customer')}}">
                                <i class="las la-minus"></i><span>Customers</span>
                            </a>
                        </li>
                        <li class="{{activeRoute('people/add-customer')}}">
                            <a href="{{route('people.add.customer')}}">
                                <i class="las la-minus"></i><span>Add Customers</span>
                            </a>
                        </li>
                        <li class="{{activeRoute('people/user')}}">
                            <a href="{{route('people.user')}}">
                                <i class="las la-minus"></i><span>Users</span>
                            </a>
                        </li>
                        <li class="{{activeRoute('people/add-user')}}">
                            <a href="{{route('people.add.user')}}}">
                                <i class="las la-minus"></i><span>Add Users</span>
                            </a>
                        </li>
                        <li class="{{activeRoute('people/supplier')}}">
                            <a href="{{route('people.supplier')}}">
                                <i class="las la-minus"></i><span>Suppliers</span>
                            </a>
                        </li>
                        <li class="{{activeRoute('people/add-supplier')}}">
                            <a href="{{route('people.add.supplier')}}">
                                <i class="las la-minus"></i><span>Add Suppliers</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="{{activeRoute('report')}}">
                    <a href="{{route('report')}}" class="">
                        <svg class="svg-icon" id="p-dash7" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline>
                        </svg>
                        <span class="ml-4">Reports</span>
                    </a>
                    <ul id="reports" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                    </ul>
                </li>
                <li class=" ">
                    <a href="#otherpage" class="collapsed" data-toggle="collapse" aria-expanded="false">
                        <svg class="svg-icon" id="p-dash9" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><rect x="7" y="7" width="3" height="9"></rect><rect x="14" y="7" width="3" height="5"></rect>
                        </svg>
                        <span class="ml-4">other page</span>
                        <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="10 15 15 20 20 15"></polyline><path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                        </svg>
                    </a>
                    <ul id="otherpage" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                        <li class=" ">
                            <a href="#user" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                <svg class="svg-icon" id="p-dash10" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><polyline points="17 11 19 13 23 9"></polyline>
                                </svg>
                                <span class="ml-4">User Details</span>
                                <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="10 15 15 20 20 15"></polyline><path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                                </svg>
                            </a>
                            <ul id="user" class="iq-submenu collapse" data-parent="#otherpage">
                                <li class="{{ activeRoute('app/user/profile') }}">
                                    <a href="{{ route('app.userdetail.userprofile') }}" class="svg-icon">
                                        <i class="las la-minus"></i><span>User Profile</span>
                                    </a>
                                </li>
                                <li class="{{ activeRoute('app/user/add') }}">
                                    <a href="{{ route('app.userdetail.useradd') }}" class="svg-icon">
                                        <i class="las la-minus"></i><span>User Add</span>
                                    </a>
                                </li>
                                <li class="{{ activeRoute('app/user/userlist') }}">
                                    <a href="{{ route('app.userdetail.userlist') }}" class="svg-icon">
                                        <i class="las la-minus"></i><span>User List</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class=" ">
                            <a href="#ui" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                <svg class="svg-icon" id="p-dash11" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
                                </svg>
                                <span class="ml-4">UI Elements</span>
                                <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="10 15 15 20 20 15"></polyline><path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                                </svg>
                            </a>
                            <ul id="ui" class="iq-submenu collapse" data-parent="#otherpage">
                                <li class="{{ activeRoute('ui/avatars') }}">
                                    <a href="{{ route('ui.avatars') }}" class="svg-icon">
                                        <i class="las la-minus"></i><span>Avatars</span>
                                    </a>
                                </li>
                                <li class="{{ activeRoute('ui/alerts') }}">
                                    <a href="{{ route('ui.alerts') }}" class="svg-icon">
                                        <i class="las la-minus"></i><span>Alerts</span>
                                    </a>
                                </li>
                                <li class="{{ activeRoute('ui/badges') }}">
                                    <a href="{{ route('ui.badges') }}" class="svg-icon">
                                        <i class="las la-minus"></i><span>Badges</span>
                                    </a>
                                </li>
                                <li class="{{ activeRoute('ui/breadcrumb') }}">
                                    <a href="{{ route('ui.breadcrumb') }}" class="svg-icon">
                                        <i class="las la-minus"></i><span>Breadcrumb</span>
                                    </a>
                                </li>
                                <li class="{{ activeRoute('ui/buttons') }}">
                                    <a href="{{ route('ui.buttons') }}" class="svg-icon">
                                        <i class="las la-minus"></i><span>Buttons</span>
                                    </a>
                                </li>
                                <li class="{{ activeRoute('ui/buttongroup') }}">
                                    <a href="{{ route('ui.buttongroup') }}" class="svg-icon">
                                        <i class="las la-minus"></i><span>Buttons Group</span>
                                    </a>
                                </li>
                                <li class="{{ activeRoute('ui/boxshadows') }}">
                                    <a href="{{ route('ui.boxshadows') }}" class="svg-icon">
                                        <i class="las la-minus"></i><span>Box Shadow</span>
                                    </a>
                                </li>
                                <li class="{{ activeRoute('ui/colors') }}">
                                    <a href="{{ route('ui.colors') }}" class="svg-icon">
                                        <i class="las la-minus"></i><span>Colors</span>
                                    </a>
                                </li>
                                <li class="{{ activeRoute('ui/cards') }}">
                                    <a href="{{ route('ui.cards') }}" class="svg-icon">
                                        <i class="las la-minus"></i><span>Cards</span>
                                    </a>
                                </li>
                                <li class="{{ activeRoute('ui/carousel') }}">
                                    <a href="{{ route('ui.carousel') }}" class="svg-icon">
                                        <i class="las la-minus"></i><span>Carousel</span>
                                    </a>
                                </li>
                                <li class="{{ activeRoute('ui/grid') }}">
                                    <a href="{{ route('ui.grid') }}" class="svg-icon">
                                        <i class="las la-minus"></i><span>Grid</span>
                                    </a>
                                </li>
{{--                                <li class="{{#compare active '==' 'ui-helper-classes'}}active{{/compare}}">--}}
{{--                                    <a href="../backend/ui-helper-classes.html">--}}
{{--                                        <i class="las la-minus"></i><span>Helper classes</span>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
                                <li class="{{ activeRoute('ui/images') }}">
                                    <a href="{{ route('ui.images') }}" class="svg-icon">
                                        <i class="las la-minus"></i><span>Images</span>
                                    </a>
                                </li>
                                <li class="{{ activeRoute('ui/listgroup') }}">
                                    <a href="{{ route('ui.listgroup') }}" class="svg-icon">
                                        <i class="las la-minus"></i><span>list Group</span>
                                    </a>
                                </li>
                                <li class="{{ activeRoute('ui/media') }}">
                                    <a href="{{ route('ui.media') }}" class="svg-icon">
                                        <i class="las la-minus"></i><span>Media</span>
                                    </a>
                                </li>
                                <li class="{{ activeRoute('ui/modal') }}">
                                    <a href="{{ route('ui.modal') }}" class="svg-icon">
                                        <i class="las la-minus"></i><span>Modal</span>
                                    </a>
                                </li>
                                <li class="{{ activeRoute('ui/notification') }}">
                                    <a href="{{ route('ui.notification') }}" class="svg-icon">
                                        <i class="las la-minus"></i><span>Notifications</span>
                                    </a>
                                </li>
                                <li class="{{ activeRoute('ui/pagination') }}">
                                    <a href="{{ route('ui.pagination') }}" class="svg-icon">
                                        <i class="las la-minus"></i><span>Pagination</span>
                                    </a>
                                </li>
                                <li class="{{ activeRoute('ui/popovers') }}">
                                    <a href="{{ route('ui.popovers') }}" class="svg-icon">>
                                        <i class="las la-minus"></i><span>Popovers</span>
                                    </a>
                                </li>
                                <li class="{{ activeRoute('ui/progressbars') }}">
                                    <a href="{{ route('ui.progressbars') }}" class="svg-icon">
                                        <i class="las la-minus"></i><span>Progressbars</span>
                                    </a>
                                </li>
                                <li class="{{ activeRoute('ui/typography') }}">
                                    <a href="{{ route('ui.typography') }}" class="svg-icon">
                                        <i class="las la-minus"></i><span>Typography</span>
                                    </a>
                                </li>
                                <li class="{{ activeRoute('ui/tabs') }}">
                                    <a href="{{ route('ui.tabs') }}" class="svg-icon">
                                        <i class="las la-minus"></i><span>Tabs</span>
                                    </a>
                                </li>
                                <li class="{{ activeRoute('ui/tooltips') }}">
                                    <a href="{{ route('ui.tooltips') }}" class="svg-icon">
                                        <i class="las la-minus"></i><span>Tooltips</span>
                                    </a>
                                </li>
                                <li class="{{ activeRoute('ui/video') }}">
                                    <a href="{{ route('ui.video') }}" class="svg-icon">
                                        <i class="las la-minus"></i><span>Video</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class=" ">
                            <a href="#auth" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                <svg class="svg-icon" id="p-dash12" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline>
                                </svg>
                                <span class="ml-4">Authentication</span>
                                <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="10 15 15 20 20 15"></polyline><path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                                </svg>
                            </a>
                            <ul id="auth" class="iq-submenu collapse" data-parent="#otherpage">
                                <li class="{{ activeRoute('auth/login') }}">
                                    <a href="{{ route('auth.login') }}" class="svg-icon">
                                        <i class="las la-minus"></i><span>Login</span>
                                    </a>
                                </li>
                                <li class="{{ activeRoute('auth/register') }}">
                                    <a href="{{ route('auth.register') }}" class="svg-icon">
                                        <i class="las la-minus"></i><span>Register</span>
                                    </a>
                                </li>
                                <li class="{{ activeRoute('auth/recover-password') }}">
                                    <a href="{{ route('auth.recover-password') }}" class="svg-icon">
                                        <i class="las la-minus"></i><span>Recover Password</span>
                                    </a>
                                </li>
                                <li class="{{ activeRoute('auth/confirm-email') }}">
                                    <a href="{{ route('auth.confirm-email') }}" class="svg-icon">
                                        <i class="las la-minus"></i><span>Confirm Mail</span>
                                    </a>
                                </li>
{{--                                <li class="{{#compare active '==' 'auth-lock-screen'}}active{{/compare}}">--}}
{{--                                    <a href="../backend/auth-lock-screen.html">--}}
{{--                                        <i class="las la-minus"></i><span>Lock Screen</span>--}}
{{--                                    </a>--}}
{{--                                </li>--}}
                            </ul>
                        </li>
                        <li class="">
                            <a href="#form" class="collapsed svg-icon" data-toggle="collapse" aria-expanded="false">
                                <svg class="svg-icon" id="p-dash13" width="20" height="20"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect>
                                </svg>
                                <span class="ml-4">Forms</span>
                                <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="10 15 15 20 20 15"></polyline><path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                                </svg>
                            </a>
                            <ul id="form" class="iq-submenu collapse" data-parent="#otherpage">
                                <li class="{{ activeRoute('forms/control/layout') }}">
                                    <a href="{{ route('forms.layout') }}">
                                        <i class="las la-minus"></i><span class="">Form Elements</span>
                                    </a>
                                </li>
                                <li class="{{ activeRoute('forms/control/inputgroup') }}">
                                    <a href="{{ route('forms.inputgroup') }}" class="svg-icon">
                                        <i class="las la-minus"></i><span class="">Form Input</span>
                                    </a>
                                </li>
                                <li class="{{ activeRoute('forms/control/validation') }}">
                                    <a href="{{ route('forms.validation') }}" class="svg-icon">
                                        <i class="las la-minus"></i><span class="">Form Validation</span>
                                    </a>
                                </li>
                                <li class="{{ activeRoute('forms/control/switch') }}">
                                    <a href="{{ route('forms.switch') }}" class="svg-icon">
                                        <i class="las la-minus"></i><span class="">Form Switch</span>
                                    </a>
                                </li>
                                <li class="{{ activeRoute('forms/control/checkbox') }}">
                                    <a href="{{ route('forms.checkbox') }}" class="svg-icon">
                                        <i class="las la-minus"></i><span class="">Form Checkbox</span>
                                    </a>
                                </li>
                                <li class="{{ activeRoute('forms/control/radio') }}">
                                    <a href="{{ route('forms.radio') }}" class="svg-icon">
                                        <i class="las la-minus"></i><span class="">Form Radio</span>
                                    </a>
                                </li>
                                <li class="{{ activeRoute('forms/control/textarea') }}">
                                    <a href="{{ route('forms.textarea') }}" class="svg-icon">
                                        <i class="las la-minus"></i><span class="">Form Textarea</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class=" ">
                            <a href="#table" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                <svg class="svg-icon" id="p-dash14" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect>
                                </svg>
                                <span class="ml-4">Table</span>
                                <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="10 15 15 20 20 15"></polyline><path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                                </svg>
                            </a>
                            <ul id="table" class="iq-submenu collapse" data-parent="#otherpage">
                                <li class="{{ activeRoute('table/basics') }}">
                                    <a href="{{ route('table.tablebasics') }}" class="svg-icon">
                                        <i class="las la-minus"></i><span>Basic Tables</span>
                                    </a>
                                </li>
                                <li class="{{ activeRoute('table/data') }}">
                                    <a href="{{ route('table.tabledata') }}" class="svg-icon">
                                        <i class="las la-minus"></i><span>Data Table</span>
                                    </a>
                                </li>
                                <li class="{{ activeRoute('table/tree') }}">
                                    <a href="{{ route('table.tabletree') }}" class="svg-icon">
                                        <i class="las la-minus"></i><span>Table Tree</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class=" ">
                            <a href="#pricing" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                <svg class="svg-icon" id="p-dash16" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <ellipse cx="12" cy="5" rx="9" ry="3"></ellipse><path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>
                                </svg>
                                <span class="ml-4">Pricing</span>
                                <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="10 15 15 20 20 15"></polyline><path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                                </svg>
                            </a>
                            <ul id="pricing" class="iq-submenu collapse" data-parent="#otherpage">
                                <li class="{{ activeRoute('extra/pricing') }}">
                                    <a href="{{ route('extrapages.pricing') }}" class="svg-icon">
                                        <i class="las la-minus"></i><span>Pricing 1</span>
                                    </a>
                                </li>
                                <li class="{{activeRoute('extra/pricing2')}}">
                                    <a href="{{route('extrapages.pricing2')}}">
                                        <i class="las la-minus"></i><span>Pricing 2</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="{{ activeRoute('extra/invoice') }}">
                            <a href="{{route('extrapages.invoice')}}" class="svg-icon">
                                <svg class="svg-icon" id="p-dash07" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline>
                                </svg>
                                <span class="ml-4">Invoice</span>
                            </a>
                        </li>
                        <li class=" ">
                            <a href="#pages-error" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                <svg class="svg-icon" id="p-dash17" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path><line x1="12" y1="9" x2="12" y2="13"></line><line x1="12" y1="17" x2="12.01" y2="17"></line>
                                </svg>
                                <span class="ml-4">Error</span>
                                <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="10 15 15 20 20 15"></polyline><path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                                </svg>
                            </a>
                            <ul id="pages-error" class="iq-submenu collapse" data-parent="#otherpage">
                                <li class="{{ activeRoute('extra/error/error404') }}">
                                    <a href="{{ route('pageError.error404') }}" class="svg-icon">
                                        <i class="las la-minus"></i><span>Error 404</span>
                                    </a>
                                </li>
                                <li class="{{ activeRoute('extra/error/error500') }}">
                                    <a href="{{ route('pageError.error500') }}" class="svg-icon">
                                        <i class="las la-minus"></i><span>Error 500</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="{{ activeRoute('extra/blankpage') }}">
                            <a href="{{ route('extrapages.blankpage') }}" class="svg-icon">
                                <svg class="svg-icon" id="p-dash18" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline>
                                </svg>
                                <span class="ml-4">Blank Page</span>
                            </a>
                        </li>
                        <li class="{{ activeRoute('extra/maintenance') }}">
                            <a href="{{ route('extrapages.maintenance') }}" class="svg-icon">
                                <svg class="svg-icon" id="p-dash19" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path>
                                </svg>
                                <span class="ml-4">Maintenance</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="sidebar-bottom" class="position-relative sidebar-bottom">
            <div class="card border-none">
                <div class="card-body p-0">
                    <div class="sidebarbottom-content">
                        <div class="image"><img src="{{asset('images/layouts/side-bkg.png')}}" class="img-fluid" alt="side-bkg"></div>
                        <h6 class="mt-4 px-4 body-title">Get More Feature by Upgrading</h6>
                        <button type="button" class="btn sidebar-bottom-btn mt-4">Go Premium</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="p-3"></div>
    </div>
</div>
