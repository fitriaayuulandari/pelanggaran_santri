<?php

$act = isset($_GET['act']) ? $_GET['act'] : false;
$id = isset($_GET['nama_santri']) ? $_GET['nama_santri'] : false;

if($act == 'edit') {
    $url = base_url() . "index.php?page=santri&act=update";
    if($id){
        $query = $db->query("SELECT * FROM santri where nama_santri = '$id'");
        $row = $query->fetch_array();
    }
    else{
        echo "<script>
        alert('Parameter nomer santri unvalid');
        window.location.href=' " . base_url() . "index.php?page=santri';</script>";
    }

}
else{
    $url = base_url() . "index.php?page=santri&act=save";
}
?>

        <div class="card">
  <div class="card-header">
    Input Data santri
  </div>
  <div class="card-body">
  <form action="<?php echo $url; ?>" method="post">
    <input type="hidden" name="nama_santri_old" id="nama_santri_old" value="<?php echo isset($row) ? $row['nama_santri'] : ''; ?>">
        <div class= "mb-3">
            <label for="nama_santri">Nama Santri</label>
            <input type="text" class="form-control" name="nama_santri" id="nama_santri" value="<?php echo isset($row) ? $row['nama_santri'] : ''; ?>">
        </div>
        <div class= "mb-3">
            <label for="nis">NIS</label>
            <input  class="form-control" name="nis" id="nis" value="<?php echo isset($row) ? $row['nis'] : ''; ?>">
        </div>
        <div class= "mb-3">
            <label for="ttl">TTL</label>
            <input  class="form-control" name="ttl" id="tll" value="<?php echo isset($row) ? $row['tll'] : ''; ?>">
        </div>
        <div class= "mb-3">
            <label for="asrama">Asrama</label>
            <input  class="form-control" name="asrama" id="asrama" value="<?php echo isset($row) ? $row['asrama'] : ''; ?>">
        </div>
        <div class= "mb-3">
            <a class="btn btn-danger btn-sm float-start" href="list_santri.php">
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

