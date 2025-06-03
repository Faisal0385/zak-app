<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--favicon-->
    <link rel="icon" href="assets/images/favicon-32x32.png" type="image/png" />
    <!--plugins-->
    <link
      href="assets/plugins/vectormap/jquery-jvectormap-2.0.2.css"
      rel="stylesheet"
    />
    <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link
      href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css"
      rel="stylesheet"
    />
    <link
      href="assets/plugins/metismenu/css/metisMenu.min.css"
      rel="stylesheet"
    />
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

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
      integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />


    <link
      rel="stylesheet"
      href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css"
    />

  </head>

  <body>
    <!--wrapper-->
    <div class="wrapper">
      <!--sidebar wrapper -->
      <div class="sidebar-wrapper" data-simplebar="true">
        <div class="sidebar-header">
          <div>
            <img
              src="assets/images/logo-icon.png"
              class="logo-icon"
              alt="logo icon"
            />
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
                  <a
                    class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative"
                    href="#"
                    role="button"
                    data-bs-toggle=""
                    aria-expanded="false"
                  >
                  </a>
                  <div class="">
                    <div class="header-notifications-list"></div>
                  </div>
                </li>
                <li class="nav-item dropdown dropdown-large">
                  <a
                    class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative"
                    href="#"
                    role="button"
                    data-bs-toggle="dropdown"
                    aria-expanded="false"
                  >
                  </a>
                  <div class="">
                    <div class="header-message-list"></div>
                  </div>
                </li>
              </ul>
            </div>
            <div class="user-box dropdown">
              <a
                class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                <img
                  src="assets/images/avatars/avatar-2.png"
                  class="user-img"
                  alt="user avatar"
                />
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
            <!-- start page title -->
            <div class="row">
              <div class="col-12">
                <div
                  class="page-title-box d-flex justify-content-between align-items-center"
                >
                  <h4 class="mb-0">Category Page</h4>
                  <a
                    href="./category_add.html"
                    class="btn btn-dark btn-sm waves-effect waves-light"
                    style="float: right"
                  >
                    <i class="fas fa-plus-circle"></i> Add Category
                  </a>
                </div>
              </div>
            </div>
            <!-- end page title -->
            <br />
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">All Category List</h4>
                    <br />
                    <table
                      id="datatable"
                      class="table table-bordered dt-responsive nowrap"
                      style="
                        border-collapse: collapse;
                        border-spacing: 0;
                        width: 100%;
                        margin-top: 20px
                      "
                    >
                      <thead>
                        <tr class="text-white" style="background-color: teal">
                          <th width="5%">Sl</th>
                          <th width="10%">Image</th>
                          <th width="30%">Category Name</th>
                          <th width="5%" style="text-align: center">Action</th>
                        </tr>
                      </thead>

                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>
                            <img
                              class="img-thumbnail"
                              src="./assets/images/no_image.jpg"
                              alt="image"
                              width="60px"
                              height="60px"
                            />
                          </td>
                          <td>Villa</td>
                          <td class="text-center">
                            <a
                              href="javascript:void(0)"
                              id="status_btn_12"
                              class="btn btn-sm btn-danger {{ $item->status == 1 ? 'btn-primary' : 'btn-danger' }}"
                              onclick="StatusChange(12)"
                            >
                              <i
                                class="fa fa-check-circle m-0"
                                style="font-size: 12px"
                              ></i>
                            </a>

                            <a
                              href="./category_edit.html"
                              class="btn btn-sm btn-info"
                              title="Edit Data"
                            >
                              <i
                                class="fas fa-edit m-0"
                                style="font-size: 12px"
                              ></i>
                            </a>

                            <button
                              type="button"
                              class="btn btn-sm btn-danger"
                              data-bs-toggle="modal"
                              data-bs-target="#exampleModal12"
                            >
                              <i
                                class="fa fa-trash m-0"
                                style="font-size: 12px"
                              ></i>
                            </button>

                            <!-- Modal -->
                            <div
                              class="modal fade"
                              id="exampleModal12"
                              tabindex="-1"
                              aria-labelledby="exampleModal12Label"
                              aria-hidden="true"
                            >
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5
                                      class="modal-title"
                                      id="exampleModal12Label"
                                    >
                                      <i
                                        class="fa-solid fa-circle-xmark text-danger"
                                      ></i>
                                      Delete Item
                                    </h5>
                                    <button
                                      type="button"
                                      class="btn-close"
                                      data-bs-dismiss="modal"
                                      aria-label="Close"
                                    ></button>
                                  </div>
                                  <div class="modal-body">
                                    <h5>Are You Sure You Want To Delete It?</h5>
                                  </div>
                                  <div class="modal-footer">
                                    <button
                                      type="button"
                                      class="btn btn-sm btn-danger"
                                      data-bs-dismiss="modal"
                                      onclick="deleteData(12)"
                                    >
                                      Yes
                                    </button>
                                    <button
                                      type="button"
                                      class="btn btn-sm btn-info"
                                      data-bs-dismiss="modal"
                                    >
                                      Close
                                    </button>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </td>
                        </tr>
                      </tbody>

                      <tfooter>
                        <tr class="text-white" style="background-color: teal">
                          <th width="5%">Sl</th>
                          <th width="10%">Image</th>
                          <th width="30%">Category Name</th>
                          <th width="5%" style="width: 10%; text-align: center">
                            Action
                          </th>
                        </tr>
                      </tfooter>
                    </table>
                  </div>
                </div>
              </div>
              <!-- end col -->
            </div>
            <!-- end row -->
          </div>
          <!-- container-fluid -->
        </div>
      </div>
      <!--end page wrapper -->
      <!--start overlay-->
      <div class="overlay toggle-icon"></div>
      <!--end overlay-->
      <!--Start Back To Top Button-->
      <a href="javaScript:;" class="back-to-top"
        ><i class="bx bxs-up-arrow-alt"></i
      ></a>
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
  </body>
</html>
