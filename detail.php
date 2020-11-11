<form action="edit_informasi.php" method="POST">
    <?php
    include 'koneksi.php';
    $id = $_POST['id'];
    $query_edit = mysqli_query($conn, "SELECT * FROM entry_informasi WHERE id='$id'");
    $row = mysqli_fetch_array($query_edit);
    //membuat data jurusan menjadi dinamis dalam bentuk array

    function active_radio_button($value, $input){
        //apabila value dari radio sama dengan yang di input
        $result = $value==$input?'checked':'';
        return $result;
    }
    ?>
    <div class="form-group row">
        <label for="inputNim" class="col-sm-2 col-form-label">Judul Informasi</label>
        <div class="col-sm-10">
            <input type="hidden" class="form-control" id="inputId name="id" value="<?php echo $row['id']; ?>">
            <input type="text" class="form-control" id="inputJudul" name="judul_informasi" value="<?php echo $row['judul_informasi']; ?>" readonly>
        </div>
    </div>
    <div class="form-group row">
        <label for="inputIsi" class="col-sm-2 col-form-label">Isi</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputIsi" name="isi_informasi" value="<?php echo $row['isi_informasi']; ?>">
        </div>
    </div>
    <
    <div class="form-group row">
        <div class="col-sm-2"></div>
    </div>
    <div class="form-group row">
        <div class="col-sm 2"></div>
        <div class="col-sm-10">
            <button type="submit" class="btn btn-success"><i class="fa fa-send-ofa fa-send-o mr-2"></i>Simpan</button>
            <button type="reset" class="btn btn-danger"><i class="fa fa-send-ofa fa-refresh mr-2"></i>Batal</button>
        </div>
    </div>

</form>
