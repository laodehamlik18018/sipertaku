    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h5 class="m-b-10">Tambah Data User</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#!">Ubah User</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <hr>
                <?php foreach ($user as $u) { ?>

                    <form method="post" enctype="multipart/form-data" action="<?php echo base_url() . 'datauser/update'; ?>">
                        <!-- <form method="post" enctype="multipart/form-data" action="<?= base_url('user/update/' . $user->$id); ?>"> -->

                        <div class="row">

                            <div class="col-md-6">

                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" name="username" value="<?php echo $u->username; ?>" id="username" aria-describedby="Masukkan Email and" placeholder="Enter username">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" name="password" value="<?php echo $u->password; ?>" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                </div>
                                <button type="submit" name="update" class="btn  btn-primary" value="update">Ubah</button>

                            </div>
                            <div class="col-md-6">

                                <div class="form-group">
                                    <label>Nama User</label>
                                    <input type="hidden" name="id" class="form-control" placeholder="Nama Lengkap" value="<?php echo $u->id; ?>">
                                    <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" value="<?php echo $u->nama; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="jabatan">Jabatan</label>
                                    <select class="form-control" name="jabatan" value="<?php echo $u->jabatan ?>">
                                        <option>kepala kantor</option>
                                        <option>sekretaris</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Foto</label>
                                    <input type="hidden" name="foto" value="<?php echo $u->foto ?>" />
                                    <div class="form-group col-md-6">
                                        <?php
                                        if (!empty($u->foto)) {
                                        ?>
                                            <img src="<?= base_url('./upload/' . $u->foto) ?>" width="150px" />
                                        <?php
                                        } else {
                                            echo "-";
                                        }
                                        ?>
                                    </div>
                                    <div><input type="file" name="foto" value="<?php echo $u->jabatan ?>"></div>
                                    <!-- <div class="input-group cust-file-button">
                                    <div class="custom-file">
                                        <input type="file" name="foto" class="custom-file-input" id="inputGroupFile04">
                                        <label class="custom-file-label" for="inputGroupFile04">Pilih Foto</label>
                                    </div>
                                    <div class="input-group-append">
                                    </div>
                                </div> -->
                                </div>
                            </div>
                    </form>
                <?php } ?>
            </div>
        </div>