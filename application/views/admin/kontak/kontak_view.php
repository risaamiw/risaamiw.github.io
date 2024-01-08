<div class="content flex-row-fluid" id="kt_content">
    <!--begin::Row-->
    <div class="row gy-5 g-xl-8">
        <!--begin::Col-->
        <div class="col-xxl-12">
            <!--begin::Table Widget 1-->
            <div class="card">
                <!--begin::Header-->
                <div class="card-header border-0 pt-5 pb-3">
                    <!--begin::Card title-->
                    <h3 class="card-title fw-bolder text-gray-800 fs-2">Daftar Informasi Kontak</h3>
                    <!--end::Card title-->
                    <!--begin::Button-->
                    <a href="<?php echo site_url('Info/tambahInfo'); ?>" class="btn btn-success btn-sm my-2" tooltip="Tambah Menu">Tambah Informasi</a>
                    <!--end::Button-->
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body pt-0">
                    <div class="table-responsive">
                        <table id="kt_datatable_example_info" class="table table-striped table-row-bordered table-rounded table-striped table-hover border gy-5 gs-7">
                            <thead class="fw-bold fs-6 text-gray-800">
                                <tr>
                                    <th scope="min-w-150px">icon</th>
                                    <th scope="min-w-150px">nama</th>
                                    <th scope="min-w-150px">status</th>
                                    <th scope="min-w-150px">jabatan</th>
                                    <th class="min-w-150px">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($kontak as $list) { ?>
                                    <tr>
                                        <td><?php echo $list['icon']; ?></td>
                                        <td><?php echo $list['nama']; ?></td>
                                        <td><?php echo $list['status']; ?></td>
                                        <td><?php echo $list['jabatan']; ?></td>
                                        <td>
                                            <a href="<?php echo base_url() ?>Info/editInfo/<?php echo $list['id_kontak'] ?>" class="btn btn-primary btn-sm">EDIT</a>
                                            <a href="<?php echo base_url() ?>Info/deleteInfo/<?php echo $list['id_kontak'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are You Sure Want to Delete This Data?')">DELETE</a>
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
        $("#kt_datatable_example_info").DataTable({});
    });
</script>