<!doctype html>
    <?php
        include "koneksi.php";

        $nisn = '';
        $nama = '';
        $gender = '';
        $foto = '';
        $alamat = '';

        if(isset($_GET['ubah'])){
          $id = $_GET['ubah'];
          $QueryWhereId = "SELECT * FROM table_siswa WHERE id = '$id';";
          $Sql = mysqli_query($connection,$QueryWhereId);
          $result = mysqli_fetch_assoc($Sql);
          $nisn = $result['nisn'];
          $nama = $result['nama'];
          $gender = $result['gender'];
          $foto = $result['foto_siswa'];
          $alamat = $result['alamat'];
          // die();
        }
    ?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <title>Belajar Crud-PHP</title>
  </head>
  <body>
    <nav class="navbar navbar-light bg-light">
        <div class="container">
          <a class="navbar-brand" href="index.php">
            CRUD - PHP
          </a>
        </div>
    </nav>
    <div class="container">
        <form method="POST" action="process.php">
          <input type="hidden" value="<?php echo $id?>" name="id">
            <div class="mb-3 row">
              <label for="nisn" class="form-label">NISN</label>
              <input type="text" class="form-control" name="nisn" id="nisn" placeholder="Masukkan Nisn" required value="<?php echo $nisn;?>">
            </div>
            <div class="mb-3 row">
                <label for="nisn" class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama" required value="<?php echo $nama; ?>">
            </div>
            <div class="mb-3 row">
                <label for="nisn" class="form-label">Jenis Kelamin</label>
                <select class="form-select" name='gender' aria-label="Default select example">
                    <option <?php if($gender == 'laki-laki'){ echo "selected";}?> value="laki-laki">Laki-laki</option>
                    <option <?php if($gender == 'perempuan'){ echo "selected";}?> value="perempuan">Perempuan</option>
                  </select>
            </div>
            <div class="mb-3 row">
                <label for="foto" class="form-label">Foto Siswa</label>
                <input class="form-control" type="text" name="foto" id="foto" value="<?php echo $foto;?>">
            </div>
            <div class="mb-3 row">
                <label for="exampleFormControlTextarea1" class="form-label">Alamat lengkap</label>
                <input class="form-control" type="text" name="alamat" id="exampleFormControlTextarea1" rows="3" value="<?php echo $alamat;?>"></input>
            </div>
            <div class="mb-3 row">
              <div class="col">
              <?php
                if(isset($_GET['ubah'])){ 
              ?>
                  <button type="submit" name="aksi" value="edit" class="btn btn-primary" onclick="return confirm('ingin mengubah data?')">Simpan perubahan</button>
              
              <?php
                } else { 
              ?>
                    <button type="submit" name="aksi" value="add" class="btn btn-primary">Submit</button>
              <?php
                }
              ?> 
                <a href="index.php" class="btn btn-danger">Cancel</a>
              </div>
            </div>
        </form>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>

   
  </body>
</html>
