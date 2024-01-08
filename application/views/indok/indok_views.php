<div class="content flex-row-fluid" id="kt_content">
    <!--begin::Row-->
    <div class="row gy-5 g-xl-8">
        <!--begin::Col-->
        <div class="col-xxl-12">
            <div class="card">
                <!--begin::Header-->
                <div class="card-header border-0 pt-5 pb-3">
                    <!--begin::Card title-->
                    <h3 class="card-title fw-bolder text-gray-800 fs-2">Daftar Informasi Dokumen</h3>
                    <!--end::Card title-->
                    <!--begin::Button-->
                    <a href="<?php echo site_url('Indok/tambahIndok'); ?>" class="btn btn-success btn-sm my-2" tooltip="Tambah Menu">Tambah Dokumen</a>
                    <!--end::Button-->
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body pt-0">
                    <div class="table-responsive">
                        <table id="kt_datatable_example_indok" class="table table-striped table-row-bordered table-rounded table-striped table-hover border gy-5 gs-7">
                            <thead class="fw-bold fs-6 text-gray-800">
                                <tr>
                                    <th class="min-w-50px">No</th>
                                    <th class="min-w-100px">Judul</th>
                                    <th class="min-w-250px">Isi</th>
                                    <th class="min-w-350px">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($indok as $list) { ?>
                                    <tr>
                                        <td><?php echo $list['no']; ?></td>
                                        <td><?php echo $list['judul']; ?></a></td>
                                        <td><?php echo $list['isi']; ?></a></td>
                                        <td>
                                            <a href="<?php echo base_url() ?>Indok/editIndok/<?php echo $list['id_indok'] ?>" class="btn btn-primary btn-sm">EDIT</a>
                                            <a href="<?php echo base_url() ?>Indok/deleteIndok/<?php echo $list['id_indok'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are You Sure Want to Delete This Data?')">DELETE</a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(function() {
        $("#kt_datatable_example_indok").DataTable({});
    });
</script>