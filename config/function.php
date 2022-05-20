<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "rsgm2");

// query
function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

// function untuk menambahkan data
function input($data) {
    global $conn;
    // ambil data dari element
    $nama = $data["nama"];
    $judul = $data["judul"];
    $deskripsi = $data["deskripsi"];
    $jadwal = $data["jadwal"];
    $keterangan = $data["keterangan"];

    // upload gambar
    $gambar = upload();
    if (!$gambar) {
        return false;
    }

     // query insert data
     $query = "INSERT INTO studikasus 
                VALUE
            ('','$nama','$judul','$deskripsi','$jadwal','$keterangan','$gambar')
            ";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function upload() {
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    // cek apakah tidak ada gambar yang diupload
    if ($error === 4) {
        echo "<script>
                alert('pilih gambar terlebih dahulu!');
            </script>";
        return false;
    }

    // cek apakah yang diupload adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>
                alert('yang anda upload bukan gambar!');
            </script>";
        return false;
    }

    // cek jika ukuran gambar terlalu besar
    // 1mb = 1024000 byte
    if ($ukuranFile > 1000000) {
        echo "<script>
                alert('ukuran gambar terlalu besar!');
            </script>";
        return false;
    }

    // lolos pengecekan, gambar siap diupload
    // generate nama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

   move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

    return $namaFileBaru;


}



function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM studikasus WHERE id = $id");
    return mysqli_affected_rows($conn);
}

// function untuk mengubah data
function ubah($data) {
    global $conn;

    // id data yang akan diubah
    $id = $data["id"];
    $nama = $data["nama"];
    $judul = $data["judul"];
    $deskripsi = $data["deskripsi"];
    $jadwal = $data["jadwal"];
    $keterangan = $data["keterangan"];
    $gambarLama = $data["gambarLama"];

    // cek apakah user pilih gambar baru atau tidak
    if($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }

    

    // query insert data
    $query = "UPDATE studikasus SET
                nama = '$nama',
                judul = '$judul',
                deskripsi = '$deskripsi',
                jadwal = '$jadwal',
                keterangan = '$keterangan',
                gambar = '$gambar'
                WHERE id = $id
                ";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

// live search
function cari($keyword) {
    $query = "SELECT * FROM studikasus WHERE
                judul LIKE '%$keyword%' OR
                deskripsi LIKE '%$keyword%' OR
                keterangan LIKE '%$keyword%' OR
                jadwal LIKE '%$keyword%' OR
                nama LIKE '%$keyword%'
                ";
    return query($query);
}

// registrasi
function registrasi($data) {
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    // cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");

    if (mysqli_fetch_assoc($result)) {
        echo "<script>
                alert('Nama username yang anda gunakan sudah digunakan!');
            </script>";
        return false;
    }

    // cek konfirmasi password
    if($password !== $password2) {
        echo "<script>
                alert('konfirmasi password tidak sesuai!');
            </script>";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // Tambahkan userbaru ke database
    mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password')");

    return mysqli_affected_rows($conn);

}



?>