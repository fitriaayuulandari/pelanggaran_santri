<div class="card">
  <div class="card-header">
    Data Santri
  </div>
  <div class="card-body">
  <a class="btn btn-primary btn-sm" href="<?php echo base_url().'index.php?page=santri&act=input';?>">Tambah Data</a>
    <?php
    $query = $db->query("SELECT * FROM santri");
    ?>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>Nama Santri</th>
            <th>NIS</th>
            <th>TTL</th>
            <th>Asrama</th>
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
                    <td><?php echo $row['Nama_Santri'];?></td>
                    <td><?php echo $row['NIS'];?></td>
                    <td><?php echo $row['TTL'];?></td>
                    <td><?php echo $row['Asrama'];?></td>
                    <td><a class="btn btn-success btn-sm" href="<?php echo base_url();?>index.php?page=santri&act=edit&Nama_Santri=<?php echo $row['Nama_Santri'];?>">Edit</a>
                <a class="btn btn-danger btn-sm" href="<?php echo base_url();?>index.php?page=santri&act=hapus&Nama_Santri=<?php echo $row['Nama_Santri'];?>">Hapus</a></td>
                </tr>
                <?php
            }
            ?>
        </tbody>
    </table>
  </div>
</div>
