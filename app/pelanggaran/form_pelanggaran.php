<?php

$act = isset($_GET['act']) ? $_GET['act'] : false;
$id = isset($_GET['kd_pelanggaran']) ? $_GET['kd_pelanggaran'] : false;

if($act == 'edit') {
    $url = base_url() . "index.php?page=pelanggaran&act=update";
    if($id){
        $query = $db->query("SELECT * FROM pelanggaran where kd_pelanggaran = '$id'");
        $row = $query->fetch_array();
    }
    else{
        echo "<script>
        alert('Parameter nomer pelanggaran unvalid');
        window.location.href=' " . base_url() . "index.php?page=pelanggaran';</script>";
    }

}
else{
    $url = base_url() . "index.php?page=pelanggaran&act=save";
}
?>

        <div class="card">
  <div class="card-header">
    Input Pelanggaran
  </div>
  <div class="card-body">
  <form action="<?php echo $url; ?>" method="post">
    <input type="hidden" name="kd_pelanggaran_old" id="kd_pelanggaran_old" value="<?php echo isset($row) ? $row['kd_pelanggaran'] : ''; ?>">
        <div class= "mb-3">
            <label for="kd_pelanggaran">Kode Pelanggaran</label>
            <input type="text" class="form-control" name="kd_pelanggaran" id="kd_pelanggaran" value="<?php echo isset($row) ? $row['kd_pelanggaran'] : ''; ?>">
        </div>
        <div class= "mb-3">
            <label for="jenis_pelanggaran">Jenis pelanggaran</label>
            <input  class="form-control" name="jenis_pelanggaran" id="jenis_pelanggaran" value="<?php echo isset($row) ? $row['jenis_pelanggaran'] : ''; ?>">
        <div class= "mb-3">
            <a class="btn btn-danger btn-sm float-start" href="list_pelanggaran.php">
            <i class="fa-solid fa-floopy-disk"></i>
                Kembali
            </a>
            <button class="btn btn-primary btn-sm float-end" type="submit">
                <i class="fa-reguler fa-floopy-disk"></i>
                Simpan Data
            </button>
        </div>
    </form>
  </div>
</div>

