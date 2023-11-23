
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Сотрудники</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Premium Bootstrap 5 Admin Dashboard Template" />
        <meta name="keywords" content="Saas, CRM, Admin, Dashboard, Modern, Classic" />
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
       <?php
       include 'menu.php'
       ?>

            <!-- Start Page Content -->
            <main class="page-content bg-light">
                <?php
                    include 'top-header.php'
                ?>
                <div class="container-fluid">
                    <div class="layout-specing">
                        <div class="d-md-flex justify-content-between align-items-center">
                            <h5 class="mb-0">Сотрудники</h5>

                            <nav aria-label="breadcrumb" class="d-inline-block mt-2 mt-sm-0">
                                <ul class="breadcrumb bg-transparent rounded mb-0 p-0">
                                    <li class="breadcrumb-item text-capitalize"><a href="/">Главная</a></li>
                                    <li class="breadcrumb-item text-capitalize active" aria-current="page">Сотрудники</li>
                                </ul>
                            </nav>
                        </div>
                    
                        <div class="row g-2">
                            <div class="col-xl-2 col-lg-3 col-md-4 col-12 mt-4">
                                <div class="card rounded border-0 shadow p-4">
                                    <a href="javascript:void(0)" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#compose-mail">
                                        <i class="uil uil-plus me-1"></i> Добавить</a>

                                
                                </div>
                            </div><!--end col-->

                            <div class="col-xl-10 col-lg-9 col-md-8 col-12 mt-4">
                                <div class="tab-content rounded-0 shadow-0" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="inbox" role="tabpanel" aria-labelledby="inbox-tab">
                                        <div class="table-responsive bg-white shadow rounded">
                                            <table class="table mb-0">
                                                <thead>
                                                    <tr>
                                                        <th class="p-3 border-bottom" style="width: 50px;">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                            </div>
                                                        </th>
                                                        <th class="text-muted border-bottom" style="width: 50px;"></th>
                                                        <th class="border-bottom" style="min-width: 120px;">Name</th>
                                                        <th class="border-bottom" style="min-width: 120px;">Subject</th>
                                                        <th class="border-bottom" style="min-width: 120px;">Subject</th>
                                                        <th class="p-3 text-end border-bottom" style="min-width: 130px;">Date & Time</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <tr>
                                                        <td class="p-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
                                                            </div>
                                                        </td>
                                                        <td class="text-muted">
                                                            <i class="ti ti-star"></i>
                                                        </td>
                                                        <td><a href="javascript:void(0)" class="text-dark" data-bs-toggle="modal" data-bs-target="#openmail">Clavin Carlo</a></td>
                                                        <td class="text-muted">Landrick Customization</td>
                                                        <td class="text-muted">Landrick Customization</td>
                                                        <td class="p-3 text-end text-muted">3:05pm</td>
                                                    </tr>

                                                    <tr>
                                                        <td class="p-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3">
                                                            </div>
                                                        </td>
                                                        <td class="text-muted">
                                                            <i class="ti ti-star"></i>
                                                        </td>
                                                        <td><a href="javascript:void(0)" class="text-dark" data-bs-toggle="modal" data-bs-target="#openmail">Madeleine Jackson</a></td>
                                                        <td class="text-muted">User-friendly value-added application 😊</td>
                                                        <td class="p-3 text-end text-muted">12:00pm</td>
                                                    </tr>

                                                    <tr>
                                                        <td class="p-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault4">
                                                            </div>
                                                        </td>
                                                        <td class="text-muted">
                                                            <i class="ti ti-star"></i>
                                                        </td>
                                                        <td><a href="javascript:void(0)" class="text-dark" data-bs-toggle="modal" data-bs-target="#openmail">Sherrie Miller</a></td>
                                                        <td class="text-muted">Focused impactful open system 📷 😃</td>
                                                        <td class="p-3 text-end text-muted">8hours ago</td>
                                                    </tr>

                                                    <tr>
                                                        <td class="p-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault5">
                                                            </div>
                                                        </td>
                                                        <td class="text-muted">
                                                            <i class="ti ti-star"></i>
                                                        </td>
                                                        <td><a href="javascript:void(0)" class="text-dark" data-bs-toggle="modal" data-bs-target="#openmail">John Belgrave</a></td>
                                                        <td class="text-muted">Profound systemic alliance 🎉 🎊</td>
                                                        <td class="p-3 text-end text-muted">20hours ago</td>
                                                    </tr>

                                                    <tr>
                                                        <td class="p-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault6">
                                                            </div>
                                                        </td>
                                                        <td class="text-muted">
                                                            <i class="ti ti-star"></i>
                                                        </td>
                                                        <td><a href="javascript:void(0)" class="text-dark" data-bs-toggle="modal" data-bs-target="#openmail">Jimmy Bojorquez</a></td>
                                                        <td class="text-muted">Organized value-added model</td>
                                                        <td class="p-3 text-end text-muted">15th Sept, 2021</td>
                                                    </tr>

                                                    <tr>
                                                        <td class="p-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault7">
                                                            </div>
                                                        </td>
                                                        <td class="text-muted">
                                                            <i class="ti ti-star"></i>
                                                        </td>
                                                        <td><a href="javascript:void(0)" class="text-dark" data-bs-toggle="modal" data-bs-target="#openmail">Louise Stewart</a></td>
                                                        <td class="text-muted">Waterfall Model Update</td>
                                                        <td class="p-3 text-end text-muted">10th Sept, 2021</td>
                                                    </tr>

                                                    <tr>
                                                        <td class="p-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault8">
                                                            </div>
                                                        </td>
                                                        <td class="text-muted">
                                                            <i class="ti ti-star"></i>
                                                        </td>
                                                        <td><a href="javascript:void(0)" class="text-dark" data-bs-toggle="modal" data-bs-target="#openmail">Kelly Hair</a></td>
                                                        <td class="text-muted">Company Report</td>
                                                        <td class="p-3 text-end text-muted">8th Sept, 2021</td>
                                                    </tr>

                                                    <tr>
                                                        <td class="p-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault9">
                                                            </div>
                                                        </td>
                                                        <td class="text-muted">
                                                            <i class="ti ti-star"></i>
                                                        </td>
                                                        <td><a href="javascript:void(0)" class="text-dark" data-bs-toggle="modal" data-bs-target="#openmail">Ester Casella</a></td>
                                                        <td class="text-muted">Theme Update</td>
                                                        <td class="p-3 text-end text-muted">7th Sept, 2021</td>
                                                    </tr>

                                                    <tr>
                                                        <td class="p-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault10">
                                                            </div>
                                                        </td>
                                                        <td class="text-muted">
                                                            <i class="ti ti-star"></i>
                                                        </td>
                                                        <td><a href="javascript:void(0)" class="text-dark" data-bs-toggle="modal" data-bs-target="#openmail">Richard Benavides</a></td>
                                                        <td class="text-muted">Your product has been updated!</td>
                                                        <td class="p-3 text-end text-muted">5th Sept, 2021</td>
                                                    </tr>

                                                    <tr>
                                                        <td class="p-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault11">
                                                            </div>
                                                        </td>
                                                        <td class="text-muted">
                                                            <i class="ti ti-star"></i>
                                                        </td>
                                                        <td><a href="javascript:void(0)" class="text-dark" data-bs-toggle="modal" data-bs-target="#openmail">Calvin Hudson</a></td>
                                                        <td class="text-muted">ThemeForest Sale</td>
                                                        <td class="p-3 text-end text-muted">1st Sept, 2021</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                        <div class="mt-4 d-flex align-items-center justify-content-between">
                                            <div>
                                                <a href="#" class="btn btn-icon btn-sm btn-pills btn-soft-light"><i class="ti ti-arrow-left"></i></a>
                                                <a href="#" class="btn btn-icon btn-sm btn-pills btn-soft-light"><i class="ti ti-arrow-right"></i></a>
                                            </div>

                                            <span class="text-muted me-3">Showing 1 - 10 out of 45</span>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade bg-white rounded" id="starred" role="tabpanel" aria-labelledby="starred-tab">
                                        <div class="table-responsive bg-white shadow rounded">
                                            <table class="table mb-0">
                                                <thead>
                                                    <tr>
                                                        <th class="p-3 border-bottom" style="width: 50px;">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault12">
                                                            </div>
                                                        </th>
                                                        <th class="text-muted border-bottom" style="width: 50px;"></th>
                                                        <th class="border-bottom" style="min-width: 120px;">Name</th>
                                                        <th class="border-bottom" style="min-width: 500px;">Subject</th>
                                                        <th class="p-3 text-end border-bottom" style="min-width: 130px;">Date & Time</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <tr>
                                                        <td class="p-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault13">
                                                            </div>
                                                        </td>
                                                        <td class="text-muted">
                                                            <i class="ti ti-star"></i>
                                                        </td>
                                                        <td><a href="javascript:void(0)" class="text-dark" data-bs-toggle="modal" data-bs-target="#openmail">Clavin Carlo</a></td>
                                                        <td class="text-muted">Landrick Customization</td>
                                                        <td class="p-3 text-end text-muted">3:05pm</td>
                                                    </tr>

                                                    <tr>
                                                        <td class="p-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault14">
                                                            </div>
                                                        </td>
                                                        <td class="text-muted">
                                                            <i class="ti ti-star"></i>
                                                        </td>
                                                        <td><a href="javascript:void(0)" class="text-dark" data-bs-toggle="modal" data-bs-target="#openmail">Madeleine Jackson</a></td>
                                                        <td class="text-muted">User-friendly value-added application 😊</td>
                                                        <td class="p-3 text-end text-muted">12:00pm</td>
                                                    </tr>

                                                    <tr>
                                                        <td class="p-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault15">
                                                            </div>
                                                        </td>
                                                        <td class="text-muted">
                                                            <i class="ti ti-star"></i>
                                                        </td>
                                                        <td><a href="javascript:void(0)" class="text-dark" data-bs-toggle="modal" data-bs-target="#openmail">Sherrie Miller</a></td>
                                                        <td class="text-muted">Focused impactful open system 📷 😃</td>
                                                        <td class="p-3 text-end text-muted">8hours ago</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div><!--end teb pane-->

                                    <div class="tab-pane fade bg-white rounded p-4 shadow" id="spam" role="tabpanel" aria-labelledby="spam-tab">
                                        <span class="text-muted">Hooray, no spam here!</span>
                                    </div><!--end teb pane-->

                                    <div class="tab-pane fade bg-white rounded" id="sent" role="tabpanel" aria-labelledby="send-tab">
                                        <div class="table-responsive bg-white shadow rounded">
                                            <table class="table mb-0">
                                                <thead>
                                                    <tr>
                                                        <th class="p-3 border-bottom" style="width: 50px;">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault16">
                                                            </div>
                                                        </th>
                                                        <th class="text-muted border-bottom" style="width: 50px;"></th>
                                                        <th class="border-bottom" style="min-width: 120px;">Name</th>
                                                        <th class="border-bottom" style="min-width: 500px;">Subject</th>
                                                        <th class="p-3 text-end border-bottom" style="min-width: 130px;">Date & Time</th>
                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    <tr>
                                                        <td class="p-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault17">
                                                            </div>
                                                        </td>
                                                        <td class="text-muted">
                                                            <i class="ti ti-star"></i>
                                                        </td>
                                                        <td><a href="javascript:void(0)" class="text-dark" data-bs-toggle="modal" data-bs-target="#openmail">Clavin Carlo</a></td>
                                                        <td class="text-muted">Landrick Customization</td>
                                                        <td class="p-3 text-end text-muted">3:05pm</td>
                                                    </tr>

                                                    <tr>
                                                        <td class="p-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault18">
                                                            </div>
                                                        </td>
                                                        <td class="text-muted">
                                                            <i class="ti ti-star"></i>
                                                        </td>
                                                        <td><a href="javascript:void(0)" class="text-dark" data-bs-toggle="modal" data-bs-target="#openmail">Madeleine Jackson</a></td>
                                                        <td class="text-muted">User-friendly value-added application 😊</td>
                                                        <td class="p-3 text-end text-muted">12:00pm</td>
                                                    </tr>

                                                    <tr>
                                                        <td class="p-3">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault19">
                                                            </div>
                                                        </td>
                                                        <td class="text-muted">
                                                            <i class="ti ti-star"></i>
                                                        </td>
                                                        <td><a href="javascript:void(0)" class="text-dark" data-bs-toggle="modal" data-bs-target="#openmail">Sherrie Miller</a></td>
                                                        <td class="text-muted">Focused impactful open system 📷 😃</td>
                                                        <td class="p-3 text-end text-muted">8hours ago</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div><!--end teb pane-->

                                    <div class="tab-pane fade bg-white rounded p-4 shadow" id="drafts" role="tabpanel" aria-labelledby="drafts-tab">
                                        <span class="text-muted">You don't have any saved drafts. Saving a draft allows you to keep a message you aren't ready to send yet.</span>
                                    </div><!--end teb pane-->

                                    <div class="tab-pane fade bg-white rounded p-4 shadow" id="delete" role="tabpanel" aria-labelledby="delete-tab">
                                        <span class="text-muted">No conversations in Trash.</span>
                                    </div><!--end teb pane-->

                                    <div class="tab-pane fade bg-white rounded p-4 shadow" id="notes" role="tabpanel" aria-labelledby="notes-tab">
                                        <span class="text-muted">No notes in Notes</span>
                                    </div><!--end teb pane-->
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div>
                </div><!--end container-->

                <!-- Footer Start -->
                <footer class="bg-white shadow py-3">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col">
                                <div class="text-sm-start text-center">
                                    <p class="mb-0 text-muted">© <script>document.write(new Date().getFullYear())</script> Landrick. Design with <i class="mdi mdi-heart text-danger"></i> by <a href="https://shreethemes.in/" target="_blank" class="text-reset">Shreethemes</a>.</p>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end container-->
                </footer><!--end footer-->
                <!-- End -->
            </main>
            <!--End page-content" -->
        </div>
        <!-- page-wrapper -->

        <!-- Compose Mail Start -->
        <div class="modal fade" id="compose-mail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header border-bottom p-3">
                        <h5 class="modal-title" id="exampleModalLabel">Compose</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body p-3 pt-4">
                        <form>
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-3">
                                        <input type="email" class="form-control" placeholder="To">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <input type="email" class="form-control" placeholder="Cc">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <input type="email" class="form-control" placeholder="Bcc">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div id="editor"><p>Hello,<br><br> If the distribution of letters and 'words' is random, the reader will not be distracted from making a neutral judgement on the visual impact and readability of the typefaces (typography), or the distribution of text on the page (layout or type area). <br><br>Thank you</p></div>
                                </div>

                                <div class="col-12 mt-4">
                                    <button type="submit" class="btn btn-primary">Send Now</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Compose Mail End -->

        <!-- Modal Content Start -->
        <div class="modal fade" id="openmail" tabindex="-1" aria-labelledby="LoginForm-title" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content rounded shadow border-0">
                    <div class="modal-header border-bottom">
                        <h5 class="modal-title" id="LoginForm-title">Landrick Customization</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body p-0">
                        <div class="p-3 border-bottom">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center">
                                    <img src="assets/images/client/05.jpg" class="avatar avatar-md-sm rounded-circle border shadow" alt="">
                                    <div class="flex-1 ms-2">
                                        <span class="d-block">Cristina Julia</span>
                                        <button type="button" class="btn dropdown-toggle p-0 text-muted small fw-normal" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">cristinajulia@xyz.mail</button>
                                            <ul class="dropdown-menu dd-menu bg-white shadow border-0 mt-2 p-3 mb-0">
                                                <li class="text-muted small">From: <small class="text-dark">cristinajulia@xyz.mail</small></li>
                                                <li class="text-muted small">To: <small class="text-dark">support@shreethemes.in</small></li>
                                                <li class="text-muted small">Date: <small class="text-dark">3:45pm 16th Septemberer, 2021</small></li>
                                            </ul>
                                    </div>
                                </div>

                                <div>
                                    <a href="#" class="btn btn-icon btn-sm btn-pills btn-soft-light" data-bs-toggle="tooltip" data-bs-placement="top" title="Reply"><i class="ti ti-arrow-back-up"></i></a>
                                    <a href="#" class="btn btn-icon btn-sm btn-pills btn-soft-light" data-bs-toggle="tooltip" data-bs-placement="top" title="Forward"><i class="ti ti-arrow-forward-up"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="p-3 border-bottom">
                            <p class="text-muted mb-0">Hello,<br><br> If the distribution of letters and 'words' is random, the reader will not be distracted from making a neutral judgement on the visual impact and readability of the typefaces (typography), or the distribution of text on the page (layout or type area). <br><br>Thank you</p>
                        </div>

                        <div class="p-3">
                            <p class="text-muted mb-0">Click here to <a href="#!" class="text-primary">Reply</a> or <a href="#!" class="text-primary">Forward</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Content End -->

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
        <!-- CK editor -->
        <script src="assets/js/ckeditor.js"></script>
        <!-- Main Js -->
        <script src="assets/js/plugins.init.js"></script>
        <script src="assets/js/app.js"></script>
    </body>

</html>