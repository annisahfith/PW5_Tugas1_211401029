<?php 
  
  if(isset($_POST['simpan'])) 
  {
    include ('koneksi.php');
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $gender = $_POST['gender'];
    $alamat = $_POST['alamat'];
    $update = mysqli_query($connection, "Update Mahasiswaa Set

    nama = '$nama',
    gender = '$gender',
    alamat = '$alamat'

    where nim = '$nim'")
    
    or die(mysqli_error($connection));
    
    if($update)
    {
        echo "<h2>Data Berhasil di-Update</h2>";
        echo "<script>window.location = 'index.php</script>";
    }

    else
    {
        echo "<h2>Gagal Menyimpan Data</h2>";
        echo "<a href = 'edit.php ?nim = ".$nim."'>kembali</a>";
    }
    }

    else 
    {
        echo "<script>window.history.back()</script>";
    }

  ?>