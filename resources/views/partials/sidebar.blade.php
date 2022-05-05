<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title"></li>

                {{-- dashboard --}}
                <li class="{{ ($title === "dashboard") ? 'active' : '' }}">
                    <a href="/">
                        <i class="fe fe-home"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                
                {{-- product --}}
                <li class="submenu {{ ($title === "product-list" || $title === "product categories") ? 'active' : '' }}">
                    <a href="#">
                        <i class="fe fe-file"></i>
                        <span>
                            Product
                        <span class="menu-arrow"></span></span>
                    </a>
                    <ul style="display: none">
                        <li>
                            <a href="{{ route('products.index') }}">List</a>
                        </li>
                        <li>
                            <a href="{{ route('product-categories.index') }}">Category</a>
                        </li>
                    </ul>
                </li>
                {{-- Price --}}
                <li class="submenu {{ ($title === "price-buying-list" || $title === "price-selling-list") ? 'active' : '' }}">
                    <a href="#">
                        <i class="fe fe-layout"></i>
                        <span>
                            Price
                        <span class="menu-arrow"></span></span>
                    </a>
                    <ul style="display: none">
                        <li>
                            <a href="{{ route('price-buying.index') }}">Buying Price</a>
                        </li>
                        <li>
                            <a href="{{ route('price-selling.index') }}">Selling Price</a>
                        </li>
                    </ul>
                </li>

                {{-- offer --}}
                <li class="{{ ($title === "offer") ? 'active' : '' }}">
                    <a href="offer">
                        <i class="fe fe-file"></i>
                        <span>Offer</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>