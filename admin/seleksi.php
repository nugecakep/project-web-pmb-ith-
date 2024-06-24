<?php
// Assuming query() function is defined elsewhere

// Fetching pendaftar with recommended majors based on nilai_utbk
$pendaftar = query("SELECT *,
                        CASE
                            WHEN nilai_utbk > 650 THEN 'ilmu komputer'
                            WHEN nilai_utbk >= 450 AND nilai_utbk <= 650 THEN 'sistem informasi'
                            WHEN nilai_utbk >= 300 AND nilai_utbk < 450 THEN 'matematika'
                            ELSE NULL
                        END AS jurusan_rekomendasi
                    FROM pendaftar
                    WHERE stat = 'Menunggu Keputusan'
                    ORDER BY id_user");

?>

<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Daftar Pendaftar</h3>
    </div>
    <div class="box-body">
        <div class="table-responsive">
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th class="wide-header">Nama Lengkap</th>
                        <th class="wide-header">Nilai Akhir Sekolah</th>
                        <th class="wide-header">Jurusan 1</th>
                        <th class="wide-header">Jurusan 2</th>
                        <th class="wide-header">Jurusan 3</th>
                        <th class="wide-header">Jalur</th>
                        <th class="wide-header">Total Nilai</th>
                        <th class="wide-header">Sertifikat Prestasi</th>
                        <th class="wide-header">Jurusan Diterima</th>
                        <th class="wide-header">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($pendaftar as $pdtr) : ?>
                        <tr>
                            <td><?php echo $pdtr['nama_lengkap']; ?></td>
                            <td><?php echo $pdtr['nilai_akhir']; ?></td>
                            <td><?php echo $pdtr['jurusan_1']; ?></td>
                            <td><?php echo $pdtr['jurusan_2']; ?></td>
                            <td><?php echo $pdtr['jurusan_3']; ?></td>
                            <td><?php echo $pdtr['jalur']; ?></td>
                            <td><?php echo $pdtr['nilai_utbk']; ?></td>
                            <td>
                                <?php
                                $sertifikat_paths = explode(',', $pdtr['upload_sertifikat']);
                                foreach ($sertifikat_paths as $sertifikat) {
                                    $sertifikat_url = 'http://localhost/pmbb/user/layouts/' . $sertifikat;
                                    echo '<a href="' . $sertifikat_url . '" target="_blank" class="btn btn-info btn-sm">Sertifikat</a><br>';
                                }
                                ?>
                            </td>
                            <td><?php echo $pdtr['jurusan_rekomendasi']; ?></td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="#" class="btn btn-default btn-sm action-btn view-btn"><i class="fa fa-eye fa-lg fa-fw"></i> View</a>
                                    <div class="action-buttons" style="display: none;">
                                        <!-- Form untuk melakukan aksi terima -->
                                        <form action="" method="post" style="display: inline-block;">
                                            <input type="hidden" name="id_pdtr[]" value="<?php echo $pdtr['id_user']; ?>">
                                            <button type="submit" name="terimaa" class="btn btn-primary btn-xs action-btn"><i class="fa fa-check fa-lg fa-fw"></i></button>
                                        </form>
                                        <!-- Form untuk melakukan aksi tolak -->
                                        <form action="" method="post" style="display: inline-block;">
                                            <input type="hidden" name="id_pdtr[]" value="<?php echo $pdtr['id_user']; ?>">
                                            <button type="submit" name="tolak" class="btn btn-danger btn-xs action-btn"><i class="fa fa-times fa-lg fa-fw"></i></button>
                                        </form>
                                        <!-- Tombol untuk mengedit data -->
                                        <a href="../edit.php?id=<?php echo $pdtr['id_user']; ?>" class="btn btn-warning btn-xs action-btn"><i class="fa fa-pencil fa-lg fa-fw"></i></a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('.view-btn').click(function(e) {
            e.preventDefault();
            var btnGroup = $(this).closest('.btn-group');
            btnGroup.find('.action-buttons').toggle();
        });
    });
</script>

<?php
// Handling form submission for "Terima" and "Tolak"
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['terimaa'])) {
        // Handle "Terima" action
        $id_pdtr = $_POST['id_pdtr'];
        $affected_rows = 0;

        foreach ($id_pdtr as $id) {
            $inserted = terimaa(['id_pdtr' => [$id]]);
            if ($inserted > 0) {
                $affected_rows++;
            }
        }

        if ($affected_rows > 0) {
            echo '<script>alert("Berhasil menerima ' . $affected_rows . ' pendaftar.");</script>';
        } else {
            echo '<script>alert("Gagal menerima pendaftar.");</script>';
        }
    } elseif (isset($_POST['tolak'])) {
        // Handle "Tolak" action
        $id_pdtr = $_POST['id_pdtr'];
        $affected_rows = 0;

        foreach ($id_pdtr as $id) {
            $rejected = tolak(['id_pdtr' => [$id]]);
            if ($rejected > 0) {
                $affected_rows++;
            }
        }

        if ($affected_rows > 0) {
            echo '<script>alert("Berhasil menolak ' . $affected_rows . ' pendaftar.");</script>';
        } else {
            echo '<script>alert("Gagal menolak pendaftar.");</script>';
        }
    }
}
?>
