    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h5 class="m-b-10">Data User</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#!">Data User</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <h3 class="mt-5">Tambah Data Tanah</h3>
                <hr>
                <form method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>datatanah/tambah_aksi">

                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Nama Pemilik</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="nama_pemilik" placeholder="Nama Pemilik">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-3 col-form-label">Luas Tanah</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="luas_tanah" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-3 col-form-label">Jenis Tanah</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="jenis_tanah" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-3 col-form-label">Status Hak Tanah</label>
                        <div class="col-sm-9">
                            <select class="form-control" id="exampleFormControlSelect1" name="status_hak_tanah">
                                <option>Sertifikat Hak Milik</option>
                                <option>Sertifikat Hak Milik (SHM)</option>
                                <option>Sertifikat Hak Guna Bangunan (HGB)</option>
                                <option>Sertifikat Hak Guna Usaha (HGU)</option>
                                <option>Sertifikat Hak Pakai (HP)</option>
                                <option>Sertifikat Hak Atas Satuan Rumah Susun (SHSRS))</option>
                                <option>Tanah Girik</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Status Sertifikat</label>
                        <div class="col-sm-9">
                            <select class="form-control" id="exampleFormControlSelect1" name="status_sertifikat">
                                <option>Bersertifikat</option>
                                <option>Tidak Bersertifikat</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-3 col-form-label">Status Sengketa</label>
                        <div class="col-sm-9">
                            <select class="form-control" id="exampleFormControlSelect1" name="status_sengketa">
                                <option>Bersengketa</option>
                                <option>Tidak Bersengketa</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-3 col-form-label">Koordinat A</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputPassword3" name="kordinat_a" placeholder="kordinat">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-3 col-form-label">Koordinat B</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputPassword3" name="kordinat_b" placeholder="kordinat">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="inputPassword3" class="col-sm-3 col-form-label">Keterangan</label>
                        <div class="col-sm-9">
                            <input type="textarea" class="form-control" id="inputPassword3" name="keterangan" placeholder="keterangan">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn  btn-primary" name="submit">Tambah Data</button>
                        </div>
                    </div>
                </form>
            </div>