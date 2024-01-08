<div class="content flex-row-fluid" id="kt_content">
    <!--begin::Row-->
    <div class="row gy-5 g-xl-8">
        <div class="col-xxl-12">
            <div class="card">
                <!--begin::Header-->
                <div class="card-header border-0 pt-5 pb-3">
                    <!--begin::Card title-->
                    <h3 class="card-title fw-bolder text-gray-800 fs-2">Form Dokpen</h3>
                    <!--end::Card title-->
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <form class="form-horizontal" name="form1" method="post" action="<?php echo base_url(); ?>dashboard/editDokpen/<?php echo $detail['id_dokpen'] ?>" class="myform">
                    <div class="card-body pt-0">
                        <div class="mb-3 row">
                            <label for="no" class="col-sm-2 col-form-label">Judul : </label>
                            <div class="col-sm-10">
                                <input name="judul" type="text" class="form-control" id="judul" size="70" value="<?php echo $detail['judul'] ?>">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="no" class="col-sm-2 col-form-label">Isi : </label>
                            <div class="col-sm-10">
                                <input name="isi" type="file" class="form-control" id="isi" cols="45" rows="5"><?php echo base_url('assets/dokpen/') . $detail['isi'] ?>
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
        </div>
    </div>
</div>
</script>