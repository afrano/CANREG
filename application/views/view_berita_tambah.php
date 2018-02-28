<!DOCTYPE html>
<html>
    <head>
        <title>Autosave data dengan Jquery Ajax di Codeigniter dan MySQL</title>
        <meta name="author" content="Robby Prihandaya">
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.0.min.js"></script>
        <script type="text/javascript">
            // Perintah untuk menjalankan autosave per-10 detik
            $(document).ready(function () {
                autosave();
            });
            function autosave() {
                var t = setTimeout("autosave()", 10000);
                var id = $("#id").val();
                var judul = $("#judul").val();
                var isi = $("#isi").val();
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url('berita/autosave_berita'); ?>",
                    data: "id=" + id + "judul=" + judul + "&isi=" + isi,
                    cache: false,
                });
            }
            // Akhir Perintah untuk menjalankan autosave per-10 detik
        </script>
    </head>
    <body>
        <?php
// Tampilan Form Inputan Berita
        echo form_open('berita/tambah_berita');
        echo "<table width='100%'>
          <input type='text' name='id' id='id' value='" . $this->session->id_berita . "'>
          <tr><th width='120px'>Judul</th>    <td><input type='text' name='judul' id='judul' required></td></tr>
          <tr><th>Isi Berita</th> <td><textarea name='isi' style='height:200px' id='isi' required></textarea></td></tr>
        </table>
        <button type='submit' name='submit'>Tambahkan</button>";
        echo form_close();
        ?>
    </body>
</html>