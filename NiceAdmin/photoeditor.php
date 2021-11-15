<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Photo Editor</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <?php include('navbar.php') ?>
  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">
    <?php include('sidebar.php') ?>
  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <!-- <h1>If you want to quickly create a photo and post it on your social networks, try the smart picture generator.</h1> -->
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="./">Home</a></li>
          <li class="breadcrumb-item">Create</li>
          <li class="breadcrumb-item active">Photo Editor</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section" id="photo-editor">
      <div class="row">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Upload Photo</h5>
            <form action="" method="post">
              <div class="row">
                <div class="col-lg-8 mb-3">
                  <input class="form-control" type="file" id="formFile">
                </div>
                <div class="col-lg-4 text-center">
                  <button type="submit" class="btn btn-primary w-50">Add</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

      <div class="row ">
        <div class="card">
          <div class="row mb-3">
            <div class="col-md-4 mb-4 text-center">
              <h5 class="card-title">Uploaded Photo</h5>
              <div class="card align-items-center p-3">
                <img src="assets/img/product-2.jpg" class="img-fluid" alt="">
                <p class="card-text mt-3">Img Name</p>
              </div>
              <button type="submit" class="btn btn-danger mb-2">Delete</button>
              <button type="submit" class="btn btn-success mb-2">Replace</button>
            </div>

            <div class="col-md-8">
              <h5 class="card-title text-center">Post Planning</h5>
              <div class="card">
                <div class="card-body">

                  <!-- Bordered Tabs Justified -->
                  <ul class="nav nav-tabs nav-tabs-bordered d-flex" id="borderedTabJustified" role="tablist">
                    <li class="nav-item flex-fill" role="presentation">
                      <button class="nav-link w-100 active" id="home-tab" data-bs-toggle="tab" data-bs-target="#bordered-justified-home" type="button" role="tab" aria-controls="home" aria-selected="true"><span><i class="bi bi-pencil-square"></i> Add Information</span> </button>
                    </li>
                    <li class="nav-item flex-fill" role="presentation">
                      <button class="nav-link w-100" id="profile-tab" data-bs-toggle="tab" data-bs-target="#bordered-justified-profile" type="button" role="tab" aria-controls="profile" aria-selected="false"> <span><i class="bi bi-calendar"></i> Set Up Posting</span></button>
                    </li>
                  </ul>
                  <div class="tab-content pt-2" id="borderedTabJustifiedContent">
                    <div class="tab-pane fade show active" id="bordered-justified-home" role="tabpanel" aria-labelledby="home-tab">
                      <div class="row text-center">
                        <div class="col-md-6 col-12">
                          <h5 class="mt-2">Content</h5>
                        </div>
                        <div class="col-md-6 col-12">
                          <a href="" class="mx-2">CSV Import</a>
                          <a href="">Drafts</a>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                        <textarea name="" id="" class="form-control" placeholder="Comment"></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="bordered-justified-profile" role="tabpanel" aria-labelledby="profile-tab">
                      Nesciunt totam et. Consequuntur magnam aliquid eos nulla dolor iure eos quia. Accusantium distinctio omnis et atque fugiat. Itaque doloremque aliquid sint quasi quia distinctio similique. Voluptate nihil recusandae mollitia dolores. Ut laboriosam voluptatum dicta.
                    </div>
                  </div><!-- End Bordered Tabs Justified -->

                </div>
              </div>

              <!-- <h5 class="card-title text-center">Preview</h5>
                  <div class="card p-2">
                    <h6 class="ml-3">Preview in <i class="bi bi-facebook" style="color: blue; font-size: 25px;"></i></h6>
                    <div class="border p-2">
                      <div class="mx-1">
                        <div class="row mb-2">
                          <div class="col-md-10 col-9">
                            <img src="" class="img-fluid" style="height: 40px;" alt="Profile Pic">
                            <span>Name</span>
                          </div>
                          <div class="col-md-2 col-3 text-right">
                            <i class="bi bi-three-dots"></i>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <img src="assets/img/product-2.jpg" alt="Uploaded Img">
                      </div>
                      <div class="row my-2">
                        <a href="" style="pointer-events: none;">More</a>
                      </div>
                      <div class="row justify-content-center">
                        <div class="col-md-2 col-6">
                          <div class="d-flex align-items-center justify-content-center">
                            <img src="assets/img/Emoji_Icon_Surprised_with_teeth_1024x1024.png" class="img-fluid" alt="">
                            <span class="mx-2">567</span>
                          </div>
                        </div>
                        <div class="col-md-5 col-6 text-end">
                          <span>Comments: 320</span>
                        </div>
                        <div class="col-md-4 col-12 text-end">
                          <span>Shared: 1</span>
                        </div>
                      </div>
                      <hr>
                      <div class="row">
                        <img src="assets/img/1-removebg-preview.png" class="img-fluid" alt="">
                      </div>
                    </div>
                  </div> -->


            </div>
          </div>
          <div class="row mb-3">
            <div class="col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Forward</button>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="card">
          <h5 class="card-title text-center">You can use our photo library</h5>
          <div class="row">
            <div class="col-md-3 mb-3">
              <a href="">
                <div class="card p-2 align-items-center text-center">
                  <img src="assets/img/product-1.jpg" class="img-fluid" alt="">
                  <p class="card-text mt-2">Image Name</p>
                </div>
              </a>
            </div>
            <div class="col-md-3 mb-3">
              <a href="">
                <div class="card p-2 align-items-center text-center">
                  <img src="assets/img/product-1.jpg" class="img-fluid" alt="">
                  <p class="card-text mt-2">Image Name</p>
                </div>
              </a>
            </div>
            <div class="col-md-3 mb-3">
              <a href="">
                <div class="card p-2 align-items-center text-center">
                  <img src="assets/img/product-1.jpg" class="img-fluid" alt="">
                  <p class="card-text mt-2">Image Name</p>
                </div>
              </a>
            </div>
            <div class="col-md-3 mb-3">
              <a href="">
                <div class="card p-2 align-items-center text-center">
                  <img src="assets/img/product-1.jpg" class="img-fluid" alt="">
                  <p class="card-text mt-2">Image Name</p>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>