<?php
session_start();
if( !isset($_SESSION['login'])) {
    header("Location: index.php");
    exit;
}

require 'config/function.php';

$id = $_GET['id'];

if( hapus($id) > 0 ){
    echo "
    <script>
        alert('Kasus berhasil dihapus');
        document.location.href = 'beranda.php';   
    </script>
    ";
} else {
    echo "
    <script>
        alert('Kasus gagal dihapus');
        document.location.href = 'beranda.php';
    </script>
    ";

}

?>