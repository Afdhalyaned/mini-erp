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
                {{-- <li class="submenu">
                    <a href="#">
                        <i class="fe fe-layout"></i>
                        <span>
                            Forms
                        <span class="menu-arrow"></span></span>
                    </a>
                    <ul style="display: none">
                        <li>
                            <a href="#">Basic Inputs</a>
                        </li>
                    </ul>
                </li> --}}
                
            </ul>
        </div>
    </div>
</div>