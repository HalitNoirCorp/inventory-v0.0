<template>
  <div class="iq-sidebar  sidebar-default ">
    <div class="iq-sidebar-logo d-flex align-items-center justify-content-between">
      <router-link :to="{name: 'layout.dashboard1'}" class="header-logo">
        <img :src="logo" class="img-fluid rounded-normal" alt="logo">
        <h5 class="logo-title light-logo ml-3">POSDash</h5>
      </router-link>
      <div class="iq-menu-bt-sidebar">
        <i class="las la-bars wrapper-menu"></i>
      </div>
    </div>
    <div class="data-scrollbar" data-scroll="1" id="sidebar-scrollbar">
        <nav class="iq-sidebar-menu">
            <ul id="iq-sidebar-toggle" class="iq-menu">
                <li :class="checkActive('layout.dashboard1') ? 'active' : ''">
                    <router-link :to="{name: 'layout.dashboard1'}" class="svg-icon">                        
                        <svg  class="svg-icon" id="p-dash1" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line>
                        </svg>
                        <span class="ml-4">Dashboards</span>
                    </router-link>
                </li>
                <li :class="checkActive(product) ? 'active' : ''">
                    <a v-b-toggle.product class="collapsed" data-toggle="collapse" aria-expanded="false">
                        <svg class="svg-icon" id="p-dash2" width="20" height="20"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle>
                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                        </svg>
                        <span class="ml-4">Products</span>
                        <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="10 15 15 20 20 15"></polyline><path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                        </svg>
                    </a>
                    <b-collapse tag="ul" id="product" class="iq-submenu" accordion="my-accordion">
                        <li :class="checkActive('product.listproduct') ? 'active' : ''">
                            <router-link :to="{name: 'product.listproduct'}">
                                <i class="las la-minus"></i><span>List Product</span>
                            </router-link>
                        </li>
                        <li :class="checkActive('product.addproduct') ? 'active' : ''">
                            <router-link :to="{name: 'product.addproduct'}">
                                <i class="las la-minus"></i><span>Add Product</span>
                            </router-link>
                        </li>
                    </b-collapse>
                </li>
                <li :class="checkActive(categories) ? 'active' : ''">
                    <a v-b-toggle.category class="collapsed" >
                        <svg class="svg-icon" id="p-dash3" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect>
                            <path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>
                        </svg>
                        <span class="ml-4">Categories</span>
                        <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="10 15 15 20 20 15"></polyline><path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                        </svg>
                    </a>
                    <b-collapse tag="ul" id="category" class="iq-submenu" accordion="my-accordion">
                            <li :class="checkActive('category.listcategory') ? 'active' : ''">
                                    <router-link :to="{name: 'category.listcategory'}">
                                        <i class="las la-minus"></i><span>List Category</span>
                                    </router-link>
                            </li>
                            <li :class="checkActive('category.addcategory') ? 'active' : ''">
                                    <router-link :to="{ name: 'category.addcategory'}">
                                        <i class="las la-minus"></i><span>Add Category</span>
                                    </router-link>
                            </li>
                    </b-collapse>
                </li>
                <li :class="checkActive(sale) ? 'active' : ''">
                    <a v-b-toggle.sale class="collapsed">
                        <svg class="svg-icon" id="p-dash4" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path><path d="M22 12A10 10 0 0 0 12 2v10z"></path>
                        </svg>
                        <span class="ml-4">Sale</span>
                        <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="10 15 15 20 20 15"></polyline><path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                        </svg>
                    </a>
                    <b-collapse tag="ul" id="sale" class="iq-submenu" accordion="my-accordion">
                            <li :class="checkActive('sale.listsale') ? 'active' : ''">
                                    <router-link :to="{name: 'sale.listsale'}">
                                        <i class="las la-minus"></i><span>List Sale</span>
                                    </router-link>
                            </li>
                            <li :class="checkActive('sale.addsale') ? 'active' : ''">
                                    <router-link :to="{name: 'sale.addsale'}">
                                        <i class="las la-minus"></i><span>Add Sale</span>
                                    </router-link>
                            </li>
                    </b-collapse>
                </li>
                <li :class="checkActive(purchases) ? 'active' : ''">
                    <a v-b-toggle.purchase class="collapsed">
                        <svg class="svg-icon" id="p-dash5" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect>
                            <line x1="1" y1="10" x2="23" y2="10"></line>
                        </svg>
                        <span class="ml-4">Purchases</span>
                        <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="10 15 15 20 20 15"></polyline><path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                        </svg>
                    </a>
                    <b-collapse tag="ul" id="purchase" class="iq-submenu" accordion="my-accordion">
                            <li :class="checkActive('purchase.listpurchases') ? 'active' : ''">
                                    <router-link :to="{name: 'purchase.listpurchases'}">
                                        <i class="las la-minus"></i><span>List Purchases</span>
                                    </router-link>
                            </li>
                            <li :class="checkActive('purchase.addpurchase') ? 'active' : ''">
                                    <router-link :to="{name: 'purchase.addpurchase'}">
                                        <i class="las la-minus"></i><span>Add purchase</span>
                                    </router-link>
                            </li>
                    </b-collapse>
                </li>
                <li :class="checkActive(returns) ? 'active' : ''">
                    <a v-b-toggle.return class="collapsed">
                        <svg class="svg-icon" id="p-dash6" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="4 14 10 14 10 20"></polyline><polyline points="20 10 14 10 14 4"></polyline><line x1="14" y1="10" x2="21" y2="3"></line><line x1="3" y1="21" x2="10" y2="14"></line>
                        </svg>
                        <span class="ml-4">Returns</span>
                        <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="10 15 15 20 20 15"></polyline><path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                        </svg>
                    </a>
                    <b-collapse tag="ul" id="return" class="iq-submenu" accordion="my-accordion">
                            <li :class="checkActive('return.listreturns') ? 'active' : ''">
                                    <router-link :to="{name: 'return.listreturns'}">
                                        <i class="las la-minus"></i><span>List Returns</span>
                                    </router-link>
                            </li>
                            <li :class="checkActive('return.addreturn') ? 'active' : ''">
                                    <router-link :to="{name: 'return.addreturn'}">
                                        <i class="las la-minus"></i><span>Add Return</span>
                                    </router-link>
                            </li>
                    </b-collapse>
                </li>
                <li :class="checkActive(people) ? 'active' : ''">
                    <a v-b-toggle.people class="collapsed" >
                        <svg class="svg-icon" id="p-dash8" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                        <span class="ml-4">People</span>
                        <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="10 15 15 20 20 15"></polyline><path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                        </svg>
                    </a>
                    <b-collapse tag="ul" id="people" class="iq-submenu" accordion="my-accordion">
                            <li :class="checkActive('people.customers') ? 'active' : ''">
                                    <router-link :to="{name: 'people.customers'}">
                                        <i class="las la-minus"></i><span>Customers</span>
                                    </router-link>
                            </li>
                            <li :class="checkActive('people.addcustomers') ? 'active' : ''">
                                    <router-link :to="{name: 'people.addcustomers'}">
                                        <i class="las la-minus"></i><span>Add Customers</span>
                                    </router-link>
                            </li>
                            <li :class="checkActive('people.users') ? 'active' : ''">
                                    <router-link :to="{name: 'people.users'}">
                                        <i class="las la-minus"></i><span>Users</span>
                                    </router-link>
                            </li>
                            <li :class="checkActive('people.addusers') ? 'active' : ''">
                                    <router-link :to="{name: 'people.addusers'}">
                                        <i class="las la-minus"></i><span>Add Users</span>
                                    </router-link>
                            </li>
                            <li :class="checkActive('people.suppliers') ? 'active' : ''">
                                    <router-link :to="{name: 'people.suppliers'}">
                                        <i class="las la-minus"></i><span>Suppliers</span>
                                    </router-link>
                            </li>
                            <li :class="checkActive('people.addsuppliers') ? 'active' : ''">
                                    <router-link :to="{name: 'people.addsuppliers'}">
                                        <i class="las la-minus"></i><span>Add Suppliers</span>
                                    </router-link>
                            </li>
                    </b-collapse>
                </li>
                <li :class="checkActive('layout.report') ? 'active' : ''">
                    <router-link :to="{name: 'layout.report'}">
                        <svg class="svg-icon" id="p-dash7" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline>
                        </svg>
                        <span class="ml-4">Reports</span>
                    </router-link>
                    <ul id="reports" class="iq-submenu" >
                    </ul>
                </li>
                <li :class="checkActive(pages.concat(user,ui,auth,pricing,error)) ? 'active' : ''">
                    <a v-b-toggle.otherpage class="collapsed" >
                        <svg class="svg-icon" id="p-dash9" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><rect x="7" y="7" width="3" height="9"></rect><rect x="14" y="7" width="3" height="5"></rect>
                        </svg>
                        <span class="ml-4">other page</span>
                        <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="10 15 15 20 20 15"></polyline><path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                        </svg>
                    </a>
                    <b-collapse tag="ul" id="otherpage" class="iq-submenu " accordion="my-accordion">
                            <li :class="checkActive(user) ? 'active' : ''">
                                <a v-b-toggle.user class="collapsed">
                                    <svg class="svg-icon" id="p-dash10" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><polyline points="17 11 19 13 23 9"></polyline>
                                    </svg>
                                    <span class="ml-4">User Details</span>
                                    <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="10 15 15 20 20 15"></polyline><path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                                    </svg>
                                </a>
                                <b-collapse tag="ul" id="user" class="iq-submenu" accordion="child-accordion">
                                        <li :class="checkActive('app.user-profile') ? 'active' : ''">
                                            <router-link :to="{name: 'app.user-profile'}">
                                                <i class="las la-minus"></i><span>User Profile</span>
                                            </router-link>
                                        </li>
                                        <li :class="checkActive('app.user-add') ? 'active' : ''">
                                            <router-link :to="{name: 'app.user-add'}">
                                                <i class="las la-minus"></i><span>User Add</span>
                                            </router-link>
                                        </li>
                                        <li :class="checkActive('app.user-list') ? 'active' : ''">
                                            <router-link :to="{name: 'app.user-list'}">
                                                <i class="las la-minus"></i><span>User List</span>
                                            </router-link>
                                        </li>
                                </b-collapse>
                            </li>
                            <li :class="checkActive(ui) ? 'active' : ''">
                                <a v-b-toggle.ui class="collapsed">
                                   <svg class="svg-icon" id="p-dash11" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
                                    </svg>
                                    <span class="ml-4">UI Elements</span>
                                    <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="10 15 15 20 20 15"></polyline><path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                                    </svg>
                                </a>
                                <b-collapse tag="ul" id="ui" class="iq-submenu" accordion="child-accordion">
                                        <li :class="checkActive('Ui.avatars') ? 'active' : ''">
                                            <router-link :to="{name: 'Ui.avatars'}">
                                                <i class="las la-minus"></i><span>Avatars</span>
                                            </router-link>
                                        </li>
                                        <li :class="checkActive('Ui.alerts') ? 'active' : ''">
                                            <router-link :to="{name: 'Ui.alerts'}">
                                                <i class="las la-minus"></i><span>Alerts</span>
                                            </router-link>
                                        </li>
                                        <li :class="checkActive('Ui.badges') ? 'active' : ''">
                                            <router-link :to="{name: 'Ui.badges'}">
                                                <i class="las la-minus"></i><span>Badges</span>
                                            </router-link>
                                        </li>
                                        <li :class="checkActive('Ui.breadcrumbs') ? 'active' : ''">
                                            <router-link :to="{name: 'Ui.breadcrumbs'}">
                                                <i class="las la-minus"></i><span>Breadcrumb</span>
                                            </router-link>
                                        </li>
                                        <li :class="checkActive('Ui.buttons') ? 'active' : ''">
                                            <router-link :to="{name: 'Ui.buttons'}">
                                                <i class="las la-minus"></i><span>Buttons</span>
                                            </router-link>
                                        </li>
                                        <li :class="checkActive('Ui.button-groups') ? 'active' : ''">
                                            <router-link :to="{name: 'Ui.button-groups'}">
                                                <i class="las la-minus"></i><span>Buttons Group</span>
                                            </router-link>
                                        </li>
                                        <li :class="checkActive('Ui.boxshadows') ? 'active' : ''">
                                            <router-link :to="{name: 'Ui.boxshadows'}">
                                                <i class="las la-minus"></i><span>Box Shadow</span>
                                            </router-link>
                                        </li>
                                        <li :class="checkActive('Ui.colors') ? 'active' : ''">
                                            <router-link :to="{name: 'Ui.colors'}">
                                                <i class="las la-minus"></i><span>Colors</span>
                                            </router-link>
                                        </li>
                                        <li :class="checkActive('Ui.cards') ? 'active' : ''">
                                            <router-link :to="{name: 'Ui.cards'}">
                                                <i class="las la-minus"></i><span>Cards</span>
                                            </router-link>
                                        </li>
                                        <li :class="checkActive('Ui.carousels') ? 'active' : ''">
                                            <router-link :to="{name: 'Ui.carousels'}">
                                                <i class="las la-minus"></i><span>Carousel</span>
                                            </router-link>
                                        </li>
                                        <li :class="checkActive('Ui.grids') ? 'active' : ''">
                                            <router-link :to="{name: 'Ui.grids'}">
                                                <i class="las la-minus"></i><span>Grid</span>
                                            </router-link>
                                        </li>
                                        <li :class="checkActive('Ui.helper-classes') ? 'active' : ''">
                                            <router-link :to="{name: 'Ui.helper-classes'}">
                                                <i class="las la-minus"></i><span>Helper classes</span>
                                            </router-link>
                                        </li>
                                        <li :class="checkActive('Ui.images') ? 'active' : ''">
                                            <router-link :to="{name: 'Ui.images'}">
                                                <i class="las la-minus"></i><span>Images</span>
                                            </router-link>
                                        </li>
                                        <li :class="checkActive('Ui.list-groups') ? 'active' : ''">
                                            <router-link :to="{name: 'Ui.list-groups'}">
                                                <i class="las la-minus"></i><span>list Group</span>
                                            </router-link>
                                        </li>
                                        <li  :class="checkActive('Ui.media-objects') ? 'active' : ''">
                                            <router-link :to="{name: 'Ui.media-objects'}">
                                                <i class="las la-minus"></i><span>Media</span>
                                            </router-link>
                                        </li>
                                        <li :class="checkActive('Ui.modals') ? 'active' : ''">
                                            <router-link :to="{name: 'Ui.modals'}">
                                                <i class="las la-minus"></i><span>Modal</span>
                                            </router-link>
                                        </li>
                                        <li :class="checkActive('Ui.notifications') ? 'active' : ''">
                                            <router-link :to="{name: 'Ui.notifications'}">
                                                <i class="las la-minus"></i><span>Notifications</span>
                                            </router-link>
                                        </li>
                                        <li :class="checkActive('Ui.paginations') ? 'active' : ''">
                                            <router-link :to="{name: 'Ui.paginations'}">
                                                <i class="las la-minus"></i><span>Pagination</span>
                                            </router-link>
                                        </li>
                                        <li :class="checkActive('Ui.popovers') ? 'active' : ''">
                                            <router-link :to="{name: 'Ui.popovers'}">
                                                <i class="las la-minus"></i><span>Popovers</span>
                                            </router-link>
                                        </li>
                                        <li :class="checkActive('Ui.progressbars') ? 'active' : ''">
                                            <router-link :to="{name: 'Ui.progressbars'}">
                                                <i class="las la-minus"></i><span>Progressbars</span>
                                            </router-link>
                                        </li>
                                        <li :class="checkActive('Ui.typographys') ? 'active' : ''">
                                            <router-link :to="{name: 'Ui.typographys'}">
                                                <i class="las la-minus"></i><span>Typography</span>
                                            </router-link>
                                        </li>
                                        <li :class="checkActive('Ui.tabs') ? 'active' : ''">
                                            <router-link :to="{name: 'Ui.tabs'}">
                                                <i class="las la-minus"></i><span>Tabs</span>
                                            </router-link>
                                        </li>
                                        <li :class="checkActive('Ui.tooltips') ? 'active' : ''">
                                            <router-link :to="{name: 'Ui.tooltips'}">
                                                <i class="las la-minus"></i><span>Tooltips</span>
                                            </router-link>
                                        </li>
                                        <li :class="checkActive('Ui.Embed-videos') ? 'active' : ''">
                                            <router-link :to="{name: 'Ui.Embed-videos'}">
                                                <i class="las la-minus"></i><span>Video</span>
                                            </router-link>
                                        </li>
                                </b-collapse>
                            </li>
                            <li :class="checkActive(auth) ? 'active' : ''">
                                <a v-b-toggle.auth class="collapsed">
                                    <svg class="svg-icon" id="p-dash12" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline>
                                    </svg>
                                    <span class="ml-4">Authentication</span>
                                    <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="10 15 15 20 20 15"></polyline><path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                                    </svg>
                                </a>
                                <b-collapse tag="ul" id="auth" class="iq-submenu" accordion="child-accordion">
                                        <li :class="checkActive('auth.login') ? 'active' : ''">
                                            <router-link :to="{name: 'auth.login'}">
                                                <i class="las la-minus"></i><span>Login</span>
                                            </router-link>
                                        </li>
                                        <li :class="checkActive('auth.register') ? 'active' : ''">
                                            <router-link :to="{name: 'auth.register'}">
                                                <i class="las la-minus"></i><span>Register</span>
                                            </router-link>
                                        </li>
                                        <li :class="checkActive('auth.recover-password') ? 'active' : ''">
                                            <router-link :to="{name: 'auth.recover-password'}">
                                                <i class="las la-minus"></i><span>Recover Password</span>
                                            </router-link>
                                        </li>
                                        <li :class="checkActive('auth.confirm-mail') ? 'active' : ''">
                                            <router-link :to="{name: 'auth.confirm-mail'}">
                                                <i class="las la-minus"></i><span>Confirm Mail</span>
                                            </router-link>
                                        </li>
                                        <li :class="checkActive('auth.lock-screen') ? 'active' : ''">
                                            <router-link :to="{name: 'auth.lock-screen'}">
                                                <i class="las la-minus"></i><span>Lock Screen</span>
                                            </router-link>
                                        </li>
                                </b-collapse>
                            </li>
                            <li :class="checkActive(form) ? 'active' : ''">
                                <a v-b-toggle.form class="collapsed svg-icon">
                                    <svg class="svg-icon" id="p-dash13" width="20" height="20"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect>
                                    </svg>
                                    <span class="ml-4">Forms</span>
                                    <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="10 15 15 20 20 15"></polyline><path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                                    </svg>
                                </a>
                                <b-collapse tag="ul" id="form" class="iq-submenu" accordion="child-accordion">
                                    <li :class="checkActive('controls.form-layout') ? 'active' : ''">
                                        <router-link :to="{name: 'controls.form-layout'}">
                                            <i class="las la-minus"></i><span class="">Form Elements</span>
                                        </router-link>
                                    </li>
                                    <li :class="checkActive('controls.form-input') ? 'active' : ''">
                                        <router-link :to="{name: 'controls.form-input'}" class="svg-icon">
                                           <i class="las la-minus"></i><span class="">Form Input</span>
                                        </router-link>
                                    </li>
                                    <li :class="checkActive('controls.form-validation') ? 'active' : ''">
                                        <router-link :to="{name: 'controls.form-validation'}" class="svg-icon">
                                            <i class="las la-minus"></i><span class="">Form Validation</span>
                                        </router-link>
                                    </li>
                                    <li :class="checkActive('controls.form-switch') ? 'active' : ''">
                                        <router-link :to="{name: 'controls.form-switch'}" class="svg-icon">
                                            <i class="las la-minus"></i><span class="">Form Switch</span>
                                        </router-link>
                                    </li>
                                    <li :class="checkActive('controls.form-checkbox') ? 'active' : ''">
                                        <router-link :to="{name: 'controls.form-checkbox'}" class="svg-icon">
                                            <i class="las la-minus"></i><span class="">Form Checkbox</span>
                                        </router-link>
                                    </li>
                                    <li :class="checkActive('controls.form-radio') ? 'active' : ''">
                                        <router-link :to="{name: 'controls.form-radio'}" class="svg-icon">
                                            <i class="las la-minus"></i><span class="">Form Radio</span>
                                        </router-link>
                                    </li>
                                    <li :class="checkActive('controls.form-textarea') ? 'active' : ''">
                                        <router-link :to="{name: 'controls.form-textarea'}" class="svg-icon">
                                            <i class="las la-minus"></i><span class="">Form Textarea</span>
                                        </router-link>
                                    </li>
                                </b-collapse>
                            </li>
                            <li :class="checkActive(table) ? 'active' : ''">
                                <a v-b-toggle.table class="collapsed">
                                    <svg class="svg-icon" id="p-dash14" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect>
                                    </svg>
                                    <span class="ml-4">Table</span>
                                    <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="10 15 15 20 20 15"></polyline><path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                                    </svg>
                                </a>
                                <b-collapse tag="ul" id="table" class="iq-submenu" accordion="child-accordion">
                                        <li :class="checkActive('table.basic-table') ? 'active' : ''">
                                            <router-link :to="{name: 'table.basic-table'}" >
                                                <i class="las la-minus"></i><span>Basic Tables</span>
                                            </router-link>
                                        </li>
                                        <li :class="checkActive('table.data-table') ? 'active' : ''">
                                            <router-link :to="{name: 'table.data-table'}" >
                                                <i class="las la-minus"></i><span>Data Table</span>
                                            </router-link>
                                        </li>
                                        <li :class="checkActive('table.tree-table') ? 'active' : ''">
                                            <router-link :to="{name: 'table.tree-table'}" >
                                                <i class="las la-minus"></i><span>Table Tree</span>
                                            </router-link>
                                        </li>
                                </b-collapse>
                            </li>
                            <li :class="checkActive(pricing) ? 'active' : ''">
                                <a v-b-toggle.pricing class="collapsed" >
                                    <svg class="svg-icon" id="p-dash16" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <ellipse cx="12" cy="5" rx="9" ry="3"></ellipse><path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"></path><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"></path>
                                    </svg>
                                    <span class="ml-4">Pricing</span>
                                    <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="10 15 15 20 20 15"></polyline><path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                                    </svg>
                                </a>
                                <b-collapse tag="ul" id="pricing" class="iq-submenu" accordion="child-accordion">
                                        <li :class="checkActive('price.pay') ? 'active' : ''">
                                            <router-link :to="{name: 'price.pay'}" >
                                                <i class="las la-minus"></i><span>Pricing 1</span>
                                            </router-link>
                                        </li>
                                        <li :class="checkActive('price.pay2') ? 'active' : ''">
                                            <router-link :to="{name: 'price.pay2'}" >
                                                <i class="las la-minus"></i><span>Pricing 2</span>
                                            </router-link>
                                        </li>
                                </b-collapse>
                            </li>
                            <li :class="checkActive('pages.invoices') ? 'active' : ''">
                                <router-link :to="{name: 'pages.invoices'}" class="svg-icon">
                                    <svg class="svg-icon" id="p-dash07" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline>
                                    </svg>
                                    <span class="ml-4">Invoice</span>
                                </router-link>
                            </li>
                            <li :class="checkActive(error) ? 'active' : ''">
                                <a v-b-toggle.pages-error class="collapsed" >
                                    <svg class="svg-icon" id="p-dash17" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path><line x1="12" y1="9" x2="12" y2="13"></line><line x1="12" y1="17" x2="12.01" y2="17"></line>
                                    </svg>
                                    <span class="ml-4">Error</span>
                                    <svg class="svg-icon iq-arrow-right arrow-active" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <polyline points="10 15 15 20 20 15"></polyline><path d="M4 4h7a4 4 0 0 1 4 4v12"></path>
                                    </svg>
                                </a>
                                <b-collapse tag="ul" id="pages-error" class="iq-submenu" accordion="child-accordion">
                                        <li :class="checkActive('error.404') ? 'active' : ''">
                                            <router-link :to="{name: 'error.404'}">
                                                <i class="las la-minus"></i><span>Error 404</span>
                                            </router-link>
                                        </li>
                                        <li :class="checkActive('error.500') ? 'active' : ''">
                                            <router-link :to="{name: 'error.500'}">
                                                <i class="las la-minus"></i><span>Error 500</span>
                                            </router-link>
                                        </li>
                                </b-collapse>
                            </li>
                            <li :class="checkActive('pages.blank-page') ? 'active' : ''">
                                    <router-link :to="{name: 'pages.blank-page'}">
                                        <svg class="svg-icon" id="p-dash18" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline>
                                        </svg>
                                        <span class="ml-4">Blank Page</span>
                                    </router-link>
                            </li>
                            <li :class="checkActive('pages.maintenance') ? 'active' : ''">
                                    <router-link :to="{name: 'pages.maintenance'}">
                                        <svg class="svg-icon" id="p-dash19" width="20" height="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path>
                                        </svg>
                                        <span class="ml-4">Maintenance</span>
                                    </router-link>
                            </li>
                    </b-collapse>
                </li>
            </ul>
        </nav>
        <div id="sidebar-bottom" class="position-relative sidebar-bottom">
            <div class="card border-none">
                <div class="card-body p-0">
                    <div class="sidebarbottom-content">
                        <div class="image"><img src="@/assets/images/layouts/side-bkg.png" class="img-fluid" alt="side-bkg"></div>
                        <h6 class="mt-4 px-4 body-title">Get More Feature by Upgrading</h6>
                        <button type="button" class="btn sidebar-bottom-btn mt-4">Go Premium</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="p-3"></div>
    </div>

  </div>
