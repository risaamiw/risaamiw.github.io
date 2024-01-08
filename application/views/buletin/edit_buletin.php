<div class="content flex-row-fluid" id="kt_content">
    <!--begin::Row-->
    <div class="row gy-5 g-xl-8">
        <div class="col-xxl-12">
            <div class="card">
                <!--begin::Header-->
                <div class="card-header border-0 pt-5 pb-3">
                    <!--begin::Card title-->
                    <h3 class="card-title fw-bolder text-gray-800 fs-2">Edit Buletin</h3>
                    <!--end::Card title-->
                </div>
                <form class="form-horizontal" name="form1" method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>dashboard/editBuletin/<?php echo $detail['id_brt'] ?>" class="myform">
                    <div class="card-body pt-0">
                        <div class="mb-3 row">
                            <label for="judul" class="col-sm-2 col-form-label">Judul berita : </label>
                            <div class="col-sm-10">
                                <input name="judul" type="text" class="form-control" id="judul" size="70" value="<?php echo $detail['judul']; ?>">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="ringkasan" class="col-sm-2 col-form-label">Ringkasan berita : </label>
                            <div class="col-sm-10">
                                <textarea name="ringkasan" class="form-control" id="ringkasan" cols="45" rows="5"><?php echo $detail['ringkasan']; ?></textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="ringkasan" class="col-sm-2 col-form-label">Picture : </label>
                            <div class="col-sm-10">
                                <img src="<?= base_url('assets/images/berita/') . $detail['image']; ?>" class="img-thumbnail">
                                <div class="costum-file">
                                    <input type="file" class="custom-file-input" id="image" name="image">
                                </div>
                            </div>

                        </div>
                    </div>
            </div>
            <div class="card-footer">
                <center>
                    <input type="submit" name="submit" id="submit" value="Simpan" class="btn btn-primary btn-sm">
                    <?php
                    $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
                    ?>
                    <a href="<?= $url ?>" class="btn btn-danger btn-sm">Kembali</a>
                </center>
            </div>
        </div>
        </form>
    </div>
    </body>

    </html>