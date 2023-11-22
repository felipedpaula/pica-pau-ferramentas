<!-- Begin Main Header Area -->
<header class="main-header-area">
    <div class="header-middle header-sticky py-3 py-lg-0">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="header-middle-wrap position-relative">

                        <a href="{{route('admin.dashboard')}}" class="header-logo">
                            <img rel='preload' width="189px" height="54px" src="{{asset('assets/site/images/logos-text/logo_vermelho.svg')}}" alt="Header Logo">
                        </a>

                        <div class="main-menu d-none d-lg-block">
                            <nav class="main-nav">
                                <ul>
                                    <li>
                                        <a href="/">Home</a>
                                    </li>
                                    <li>
                                        <a href="/sobre">Sobre nós</a>
                                    </li>
                                    <li class="megamenu-holder">
                                        <a href="/categorias">Categorias <i class="pe-7s-angle-down"></i></a>
                                        <ul class="drop-menu megamenu">
                                            <li>
                                                <span class="title">Shop Layout</span>
                                                <ul>
                                                    <li>
                                                        <a href="shop.html">Shop Default</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-grid-fullwidth.html">Shop Grid Fullwidth</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-right-sidebar.html">Shop Right Sidebar</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-list-fullwidth.html">Shop List Fullwidth</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-list-left-sidebar.html">Shop List Left Sidebar</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-list-right-sidebar.html">Shop List Right Sidebar</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <span class="title">Product Style</span>
                                                <ul>
                                                    <li>
                                                        <a href="single-product-variable.html">Single Product Variable</a>
                                                    </li>
                                                    <li>
                                                        <a href="single-product-group.html">Single Product Group</a>
                                                    </li>
                                                    <li>
                                                        <a href="single-product.html">Single Product Default</a>
                                                    </li>
                                                    <li>
                                                        <a href="single-product-affiliate.html">Single Product Affiliate</a>
                                                    </li>
                                                    <li>
                                                        <a href="single-product-sale.html">Single Product Sale</a>
                                                    </li>
                                                    <li>
                                                        <a href="single-product-sticky.html">Single Product Sticky</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <span class="title">Product Related</span>
                                                <ul>
                                                    <li>
                                                        <a href="my-account.html">My Account</a>
                                                    </li>
                                                    <li>
                                                        <a href="login-register.html">Login | Register</a>
                                                    </li>
                                                    <li>
                                                        <a href="cart.html">Shopping Cart</a>
                                                    </li>
                                                    <li>
                                                        <a href="wishlist.html">Wishlist</a>
                                                    </li>
                                                    <li>
                                                        <a href="compare.html">Compare</a>
                                                    </li>
                                                    <li>
                                                        <a href="checkout.html">Checkout</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <div class="banner">
                                                    <img src="/tromic/assets/images/megamenu/banner/1.jpg" alt="Menu Banner">
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="/contato">Contato</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="header-right">
                            <ul>
                                <li class="menu-opt d-lg-flex">
                                    <a href="{{env('APP_URL')}}/admin/dashboard">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M11.3745 20H12.6255V19.233C12.6255 18.298 13.2005 17.458 14.0895 17.091C15.0095 16.708 16.0145 16.896 16.6765 17.562L17.2155 18.103L18.1035 17.215L17.5585 16.671C16.8955 16.009 16.7085 15.005 17.0815 14.114C17.0815 14.114 17.0825 14.113 17.0825 14.112L17.0935 14.084C17.4575 13.201 18.2985 12.625 19.2335 12.625H19.9995V11.375H19.2335C18.2985 11.375 17.4575 10.8 17.0915 9.911C16.7065 8.991 16.8955 7.986 17.5615 7.323L18.1025 6.784L17.2155 5.897L16.6705 6.442C16.0085 7.104 15.0055 7.291 14.1145 6.919C13.2015 6.542 12.6255 5.702 12.6255 4.767V4H11.3745V4.767C11.3745 5.702 10.7995 6.542 9.91051 6.909C8.99151 7.294 7.98651 7.105 7.32351 6.438L6.78451 5.897L5.89651 6.785L6.44151 7.329C7.10351 7.991 7.29151 8.995 6.91851 9.886C6.54251 10.799 5.70151 11.375 4.76651 11.375H3.99951V12.625H4.76651C5.70151 12.625 6.54251 13.2 6.90851 14.089C7.29351 15.009 7.10451 16.014 6.43851 16.677L5.89751 17.216L6.78451 18.103L7.32951 17.558C7.99151 16.896 8.99451 16.709 9.88551 17.081C10.7985 17.458 11.3745 18.298 11.3745 19.233V20ZM12.9425 22H11.0505C10.1265 22 9.37451 21.248 9.37451 20.324V19.233C9.37451 19.086 9.25751 18.985 9.14751 18.94C9.00351 18.881 8.84951 18.869 8.74351 18.972L7.97351 19.743C7.31751 20.397 6.25151 20.399 5.59651 19.743L4.25651 18.403C3.93851 18.085 3.76451 17.663 3.76451 17.213C3.76551 16.764 3.94051 16.342 4.25951 16.024L5.02751 15.259C5.13251 15.154 5.12151 15 5.07451 14.889C5.01451 14.742 4.91451 14.625 4.76651 14.625H3.68251C2.75451 14.625 1.99951 13.871 1.99951 12.943V11.051C1.99951 10.126 2.75151 9.375 3.67651 9.375H4.76651C4.91351 9.375 5.01451 9.257 5.05951 9.147C5.11951 9.003 5.13151 8.848 5.02751 8.744L4.25651 7.974C3.60251 7.317 3.60251 6.251 4.25651 5.597L5.59651 4.257C5.91451 3.939 6.33551 3.765 6.78451 3.765H6.78651C7.23551 3.765 7.65851 3.94 7.97551 4.259L8.74051 5.028C8.84551 5.134 9.00051 5.122 9.11151 5.075C9.25751 5.014 9.37451 4.914 9.37451 4.767V3.683C9.37451 2.755 10.1295 2 11.0575 2H12.9495C13.8735 2 14.6255 2.752 14.6255 3.676V4.767C14.6255 4.914 14.7425 5.015 14.8525 5.06C14.9975 5.12 15.1515 5.133 15.2565 5.028L16.0265 4.257C16.6825 3.603 17.7485 3.601 18.4035 4.257L19.7445 5.598C20.0625 5.915 20.2365 6.337 20.2355 6.787C20.2355 7.235 20.0605 7.658 19.7415 7.975L18.9725 8.741C18.8675 8.846 18.8785 9 18.9255 9.111C18.9855 9.258 19.0855 9.375 19.2335 9.375H20.3175C21.2455 9.375 21.9995 10.129 21.9995 11.057V12.949C21.9995 13.874 21.2485 14.625 20.3235 14.625H19.2335C19.0865 14.625 18.9855 14.743 18.9405 14.853C18.9395 14.854 18.9275 14.884 18.9265 14.886C18.8805 14.997 18.8685 15.152 18.9725 15.256L19.7435 16.026C20.3975 16.683 20.3975 17.749 19.7435 18.403L18.4035 19.743C18.0855 20.061 17.6645 20.235 17.2155 20.235H17.2135C16.7645 20.235 16.3415 20.06 16.0245 19.741L15.2595 18.972C15.1545 18.867 14.9985 18.879 14.8885 18.925C14.7425 18.986 14.6255 19.086 14.6255 19.233V20.317C14.6255 21.245 13.8705 22 12.9425 22V22ZM12 10.5C11.173 10.5 10.5 11.173 10.5 12C10.5 12.827 11.173 13.5 12 13.5C12.827 13.5 13.5 12.827 13.5 12C13.5 11.173 12.827 10.5 12 10.5M12 15.5C10.07 15.5 8.50001 13.93 8.50001 12C8.50001 10.07 10.07 8.5 12 8.5C13.93 8.5 15.5 10.07 15.5 12C15.5 13.93 13.93 15.5 12 15.5" fill="#003D6D"/>
                                            <mask id="mask0_239_82" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="1" y="2" width="21" height="20">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M11.3745 20H12.6255V19.233C12.6255 18.298 13.2005 17.458 14.0895 17.091C15.0095 16.708 16.0145 16.896 16.6765 17.562L17.2155 18.103L18.1035 17.215L17.5585 16.671C16.8955 16.009 16.7085 15.005 17.0815 14.114C17.0815 14.114 17.0825 14.113 17.0825 14.112L17.0935 14.084C17.4575 13.201 18.2985 12.625 19.2335 12.625H19.9995V11.375H19.2335C18.2985 11.375 17.4575 10.8 17.0915 9.911C16.7065 8.991 16.8955 7.986 17.5615 7.323L18.1025 6.784L17.2155 5.897L16.6705 6.442C16.0085 7.104 15.0055 7.291 14.1145 6.919C13.2015 6.542 12.6255 5.702 12.6255 4.767V4H11.3745V4.767C11.3745 5.702 10.7995 6.542 9.91051 6.909C8.99151 7.294 7.98651 7.105 7.32351 6.438L6.78451 5.897L5.89651 6.785L6.44151 7.329C7.10351 7.991 7.29151 8.995 6.91851 9.886C6.54251 10.799 5.70151 11.375 4.76651 11.375H3.99951V12.625H4.76651C5.70151 12.625 6.54251 13.2 6.90851 14.089C7.29351 15.009 7.10451 16.014 6.43851 16.677L5.89751 17.216L6.78451 18.103L7.32951 17.558C7.99151 16.896 8.99451 16.709 9.88551 17.081C10.7985 17.458 11.3745 18.298 11.3745 19.233V20ZM12.9425 22H11.0505C10.1265 22 9.37451 21.248 9.37451 20.324V19.233C9.37451 19.086 9.25751 18.985 9.14751 18.94C9.00351 18.881 8.84951 18.869 8.74351 18.972L7.97351 19.743C7.31751 20.397 6.25151 20.399 5.59651 19.743L4.25651 18.403C3.93851 18.085 3.76451 17.663 3.76451 17.213C3.76551 16.764 3.94051 16.342 4.25951 16.024L5.02751 15.259C5.13251 15.154 5.12151 15 5.07451 14.889C5.01451 14.742 4.91451 14.625 4.76651 14.625H3.68251C2.75451 14.625 1.99951 13.871 1.99951 12.943V11.051C1.99951 10.126 2.75151 9.375 3.67651 9.375H4.76651C4.91351 9.375 5.01451 9.257 5.05951 9.147C5.11951 9.003 5.13151 8.848 5.02751 8.744L4.25651 7.974C3.60251 7.317 3.60251 6.251 4.25651 5.597L5.59651 4.257C5.91451 3.939 6.33551 3.765 6.78451 3.765H6.78651C7.23551 3.765 7.65851 3.94 7.97551 4.259L8.74051 5.028C8.84551 5.134 9.00051 5.122 9.11151 5.075C9.25751 5.014 9.37451 4.914 9.37451 4.767V3.683C9.37451 2.755 10.1295 2 11.0575 2H12.9495C13.8735 2 14.6255 2.752 14.6255 3.676V4.767C14.6255 4.914 14.7425 5.015 14.8525 5.06C14.9975 5.12 15.1515 5.133 15.2565 5.028L16.0265 4.257C16.6825 3.603 17.7485 3.601 18.4035 4.257L19.7445 5.598C20.0625 5.915 20.2365 6.337 20.2355 6.787C20.2355 7.235 20.0605 7.658 19.7415 7.975L18.9725 8.741C18.8675 8.846 18.8785 9 18.9255 9.111C18.9855 9.258 19.0855 9.375 19.2335 9.375H20.3175C21.2455 9.375 21.9995 10.129 21.9995 11.057V12.949C21.9995 13.874 21.2485 14.625 20.3235 14.625H19.2335C19.0865 14.625 18.9855 14.743 18.9405 14.853C18.9395 14.854 18.9275 14.884 18.9265 14.886C18.8805 14.997 18.8685 15.152 18.9725 15.256L19.7435 16.026C20.3975 16.683 20.3975 17.749 19.7435 18.403L18.4035 19.743C18.0855 20.061 17.6645 20.235 17.2155 20.235H17.2135C16.7645 20.235 16.3415 20.06 16.0245 19.741L15.2595 18.972C15.1545 18.867 14.9985 18.879 14.8885 18.925C14.7425 18.986 14.6255 19.086 14.6255 19.233V20.317C14.6255 21.245 13.8705 22 12.9425 22V22ZM12 10.5C11.173 10.5 10.5 11.173 10.5 12C10.5 12.827 11.173 13.5 12 13.5C12.827 13.5 13.5 12.827 13.5 12C13.5 11.173 12.827 10.5 12 10.5M12 15.5C10.07 15.5 8.50001 13.93 8.50001 12C8.50001 10.07 10.07 8.5 12 8.5C13.93 8.5 15.5 10.07 15.5 12C15.5 13.93 13.93 15.5 12 15.5" fill="white"/>
                                            </mask>
                                            <g mask="url(#mask0_239_82)">
                                            </g>
                                        </svg>
                                    </a>
                                </li>
                                <li class="menu-opt mobile-menu_wrap d-flex d-lg-none">
                                    <a href="#mobileMenu" class="mobile-menu_btn toolbar-btn pl-0">
                                        <i class="pe-7s-menu"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mobile-menu_wrapper" id="mobileMenu">
        <div class="tromic-offcanvas-body sidebar">
            <div class="inner-body">
                <div class="tromic-offcanvas-top">
                    <a href="#" class="button-close"><i class="pe-7s-close"></i></a>
                </div>
                <div class="offcanvas-user-info text-center px-6 pb-5">
                    <div class=" text-silver">
                        <p class="shipping mb-0">Free delivery on order over <span class="text-primary">$200</span></p>
                    </div>
                </div>
                <div class="offcanvas-menu_area">
                    <nav class="offcanvas-navigation">
                        <ul class="mobile-menu">
                            <li class="menu-item-has-children">
                                <a href="#">
                                    <span class="mm-text">Home
                                <i class="pe-7s-angle-down"></i>
                            </span>
                                </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="index.html">
                                            <span class="mm-text">Home One</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="index-2.html">
                                            <span class="mm-text">Home Two</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="about.html">
                                    <span class="mm-text">About Us</span>
                                </a>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">
                                    <span class="mm-text">Shop
                                <i class="pe-7s-angle-down"></i>
                            </span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="menu-item-has-children">
                                        <a href="#">
                                            <span class="mm-text">Shop Layout
                                        <i class="pe-7s-angle-down"></i>
                                    </span>
                                        </a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="shop.html">
                                                    <span class="mm-text">Shop Default</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="shop-grid-fullwidth.html">
                                                    <span class="mm-text">Shop Grid Fullwidth</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="shop-right-sidebar.html">
                                                    <span class="mm-text">Shop Right Sidebar</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="shop-list-fullwidth.html">
                                                    <span class="mm-text">Shop List Fullwidth</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="shop-list-left-sidebar.html">
                                                    <span class="mm-text">Shop List Left Sidebar</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="shop-list-right-sidebar.html">
                                                    <span class="mm-text">Shop List Right Sidebar</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">
                                            <span class="mm-text">Product Style
                                        <i class="pe-7s-angle-down"></i>
                                    </span>
                                        </a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="single-product.html">
                                                    <span class="mm-text">Single Product Default</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="single-product-group.html">
                                                    <span class="mm-text">Single Product Group</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="single-product-variable.html">
                                                    <span class="mm-text">Single Product Variable</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="single-product-sale.html">
                                                    <span class="mm-text">Single Product Sale</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="single-product-sticky.html">
                                                    <span class="mm-text">Single Product Sticky</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="single-product-affiliate.html">
                                                    <span class="mm-text">Single Product Affiliate</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">
                                            <span class="mm-text">Product Related
                                        <i class="pe-7s-angle-down"></i>
                                    </span>
                                        </a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="my-account.html">
                                                    <span class="mm-text">My Account</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="login-register.html">
                                                    <span class="mm-text">Login | Register</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="cart.html">
                                                    <span class="mm-text">Shopping Cart</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="wishlist.html">
                                                    <span class="mm-text">Wishlist</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="compare.html">
                                                    <span class="mm-text">Compare</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="checkout.html">
                                                    <span class="mm-text">Checkout</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">
                                    <span class="mm-text">Pages
                                <i class="pe-7s-angle-down"></i>
                            </span>
                                </a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="faq.html">
                                            <span class="mm-text">Frequently Questions</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="404.html">
                                            <span class="mm-text">Error 404</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children">
                                <a href="#">
                                    <span class="mm-text">Blog
                                <i class="pe-7s-angle-down"></i>
                            </span>
                                </a>
                                <ul class="sub-menu">
                                    <li class="menu-item-has-children">
                                        <a href="#">
                                            <span class="mm-text">Blog Holder
                                        <i class="pe-7s-angle-down"></i>
                                    </span>
                                        </a>
                                        <ul class="sub-menu">
                                            <li>
                                                <a href="blog.html">
                                                    <span class="mm-text">Blog Default</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="blog-listview.html">Blog List View</a>
                                            </li>
                                            <li>
                                                <a href="blog-detail.html">Blog Detail</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="/contato">
                                    <span class="mm-text">Contato</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModal" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" data-tippy="Close" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder">
                    </button>
                </div>
                <div class="modal-body">
                    <div class="modal-search">
                        <span class="searchbox-info">Start typing and press Enter to search or ESC to close</span>
                        <form action="#" class="hm-searchbox">
                            <input type="text" name="Search entire store here..." value="Search entire store here..." onblur="if(this.value==''){this.value='Search entire store here...'}" onfocus="if(this.value=='Search entire store here...'){this.value=''}">
                            <button class="search-btn" type="submit" aria-label="searchbtn"><i class="pe-7s-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="global-overlay"></div>
</header>
