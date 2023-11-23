
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Блог</title>
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
        include 'menu.php';
    ?>
            <main class="page-content bg-light">
            <?php 
   include 'top-header.php';
   ?>

                <div class="container-fluid">
                    <div class="layout-specing">
                        <div class="d-md-flex justify-content-between">
                            <div>
                                <h5 class="mb-0">Блог</h5>

                                <nav aria-label="breadcrumb" class="d-inline-block mt-1">
                                    <ul class="breadcrumb breadcrumb-muted bg-transparent rounded mb-0 p-0">
                                        <li class="breadcrumb-item text-capitalize"><a href="/">Главная</a></li>
                                        <li class="breadcrumb-item text-capitalize active" aria-current="page">Блог</li>
                                    </ul>
                                </nav>
                            </div>

                            <div class="mt-4 mt-sm-0">
                                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#newblogadd">Добавить</a>
                            </div>
                        </div>
                    
                        <div class="row">
                            <div class="col-xl-3 col-lg-4 col-md-6 mt-4">
                                <div class="card blog blog-primary rounded border-0 shadow overflow-hidden">
                                    <div class="position-relative">
                                        <img src="assets/images/blog/01.jpg" class="card-img-top" alt="...">
                                        <div class="overlay rounded-top"></div>
                                    </div>
                                    <div class="card-body content">
                                        <h5><a href="javascript:void(0)" class="card-title title text-dark">Закупки</a></h5>
                                        <div class="post-meta d-flex justify-content-between mt-3">
                                            <ul class="list-unstyled mb-0">
                                                <li class="list-inline-item me-2 mb-0"><a href="javascript:void(0)" class="text-muted like">
                                                    <i class="uil uil-heart me-1"></i>33</a></li>
                                                <li class="list-inline-item"><a href="javascript:void(0)" class="text-muted comments">
                                                    <i class="uil uil-comment me-1"></i>08</a></li>
                                            </ul>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#newblogadd2" class="text-muted readmore">Редактировать 
                                                <i class="uil uil-angle-right-b align-middle"></i></a>                                        </div>
                                    </div>
                                    <!-- <div class="author">
                                        <small class="text-light user d-block"><i class="uil uil-user"></i> Calvin Carlo</small>
                                        <small class="text-light date"><i class="uil uil-calendar-alt"></i> 25th June 2021</small>
                                    </div> -->
                                </div>
                            </div><!--end col-->
                            
                            
                            <div class="col-xl-3 col-lg-4 col-md-6 mt-4">
                                <div class="card blog blog-primary rounded border-0 shadow overflow-hidden">
                                    <div class="position-relative">
                                        <img src="assets/images/blog/08.jpg" class="card-img-top" alt="...">
                                        <div class="overlay rounded-top"></div>
                                    </div>
                                    <div class="card-body content">
                                        <h5><a href="javascript:void(0)" class="card-title title text-dark">Маркетинг</a></h5>
                                        <div class="post-meta d-flex justify-content-between mt-3">
                                            <ul class="list-unstyled mb-0">
                                                <li class="list-inline-item me-2 mb-0"><a href="javascript:void(0)" class="text-muted like"><i class="uil uil-heart me-1"></i>33</a></li>
                                                <li class="list-inline-item"><a href="javascript:void(0)" class="text-muted comments"><i class="uil uil-comment me-1"></i>08</a></li>
                                            </ul>
                                            <a href="#" data-bs-toggle="modal" data-bs-target="#newblogadd2" class="text-muted readmore">Редактировать 
                                                <i class="uil uil-angle-right-b align-middle"></i></a>
                                        </div>
                                    </div>
                                    <!-- <div class="author">
                                        <small class="text-light user d-block"><i class="uil uil-user"></i> Calvin Carlo</small>
                                        <small class="text-light date"><i class="uil uil-calendar-alt"></i> 25th June 2021</small>
                                    </div> -->
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->

                        <div class="row">
                            <!-- PAGINATION START -->
                            <div class="col-12 mt-4">
                                <ul class="pagination justify-content-center mb-0">
                                    <li class="page-item"><a class="page-link" href="javascript:void(0)" aria-label="Previous">Назад</a></li>
                                    <li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                                    <li class="page-item"><a class="page-link" href="javascript:void(0)" aria-label="Next">Вперед</a></li>
                                </ul>
                            </div><!--end col-->
                            <!-- PAGINATION END -->
                        </div><!--end row-->
                    </div>
                </div><!--end container-->

                <!-- Footer Start -->
                <footer class="bg-white shadow py-3">
                    <div class="container-fluid">
                        
                    </div><!--end container-->
                </footer><!--end footer-->
                <!-- End -->
            </main>
            <!--End page-content" -->
        </div>
        <!-- page-wrapper -->

        <!-- Start Modal -->
        <div class="modal fade" id="newblogadd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header border-bottom p-3">
                        <h5 class="modal-title" id="exampleModalLabel">Добавить блог</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body p-3 pt-4">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="d-grid">
                                    <p class="text-muted">Загрузить изображение</p>
                                    <div class="preview-box d-block justify-content-center rounded shadow overflow-hidden bg-light p-1"></div>
                                    <input type="file" id="input-file" name="input-file" accept="image/*" onchange={handleChange()} hidden />
                                    <label class="btn-upload btn btn-primary mt-4" for="input-file">Загрузить</label>
                                </div>
                            </div><!--end col-->

                            <div class="col-md-8 mt-4 mt-sm-0">
                                <div class="ms-md-4">
                                    <form>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Заголовок <span class="text-danger">*</span></label>
                                                    <input name="name" id="name" type="text" class="form-control" placeholder="Заголовок :">
                                                </div>
                                            </div><!--end col-->
    
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label"> Дата : </label>
                                                    <input name="date" type="date" class="form-control" id="date" value="10 май 2022">
                                                </div>
                                            </div><!--end col-->
    
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label"> Время прочтения : </label>
                                                    <input name="time" type="text" class="form-control" id="time" value="5 минут">
                                                </div>
                                            </div><!--end col-->
    
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Теги</label>
                                                    <select class="form-control">
                                                        <option value="BU">Бизнес</option>
                                                        <option value="AG">Продажи</option>
                                                        <option value="FA">Акции</option>
                                                        <option value="SE">Финансы</option>
                                                        <option value="FI">Маркетинг</option>
                                                    </select>
                                                </div>
                                            </div><!--end col-->
    
                                            <div class="col-lg-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Описание <span class="text-danger">*</span></label>
                                                    <textarea name="comments" id="comments" rows="4" class="form-control" placeholder="Напишите описание :"></textarea>
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


        <div class="modal fade" id="newblogadd2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header border-bottom p-3">
                        <h5 class="modal-title" id="exampleModalLabel">Добавить блог</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body p-3 pt-4">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="d-grid">
                                    <p class="text-muted">Загрузить</p>
                                    <div class="preview-box d-block justify-content-center rounded shadow overflow-hidden bg-light p-1"></div>
                                    <input type="file" id="input-file" name="input-file" accept="image/*" onchange={handleChange()} hidden />
                                    <label class="btn-upload btn btn-primary mt-4" for="input-file">Загрузить</label>
                                </div>
                            </div><!--end col-->

                            <div class="col-md-8 mt-4 mt-sm-0">
                                <div class="ms-md-4">
                                    <form>
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Заголовок <span class="text-danger">*</span></label>
                                                    <input name="name" id="name" type="text" class="form-control" placeholder="Заголовок :">
                                                </div>
                                            </div><!--end col-->
    
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label"> Дата : </label>
                                                    <input name="date" type="text" class="form-control" id="date" value="10 май 2022">
                                                </div>
                                            </div><!--end col-->
    
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label"> Время прочтения : </label>
                                                    <input name="time" type="text" class="form-control" id="time" value="5 минут">
                                                </div>
                                            </div><!--end col-->
    
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Теги</label>
                                                    <select class="form-control">
                                                        <option value="BU">Бизнес</option>
                                                        <option value="AG">Продажи</option>
                                                        <option value="FA">Акции</option>
                                                        <option value="SE">Финансы</option>
                                                        <option value="FI">Маркетинг</option>
                                                    </select>
                                                </div>
                                            </div><!--end col-->
    
                                            <div class="col-lg-12">
                                                <div class="mb-3">
                                                    <label class="form-label">Описание <span class="text-danger">*</span></label>
                                                    <textarea name="comments" id="comments" rows="4" class="form-control" placeholder="Напишите описание :"></textarea>
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
        <!-- Main Js -->
        <script src="assets/js/plugins.init.js"></script>
        <script src="assets/js/app.js"></script>
        <script>
            const handleChange = () => {
            const fileUploader = document.querySelector('#input-file');
                const getFile = fileUploader.files
                if (getFile.length !== 0) {
                    const uploadedFile = getFile[0];
                    readFile(uploadedFile);
                }
            }

            const readFile = (uploadedFile) => {
                if (uploadedFile) {
                    const reader = new FileReader();
                    reader.onload = () => {
                    const parent = document.querySelector('.preview-box');
                    parent.innerHTML = `<img class="preview-content" src=${reader.result} />`;
                    };
                    
                    reader.readAsDataURL(uploadedFile);
                }
            };
        </script>
    </body>

</html>