<div class="content flex-row-fluid" id="kt_content">
    <!--begin::Row-->
    <div class="row gy-5 g-xl-8">
        <!--begin::Col-->
        <div class="col-xxl-12">
            <div class="card">
                <!--begin::Header-->
                <div class="card-header border-0 pt-5 pb-3">
                    <!--begin::Card title-->
                    <h3 class="card-title fw-bolder text-gray-800 fs-2">Berita</h3>
                    <a href="<?php echo base_url() ?>Berita/tambahBuletin" class="btn btn-success btn-sm my-2">Tambah Berita</a>
                </div>
                <div class="card-body pt-0">
                    <div class="table-responsive">
                        <table id="berita" class="table table-striped table-row-bordered table-rounded table-striped table-hover border gy-5 gs-7">
                            <thead class="fw-bold fs-6 text-gray-800">
                                <tr>
                                    <th scope="col">Judul</th>
                                    <th scope="col">Ringkasan</th>
                                    <th scope="col">Image</th>
                                    <th class="min-w-250px">Aksi</th>
                                </tr>
                            </thead>
                            <?php foreach ($buletin as $list) { ?>
                                <tr>
                                    <td><?php echo $list['judul']; ?></a></td>
                                    <td><?php echo $list['ringkasan']; ?></a></td>
                                    <td><?php echo $list['image']; ?></a></td>
                                    <td>
                                        <a href="<?php echo base_url() ?>Berita/editBuletin/<?php echo $list['id_brt'] ?>" class="btn btn-primary btn-sm">EDIT</a>
                                        <a href="<?php echo base_url() ?>Berita/deleteBuletin/<?php echo $list['id_brt'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are You Sure Want to Delete This Data?')">DELETE</a>
                                    </td>
                                </tr>
                            <?php } ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(function() {
        $("#berita").DataTable({});
    });
</script>