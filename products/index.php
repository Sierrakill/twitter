<?php
	include "../app/ProductsController.php";
	include "../app/BrandsController.php";

	$bransController = new BrandsController();
	$brands = $bransController->getBrands();

	$productController = new ProductsController();
	$products = $productController->getProducts();
?> 
<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>

    <?php include "../layouts/head.template.php"; ?>

    <!-- nouisliderribute css -->
    <link rel="stylesheet" href="<?= BASE_PATH ?>public/libs/nouislider/nouislider.min.css">

    <!-- gridjs css -->
    <link rel="stylesheet" href="<?= BASE_PATH ?>public/libs/gridjs/theme/mermaid.min.css">

</head>

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

    	<?php include "../layouts/nav.template.php"; ?>
        
        <!-- ========== App Menu ========== -->
        <?php include "../layouts/sidebar.template.php"; ?>
        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <?php include "../layouts/bread.template.php"; ?>
                    <!-- end page title -->

                    <div class="row">
                        

                        <div class="col-xl-12 col-lg-12">
                            <div>
                                <div class="card">
                                    <div class="card-header border-0">
                                        <div class="row g-4">
                                            <div class="col-sm-auto">
                                                <div>
                                                    <a href="apps-ecommerce-add-product.html" class="btn btn-success" id="addproduct-btn"><i class="ri-add-line align-bottom me-1"></i> Add Product</a>
                                                </div>
                                            </div>
                                            <div class="col-sm">
                                                <div class="d-flex justify-content-sm-end">
                                                    <div class="search-box ms-2">
                                                        <input type="text" class="form-control" id="searchProductList" placeholder="Search Products...">
                                                        <i class="ri-search-line search-icon"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-header">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <ul class="nav nav-tabs-custom card-header-tabs border-bottom-0" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active fw-semibold" data-bs-toggle="tab" href="#productnav-all" role="tab">
                                                            All <span class="badge badge-soft-danger align-middle rounded-pill ms-1">12</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link fw-semibold" data-bs-toggle="tab" href="#productnav-published" role="tab">
                                                            Published <span class="badge badge-soft-danger align-middle rounded-pill ms-1">5</span>
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link fw-semibold" data-bs-toggle="tab" href="#productnav-draft" role="tab">
                                                            Draft
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-auto">
                                                <div id="selection-element">
                                                    <div class="my-n1 d-flex align-items-center text-muted">
                                                        Select <div id="select-content" class="text-body fw-semibold px-1"></div> Result <button type="button" class="btn btn-link link-danger p-0 ms-3 shadow-none" data-bs-toggle="modal" data-bs-target="#removeItemModal">Remove</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end card header -->
                                    <div class="card-body">

                                        <div class="tab-content text-muted">
                                            <div class="tab-pane active" id="productnav-all" role="tabpanel">
                                                <div id="table-product-list-all" class="table-card gridjs-border-none"></div>
                                            </div>
                                            <!-- end tab pane -->

                                            <div class="tab-pane" id="productnav-published" role="tabpanel">
                                                <div id="table-product-list-published" class="table-card gridjs-border-none"></div>
                                            </div>
                                            <!-- end tab pane -->

                                            <div class="tab-pane" id="productnav-draft" role="tabpanel">
                                                <div class="py-4 text-center">
                                                    <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#405189,secondary:#0ab39c" style="width:72px;height:72px">
                                                    </lord-icon>
                                                    <h5 class="mt-4">Sorry! No Result Found</h5>
                                                </div>
                                            </div>
                                            <!-- end tab pane -->
                                        </div>
                                        <!-- end tab content -->

                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->
                            </div>
                        </div>
                        <!-- end col -->
                    </div>

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <?php include "../layouts/footer.template.php"; ?>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

    <!--preloader-->
    <div id="preloader">
        <div id="status">
            <div class="spinner-border text-primary avatar-sm" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>

    <?php include "../layouts/scripts.template.php"; ?>
   	
   	<!-- nouisliderribute js -->
    <script src="<?= BASE_PATH ?>public/libs/nouislider/nouislider.min.js"></script>
    <script src="<?= BASE_PATH ?>public/libs/wnumb/wNumb.min.js"></script>

    <!-- gridjs js -->
    <script src="<?= BASE_PATH ?>public/libs/gridjs/gridjs.umd.js"></script>
     
    <!-- ecommerce product list -->
    <script src="<?= BASE_PATH ?>public/js/pages/ecommerce-product-list.init.js"></script>

</body>


</html>



