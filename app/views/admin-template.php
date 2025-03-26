<?php
$base_url = flight::get('flight.base_url');
?>
<!doctype html>
<html
    lang="en"
    class="light-style layout-menu-fixed layout-compact"
    dir="ltr"
    data-theme="theme-default"
    data-assets-path="<?= $base_url ?>assets/"
    data-template="vertical-menu-template-free"
    data-style="light">

<head>
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Home|Admin</title>
    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?= $base_url ?>assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <!-- <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" /> -->

    <link rel="stylesheet" href="<?= $base_url ?>assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="<?= $base_url ?>assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="<?= $base_url ?>assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="<?= $base_url ?>assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="<?= $base_url ?>assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="<?= $base_url ?>assets/vendor/libs/apex-charts/apex-charts.css" />
    <link rel="stylesheet" href="<?= $base_url ?>assets/css/popup.css" />
    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="<?= $base_url ?>assets/vendor/js/helpers.js"></script>
    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="<?= $base_url ?>assets/js/config.js"></script>


</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <!-- Menu -->
            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="app-brand demo">
                    <a href="admin-home" class="app-brand-link">
                        <span class="app-brand-logo demo">
                            <img src="<?= $base_url ?>/assets/img/logo/farm.jpg" alt="VarieThe Logo" style="height: auto; width: 80px;" />
                        </span>
                        <span class="app-brand-text demo menu-text fw-bold ms-2">MyFarm</span>
                    </a>
                    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                        <i class="bx bx-chevron-left bx-sm d-flex align-items-center justify-content-center"></i>
                    </a>
                </div>
                <div class="menu-inner-shadow"></div>
                <ul class="menu-inner py-1">
                    <li class="menu-header small text-uppercase">
                        <span class="menu-header-text">Apps &amp; Pages</span>
                    </li>
                    <li class="menu-item ">
                        <a href="admin-home" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-home"></i>
                            <div class="text-truncate" data-i18n="Basic">Home</div>
                        </a>
                    </li>
                    <li class="menu-header small text-uppercase">
                        <span class="menu-header-text">Gestion</span>
                    </li>
                    <!-- variete de the -->
                    <li class="menu-item  open">
                    <li class="menu-item">
                        <a href="javascript:void(0)" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-leaf"></i>
                            <div class="text-truncate" data-i18n="User interface">The</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="admin-list-variete" class="menu-link">
                                    <div class="text-truncate" data-i18n="Accordion">Liste</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="admin-insert-variete-formulaire" class="menu-link">
                                    <div class="text-truncate" data-i18n="Accordion">Ajoute</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- parcelle -->
                    <li class="menu-item  open">
                    <li class="menu-item">
                        <a href="javascript:void(0)" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-package"></i>
                            <div class="text-truncate" data-i18n="User interface">Parcelle</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="admin-list-parcelle" class="menu-link">
                                    <div class="text-truncate" data-i18n="Accordion">Liste</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="admin-insert-parcelle-formulaire" class="menu-link">
                                    <div class="text-truncate" data-i18n="Accordion">Ajoute</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- Depense -->
                    <li class="menu-item  open">
                    <li class="menu-item">
                        <a href="javascript:void(0)" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-money"></i>
                            <div class="text-truncate" data-i18n="User interface">Type de depense</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="admin-list-type-depense" class="menu-link">
                                    <div class="text-truncate" data-i18n="Accordion">Liste</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="admin-insert-type-depense-formulaire" class="menu-link">
                                    <div class="text-truncate" data-i18n="Accordion">Ajoute</div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- cueilleurs -->
                    <li class="menu-item  open">
                    <li class="menu-item">
                        <a href="javascript:void(0)" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-group"></i>
                            <div class="text-truncate" data-i18n="User interface">Cueilleurs</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="#" class="menu-link">
                                    <div class="text-truncate" data-i18n="Accordion">Liste</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="#" class="menu-link">
                                    <div class="text-truncate" data-i18n="Accordion">Ajoute</div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- Montant Salaire -->
                    <li class="menu-item  open">
                    <li class="menu-item">
                        <a href="javascript:void(0)" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-wallet"></i>
                            <div class="text-truncate" data-i18n="User interface">Montant Salaire</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="#" class="menu-link">
                                    <div class="text-truncate" data-i18n="Accordion">Liste</div>
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="config-salaire" class="menu-link">
                                    <div class="text-truncate" data-i18n="Accordion">Ajoute</div>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Connexion -->
                    <li class="menu-header small text-uppercase">
                        <span class="menu-header-text">Setting</span>
                    </li>
                    <li class="menu-item  open">
                    <li class="menu-item">
                        <a href="javascript:void(0)" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-cog"></i>
                            <div class="text-truncate" data-i18n="User interface">Connexion</div>
                        </a>
                        <ul class="menu-sub">
                            <li class="menu-item">
                                <a href="#" class="menu-link">
                                    <div class="text-truncate" data-i18n="Accordion">Log out</div>
                                </a>
                            </li>

                        </ul>
                    </li>
                    </li>
                    <li class="menu-item">
                        <a href="user-login-formulaire" class="menu-link">
                        <i class="menu-icon tf-icons bx bx-user-circle"></i>
                            <div class="text-truncate" data-i18n="User interface">Passer en client</div>
                        </a>

                    </li>
                </ul>
            </aside>
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->
                <nav
                    class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                    id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-4 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-6" href="javascript:void(0)">
                            <i class="bx bx-menu bx-md"></i>
                        </a>
                    </div>

                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                        <!-- Search -->
                        <div class="navbar-nav align-items-center">
                            <div class="nav-item d-flex align-items-center">
                                <i class="bx bx-search bx-md"></i>
                                <form action="search" method="post">
                                    <input
                                        type="text"
                                        class="form-control border-0 shadow-none ps-1 ps-sm-2"
                                        placeholder="Search..."
                                        aria-label="Search..."
                                        name="input" />
                                </form>
                            </div>
                        </div>
                        <!-- /Search -->
                    </div>
                </nav>
                <!-- / Navbar -->
                <div class="content-wrapper">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <?php include($page . ".php");   ?>
                    </div>
                </div>
            </div>
            <!-- / Layout page -->
        </div>
        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->

    <script src="<?= $base_url ?>assets/vendor/libs/jquery/jquery.js"></script>
    <script src="<?= $base_url ?>assets/vendor/libs/popper/popper.js"></script>
    <script src="<?= $base_url ?>assets/vendor/js/bootstrap.js"></script>
    <script src="<?= $base_url ?>assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="<?= $base_url ?>assets/vendor/js/menu.js"></script>
    <script src="<?= $base_url ?>assets/vendor/libs/apex-charts/apexcharts.js"></script>
    <script src="<?= $base_url ?>assets/js/main.js"></script>

    <script src="<?= $base_url ?>assets/js/dashboards-analytics.js"></script>
    <!-- ajax delete -->
    <script src="<?= $base_url ?>assets/js/admin-delete.js"></script>
</body>

</html>