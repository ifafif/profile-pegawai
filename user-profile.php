<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sistem Informasi Kepegawaian</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">


  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


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

  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="#" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block span-custom">Sistem Informasi Pegawai</span>
      </a>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="nama" id="nama" placeholder="Cari Data Pegawai" title="Cari Data Pegawai">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

  </header><!-- End Header -->


  <main id="main" class="main">

    <section class="section profile card-responsive">
      <div class="row">
        <div class="col-xl-4">

          <div class="card card-responsive ">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

              <img src="assets/img/afif.jpg"  class="rounded-circle" style="border-radius: 7%!important; max-width: 175px; max-height: 175px;">
              <h2 class="tulisan-senter">Muhammad Afif Aminulyo, S.Kom </h2>
              <h3>Yuana Wira TU (III/a)</h3>
            

              <!-- List group with custom content -->
              <!-- <ol class="list-group list-group-numbered"> -->
                <li class="list-group-item d-flex justify-content-between align-items-start text-center jabatan-custom">
                  <div class="">
                    <div class="fw-bold">Kepala Kejaksaan Negeri Bengkayang</div>
                    &nbsp; Eselon : III a
                  </div>
                </li>
              <!-- </ol>End with custom content -->


              <!-- <div class="biodata-custom">
                <span class="badge bg-primary badge-custom">
                  <strong><i class="bi bi-diagram-2"></i>&nbsp; Eselon</strong> : III a
                </span>

              </div> -->
              <span class="badge bg-info badge-custom-dua">
                <strong>Masa Kerja Jabatan Terakhir : </strong>
                1 Tahun 2 Bulan
              </span>

              <div class="social-links mt-2">
                <!-- <a href="#" class="twitter"><i class="bi bi-person-badge"></i></a><b>Eselon </b> : III a<br><hr class="dropdown-divider"> -->
                <!-- <a href="#" class="twitter"><i class="bi bi-person-badge"></i></a><b>Masa Kerja Jabatan Terakhir</b> : 19960224 202012 1 009<br><hr class="dropdown-divider"> -->
                <hr class="dropdown-divider">
                <a href="#" class="twitter"><i class="bi bi-person-badge"></i></a><b>NIP</b> : 19960224 202012 1 009<br><hr class="dropdown-divider">
                <a href="#" class="facebook"><i class="bi bi-person-badge-fill"></i></a><b>NRP</b> : 621961319<br><hr class="cutom-garis">
                <a href="#" class="facebook"><i class="bi bi-calendar3"></i></a><b>TTL  </b> : Mataram, 24 Februari 1996<br><hr class="dropdown-divider">
                <a href="#" class="facebook"><i class="bi bi-person-square"></i></a><b>Usia  </b> : 26 Tahun<br><hr class="dropdown-divider">
                <!-- <a href="#" class="facebook"><i class="bi bi-calendar2-check"></i></a><b>Masa Kerja Jabatan Terakhir</b>:<br>&emsp;&ensp;  1 Tahun 2 Bulan<br><hr class="dropdown-divider"> -->
              </div>
            </div>
          </div>

        </div>

        <div class="col-xl-8">


          <div class="card">
            <div class="card-body pt-3">
              <!-- Bordered Tabs -->
              <ul class="nav nav-tabs nav-tabs-bordered">

                <li class="nav-item">
                  <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-profile">Profile</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Pendidikan dan Assessment</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">Kinerja</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-perkara">Penanganan Perkara</button>
                </li>

                <li class="nav-item">
                  <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Data Lainya</button>
                </li>



              </ul>
              <div class="tab-content pt-2">
                <div class="tab-pane fade show active profile-profile" id="profile-profile">
                 <!-- Default Accordion -->
                 <div class="accordion" id="accordionExample">
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        <i class="bi bi-person-circle"></i>  <strong>&nbspProfile </strong>
                      </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                      <!-- <h5 class="card-title">Profile Details</h5> -->

                      <div class="row">
                        <div class="col-lg-3 col-md-4 label "><i class="bi bi-gender-ambiguous "></i>&nbsp; <strong> Jenis Kelamin :</strong></div>
                        <div class="col-lg-9 col-md-8"> Laki-laki</div>
                      </div>

                      <div class="row">
                        <div class="col-lg-3 col-md-4 label"><i class="bi bi-envelope "></i>&nbsp <strong>Email Dinas : </strong></div>
                        <div class="col-lg-9 col-md-8"> muhammad.afif.aminulyo@kejaksaan.go.id</div>
                      </div>

                      <div class="row">
                        <div class="col-lg-3 col-md-4 label"><i class="bi bi-card-heading"></i>&nbsp <strong>No. Karpeg :</strong></div>
                        <div class="col-lg-9 col-md-8"> -</div>
                      </div>

                      <div class="row">
                        <div class="col-lg-3 col-md-4 label"><i class="bi bi-gem "></i>&nbsp <strong>Status Pernikahan :</strong></div>
                        <div class="col-lg-9 col-md-8"> Belum Menikah</div>
                      </div>
                      <hr class="dropdown-divider">
                      <div class="row">
                        <div class="col-lg-12 col-md-12 label"><h5 style="font-size: 17px"><strong><i class="bi bi-geo "></i>&nbsp Alamat Pegawai </strong></h5></div>
                      </div>

                      <div class="row">
                        <div class="col-lg-3 col-md-4 label">Alamat KTP :</div>
                        <div class="col-lg-3 col-md-3">Mutiara Prima Raya A23</div>
                        <div class="col-lg-2 col-md-2 label">Kota KTP :</div>
                        <div class="col-lg-4 col-md-4">Sidoarjo - Jawa Timur</div>
                      </div>

                      <div class="row">
                        <div class="col-lg-3 col-md-4 label">Alamat Domisili :</div>
                        <div class="col-lg-3 col-md-3">Raya Sanggau Ledo Km4</div>
                        <div class="col-lg-2 col-md-2 label">Kota Domisili :</div>
                        <div class="col-lg-4 col-md-4">Bengkayang - Kalbar</div>
                      </div>
                      <hr class="dropdown-divider">

                      <div class="row">
                        <div class="col-lg-3 col-md-4 label">Status Pegawai :</div>
                        <div class="col-lg-9 col-md-8 "> <div class="badge bg-success">Aktif</div></div>
                      </div>

                      </div>
                    </div>
                  </div>
                  
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <i class="bi bi-journal-text"></i>  <strong>&nbsp Jabatan </strong>
                      </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <div class="card overflow-auto">
                          <div class="card-body">
                            <!-- Table with stripped rows -->
                            <table class="table datatable ">
                              <thead>
                                <tr>
                                  <th scope="col">Tgl SK</th>
                                  <th scope="col">Satker</th>
                                  <th scope="col">Jabatan</th>
                                  <th scope="col">Eselon</th>
                                  <th scope="col">Masa Jabatan</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>1 Desember 2020</td>
                                  <td>Kejaksaan Negeri Bengkayang</td>
                                  <td>Analis Sistem Informasi</td>
                                  <td></td>
                                  <td></td>
                                </tr>

                              </tbody>
                            </table>
                            <!-- End Table with stripped rows -->
              
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        <i class="bi bi-list-stars"></i>  <strong>&nbsp Pangkat/Golongan </strong>
                      </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                      <div class="accordion-body">

                        <!-- Top Selling -->
                        <div class="col-12">
                          <div class="card top-selling overflow-auto">

                            <div class="card-body pb-0">
                              <table class="table table-borderless">
                                <thead>
                                  <tr>
                                    <th scope="col">No.SK</th>
                                    <th scope="col">Golongan</th>
                                    <th scope="col">Pangkat</th>
                                    <th scope="col">TMT</th>
                                    <th scope="col">Ket</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>KEP-I-1351/C.4/01/2021</td>
                                    <td>III/a</td>
                                    <td>Yuana Wira TU</td>
                                    <td>01-12-2020</td>
                                    <td>CPNS</td>
                                  </tr>

                                </tbody>
                              </table>

                            </div>

                          </div>
                        </div><!-- End Top Selling -->


                      </div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        <i class="bi bi-people-fill"></i>  <strong>&nbsp Keluarga </strong>
                      </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                      <div class="accordion-body">
                        <div class="card">
                          <div class="card-body">
                            <h5 class="card-title">Jumlah Istri : 0 (Belum Menikah) | Anak : 0 </h5>
              
                            <!-- List group With badges -->
                            <ul class="list-group">
                              <li class="list-group-item d-flex justify-content-between align-items-center">
                                Nama Istri Pegawai
                                <span class="badge bg-secondary rounded-pill">Status : Istri</span>
                              </li>
                              <li class="list-group-item d-flex justify-content-between align-items-center">
                                Nama Anak Pertama
                                <span class="badge bg-secondary rounded-pill">Status : Anak Pertama</span>
                              </li>
                              <li class="list-group-item d-flex justify-content-between align-items-center">
                                Nama Anak Kedua
                                <span class="badge bg-secondary rounded-pill">Status : Anak Kedua</span>
                              </li>
                            </ul><!-- End List With badges -->
              
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div><!-- End Default Accordion Example -->


                </div>

                <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                  <!-- Accordion without outline borders -->
                  <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                          <i class="bi bi-mortarboard-fill"></i>&nbsp;&nbsp;  <strong>Pendidikan</strong>
                        </button>
                      </h2>
                      <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        
                        <div class="card">
                          <div class="card-body table-responsive">
                            <!-- Table with stripped rows -->
                            <table class="table table-striped ">
                              <thead>
                                <tr>
                                  <th scope="col">Jenjang</th>
                                  <th scope="col">Jurusan</th>
                                  <th scope="col">Lembaga</th>
                                  <th scope="col">Tempat</th>
                                  <th scope="col">Tahun Lulus</th>
                                  <th scope="col">Nilai</th>
                                  <th scope="col">No Iajazah</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>S1</td>
                                  <td>TEKNIK INFORMATIKA</td>
                                  <td>Universitas Diponegoro</td>
                                  <td>Semarang</td>
                                  <td>2018-07-23</td>
                                  <td>0.00</td>
                                  <td>2018-07-23</td>
                                </tr>

                              </tbody>
                            </table>
                            <!-- End Table with stripped rows -->
              
                          </div>
                        </div>

                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                          <i class="bi bi-person-rolodex"></i>&nbsp;&nbsp; <strong>Diklat</strong> 
                        </button>
                      </h2>
                      <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        
                        <div class="card">
                          <div class="card-body table-responsive">
                            <!-- Table with stripped rows -->
                            <table class="table table-striped ">
                              <thead>
                                <tr>
                                  <th scope="col">Nama Pel.</th>
                                  <th scope="col">Lembaga</th>
                                  <th scope="col">Tempat</th>
                                  <th scope="col">Tahun Lulus</th>
                                  <th scope="col">Jenis</th>
                                  <th scope="col">Nilai</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>Pelatihan IT Essesial</td>
                                  <td>Badiklat Kejaksaan</td>
                                  <td>Jakarta</td>
                                  <td>2021</td>
                                  <td>Latihan</td>
                                  <td>0.00</td>
                                </tr>

                              </tbody>
                            </table>
                            <!-- End Table with stripped rows -->
          
                          </div>
                        </div>

                      </div>
                    </div>
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                          <i class="bi bi-ui-checks"></i>&nbsp;&nbsp; <strong>Assessment</strong> 
                        </button>
                      </h2>
                      <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                       
                        <div class="card">
                          <div class="card-body table-responsive">
                            <!-- Table with stripped rows -->
                            <table class="table table-striped">
                              <thead>
                                <tr>
                                  <th scope="col">Tgl Assessment</th>
                                  <th scope="col">Untuk Menduduki</th>
                                  <th scope="col">Rating</th>
                                  <th scope="col">Keterangan</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>07-12-2021</td>
                                  <td>Jabatan Esselon IV</td>
                                  <td>0</td>
                                  <td>-</td>

                                </tr>

                              </tbody>
                            </table>
                            <!-- End Table with stripped rows -->
          
                          </div>
                        </div>

                      </div>
                    </div>
                  </div><!-- End Accordion without outline borders -->
  

                </div>

                <div class="tab-pane fade pt-3" id="profile-settings">

                  <div class="accordion accordion-flush" id="faq-group-1">

                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button collapsed" data-bs-target="#faqsOne-1" type="button" data-bs-toggle="collapse">
                          <i class="bi bi-briefcase"></i>  <strong>&nbsp Kinerja </strong>
                        </button>
                      </h2>
                      <div id="faqsOne-1" class="accordion-collapse collapse" data-bs-parent="#faq-group-1">
                        <div class="accordion-body">
                          
                          <div class="card-body table-responsive  ">
                            <!-- Table with stripped rows -->
                            <table class="table datatable table-kinerja">
                              <thead>
                                <tr>
                                  <th scope="col">Satker</th>
                                  <th scope="col">Nama</th>
                                  <th scope="col">Deskripsi</th>
                                  <th scope="col">Sasaran</th>
                                  <th scope="col">Tanggal Kegiatan</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>Kejari Bengkayang</td>
                                  <td>Muhammad Afif Aminulyo, S.Kom</td>
                                  <td>Kinerja Bulan Januari</td>
                                  <td>-</td>
                                  <td>10-01-2022</td>
                                </tr>

                              </tbody>
                            </table>
                            <!-- End Table with stripped rows -->
              
                          </div>

                        </div>
                      </div>
                    </div>
    
                    <div class="accordion-item">
                      <!-- <h2 class="accordion-header">
                        <button class="accordion-button collapsed" data-bs-target="#faqsOne-2" type="button" data-bs-toggle="collapse">
                          <i class="bi bi-archive"></i>  <strong>&nbsp Penanganan Perkara </strong>
                        </button>
                      </h2> -->
                      <div id="faqsOne-2" class="accordion-collapse collapse" data-bs-parent="#faq-group-1">
                        <div class="accordion-body">
                          In minus quia impedit est quas deserunt deserunt et. Nulla non quo dolores minima fugiat aut saepe aut inventore. Qui nesciunt odio officia beatae iusto sed voluptatem possimus quas. Officia vitae sit voluptatem nostrum a.
                        </div>
                      </div>
                    </div>
    
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button collapsed" data-bs-target="#faqsOne-3" type="button" data-bs-toggle="collapse">
                          <i class="bi bi-award-fill"></i>  <strong>&nbsp Prestasi dan Penghargaan </strong>
                        </button>
                      </h2>
                      <div id="faqsOne-3" class="accordion-collapse collapse" data-bs-parent="#faq-group-1">
                        <div class="accordion-body">
                          
                          <div class="card">
                            <div class="card-body">
                
                              <!-- List group with Advanced Contents -->
                              <div class="list-group">
                                <a href="#" class="list-group-item list-group-item-action" aria-current="true">
                                  <div class="d-flex w-100 justify-content-between">
                                    <p class="mb-1"><strong>Perinkat II LATSAR Kelas VIII Gol III</strong></p>
                                    <small class="badge bg-success badge-padding  "> <i class="bi bi-calendar2 me-1"></i> Tanggal : 20-10-2021</small>
                                  </div>
                                  <p class="mb-1"><strong>Bidang</strong> : Pelatihan Dasar CPNS  </p>
                                  <small><strong>Uraian</strong> : Pelatihan Dasar CPNS Tahun 2021</small>
                                </a>

                              </div><!-- End List group Advanced Content -->
                
                            </div>
                          </div>

                        </div>
                      </div>
                    </div>
    
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button collapsed" data-bs-target="#faqsOne-4" type="button" data-bs-toggle="collapse">
                          <i class="bi bi-file-bar-graph"></i>  <strong>&nbsp Inovasi </strong>
                        </button>
                      </h2>
                      <div id="faqsOne-4" class="accordion-collapse collapse" data-bs-parent="#faq-group-1">
                        <div class="accordion-body">
                          
                          <div class="card">
                            <div class="card-body">
                
                              <!-- List group Numbered -->
                              <ol class="list-group list-group-numbered">
                                <li class="list-group-item">
                                  <strong>Bidang</strong> : IT 
                                  <br>
                                  Melakukan pembuatan dan perancangan aplikasi sistem di kejari bengkayang                          
                                </li>
                                <li class="list-group-item">
                                  <strong>Bidang</strong> : IT 
                                  <br>
                                  Melakukan pembuatan dan perancangan aplikasi sistem di kejari bengkayang                          
                                </li>
                              </ol><!-- End List group Numbered -->
                
                            </div>
                          </div>


                        </div>
                      </div>
                    </div>
    
                  </div>

                </div>

                <div class="tab-pane fade pt-3" id="profile-perkara">
 
                  <div class="card">
                    <div class="card-body table-responsive">
                      <h5 class="card-title">Pills Jenis Perkara</h5>
        
                      <!-- Pills Tabs -->
                      <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">PIDUM</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">PIDSUS</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">DATUN</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="pills-contact2-tab" data-bs-toggle="pill" data-bs-target="#pills-contact2" type="button" role="tab" aria-controls="pills-contact2" aria-selected="false">INTEL</button>
                        </li>
                      </ul>
                      <div class="tab-content pt-2" id="myTabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="home-tab">
                          
                          <div class="card-body">
                            <!-- Table with stripped rows -->
                            <table class="table datatable ">
                              <thead>
                                <tr>
                                  <th scope="col">Satker</th>
                                  <th scope="col">Tersangka</th>
                                  <th scope="col">No & Tgl SPDP</th>
                                  <th scope="col">Pidana</th>
                                  <th scope="col">Perkara</th>
                                  <th scope="col">Status</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>Kejari Bengkayang</td>
                                  <td>Muhammad Afif Aminulyo, S.Kom</td>
                                  <td>SPDP/17/IV/RES.1.12/2022/Reskrim (24 Februari 2022)</td>
                                  <td>Pasal. </td>
                                  <td>Pencurian</td>
                                  <td>Limpah PN</td>
                                </tr>
                              </tbody>
                            </table>
                            <!-- End Table with stripped rows -->
              
                          </div>

                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="profile-tab">
                          <div class="card-body">
                            <!-- Table with stripped rows -->
                            <table class="table datatable ">
                              <thead>
                                <tr>
                                  <th scope="col">Satker</th>
                                  <th scope="col">Tersangka</th>
                                  <th scope="col">No & Tgl SPDP</th>
                                  <th scope="col">Pidana</th>
                                  <th scope="col">Perkara</th>
                                  <th scope="col">Status</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>Kejari Bengkayang</td>
                                  <td>Muhammad Afif Aminulyo, S.Kom</td>
                                  <td>SPDP/17/IV/RES.1.12/2022/Reskrim (24 Februari 2022)</td>
                                  <td>Pasal. </td>
                                  <td>Pencurian</td>
                                  <td>Limpah PN</td>
                                </tr>
                              </tbody>
                            </table>
                            <!-- End Table with stripped rows -->
              
                          </div>
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="contact-tab">
                          <div class="card-body">
                            <!-- Table with stripped rows -->
                            <table class="table datatable ">
                              <thead>
                                <tr>
                                  <th scope="col">Satker</th>
                                  <th scope="col">Tersangka</th>
                                  <th scope="col">No & Tgl SPDP</th>
                                  <th scope="col">Pidana</th>
                                  <th scope="col">Perkara</th>
                                  <th scope="col">Status</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>Kejari Bengkayang</td>
                                  <td>Muhammad Afif Aminulyo, S.Kom</td>
                                  <td>SPDP/17/IV/RES.1.12/2022/Reskrim (24 Februari 2022)</td>
                                  <td>Pasal. </td>
                                  <td>Pencurian</td>
                                  <td>Limpah PN</td>
                                </tr>
                              </tbody>
                            </table>
                            <!-- End Table with stripped rows -->
              
                          </div>
                        </div>
                        <div class="tab-pane fade" id="pills-contact2" role="tabpanel" aria-labelledby="contact-tab">
                          <div class="card-body">
                            <!-- Table with stripped rows -->
                            <table class="table datatable ">
                              <thead>
                                <tr>
                                  <th scope="col">Satker</th>
                                  <th scope="col">Tersangka</th>
                                  <th scope="col">No & Tgl SPDP</th>
                                  <th scope="col">Pidana</th>
                                  <th scope="col">Perkara</th>
                                  <th scope="col">Status</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>Kejari Bengkayang</td>
                                  <td>Muhammad Afif Aminulyo, S.Kom</td>
                                  <td>SPDP/17/IV/RES.1.12/2022/Reskrim (24 Februari 2022)</td>
                                  <td>Pasal. </td>
                                  <td>Pencurian</td>
                                  <td>Limpah PN</td>
                                </tr>
                              </tbody>
                            </table>
                            <!-- End Table with stripped rows -->
              
                          </div>
                        </div>
                      </div><!-- End Pills Tabs -->
        
                    </div>
                  </div>

                </div>



                <div class="tab-pane fade pt-3" id="profile-change-password">

                  <div class="accordion accordion-flush" id="faq-group-3">

                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button collapsed" data-bs-target="#faqsThree-1" type="button" data-bs-toggle="collapse">
                          <i class="bi bi-file-earmark-medical"></i>  <strong>&nbsp Kesehatan </strong>
                        </button>
                      </h2>
                      <div id="faqsThree-1" class="accordion-collapse collapse" data-bs-parent="#faq-group-3">
                        <div class="accordion-body">

                          <div class="card">
                            <div class="card-body table-responsive">
                              <h5 class="card-title">Riwayat Pemeriksaan</h5>
                              <!-- Table with stripped rows -->
                              <table class="table table-striped">
                                <thead>
                                  <tr>
                                    <th scope="col">Lokasi</th>
                                    <th scope="col">Hasil Pemeriksaan</th>
                                    <th scope="col">Tgl Pemeriksaan</th>
                                    <th scope="col">Status</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <td>Jakarta</td>
                                    <td>Sehat</td>
                                    <td>21-10-2021</td>
                                    <td>-</td>
                                  </tr>
  
                                </tbody>
                              </table>
                              <!-- End Table with stripped rows -->
                
                            </div>
                          </div>

                        </div>
                      </div>
                    </div>
    
                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button collapsed" data-bs-target="#faqsThree-2" type="button" data-bs-toggle="collapse">
                          <i class="bi-card-heading"></i>  <strong>&nbsp LHKPN/LHKASN </strong>
                        </button>
                      </h2>
                      <div id="faqsThree-2" class="accordion-collapse collapse" data-bs-parent="#faq-group-3">
                        <div class="accordion-body">
                        <div class="card">
                          <div class="card-body">
                            <!-- Table with stripped rows -->
                            <table class="table table-striped">
                              <thead>
                                <tr>
                                  <th scope="col">Jenis Laporan</th>
                                  <th scope="col">Tahun</th>
                                  <th scope="col">Nilai</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>LHKASN</td>
                                  <td>2021</td>
                                  <td>-</td>
                                </tr>

                              </tbody>
                            </table>
                            <!-- End Table with stripped rows -->
              
                          </div>
                        </div>

                        </div>
                      </div>
                    </div>

                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button collapsed" data-bs-target="#faqsThree-3" type="button" data-bs-toggle="collapse">
                          <i class="bi bi-box-seam"></i>  <strong>&nbsp Dosir </strong>
                        </button>
                      </h2>
                      <div id="faqsThree-3" class="accordion-collapse collapse" data-bs-parent="#faq-group-3">
                        <div class="accordion-body">
                        <div class="card">
                          <div class="card-body">
                            <!-- Table with stripped rows -->
                            <table class="table table-striped">
                              <thead>
                                <tr>

                                  <th scope="col">Tipe Map</th>
                                  <th scope="col">Keterangan</th>
                                  <th scope="col">Aksi</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>Map 1</td>
                                  <td>Dokumen terkait Pengangkatan Pegawai</td>
                                  <td><button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalDialogScrollable"><i class="bi bi-folder"></i> Lihat Dosir</button></td>
                                </tr>

                                <tr>
                                  <td>Map 2</td>
                                  <td>Dokumen terkait Kepangkatan</td>
                                  <td><button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalDialogScrollable2"><i class="bi bi-folder"></i> Lihat Dosir</button></td>
                                </tr>

                                <tr>
                                  <td>Map 3</td>
                                  <td>Dokumen terkait Kenaikan Gaji Berkala</td>
                                  <td><button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalDialogScrollable3"><i class="bi bi-folder"></i> Lihat Dosir</button></td>
                                </tr>
                                <tr>
                                  <td>Map 4</td>
                                  <td>Dokumen terkait Mutasi Pegawai</td>
                                  <td><button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalDialogScrollable4"><i class="bi bi-folder"></i> Lihat Dosir</button></td>
                                </tr>
                                <tr>
                                  <td>Map 5</td>
                                  <td>Dokumen terkait Penilaian Pegawai</td>
                                  <td><button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalDialogScrollable5"><i class="bi bi-folder"></i> Lihat Dosir</button></td>
                                </tr>
                                <tr>
                                  <td>Map 6</td>
                                  <td>Dokumen lainnya seperti Surat Tugas</td>
                                  <td><button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalDialogScrollable6"><i class="bi bi-folder"></i> Lihat Dosir</button></td>
                                </tr>
                                <tr>
                                  <td>Map 7</td>
                                  <td>Dokumen terkait CPNS</td>
                                  <td><button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#modalDialogScrollable7"><i class="bi bi-folder"></i> Lihat Dosir</button></td>
                                </tr>

                              </tbody>
                            </table>
                            <!-- End Table with stripped rows -->
              
                          </div>
                        </div>

                        </div>
                      </div>
                    </div>
    
                  </div>


                </div>

              </div><!-- End Bordered Tabs -->

            </div>
          </div>

        </div>
      </div>
    </section>

    

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
                                <!-- Map 1 -->
                                <div class="modal fade" id="modalDialogScrollable" tabindex="-1">
                                  <div class="modal-dialog modal-dialog-scrollable modal-lg">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <strong><p class="modal-title">Map 1 (Dokumen terkait Pengangkatan Pegawai)</p></strong>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                      </div>
                                      <div class="modal-body">
                                      <table class="table table-striped">
                                        <thead>
                                          <tr>
                                            <th scope="col">Jenis Dokumen</th>
                                            <th scope="col">Nama Dokumen</th>
                                            <th scope="col">Berkas</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>Ijazah Sekolah</td>
                                            <td>Ijazah S1</td>
                                            <td>-</td>
                                          </tr>
          
                                        </tbody>
                                      </table>
                                      <!-- End Table with stripped rows -->
                                              </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
                                      </div>
                                    </div>
                                  </div>
                                </div><!-- End Modal Dialog Scrollable-->

                                <!-- Map 2 -->
                                <div class="modal fade" id="modalDialogScrollable2" tabindex="-1">
                                  <div class="modal-dialog modal-dialog-scrollable modal-lg">
                                    <div class="modal-content">
                                      <div class="modal-header judul-modal-custom">
                                        <strong><p class="modal-title">Map 2 (Dokumen terkait Kepangkatan)</p></strong>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                      </div>
                                      <div class="modal-body">
                                      <table class="table table-striped">
                                        <thead>
                                          <tr>
                                            <th scope="col">Jenis Dokumen</th>
                                            <th scope="col">Nama Dokumen</th>
                                            <th scope="col">Berkas</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>Surat Keterangan</td>
                                            <td>Pangkat dan Gol</td>
                                            <td>-</td>
                                          </tr>
          
                                        </tbody>
                                      </table>
                                      <!-- End Table with stripped rows -->
                                              </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
                                      </div>
                                    </div>
                                  </div>
                                </div><!-- End Modal Dialog Scrollable-->

                                <!-- Map 3 -->
                                <div class="modal fade" id="modalDialogScrollable3" tabindex="-1">
                                  <div class="modal-dialog modal-dialog-scrollable modal-lg">
                                    <div class="modal-content">
                                      <div class="modal-header judul-modal-custom">
                                        <strong><p class="modal-title">Map 3 (Dokumen Terkait Kenaikan Gaji Berkala)</p></strong>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                      </div>
                                      <div class="modal-body">
                                      <table class="table table-striped">
                                        <thead>
                                          <tr>
                                            <th scope="col">Jenis Dokumen</th>
                                            <th scope="col">Nama Dokumen</th>
                                            <th scope="col">Berkas</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>Kenaikan Gaji Berkala</td>
                                            <td>Surat</td>
                                            <td>-</td>
                                          </tr>
          
                                        </tbody>
                                      </table>
                                      <!-- End Table with stripped rows -->
                                              </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
                                      </div>
                                    </div>
                                  </div>
                                </div><!-- End Modal Dialog Scrollable-->

                                 <!-- Map 4 -->
                                 <div class="modal fade" id="modalDialogScrollable4" tabindex="-1">
                                  <div class="modal-dialog modal-dialog-scrollable modal-lg">
                                    <div class="modal-content">
                                      <div class="modal-header judul-modal-custom">
                                        <strong><p class="modal-title">Map 4 (Dokumen terkait Mutasi Pegawai)</p></strong>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                      </div>
                                      <div class="modal-body">
                                      <table class="table table-striped">
                                        <thead>
                                          <tr>
                                            <th scope="col">Jenis Dokumen</th>
                                            <th scope="col">Nama Dokumen</th>
                                            <th scope="col">Berkas</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>SK Mutasi/Jabatan</td>
                                            <td>Surat Mutasi</td>
                                            <td>-</td>
                                          </tr>
          
                                        </tbody>
                                      </table>
                                      <!-- End Table with stripped rows -->
                                              </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
                                      </div>
                                    </div>
                                  </div>
                                </div><!-- End Modal Dialog Scrollable-->

                                 <!-- Map 5 -->
                                 <div class="modal fade" id="modalDialogScrollable5" tabindex="-1">
                                  <div class="modal-dialog modal-dialog-scrollable modal-lg">
                                    <div class="modal-content">
                                      <div class="modal-header judul-modal-custom">
                                        <strong><p class="modal-title">Map 5 (Dokumen terkait Penilaian Pegawai)</p></strong>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                      </div>
                                      <div class="modal-body">
                                      <table class="table table-striped">
                                        <thead>
                                          <tr>
                                            <th scope="col">Jenis Dokumen</th>
                                            <th scope="col">Nama Dokumen</th>
                                            <th scope="col">Berkas</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>DP3/SKP</td>
                                            <td>SKP 2021</td>
                                            <td>-</td>
                                          </tr>
          
                                        </tbody>
                                      </table>
                                      <!-- End Table with stripped rows -->
                                              </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
                                      </div>
                                    </div>
                                  </div>
                                </div><!-- End Modal Dialog Scrollable-->

                                 <!-- Map 6 -->
                                 <div class="modal fade" id="modalDialogScrollable6" tabindex="-1">
                                  <div class="modal-dialog modal-dialog-scrollable modal-lg">
                                    <div class="modal-content">
                                      <div class="modal-header judul-modal-custom">
                                        <strong><p class="modal-title">Map 6 (Dokumen lainnya seperti Surat Tugas dsb)</p></strong>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                      </div>
                                      <div class="modal-body">
                                      <table class="table table-striped">
                                        <thead>
                                          <tr>
                                            <th scope="col">Jenis Dokumen</th>
                                            <th scope="col">Nama Dokumen</th>
                                            <th scope="col">Berkas</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>Surat Perintah Tugas</td>
                                            <td>Sprint Prakom</td>
                                            <td>-</td>
                                          </tr>
          
                                        </tbody>
                                      </table>
                                      <!-- End Table with stripped rows -->
                                              </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
                                      </div>
                                    </div>
                                  </div>
                                </div><!-- End Modal Dialog Scrollable-->

                                 <!-- Map 7 -->
                                 <div class="modal fade" id="modalDialogScrollable7" tabindex="-1">
                                  <div class="modal-dialog modal-dialog-scrollable modal-lg">
                                    <div class="modal-content">
                                      <div class="modal-header judul-modal-custom">
                                        <strong><p class="modal-title">Map 7 (Dokumen terkait CPNS)</p></strong>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                      </div>
                                      <div class="modal-body">
                                      <table class="table table-striped">
                                        <thead>
                                          <tr>
                                            <th scope="col">Jenis Dokumen</th>
                                            <th scope="col">Nama Dokumen</th>
                                            <th scope="col">Berkas</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          <tr>
                                            <td>Usulan PNS</td>
                                            <td>Surat Usulan PNS</td>
                                            <td>-</td>
                                          </tr>
          
                                        </tbody>
                                      </table>
                                      <!-- End Table with stripped rows -->
                                              </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Tutup</button>
                                      </div>
                                    </div>
                                  </div>
                                </div><!-- End Modal Dialog Scrollable-->





</body>

</html>