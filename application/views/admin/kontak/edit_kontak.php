<div class="content flex-row-fluid" id="kt_content">
    <!--begin::Row-->
    <div class="row gy-5 g-xl-8">
        <div class="col-xxl-12">
            <div class="card">
                <!--begin::Header-->
                <div class="card-header border-0 pt-5 pb-3">
                    <!--begin::Card title-->
                    <h3 class="card-title fw-bolder text-gray-800 fs-2">Form Kontak</h3>
                    <!--end::Card title-->
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <form class="form-horizontal" name="form1" method="post" action="<?php echo base_url(); ?>dashboard/editInfo/<?php echo $detail['id_kontak'] ?>" class="myform">
                    <div class="card-body pt-0">
                        <div class="mb-3 row">
                            <label for="icon" class="col-sm-2 col-form-label">Icon : </label>
                            <div class="col-sm-8">
                                <input name="icon" type="text" class="form-control" id="icon" size="70" value="<?php echo $detail['icon'] ?>">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="nama" class="col-sm-2 col-form-label">Nama : </label>
                            <div class="col-sm-8">
                                <input name="nama" type="text" class="form-control" id="nama" size="70" value="<?php echo $detail['nama'] ?>">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="status" class="col-sm-2 col-form-label">Status : </label>
                            <div class="col-sm-8">
                                <input name="status" type="text" class="form-control" id="status" size="70" value="<?php echo $detail['status'] ?>">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="jabatan" class="col-sm-2 col-form-label">Jabatan : </label>
                            <div class="col-sm-8">
                                <input name="jabatan" type="text" class="form-control" id="jabatan" size="70" value="<?php echo $detail['jabatan'] ?>">
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