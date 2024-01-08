<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah page</title>

    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/ini-inti.png" />
    <style>
        body {
            background-color: #150544;
        }

        .konten {
            color: white;
        }
    </style>

</head>

<body>
    <div class="konten">
        <h1>Menambah berita</h1>
        <?php echo validation_errors(); ?>
        <form name="form1" method="post" action="<?php echo base_url() ?>admin/berita/tambah" class="myform">
            <p>
                <label for="judul">Judul berita</label>
                <input name="judul" type="text" id="judul" size="70">
            </p>
            <p>
                <label for="isi">Isi berita</label>
                <textarea name="isi" id="isi" cols="45" rows="5"></textarea>
            </p>
            <p>
                <label for="status_berita">Status berita</label>
                <select name="status_berita" id="status_berita">
                    <option value="Publish">Publikasikan</option>
                    <option value="Draft">Simpan sebagai draft</option>
                </select>
                <input name="id_user" type="hidden" id="id_user" value="1">
            </p>
            <p>
                <input type="submit" name="submit" id="submit" value="Submit">
                <input type="reset" name="submit2" id="submit2" value="Reset">
            </p>
        </form>
        <p>&nbsp;</p>
    </div>
</body>

</html>