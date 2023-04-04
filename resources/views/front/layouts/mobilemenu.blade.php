<div class="mobilemenu">
    <div class="mobilemenu__backdrop"></div>
    <div class="mobilemenu__container">
        <div class="mobilemenu__header">
            <div class="mobilemenu__title">Menu</div><button class="mobilemenu__close" type="button"><svg
                    width="10px" height="10px">
                    <use xlink:href="{{ asset('front/images/sprite.svg#cross-10') }}"></use>
                </svg></button>
        </div>
        <div class="mobilemenu__body">
            <ul class="mobilemenu__links mobilemenu__links--level--1" data-collapse
                data-collapse-open-class="mobilemenu__item--open">
                <li class="mobilemenu__item" data-collapse-item><a class="mobilemenu__link"
                        href="{{ route('home') }}">Home</a></li>
                <li class="mobilemenu__item mobilemenu__item--has-children" data-collapse-item><a
                        class="mobilemenu__link" href="#">Categories </a><button type="button"
                        class="mobilemenu__arrow mobilemenu__expander" data-collapse-trigger><svg width="6px"
                            height="9px">
                            <use xlink:href="{{ asset('front/images/sprite.svg#arrow-left-6x9') }}"></use>
                        </svg></button>
                    <div class="mobilemenu__sub-links" data-collapse-content>
                        <ul class="mobilemenu__links mobilemenu__links--level--2">
                            <li class="mobilemenu__item mobilemenu__item--has-children" data-collapse-item><a
                                    class="mobilemenu__link" href="#">Living Room </a><button type="button"
                                    class="mobilemenu__arrow mobilemenu__expander" data-collapse-trigger><svg
                                        width="6px" height="9px">
                                        <use xlink:href="{{ asset('front/images/sprite.svg#arrow-left-6x9') }}"></use>
                                    </svg></button>
                                <div class="mobilemenu__sub-links" data-collapse-content>
                                    <ul class="mobilemenu__links mobilemenu__links--level--3">
                                        <li class="mobilemenu__item" data-collapse-item><a class="mobilemenu__link"
                                                href="#">Sofas</a></li>
                                        <li class="mobilemenu__item" data-collapse-item><a class="mobilemenu__link"
                                                href="#">Sectional Sofas</a></li>
                                        <li class="mobilemenu__item" data-collapse-item><a class="mobilemenu__link"
                                                href="#">Coffee Tables</a></li>
                                        <li class="mobilemenu__item" data-collapse-item><a class="mobilemenu__link"
                                                href="#">TV Stands</a></li>
                                        <li class="mobilemenu__item" data-collapse-item><a class="mobilemenu__link"
                                                href="#">Living Room Sets</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="mobilemenu__item mobilemenu__item--has-children" data-collapse-item><a
                                    class="mobilemenu__link" href="#">Bedroom </a><button type="button"
                                    class="mobilemenu__arrow mobilemenu__expander" data-collapse-trigger><svg
                                        width="6px" height="9px">
                                        <use xlink:href="{{ asset('front/images/sprite.svg#arrow-left-6x9') }}"></use>
                                    </svg></button>
                                <div class="mobilemenu__sub-links" data-collapse-content>
                                    <ul class="mobilemenu__links mobilemenu__links--level--3">
                                        <li class="mobilemenu__item" data-collapse-item><a class="mobilemenu__link"
                                                href="#">Beds</a></li>
                                        <li class="mobilemenu__item" data-collapse-item><a class="mobilemenu__link"
                                                href="#">Headboards</a></li>
                                        <li class="mobilemenu__item" data-collapse-item><a class="mobilemenu__link"
                                                href="#">Nightstands</a></li>
                                        <li class="mobilemenu__item" data-collapse-item><a class="mobilemenu__link"
                                                href="#">Dressers</a></li>
                                        <li class="mobilemenu__item" data-collapse-item><a class="mobilemenu__link"
                                                href="#">Mirrored Dressers</a></li>
                                        <li class="mobilemenu__item" data-collapse-item><a class="mobilemenu__link"
                                                href="#">Chest of Drawers</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="mobilemenu__item mobilemenu__item--has-children" data-collapse-item><a
                                    class="mobilemenu__link" href="#">Accent Furniture </a><button type="button"
                                    class="mobilemenu__arrow mobilemenu__expander" data-collapse-trigger><svg
                                        width="6px" height="9px">
                                        <use xlink:href="{{ asset('front/images/sprite.svg#arrow-left-6x9') }}"></use>
                                    </svg></button>
                                <div class="mobilemenu__sub-links" data-collapse-content>
                                    <ul class="mobilemenu__links mobilemenu__links--level--3">
                                        <li class="mobilemenu__item" data-collapse-item><a class="mobilemenu__link"
                                                href="#">Accent Chairs</a></li>
                                        <li class="mobilemenu__item" data-collapse-item><a class="mobilemenu__link"
                                                href="#">Accent Tables</a></li>
                                        <li class="mobilemenu__item" data-collapse-item><a class="mobilemenu__link"
                                                href="#">End and Side Tables</a></li>
                                        <li class="mobilemenu__item" data-collapse-item><a class="mobilemenu__link"
                                                href="#">Console Tables</a></li>
                                        <li class="mobilemenu__item" data-collapse-item><a class="mobilemenu__link"
                                                href="#">Accent Cabinets</a></li>
                                        <li class="mobilemenu__item" data-collapse-item><a class="mobilemenu__link"
                                                href="#">Benches</a></li>
                                        <li class="mobilemenu__item" data-collapse-item><a class="mobilemenu__link"
                                                href="#">Bar Cart</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="mobilemenu__item mobilemenu__item--has-children" data-collapse-item><a
                                    class="mobilemenu__link" href="#">Home Office </a><button type="button"
                                    class="mobilemenu__arrow mobilemenu__expander" data-collapse-trigger><svg
                                        width="6px" height="9px">
                                        <use xlink:href="{{ asset('front/images/sprite.svg#arrow-left-6x9') }}"></use>
                                    </svg></button>
                                <div class="mobilemenu__sub-links" data-collapse-content>
                                    <ul class="mobilemenu__links mobilemenu__links--level--3">
                                        <li class="mobilemenu__item" data-collapse-item><a class="mobilemenu__link"
                                                href="#">Desks</a></li>
                                        <li class="mobilemenu__item" data-collapse-item><a class="mobilemenu__link"
                                                href="#">Office Chairs</a></li>
                                        <li class="mobilemenu__item" data-collapse-item><a class="mobilemenu__link"
                                                href="#">Bookcases</a></li>
                                        <li class="mobilemenu__item" data-collapse-item><a class="mobilemenu__link"
                                                href="#">Office Storage</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="mobilemenu__item mobilemenu__item--has-children" data-collapse-item><a
                                    class="mobilemenu__link" href="#">Kitchen & Dining </a><button type="button"
                                    class="mobilemenu__arrow mobilemenu__expander" data-collapse-trigger><svg
                                        width="6px" height="9px">
                                        <use xlink:href="{{ asset('front/images/sprite.svg#arrow-left-6x9') }}"></use>
                                    </svg></button>
                                <div class="mobilemenu__sub-links" data-collapse-content>
                                    <ul class="mobilemenu__links mobilemenu__links--level--3">
                                        <li class="mobilemenu__item" data-collapse-item><a class="mobilemenu__link"
                                                href="#">Tables</a></li>
                                        <li class="mobilemenu__item" data-collapse-item><a class="mobilemenu__link"
                                                href="#">Chairs</a></li>
                                        <li class="mobilemenu__item" data-collapse-item><a class="mobilemenu__link"
                                                href="#">Bar Stools</a></li>
                                        <li class="mobilemenu__item" data-collapse-item><a class="mobilemenu__link"
                                                href="#">Benches</a></li>
                                        <li class="mobilemenu__item" data-collapse-item><a class="mobilemenu__link"
                                                href="#">Storage</a></li>
                                        <li class="mobilemenu__item" data-collapse-item><a class="mobilemenu__link"
                                                href="#">Bar Furniture</a></li>
                                        <li class="mobilemenu__item" data-collapse-item><a class="mobilemenu__link"
                                                href="#">Sets</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="mobilemenu__item mobilemenu__item--has-children" data-collapse-item><a
                                    class="mobilemenu__link" href="#">Bathroom </a><button type="button"
                                    class="mobilemenu__arrow mobilemenu__expander" data-collapse-trigger><svg
                                        width="6px" height="9px">
                                        <use xlink:href="{{ asset('front/images/sprite.svg#arrow-left-6x9') }}"></use>
                                    </svg></button>
                                <div class="mobilemenu__sub-links" data-collapse-content>
                                    <ul class="mobilemenu__links mobilemenu__links--level--3">
                                        <li class="mobilemenu__item" data-collapse-item><a class="mobilemenu__link"
                                                href="#">Vanities</a></li>
                                        <li class="mobilemenu__item" data-collapse-item><a class="mobilemenu__link"
                                                href="#">Storage</a></li>
                                        <li class="mobilemenu__item" data-collapse-item><a class="mobilemenu__link"
                                                href="#">Mirrors</a></li>
                                        <li class="mobilemenu__item" data-collapse-item><a class="mobilemenu__link"
                                                href="#">Vanity Lighting</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="mobilemenu__item mobilemenu__item--has-children" data-collapse-item><a
                                    class="mobilemenu__link" href="#">Mattresses </a><button type="button"
                                    class="mobilemenu__arrow mobilemenu__expander" data-collapse-trigger><svg
                                        width="6px" height="9px">
                                        <use xlink:href="{{ asset('front/images/sprite.svg#arrow-left-6x9') }}"></use>
                                    </svg></button>
                                <div class="mobilemenu__sub-links" data-collapse-content>
                                    <ul class="mobilemenu__links mobilemenu__links--level--3">
                                        <li class="mobilemenu__item" data-collapse-item><a class="mobilemenu__link"
                                                href="#">Memory Foam</a></li>
                                        <li class="mobilemenu__item" data-collapse-item><a class="mobilemenu__link"
                                                href="#">Innerspring</a></li>
                                        <li class="mobilemenu__item" data-collapse-item><a class="mobilemenu__link"
                                                href="#">Hybrid</a></li>
                                        <li class="mobilemenu__item" data-collapse-item><a class="mobilemenu__link"
                                                href="#">Power Bases</a></li>
                                        <li class="mobilemenu__item" data-collapse-item><a class="mobilemenu__link"
                                                href="#">Shop All Mattresses</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="mobilemenu__item mobilemenu__item--has-children" data-collapse-item><a
                                    class="mobilemenu__link" href="#">Kids </a><button type="button"
                                    class="mobilemenu__arrow mobilemenu__expander" data-collapse-trigger><svg
                                        width="6px" height="9px">
                                        <use xlink:href="{{ asset('front/images/sprite.svg#arrow-left-6x9') }}"></use>
                                    </svg></button>
                                <div class="mobilemenu__sub-links" data-collapse-content>
                                    <ul class="mobilemenu__links mobilemenu__links--level--3">
                                        <li class="mobilemenu__item" data-collapse-item><a class="mobilemenu__link"
                                                href="#">Bedroom Sets</a></li>
                                        <li class="mobilemenu__item" data-collapse-item><a class="mobilemenu__link"
                                                href="#">Headboards</a></li>
                                        <li class="mobilemenu__item" data-collapse-item><a class="mobilemenu__link"
                                                href="#">Nightstands</a></li>
                                        <li class="mobilemenu__item" data-collapse-item><a class="mobilemenu__link"
                                                href="#">Dressers</a></li>
                                        <li class="mobilemenu__item" data-collapse-item><a class="mobilemenu__link"
                                                href="#">Playroom</a></li>
                                        <li class="mobilemenu__item" data-collapse-item><a class="mobilemenu__link"
                                                href="#">Tables and Chairs</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="mobilemenu__item mobilemenu__item--has-children" data-collapse-item><a
                        class="mobilemenu__link" href="{{route('shop_grid')}}">Shop </a><button type="button"
                        class="mobilemenu__arrow mobilemenu__expander" data-collapse-trigger><svg width="6px"
                            height="9px">
                            <use xlink:href="{{ asset('front/images/sprite.svg#arrow-left-6x9') }}"></use>
                        </svg></button>
                    <div class="mobilemenu__sub-links" data-collapse-content>
                        <ul class="mobilemenu__links mobilemenu__links--level--2">
                            <li class="mobilemenu__item mobilemenu__item--has-children" data-collapse-item><a
                                    class="mobilemenu__link" href="{{route('shop_grid')}}">Shop </a><button type="button"
                                    class="mobilemenu__arrow mobilemenu__expander" data-collapse-trigger><svg
                                        width="6px" height="9px">
                                        <use xlink:href="{{ asset('front/images/sprite.svg#arrow-left-6x9') }}"></use>
                                    </svg></button>
                                <div class="mobilemenu__sub-links" data-collapse-content>
                                    <ul class="mobilemenu__links mobilemenu__links--level--3">
                                        <li class="mobilemenu__item" data-collapse-item><a class="mobilemenu__link"
                                                href="{{route('shop_grid')}}">Shop Grid</a></li>
                                        <li class="mobilemenu__item" data-collapse-item><a class="mobilemenu__link"
                                                href="{{route('shop_grid')}}">Shop Full Grid 5</a></li>
                                        <li class="mobilemenu__item" data-collapse-item><a class="mobilemenu__link"
                                                href="{{route('shop_grid')}}">Shop List</a></li>
                                        <li class="mobilemenu__item" data-collapse-item><a class="mobilemenu__link"
                                                href="shop-left-sidebar.html">Shop Left Sidebar</a></li>
                                        <li class="mobilemenu__item" data-collapse-item><a class="mobilemenu__link"
                                                href="shop-right-sidebar.html">Shop Right Sidebar</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="mobilemenu__item" data-collapse-item><a class="mobilemenu__link"
                                    href="{{route('products')}}">Product</a></li>
                            <li class="mobilemenu__item" data-collapse-item><a class="mobilemenu__link"
                                    href="{{route('cart')}}">Cart</a></li>
                            <li class="mobilemenu__item" data-collapse-item><a class="mobilemenu__link"
                                    href="{{route('checkout')}}">Checkout</a></li>
                            <li class="mobilemenu__item" data-collapse-item><a class="mobilemenu__link"
                                    href="{{route('account')}}">My Account</a></li>
                            <li class="mobilemenu__item" data-collapse-item><a class="mobilemenu__link"
                                    href="{{route('track_order')}}">Track Order</a></li>
                            <li class="mobilemenu__item" data-collapse-item><a class="mobilemenu__link"
                                    href="wishlist.html">Wishlist</a></li>
                            <li class="mobilemenu__item" data-collapse-item><a class="mobilemenu__link"
                                    href="{{route('compare')}}">Compare</a></li>
                        </ul>
                    </div>
                </li>
                <li class="mobilemenu__item mobilemenu__item--has-children" data-collapse-item><a
                        class="mobilemenu__link" href="{{route('blog')}}">Blog </a><button type="button"
                        class="mobilemenu__arrow mobilemenu__expander" data-collapse-trigger><svg width="6px"
                            height="9px">
                            <use xlink:href="{{ asset('front/images/sprite.svg#arrow-left-6x9') }}"></use>
                        </svg></button>
                    <div class="mobilemenu__sub-links" data-collapse-content>
                        <ul class="mobilemenu__links mobilemenu__links--level--2">
                            <li class="mobilemenu__item" data-collapse-item><a class="mobilemenu__link"
                                    href="{{route('blog')}}">Blog Grid</a></li>
                            <li class="mobilemenu__item" data-collapse-item><a class="mobilemenu__link"
                                    href="blog-list.html">Blog List</a></li>
                            <li class="mobilemenu__item" data-collapse-item><a class="mobilemenu__link"
                                    href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                            <li class="mobilemenu__item" data-collapse-item><a class="mobilemenu__link"
                                    href="{{route('post')}}">Post</a></li>
                        </ul>
                    </div>
                </li>
                <li class="mobilemenu__item mobilemenu__item--has-children" data-collapse-item><a
                        class="mobilemenu__link" href="about-us.html">Pages </a><button type="button"
                        class="mobilemenu__arrow mobilemenu__expander" data-collapse-trigger><svg width="6px"
                            height="9px">
                            <use xlink:href="{{ asset('front/images/sprite.svg#arrow-left-6x9') }}"></use>
                        </svg></button>
                    <div class="mobilemenu__sub-links" data-collapse-content>
                        <ul class="mobilemenu__links mobilemenu__links--level--2">
                            <li class="mobilemenu__item" data-collapse-item><a class="mobilemenu__link"
                                    href="about-us.html">About Us</a></li>
                            <li class="mobilemenu__item" data-collapse-item><a class="mobilemenu__link"
                                    href="{{route('contact_us')}}">Contact Us</a></li>
                            <li class="mobilemenu__item" data-collapse-item><a class="mobilemenu__link"
                                    href="404.html">404</a></li>
                            <li class="mobilemenu__item" data-collapse-item><a class="mobilemenu__link"
                                    href="terms-and-conditions.html">Terms And Conditions</a></li>
                            <li class="mobilemenu__item" data-collapse-item><a class="mobilemenu__link"
                                    href="faq.html">FAQ</a></li>
                            <li class="mobilemenu__item" data-collapse-item><a class="mobilemenu__link"
                                    href="components.html">Components</a></li>
                            <li class="mobilemenu__item" data-collapse-item><a class="mobilemenu__link"
                                    href="typography.html">Typography</a></li>
                        </ul>
                    </div>
                </li>
                <li class="mobilemenu__item" data-collapse-item><a class="mobilemenu__link"
                        href="{{route('contact_us')}}">Contact Us</a></li>
                <li class="mobilemenu__item" data-collapse-item><a class="mobilemenu__link"
                        href="https://themeforest.net/item/meblya-responsive-ecommerce-html-template/23181513">Buy
                        Theme</a></li>
                <li class="mobilemenu__divider"></li>
                <li class="mobilemenu__item" data-collapse-item><a class="mobilemenu__link"
                        href="wishlist.html">Wishlist<span class="mobilemenu__counter">5</span></a></li>
                <li class="mobilemenu__item" data-collapse-item><a class="mobilemenu__link"
                        href="{{route('compare')}}">Compare<span class="mobilemenu__counter">2</span></a></li>
                <li class="mobilemenu__item" data-collapse-item><a class="mobilemenu__link" href="{{route('account')}}">My
                        Account</a></li>
                <li class="mobilemenu__item" data-collapse-item><a class="mobilemenu__link"
                        href="{{route('track_order')}}">Track Order</a></li>
                <li class="mobilemenu__item mobilemenu__item--has-children" data-collapse-item><button type="button"
                        class="mobilemenu__link mobilemenu__expander" data-collapse-trigger>Language: <span
                            class="mobilemenu__value">EN</span></button> <button type="button"
                        class="mobilemenu__arrow mobilemenu__expander mobilemenu__arrow--decorative"
                        data-collapse-trigger><svg width="6px" height="9px">
                            <use xlink:href="{{ asset('front/images/sprite.svg#arrow-left-6x9') }}"></use>
                        </svg></button>
                    <div class="mobilemenu__sub-links" data-collapse-content>
                        <ul class="mobilemenu__links mobilemenu__links--level--2">
                            <li class="mobilemenu__item" data-collapse-item><a class="mobilemenu__link"
                                    href="#">English</a></li>
                            <li class="mobilemenu__item" data-collapse-item><a class="mobilemenu__link"
                                    href="#">German</a></li>
                            <li class="mobilemenu__item" data-collapse-item><a class="mobilemenu__link"
                                    href="#">French</a></li>
                        </ul>
                    </div>
                </li>
                <li class="mobilemenu__item mobilemenu__item--has-children" data-collapse-item><button type="button"
                        class="mobilemenu__link mobilemenu__expander" data-collapse-trigger>Currency: <span
                            class="mobilemenu__value">USD</span></button> <button type="button"
                        class="mobilemenu__arrow mobilemenu__expander mobilemenu__arrow--decorative"
                        data-collapse-trigger><svg width="6px" height="9px">
                            <use xlink:href="{{ asset('front/images/sprite.svg#arrow-left-6x9') }}"></use>
                        </svg></button>
                    <div class="mobilemenu__sub-links" data-collapse-content>
                        <ul class="mobilemenu__links mobilemenu__links--level--2">
                            <li class="mobilemenu__item" data-collapse-item><a class="mobilemenu__link" href="#">US
                                    Dollar</a></li>
                            <li class="mobilemenu__item" data-collapse-item><a class="mobilemenu__link"
                                    href="#">Pound Sterling</a></li>
                            <li class="mobilemenu__item" data-collapse-item><a class="mobilemenu__link"
                                    href="#">Euro</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>