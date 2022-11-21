<?php
  include('koneksi.php'); //agar index terhubung dengan database, maka koneksi sebagai penghubung harus di include
  
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Toko Baju Distro Ferdy</title>
    <link rel="stylesheet" ty[e="text/css"] href="asets/css/stylebajudistroF.css">
  </head>
  <body>
    <center><h1>Data Produk</h1><center>
    <center><a href="halaman_tambahF.php">+ &nbsp; Tambah Produk</a><center><br><br>
    <center><a href="index.php"> &nbsp; Kembali</a><center>
    <br/>
    <table>
      <thead>
        <tr>
          <th>No</th>
          <th>Name</th>
          <th>Description</th>
          <th>Category</th>
          <th>Price</th>
          <th>Picture</th>
          <th>Action</th>
        </tr>
    </thead>
    <tbody>
      
      <?php
      // jalankan query untuk menampilkan semua data diurutkan berdasarkan nim
      $query = "SELECT * FROM bajudistro ORDER BY id ASC";
      $result = mysqli_query($koneksi, $query);
      //mengecek apakah ada error ketika menjalankan query
      if(!$result){
        die ("Query Error: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
      }

      //buat perulangan untuk element tabel dari data mahasiswa
      $no = 1; //variabel untuk membuat nomor urut
      // hasil query akan disimpan dalam variabel $data dalam bentuk array
      // kemudian dicetak dengan perulangan while
      while($row = mysqli_fetch_assoc($result))
      {
      ?>
       <tr>
          <td><?php echo $no; ?></td>
          <td><?php echo $row['nama_baju']; ?></td>
          <td><?php echo substr($row['deskripsi'], 0, 20); ?>...</td>
          <td><?php echo substr($row['kategori'], 0, 20); ?></td>
          <td>Rp <?php echo $row['harga']; ?>.000</td>
          <td style="text-align: center;"><img src="asets/imgs/<?php echo $row['gambar_baju']; ?>" style="width: 120px;"></td>
          <td>
              <a href="halaman_editF.php?id=<?php echo $row['id']; ?>">Edit</a> |
              <a href="halaman_hapusF.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a>
          </td>
      </tr>
         
      <?php
        $no++; //untuk nomor urut terus bertambah 1
      }
      ?>
    </tbody>
    </table>
  </body>
</html>
