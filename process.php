<?php
    include "koneksi.php";

    if(isset($_POST['aksi'])){
        if($_POST['aksi']=='add'){
            $nisn = $_POST['nisn'];
            $nama = $_POST['nama'];
            $gender = $_POST['gender'];
            $foto = $_POST['foto'];
            $alamat = $_POST['alamat'];

            $QueryInsert = "INSERT INTO table_siswa VALUES(null,'$nisn','$nama','$gender','$foto','$alamat')";
            $sql = mysqli_query($connection,$QueryInsert);
            if($sql){
                // directpage
                header("location: index.php");
                // echo "data berhasil ditambahkan kembali ke <a href='index.php'>home</a>";
            }else{
                echo $sql;
            }
        } else if($_POST['aksi']=='edit'){
            $id = $_POST['id'];
            $nisn = $_POST['nisn'];
            $nama = $_POST['nama'];
            $gender = $_POST['gender'];
            $foto = $_POST['foto'];
            $alamat = $_POST['alamat'];
            $QueryUpdate = "UPDATE table_siswa SET nisn='$nisn',nama='$nama',gender='$gender',foto_siswa='$foto',alamat='$alamat' WHERE id ='$id';";
            $sql = mysqli_query($connection,$QueryUpdate);
            
            if($sql){
                header('location:index.php');
            }else{
                header('location: Add.php');
            }
        }
    }

    if(isset($_GET['hapus'])){
        $id_siswa = $_GET['hapus'];
        $QueryDelete = "DELETE FROM table_siswa WHERE id = '$id_siswa';";
        $sql = mysqli_query($connection,$QueryDelete);
        if($sql){
            // directpage
            header("location: index.php");
            // echo "data berhasil ditambahkan kembali ke <a href='index.php'>home</a>";
        }else{
            echo $sql;
        }
    }
?>