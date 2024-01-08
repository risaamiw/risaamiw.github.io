<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update page</title>

    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/ini-inti.png" />
</head>

<body>
    <div class="konten">
        <h1>Mengubah berita</h1>
        <form name="form1" method="post" action="<?php echo base_url(); ?>admin/berita/edit/<?php echo $detail['id_berita'] ?>" class="myform">
            <p><label for="judul">Judul berita</label>
                <input name="judul" type="text" id="judul" size="70" value="<?php echo $detail['judul'] ?>">
            </p>
            <p><label for="isi">Isi berita</label>
                <textarea name="isi" id="isi" cols="45" rows="5"><?php echo $detail['isi'] ?></textarea>
            </p>
            <p>
                <label for="status_berita">Status berita</label>
                <select name="status_berita" id="status_berita">
                    <option value="Published" <?php if ($detail['status_berita'] == "Published") {
                                                    echo 'selected';
                                                } ?>>Publikasikan</option>
                    <option value="Draft" <?php if ($detail['status_berita'] == "Draft") {
                                                echo 'selected';
                                            } ?>>Simpan sebagai draft</option>
                </select>
                <input name="id_user" type="hidden" id="id_user" value="1">
                <input name="id_berita" type="hidden" id="id_berita" value="<?php echo $detail['id_berita'] ?>">
            </p>
            <p>
                <input type="submit" name="submit" id="submit" value="Submit">
                <input type="reset" name="submit2" id="submit2" value="Reset">
            </p>
        </form>
    </div>
</body>

</html>