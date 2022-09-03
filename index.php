<?php
  include "koneksi.php";
  $query1 = "SELECT * FROM table_siswa;";
  $sql = mysqli_query($connection,$query1);
  $no =0;
?>

<!doctype html>
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
          <a class="navbar-brand" href="/index.html">
            CRUD - PHP
          </a>
        </div>
    </nav>
    <!-- Judul -->
    <div class="container">
        <h1 class="mt-2">Data Siswa</h1>
        <figure>
            <blockquote class="blockquote">
              <p>Berisi data yang telah disimpan di database</p>
            </blockquote>
            <figcaption class="blockquote-footer">
              CRUD <cite title="Source Title">Create,Read,Update,Delete</cite>
            </figcaption>
        </figure>
        <a href="Add.php" class="btn btn-primary">Tambah Data</a>
        <div class="table-responsive">
            <table class="table align-middle table-sm">
              <thead>
                <tr>
                    <th>No.</th>
                    <th>NISN.</th>
                    <th>Nama Siswa.</th>
                    <th>Jenis Kelamin.</th>
                    <th>Foto Siswa.</th>
                    <th>Alamat.</th>
                    <th>Action.</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  while($result = mysqli_fetch_assoc($sql)){
                ?>
                <tr>
                    <td>
                      <?php echo ++$no; ?>.
                    </td>
                    <td>
                      <?php echo $result['nisn'];?>
                    </td>
                    <td>
                      <?php echo $result['nama'];?>
                    </td>
                    <td>
                      <?php echo $result['gender'];?>
                    </td>
                    <td>
                      <img src="<?php echo $result['foto_siswa']; ?>" width="150" height="150">
                    </td>
                    <td>
                      <?php echo $result['alamat'];?>
                    </td>
                    <td>
                        <a href="Add.php?ubah=<?php echo $result['id'];?>" class="btn btn-sm btn-primary">Edit</a>
                        <a href="process.php?hapus=<?php echo $result['id'];?>" class="btn btn-sm btn-danger" onclick="return confirm('Konfirmasi Hapus Data')">Hapus</a>
                    </td>
                </tr>
                <?php 
                  }
                ?>
              </tbody>
            </table>
        </div>
    </div>
    





    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>

   
  </body>
</html>
