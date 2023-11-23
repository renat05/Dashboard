
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="author" content="Shreethemes" />
        <meta name="email" content="support@shreethemes.in" />
        <meta name="website" content="https://shreethemes.in" />
        <meta name="Version" content="v3.8.0" />
        <!-- favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        <!-- Bootstrap -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- simplebar -->
        <link href="assets/css/simplebar.css" rel="stylesheet" type="text/css" />
        
        <!-- Icons -->
        <link href="assets/css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/tabler-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="https://unicons.iconscout.com/release/v3.0.6/css/line.css"  rel="stylesheet">
        <!-- Css -->
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" id="theme-opt" />

    </head>

    <body>
        <!-- Loader -->
        <!-- <div id="preloader">
            <div id="status">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div> -->
        <!-- Loader -->

   <?php 
   include 'menu.php';
   ?>
  

            <!-- Start Page Content -->
            <main class="page-content bg-light">
           
            <?php 
   include 'top-header.php';
   ?>
                <div class="container-fluid">
                    <div class="layout-specing">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <h6 class="text-muted mb-1">Добро пожаловать</h6>
                                <h5 class="mb-0">Главная</h5>
                            </div>

                           
                        </div>
                    
                        <div class="row row-cols-xl-5 row-cols-md-2 row-cols-1">
                            <div class="col mt-4">
                                <a href="#!" class="features feature-primary d-flex justify-content-between align-items-center bg-white rounded shadow p-3">
                                    <div class="d-flex align-items-center">
                                        <div class="icon text-center rounded-pill">
                                            <i class="uil uil-user-circle fs-4 mb-0"></i>
                                        </div>
                                        <div class="flex-1 ms-3">
                                            <h6 class="mb-0 text-muted">Визиты</h6>
                                            <p class="fs-5 text-dark fw-bold mb-0"><span class="counter-value" data-target="25"></span></p>
                                        </div>
                                    </div>

                                </a>
                            </div><!--end col-->

                            <div class="col mt-4">
                                <a href="#!" class="features feature-primary d-flex justify-content-between align-items-center bg-white rounded shadow p-3">
                                    <div class="d-flex align-items-center">
                                        <div class="icon text-center rounded-pill">
                                            <i class="uil uil-users-alt fs-4 mb-0"></i>
                                        </div>
                                        <div class="flex-1 ms-3">
                                            <h6 class="mb-0 text-muted">Сотрудники</h6>
                                            <p class="fs-5 text-dark fw-bold mb-0"><span class="counter-value" data-target="100"></span></p>
                                        </div>
                                        
                                    </div>

                                </a>
                            </div>

                            <div class="col mt-4">
                                <a href="#!" class="features feature-primary d-flex justify-content-between align-items-center bg-white rounded shadow p-3">
                                    <div class="d-flex align-items-center">
                                        <div class="icon text-center rounded-pill">
                                            <i class="uil uil-newspaper fs-4 mb-0"></i>
                                        </div>
                                        <div class="flex-1 ms-3">
                                            <h6 class="mb-0 text-muted">Новости</h6>
                                            <p class="fs-5 text-dark fw-bold mb-0"><span class="counter-value" data-target="30"></span></p>
                                        </div>
                                    </div>

                                </a>
                            </div><!--end col-->
                            
                            <div class="col mt-4">
                                <a href="#!" class="features feature-primary d-flex justify-content-between align-items-center bg-white rounded shadow p-3">
                                    <div class="d-flex align-items-center">
                                        <div class="icon text-center rounded-pill">
                                            <i class="uil uil-pen fs-4 mb-0"></i>
                                        </div>
                                        <div class="flex-1 ms-3">
                                            <h6 class="mb-0 text-muted">Отзывы</h6>
                                            <p class="fs-5 text-dark fw-bold mb-0"><span class="counter-value" data-target="50">50</span></p>
                                        </div>
                                    </div>

                                    <!-- <span class="text-success"><i class="uil uil-arrow-growth"></i> 1.46%</span> -->
                                </a>
                            </div><!--end col-->
                         
                            
                          <!--end col-->
                        </div><!--end row-->

                    

                            <div style="width: 100%;" class="col-xl-8 mt-4">
                                <div class="d-flex justify-content-between p-4 bg-white shadow rounded-top">
                                    <h6 class="fw-bold mb-0">Сотрудники</h6>
                                    <div class="mt-4 mt-sm-0">
                                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newblogadd">Добавить</a>
                            </div>

                                    <!-- <ul class="list-unstyled mb-0">
                                        <li class="dropdown dropdown-primary list-inline-item">
                                            <button type="button" class="btn btn-icon btn-pills btn-soft-primary dropdown-toggle p-0" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ti ti-dots-vertical"></i></button>
                                            <div class="dropdown-menu dd-menu dropdown-menu-end bg-white shadow border-0 mt-3 py-3">
                                                <a class="dropdown-item text-dark" href="#"> Paid</a>
                                                <a class="dropdown-item text-dark" href="#"> Unpaid</a>
                                            </div>
                                        </li>
                                    </ul> -->
                                </div>
                                <div class="table-responsive shadow rounded-bottom" data-simplebar style="height: 550px;">
                                    <table class="table table-center bg-white mb-0">
                                        <thead>
                                            <tr>
                                                <th class="border-bottom p-3">№</th>
                                                <th class="border-bottom p-3" style="min-width: 220px;">Имя</th>
                                                <th class="text-center border-bottom p-3">Должность</th>
                                                <th class="text-center border-bottom p-3" style="min-width: 150px;">Дата</th>
                                                <th class="text-end border-bottom p-3" style="min-width: 100px;">Подробнее</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- Start -->
                                            <tr>
                                                <th class="p-3">01</th>
                                                <td class="p-3">
                                                    <a href="#" class="text-primary">
                                                        <div class="d-flex align-items-center">
                                                            <span class="ms-2">Копылов Дмитрий</span>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="text-center p-3">Ведущий специалист тендерного отдела</td>
                                                <td class="text-center p-3">22.10.2022</td>
                                            
                                                <td class="text-end p-3">
                                                    <a href="#" class="btn btn-sm btn-primary">Подробнее</a>
                                                </td>
                                            </tr>
                                            <!-- End -->

                                            <!-- Start -->
                                            <tr>
                                                <th class="p-3">02</th>
                                                <td class="p-3">
                                                    <a href="#" class="text-primary">
                                                        <div class="d-flex align-items-center">
                                                            <span class="ms-2">Пронина Альбина</span>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="text-center p-3">Ведущий специалист тендерного отдела</td>
                                                <td class="text-center p-3">22.10.2022</td>
                                               
                                                <td class="text-end p-3">
                                                    <a href="#" class="btn btn-sm btn-primary">Подробнее</a>
                                                </td>
                                            </tr>
                                            <!-- End -->

                                            <!-- Start -->
                                            <tr>
                                                <th class="p-3">03</th>
                                                <td class="p-3">
                                                    <a href="#" class="text-primary">
                                                        <div class="d-flex align-items-center">
                                                            <span class="ms-2">Пронина Альбина</span>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="text-center p-3">Ведущий специалист тендерного отдела</td>
                                                <td class="text-center p-3">22.10.2022</td>
                                              
                                                <td class="text-end p-3">
                                                    <a href="#" class="btn btn-sm btn-primary">Подробнее</a>
                                                </td>
                                            </tr>
                                            <!-- End -->

                                            <!-- Start -->
                                            <tr>
                                                <th class="p-3">04</th>
                                                <td class="p-3">
                                                    <a href="#" class="text-primary">
                                                        <div class="d-flex align-items-center">
                                                            <span class="ms-2">Копылов Дмитрий</span>
                                                        </div>
                                                    </a>
                                                </td>
                                                <td class="text-center p-3">Ведущий специалист тендерного отдела</td>
                                                <td class="text-center p-3">22.10.2022</td>
                                             
                                                <td class="text-end p-3">
                                                    <a href="#" class="btn btn-sm btn-primary">Подробнее</a>
                                                </td>
                                            </tr>
                                            <!-- End -->

                                        </tbody>
                                    </table>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div>
                </div><!--end container-->

                <!-- Footer Start -->
             
                <!-- End -->
            </main>
            <!--End page-content" -->
        </div>
        <!-- page-wrapper -->
            <!-- Start Modal -->
            <div class="modal fade" id="newblogadd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div style="width:50%; margin: 0 auto" class="modal-content">
                    <div class="modal-header border-bottom p-3">
                        <h5 class="modal-title" id="exampleModalLabel">Добавить сотрудника</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body p-3 pt-4">
                        <div class="row">
                        

                            <div class="col-md-8 mt-4 mt-sm-0">
                                <div class="ms-md-4">
                                    <form>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Имя <span class="text-danger">*</span></label>
                                                    <input style="width:300px"  name="name" id="name" type="text" class="form-control" placeholder="Имя :">
                                                </div>
                                            </div><!--end col-->
    
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label"> Должность : </label>
                                                    <input style="width:300px" name="name" id="name" type="text" class="form-control" placeholder="Должность :">
                                                </div>
                                            </div><!--end col-->
    
    
                                            <div class="col-lg-12 text-end">
                                                <button type="submit" class="btn btn-primary">Добавить</button>
                                            </div><!--end col-->
                                        </div>
                                    </form>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div>
                </div>
            </div>
        </div>
        <!-- End modal -->


        <!-- Offcanvas Start -->
        <div class="offcanvas offcanvas-end bg-white shadow" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header border-bottom">
                <h5 id="offcanvasRightLabel" class="mb-0">
                    <img src="assets/images/logo-dark.png" height="24" class="light-version" alt="">
                    <img src="assets/images/logo-light.png" height="24" class="dark-version" alt="">
                </h5>
                <button type="button" class="btn-close d-flex align-items-center text-dark" data-bs-dismiss="offcanvas" aria-label="Close"><i class="mdi mdi-close fs-4"></i></button>
            </div>
            <div class="offcanvas-body p-4 px-md-5">
                <div class="row">
                    <div class="col-12">
                        <!-- Style switcher -->
                        <div id="style-switcher">
                            <div>
                                <ul class="text-center list-unstyled mb-0">
                                    <li class="d-grid"><a href="javascript:void(0)" class="rtl-version t-rtl-light" onclick="setTheme('style-rtl')"><img src="assets/images/demos/rtl.png" class="img-fluid rounded-md shadow-md d-block" alt=""><span class="text-muted mt-2 d-block">RTL Version</span></a></li>
                                    <li class="d-grid"><a href="javascript:void(0)" class="ltr-version t-ltr-light" onclick="setTheme('style')"><img src="assets/images/demos/ltr.png" class="img-fluid rounded-md shadow-md d-block" alt=""><span class="text-muted mt-2 d-block">LTR Version</span></a></li>
                                    <li class="d-grid"><a href="javascript:void(0)" class="dark-rtl-version t-rtl-dark" onclick="setTheme('style-dark-rtl')"><img src="assets/images/demos/dark-rtl.png" class="img-fluid rounded-md shadow-md d-block" alt=""><span class="text-muted mt-2 d-block">RTL Version</span></a></li>
                                    <li class="d-grid"><a href="javascript:void(0)" class="dark-ltr-version t-ltr-dark" onclick="setTheme('style-dark')"><img src="assets/images/demos/dark.png" class="img-fluid rounded-md shadow-md d-block" alt=""><span class="text-muted mt-2 d-block">LTR Version</span></a></li>
                                    <li class="d-grid"><a href="javascript:void(0)" class="dark-version t-dark mt-4" onclick="setTheme('style-dark')"><img src="assets/images/demos/dark.png" class="img-fluid rounded-md shadow-md d-block" alt=""><span class="text-muted mt-2 d-block">Dark Version</span></a></li>
                                    <li class="d-grid"><a href="javascript:void(0)" class="light-version t-light mt-4" onclick="setTheme('style')"><img src="assets/images/demos/ltr.png" class="img-fluid rounded-md shadow-md d-block" alt=""><span class="text-muted mt-2 d-block">Light Version</span></a></li>
                                    <li class="d-grid"><a href="../landing/index.html" target="_blank" class="mt-4"><img src="assets/images/demos/landing.png" class="img-fluid rounded-md shadow-md d-block" alt=""><span class="text-muted mt-2 d-block">Landing Demos</span></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- end Style switcher -->
                    </div><!--end col-->
                </div>
            </div>

            <div class="offcanvas-footer p-3 border-top text-center">
                <ul class="list-unstyled social-icon mb-0">
                    <li class="list-inline-item mb-0"><a href="https://1.envato.market/4n73n" target="_blank" class="rounded"><i class="ti ti-shopping-cart align-middle" title="Buy Now"></i></a></li>
                    <li class="list-inline-item mb-0"><a href="https://dribbble.com/shreethemes" target="_blank" class="rounded"><i class="ti ti-brand-dribbble align-middle" title="dribbble"></i></a></li>
                    <li class="list-inline-item mb-0"><a href="https://www.facebook.com/shreethemes" target="_blank" class="rounded"><i class="ti ti-brand-facebook align-middle" title="facebook"></i></a></li>
                    <li class="list-inline-item mb-0"><a href="https://www.instagram.com/shreethemes/" target="_blank" class="rounded"><i class="ti ti-brand-instagram align-middle" title="instagram"></i></a></li>
                    <li class="list-inline-item mb-0"><a href="https://twitter.com/shreethemes" target="_blank" class="rounded"><i class="ti ti-brand-twitter align-middle" title="twitter"></i></a></li>
                    <li class="list-inline-item mb-0"><a href="mailto:support@shreethemes.in" class="rounded"><i class="ti ti-mail align-middle" title="email"></i></a></li>
                    <li class="list-inline-item mb-0"><a href="https://shreethemes.in" target="_blank" class="rounded"><i class="ti ti-world align-middle" title="website"></i></a></li>
                </ul><!--end icon-->
            </div>
        </div>
        <!-- Offcanvas End -->
        
        <!-- javascript -->
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <!-- simplebar -->
        <script src="assets/js/simplebar.min.js"></script>
        <!-- Icons -->
        <script src="assets/js/feather.min.js"></script>
        <!-- Chart -->
        <script src="assets/js/apexcharts.min.js"></script>
        <!-- Main Js -->
        <script src="assets/js/plugins.init.js"></script>
        <script src="assets/js/app.js"></script>
        
    </body>

</html>