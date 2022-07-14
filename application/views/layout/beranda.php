<!-- [ Main Content ] start -->
<div class="pcoded-main-container">
    <div class="pcoded-content">
        <!-- [ breadcrumb ] start -->
        <div id="notifications"><?php echo $this->session->flashdata('msg'); ?></div>
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">Dashboard Analytics</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#!">Dashboard Analytics</a></li>
                        </ul>
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
                <div class="flat-card widget-purple-card">
                    <div class="row-table">
                        <div class="col-sm-3 card-body">
                            <i class="feather icon-map-pin "></i>
                        </div>
                        <a href="<?php echo base_url('datatanah/index'); ?>">
                            <div class="col-sm-12">
                                <h4></h4>
                                <h6>Data Tanah</h6>
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
                            <i class="fas fa-newspaper"></i>
                        </div>
                        <a href="<?php echo base_url('informasi/index'); ?>">
                            <div class="col-sm-12">
                                <h4></h4>
                                <h6>Informasi</h6>
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
                        <a href="<?php echo base_url('admin/tentang'); ?>">
                            <div class="col-sm-12">
                                <h4></h4>
                                <h6>Tentang</h6>
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
                            <i class="feather icon-users"></i>
                        </div>
                        <a href="user">
                            <div class="col-sm-12">
                                <h4></h4>
                                <h6>User</h6>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- widget-success-card end -->
            </div>
            <!-- table card-4 end -->
        </div>
        <!-- [ Main Content ] end -->