<div class="col-md-12">
    <!-- general form elements -->
    <div class="card card-primary ">
        <?php echo form_open() ?>
        <div class="card-header border-0 pt-5 pb-5 ">
        </div>
        <div class="row">
            <div class="col-5">
                <img class="img-fluid rounded" style="margin-left: 24%; margin-top:24px;" alt="Image" height="60%" width="60%" src=" <?php echo ($profile_foto != 'no_image.jpg') ? base_url('assets/media/profiles/') . $profile_foto : base_url('assets/media/avatars/blank.png'); ?>">
                <br><br>
                <div class="text-center mb-3" style="margin-left:25px; font-size:20px; margin-top:-10px;">
                    <b><?php echo $nama_lengkap ?></b>
                </div>
            </div>

            <div class="card-body pt-0 d-flex col-7 ">
                <div class="mb-3 row col-11">
                    <table class="mt-5 table-responsive" width="100%" ;>
                        <tr>
                            <td class="col-4"><label class="">Username </label></td>
                            <td class="col-1">:</td>
                            <td>
                                <input name="name" type="text" class="form-control ml-2" id="name" size="70" value="<?php echo $username ?>" readonly>
                            </td>
                        </tr>
                        <tr>
                            <td><label class="">Email </label></td>
                            <td>:</td>
                            <td>
                                <input name="email" type="text" class="form-control" id="email" size="70" value="<?php echo $email ?>" readonly>
                            </td>
                        </tr>
                        <tr>
                            <td><label class="">Jenis Kelamin</label></td>
                            <td>:</td>
                            <td>
                                <input name="gender" type="text" class="form-control" id="gender" size="70" value="<?php echo ($gender == 'P') ? 'Pria' : 'Wanita'; ?>" readonly>
                            </td>
                        </tr>
                        <tr>
                            <td><label class="">Tanggal Lahir </label></td>
                            <td>:</td>
                            <td>
                                <input name="tanggal_lahir" type="text" class="form-control" id="tanggal_lahir" size="70" value="<?php echo $tanggal_lahir ?>" readonly>
                            </td>
                        </tr>
                        <tr>
                            <td><label class="">Alamat </label></td>
                            <td>:</td>
                            <td>
                                <input name="alamat" type="text" class="form-control" id="alamat" value="<?php echo $alamat ?>" readonly>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <?php echo form_close() ?>
</div>
</div>