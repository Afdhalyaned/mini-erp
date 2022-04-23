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
                <li class="{{ ($title === "product-list") ? 'active' : '' }}">
                    <a href="product">
                        <i class="fe fe-file"></i>
                        <span>Product</span>
                    </a>
                </li>
                <li class="submenu {{ ($title === "price-buying-list" || $title === "price-selling-list") ? 'active' : '' }}">
                    <a href="#">
                        <i class="fe fe-layout"></i>
                        <span>
                            Price
                        <span class="menu-arrow"></span></span>
                    </a>
                    <ul style="display: none">
                        <li>
                            <a href="price-buying">Buying Price</a>
                        </li>
                        <li>
                            <a href="price-selling">Selling Price</a>
                        </li>
                    </ul>
                </li>

                {{-- product --}}
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