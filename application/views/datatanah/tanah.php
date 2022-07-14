    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h5 class="m-b-10">Data Tanah/h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#!">Data Tanah</a></li>
                            </ul>
                        </div>
                    </div>
                    <a href="<?php echo base_url('datatanah/tambah_tanah'); ?>">
                        <div class="col card-header text-right">
                            <button type="button" class="btn  btn-primary">Tambah Data</button>
                        </div>
                    </a>
                    <div class="col-md-6">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Masukkan Kata Kunci" aria-label="Recipient's username" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn  btn-primary" type="button">Cari Data</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- [ breadcrumb ] end -->
            <!-- [ Main Content ] start -->
            <div class="row">
                <!-- table card-1 start -->
                <div class="col-md-12 col-xl-6">
                    <!-- widget primary card start -->
                    <div class="card flat-card widget-primary-card">
                        <div class="row-table">
                            <div class="col-sm-3 card-body">
                                <i class="feather icon-star-on"></i>
                            </div>
                            <a href="<?php echo base_url('datatanah/bersertifikat'); ?>">
                                <div class="col-sm-12">
                                    <h4></h4>
                                    <h6>Data Tanah Bersertifikat</h6>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- widget primary card end -->
                </div>
                <!-- table card-1 end -->
                <!-- table card-2 start -->
                <div class="col-md-12 col-xl-6">
                    <!-- widget-success-card start -->
                    <div class="card flat-card widget-purple-card">
                        <div class="row-table">
                            <div class="col-sm-3 card-body">
                                <i class="fas fa-trophy"></i>
                            </div>
                            <a href=" <?php echo base_url('datatanah/takbersertifikat'); ?>">
                                <div class="col-sm-12">
                                    <h4></h4>
                                    <h6>Data Tanah Tidak Bersertifikat</h6>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- widget-success-card end -->
                </div>
                <!-- table card-2 end -->
                <!-- table card-3 start -->
                <div class="col-md-12 col-xl-6">
                    <!-- widget-success-card start -->
                    <div class="card flat-card widget-purple-card">
                        <div class="row-table">
                            <div class="col-sm-3 card-body">
                                <i class="fas fa-trophy"></i>
                            </div>
                            <a href="<?php echo base_url('datatanah/sengketa'); ?>">
                                <div class="col-sm-12">
                                    <h4></h4>
                                    <h6>Data Tanah Bersengketa</h6>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- widget-success-card end -->
                </div>
                <!-- table card-3 end -->
                <!-- table card-4 start -->
                <div class="col-md-12 col-xl-6">
                    <!-- widget-success-card start -->
                    <div class="card flat-card widget-purple-card">
                        <div class="row-table">
                            <div class="col-sm-3 card-body">
                                <i class="fas fa-trophy"></i>
                            </div>
                            <a href=c>
                                <div class="col-sm-12">
                                    <h4></h4>
                                    <h6>Data Tanah Tidak Bersengketa</h6>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!-- widget-success-card end -->
                </div>
                <!-- table card-4 end -->
            </div>
            <!-- [ Main Content ] end -->