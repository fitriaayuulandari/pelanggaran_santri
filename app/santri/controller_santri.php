<?php

$act = $_GET['act'];

if($act == 'save'){
    $nama_santri = $_POST['nama_santri'];
    $nis = $_POST['nis'];
    $ttl = $_POST['ttl'];
    $asrama = $_POST['asrama'];
    
    $query = $db->query("INSERT INTO santri (nama_santri, nis, ttl, asrama,)
        values('$nama_santri','$nis', '$ttl', $asrama',)");
    if($query){
        echo "<script>
            alert('Data Sukses disimpan');
            window.location.href='" . base_url() . "index.php?page=santri';
        </script>";
    }
    else{
    
        echo"<script>
        alert('Data gagal disimpan');
        window.location.href='" . base_url() . "index.php?page=santri&act=input';
        </script>";
    }
}
else if($act == 'update'){
    $nama_santri_old = $_POST['nama_santri_old'];
    $nama_santri = $_POST['nama_santri'];
    $nis = $_POST['nis'];
    $ttl = $_POST['ttl'];
    $alamat = $_POST['asrama'];

    if(!empty(password)) {
        $password_fix = sha1($password);
        $query = $db->query("UPDATE santri SET 
                                            nama_santri ='$nama_santri',
                                            nis = '$nis',
                                            ttl = '$ttl',
                                            asrama = '$asrama',
                                    WHERE nama_santri='$nama_santri_old'");
    }
    else{

        $query = $db->query("UPDATE santri SET 
                                            nama_santri ='$nama_santri',
                                            nis = '$nis',
                                            ttl = '$tll',
                                            asrama = '$asrama'
                                    WHERE nama_santri='$nama_santri_old'");
    }
    if($query){
        echo "<script>
            alert('Data Sukses diubah');
            window.location.href='" . base_url() . "index.php?page=santri';
        </script>";
    }
    else{
    
        echo"<script>
        alert('Data gagal diubah');
        window.location.href='" . base_url() . "index.php?page=santri';
        </script>";
    }
}
else if($act == 'hapus'){
    $nama_santri = $_GET['nama_santri'];
    $query = $db->query("DELETE FROM santri WHERE nama_santri ='$nama_santri'");
    if($query){
        echo "<script>
            alert('Data Sukses dihapus');
            window.location.href='" . base_url() . "index.php?page=santri';
        </script>";
    }
    else{
    
        echo"<script>
        alert('Data gagal dihapus');
        window.location.href='" . base_url() . "index.php?page=santri';
        </script>";
    }
}
else{
    echo "<script>
        alert('maaf parameter tidak valid');
        window.location.href='" . base_url() . "index.php?page=santri';
    </script>";
}

