<?php
$conn = mysqli_connect("localhost", "root", "", "pmbbb");

function query($query) {
    global $conn;
    $kotak = [];
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Query Error: " . mysqli_error($conn));
    }

    while ($lemari = mysqli_fetch_assoc($result)) {
        $kotak[] = $lemari;
    }
    return $kotak;
}

function terimaa($data) {
    global $conn;

    $id = $data['id_pdtr'];
    $affected_rows = 0;

    foreach ($id as $id_pdtr) {
        $query = "SELECT * FROM pendaftar WHERE id_user = '$id_pdtr'";
        $result = mysqli_query($conn, $query);

        if (!$result) {
            die("Query Error: " . mysqli_error($conn));
        }

        $row = mysqli_fetch_assoc($result);
        $jurusan_rekomendasi = determineJurusan($row['nilai_utbk'], $row['jurusan_1'], $row['jurusan_2'], $row['jurusan_3']);

        $nama = $row['nama_lengkap'];
        $nisn = $row['nisn'];
        $sekolah_lama = $row['sekolah_asal'];
        $inserted = false;

        // Array prioritas jurusan
        $prioritas_jurusan = [$jurusan_rekomendasi, $row['jurusan_2'], $row['jurusan_3']];
        // Remove duplicates and null values
        $prioritas_jurusan = array_filter(array_unique($prioritas_jurusan));

        // Loop through each prioritized jurusan and check capacity
        foreach ($prioritas_jurusan as $jurusan) {
            if (checkCapacity($jurusan)) {
                $inserted = insertToTerimaa($id_pdtr, $nama, $nisn, $sekolah_lama, $jurusan);
                if ($inserted) {
                    updateCount($jurusan);
                    break; // Break loop once a suitable jurusan is found
                }
            }
        }

        if ($inserted) {
            $delete = mysqli_query($conn, "DELETE FROM pendaftar WHERE id_user = '$id_pdtr'");
            if ($delete) {
                $affected_rows++;
            } else {
                return 0; // Gagal menghapus dari pendaftar
            }
        } else {
            return 0; // Gagal memasukkan ke terimaa
        }
    }

    return $affected_rows;
}

function checkCapacity($prodi) {
    global $conn;

    $query = "SELECT kapasitas, jumlah_lulus FROM count WHERE prodi = '$prodi'";
    $result = mysqli_query($conn, $query);
    if (!$result) {
        die("Query Error: " . mysqli_error($conn));
    }

    $row = mysqli_fetch_assoc($result);
    return $row['jumlah_lulus'] < $row['kapasitas'];
}

function updateCount($prodi) {
    global $conn;

    $query = "UPDATE count SET jumlah_lulus = jumlah_lulus + 1 WHERE prodi = '$prodi'";
    mysqli_query($conn, $query);
}

function determineJurusan($nilai_utbk, $jurusan1, $jurusan2, $jurusan3) {
    if ($nilai_utbk > 650) {
        if ($jurusan1 == 'ilmu komputer' || $jurusan2 == 'ilmu komputer' || $jurusan3 == 'ilmu komputer') {
            return 'ilmu komputer';
        }
    } elseif ($nilai_utbk >= 450 && $nilai_utbk <= 650) {
        if ($jurusan1 == 'sistem informasi' || $jurusan2 == 'sistem informasi' || $jurusan3 == 'sistem informasi') {
            return 'sistem informasi';
        } elseif ($jurusan1 == 'matematika' || $jurusan2 == 'matematika' || $jurusan3 == 'matematika') {
            return 'matematika';
        }
    } elseif ($nilai_utbk >= 300 && $nilai_utbk < 450) {
        if ($jurusan1 == 'matematika' || $jurusan2 == 'matematika' || $jurusan3 == 'matematika') {
            return 'matematika';
        }
    }
    return null; // Jurusan tidak sesuai kriteria
}


function insertToTerimaa($id_pdtr, $nama, $nisn, $sekolah_lama, $jurusan) {
    global $conn;

    $insert = mysqli_query($conn, "INSERT INTO terimaa (id_user, nama_lengkap, nisn, sekolah_asal, jurusan) 
                                   VALUES ('$id_pdtr', '$nama', '$nisn', '$sekolah_lama', '$jurusan')");

    return $insert;
}

function tolak($data) {
    global $conn;
    $id = $data['id_pdtr'];

    // Loop through each selected id_pdtr to update status
    foreach ($id as $id_pdtr) {
        // Update status pendaftar menjadi "Ditolak"
        $update = mysqli_query($conn, "UPDATE pendaftar SET stat = 'Ditolak' WHERE id_user = '$id_pdtr'");
    }

    return mysqli_affected_rows($conn);
}

function update($data) {
    global $conn;
    $id = htmlspecialchars($data['id_user']);
    $nama = htmlspecialchars($data['nama_lengkap']);
    $nisn = $data['nisn'];
    $tempat_lahir = $data['tempat_lahir'];
    $tanggal_lahir = $data['tanggal_lahir'];
    $kelurahan = $data['kelurahan'];
    $kecamatan = $data['kecamatan'];
    $provinsi = $data['provinsi'];
    $query = "UPDATE pendaftar SET 
                nama_lengkap = '$nama', 
                nisn = '$nisn', 
                tempat_lahir = '$tempat_lahir', 
                tanggal_lahir = '$tanggal_lahir', 
                kelurahan = '$kelurahan',
                kecamatan = '$kecamatan', 
                provinsi = '$provinsi' 
              WHERE id_user = $id";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

?>
