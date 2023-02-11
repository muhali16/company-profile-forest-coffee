<?php 

// database credential
$host = 'localhost';
$user = 'root';
$password = '';
$db = 'lsp_bsi';

try {
    // melakukan koneksi ke database mysql
    $conn = mysqli_connect($host, $user, $password, $db);
} catch (Exception $error) {
    // jika error akan melakukan perintah berikut
    echo "Error: " . $error->getMessage();
    die;
}
