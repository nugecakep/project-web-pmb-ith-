<?php if(empty($j_user)) : ?>

<section class="content">
    <div class="card">
        <div class="card-header bg-primary">
            <i class="fa fa-user-plus"></i> Formulir Pendaftaran
        </div>

        <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Nama Lengkap</label>
                            <input autocomplete="off" type="text" class="form-control" name="nama_lengkap">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Sekolah Asal</label>
                            <input autocomplete="off" type="text" class="form-control" name="sekolah_asal">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">NISN</label>
                            <input autocomplete="off" type="text" class="form-control" name="nisn">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">NIK</label>
                            <input autocomplete="off" type="text" class="form-control" name="nik">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Agama</label>
                            <input autocomplete="off" type="text" class="form-control" name="agama">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Nilai Akhir</label>
                            <input autocomplete="off" type="number" class="form-control" name="nilai_akhir">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Tempat Lahir</label>
                            <input autocomplete="off" type="text" class="form-control" name="tempat_lahir">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">Tanggal Lahir</label>
                            <input autocomplete="off" type="date" class="form-control" name="tanggal_lahir">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Kelurahan</label>
                            <input autocomplete="off" type="text" class="form-control" name="kelurahan">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Kecamatan</label>
                            <input autocomplete="off" type="text" class="form-control" name="kecamatan">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Provinsi</label>
                            <input autocomplete="off" type="text" class="form-control" name="provinsi">
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <label for="">Jurusan 1</label>
                        <select id="" class="form-control" name="jurusan_1">
                            <?php foreach($jurusan as $jrs) : ?>
                                <option value="<?php echo $jrs['nama_jurusan'] ?>"><?php echo $jrs['nama_jurusan'] ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="">Jurusan 2</label>
                        <select id="" class="form-control" name="jurusan_2">
                            <?php foreach($jurusan as $jrs) : ?>
                                <option value="<?php echo $jrs['nama_jurusan'] ?>"><?php echo $jrs['nama_jurusan'] ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="">Jurusan 3</label>
                        <select id="" class="form-control" name="jurusan_3">
                            <?php foreach($jurusan as $jrs) : ?>
                                <option value="<?php echo $jrs['nama_jurusan'] ?>"><?php echo $jrs['nama_jurusan'] ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-6">
                        <label for="">Silahkan pilih jalur pendaftaran</label>
                        <select id="jalur" class="form-control" name="jalur" onchange="togglePrestasi()">
                            <?php foreach($jalurpendaftaran as $jp) : ?>
                                <option value="<?php echo $jp['namajurusan']; ?>"><?php echo $jp['namajurusan']; ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                </div>
                <div id="prestasiSection" style="display: none;" class="mt-3">
        <div class="form-group">
            <label for="uploadSertifikat">Upload Sertifikat Prestasi</label>
            <input type="file" class="form-control" name="upload_sertifikat[]" id="uploadSertifikat" multiple onchange="previewImages()">
            <div id="imagePreview" class="mt-3"></div>
        </div>
    </div>
    <div class="text-right mt-3">
        <button type="submit" class="btn btn-primary" name="daftar"><i class="fa fa-edit"></i> Daftar</button>
    </div>
</form>
</section>

<?php elseif(!empty($j_usr_tolak)) : ?>
    <div class="row">
        <div class="col-md-12">
            <div class="box box-default">
                <div class="box-header with-border">
                    <i class="fa fa-bullhorn"></i>
                    <h3 class="box-title">Pengumuman</h3>
                </div>
                <div class="box-body">
                    <div class="callout callout-danger">
                    <h4>Kamu Ditolak di ITH</h4>
                        <?php foreach($user as $usr) : ?>
                            <p>
                                Kamu Sudah Melakukan Registrasi Pada <?php echo $usr['tgl_daftar'] ?> <br/>
                                Kamu Ditolak di ITH, SEMANGAT LAGI YA, Silahkan Logout <br/>
                                <a href="../../logout.php">Logout ?</a>
                            </p>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php elseif(!empty($tolak)) : ?>
    <div class="row">
        <div class="col-md-12">
            <div class="box box-default">
                <div class="box-header with-border">
                    <i class="fa fa-bullhorn"></i>
                    <h3 class="box-title">Pengumuman</h3>
                </div>
                <div class="box-body">
                    <div class="callout callout-danger">
                        <h4>Kamu Ditolak di ITH</h4>
                        <?php foreach($user as $usr) : ?>
                            <p>
                                Kamu Sudah Melakukan Registrasi Pada <?php echo $usr['tgl_daftar'] ?> <br/>
                                Kamu Ditolak di ITH, SEMANGAT LAGI YA, Silahkan Logout <br/>
                                <a href="../../logout.php">Logout ?</a>
                            </p>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
        </div>
    </div>


    
<?php elseif(!empty($j_user)) : ?>
    <div class="row">
        <div class="col-md-12">
            <div class="box box-default">
                <div class="box-header with-border">
                    <i class="fa fa-bullhorn"></i>
                    <h3 class="box-title">Pengumuman</h3>
                </div>
                <div class="box-body">
                    <div class="callout callout-info">
                        <h4>Kamu Sudah Mendaftar</h4>
                        <?php foreach($user as $usr) : ?>
                            <p>
                                Kamu Sudah Melakukan Registrasi Pada <?php echo $usr['tgl_daftar'] ?> <br/>
                                Mendaftar Pada Jurusan <?php echo $usr['jurusan_1'] ?> , <?php echo $usr['jurusan_2'] ?> dan <?php echo $usr['jurusan_3'] ?> <br/>

                            </p>
                        <?php endforeach ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif ?>

<script>
function togglePrestasi() {
    var jalur = document.getElementById('jalur').value;
    var prestasiSection = document.getElementById('prestasiSection');
    if (jalur.toLowerCase() === 'prestasi') {
        prestasiSection.style.display = 'block';
    } else {
        prestasiSection.style.display = 'none';
    }
}

function previewImages() {
    var preview = document.getElementById('imagePreview');
    preview.innerHTML = '';
    var files = document.getElementById('uploadSertifikat').files;

    for (var i = 0; i < files.length; i++) {
        var file = files[i];
        var img = document.createElement('img');
        img.src = URL.createObjectURL(file);
        img.height = 100;
        preview.appendChild(img);
    }
}
</script>