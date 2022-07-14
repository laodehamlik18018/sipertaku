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
            <!-- [ stiped-table ] start -->
            <div id="notifications"><?php echo $this->session->flashdata('msg'); ?></div>
            <div class="col card-header text-right">
                <a href="<?php echo base_url('datatanah/tambah_tanah'); ?>">

                    <button type=" button" class="btn  btn-primary">Tambah Data</button>
                </a>
            </div>
            <div class="col-md-6">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Masukkan Kata Kunci" aria-label="Recipient's username" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button class="btn  btn-primary" type="button">Cari Data</button>
                    </div>
                </div>
            </div>
            <div class="col-xl-12">
                <div class="card">
                    <br>
                    <div class="card-body table-border-style">
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <tr>
                                    <th>No</th>
                                    <th>Nama pemilik</th>
                                    <th>Luas Tanah</th>
                                    <th>Jenis Tanah</th>
                                    <th>Status Hak Tanah</th>
                                    <th>Status Sertifikat</th>
                                    <th>Status Sengketa</th>
                                    <th>koordinat A</th>
                                    <th>koordinat B</th>
                                    <th>Keterangan</th>
                                    <th>Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($data_tanah as $u) {
                                    ?>
                                        <tr>
                                            <td><?= $no++; ?></td>
                                            <td><?= $u['nama_pemilik']; ?></td>
                                            <td><?= $u['luas_tanah']; ?></td>
                                            <td><?= $u['jenis_tanah']; ?></td>
                                            <td><?= $u['status_hak_tanah']; ?></td>
                                            <td><?= $u['status_sertifikat']; ?></td>
                                            <td><?= $u['status_sengketa']; ?></td>
                                            <td><?= $u['kordinat_a']; ?></td>
                                            <td><?= $u['kordinat_b']; ?></td>
                                            <td><?= $u['keterangan']; ?></td>
                                            <td><a href="<?php echo base_url() . "datatanah/hapus/" . $u['id_tanah']; ?>" class="btn  btn-danger btn-sm">Hapus</a>
                                                <a href="<?php echo base_url() . "datatanah/edit_data_tanah/" . $u['id_tanah']; ?>" class="btn  btn-warning  btn-sm">ubah</a>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ stiped-table ] end -->