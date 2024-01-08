<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita Page</title>

    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/ini-inti.png" />

    <style>
        .konten {
            width: auto;
            height: auto;
        }
    </style>

</head>

<body>
    <div class="konten">
        <h1>Manajemen berita</h1>
        <div align="right">
            <a href="<?php echo base_url() ?>admin/berita/tambah" class="tambah">Tambah berita</a>
        </div>
        <p>Daftar berita</p>

        <table width="100%" border="1px" cellspacing=" 1px" cellpadding="7px" class="myform">
            <tr>
                <th scope="col">Judul</th>
                <th scope="col">Isi</th>
                <th scope="col">Status</th>
                <th scope="col">Tanggal</th>
                <th scope="col">&nbsp;</th>
            </tr>
            <?php foreach ($berita as $list) { ?>
                <tr>
                    <td><?php echo $list['judul']; ?></a></td>
                    <td><?php echo $list['isi']; ?></a></td>
                    <td><?php echo $list['status_berita']; ?></td>
                    <td><?php echo $list['tanggal']; ?></td>
                    <td>
                        <a href="<?php echo base_url() ?>admin/berita/edit/<?php echo $list['id_berita'] ?>">EDIT</a> | <a href="<?php echo base_url() ?>admin/berita/delete/<?php echo $list['id_berita'] ?>">DELETE</a>
                    </td>
                </tr>
            <?php } ?>
        </table>

    </div>
</body>

</html>