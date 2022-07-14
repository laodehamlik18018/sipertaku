    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h5 class="m-b-10">Ubah Data Informasi</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#!">Ubah Informasi</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <?php foreach ($informasi as $u) { ?>
                            <form method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>informasi/update">

                                <div class="form-group">
                                    <label for="username">Judul Informasi</label>
                                    <input type="hidden" class="form-control" name="id_informasi" value="<?php echo $u->id_informasi; ?>">
                                    <input type="text" class="form-control" name="judul_informasi" value="<?php echo $u->judul_informasi; ?>" aria-describedby="Masukkan Email and" placeholder="isi judul informasi">

                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Isi informasi</label>
                                    <textarea name="isi_informasi" class="form-control ckeditor"><?= htmlentities($u->isi_informasi); ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Foto</label>
                                    <input type="hidden" name="foto" value="<?php echo $u->foto ?>" />
                                    <div class="form-group col-md-6">
                                        <?php
                                        if (!empty($u->foto)) {
                                        ?>
                                            <img src="<?= base_url('./upload/informasi/' . $u->foto) ?>" width="150px" />
                                        <?php
                                        } else {
                                            echo "-";
                                        }
                                        ?>
                                    </div>
                                    <div class="custom-file">
                                        <input type="file" name="foto" value="<?php echo $u->foto; ?>" class="custom-file-input" id="inputGroupFile04">
                                        <label class="custom-file-label" for="inputGroupFile04">Pilih Foto</label>
                                    </div>
                                    <div class="input-group-append">
                                    </div>
                                </div>
                                <button type="submit" name="submit" class="btn  btn-primary">Ubah</button>
                    </div>
                    </form>
                <?php } ?>
                </div>
            </div>