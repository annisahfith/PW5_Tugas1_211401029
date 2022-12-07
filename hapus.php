<?php
    if(isset($_GET['nim']))
    {
        include('koneksi.php');
        $nim = $_GET['nim'];
        $cek = mysqli_query($connection, "select nim from mahasiswaa
        where nim = '$nim'") or die(mysqli_error($connection));
    
        if(mysqli_num_rows($cek)==0)
        {
            echo "<script>window.history.back()</script>";
        }
        else
        {
            $del = mysqli_query($connection, "delete from mahasiswaa where nim = '$nim'");
            if ($del)
            {
                echo "<h3>Data Mahasiswa Berhasil Dihapus</h3>";
                echo "<script>window.location = 'index.php';</script>";
            }
            else 
            {
                echo "<h2>Gagal Menghapus Data</h2>";
                echo "<a href = 'index.php'>Kembali </a>";
            }
        }
    }

    else
    {
        echo "<script>window.history.back()</script>";
    }
?>