<?php
$conn = mysqli_connect("localhost", "root", "", "pmbbb");

if (!$conn) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}
date_default_timezone_set('Asia/Jakarta'); // Set timezone

function query($query) {
    global $conn;
    $kotak = [];
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Query error: " . mysqli_error($conn));
    }

    while ($lemari = mysqli_fetch_assoc($result)) {
        $kotak[] = $lemari;
    }
    return $kotak;
}

function daftar($data) {
    global $conn;

    $nama = $data['nama_lengkap'];
    $sekolah_lama = $data['sekolah_asal'];
    $nisn = $data['nisn'];
    $nilai = $data['nilai_akhir'];
    $jurusan_1 = strtolower($data['jurusan_1']);
    $jurusan_2 = strtolower($data['jurusan_2']);
    $jurusan_3 = strtolower($data['jurusan_3']);
    $jalur = strtolower($data['jalur']);
    $tempat_lahir = $data['tempat_lahir'];
    $tanggal_lahir = $data['tanggal_lahir'];

    $kelurahan = $data['kelurahan'];
    $kecamatan = $data['kecamatan'];
    $provinsi = $data['provinsi'];
    $id_user = $_SESSION['id_user'];
    $nisn_user = $_SESSION['nisn'];
    $nama_user = $_SESSION['nama'];
    $tgl_daftar = date('Y-m-d H:i:s');

    if ($nilai > 100) {
        echo "<script>
              alert('Nilai Tidak Valid !!');
              document.location.href = 'index.php';
             </script>";
        exit;
    }

    $stat = 'Menunggu Keputusan';
    $jr = null; // Initially, the recommended major is set to null

    // Handle multiple image uploads
    $file_paths = [];
    if (!empty($_FILES['upload_sertifikat']['name'][0])) {
        $total_files = count($_FILES['upload_sertifikat']['name']);
        
        for ($i = 0; $i < $total_files; $i++) {
            $file_name = $_FILES['upload_sertifikat']['name'][$i];
            $file_tmp = $_FILES['upload_sertifikat']['tmp_name'][$i];
            $file_error = $_FILES['upload_sertifikat']['error'][$i];
            
            if ($file_error === UPLOAD_ERR_OK) {
                $file_extension = pathinfo($file_name, PATHINFO_EXTENSION);
                $file_destination = 'uploads/' . uniqid() . '.' . $file_extension;
                
                // Move uploaded file to destination
                if (move_uploaded_file($file_tmp, $file_destination)) {
                    $file_paths[] = $file_destination;
                } else {
                    echo "Error saat mengunggah file: ";
                    print_r(error_get_last());
                    return false; // Stop execution if upload failed
                }
            }
        }
    }

    // Convert file paths to a single string for database storage
    $upload_sertifikat = implode(",", $file_paths);

    // Input data into the database
    $q_insert = "INSERT INTO pendaftar (id_user, nama_lengkap, sekolah_asal, nisn, nilai_akhir, jurusan_1, jurusan_2, jurusan_3, jalur, upload_sertifikat, tempat_lahir, tanggal_lahir, kelurahan, kecamatan, provinsi, jurusan_rekomendasi, stat, tgl_daftar) 
                 VALUES ('$id_user', '$nama', '$sekolah_lama', '$nisn', '$nilai', '$jurusan_1', '$jurusan_2', '$jurusan_3', '$jalur', '$upload_sertifikat', '$tempat_lahir', '$tanggal_lahir', '$kelurahan', '$kecamatan', '$provinsi', '$jr', '$stat', '$tgl_daftar')";
    $insert = mysqli_query($conn, $q_insert);

    if (!$insert) {
        echo "Error: " . mysqli_error($conn);
        return false;
    }

    if ($stat == "Ditolak") {
        return "tolak";
    }

    return mysqli_affected_rows($conn);
}

// Function to determine recommended major based on preferences
function determineJurusan($jurusan_1, $jurusan_2, $jurusan_3) {
    // Prioritize jurusan_1, then jurusan_2, then jurusan_3
    if ($jurusan_1 == $jurusan_2 || $jurusan_1 == $jurusan_3) {
        return $jurusan_1;
    } elseif ($jurusan_2 == $jurusan_3) {
        return $jurusan_2;
    }

    // Combine all possible combinations to determine the recommended major
    $combinations = [
        [$jurusan_1, $jurusan_2],
        [$jurusan_1, $jurusan_3],
        [$jurusan_2, $jurusan_3]
    ];

    foreach ($combinations as $combination) {
        if (in_array('ilmu komputer', $combination) && in_array('matematika', $combination)) {
            return 'ilmu komputer';
        } elseif (in_array('ilmu komputer', $combination) && in_array('sistem informasi', $combination)) {
            return 'ilmu komputer';
        } elseif (in_array('matematika', $combination) && in_array('sistem informasi', $combination)) {
            return 'sistem informasi';
        }
    }

    // Default case if no combination matches
    return $jurusan_1; // Default to the first preference
}

?>
