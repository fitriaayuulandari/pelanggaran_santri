<div class="card">
  <div class="card-header">
    Pelanggaran
  </div>
  <div class="card-body">
  <a class="btn btn-primary btn-sm" href="<?php echo base_url().'index.php?page=pelanggaran&act=input';?>">Tambah Data</a>
    <?php
    $query = $db->query("SELECT * FROM pelanggaran");
    ?>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Kode pelanggaran</th>
            <th>Jenis pelanggaran</th>
            <th>Act</th>
        </tr>
        </thead>  
        <tbody>
            <?php
            $no = 1;
            while($row = $query->fetch_array()){
                ?>
                <tr>
                    <td><?php echo $no++;?></td>
                    <td><?php echo $row['kd_pelanggaran'];?></td>
                    <td><?php echo $row['jenis_pelanggaran'];?></td>
                    <td><a class="btn btn-success btn-sm" href="<?php echo base_url();?>index.php?page=pelanggaran&act=edit&kd_pelanggaran=<?php echo $row['kd_pelanggaran'];?>">Edit</a>
                <a class="btn btn-danger btn-sm" href="<?php echo base_url();?>index.php?page=santri&act=hapus&kd_pelanggaran=<?php echo $row['kd_pelanggaran'];?>">Hapus</a></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
  </div>
</div>
