<?php
  // memanggil file koneksi.php untuk membuat koneksi
include 'koneksi.php';

  // mengecek apakah di url ada nilai GET id
  if (isset($_GET['id'])) {
    // ambil nilai id dari url dan disimpan dalam variabel $id
    $id = ($_GET["id"]);

    // menampilkan data dari database yang mempunyai id=$id
    $query = "SELECT * FROM bajudistro WHERE id='$id'";
    $result = mysqli_query($koneksi, $query);
    // jika data gagal diambil maka akan tampil error berikut
    if(!$result){
      die ("Query Error: ".mysqli_errno($koneksi).
         " - ".mysqli_error($koneksi));
    }
    // mengambil data dari database
    $data = mysqli_fetch_assoc($result);
      // apabila data tidak ada pada database maka akan dijalankan perintah ini
       if (!count($data)) {
          echo "<script>alert('Data tidak ditemukan pada database');window.location='index.html';</script>";
       }
  } else {
    // apabila tidak ada data GET id pada akan di redirect ke index.php
    echo "<script>alert('Masukkan data id.');window.location='index.html';</script>";
  }         
  ?>
<!DOCTYPE html>
<html>
  <head>
    <title>CRUD Produk dengan gambar - Gilacoding</title>
    <link rel="stylesheet" href="asets/css/stylebajudistroF.css">
  </head>
  <body>
      <center>
        <h1>Edit Produk <?php echo $data['nama_baju']; ?></h1>
      <center>
      <form method="POST" action="halaman_proses_editF.php" enctype="multipart/form-data" >
      <section class="base">
        <!-- menampung nilai id produk yang akan di edit -->
        <input name="id" value="<?php echo $data['id']; ?>"  hidden />
        <div>
          <label>Nama Produk</label>
          <input type="text" name="nama_baju" value="<?php echo $data['nama_baju']; ?>" autofocus="" required="" />
        </div>
        <div>
          <label>Deskripsi</label>
         <input type="text" name="deskripsi" value="<?php echo $data['deskripsi']; ?>" />
        </div>
        <div>
          <label>Kategori</label>
         <input type="text" name="kategori" required=""value="<?php echo $data['kategori']; ?>" />
        </div>
        <div>
          <label>Harga</label>
         <input type="text" name="harga" required="" value="<?php echo $data['harga']; ?>"/>
        </div>
        <div>
          <label>Gambar Produk</label>
          <img src="asets/imgs/<?php echo $data['gambar_baju']; ?>" style="width: 120px;float: left;margin-bottom: 5px;">
          <input type="file" name="gambar_baju" />
          <i style="float: left;font-size: 11px;color: red"></i>
        </div>
        <div>
         <button type="submit">Simpan Perubahan</button>
        </div>
        </section>
      </form>
  </body>
</html>