<div class="tab-pane" id="productnav-published" role="tabpanel">
    <div id="table-product-list-published" class="table-card gridjs-border-none">
        <div role="complementary" class="gridjs gridjs-container" style="width: 100%;">
            <div class="gridjs-wrapper" style="height: auto;">
                <table role="grid" class="gridjs-table" style="height: auto;">
                    <thead class="gridjs-thead">
                        <tr class="gridjs-tr">
                            <th data-column-id="#" class="gridjs-th text-muted" style="width: 40px;">
                                <div class="gridjs-th-content">#</div>
                            </th>
                            <th data-column-id="product" class="gridjs-th-sort text-muted" tabindex="0"
                                style="width: 360px;">
                                <div class="gridjs-th-content">Product</div>
                                <button tabindex="-1" aria-label="Sort column ascending" title="Sort column ascending"
                                    class="gridjs-sort gridjs-sort-neutral"></button>
                            </th>
                            <th data-column-id="stock" class="gridjs-th-sort text-muted" tabindex="0"
                                style="width: 94px;">
                                <div class="gridjs-th-content">Stock</div>
                                <button tabindex="-1" aria-label="Sort column ascending" title="Sort column ascending"
                                    class="gridjs-sort gridjs-sort-neutral"></button>
                            </th>
                            <th data-column-id="price" class="gridjs-th-sort text-muted" tabindex="0"
                                style="width: 101px;">
                                <div class="gridjs-th-content">Price</div>
                                <button tabindex="-1" aria-label="Sort column ascending" title="Sort column ascending"
                                    class="gridjs-sort gridjs-sort-neutral"></button>
                            </th>
                            <th data-column-id="action" class="gridjs-th text-muted" style="width: 80px;">
                                <div class="gridjs-th-content">Action</div>
                            </th>
                        </tr>
                    </thead>
                    <thead class="gridjs-tbody">
                        <tr class="gridjs-tr">
                            <td data-column-id="#" class="gridjs-td">
                                <div class="gridjs-th-content">#</div>
                            </td>
                            <td data-column-id="product" class="gridjs-td">
                                <span>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="avatar-sm bg-light rounded p-1">
                                                <img src="../public/images/products/img-2.png" alt=""
                                                    class="img-fluid d-block">
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <h5 class="fs-14 mb-1">
                                                <a href="../productos/index.php" class="text-dark">Urban Ladder Pashe
                                                    Chair</a>
                                            </h5>
                                            <p class="text-muted mb-0">
                                                Category :
                                                <span class="fw-medium">Furniture</span>
                                            </p>
                                        </div>
                                    </div>
                                </span>
                                <div class="gridjs-th-content">Product</div>
                                <button tabindex="-1" aria-label="Sort column ascending" title="Sort column ascending"
                                    class="gridjs-sort gridjs-sort-neutral"></button>
                            </td>
                            <td data-column-id="stock" class="gridjs-td">80</td>
                            <td data-column-id="price" class="gridjs-td">
                                <span>$160.00</span>
                            </td>

                            <td data-column-id="action" class="gridjs-td">
                                <span>
                                    <div class="dropdown">
                                        <button class="btn btn-soft-secondary btn-sm dropdown" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ri-more-fill"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li>
                                                <a class="dropdown-item" href="apps-ecommerce-product-details.html">
                                                    <i class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                    View
                                                </a>

                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="apps-ecommerce-product-details.html">
                                                    <i class="ri-eye-fill align-bottom me-2 text-muted"></i>
                                                    Edit
                                                </a>
                                            </li>
                                            <li class="dropdown-divider"></li>
                                            <li>
                                                <a class="dropdown-item remove-list" href="#" data-id="undefined"
                                                    data-bs-toggle="modal" data-bs-target="#removeItemModal">
                                                    <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i>
                                                    " Delete "
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </span>
                            </td>

                        </tr>
                    </thead>
                </table>
            </div>
            <div class="gridjs-footer">
                <div class="gridjs-pagination">
                    <div class="gridjs-pagination">
                        <div role="status" aria-live="polite" class="gridjs-summary" title="Page 1 of 2">
                            Showing <b>1</b>
                            to
                            <b>10</b>
                            of
                            <b>12</b>
                            results
                        </div>
                        <div class="gridjs-pages">
                            <button tabindex="0" role="button" disabled="" title="Previous" aria-label="Previous"
                                class="">Previous</button>
                            <button tabindex="0" role="button" class="gridjs-currentPage" title="Page 1"
                                aria-label="Page 1">1</button>
                            <button tabindex="0" role="button" class="" title="Page 2" aria-label="Page 2">2</button>
                            <button tabindex="0" role="button" title="Next" aria-label="Next" class="">Next</button>
                        </div>
                    </div>
                </div>
                <div id="gridjs-temp" class="gridjs-temp"></div>
            </div>
        </div>

    </div>







