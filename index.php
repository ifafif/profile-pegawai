<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sistem Informasi Pegawai</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>

  <main>

    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8  flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/logo.png" alt="">
                  <span class="d-none d-lg-block span-custom judul-haldep-custom">Sistem Informasi Pegawai</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4 ">Selamat Datang</h5>
                    <p class="text-center small">Silahkan inputkan <code>NIP/NRP/Nama</code> Pegawai</p>
                  </div>

                  <form class="row g-3 needs-validation" novalidate action="user-profile.php" method="POST">

                    <div class="col-8">
                    
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend"><i class="bi bi-search"></i></span>
                        <input type="text" name="nama" id="nama" class="form-control" placeholder="Silahkan input nama pegawai" required>
                        <div class="invalid-feedback">Inputan NIP/NRP/Nama harus diinputkan</div>
                      </div>
                    </div>
                    <div class="col-4">
                      <button class="btn btn-primary w-100 btn-custom" type="submit">Cari Data</button>
                    </div>
                  </form>

                </div>  
              </div>


            </div>
          </div>
        </div>

                          <div class="col-md-6 small tanggal-footer">
                            <?php
                                $tgl=date('d-m-Y');
                                $hari = date("l");
                                if($hari == "Sunday"){
                                    $hari = "Minggu";
                                }elseif($hari == "Monday"){
                                    $hari = "Senin";
                                }elseif ($hari == "Tuesday"){
                                    $hari = "Selasa";
                                }elseif ($hari == "Wednesday"){
                                    $hari = "Rabu";
                                }elseif($hari == "Thursday"){
                                    $hari = "Kamis";
                                }elseif ($hari == "Friday"){
                                    $hari = "Jumat";
                                }elseif ($hari == "Satuday"){
                                    $hari = "Sabtu";
                                }
                                echo "Hari Ini : <strong>".$hari."</strong>, Tanggal : <strong>".$tgl."</strong>";
                                ?>
                            </div>

      </section>

    </div>
  </main><!-- End #main -->


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

<!-- Memanggil jQuery.js -->
 <script src="assets/js/jquery-3.2.1.min.js"></script>

<!-- Memanggil Autocomplete.js -->
<script src="assets/js/jquery.autocomplete.min.js"></script>

<script type="text/javascript">
            $(document).ready(function() {

                // Selector input yang akan menampilkan autocomplete.
                $( "#nama" ).autocomplete({
                    serviceUrl: "autocomplete.php",   // Kode php untuk prosesing data.
                    dataType: "JSON",           // Tipe data JSON.
                    onSelect: function (suggestion) {
                        $( "#nama" ).val("" + suggestion.nama );
                    }
                });
            })
        </script>

</body>

</html>