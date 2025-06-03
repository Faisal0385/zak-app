<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--favicon-->
    <link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
    <!--plugins-->
    <link href="assets/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
    <!-- loader-->
    <link href="assets/css/pace.min.css" rel="stylesheet" />
    <script src="assets/js/pace.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/app.css" rel="stylesheet" />
    <link href="assets/css/icons.css" rel="stylesheet" />
    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="assets/css/dark-theme.css" />
    <link rel="stylesheet" href="assets/css/semi-dark.css" />
    <link rel="stylesheet" href="assets/css/header-colors.css" />
    <title>Admin Dashboard</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" />
</head>

<body>
    <!--wrapper-->
    <div class="wrapper">
        <!--sidebar wrapper -->
        <div class="sidebar-wrapper" data-simplebar="true">
            <div class="sidebar-header">
                <div>
                    <img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon" />
                </div>
                <div>
                    <h4 class="logo-text">Admin</h4>
                </div>
                <div class="toggle-icon ms-auto">
                    <i class="bx bx-arrow-to-left"></i>
                </div>
            </div>
            <!--navigation-->
            <ul class="metismenu" id="menu">
                <li class="menu-label">Dashboard</li>
                <li>
                    <a href="widgets.html">
                        <div class="parent-icon"><i class="bx bx-cookie"></i></div>
                        <div class="menu-title">Dashboard</div>
                    </a>
                </li>
                <li>
                    <a href="widgets.html">
                        <div class="parent-icon"><i class="bx bx-cookie"></i></div>
                        <div class="menu-title">Manage Shop</div>
                    </a>
                </li>
                <li>
                    <a href="widgets.html">
                        <div class="parent-icon"><i class="bx bx-cookie"></i></div>
                        <div class="menu-title">Manage Suppliers</div>
                    </a>
                </li>
                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon"><i class="bx bx-grid-alt"></i></div>
                        <div class="menu-title">Manage Customers</div>
                    </a>
                    <ul>
                        <li>
                            <a href="table-basic-table.html">
                                <i class="bx bx-right-arrow-alt"></i>
                                Customer List
                            </a>
                        </li>
                        <li>
                            <a href="table-datatable.html">
                                <i class="bx bx-right-arrow-alt"></i>
                                Credit Customers
                            </a>
                        </li>
                        <li>
                            <a href="table-datatable.html">
                                <i class="bx bx-right-arrow-alt"></i>
                                Paid Customers
                            </a>
                        </li>
                        <li>
                            <a href="table-datatable.html">
                                <i class="bx bx-right-arrow-alt"></i>
                                Customer Wise Report
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="menu-label">SETUP</li>
                <li>
                    <a href="widgets.html">
                        <div class="parent-icon"><i class="bx bx-cookie"></i></div>
                        <div class="menu-title">Manage Units</div>
                    </a>
                </li>
                <li>
                    <a href="widgets.html">
                        <div class="parent-icon"><i class="bx bx-cookie"></i></div>
                        <div class="menu-title">Manage Brands</div>
                    </a>
                </li>
                <li>
                    <a href="widgets.html">
                        <div class="parent-icon"><i class="bx bx-cookie"></i></div>
                        <div class="menu-title">Manage Categories</div>
                    </a>
                </li>
                <li>
                    <a href="widgets.html">
                        <div class="parent-icon"><i class="bx bx-cookie"></i></div>
                        <div class="menu-title">Manage Subcategory</div>
                    </a>
                </li>

                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon"><i class="bx bx-grid-alt"></i></div>
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
                        <div class="parent-icon"><i class="bx bx-grid-alt"></i></div>
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
                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon"><i class="bx bx-grid-alt"></i></div>
                        <div class="menu-title">Manage Invoice</div>
                    </a>
                    <ul>
                        <li>
                            <a href="table-basic-table.html">
                                <i class="bx bx-right-arrow-alt"></i>
                                Add Invoice
                            </a>
                        </li>
                        <li>
                            <a href="table-datatable.html">
                                <i class="bx bx-right-arrow-alt"></i>
                                Return Invoice
                            </a>
                        </li>
                        <li>
                            <a href="table-datatable.html">
                                <i class="bx bx-right-arrow-alt"></i>
                                Invoice Report
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow" href="javascript:;">
                        <div class="parent-icon"><i class="bx bx-grid-alt"></i></div>
                        <div class="menu-title">Manage Stock</div>
                    </a>
                    <ul>
                        <li>
                            <a href="table-basic-table.html">
                                <i class="bx bx-right-arrow-alt"></i>
                                Stock Report
                            </a>
                        </li>
                        <li>
                            <a href="table-datatable.html">
                                <i class="bx bx-right-arrow-alt"></i>
                                Suppiler Wise Report
                            </a>
                        </li>
                        <li>
                            <a href="table-datatable.html">
                                <i class="bx bx-right-arrow-alt"></i>
                                Product Wise Report
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!--end navigation-->
        </div>
        <!--end sidebar wrapper -->
        <!--start header -->
        <header>
            <div class="topbar d-flex align-items-center">
                <nav class="navbar navbar-expand">
                    <div class="mobile-toggle-menu"><i class="bx bx-menu"></i></div>
                    <div class="search-bar flex-grow-1">
                        <div class="position-relative search-bar-box"></div>
                    </div>
                    <div class="top-menu ms-auto">
                        <ul class="navbar-nav align-items-center">
                            <li class="nav-item dropdown dropdown-large">
                                <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#"
                                    role="button" data-bs-toggle="" aria-expanded="false">
                                </a>
                                <div class="">
                                    <div class="header-notifications-list"></div>
                                </div>
                            </li>
                            <li class="nav-item dropdown dropdown-large">
                                <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                </a>
                                <div class="">
                                    <div class="header-message-list"></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="user-box dropdown">
                        <a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="assets/images/avatars/avatar-2.png" class="user-img" alt="user avatar" />
                            <div class="user-info ps-3">
                                <p class="user-name mb-0">Pauline Seitz</p>
                                <p class="designattion mb-0">Web Designer</p>
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <a class="dropdown-item" href="javascript:;">
                                    <i class="bx bx-user"></i><span>Profile</span>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="javascript:;">
                                    <i class="bx bx-cog"></i><span>Change Password</span>
                                </a>
                            </li>
                            <li>
                                <div class="dropdown-divider mb-0"></div>
                            </li>
                            <li>
                                <a class="dropdown-item" href="javascript:;">
                                    <i class="bx bx-log-out-circle"></i><span>Logout</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <!--end header -->
        <!--start page wrapper -->
        <div class="page-wrapper">
            <div class="page-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <a class="btn btn-sm btn-primary" href="./category.html">Back</a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-8 col-md-12 col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title" style="color: black;"><b>Edit Category Page </b></h4>
                                    <hr class="m-1">
                                    <form id="myForm">
                                       

                                        <input type="hidden" name="id" id="id" value="">

                                        <div class="mb-3">
                                            <label for="name" class="col-sm-2 col-form-label">Category Name</label>
                                            <div class="form-group">
                                                <input type="text" name="name" id="name"
                                                    class="form-control form-control-sm" value=""
                                                    placeholder="Category Name">
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="name" class="col-sm-2 col-form-label">Category Image</label>
                                            <div class="form-group">
                                                <input type="file" class="form-control form-control-sm" id="image"
                                                    name="image"
                                                    accept="image/png, image/jpg, image/jpeg, image/svg+xml, image/webp"
                                                    onchange="showPreview(event)">
                                            </div>

                                            <div class="row mb-3 pt-3">
                                                <div class="col-sm-12">
                                                    <img class="img-thumbnail" id="file-ip-1-preview"
                                                        src="./assets/images/no_image.jpg"
                                                        alt="" width="150px" height="80px">
                                                </div>
                                            </div>

                                        </div>

                                        <div class="mb-3">
                                            <label for="alt" class="col-form-label">Image Alt</label>
                                            <div class="form-group">
                                                <input type="text" name="alt" id="alt"
                                                    class="form-control form-control-sm" value=""
                                                    placeholder="Image Alt">
                                            </div>
                                        </div>
                                        <!-- end row -->

                                        <input type="submit" class="btn btn-sm btn-info waves-effect waves-light"
                                            value="Update">
                                    </form>
                                </div>
                            </div>
                        </div> <!-- end col -->
                    </div>
                </div>
            </div>
        </div>
        <!--end page wrapper -->
        <!--start overlay-->
        <div class="overlay toggle-icon"></div>
        <!--end overlay-->
        <!--Start Back To Top Button-->
        <a href="javaScript:;" class="back-to-top"><i class="bx bxs-up-arrow-alt"></i></a>
        <!--End Back To Top Button-->
        <footer class="page-footer">
            <p class="mb-0">
                Copyright © <span id="year"></span>. All right reserved. Design &
                Maintain By Faisal A Salam
            </p>
        </footer>
    </div>
    <!--end wrapper-->

    <script>
        document.getElementById("year").innerHTML = new Date().getFullYear();
    </script>
    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!--plugins-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
    <script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
    <script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
    <script src="assets/plugins/chartjs/js/Chart.min.js"></script>
    <script src="assets/plugins/vectormap/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="assets/plugins/vectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="assets/plugins/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
    <script src="assets/plugins/sparkline-charts/jquery.sparkline.min.js"></script>
    <script src="assets/plugins/jquery-knob/excanvas.js"></script>
    <script src="assets/plugins/jquery-knob/jquery.knob.js"></script>
    <script>
        $(function () {
            $(".knob").knob();
        });
    </script>
    <script src="assets/js/index.js"></script>
    <!--app JS-->
    <script src="assets/js/app.js"></script>

    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#datatable").DataTable();
        });
    </script>

    <script type="text/javascript">
        function showPreview(event) {
            if (event.target.files.length > 0) {
                var src = URL.createObjectURL(event.target.files[0]);
                var preview = document.getElementById("file-ip-1-preview");
                preview.src = src;
                preview.style.display = "block";
            }
        }
    </script>
    <script type="text/javascript">
        function showPreview(event) {
            if (event.target.files.length > 0) {
                var src = URL.createObjectURL(event.target.files[0]);
                var preview = document.getElementById("file-ip-1-preview");
                preview.src = src;
                preview.style.display = "block";
            }
        }

        const form = document.getElementById('myForm');

        form.addEventListener('submit', async (e) => {
            e.preventDefault();

            let id = document.getElementById('id').value.trim();
            let name = document.getElementById('name').value.trim();
            let alt = document.getElementById('alt').value.trim();
            let image = document.getElementById('image').files[0];

            if (name.length == 0) {
                toastr.error("Name is required!!");
            } else {
                let formData = new FormData();
                formData.append('id', id);
                formData.append('name', name);
                formData.append('alt', alt);
                if (image != undefined) {
                    formData.append('image', image);
                };

                try {
                    document.getElementById("popup-overlay").classList.remove("d-none"); // add pre-loader

                    let res = await axios.post("/admin/category/update", formData, {
                        headers: {
                            'Content-Type': 'multipart/form-data',
                        }
                    });

                    if (res.status === 200 && res.data['status'] === 'success') {
                        document.getElementById("popup-overlay").classList.add("d-none"); // remove pre-loader
                        toastr.success(res.data['message']);

                    } else if (res.status === 200 && res.data['status'] === 'errors') {
                        document.getElementById("popup-overlay").classList.add("d-none"); // remove pre-loader

                        if (res.data.errors.name != undefined) {
                            let nameErrors = res.data.errors.name
                            nameErrors.forEach(element => {
                                toastr.error(element);
                            });
                        };

                        if (res.data.errors.alt != undefined) {
                            let altErrors = res.data.errors.alt
                            altErrors.forEach(element => {
                                toastr.error(element);
                            });
                        };

                        if (res.data.errors.image != undefined) {
                            let imageErrors = res.data.errors.image
                            imageErrors.forEach(element => {
                                toastr.error(element);
                            });
                        };

                    } else if (res.status === 200 && res.data['status'] === 'error') {
                        document.getElementById("popup-overlay").classList.add("d-none"); // remove pre-loader
                        toastr.error(res.data['message']);
                    }
                } catch (error) {
                    document.getElementById("popup-overlay").classList.add("d-none"); // remove pre-loader
                    toastr.warning("Something went wrong!!");
                }
            }

        });
    </script>
</body>

</html>