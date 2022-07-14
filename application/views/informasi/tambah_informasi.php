    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h5 class="m-b-10">Tambah Data Informasi</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#!">Tambah Informasi</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <form method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>informasi/tambah_aksi">

                            <div class="form-group">
                                <label for="username">Judul Informasi</label>
                                <input type="text" class="form-control" name="judul_informasi" id="username" aria-describedby="Masukkan Email and" placeholder="isi judul informasi">

                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Isi informasi</label>
                                <textarea class="form-control" name="isi_informasi" id="exampleFormControlTextarea1" rows="5"></textarea>
                            </div>
                            <div class="input-group cust-file-button">
                                <div class="custom-file">
                                    <input type="file" name="foto" class="custom-file-input" id="inputGroupFile04">
                                    <label class="custom-file-label" for="inputGroupFile04">Pilih Foto</label>
                                </div>
                                <div class="input-group-append">
                                </div>
                            </div>
                            <button type="submit" name="submit" class="btn  btn-primary">Submit</button>
                    </div>
                    </form>
                </div>
            </div>