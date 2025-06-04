<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{ asset('admin/assets/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">Admin</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">

        <li class="menu-label">Dashboard</li>
        <li>
            <a href="widgets.html">
                <div class="parent-icon"><i class='bx bx-cookie'></i></div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>
        <li>
            <a href="{{ route('slider.index') }}">
                <div class="parent-icon"><i class='bx bx-cookie'></i></div>
                <div class="menu-title">Manage Slider</div>
            </a>
        </li>
        <li>
            <a href="{{ route('categories.index') }}">
                <div class="parent-icon"><i class='bx bx-cookie'></i></div>
                <div class="menu-title">Manage Category</div>
            </a>
        </li>
        <li>
            <a href="{{ route('about.create') }}">
                <div class="parent-icon"><i class='bx bx-cookie'></i></div>
                <div class="menu-title">Manage About</div>
            </a>
        </li>

        <li class="menu-label">SETUP</li>
        <li>
            <a href="{{ route('settings.create') }}">
                <div class="parent-icon"><i class='bx bx-cookie'></i></div>
                <div class="menu-title">Manage Site Setting</div>
            </a>
        </li>
        <li>
            <a href="./category.html">
                <div class="parent-icon"><i class='bx bx-cookie'></i></div>
                <div class="menu-title">Manage Cities</div>
            </a>
        </li>

        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bx bx-grid-alt"></i>
                </div>
                <div class="menu-title">Manage Product</div>
            </a>
            <ul>
                <li>
                    <a href="table-basic-table.html">
                        <i class="bx bx-right-arrow-alt"></i>
                        Product List
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bx bx-grid-alt"></i>
                </div>
                <div class="menu-title">Manage Purchase</div>
            </a>
            <ul>
                <li>
                    <a href="table-basic-table.html">
                        <i class="bx bx-right-arrow-alt"></i>
                        Add Purchase
                    </a>
                </li>
                <li>
                    <a href="table-datatable.html">
                        <i class="bx bx-right-arrow-alt"></i>
                        Adjust Purchase
                    </a>
                </li>
                <li>
                    <a href="table-datatable.html">
                        <i class="bx bx-right-arrow-alt"></i>
                        Return Purchase
                    </a>
                </li>
                <li>
                    <a href="table-datatable.html">
                        <i class="bx bx-right-arrow-alt"></i>
                        Purchase Report
                    </a>
                </li>

            </ul>
        </li>

    </ul>
    <!--end navigation-->
</div>