</template>
<script>
import { mapGetters } from 'vuex'
import {core} from '@/config/pluginInit'
export default {
  name:"SidebarStyle",
  data () {
    return{
      product:['product.listproduct','product.addproduct'],
      sale:['sale.listsale','sale.addsale'],
      categories:[ 'category.listcategory','category.addcategory'],
      purchases:['purchase.listpurchases','purchase.addpurchase'],
      returns:['return.listreturns','return.addreturn'],
      people:['people.customers','people.addcustomers','people.users','people.addusers','people.suppliers','people.addsuppliers'],
      user:['app.user-profile','app.user-add','app.user-list'],
      ui:['Ui.avatars','Ui.alerts','Ui.badges','Ui.breadcrumbs','Ui.buttons','Ui.button-groups','Ui.boxshadows','Ui.colors','Ui.cards','Ui.carousels','Ui.grids','Ui.helper-classes','Ui.images','Ui.list-groups','Ui.media-objects','Ui.modals','Ui.notifications'
      ,'Ui.paginations','Ui.popovers','Ui.progressbars','Ui.typographys','Ui.tabs','Ui.tooltips','Ui.Embed-videos'],
      auth:['auth.login','auth.register','auth.recover-password','auth.confirm-mail','auth.lock-screen'],
      pricing:['price.pay','price.pay2'],
      error:['error.404','error.500'],
      form:['controls.form-checkbox','controls.form-layout','controls.form-input','controls.form-radio','controls.form-switch','controls.form-textarea','controls.form-validation',],
      table:['table.basic-table','table.data-table','table.edit-table',],
      pages:[]
    }
  },
  mounted () {
    core.SmoothScrollbar()
    core.changesidebar()
  },
   destroyed () {
    core.SmoothScrollbar()
    core.changesidebar()
  },
  computed : {
        ...mapGetters({
            appName: 'appName',
            logo:'logo'
        })
    },
    methods: {
    checkActive(route) {
        if (this.$route.name == route) {
            return true;
        }
        if (route.includes(this.$route.name)) {
            return true
        }
    }
}

}
</script>
