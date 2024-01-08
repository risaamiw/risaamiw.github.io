<div class="content flex-row-fluid" id="kt_content">
    <div class="row gy-5 g-xl-8">
        <div class="col-xxl-12">
            <div class="card">
                <!--begin::Header-->
                <div class="card-header border-0 pt-5 pb-3">
                    <!--begin::Card title-->
                    <h3 class="card-title fw-bolder text-gray-800 fs-2">Buletin</h3>
                    <!--end::Card title-->
                </div>
                <?php echo validation_errors(); ?>
                <form class="form-horizontal" name="form1" enctype="multipart/form-data" method="post" action="<?php echo base_url() ?>dashboard/tambahBuletin" class="myform">
                    <div class="card-body pt-0">
                        <div class="mb-3 row">
                            <label for="judul" class="col-sm-2 col-form-label">Judul Berita : </label>
                            <div class="col-sm-8">
                                <input name="judul" type="text" class="form-control" id="judul" size="70">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="ringkasan" class="col-sm-2 col-form-label">Ringkasan Berita : </label>
                            <div class="col-sm-8">
                                <textarea name="ringkasan" class="form-control" id="ringkasan" cols="45" rows="5"></textarea>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="image" class="col-sm-2 col-form-label">Image : </label>
                            <div class="col-sm-8">
                                <input type="file" name="image" id="image" accept="image/png, image/jpeg, image/jpg, image/gif" class="form-control">
                            </div>
                        </div>
                        <center>
                            <div>
                                <input type="submit" name="submit" id="submit" value="Simpan" class="btn btn-primary btn-sm">
                                <?php
                                $url = htmlspecialchars($_SERVER['HTTP_REFERER']);
                                ?>
                                <a href="<?= $url ?>" class="btn btn-danger btn-sm">Kembali</a>
                            </div>
                        </center>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>

</html>