<?php
// Lakukan query untuk mengambil data dari tabel terimaa
$terimaa = query("SELECT * FROM terimaa");

// Periksa apakah $terimaa berisi data atau tidak sebelum digunakan di dalam HTML
if (!empty($terimaa)) {
?>
<div class="box">
  <div class="box-header with-border">

  </div>
  <div class="body">
    <table class="table table-bordered text-center">
      <tr>
        <th>Nama Lengkap</th>
        <th>NISN</th>
        <th>Sekolah Asal</th>
        <th>Jurusan</th>
      </tr>
      
      <?php foreach($terimaa as $trm) : ?>
        <tr>
            <td><?php echo $trm['nama_lengkap'] ?></td>
            <td><?php echo $trm['nisn'] ?></td>
            <td><?php echo $trm['sekolah_asal'] ?></td>
            <td><?php echo $trm['jurusan'] ?></td>
        </tr>
      <?php endforeach ?>

    </table>
  </div>
</div>
<?php
} else {
    echo "Data terimaa tidak ditemukan.";
}
?>
