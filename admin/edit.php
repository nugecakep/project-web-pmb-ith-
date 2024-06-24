<?php
require 'layouts/function.php';

// Proses ambil data pendaftar berdasarkan id
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM pendaftar WHERE id_user = $id";
    $pendaftar = query($query)[0];
}

// Proses update data pendaftar
if (isset($_POST['submit'])) {
    $id = $_POST['id_user'];
    $nama_lengkap = $_POST['nama_lengkap'];
    $nisn = $_POST['nisn']; 
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $kelurahan = $_POST['kelurahan'];
    $kecamatan = $_POST['kecamatan'];
    $provinsi = $_POST['provinsi'];

    // Data yang akan dikirim ke fungsi update
    $data = [
        'id_user' => $id,
        'nama_lengkap' => $nama_lengkap,
        'nisn' => $nisn,
        'tempat_lahir' => $tempat_lahir,
        'tanggal_lahir' => $tanggal_lahir,
        'kelurahan' => $kelurahan,
        'kecamatan' => $kecamatan,
        'provinsi' => $provinsi
    ];

    // Panggil fungsi update dari function.php
    $result = update($data);

    if ($result > 0) {
        echo "<script>
                alert('Data berhasil diubah');
                document.location.href = 'layouts/index.php?page=seleksi';
              </script>";
    } else {
        echo "<script>
                alert('Data gagal diubah');
              </script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Pendaftar</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="../../assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Include Font Awesome -->
    <link rel="stylesheet" href="../../assets/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Custom CSS -->
    <style>
        body {
            padding: 20px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Data Pendaftar</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST">
                        <input type="hidden" name="id_user" value="<?php echo $pendaftar['id_user']; ?>">

                        <div class="form-group">
                            <label for="nama_lengkap" class="col-md-4 control-label">Nama Lengkap:</label>
                            <div class="col-md-6">
                                <input id="nama_lengkap" type="text" class="form-control" name="nama_lengkap" value="<?php echo $pendaftar['nama_lengkap']; ?>" required autofocus>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="nisn" class="col-md-4 control-label">NISN:</label>
                            <div class="col-md-6">
                                <input id="nisn" type="text" class="form-control" name="nisn" value="<?php echo $pendaftar['nisn']; ?>" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="tempat_lahir" class="col-md-4 control-label">Tempat Lahir:</label>
                            <div class="col-md-6">
                                <input id="tempat_lahir" type="text" class="form-control" name="tempat_lahir" value="<?php echo $pendaftar['tempat_lahir']; ?>" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="tanggal_lahir" class="col-md-4 control-label">Tanggal Lahir:</label>
                            <div class="col-md-6">
                                <input id="tanggal_lahir" type="date" class="form-control" name="tanggal_lahir" value="<?php echo $pendaftar['tanggal_lahir']; ?>" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="kelurahan" class="col-md-4 control-label">Kelurahan:</label>
                            <div class="col-md-6">
                                <input id="kelurahan" type="text" class="form-control" name="kelurahan" value="<?php echo $pendaftar['kelurahan']; ?>" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="kecamatan" class="col-md-4 control-label">Kecamatan:</label>
                            <div class="col-md-6">
                                <input id="kecamatan" type="text" class="form-control" name="kecamatan" value="<?php echo $pendaftar['kecamatan']; ?>" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="provinsi" class="col-md-4 control-label">Provinsi:</label>
                            <div class="col-md-6">
                                <input id="provinsi" type="text" class="form-control" name="provinsi" value="<?php echo $pendaftar['provinsi']; ?>" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary" name="submit">
                                    Update
                                </button>
                                <a class="btn btn-default" href="layouts/index.php?page=seleksi">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Include jQuery and Bootstrap JS -->
<script src="../../assets/bower_components/jquery/dist/jquery.min.js"></script>
<script src="../../assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

</body>
</html>
